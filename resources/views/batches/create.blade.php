@extends('layouts.layout')
@section('title')
    New Batch
@endsection
@section('content')
<h2 class="mb-4">Add a New Batch :</h2>
    <form action="{{route('batches.store')}}" method="post" style="width:80%; margin:auto;" class="px-4 py-5 shadow-lg">
      @csrf
      <div class="form-group my-3 mx-5">
        <label for="name" class="mb-2">Name batch</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name the batch">
      </div>
      <div class="form-group my-3 mx-5">
        <label for="course_id" class="mb-2">Course</label><br/>
        {{-- <input type="text" class="form-control" id="course_id" name="course_id" placeholder="Enter Course name"> --}}
        <select name="course_id" id="course_id" class="form-select" aria-label="Default select example">
          @foreach ($courses as $id => $name)
            <option value="{{$id}}">{{$name}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group mx-5 my-3">
        <label for="start_date" class="mb-2">Start Date</label>
        <input type="text" class="form-control" id="start_date" name="start_date" placeholder="Enter start date">
      </div>
      <div class="mx-5 my-4">
        <input type="submit" class="btn btn-primary form-control " value="Add a Batch">
      </div>
    </form>

    <a href="{{route('batches.index')}}" class="btn btn-dark rounded-0 px-4 my-4">Back</a>
@endsection