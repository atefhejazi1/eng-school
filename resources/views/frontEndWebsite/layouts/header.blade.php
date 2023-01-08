<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Engineers School</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="icon" href="{{ asset('assets/frontEnd/images/logo.webp')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontEnd/css/header.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontEnd/css/all.css')}}">


    @yield('cssLinks')
    <!-- <link rel="stylesheet" href="{{ asset('assets/frontEnd/css/programming-acadmic.css')}}"> -->
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}"><img src="{{ asset('assets/frontEnd/images/logo-wasla.png')}}" alt=""> Engineers School</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/about')}}">About</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Education
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end fade-down " aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="{{url('/project')}}">Student Projects</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{url('soon')}}">Future Engineers</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{url('soon')}}">WorkShops & Classes</a>
                            </li>
                            <li><a class="dropdown-item" href="{{url('soon')}}">Project Idea</a></li>
                            <li><a class="dropdown-item" href="{{url('soon')}}">Library</a></li>
                        </ul>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}#courses">Courses</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Acadmics
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end fade-down " aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="{{url('/soon')}}">Programming Acadmics</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{url('soon')}}">Design Acadmics</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{url('soon')}}">Elctronics Acadmics</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- <div class="d-flex">
                <a class="enroll-now btn rounded-pill" href="soon.html">Enroll Now</a>
            </div> -->
        </div>
    </nav>

    <section class="hero-section">
        <div class="overlay"></div>
        <div class="hero-data">
            <div class="container">
                <h2>Engineers <span>School</span></h2>
                <p>
                    The School of Engineers is an institution specialized in developing
                    educational and technological solutions in the fields of
                    electronics, programming, engineering design, robotics and
                    artificial intelligence. It seeks to provide high-quality services
                    through its service package, which includes: training services,
                    training programs, educational tools and goods, in addition to
                    technical technical support services and the development of smart
                    solutions.
                </p>

                <div class="hero-item">
                    <a href="{{ asset('assets/frontend/videos/header2.mp4')}}"><button>Discover More <i class="fa-sharp fa-solid fa-angles-right"></i></button></a>
                    <a href="{{ asset('assets/frontend/videos/header1.mp4')}}">
                        <h4><i class="fa-solid fa-play"></i></h4>
                    </a>
                </div>

            </div>
        </div>
    </section>