{{-- @extends('layouts.frontendinc.main')

@section('content')
    <section class="section lb p120">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tagline-message page-title text-center">
                        <h3>All Courses</h3>
                        <ul class="breadcrumb">
                            <li><a href="{{ url('/') }}">TukLearn</a></li>
                            <li class="active">All Courses</li>
                        </ul>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section gb nopadtop">
        <div class="container">
            <div class="boxed boxedp4">
                <div class="shop-top">
                    <div class="clearfix">
                        <div class="pull-left">
                            <p> Showing {{ $courses->count() }} results</p>
                        </div>
                        <div class="pull-right">
                            <select class="selectpicker">
                                <option>Price - High to Low</option>
                                <option>Price - Low to High</option>
                                <option>Newest Items</option>
                                <option>Older Items</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row blog-grid shop-grid">
                    @foreach ($courses as $course)
                        <div class="col-md-3">
                            <div class="course-box shop-wrapper">
                                <div class="image-wrap entry">
                                    <img src="{{ \Illuminate\Support\Facades\Storage::url($course->image_url) }}"
                                        alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a href="shop-single.html" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <!-- end image-wrap -->
                                <div class="course-details shop-box text-center">
                                    <h4>
                                        <a href="{{ $course->id }}" title="">{{ $course->title }}</a>
                                    </h4>
                                </div>
                                <!-- end details -->
                                <div class="course-footer clearfix">
                                    <div class="pull-left">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="flaticon-online-course"></i> Start Course</a>
                                            </li>
                                        </ul>
                                    </div><!-- end left -->


                                    <div class="pull-right">
                                        <ul class="list-inline">
                                            @if ($course->price == 0)
                                                <li><a href="#">Free Course</a></li>
                                            @else
                                                <li><a href="#">Ksh.{{ number_format($course->price) }}</a></li>
                                            @endif
                                        </ul>
                                    </div><!-- end left -->
                                </div><!-- end footer -->
                            </div><!-- end box -->
                        </div><!-- end col -->
                    @endforeach




                    <hr class="invis">
                </div>
            </div><!-- end container -->
    </section>
@endsection --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <title>GTS - Digital Learning</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Webestica.com">
    <meta name="description" content="Eduport- LMS, Education and Course Theme">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/choices/css/choices.min.css">

    <!-- Theme CSS -->
    <link id="style-switch" rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

    <!-- Header START -->
    <header class="navbar-light navbar-sticky">
        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-xl">
            <div class="container">
                <!-- Logo START -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="light-mode-item navbar-brand-item" src="assets/images/gts_logo.png" alt="logo">
                    <img class="dark-mode-item navbar-brand-item" src="assets/images/gts_logo.png" alt="logo">
                </a>
                <!-- Logo END -->

                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-animation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- Main navbar START -->
                <div class="navbar-collapse w-100 collapse" id="navbarCollapse">

                    <!-- Nav category menu START -->
                    <ul class="navbar-nav navbar-nav-scroll me-auto">
                    </ul>
                    {{-- <ul class="navbar-nav navbar-nav-scroll me-auto">
                    <!-- Nav item 1 Demos -->
                    <li class="nav-item dropdown dropdown-menu-shadow-stacked">
                        <a class="nav-link bg-primary bg-opacity-10 rounded-3 text-primary px-3 py-3 py-xl-0"
                            href="#" id="categoryMenu" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><i class="bi bi-ui-radios-grid me-2"></i><span>Category</span></a>
                        <ul class="dropdown-menu" aria-labelledby="categoryMenu">

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Development</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <!-- dropdown submenu open right -->
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-toggle" href="#">Web Development</a>
                                        <ul class="dropdown-menu" data-bs-popper="none">
                                            <li> <a class="dropdown-item" href="#">Css</a> </li>
                                            <li> <a class="dropdown-item" href="#">Java Script</a> </li>
                                            <li> <a class="dropdown-item" href="#">Angular</a> </li>
                                            <li> <a class="dropdown-item" href="#">Php</a> </li>
                                            <li> <a class="dropdown-item" href="#">HTML</a> </li>
                                            <li> <a class="dropdown-item" href="#">React</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a class="dropdown-item" href="#">Data Science</a> </li>
                                    <li> <a class="dropdown-item" href="#">Mobile Development</a> </li>
                                    <li> <a class="dropdown-item" href="#">Programing Language</a> </li>
                                    <li> <a class="dropdown-item" href="#">Software Testing</a> </li>
                                    <li> <a class="dropdown-item" href="#">Software Engineering</a> </li>
                                    <li> <a class="dropdown-item" href="#">Software Development Tools</a>
                                    </li>
                                </ul>
                            </li>
                            <li> <a class="dropdown-item" href="#">Design</a></li>
                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Marketing</a>
                                <div class="dropdown-menu dropdown-menu-start dropdown-width-lg"
                                    data-bs-popper="none">
                                    <div class="row p-4">
                                        <!-- Dropdown column item -->
                                        <div class="col-xl-6 col-xxl-4 mb-4 mb-xl-0">
                                            <h6 class="mb-0">Get started</h6>
                                            <hr> <!-- Divider -->
                                            <ul class="list-unstyled">
                                                <li> <a class="dropdown-item" href="#">Market Research</a>
                                                </li>
                                                <li> <a class="dropdown-item" href="#">Advertising</a> </li>
                                                <li> <a class="dropdown-item" href="#">Consumer Behavior</a>
                                                </li>
                                                <li> <a class="dropdown-item" href="#">Digital Marketing</a>
                                                </li>
                                                <li> <a class="dropdown-item" href="#">Marketing Ethics</a>
                                                </li>
                                                <li> <a class="dropdown-item" href="#">Social Media
                                                        Marketing</a> </li>
                                                <li> <a class="dropdown-item" href="#">Public Relations</a>
                                                </li>
                                                <li> <a class="dropdown-item" href="#">Advertising</a> </li>
                                                <li> <a class="dropdown-item" href="#">Decision Science</a>
                                                </li>
                                                <li> <a class="dropdown-item" href="#">SEO</a> </li>
                                                <li> <a class="dropdown-item" href="#">Business
                                                        Marketing</a> </li>
                                            </ul>
                                        </div>

                                        <!-- Dropdown column item -->
                                        <div class="col-xl-6 col-xxl-4 mb-4 mb-xl-0">
                                            <h6 class="mb-0">Degree</h6>
                                            <hr> <!-- Divider -->
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <img src="assets/images/client/uni-logo-01.svg" class="icon-md"
                                                    alt="">
                                                <div class="ms-3">
                                                    <a class="stretched-link h6 mb-0" href="#">American
                                                        Century University, New Mexico</a>
                                                    <p class="mb-0 small">Bachelor of computer science</p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <img src="assets/images/client/uni-logo-02.svg" class="icon-md"
                                                    alt="">
                                                <div class="ms-3">
                                                    <a class="stretched-link h6 mb-0" href="#">Indiana
                                                        College of - Bloomington</a>
                                                    <p class="mb-0 small">Masters of computer science</p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <img src="assets/images/client/uni-logo-03.svg" class="icon-md"
                                                    alt="">
                                                <div class="ms-3">
                                                    <a class="stretched-link h6 mb-0" href="#">College of
                                                        South Florida</a>
                                                    <p class="mb-0 small">Medical science college</p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <img src="assets/images/client/uni-logo-01.svg" class="icon-md"
                                                    alt="">
                                                <div class="ms-3">
                                                    <a class="stretched-link h6 mb-0" href="#">Andeerson
                                                        Campus</a>
                                                    <p class="mb-0 small">Bachelor of computer science</p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex position-relative">
                                                <img src="assets/images/client/uni-logo-04.svg" class="icon-md"
                                                    alt="">
                                                <div class="ms-3">
                                                    <a class="stretched-link h6 mb-0" href="#">University of
                                                        South California</a>
                                                    <p class="mb-0 small">Masters of business development</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Dropdown column item -->
                                        <div class="col-xl-6 col-xxl-4">
                                            <h6 class="mb-0">Certificate</h6>
                                            <hr> <!-- Divider -->
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <h2 class="mb-0"><i
                                                        class="fab fa-fw fa-google text-google-icon"></i></h2>
                                                <div class="ms-2">
                                                    <a class="stretched-link h6 mb-0" href="#">Google SEO
                                                        certificate</a>
                                                    <p class="mb-0 small">No prerequisites</p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <h2 class="mb-0"><i
                                                        class="fab fa-fw fa-linkedin-in text-linkedin"></i></h2>
                                                <div class="ms-2">
                                                    <a class="stretched-link h6 mb-0" href="#">Business
                                                        Development Executive(BDE)</a>
                                                    <p class="mb-0 small">No prerequisites</p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <h2 class="mb-0"><i
                                                        class="fab fa-fw fa-facebook text-facebook"></i></h2>
                                                <div class="ms-2">
                                                    <a class="stretched-link h6 mb-0" href="#">Facebook
                                                        social media marketing</a>
                                                    <p class="mb-0 small">Expert advice</p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <h2 class="mb-0"><i
                                                        class="fas fa-fw fa-basketball-ball text-dribbble"></i>
                                                </h2>
                                                <div class="ms-2">
                                                    <a class="stretched-link h6 mb-0" href="#">Creative
                                                        graphics design</a>
                                                    <p class="mb-0 small">No prerequisites</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Advertisement -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card bg-blue rounded-0 rounded-bottom p-3 position-relative overflow-hidden"
                                                style="background:url(assets/images/pattern/05.png) no-repeat center center; background-size:cover;">
                                                <!-- SVG decoration -->
                                                <figure
                                                    class="position-absolute bottom-0 end-0 mb-n4 d-none d-md-block">
                                                    <svg width="92.6px" height="135.2px">
                                                        <path class="fill-white"
                                                            d="M71.5,131.4c0.2,0.1,0.4,0.1,0.6-0.1c0,0,0.6-0.7,1.6-1.9c0.2-0.2,0.1-0.5-0.1-0.7c-0.2-0.2-0.5-0.1-0.7,0.1 c-1,1.2-1.6,1.8-1.6,1.8c-0.2,0.2-0.2,0.5,0,0.7C71.4,131.3,71.4,131.4,71.5,131.4z">
                                                        </path>
                                                        <path class="fill-white"
                                                            d="M76,125.5c-0.2-0.2-0.3-0.5-0.1-0.7c1-1.4,1.9-2.8,2.8-4.2c0.1-0.2,0.4-0.3,0.7-0.2c0.2,0.1,0.3,0.4,0.2,0.7 c-0.9,1.4-1.8,2.9-2.8,4.2C76.6,125.6,76.3,125.6,76,125.5C76.1,125.5,76.1,125.5,76,125.5z M81.4,116.9 c-0.2-0.1-0.3-0.4-0.2-0.7c0.2-0.5,0.5-0.9,0.7-1.4c0.5-1.1,1-2.1,1.5-3.2c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6 c-0.5,1.1-1,2.1-1.5,3.2c-0.2,0.5-0.5,0.9-0.7,1.4C81.9,117,81.6,117,81.4,116.9C81.4,116.9,81.4,116.9,81.4,116.9z M85.1,107.1 c0.5-1.6,1-3.2,1.3-4.8c0.1-0.3,0.3-0.4,0.6-0.4c0.3,0.1,0.4,0.3,0.4,0.6c-0.4,1.6-0.8,3.3-1.3,4.9c-0.1,0.3-0.4,0.4-0.6,0.3 c0,0,0,0-0.1,0C85.1,107.6,85,107.3,85.1,107.1z M47.3,83c-1.5-1.1-2.5-2.5-3.1-4.2c-0.1-0.3,0-0.5,0.3-0.6 c0.3-0.1,0.5,0,0.6,0.3c0.5,1.5,1.5,2.7,2.8,3.7c0.2,0.2,0.3,0.5,0.1,0.7C47.9,83.1,47.6,83.1,47.3,83C47.4,83,47.4,83,47.3,83z  M51.7,84.6c0-0.3,0.3-0.5,0.5-0.4c1.4,0.2,2.9-0.3,4.3-1.4c0.2-0.2,0.5-0.1,0.7,0.1c0.2,0.2,0.1,0.5-0.1,0.7 c-1.6,1.2-3.4,1.8-5,1.6c-0.1,0-0.1,0-0.2,0C51.8,85,51.7,84.8,51.7,84.6z M87.2,97.4c0.2-1.7,0.2-3.3,0.2-5 c0-0.3,0.2-0.5,0.5-0.5c0.3,0,0.5,0.2,0.5,0.5c0.1,1.7,0,3.4-0.2,5.1c0,0.3-0.3,0.5-0.5,0.4c-0.1,0-0.1,0-0.2,0 C87.3,97.8,87.1,97.6,87.2,97.4z M43.7,73.6c0.2-1.6,0.7-3.2,1.5-4.8l0.1-0.1c0.1-0.2,0.4-0.3,0.7-0.2c0,0,0,0,0,0 c0.2,0.1,0.3,0.4,0.2,0.7l-0.1,0.1c-0.7,1.5-1.2,3-1.4,4.5c0,0.3-0.3,0.5-0.6,0.4c-0.1,0-0.1,0-0.2,0 C43.8,74,43.7,73.8,43.7,73.6z M60,79.8c-0.2-0.1-0.3-0.5-0.1-0.7c0.4-0.6,0.8-1.3,1.1-2c0.4-0.8,0.7-1.6,1-2.4 c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6c-0.3,0.9-0.7,1.7-1.1,2.5c-0.4,0.7-0.8,1.4-1.2,2.1C60.5,79.9,60.2,80,60,79.8 C60,79.9,60,79.8,60,79.8z M86.8,87.5c-0.3-1.6-0.7-3.2-1.2-4.8c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3 c0.5,1.6,1,3.3,1.2,4.9c0,0.3-0.1,0.5-0.4,0.6c-0.1,0-0.2,0-0.3,0C87,87.7,86.9,87.6,86.8,87.5z M48.2,65.1 c-0.2-0.2-0.2-0.5,0-0.7c1.2-1.3,2.5-2.4,3.9-3.4c0.2-0.1,0.5-0.1,0.7,0.1c0.1,0.2,0.1,0.5-0.1,0.7c-1.4,0.9-2.6,2-3.7,3.2 c-0.2,0.2-0.4,0.2-0.6,0.1C48.3,65.2,48.3,65.1,48.2,65.1z M63.3,70c0.3-1.6,0.5-3.3,0.5-4.9c0-0.3,0.2-0.5,0.5-0.5 c0.3,0,0.5,0.2,0.5,0.5c-0.1,1.7-0.2,3.4-0.5,5.1c0,0.3-0.3,0.4-0.6,0.4c0,0-0.1,0-0.1,0C63.3,70.4,63.2,70.2,63.3,70z M83.8,78 c-0.7-1.5-1.5-3-2.4-4.3c-0.1-0.2-0.1-0.5,0.1-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.4,1.7,2.9,2.5,4.4c0.1,0.2,0,0.5-0.2,0.7 c-0.1,0.1-0.3,0.1-0.4,0C83.9,78.2,83.8,78.1,83.8,78z M56.5,59.6c-0.1-0.3,0.1-0.5,0.4-0.6c1.7-0.4,3.4-0.5,5.2-0.3 c0.3,0,0.5,0.3,0.4,0.5c0,0.3-0.3,0.5-0.5,0.4c-1.7-0.2-3.3-0.1-4.8,0.3c-0.1,0-0.2,0-0.3,0C56.6,59.8,56.5,59.7,56.5,59.6z  M78.4,69.7c-1.1-1.3-2.2-2.5-3.4-3.6c-0.2-0.2-0.2-0.5,0-0.7c0.2-0.2,0.5-0.2,0.7,0c1.2,1.1,2.4,2.4,3.5,3.7 c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0.1C78.5,69.8,78.4,69.7,78.4,69.7z M63.6,60.1c-0.2-1.6-0.4-3.3-0.8-4.9 c-0.1-0.3,0.1-0.5,0.4-0.6c0.3-0.1,0.5,0.1,0.6,0.4c0.4,1.7,0.7,3.4,0.8,5c0,0.3-0.2,0.5-0.4,0.5c-0.1,0-0.2,0-0.3,0 C63.7,60.4,63.6,60.2,63.6,60.1z M71,63.1c-1.4-0.9-2.9-1.7-4.4-2.3c-0.3-0.1-0.4-0.4-0.3-0.6c0.1-0.3,0.4-0.4,0.6-0.3 c1.5,0.6,3.1,1.4,4.6,2.3c0.2,0.1,0.3,0.5,0.1,0.7C71.6,63.1,71.3,63.2,71,63.1C71.1,63.1,71.1,63.1,71,63.1z M61.3,50.4 c-0.6-1.5-1.3-3-2.1-4.5c-0.1-0.2-0.1-0.5,0.2-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.5,1.6,3.1,2.2,4.6c0.1,0.3,0,0.5-0.3,0.6 c-0.1,0.1-0.3,0-0.4,0C61.5,50.6,61.4,50.5,61.3,50.4z M56.5,41.8c-1-1.3-2.1-2.6-3.2-3.8c-0.2-0.2-0.2-0.5,0-0.7 c0.2-0.2,0.5-0.2,0.7,0c1.2,1.3,2.3,2.6,3.3,3.9c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0C56.6,41.9,56.5,41.8,56.5,41.8z  M49.7,34.5c-1.2-1.1-2.5-2.1-3.9-3.2c-0.2-0.2-0.3-0.5-0.1-0.7c0.2-0.2,0.5-0.3,0.7-0.1c1.4,1,2.7,2.1,3.9,3.2 c0.2,0.2,0.2,0.5,0,0.7c-0.2,0.2-0.4,0.2-0.6,0.1C49.7,34.6,49.7,34.5,49.7,34.5z M41.7,28.5c-1.4-0.9-2.8-1.8-4.3-2.6 c-0.2-0.1-0.3-0.4-0.2-0.7c0.1-0.2,0.4-0.3,0.7-0.2c1.5,0.8,2.9,1.7,4.3,2.6c0.2,0.1,0.3,0.5,0.1,0.7 C42.2,28.6,42,28.6,41.7,28.5C41.7,28.5,41.7,28.5,41.7,28.5z">
                                                        </path>
                                                        <path class="fill-white"
                                                            d="M30.7,22.6C30.7,22.6,30.7,22.6,30.7,22.6c0,0,0.9,0.4,2.3,1c0.2,0.1,0.5,0,0.7-0.2c0.1-0.2,0-0.5-0.2-0.7 c0,0,0,0,0,0c-1.4-0.7-2.2-1-2.3-1c-0.3-0.1-0.5,0-0.6,0.3C30.3,22.2,30.4,22.5,30.7,22.6z">
                                                        </path>
                                                        <path class="fill-warning"
                                                            d="M22.6,23.6l-1.1-4.1c0,0-11.7-7.5-11.9-7.6c-0.1-0.2-4.9-6.5-4.9-6.5l8.2,3.5l12.2,8.4L22.6,23.6z">
                                                        </path>
                                                        <polygon class="fill-warning opacity-6"
                                                            points="31.2,12.3 4.7,5.4 25.1,17.2"></polygon>
                                                        <polygon class="fill-warning opacity-6"
                                                            points="21.5,19.5 15,24.8 4.7,5.4 "></polygon>
                                                    </svg>
                                                </figure>
                                                <!-- Body -->
                                                <div class="card-body">
                                                    <!-- Title -->
                                                    <h5 class="card-title text-white mb-2">Access 25K Online
                                                        courses from 120 institutions, Start today!</h5>
                                                    <p class="text-white text-opacity-75">Here is the description
                                                        of premium features which will allow users to get benefits
                                                        and save a lot of money</p>
                                                    <!-- Button -->
                                                    <a href="#" class="btn btn-sm btn-dark mb-0">Purchase
                                                        Premium</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li> <a class="dropdown-item" href="#">Music</a></li>
                            <li> <a class="dropdown-item" href="#">Lifestyle</a></li>
                            <li> <a class="dropdown-item" href="#">IT & software</a></li>
                            <li> <a class="dropdown-item" href="#">Personal development</a></li>
                            <li> <a class="dropdown-item" href="#">Health & fitness</a></li>
                            <li> <a class="dropdown-item" href="#">Teaching</a></li>
                            <li> <a class="dropdown-item" href="#">Social science</a></li>
                            <li> <a class="dropdown-item" href="#">Math & logic</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li> <a class="dropdown-item bg-primary text-primary bg-opacity-10 rounded-2 mb-0"
                                    href="#">View all categories</a></li>
                        </ul>
                    </li>
                </ul> --}}
                    <!-- Nav category menu END -->

                    <!-- Nav Main menu START -->
                    <ul class="navbar-nav navbar-nav-scroll me-auto">
                        <!-- Nav item 1 Demos -->
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="{{ url('/all_courses') }}" id="demoMenu"
                                aria-expanded="false">All Courses</a>
                            {{-- <ul class="dropdown-menu" aria-labelledby="demoMenu">
                            <li> <a class="dropdown-item active" href="index.html">Home Default</a></li>
                            <li> <a class="dropdown-item" href="index-2.html">Home Education</a></li>
                            <li> <a class="dropdown-item" href="index-3.html">Home Academy</a></li>
                            <li> <a class="dropdown-item" href="index-4.html">Home Course</a></li>
                            <li> <a class="dropdown-item" href="index-5.html">Home University</a></li>
                            <li> <a class="dropdown-item" href="index-6.html">Home Kindergarten</a></li>
                            <li> <a class="dropdown-item" href="index-7.html">Home Landing</a></li>
                            <li> <a class="dropdown-item" href="index-8.html">Home Tutor</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li> <a class="dropdown-item" href="request-demo.html">Request a demo</a></li>
                            <li> <a class="dropdown-item" href="book-class.html">Book a Class</a></li>
                            <li> <a class="dropdown-item" href="request-access.html">Free Access</a></li>
                            <li> <a class="dropdown-item" href="university-admission-form.html">Admission Form</a>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Dropdown levels</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">

                                    <!-- dropdown submenu open right -->
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-toggle" href="#">Dropdown (end)</a>
                                        <ul class="dropdown-menu" data-bs-popper="none">
                                            <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                            <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>

                                    <!-- dropdown submenu open left -->
                                    <li class="dropdown-submenu dropstart">
                                        <a class="dropdown-item dropdown-toggle" href="#">Dropdown
                                            (start)</a>
                                        <ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
                                            <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                            <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                </ul>
                            </li>
                        </ul> --}}
                        </li>

                        <!-- Nav item 2 Pages -->
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="{{ url('/about_gts_learning') }}" id="pagesMenu"
                                aria-haspopup="true" aria-expanded="false">About GTS Learning</a>
                            {{-- <ul class="dropdown-menu" aria-labelledby="pagesMenu">
                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Course</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="course-grid.html">Course Grid Classic</a>
                                    </li>
                                    <li> <a class="dropdown-item" href="course-grid-2.html">Course Grid
                                            Minimal</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li> <a class="dropdown-item" href="course-list.html">Course List Classic</a>
                                    </li>
                                    <li> <a class="dropdown-item" href="course-list-2.html">Course List
                                            Minimal</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li> <a class="dropdown-item" href="course-detail.html">Course Detail
                                            Classic</a></li>
                                    <li> <a class="dropdown-item" href="course-detail-min.html">Course Detail
                                            Minimal</a></li>
                                    <li> <a class="dropdown-item" href="course-detail-adv.html">Course Detail
                                            Advance</a></li>
                                    <li> <a class="dropdown-item" href="course-video-player.html">Course Full
                                            Screen Video</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">About</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="about.html">About Us</a></li>
                                    <li> <a class="dropdown-item" href="contact-us.html">Contact Us</a></li>
                                    <li> <a class="dropdown-item" href="blog-grid.html">Blog Grid</a></li>
                                    <li> <a class="dropdown-item" href="blog-masonry.html">Blog Masonry</a></li>
                                    <li> <a class="dropdown-item" href="blog-detail.html">Blog Detail</a></li>
                                    <li> <a class="dropdown-item" href="pricing.html">Pricing</a></li>
                                </ul>
                            </li>

                            <li> <a class="dropdown-item" href="instructor-list.html">Instructor List</a></li>
                            <li> <a class="dropdown-item" href="instructor-single.html">Instructor Single</a></li>
                            <li> <a class="dropdown-item" href="become-instructor.html">Become an Instructor</a>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Authentication</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="sign-in.html">Sign In</a></li>
                                    <li> <a class="dropdown-item" href="sign-up.html">Sign Up</a></li>
                                    <li> <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                                    </li>
                                </ul>
                            </li>

                            <li> <a class="dropdown-item" href="faq.html">FAQs</a></li>
                            <li> <a class="dropdown-item" href="error-404.html">Error 404</a></li>
                            <li> <a class="dropdown-item" href="coming-soon.html">Coming Soon</a></li>
                            <li> <a class="dropdown-item" href="cart.html">Cart</a></li>
                            <li> <a class="dropdown-item" href="checkout.html">Checkout</a></li>
                            <li> <a class="dropdown-item" href="empty-cart.html">Empty Cart</a></li>
                            <li> <a class="dropdown-item" href="wishlist.html">Wishlist</a></li>
                        </ul> --}}
                        </li>

                        <!-- Nav item 3 Account -->
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ url('/contact_gts_learning') }}" id="accounntMenu"
                                aria-haspopup="true" aria-expanded="false">Contact Us</a>
                            {{-- <ul class="dropdown-menu" aria-labelledby="accounntMenu">
                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#"><i
                                        class="fas fa-user-tie fa-fw me-1"></i>Instructor</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="instructor-dashboard.html"><i
                                                class="bi bi-grid-fill fa-fw me-1"></i>Dashboard</a> </li>
                                    <li> <a class="dropdown-item" href="instructor-manage-course.html"><i
                                                class="bi bi-basket-fill fa-fw me-1"></i>Courses</a> </li>
                                    <li> <a class="dropdown-item" href="instructor-create-course.html"><i
                                                class="bi bi-file-earmark-plus-fill fa-fw me-1"></i>Create
                                            Course</a> </li>
                                    <li> <a class="dropdown-item" href="course-added.html"><i
                                                class="bi bi-file-check-fill fa-fw me-1"></i>Course Added</a> </li>
                                    <li> <a class="dropdown-item" href="instructor-earning.html"><i
                                                class="fas fa-chart-line fa-fw me-1"></i>Earnings</a> </li>
                                    <li> <a class="dropdown-item" href="instructor-studentlist.html"><i
                                                class="fas fa-user-graduate fa-fw me-1"></i>Students</a> </li>
                                    <li> <a class="dropdown-item" href="instructor-order.html"><i
                                                class="bi bi-cart-check-fill fa-fw me-1"></i>Orders</a> </li>
                                    <li> <a class="dropdown-item" href="instructor-review.html"><i
                                                class="bi bi-star-fill fa-fw me-1"></i>Reviews</a> </li>
                                    <li> <a class="dropdown-item" href="instructor-payout.html"><i
                                                class="fas fa-wallet fa-fw me-1"></i>Payout</a> </li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#"><i
                                        class="fas fa-user-graduate fa-fw me-1"></i>Student</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="student-dashboard.html"><i
                                                class="bi bi-grid-fill fa-fw me-1"></i>Dashboard</a> </li>
                                    <li> <a class="dropdown-item" href="student-subscription.html"><i
                                                class="bi bi-card-checklist fa-fw me-1"></i>My Subscriptions</a>
                                    </li>
                                    <li> <a class="dropdown-item" href="student-course-list.html"><i
                                                class="bi bi-basket-fill fa-fw me-1"></i>Courses</a> </li>
                                    <li> <a class="dropdown-item" href="student-payment-info.html"><i
                                                class="bi bi-credit-card-2-front-fill fa-fw me-1"></i>Payment
                                            Info</a> </li>
                                    <li> <a class="dropdown-item" href="student-bookmark.html"><i
                                                class="fas bi-cart-check-fill fa-fw me-1"></i>Wishlist</a> </li>
                                </ul>
                            </li>

                            <li> <a class="dropdown-item" href="#"><i
                                        class="fas fa-user-cog fa-fw me-1"></i>Admin (Coming Soon)</a> </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li> <a class="dropdown-item" href="instructor-edit-profile.html"><i
                                        class="fas fa-fw fa-edit me-1"></i>Edit Profile</a> </li>
                            <li> <a class="dropdown-item" href="instructor-setting.html"><i
                                        class="fas fa-fw fa-cog me-1"></i>Settings</a> </li>
                            <li> <a class="dropdown-item" href="instructor-delete-account.html"><i
                                        class="fas fa-fw fa-trash-alt me-1"></i>Delete Profile</a> </li>
                        </ul> --}}
                        </li>

                        @guest

                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ url('/login') }}" id="accounntMenu" aria-haspopup="true"
                                    aria-expanded="false">Login</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ url('/register') }}" id="accounntMenu" aria-haspopup="true"
                                    aria-expanded="false">Register</a>
                            </li>
                        @endguest

                        <!-- Nav item 4 Megamenu-->
                        {{-- <li class="nav-item dropdown dropdown-fullwidth">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Megamenu</a>
                        <div class="dropdown-menu dropdown-menu-end pb-0" data-bs-popper="none">
                            <div class="row p-4 g-4">
                                <!-- Dropdown column item -->
                                <div class="col-xl-6 col-xxl-3">
                                    <h6 class="mb-0">Get started</h6>
                                    <hr>
                                    <ul class="list-unstyled">
                                        <li> <a class="dropdown-item" href="#">Market research</a> </li>
                                        <li> <a class="dropdown-item" href="#">Advertising</a> </li>
                                        <li> <a class="dropdown-item" href="#">Consumer behavior</a> </li>
                                        <li> <a class="dropdown-item" href="#">Digital marketing</a> </li>
                                        <li> <a class="dropdown-item" href="#">Marketing ethics</a> </li>
                                        <li> <a class="dropdown-item" href="#">Social media marketing</a>
                                        </li>
                                        <li> <a class="dropdown-item" href="#">Public relations</a> </li>
                                        <li> <a class="dropdown-item" href="#">Advertising</a> </li>
                                        <li> <a class="dropdown-item" href="#">Decision science</a> </li>
                                        <li> <a class="dropdown-item" href="#">SEO</a> </li>
                                        <li> <a class="dropdown-item" href="#">Business marketing</a> </li>
                                    </ul>
                                </div>

                                <!-- Dropdown column item -->
                                <div class="col-xl-6 col-xxl-3">
                                    <h6 class="mb-0">Degree</h6>
                                    <hr>
                                    <!-- Dropdown item -->
                                    <div
                                        class="mb-2 position-relative bg-primary-soft-hover rounded-2 transition-base p-3">
                                        <a class="stretched-link h6 mb-0" href="#">Contact management</a>
                                        <p class="mb-0 small text-truncate-2">Speedily say has suitable disposal
                                            add boy. On forth doubt miles of child.</p>
                                    </div>
                                    <!-- Dropdown item -->
                                    <div
                                        class="mb-2 position-relative bg-primary-soft-hover rounded-2 transition-base p-3">
                                        <a class="stretched-link h6 mb-0" href="#">Sales pipeline</a>
                                        <p class="mb-0 small text-truncate-2">Speedily say has suitable disposal
                                            add boy. On forth doubt miles of child.</p>
                                    </div>
                                    <!-- Dropdown item -->
                                    <div
                                        class="mb-2 position-relative bg-primary-soft-hover rounded-2 transition-base p-3">
                                        <a class="stretched-link h6 mb-0" href="#">Security & Permission</a>
                                        <p class="mb-0 small text-truncate-2">Speedily say has suitable disposal
                                            add boy. On forth doubt miles of child.</p>
                                    </div>
                                </div>

                                <!-- Dropdown column item -->
                                <div class="col-xl-6 col-xxl-3">
                                    <h6 class="mb-0">Certificate</h6>
                                    <hr>
                                    <!-- Dropdown item -->
                                    <div class="d-flex mb-4 position-relative">
                                        <h2 class="mb-0"><i class="fab fa-fw fa-google text-google-icon"></i>
                                        </h2>
                                        <div class="ms-2">
                                            <a class="stretched-link h6 mb-0" href="#">Google SEO
                                                certificate</a>
                                            <p class="mb-0 small">No prerequisites</p>
                                        </div>
                                    </div>
                                    <!-- Dropdown item -->
                                    <div class="d-flex mb-4 position-relative">
                                        <h2 class="mb-0"><i class="fab fa-fw fa-linkedin-in text-linkedin"></i>
                                        </h2>
                                        <div class="ms-2">
                                            <a class="stretched-link h6 mb-0" href="#">Business Development
                                                Executive(BDE)</a>
                                            <p class="mb-0 small">No prerequisites</p>
                                        </div>
                                    </div>
                                    <!-- Dropdown item -->
                                    <div class="d-flex mb-4 position-relative">
                                        <h2 class="mb-0"><i class="fab fa-fw fa-facebook text-facebook"></i>
                                        </h2>
                                        <div class="ms-2">
                                            <a class="stretched-link h6 mb-0" href="#">Facebook social media
                                                marketing</a>
                                            <p class="mb-0 small">Expert advice</p>
                                        </div>
                                    </div>
                                    <!-- Dropdown item -->
                                    <div class="d-flex mb-4 position-relative">
                                        <h2 class="mb-0"><i
                                                class="fas fa-fw fa-basketball-ball text-dribbble"></i></h2>
                                        <div class="ms-2">
                                            <a class="stretched-link h6 mb-0" href="#">Creative graphics
                                                design</a>
                                            <p class="mb-0 small">No prerequisites</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Dropdown column item -->
                                <div class="col-xl-6 col-xxl-3">
                                    <h6 class="mb-0">Download Eduport</h6>
                                    <hr>
                                    <!-- Image -->
                                    <img src="assets/images/element/14.svg" alt="">

                                    <!-- Download button -->
                                    <div class="row g-2 justify-content-center mt-3">
                                        <!-- Google play store button -->
                                        <div class="col-6 col-sm-4 col-xxl-6">
                                            <a href="#"> <img src="assets/images/client/google-play.svg"
                                                    class="btn-transition" alt="google-store"> </a>
                                        </div>
                                        <!-- App store button -->
                                        <div class="col-6 col-sm-4 col-xxl-6">
                                            <a href="#"> <img src="assets/images/client/app-store.svg"
                                                    class="btn-transition" alt="app-store"> </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Action box -->
                                <div class="col-12">
                                    <div class="alert alert-success alert-dismissible fade show mt-2 mb-0 rounded-3"
                                        role="alert">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs me-2">
                                            <img class="avatar-img rounded-circle"
                                                src="assets/images/avatar/09.jpg" alt="avatar">
                                        </div>
                                        <!-- Info -->
                                        The personality development class starts at 2:00 pm, click to <a
                                            href="#" class="alert-link">Join Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li> --}}

                        <!-- Nav item 5 link-->
                        {{-- <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="advanceMenu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-h"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end min-w-auto" data-bs-popper="none">
                            <li>
                                <a class="dropdown-item" href="index-2.htm" target="_blank">
                                    <i class="text-warning fa-fw bi bi-life-preserver me-2"></i>Support
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="docs/index.html" target="_blank">
                                    <i class="text-danger fa-fw bi bi-card-text me-2"></i>Documentation
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="rtl/index.htm" target="_blank">
                                    <i class="text-info fa-fw bi bi-toggle-off me-2"></i>RTL demo
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://themes.getbootstrap.com/store/webestica/"
                                    target="_blank">
                                    <i class="text-success fa-fw bi bi-cloud-download-fill me-2"></i>Buy Eduport!
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="docs/alerts.html" target="_blank">
                                    <i class="text-orange fa-fw bi bi-puzzle-fill me-2"></i>Components
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    </ul>
                    <!-- Nav Main menu END -->

                    <!-- Nav Search START -->
                    <div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
                        <div class="nav-item w-100">
                            <form class="position-relative">
                                <input class="form-control pe-5 bg-transparent" type="search" placeholder="Search"
                                    aria-label="Search">
                                <button
                                    class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y"
                                    type="submit"><i class="fas fa-search fs-6 "></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Nav Search END -->
                </div>
                <!-- Main navbar END -->

                @auth
                    <!-- Profile START -->
                    <div class="dropdown ms-1 ms-lg-0">
                        <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button"
                            data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
                        </a>
                        <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3"
                            aria-labelledby="profileDropdown">
                            <!-- Profile info -->
                            <li class="px-3">
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="avatar me-3">
                                        <img class="avatar-img rounded-circle shadow" src="assets/images/avatar/01.jpg"
                                            alt="avatar">
                                    </div>
                                    <div>
                                        <a class="h6" href="#">Lori Ferguson</a>
                                        <p class="small m-0">example@gmail.com</p>
                                    </div>
                                </div>
                                <hr>
                            </li>
                            <!-- Links -->
                            <li><a class="dropdown-item" href="{{ url('/user_profile') }}"><i
                                        class="bi bi-person fa-fw me-2"></i>Edit
                                    Profile</a></li>
                            <li><a class="dropdown-item" href="{{ url('/user_profile') }}"><i
                                        class="bi bi-gear fa-fw me-2"></i>Account
                                    Settings</a></li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="bi bi-info-circle fa-fw me-2"></i>Help</a></li>
                            <li><a class="dropdown-item bg-danger-soft-hover" href="{{ url('/logout') }}"><i
                                        class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <!-- Dark mode switch START -->
                            {{-- <li>
                            <div class="modeswitch-wrap" id="darkModeSwitch">
                                <div class="modeswitch-item">
                                    <div class="modeswitch-icon"></div>
                                </div>
                                <span>Dark mode</span>
                            </div>
                        </li> --}}
                            @if (auth()->user()->role->has_perm([1, 2, 3]))
                                <li>
                                    <a class="dropdown-item" href="{{ url('/dashboard') }}"><i
                                            class="bi bi-gear fa-fw me-2"></i>Access Dashboard</a>
                                </li>
                            @endif
                            <!-- Dark mode switch END -->
                        </ul>
                    </div>
                    <!-- Profile START -->
                @endauth
            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>
    <!-- Header END -->

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
Page Banner START -->
        <section class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bg-light p-4 text-center rounded-3">
                            <h2 class="m-0">A list of courses
                                offered on the GTS Learning platform</h2>
                            <!-- Breadcrumb -->
                            <div class="d-flex justify-content-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb breadcrumb-dots mb-0">
                                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">All Courses</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Page Banner END -->

        <!-- =======================
Page content START -->
        <section class="pt-0">
            <div class="container">

                <!-- Filter bar START -->
                <form class="bg-light border p-4 rounded-3 my-4 z-index-9 position-relative">
                    <div class="row g-3">
                        <!-- Input -->
                        <div class="col-xl-3">
                            <input class="form-control me-1" type="search" placeholder="Enter keyword">
                        </div>

                        <!-- Select item -->
                        <div class="col-xl-8">
                            <div class="row g-3">
                                <!-- Select items -->
                                <div class="col-sm-6 col-md-3 pb-2 pb-md-0">
                                    <select class="form-select form-select-sm js-choice"
                                        aria-label=".form-select-sm example">
                                        <option value="">Categories</option>
                                        <option>All</option>
                                        <option>Development</option>
                                        <option>Design</option>
                                        <option>Accounting</option>
                                        <option>Translation</option>
                                        <option>Finance</option>
                                        <option>Legal</option>
                                        <option>Photography</option>
                                        <option>Writing</option>
                                        <option>Marketing</option>
                                    </select>
                                </div>

                                <!-- Search item -->
                                <div class="col-sm-6 col-md-3 pb-2 pb-md-0">
                                    <select class="form-select form-select-sm js-choice"
                                        aria-label=".form-select-sm example">
                                        <option value="">Price level</option>
                                        <option>All</option>
                                        <option>Free</option>
                                        <option>Paid</option>
                                    </select>
                                </div>

                                <!-- Search item -->
                                <div class="col-sm-6 col-md-3 pb-2 pb-md-0">
                                    <select class="form-select form-select-sm js-choice"
                                        aria-label=".form-select-sm example">
                                        <option value="">Skill level</option>
                                        <option>All levels</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                    </select>
                                </div>

                                <!-- Search item -->
                                <div class="col-sm-6 col-md-3 pb-2 pb-md-0">
                                    <select class="form-select form-select-sm js-choice"
                                        aria-label=".form-select-sm example">
                                        <option value="">Language</option>
                                        <option>English</option>
                                        <option>Francas</option>
                                        <option>Russian</option>
                                        <option>Hindi</option>
                                        <option>Bengali</option>
                                        <option>Spanish</option>
                                    </select>
                                </div>
                            </div> <!-- Row END -->
                        </div>
                        <!-- Button -->
                        <div class="col-xl-1">
                            <button type="button" class="btn btn-primary mb-0 rounded z-index-1 w-100"><i
                                    class="fas fa-search"></i></button>
                        </div>
                    </div> <!-- Row END -->
                </form>
                <!-- Filter bar END -->

                <div class="row mt-3">
                    <!-- Main content START -->
                    <div class="col-12">

                        <!-- Course Grid START -->
                        <div class="row g-4">

                            <!-- The beginning of a single course -->

                            <!-- SINGLE COURSE START -->
                            <!-- Card item START -->
                            @foreach ($courses as $course)
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src="assets/images/courses/4by3/08.jpg" class="card-img-top"
                                            alt="course image">
                                        <!-- Card body -->
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex justify-content-between mb-2">
                                                <a href="#"
                                                    class="badge bg-purple bg-opacity-10 text-purple">All
                                                    level</a>
                                                <a href="#" class="h6 fw-light mb-0"><i
                                                        class="far fa-heart"></i></a>
                                            </div>
                                            <!-- Title -->
                                            <h5 class="card-title"><a
                                                    href="{{ url('/course_detail', $course->id) }}">{{ $course->title }}</a>
                                            </h5>
                                            <!-- Rating star -->

                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item me-0 small"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i
                                                        class="far fa-star text-warning"></i></li>
                                                <li class="list-inline-item ms-2 h6 fw-light mb-0">4.0/5.0</li>
                                            </ul>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i
                                                        class="far fa-clock text-danger me-2"></i>{{ $course->duration }}m</span>
                                                <span class="h6 fw-light mb-0"><i
                                                        class="fas fa-table text-orange me-2"></i>15 lectures</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- Card item END -->
                            <!-- SINGLE COURSE END -->


                            <!-- The end of a single course -->


                        </div>
                        <!-- Course Grid END -->

                        <!-- Pagination START -->
                        <div class="col-12">
                            <nav class="mt-4 d-flex justify-content-center" aria-label="navigation">
                                <ul class="pagination pagination-primary-soft rounded mb-0">
                                    <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i
                                                class="fas fa-angle-double-left"></i></a></li>
                                    <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item mb-0"><a class="page-link" href="#">..</a></li>
                                    <li class="page-item mb-0"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item mb-0"><a class="page-link" href="#"><i
                                                class="fas fa-angle-double-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Pagination END -->
                    </div>
                    <!-- Main content END -->
                </div><!-- Row END -->
            </div>
        </section>
        <!-- =======================
Page content END -->

        <!-- =======================
Newsletter START -->
        <section class="pt-0">
            <div class="container position-relative overflow-hidden">
                <!-- SVG decoration -->
                <figure class="position-absolute top-50 start-50 translate-middle ms-3">
                    <svg>
                        <path class="fill-white opacity-2"
                            d="m496 22.999c0 10.493-8.506 18.999-18.999 18.999s-19-8.506-19-18.999 8.507-18.999 19-18.999 18.999 8.506 18.999 18.999z">
                        </path>
                        <path class="fill-white opacity-2"
                            d="m775 102.5c0 5.799-4.701 10.5-10.5 10.5-5.798 0-10.499-4.701-10.499-10.5 0-5.798 4.701-10.499 10.499-10.499 5.799 0 10.5 4.701 10.5 10.499z">
                        </path>
                        <path class="fill-white opacity-2"
                            d="m192 102c0 6.626-5.373 11.999-12 11.999s-11.999-5.373-11.999-11.999c0-6.628 5.372-12 11.999-12s12 5.372 12 12z">
                        </path>
                        <path class="fill-white opacity-2"
                            d="m20.499 10.25c0 5.66-4.589 10.249-10.25 10.249-5.66 0-10.249-4.589-10.249-10.249-0-5.661 4.589-10.25 10.249-10.25 5.661-0 10.25 4.589 10.25 10.25z">
                        </path>
                    </svg>
                </figure>
                <!-- Svg decoration -->
                <figure class="position-absolute bottom-0 end-0 mb-5 d-none d-sm-block">
                    <svg class="rotate-130" width="258.7px" height="86.9px" viewbox="0 0 258.7 86.9">
                        <path stroke="white" fill="none" stroke-width="2"
                            d="M0,7.2c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5 c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5s16-25.5,31.9-25.5">
                        </path>
                        <path stroke="white" fill="none" stroke-width="2"
                            d="M0,57c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5 c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5s16-25.5,31.9-25.5">
                        </path>
                    </svg>
                </figure>

                <div class="bg-grad-blue p-3 p-sm-5 rounded-3">
                    <div class="row justify-content-center position-relative">
                        <!-- SVG decoration -->
                        <figure class="position-absolute top-50 start-0 translate-middle-y">
                            <svg width="141px" height="141px">
                                <path class="fill-white opacity-1"
                                    d="M140.520,70.258 C140.520,109.064 109.062,140.519 70.258,140.519 C31.454,140.519 -0.004,109.064 -0.004,70.258 C-0.004,31.455 31.454,-0.003 70.258,-0.003 C109.062,-0.003 140.520,31.455 140.520,70.258 Z">
                                </path>
                            </svg>
                        </figure>
                        <!-- Newsletter -->
                        <div class="col-12 position-relative my-2 my-sm-3">
                            <div class="row align-items-center">
                                <!-- Title -->
                                <div class="col-lg-6">
                                    <h3 class="text-white mb-3 mb-lg-0">Want to receive updates when shiny new courses
                                        are added?
                                    </h3>
                                </div>
                                <!-- Input item -->
                                <div class="col-lg-6 text-lg-end">
                                    <form class="bg-body rounded p-2">
                                        <div class="input-group">
                                            <input class="form-control border-0 me-1" type="email"
                                                placeholder="Type your email here">
                                            <button type="button"
                                                class="btn btn-dark mb-0 rounded">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row END -->
                </div>
            </div>
        </section>
        <!-- =======================
Newsletter END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- =======================
Footer START -->
    <footer class="pt-5">
        <div class="container">
            <!-- Row START -->
            <div class="row g-4">

                <!-- Widget 1 START -->
                <div class="col-lg-3">
                    <!-- logo -->
                    <a class="me-0" href="index.html">
                        <img class="light-mode-item h-40px" src="{{ asset('assets/images/gts_logo.png') }}"
                            alt="logo">
                        <img class="dark-mode-item h-40px" src="{{ asset('assets/images/gts_logo.png') }}"
                            alt="logo">
                    </a>
                    <p class="my-3">GTS Learning platform is built specifically for a learner who is
                        dedicated to learning and improving their careers in an involving environment.</p>
                    <!-- Social media icon -->
                    <ul class="list-inline mb-0 mt-3">
                        <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-facebook"
                                href="#"><i class="fab fa-fw fa-facebook-f"></i></a> </li>
                        <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-instagram"
                                href="#"><i class="fab fa-fw fa-instagram"></i></a> </li>
                        <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-twitter"
                                href="#"><i class="fab fa-fw fa-twitter"></i></a> </li>
                        <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-linkedin"
                                href="#"><i class="fab fa-fw fa-linkedin-in"></i></a> </li>
                    </ul>
                </div>
                <!-- Widget 1 END -->

                <!-- Widget 2 START -->
                <div class="col-lg-6">
                    <div class="row g-4">
                        <!-- Link block -->
                        <div class="col-6 col-md-4">
                            <h5 class="mb-2 mb-md-4">Company</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link" href="#">About us</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Contact us</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">News and Blogs</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Library</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Career</a></li>
                            </ul>
                        </div>

                        <!-- Link block -->
                        <div class="col-6 col-md-4">
                            <h5 class="mb-2 mb-md-4">Community</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link" href="#">Documentation</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Faq</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Forum</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Sitemap</a></li>
                            </ul>
                        </div>

                        <!-- Link block -->
                        <div class="col-6 col-md-4">
                            <h5 class="mb-2 mb-md-4">Teaching</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link" href="#">Become a teacher</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">How to guide</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Terms &amp; Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Widget 2 END -->

                <!-- Widget 3 START -->
                <div class="col-lg-3">
                    <h5 class="mb-2 mb-md-4">Contact</h5>
                    <!-- Time -->
                    <p class="mb-2">
                        Toll free:<span class="h6 fw-light ms-2">+254792009556</span>
                        <span class="d-block small">(9:AM to 8:PM IST)</span>
                    </p>

                    <p class="mb-0">Email:<span class="h6 fw-light ms-2">contact@globaltempingservices.co.ke</span>
                    </p>


                </div>
                <!-- Widget 3 END -->
            </div><!-- Row END -->

            <!-- Divider -->
            <hr class="mt-4 mb-0">

            <!-- Bottom footer -->
            <div class="py-3">
                <div class="container px-0">
                    <div class="d-md-flex justify-content-between align-items-center py-3 text-center text-md-left">
                        <!-- copyright text -->
                        <div class="text-primary-hover"> Copyright <a href="#" class="text-body">©2023
                                GTS</a>. All rights reserved. </div>
                        <!-- copyright links-->
                        <div class=" mt-3 mt-md-0">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <!-- Language selector -->
                                    <div class="dropup mt-0 text-center text-sm-end">
                                        <a class="nav-link" href="#" role="button" id="languageSwitcher"
                                            aria-expanded="false">
                                            <i class="fas fa-globe me-2"></i>Language - English
                                        </a>
                                        {{-- <ul class="dropdown-menu min-w-auto" aria-labelledby="languageSwitcher">
                                    <li><a class="dropdown-item me-4" href="#"><img
                                                class="fa-fw me-2" src="assets/images/flags/uk.svg"
                                                alt="">English</a></li>
                                    <li><a class="dropdown-item me-4" href="#"><img
                                                class="fa-fw me-2" src="assets/images/flags/gr.svg"
                                                alt="">German </a></li>
                                    <li><a class="dropdown-item me-4" href="#"><img
                                                class="fa-fw me-2" src="assets/images/flags/sp.svg"
                                                alt="">French</a></li>
                                </ul> --}}
                                    </div>
                                </li>
                                <li class="list-inline-item"><a class="nav-link" href="#">Terms of use</a>
                                </li>
                                <li class="list-inline-item"><a class="nav-link pe-0" href="#">Privacy
                                        policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- =======================
Footer END -->

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i>
    </div>

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="assets/vendor/choices/js/choices.min.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>

</body>

</html>
