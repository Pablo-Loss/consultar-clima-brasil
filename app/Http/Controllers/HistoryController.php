<?php

namespace App\Http\Controllers;

use App\Models\Climate;
use Illuminate\Http\Request;
use Log;

class HistoryController extends Controller
{
    public function index() {
        $climates = Climate::all();
        return view('history.index', compact('climates'));
    }

    public function compareIndex() {
        return view('compare.index');
    }

    public function comparison(Request $request) {
        $cidade1 = $request->input('cidade1');
        $cidade2 = $request->input('cidade2');
        $climateC1 = Climate::where('cidade', '=', $cidade1)->orderByDesc('id')->first();
        $climateC2 = Climate::where('cidade', '=', $cidade2)->orderByDesc('id')->first();
        return view('compare.comparison', compact('climateC1', 'climateC2'));
    }
}
