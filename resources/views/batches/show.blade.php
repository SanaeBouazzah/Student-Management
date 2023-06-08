@extends('layouts.layout')
@section('title')
    Show
@endsection
@section('content')
<h2> {{$batch->name}}</h2>
<div class="card">
 <h5 class="card-header">Profile</h5>
 <div class="card-body">
   <h5 class="card-title">{{$batch->name}}</h5>
   <p class="card-text">{{$batch->course->name}}</p>
   <p>{{$batch->start_date}}</p>
   <a href="{{route('batches.index')}}" class="btn btn-primary">Back</a>
 </div>
</div>
@endsection