@extends('layouts.layout')
@section('title')
  | Enrollments
@endsection
@section('content')
<h3>Enrollment Application </h3>
    <div>
      @if (session()->has('success'))
          {{session('success')}}
      @endif
    </div>
    <a href="{{route('enrollments.create')}}" class="btn btn-dark rounded-0 px-3 my-3">Create New Enrollment</a>
<table class="table table-striped">
  <thead>
    <th>ID</th>
    <th>Enroll_no</th>
    <th>batch_id</th>
    <th>student_id</th>
    <th>join_date</th>
    <th>fee</th>
    <th class="text-center">Actions</th>
  </thead>
  <tbody>
    @foreach ($enrollments as $enrollment)
        <tr>
          <td>{{$enrollment->id}}</td>
          <td>{{$enrollment->enroll_no}}</td>
          <td>{{$enrollment->batch->name}}</td>
          <td>{{$enrollment->student->name}}</td>
          <td>{{$enrollment->join_date}}</td>
          <td>{{$enrollment->fee}}</td>
          <td class="d-flex justify-content-center align-items-center">
            <div class="m-2">
              <a href="{{route('enrollments.show', $enrollment)}}" class="text-decoration-none py-2 px-4 bg-dark text-white">Show</a>
            </div>
            <div class="m-2">
              <a href="{{route('enrollments.edit', $enrollment)}}" class="text-decoration-none py-2 px-4 bg-dark text-white ">Edit</a>
            </div>
            <div class="m-2">
              <form action="{{route('enrollments.destroy', $enrollment)}}" method="post" class="m-0">
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