<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollment;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::all();
        return view('payments.index', compact('payments'));
    }
    public function create()
    {
      $enrollments = Enrollment::pluck('enroll_no', 'id');
        return view('payments.create', compact('enrollments'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
          'enrollment_id' => 'required',
          'paid_date' => 'required',
          'amount' => 'required',
        ]);
        Payment::create($data);
        return redirect()->route('payments.index')->with('success', 'you added payment successfully.');
    }
    public function show(Payment $payment)
    {
        return view('payments.show')->with('payment', $payment);
    }
    public function edit(Payment $payment)
    {  
      $enrollments = Enrollment::pluck('enroll_no', 'id');
        return view('payments.edit', compact('enrollments'))->with('payment', $payment);
    }
    public function update(Request $request, Payment $payment)
    {
      $data = $request->validate([
        'enrollment_id' => 'required',
        'paid_date' => 'required',
        'amount' => 'required',
      ]);
      $payment->fill($data)->save();
      return redirect()->route('payments.index')->with('success', 'you updated payment successfully.');
    }
    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect()->route('payments.index')->with('success', 'you deleted payment successfully.');
    }
}
