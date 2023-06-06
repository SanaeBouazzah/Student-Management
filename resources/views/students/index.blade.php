@extends('layouts.layout')
@section('title')
    Home
@endsection
@section('content')
<h3>Student Application </h3>
<div>
  @if (session()->has('success'))
  {{  session('success')}}
@endif
</div>
<a href="{{route('students.create')}}" class="btn btn-dark rounded-0 px-4 my-4">Add Student</a>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($students as $student)
        <tr>
          <td>{{$student->id}}</td>
          <td>{{$student->name}}</td>
          <td>{{$student->address}}</td>
          <td>{{$student->mobile}}</td>
          <td class="d-flex justify-content-center align-items-center">
            <div class="mx-2">
              <a href="">Show</a>
            </div>
            <div class="mx-2">
              <a href="">Edit</a>
            </div>
            <div class="mx-2">
              <form action="" method="post" class="mx-2">
                <input type="submit" value="Delete">
              </form>
            </div>
          </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection