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
    </tr>
  </thead>
  <tbody>
    @foreach ($students as $student)
        <tr>
          <td>{{$student->id}}</td>
          <td>{{$student->name}}</td>
          <td>{{$student->address}}</td>
          <td>{{$student->mobile}}</td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection