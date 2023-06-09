@extends('layouts.layout')
@section('title')
    New Enrollment
@endsection
@section('content')
<h2 class="mb-4">Add a New Enrollment :</h2>
    <form action="{{route('enrollments.store')}}" method="post" style="width:80%; margin:auto;" class="px-4 py-5 shadow-lg">
      @csrf
      <div class="form-group my-3 mx-5">
        <label for="enroll_no" class="mb-2">enroll_no</label>
        <input type="text" class="form-control" id="enroll_no" name="enroll_no" placeholder="Enter the enroll_no">
      </div>
      <div class="form-group my-3 mx-5">
        <label for="batch_id" class="mb-2">batch_id</label>
        {{-- <input type="text" class="form-control" id="batch_id" name="batch_id" placeholder="Enter batch_id"> --}}
      </div>
      <div class="form-group my-3 mx-5">
        <label for="student_id" class="mb-2">student_id</label>
        <select name="student_id" id="student_id" class="form-select" aria-label="Default select example">
          @foreach ($students as $id => $name)
            <option value="{{$id}}">{{$name}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group my-3 mx-5">
        <label for="join_date" class="mb-2">join_date</label>
        <input type="text" class="form-control" id="join_date" name="join_date" placeholder="Enter join_date">
      </div>
      <div class="form-group my-3 mx-5">
        <label for="fee" class="mb-2">fee</label>
        <input type="text" class="form-control" id="fee" name="fee" placeholder="Enter fee">
      </div>
      <div class="mx-5 my-4">
        <input type="submit" class="btn btn-primary form-control " value="submit">
      </div>
    </form>

    <a href="{{route('enrollments.index')}}" class="btn btn-dark rounded-0 px-4 my-4">Back</a>
@endsection