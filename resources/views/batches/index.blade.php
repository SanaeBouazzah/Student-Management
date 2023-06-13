@extends('layouts.layout')
@section('title')
  | Batches
@endsection
@section('content')
<h3>Batch Application </h3>
    <div>
      @if (session()->has('success'))
          {{session('success')}}
      @endif
    </div>
    <a href="{{route('batches.create')}}" class="btn btn-dark rounded-0 px-3 my-3">Create New Batch</a>
<table class="table table-striped">
  <thead>
    <th>ID</th>
    <th>Name</th>
    <th>course_id</th>
    <th>start_date</th>
    <th class="text-center">Actions</th>
  </thead>
  <tbody>
    @foreach ($batches as $batch)
        <tr>
          <td>{{$batch->id}}</td>
          <td>{{$batch->name}}</td>
          <td>{{$batch->course->name}}</td>
          <td>{{$batch->start_date}}</td>
          <td class="d-flex justify-content-center align-items-center">
            <div class="m-2">
              <a href="{{route('batches.show', $batch)}}" class="text-decoration-none py-2 px-4 bg-dark text-white">Show</a>
            </div>
            <div class="m-2">
              <a href="{{route('batches.edit', $batch)}}" class="text-decoration-none py-2 px-4 bg-dark text-white ">Edit</a>
            </div>
            <div class="m-2">
              <form action="{{route('batches.destroy', $batch)}}" method="post" class="m-0">
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