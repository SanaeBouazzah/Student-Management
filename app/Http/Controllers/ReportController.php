<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ReportController;
use Illuminate\Http\Request;
use App;
use Auth;
use App\Models\Payment;

class ReportController extends Controller
{
  public function report1($pid){
    $payment = Payment::find($pid);
    $pdf = App::make('dompdf.wrapper');
    $print = "<div style='margin20px, padding:20px'>;"
    $print .= "";
  }
}  