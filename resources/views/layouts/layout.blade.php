<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Student Management | @yield('title')</title>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
  <div class="container-fluid">
     <div class="row">
      <div class="col md-3">
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><h2>Student Management</h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
     </div>
    </div>
     <div class="row">
       <div style="width:20%;">
          <div class="bg-dark min-vh-100 d-flex flex-column justify-content-between p-3">
             <ul class="nav nav-pills flex-column mt-4">
              <li class="nav-item py-2 py-sm-0">
                <a href="{{route('home')}}" id="link" class="nav-link text-white active">
                  <i class="fs-5 fa fa-house"></i><span class="fs-4 ms-3 d-none d-sm-inline">Home</span>
                </a>
              </li>
              <li class="nav-item py-2 py-sm-0">
                <a href="{{route('students.index')}}" id="link" class="nav-link text-white">
                  <i class="fs-5 fa fa-user"></i><span class="fs-4 ms-3 d-none d-sm-inline">Students</span>
                </a>
              </li>
              <li class="nav-item py-2 py-sm-0">
                <a href="{{route('teachers.index')}}" id="link" class="nav-link text-white">
                  <i class="fs-5 fa fa-person-chalkboard"></i><span class="fs-4 ms-3 d-none d-sm-inline">Teachers</span>
                </a>
              </li>
              <li class="nav-item py-2 py-sm-0">
                <a href="{{route('courses.index')}}" id="link" class="nav-link text-white">
                  <i class="fs-5 fa fa-table-list"></i><span class="fs-4 ms-3 d-none d-sm-inline">Courses</span>
                </a>
              </li>
              <li class="nav-item py-2 py-sm-0">
                <a href="{{route('batches.index')}}" id="link" class="nav-link text-white">
                  <i class="fs-5 fa fa-table-list"></i><span class="fs-4 ms-3 d-none d-sm-inline">Batches</span>
                </a>
              </li>
              <li class="nav-item py-2 py-sm-0">
                <a href="{{route('enrollments.index')}}" class="nav-link text-white" id="link">
                  <i class="fs-5 fa fa-bag-shopping"></i><span class="fs-4 ms-3 d-none d-sm-inline">Enrollement</span>
                </a>
              </li>
              <li class="nav-item py-2 py-sm-0">
                <a href="" class="nav-link text-white" id="link">
                  <i class="fs-5 fa fa-credit-card"></i><span class="fs-4 ms-3 d-none d-sm-inline">Payment</span>
                </a>
              </li>
             </ul>
          </div>
       </div>
       <div style="width:80%;">
        <div class="content">
          @yield('content')
        </div>
       </div>
     </div>
  </div>
  {{-- <script>
    var btn = document.getElemenetById('link');
    btn.addEventListener("click", () => {
      btn.classList.remove("active");
    });
  </script> --}}
</body>
</html>
