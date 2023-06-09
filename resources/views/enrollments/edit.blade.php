@extends('layouts.layout')
@section('title')
    Edit Enrollment
@endsection
@section('content')
<h2 class="mb-4"> Edit Enrollment :</h2>
    <form action="{{route('enrollments.update', $enrollment)}}" method="post" style="width:80%; margin:auto;" class="px-4 py-5 shadow-lg">
      @csrf
      @method('PUT')
      <div class="form-group my-3 mx-5">
        <label for="enroll_no" class="mb-2">Enroll_no</label>
        <input type="text" class="form-control" id="enroll_no" name="enroll_no" placeholder="Enter the enroll_no" value="{{$enrollment->enroll_no}}">
      </div>
      <div class="form-group my-3 mx-5">
        <label for="batch_id" class="mb-2">Name Batch</label>
        <select name="batch_id" id="batch_id" class="form-select" aria-label="Default select example">
          @foreach ($batches as $id => $name)
            <option value="{{$id}}">{{$name}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group my-3 mx-5">
        <label for="student_id" class="mb-2">Name Student</label>
        <select name="student_id" id="student_id" class="form-select" aria-label="Default select example">
          @foreach ($students as $id => $name)
            <option value="{{$id}}">{{$name}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group my-3 mx-5">
        <label for="join_date" class="mb-2">join_date</label>
        <input type="text" class="form-control" id="join_date" name="join_date" placeholder="Enter join_date" value="{{$enrollment->join_date}}">
      </div>
      <div class="form-group my-3 mx-5">
        <label for="fee" class="mb-2">fee</label>
        <input type="text" class="form-control" id="fee" name="fee" placeholder="Enter fee" value="{{$enrollment->fee}}">
      </div>
      <div class="mx-5 my-4">
        <input type="submit" class="btn btn-primary form-control " value="submit">
      </div>
    </form>

    <a href="{{route('enrollments.index')}}" class="btn btn-dark rounded-0 px-4 my-4">Back</a>
@endsection