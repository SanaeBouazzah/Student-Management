<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
  $payment = Payment::find($pid);
  $pdf = App::make('dompdf.wrapper');
}  