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
        return view('payments.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
          'enrollment_id' => 'required',
          'paid_date' => 'required',
          'paid_date' => 'amount',
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
        return view('payments.edit')->with('payment', $payment);
    }
    public function update(Request $request, Payment $payment)
    {
      $data = $request->validate([
        'enrollment_id' => 'required',
        'paid_date' => 'required',
        'paid_date' => 'amount',
      ]);
      $payment->fill($data)->save();
      return redirect();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
