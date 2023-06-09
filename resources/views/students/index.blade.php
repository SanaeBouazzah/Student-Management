@extends('layouts.layout')
@section('title')
  | Students
@endsection
@section('content')
<h3>Student Application </h3>
<div>
  @if (session()->has('success'))
  <div class="alert alert-primary" role="alert">
    {{  session('success')}}
  </div>
@endif
</div>
<a href="{{route('students.create')}}" class="btn btn-dark rounded-0 px-4 my-1">Add Student</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile</th>
      <th scope="col" class="text-center">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($students as $student)
        <tr>
          <td>{{$student->id}}</td>
          <td><img class="rounded-circle" src="{{asset('storage/'. $student->image)}}" 
            alt="" width="50px" height="50px" style="object-fit: cover"></td>
          <td>{{$student->name}}</td>
          <td>{{$student->address}}</td>
          <td>{{$student->mobile}}</td>
          <td class="d-flex justify-content-center align-items-center">
            <div class="m-2">
              <a href="{{route('students.show', $student)}}" class="text-decoration-none py-2 px-4 bg-dark text-white">Show</a>
            </div>
            <div class="m-2">
              <a href="{{route('students.edit', $student)}}" class="text-decoration-none py-2 px-4 bg-dark text-white ">Edit</a>
            </div>
            <div class="m-2">
              <form action="{{route('students.destroy', $student)}}" method="post" class="m-0">
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

{{$students->links()}}
@endsection