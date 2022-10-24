<?php

namespace App\Http\Livewire;

use App\Models\Biblio;
use App\Models\Item;
use Illuminate\Support\Facades\DB;
use Mediconesystems\LivewireDatatables\{
    Http\Livewire\LivewireDatatable,
    Column,
    NumberColumn,
    Action
};


class ItemsTable extends LivewireDatatable
{
    public $model = Biblio::class;

    // public $hideable = 'select';
    // public $exportable = true;
    public $mail = false;



    public function Builder(){
        return Biblio::query()
                        ->join('items','items.biblionumber','biblio.biblionumber')
                        ->whereRaw('itemlost = 0')
                        ->groupBy('title');

    }

    public function columns()
    {
        return[
            Column::checkbox('biblionumber')
                        ->excludeFromExport()
                        ->label('check'),

            Column::raw('CONCAT(title," ", IFNULL(subtitle, "")) AS fulltitle')
                        ->label('Titre')
                        ->filterable()
                        ->searchable()
                        ->headerAlignCenter(),


            Column::name('author')
                        ->label('Auteur')
                        ->filterable()
                        ->searchable()
                        ->headerAlignCenter(),

            NumberColumn::raw('COUNT(items.biblionumber) AS total')
                        ->label('nombre de copie')
                        ->filterable()
                        ->searchable()
                        ->headerAlignCenter(),

            Column::name('items.location')
                        ->label('location')
                        ->filterable(['Langues, Lettres et Arts','Sciences et Technologies','Sciences Humaines, Juridiques et Economiques'])
                        ->searchable()
                        ->headerAlignCenter(),
        ];
    }
    public function buildActions()
    {
        return [

            Action::value('csv')->label('CSV')->export('Fonds.csv'),
            Action::value('html')->label('HTML')->export('Fonds.html'),
            Action::value('xlsx')->label('XLSX')->export('Fonds.xlsx')//->styles($this->exportStyles)->widths($this->exportWidths)

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
