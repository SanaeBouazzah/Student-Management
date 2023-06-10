@extends('layouts.layout')
@section('title')
    Add
@endsection
@section('content')
<div class="mt-4">
  <h2 class="mb-4">Add a Student :</h2>
<form style="width:80%; margin:auto;" class="px-4 py-5 shadow-lg" action="{{route('students.store')}}" method="POST">
  @csrf
  <div class="form-group my-3 mx-5">
    <label for="name" class="mb-2">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
  </div>
  <div class="form-group my-3 mx-5">
    <label for="address" class="mb-2">Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address">
  </div>
  <div class="form-group mx-5 my-3">
    <label for="mobile" class="mb-2">mobile</label>
    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter your mobile">
  </div>
  <div class="mx-5 my-4">
    <input type="submit" class="btn btn-primary form-control " value="submit">
  </div>
  <div class="form-group mx-5Student-Management"></div>
</form>
<a href="{{route('students.index')}}" class="btn btn-dark rounded-0 px-4 my-4">Back</a>
</div>
@endsection