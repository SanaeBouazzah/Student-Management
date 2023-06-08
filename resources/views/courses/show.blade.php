@extends('layouts.layout')
@section('title')
    Show
@endsection
@section('content')
<h2> {{$course->name}}</h2>
<div class="card">
 <h5 class="card-header">Profile</h5>
 <div class="card-body">
   <h5 class="card-title">{{$course->name}}</h5>
   <p class="card-text">{{$course->syllabus}}</p>
   <p>{{$course->duration()}}</p>
   <a href="{{route('courses.index')}}" class="btn btn-primary">Back</a>
 </div>
</div>
@endsection