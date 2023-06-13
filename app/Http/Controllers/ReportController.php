<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ReportController;
use Illuminate\Http\Request;
use App;
use Auth;
use App\Models\Payment;

class ReportController extends Controller
{
  $payment = Payment::find($pid);
  $pdf = App::make('dompdf.wrapper');
  $print = "<div>;"
}  