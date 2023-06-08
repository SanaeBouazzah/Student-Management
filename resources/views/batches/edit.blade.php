@extends('layouts.layout')Batche
@section('title')
    Edit Batch
@endsection
@section('content')
<h2 class="mb-4"> Edit Batch :</h2>
    <form action="{{route('batches.update', $batch)}}" method="post" style="width:80%; margin:auto;" class="px-4 py-5 shadow-lg">
      @csrf
      @method('PUT')
      <div class="form-group my-3 mx-5">
        <label for="name" class="mb-2">Name batche</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name the batche" value="{{$batch->name}}">
      </div>
      <div class="form-group my-3 mx-5">
        <label for="course_id" class="mb-2">Course Name</label>
        <input type="text" class="form-control" id="course_id" name="course_id" placeholder="Enter course_id" value="{{$batch->course->name}}">
      </div>
      <div class="form-group mx-5 my-3">
        <label for="start_date" class="mb-2">Start Date</label>
        <input type="text" class="form-control" id="start_date" name="start_date" placeholder="Enter duration" value="{{$batch->start_date}}">
      </div>
      <div class="mx-5 my-4">
        <input type="submit" class="btn btn-primary form-control " value="submit">
      </div>
    </form>

    <a href="{{route('batches.index')}}" class="btn btn-dark rounded-0 px-4 my-4">Back</a>
@endsection