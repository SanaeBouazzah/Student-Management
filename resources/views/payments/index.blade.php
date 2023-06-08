@extends('layouts.layout')
@section('title')
    Home
@endsection
@section('content')
<h3>payment Application </h3>
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
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile</th>
      <th scope="col" class="text-center">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($payments as $payment)
        <tr>
          <td>{{$payment->id}}</td>
          <td>{{$payment->name}}</td>
          <td>{{$payment->address}}</td>
          <td>{{$payment->mobile}}</td>
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
          </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection