<?php

namespace App\Http\Livewire;

use App\Models\OldIssue;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Action;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\DateColumn;

class OldIssuesTable extends LivewireDatatable
{
    public $model = OldIssue::class;

    public $hideable = 'select';
    // public $exportable = true;
    public $mail = false;

    public function Builder(){
        return OldIssue::query()
        ->join('borrowers','borrowers.borrowernumber','old_issues.borrowernumber')
        ->join('categories','categories.categorycode','borrowers.categorycode')
        ->join('items','items.itemnumber','old_issues.itemnumber')
        ->join('biblio','biblio.biblionumber','items.biblionumber');
    }

    public function columns()
    {
        return [


            Column::checkbox('issue_id')
                        ->excludeFromExport()
                        ->label('check')
                        ->alignCenter()
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
                        ->filterable()
                        ->searchable()
                        ->label('Apogee')
                        ->alignCenter()
                        ,
            Column::name('categories.description')
                        ->label('Fonction')
                        ->filterable(['Etudiant','Professeurs','Public','Staff Bibliothèque Universitaire','test'])
                        ->searchable()
                        ->alignCenter()
                        ,
            Column::name('borrower.email')
                ->filterable()
                ->searchable()
                ->hide()
                ->label('Email')
                ->headerAlignCenter()
                ,
            DateColumn::name('returndate')
                ->filterable()
                ->label('Rendre')
                ->alignCenter()
                ->searchable(),
        ];

    }

    public function buildActions()
    {
        return [

            Action::value('csv')->label('CSV')->export('OldIssues.csv'),
            Action::value('html')->label('HTML')->export('OldIssues.html'),
            Action::value('xlsx')->label('XLSX')->export('OldIssues.xlsx')
            ->styles($this->exportStyles)->widths($this->exportWidths)

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
            'A' => 70,
            'B' => 25,
        ];
    }

}
