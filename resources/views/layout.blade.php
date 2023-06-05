<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
  <div class="container-fluid">
     <div class="row">
      <div class="col md-12">
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><h2>Student Management</h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
     </div>
    </div>
     <div class="row">
       <div class="col md-12">
        <div class="flex-nowrap">
          <div class="bg-dark col-auto min-vh-100">
            <div class="bg-dark  p-3">
            <a class="d-flex text-decoration-none  align-items-center text-white pt-3">
              <span class="fs-4 d-none d-sm-inline">Side Menu</span>
            </a>
            <ul class="nav nav-pills flex-column mt-4">
              <li class="nav-item">
                <a href="" class="nav-link text-white active" aria-current="page">Home
                  <i class="fs-5 fa fa-guage"></i><span class="fs-4 d-none d-sm-inline"></span>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link text-white">Student
                  <i class="fs-5 fa fa-house"></i><span class="fs-4 d-none d-sm-inline"></span>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link text-white">Teacher
                  <i class="fs-5 fa fa-table-list"></i><span class="fs-4 d-none d-sm-inline"></span>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link text-white">Enrollement
                  <i class="fs-5 fa fa-table-list"></i><span class="fs-4 d-none d-sm-inline"></span>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link text-white">Payment
                  <i class="fs-5 fa fa-table-list"></i><span class="fs-4 d-none d-sm-inline"></span>
                </a>
              </li>
            </ul>
          </div>
          </div>
        </div>
       </div>
       <div class="col md-9">
        <div class="content">
          @yield('content')
        </div>
       </div>
     </div>
  </div>
</body>
</html>