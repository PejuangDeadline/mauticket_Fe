<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Trait
use App\Traits\AuthTrait;
use App\Traits\ChartTrait;

class ChartController extends Controller
{
    use AuthTrait;
    use ChartTrait;

    public function indexchart($id_user)
    {

        $tokenAPI = $this->getTokenAPICMS();
        $chart = $this->getChart($tokenAPI, $id_user);

        // dd($chart);

        return view('chart.chart', compact('chart'));

    }
    public function delete($id)
    {
        // dd($id);
        $tokenAPI = $this->getTokenAPICMS();
        $deletechart = $this->deleteChart($tokenAPI, $id);

        if($deletechart->success=="true"){
            session()->flash('deleteCart', true);
            return redirect()->back();
        } else {
            session()->flash('faileddeleteCart', true);
            return redirect()->back();
        }
    }

    public function checkoutchart(Request $request)
    {
        dd($request->all());
    }
}
