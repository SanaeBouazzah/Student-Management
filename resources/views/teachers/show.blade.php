@extends('layouts.layout')
@section('title')
    Show
@endsection
@section('content')
   <h2> {{$teacher->name}}</h2>
   <div class="card">
    <h5 class="card-header">Profile</h5>
    <div class="card-body">
      <h5 class="card-title">{{$teacher->name}}</h5>
      <p class="card-text">{{$teacher->address}}</p>
      <p>{{$teacher->mobile}}</p>
      <a href="{{route('teachers.index')}}" class="btn btn-primary">Back</a>
    </div>
  </div>
@endsection