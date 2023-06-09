@extends('layouts.layout')
@section('title')
    Edit
@endsection
@section('content')
<div class="mt-4">
  <h2 class="mb-4">Edit a Payment :</h2>
<form style="width:80%; margin:auto;" class="px-4 py-5 shadow-lg" action="{{route('payments.store')}}" method="POST">
  @csrf
  <div class="form-group my-3 mx-5">
    <label for="enrollment_id" class="mb-2">Enrollment No</label><br/>
    <select name="enrollment_id" id="enrollment_id" class="form-select" aria-label="Default select example" value=""
    >
      @foreach ($enrollments as $id => $enroll_no)
        <option value="{{$id}}">{{$enroll_no}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group my-3 mx-5">
    <label for="paid_date" class="mb-2">Paid Date</label>
    <input type="text" class="form-control" id="paid_date" name="paid_date" placeholder="Enter your paid date">
  </div>
  <div class="form-group my-3 mx-5">
    <label for="amount" class="mb-2">Amount</label>
    <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter your amount">
  </div>
  <div class="mx-5 my-4">
    <input type="submit" class="btn btn-primary form-control " value="submit">
  </div>
</form>
<a href="{{route('payments.index')}}" class="btn btn-dark rounded-0 px-4 my-4">Back</a>
</div>
@endsection