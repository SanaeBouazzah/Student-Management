@extends('layouts.layout')
@section('title')
    Edit Course
@endsection
@section('content')
<h2 class="mb-4"> Edit Course :</h2>
    <form action="{{route('courses.update', $course)}}" method="post" style="width:80%; margin:auto;" class="px-4 py-5 shadow-lg">
      @csrf
      @method('PUT')
      <div class="form-group my-3 mx-5">
        <label for="name" class="mb-2">Name Course</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name the course" value="{{$course->name}}">
      </div>
      <div class="form-group my-3 mx-5">
        <label for="syllabus" class="mb-2">syllabus</label>
        <input type="text" class="form-control" id="syllabus" name="syllabus" placeholder="Enter syllabus" value="{{$course->syllabus}}">
      </div>
      <div class="form-group mx-5 my-3">
        <label for="duration" class="mb-2">Duration</label>
        <input type="text" class="form-control" id="duration" name="duration" placeholder="Enter duration" value="{{$course->duration}}">
      </div>
      <div class="mx-5 my-4">
        <input type="submit" class="btn btn-primary form-control " value="submit">
      </div>
    </form>

    <a href="{{route('courses.index')}}" class="btn btn-dark rounded-0 px-4 my-4">Back</a>
@endsection