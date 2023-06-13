@extends('layouts.layout')
@section('title')
    Edit
@endsection
@section('content')
<div class="mt-4">
  <h2 class="mb-4">Edit a Student :</h2>
<form style="width:80%; margin:auto;" class="px-4 py-5 shadow-lg" action="{{route('students.update', $student)}}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group my-3 mx-5">
    <label for="name" class="mb-2">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="{{$student->name}}">
  </div>
  <div class="form-group my-3 mx-5">
    <label for="address" class="mb-2">Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address" value="{{$student->address}}">
  </div>
  <div class="form-group mx-5 my-3">
    <label for="mobile" class="mb-2">Mobile</label>
    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter your mobile" value="{{$student->mobile}}">
  </div>
  <div class="form-group mx-5 my-3">
    <label for="image" class="mb-2">Upload Image</label>
    <input type="file" class="form-control" id="image" name="image">
  </div>
  <div class="mx-5 my-4">
    <input type="submit" class="btn btn-primary form-control " value="submit">
  </div>
</form>
<a href="{{route('students.index')}}" class="btn btn-dark rounded-0 px-4 my-4">Back</a>
</div>
@endsection