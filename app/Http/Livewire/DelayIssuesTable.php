<?php

namespace App\Http\Livewire;


use Mediconesystems\LivewireDatatables\{
    Http\Livewire\LivewireDatatable,
    Column,
    DateColumn,
    Action,
    BooleanColumn
};

use App\Mail\MailGoogle;
use App\Traits\ToastAlert;
use App\Models\Issue;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class DelayIssuesTable extends LivewireDatatable
{
    use ToastAlert;

    public $model = Issue::class;

    // public $hideable = 'select';
    // public $exportable = true;
    public $mail = true;


    public function addToast(){
        $this->toast(message:'message envoyé !',position:'center');
    }

    public function Builder(){
        return Issue::query()
                    ->whereRaw('now() > date_due')
                    ->join('borrowers','borrowers.borrowernumber','issues.borrowernumber')
                    ->join('items','items.itemnumber','issues.itemnumber')
                    ->join('biblio','biblio.biblionumber','items.biblionumber');
    }

    public function columns()
    {
        return[
            Column::checkbox('issue_id')
                        ->excludeFromExport()
                        ->label('check')
                        ->searchable(),

            Column::raw('CONCAT(biblio.title," ", IFNULL(biblio.subtitle, "")) AS fulltitle')
                        ->label('Titre')
                        ->filterable()
                        ->searchable()
                        ->headerAlignCenter(),

            Column::raw('CONCAT(borrowers.firstname," ", borrowers.surname) AS fullname')
                        ->label('Nom Complet')
                        ->filterable()
                        ->searchable()
                        ->headerAlignCenter(),

            Column::name('borrower.cardnumber')
                        ->label('Apogee')
                        ->filterable()
                        ->searchable()
                        ->alignCenter(),
            Column::name('borrower.email')
                        ->label('Email')
                        ->filterable()
                        ->searchable()
                        ->headerAlignCenter(),
            DateColumn::name('date_due')
                        ->label('date de retour')
                        ->filterable()
                        ->searchable()
                        ->alignCenter(),

            Column::callback(['issue_id','borrower.firstname','borrower.email','biblio.title','date_due','biblio.subtitle'], function ($issue_id,$name,$email,$title,$date,$subtitle) {
                return view('table-actions', ['issue_id' => $issue_id,'name'=>$name,'email'=>$email,'title'=>$title,'date'=>$date,'subtitle'=>$subtitle]);
            })->unsortable()->excludeFromExport(),

            // BooleanColumn::name('issue_id')
            //     ->label('Email Verified')
            //     ->filterable(),
        ];
    }

    public function sendMail($email, $name, $title,$date,$subtitle) {

        $data=[
                'subject' => 'Retard',
                'body' => "Bonjour ".$name. "\n\nOn vous annonce que vous avez depassé la date limite ".Carbon::parse($date)->format('d/m/Y')." du prêt de livre sous le titre : " .$title." ".$subtitle.". \nMerci de le rendre dans les plus brefs délais"
    ];
        Mail::to($email)->send(new MailGoogle($data));
        // session()->flash('message','message envoyé');
    }



    public function sendMails() {

        $issues=Issue::whereIn('issue_id',$this->selected)->get();
        foreach ($issues as $issue) {
            $data=[
            'subject' => 'Retard',
            'body' => "Bonjour ".$issue->borrower->firstname. "\n\nOn vous annonce que vous avez depassé la date limite ".Carbon::parse($issue->date_due)->format('d/m/Y')." du prêt de livre sous le titre : " .$issue->item->biblio->title." ".$issue->item->biblio->subtitle. "\nMerci de le rendre dans les plus brefs délais"
        ];
                Mail::to($issue->borrower->email)->send(new MailGoogle($data));
        }

    }

    public function buildActions()
    {
        return [

            Action::value('csv')->label('CSV')->export('DelayIssues.csv'),
            Action::value('html')->label('HTML')->export('DelayIssues.html'),
            Action::value('xlsx')->label('XLSX')->export('DelayIssues.xlsx')->styles($this->exportStyles)->widths($this->exportWidths),
            // Action::value('pdf')->label('PDF')->export('DelayIssues.pdf')

        ];
    }

    public function getExportStylesProperty()
    {
        return [
            '1'  => ['font' => ['bold' => true],'fill' => ['color' => array('rgb'=>'312783')]],
        ];
    }

    public function getExportWidthsProperty()
    {
        return [
            'A' => 55,
            'B' => 45,
        ];
    }
}
