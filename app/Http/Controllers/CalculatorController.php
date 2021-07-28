<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SummaryRequest;

class CalculatorController extends Controller
{
    public function calcSum(SummaryRequest $request){
        return response()->json($request->firstNumber + $request->secondNumber, 200);
    }
}
