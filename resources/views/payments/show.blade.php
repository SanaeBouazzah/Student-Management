@extends('layouts.layout')
@section('title')
    Show
@endsection
@section('content')
   <h2> {{$student->name}}</h2>
   <div class="card">
    <h5 class="card-header">Profile</h5>
    <div class="card-body">
      <h5 class="card-title">{{$student->name}}</h5>
      <p class="card-text">{{$student->address}}</p>
      <p>{{$student->mobile}}</p>
      <a href="{{route('students.index')}}" class="btn btn-primary">Back</a>
    </div>
  </div>
@endsection