@extends('layouts.layout')
@section('title')
    | Payments
@endsection
@section('content')
<h3>Payment Application </h3>
<div>
  @if (session()->has('success'))
  {{  session('success')}}
@endif
</div>
<a href="{{route('payments.create')}}" class="btn btn-dark rounded-0 px-4 my-4">Add payment</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Enrollment No</th>
      <th scope="col">Paid Date</th>
      <th scope="col">Amount</th>
      <th scope="col" class="text-center">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($payments as $payment)
        <tr>
          <td>{{$payment->id}}</td>
          <td>{{$payment->enrollment->enroll_no}}</td>
          <td>{{$payment->paid_date}}</td>
          <td>{{$payment->amount}}</td>
          <td class="d-flex justify-content-center align-items-center">
            <div class="m-2">
              <a href="{{route('payments.show', $payment)}}" class="text-decoration-none py-2 px-4 bg-dark text-white">Show</a>
            </div>
            <div class="m-2">
              <a href="{{route('payments.edit', $payment)}}" class="text-decoration-none py-2 px-4 bg-dark text-white ">Edit</a>
            </div>
            <div class="m-2">
              <form action="{{route('payments.destroy', $payment)}}" method="post" class="m-0">
                @csrf
                @method('delete')
                  <div>
                    <input type="submit" value="Delete" class="py-2 px-4 bg-primary text-white border-0">
                  </div>
              </form>
            </div>
            <div class="m-2">
              <a href="{{route('')}}" class="btn btn-dark">Print</a>
            </div>
          </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection