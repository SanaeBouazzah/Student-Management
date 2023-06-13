@extends('layouts.layout')
@section('title')
    | Courses
@endsection
@section('content')
<h3>Course Application </h3>
    <div>
      @if (session()->has('success'))
          {{session('success')}}
      @endif
    </div>
    <a href="{{route('courses.create')}}" class="btn btn-dark rounded-0 px-3 my-3">Create New Course</a>
<table class="table table-striped">
  <thead>
    <th>ID</th>
    <th>Name Course</th>
    <th>Syllabus</th>
    <th>Duration</th>
    <th class="text-center">Actions</th>
  </thead>
  <tbody>
    @foreach ($courses as $course)
        <tr>
          <td>{{$course->id}}</td>
          <td>{{$course->name}}</td>
          <td>{{$course->syllabus}}</td>
          <td>{{$course->duration()}}</td>
          <td class="d-flex justify-content-center align-items-center">
            <div class="m-2">
              <a href="{{route('courses.show', $course)}}" class="text-decoration-none py-2 px-4 bg-dark text-white">Show</a>
            </div>
            <div class="m-2">
              <a href="{{route('courses.edit', $course)}}" class="text-decoration-none py-2 px-4 bg-dark text-white ">Edit</a>
            </div>
            <div class="m-2">
              <form action="{{route('courses.destroy', $course)}}" method="post" class="m-0">
                @csrf
                @method('delete')
                  <div>
                    <input type="submit" value="Delete" class="py-2 px-4 bg-primary text-white border-0">
                  </div>
              </form>
            </div>
          </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection