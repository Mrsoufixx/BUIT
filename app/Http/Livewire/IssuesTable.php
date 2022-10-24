<?php

namespace App\Http\Livewire;

use App\Models\Issue;
use Mediconesystems\LivewireDatatables\Action;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;


class IssuesTable extends LivewireDatatable
{
    public $model = Issue::class;

    // public $hideable = 'select';
    // public $exportable = true;
    public $mail = false;


    public function Builder(){
        return Issue::query()
        ->join('items','items.itemnumber','issues.itemnumber')
        ->join('biblio','biblio.biblionumber','items.biblionumber');

    }

    public function columns()
    {
        return [

            Column::checkbox('issue_id')
                        ->excludeFromExport()
                        ->searchable()
                        ->label('check'),
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
                        ->alignCenter(),

            Column::name('borrower.email')
                        ->filterable()
                        ->searchable()
                        ->label('Email')
                        ->headerAlignCenter(),
            DateColumn::name('date_due')
                        ->filterable()
                        ->label('date à rendre')
                        ->searchable()
                        ->alignCenter()
                        ,
        ];

    }

    public function buildActions()
    {
        return [

            Action::value('csv')->label('CSV')->export('Issues.csv'),
            Action::value('html')->label('HTML')->export('Issues.html'),
            Action::value('xlsx')->label('XLSX')->export('Issues.xlsx')//->styles($this->exportStyles)->widths($this->exportWidths)

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
