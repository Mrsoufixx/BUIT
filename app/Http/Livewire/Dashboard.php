<?php

namespace App\Http\Livewire;

use App\Models\Issue;
use App\Models\OldIssue;
use App\Models\Borrower;
use App\Models\Biblio;
use App\Models\Item;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\LineChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use Faker\Factory;
use Livewire\Component;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class Dashboard extends Component
{

    public $firstRun = true;

    public $showDataLabels = false;



    public function render ( )
    {

    //color

    $faker= Factory::create( );

    // Card 1
    $count_borrower= Borrower::count();
    $count_oldissue=OldIssue::count();
    $count_itemnumber=OldIssue::distinct('itemnumber')->count();

    // Card 2
    $count_livre_op=Issue::query()->whereRaw('date_due > now()')->count();

    //Card3
    $countretard=Issue::query()->whereRaw('now() > date_due')->count();

    //Card4
    $count_exemplaire=Item::query()->whereRaw('itemlost = 0')->count();
    $count_notices=Biblio::query()
            ->join('items','items.biblionumber','biblio.biblionumber')
            ->selectRaw('count(biblioitemnumber) as nbr')
            ->distinct('biblioitemnumber')
            ->where('itemlost',0)
            ->count();
    $count_livres_emp_ndouble=OldIssue::query()
                        ->join('items','items.itemnumber','old_issues.itemnumber')
                        ->join('biblio','biblio.biblionumber','items.biblionumber')
                        ->distinct('biblio.biblionumber')->count();

    //table top livres
    $tablivres=OldIssue::query()
                        ->join('items','items.itemnumber','old_issues.itemnumber')
                        ->join('biblio','biblio.biblionumber','items.biblionumber')
                        ->selectRaw('biblio.title, count(biblio.biblionumber) as nombre')
                        // ->withCount('nombre')
                        ->orderBy('nombre', 'desc')
                        ->groupBy('biblio.title')
                        ->limit(10)
                        ->get();

    // table top preteur
    $tabpret=OldIssue::query()
                        ->join('borrowers','borrowers.borrowernumber','old_issues.borrowernumber')
                        ->join('categories','categories.categorycode','borrowers.categorycode')
                        ->join('items','items.itemnumber','old_issues.itemnumber')
                        ->join('biblio','biblio.biblionumber','items.biblionumber')
                        ->selectRaw('CONCAT(borrowers.firstname," ",borrowers.surname) as fullname, count(borrowers.borrowernumber) as nombre ,categories.description')
                        ->orderBy('nombre', 'desc')
                        ->groupBy('fullname')
                        ->limit(10)
                        ->get();

    //columnchart
    $countcategorie=OldIssue::query()

                        ->join('borrowers','borrowers.borrowernumber','old_issues.borrowernumber')
                        ->join('categories','categories.categorycode','borrowers.categorycode')
                        ->selectRaw('count(borrowers.borrowernumber) as nombre ,categories.description')
                                            ->groupBy('categories.description')
                                            ->get();





    $chart =(new columnChartModel())->setDataLabelsEnabled(true)->setAnimated(true)->legendPositionTop()->setXAxisVisible(false);
    foreach ($countcategorie as $categorie) {
        $chart->addColumn($categorie->description, $categorie->nombre, $faker->hexColor());
    }

    //piechart
    $countgenre=OldIssue::query()
                        ->join('items','items.itemnumber','old_issues.itemnumber')
                        ->whereNotNull('items.location')
                        ->selectRaw('count(items.itemnumber) as nombre ,items.location')
                                            ->groupBy('items.location')
                                            ->get();

    $piechart =(new PieChartModel())->withDataLabels()->setAnimated(true);
    foreach ($countgenre as $genre) {
        $piechart->addSlice($genre->location, $genre->nombre, $faker->hexColor());
    }

    //linechart
    $livredate=OldIssue::query()->selectRaw('count(issue_id) as count, MONTHNAME(returndate) as month, month(returndate) as months')
            ->groupby('month')
            ->orderBy('months', 'ASC')
            ->get();

    $linechart=(new LineChartModel())->setDataLabelsEnabled(true)->setAnimated(true)->setSmoothCurve();
    foreach ($livredate as $item) {
        $linechart->addPoint($item->month, $item->count);
    }

                        // ->addPoint('Mars', $livredate[0]->count)
                        // ->addPoint('Avril', $livredate[1]->count)
                        // ->addPoint('Mai', $livredate[2]->count)
                        // ->addPoint('Join', $livredate[3]->count)
                        // ->addPoint('Juillet', $livredate[4]->count)
                    ;
        return view('livewire.dashboard',compact(
                                                    'count_borrower',
                                                    'count_oldissue',
                                                    'count_itemnumber',
                                                    'count_livre_op',
                                                    'countretard',
                                                    'count_exemplaire',
                                                    'count_notices',
                                                    'count_livres_emp_ndouble',
                                                    'tablivres',
                                                    'tabpret',
                                                    'chart',
                                                    'piechart',
                                                    'linechart'

                                                ));
    }
}
