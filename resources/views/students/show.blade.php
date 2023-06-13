@extends('layouts.layout')
@section('title')
    Show
@endsection
@section('content')
   <h2> {{$student->name}}</h2>
  <div class="d-flex justify-content-start my-3" style="width:60%;">
    <div class="image px-2">
      <img src="{{asset('storage/' . $student->image)}}" alt="" 
      style="object-fit:cover" width="140px" height="140px">
    </div>
     <div class="rep px-2">
      <h5 class="card-header">Profile</h5>
      <div class="card-body">
        <h5 class="card-title">{{$student->name}}</h5>
        <p class="card-text">{{$student->address}}</p>
        <p>{{$student->mobile}}</p>
        <a href="{{route('students.index')}}" class="btn btn-primary">Back</a>
      </div>
    </div>
  </div>
@endsection