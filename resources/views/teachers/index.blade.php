@extends('layouts.layout')
@section('title')
    Home
@endsection
@section('content')
<h3>Teacher Application </h3>
<div>
  @if (session()->has('success'))
  {{  session('success')}}
@endif
</div>
<a href="{{route('teachers.create')}}" class="btn btn-dark rounded-0 px-4 my-4">Add Teacher</a>
<table class="table table-striped ">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile</th>
      <th scope="col" class="text-center">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($teachers as $teacher)
        <tr>
          <td>{{$teacher->id}}</td>
          <td>{{$teacher->name}}</td>
          <td>{{$teacher->address}}</td>
          <td>{{$teacher->mobile}}</td>
          <td class="d-flex justify-content-center align-items-center">
            <div class="m-2">
              <a href="{{route('teachers.show', $teacher)}}" class="text-decoration-none py-2 px-4 bg-dark text-white">Show</a>
            </div>
            <div class="m-2">
              <a href="{{route('teachers.edit', $teacher)}}" class="text-decoration-none py-2 px-4 bg-dark text-white ">Edit</a>
            </div>
            <div class="m-2">
              <form action="{{route('teachers.destroy', $teacher)}}" method="post" class="m-0">
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