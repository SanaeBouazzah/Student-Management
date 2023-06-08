@extends('layouts.layout')
@section('title')
    Show
@endsection
@section('content')
<h2> {{$enrollment->name}}</h2>
<div class="card">
 <h5 class="card-header">Profile</h5>
 <div class="card-body">
   <h5 class="card-title">{{$enrollment->enroll_no}}</h5>
   <p class="card-text">{{$enrollment->batch->name}}</p>
   <p class="card-text">{{$enrollment->student->name}}</p>
   <p class="card-text">{{$enrollment->join_date}}</p>
   <p class="card-text">{{$enrollment->fee}}</p>
   <a href="{{route('enrollments.index')}}" class="btn btn-primary">Back</a>
 </div>
</div>
@endsection