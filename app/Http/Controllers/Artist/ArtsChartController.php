<?php

namespace App\Http\Controllers\artist;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

/**
 * Class ArtsChartController
 * @package App\Http\Controllers\artist
 */
class ArtsChartController extends Controller
{

    /**
     * Returns view Object of the artChartView
     *
     * @author Sinthujan G.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view()
    {
        return view('pages\Artist\artChartView');
    }

    /**
     * Returns json encoded data retreived on the sum of
     * payments for each month to be received on the view
     * using AJAX.
     *
     * @author Sinthujan G.
     * @return string
     */
    public function colData()
    {
        $data = DB::select('SELECT DATE_FORMAT(payDate,\'%M\') as SalesMonth,
                            SUM(totalAmount) AS TotalSales
                            FROM payments
                            GROUP BY YEAR(payDate), MONTH(payDate)
                            ORDER BY YEAR(payDate), MONTH(payDate)');

        if(count($data) == 0)
            return 'null';
        $labels = array();
        $priceDataset = array();

        foreach ($data as $view) {
            array_push($labels,$view->SalesMonth);
            array_push($priceDataset, $view->TotalSales);
        }

        $viewData = array('labels'=>$labels, 'datasets'=> array (
            array('label'=> "Price",
                'fillColor'=> "rgba(60,141,188,0.9)",
                'strokeColor'=> "rgba(60,141,188,0.8)",
                'pointColor'=> "#3b8bba",
                'pointStrokeColor'=>"rgba(60,141,188,1)",
                'pointhighlightFill'=> "#fff",
                'pointhighlightStroke'=> "rgba(60,141,188,1)",
                'data'=>$priceDataset)
        ));
        return (json_encode($viewData));
    }
}
