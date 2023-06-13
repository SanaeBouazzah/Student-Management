@extends('layouts.layout')
@section('title')
    Show
@endsection
@section('content')
   <div class="row">
     <div class="row">
       <div class="col">
         <nav aria-label="breadcrumb" class=" rounded-3 p-3 ">
           <ol class="breadcrumb mb-0">
             <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
             <li class="breadcrumb-item"><a href="{{route('students.index')}}">Students</a></li>
             <li class="breadcrumb-item active" aria-current="page">User Profile</li>
           </ol>
         </nav>
       </div>
     </div>
     <div class="col-lg-4">
       <div class="card mb-4">
         <div class="card-body text-center">
           <img src="{{asset('storage/'. $student->image)}}" alt="avatar"
             class="rounded-circle img-fluid" style="width: 150px;">
           <h5 class="my-3">{{$student->name}}</h5>
           <p class="text-muted mb-4">{{$student->address}}</p>
           <div class="d-flex justify-content-center mb-2">
             <button type="button" class="btn btn-primary">Follow</button>
             <button type="button" class="btn btn-outline-primary ms-1">Message</button>
           </div>
         </div>
       </div>
     </div>
     <div class="col-lg-8">
       <div class="card mb-4">
         <div class="card-body">
           <div class="row">
             <div class="col-sm-3">
               <p class="mb-0">Full Name</p>
             </div>
             <div class="col-sm-9">
               <p class="text-muted mb-0">{{$student->name}}</p>
             </div>
           </div>
           <hr>
           <div class="row">
             <div class="col-sm-3">
               <p class="mb-0">Phone</p>
             </div>
             <div class="col-sm-9">
               <p class="text-muted mb-0">{{$student->mobile}}</p>
             </div>
           </div>
           <hr>
           <div class="row">
             <div class="col-sm-3">
               <p class="mb-0">Address</p>
             </div>
             <div class="col-sm-9">
               <p class="text-muted mb-0">{{$student->address}}</p>
             </div>
           </div>
         </div>
       </div>
       <div class="row">
         <div class="col-md-6">
           <div class="card mb-4 mb-md-0">
             <div class="card-body">
               <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
               </p>
               <p class="mb-1" style="font-size: .77rem;">Web Design</p>
               <div class="progress rounded" style="height: 5px;">
                 <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                   aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
               <div class="progress rounded" style="height: 5px;">
                 <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                   aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
               <div class="progress rounded" style="height: 5px;">
                 <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                   aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
               <div class="progress rounded" style="height: 5px;">
                 <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                   aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
               <div class="progress rounded mb-2" style="height: 5px;">
                 <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                   aria-valuemin="0" aria-valuemax="100"></div>
               </div>
             </div>
           </div>
         </div>
         <div class="col-md-6">
           <div class="card mb-4 mb-md-0">
             <div class="card-body">
               <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
               </p>
               <p class="mb-1" style="font-size: .77rem;">Web Design</p>
               <div class="progress rounded" style="height: 5px;">
                 <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                   aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
               <div class="progress rounded" style="height: 5px;">
                 <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                   aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
               <div class="progress rounded" style="height: 5px;">
                 <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                   aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
               <div class="progress rounded" style="height: 5px;">
                 <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                   aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
               <div class="progress rounded mb-2" style="height: 5px;">
                 <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                   aria-valuemin="0" aria-valuemax="100"></div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   @endsection