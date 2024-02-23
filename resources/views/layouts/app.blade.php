<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylessheet" href="/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Student Management</title>

    <style>

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 50%;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}

        </style>

</head>
<body class="bg-sky-200">

   <div class="container">
    <div class="row">
    <div class="col-md-12">
        @vite('resources/css/app.css')
        <nav class="text-4xl bg-sky-200 max-width: 1536px "><h1 class="text-black">Student Management</h1></nav>
              <a class="navbar-brand" href="#"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </nav>
            </div>
            </div>
<div class="row">
    <div class="col-md-3">
        <!-- The sidebar -->
<div class="shadow-2xl bg-gray-400 sidebar">
    <a class="border-separate border border-slate-900 active" href="{{ url ( '' )}}">Home</a>
    <a class="border-separate border border-slate-900" href= "{{ url ( '/students' )}}">Student</a>
    <a class="border-separate border border-slate-900" href="{{ url ( '/teachers' )}}">Teacher</a>
    <a class="border-separate border border-slate-900" href="{{ url ( '/cources' )}}">Courses</a>
    <a class="border-separate border border-slate-900"href="{{ url ( '/batches' )}}">Batches</a>
    <a class="border-separate border border-slate-900" href="#about">Enrollment</a>
    <a  class="border-separate border border-slate-900"href="#about">Payment</a>
  </div>
    </div>

    <div class="col-md-9">


    @yield('content')

    </div>
</div>
   </div>
</body>
</html>
