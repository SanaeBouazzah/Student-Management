<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Auth;
use App\Models\Payment;

class ReportController extends Controller
{
  public function report1($pid){
    $payment = Payment::find($pid);
    $pdf = App::make('dompdf.wrapper');
    $print = "<div style='margin20px, padding:20px'>";
    $print .= "<h1>Payment Receipt</h1>";
    $print .= "<hr/>";
    $print .= "<p>Receipt No: <b>" . $pid . "</b> </p>";

    $print .= "<tr>";
    $print .= "<td></td>";
    $print .= "<td></td>";
    $print .= "</tr>";
    $print .= "<tr>";
    $print .= "<td></td>";
    $print .= "<td></td>";
    $print .= "</tr>";
    $print .= "<tr>";
    $print .= "<td><h3>" . $payment->enrollment->batch->name . "</h3></td>";
    $print .= "<td><h3>" . $payment->amount . "</h3></td>";
    $print .= "</tr>";
    $print .= "</table>";
    $print .= "<hr/>";
    $print .= "<span>Printed Date : <b>" . date('Y-m-d') . "</b></span>";
    $print .= "</div>";
    $pdf->loadHTML($print);
    return $pdf->stream();
  }
}  