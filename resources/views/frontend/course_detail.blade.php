<!DOCTYPE html>
<html lang="en">

<head>
    <title>GTS - Digital Learning</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Webestica.com">
    <meta name="description" content="GTS - Digital Learning">

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
    <link rel="stylesheet" type="text/css" href="assets/vendor/tiny-slider/tiny-slider.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/glightbox/css/glightbox.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/choices/css/choices.min.css">

    <!-- Theme CSS -->
    <link id="style-switch" rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

    <!-- Header START -->
    <header class="navbar-light navbar-sticky header-static">
        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-xl">
            <div class="container-fluid px-3 px-xl-5">
                <!-- Logo START -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- <img class="light-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">
                    <img class="dark-mode-item navbar-brand-item" src="assets/images/logo-light.svg" alt="logo"> --}}
                    <img class="light-mode-item navbar-brand-item" src="assets/images/gts_logo.png" alt="logo">
                    <img class="dark-mode-item navbar-brand-item" src="assets/images/gts_logo.png" alt="logo">
                    {{-- <h3 class="light-mode-item navbar-brand-item">GTS Learning</h3> --}}
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
                        <!-- Nav item 1 Demos -->
                        {{-- <li class="nav-item dropdown dropdown-menu-shadow-stacked">
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
                        </li> --}}
                    </ul>
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

                <!-- Profile START -->
                @auth
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
                                        <a class="h6" href="#">{{ auth()->user()->name }}</a>
                                        <p class="small m-0">{{ auth()->user()->email }}</p>
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
                            {{-- <div class="modeswitch-wrap" id="darkModeSwitch">
                                <div class="modeswitch-item">
                                    <div class="modeswitch-icon"></div>
                                </div>
                                <span>Dark mode</span>
                            </div> --}}
                            @if (auth()->user()->role->has_perm([1, 2, 3]))
                                <li>
                                    <a class="dropdown-item" href="{{ url('/dashboard') }}"><i
                                            class="bi bi-gear fa-fw me-2"></i>Access Dashboard</a>
                                </li>
                                {{-- <li><a href="{{ url('/dashboard') }}">Dashboard</a></li> --}}
                            @endif
                            </li>
                            <!-- Dark mode switch END -->
                        </ul>
                    </div>
                @endauth
                <!-- Profile END -->
            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>
    <!-- Header END -->

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
Page intro START -->
        <section class="bg-light py-0 py-sm-5">
            <div class="container">
                <div class="row py-5">
                    <div class="col-lg-8">
                        <!-- Badge -->
                        <h6 class="mb-3 font-base bg-primary text-white py-2 px-4 rounded-2 d-inline-block">Digital
                            Marketing</h6>
                        <!-- Title -->
                        <h1>The Complete Digital Marketing Course - 12 Courses in 1</h1>
                        <p>Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant private
                            blushes removed an in equally totally if. Delivered dejection necessary objection do Mr
                            prevailed. Mr feeling does chiefly cordial in do.</p>
                        <!-- Content -->
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i
                                    class="fas fa-star text-warning me-2"></i>4.5/5.0</li>
                            <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i
                                    class="fas fa-user-graduate text-orange me-2"></i>12k Enrolled</li>
                            <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i
                                    class="fas fa-signal text-success me-2"></i>All levels</li>
                            <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i
                                    class="bi bi-patch-exclamation-fill text-danger me-2"></i>Last updated 09/2021</li>
                            <li class="list-inline-item h6 mb-0"><i class="fas fa-globe text-info me-2"></i>English
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Page intro END -->

        <!-- =======================
Page content START -->
        <section class="pb-0 py-lg-5">
            <div class="container">
                <div class="row">
                    <!-- Main content START -->
                    <div class="col-lg-8">
                        <div class="bg-body shadow rounded-2 p-4">
                            <!-- Tabs START -->
                            <ul class="nav nav-pills nav-tabs-line pt-0" id="course-pills-tab" role="tablist">
                                <!-- Tab item -->
                                <li class="nav-item me-2 me-sm-4" role="presentation">
                                    <button class="nav-link mb-2 mb-md-0 active" id="course-pills-tab-1"
                                        data-bs-toggle="pill" data-bs-target="#course-pills-1" type="button"
                                        role="tab" aria-controls="course-pills-1"
                                        aria-selected="true">Overview</button>
                                </li>
                                <!-- Tab item -->
                                <li class="nav-item me-2 me-sm-4" role="presentation">
                                    <button class="nav-link mb-2 mb-md-0" id="course-pills-tab-2"
                                        data-bs-toggle="pill" data-bs-target="#course-pills-2" type="button"
                                        role="tab" aria-controls="course-pills-2"
                                        aria-selected="false">Curriculum</button>
                                </li>
                                <!-- Tab item -->
                                <li class="nav-item me-2 me-sm-4" role="presentation">
                                    <button class="nav-link mb-2 mb-md-0" id="course-pills-tab-3"
                                        data-bs-toggle="pill" data-bs-target="#course-pills-3" type="button"
                                        role="tab" aria-controls="course-pills-3"
                                        aria-selected="false">Instructor</button>
                                </li>
                                <!-- Tab item -->
                                <li class="nav-item me-2 me-sm-4" role="presentation">
                                    <button class="nav-link mb-2 mb-md-0" id="course-pills-tab-4"
                                        data-bs-toggle="pill" data-bs-target="#course-pills-4" type="button"
                                        role="tab" aria-controls="course-pills-4"
                                        aria-selected="false">Reviews</button>
                                </li>
                                <!-- Tab item -->
                                <li class="nav-item me-2 me-sm-4" role="presentation">
                                    <button class="nav-link mb-2 mb-md-0" id="course-pills-tab-5"
                                        data-bs-toggle="pill" data-bs-target="#course-pills-5" type="button"
                                        role="tab" aria-controls="course-pills-5" aria-selected="false">FAQs
                                    </button>
                                </li>
                            </ul>
                            <hr>
                            <!-- Tabs END -->

                            <!-- Tab contents START -->
                            <div class="tab-content pt-2" id="course-pills-tabContent">
                                <!-- Content START -->
                                <div class="tab-pane fade show active" id="course-pills-1" role="tabpanel"
                                    aria-labelledby="course-pills-tab-1">
                                    <!-- Course detail START -->
                                    <h5 class="mb-3">Course Description</h5>
                                    <p class="mb-3">Welcome to the <strong> Digital Marketing Ultimate Course Bundle
                                            - 12 Courses in 1 (Over 36 hours of content)</strong></p>
                                    <p class="mb-3">In this practical hands-on training, you’re going to learn to
                                        become a digital marketing expert with this <strong> ultimate course bundle that
                                            includes 12 digital marketing courses in 1!</strong></p>
                                    <p class="mb-3">If you wish to find out the skills that should be covered in a
                                        basic digital marketing course syllabus in India or anywhere around the world,
                                        then reading this blog will help. Before we delve into the advanced <strong><a
                                                href="#" class="text-reset text-decoration-underline">digital
                                                marketing course</a></strong> syllabus, let’s look at the scope of
                                        digital marketing and what the future holds.</p>
                                    <p class="mb-0">We focus a great deal on the understanding of behavioral
                                        psychology and influence triggers which are crucial for becoming a well rounded
                                        Digital Marketer. We understand that theory is important to build a solid
                                        foundation, we understand that theory alone isn’t going to get the job done so
                                        that’s why this course is packed with practical hands-on examples that you can
                                        follow step by step.</p>

                                    <!-- List content -->
                                    <h5 class="mt-4">What you’ll learn</h5>
                                    <ul class="list-group list-group-borderless mb-3">
                                        <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                class="fas fa-check-circle text-success me-2"></i>Digital marketing
                                            course introduction</li>
                                        <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                class="fas fa-check-circle text-success me-2"></i>Customer Life cycle
                                        </li>
                                        <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                class="fas fa-check-circle text-success me-2"></i>What is Search engine
                                            optimization(SEO)</li>
                                        <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                class="fas fa-check-circle text-success me-2"></i>Facebook ADS</li>
                                        <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                class="fas fa-check-circle text-success me-2"></i>Facebook Messenger
                                            Chatbot</li>
                                        <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                class="fas fa-check-circle text-success me-2"></i>Search engine
                                            optimization tools</li>
                                        <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                class="fas fa-check-circle text-success me-2"></i>Why SEO</li>
                                        <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                class="fas fa-check-circle text-success me-2"></i>URL Structure</li>
                                        <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                class="fas fa-check-circle text-success me-2"></i>Featured Snippet</li>
                                        <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                class="fas fa-check-circle text-success me-2"></i>SEO tips and tricks
                                        </li>
                                        <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                class="fas fa-check-circle text-success me-2"></i>Google tag manager
                                        </li>
                                    </ul>

                                    <p class="mb-0">As it so contrasted oh estimating instrument. Size like body
                                        someone had. Are conduct viewing boy minutes warrant the expense? Tolerably
                                        behavior may admit daughters offending her ask own. Praise effect wishes change
                                        way and any wanted. Lively use looked latter regard had. Do he it part more last
                                        in. </p>
                                    <!-- Course detail END -->

                                </div>
                                <!-- Content END -->

                                <!-- Content START -->
                                <div class="tab-pane fade" id="course-pills-2" role="tabpanel"
                                    aria-labelledby="course-pills-tab-2">
                                    <!-- Course accordion START -->
                                    <div class="accordion accordion-icon accordion-bg-light" id="accordionExample2">
                                        <!-- Item -->
                                        <div class="accordion-item mb-3">
                                            <h6 class="accordion-header font-base" id="heading-1">
                                                <button
                                                    class="accordion-button fw-bold rounded d-sm-flex d-inline-block collapsed"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-1" aria-expanded="true"
                                                    aria-controls="collapse-1">
                                                    Introduction of Digital Marketing
                                                    <span class="small ms-0 ms-sm-2">(3 Lectures)</span>
                                                </button>
                                            </h6>
                                            <div id="collapse-1" class="accordion-collapse collapse show"
                                                aria-labelledby="heading-1" data-bs-parent="#accordionExample2">
                                                <div class="accordion-body mt-3">
                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">Introduction</span>
                                                        </div>
                                                        <p class="mb-0">2m 10s</p>
                                                    </div>

                                                    <hr> <!-- Divider -->

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">
                                                                What is Digital Marketing What is Digital
                                                                Marketing</span>
                                                        </div>
                                                        <p class="mb-0 text-truncate">15m 10s</p>
                                                    </div>

                                                    <hr> <!-- Divider -->

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">Type
                                                                of Digital Marketing</span>
                                                        </div>
                                                        <p class="mb-0">18m 10s</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Item -->
                                        <div class="accordion-item mb-3">
                                            <h6 class="accordion-header font-base" id="heading-2">
                                                <button
                                                    class="accordion-button fw-bold collapsed rounded d-sm-flex d-inline-block"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-2" aria-expanded="false"
                                                    aria-controls="collapse-2">
                                                    Customer Life cycle
                                                    <span class="small ms-0 ms-sm-2">(4 Lectures)</span>
                                                </button>
                                            </h6>
                                            <div id="collapse-2" class="accordion-collapse collapse"
                                                aria-labelledby="heading-2" data-bs-parent="#accordionExample2">
                                                <!-- Accordion body START -->
                                                <div class="accordion-body mt-3">
                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">What
                                                                is Digital Marketing</span>
                                                        </div>
                                                        <p class="mb-0">11m 20s</p>
                                                    </div>

                                                    <hr> <!-- Divider -->

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">15
                                                                Tips for Writing Magnetic Headlines</span>
                                                        </div>
                                                        <p class="mb-0 text-truncate">25m 20s</p>
                                                    </div>

                                                    <hr> <!-- Divider -->

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">How
                                                                to Write Like Your Customers Talk</span>
                                                        </div>
                                                        <p class="mb-0">11m 30s</p>
                                                    </div>

                                                    <hr> <!-- Divider -->

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <div>
                                                                <a href="#"
                                                                    class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fas fa-play me-0"></i>
                                                                </a>
                                                            </div>
                                                            <div class="row g-sm-0 align-items-center">
                                                                <div class="col-sm-6">
                                                                    <span
                                                                        class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-md-400px">How
                                                                        to Flip Features Into Benefits</span>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <span
                                                                        class="badge bg-orange text-white ms-2 ms-md-0"><i
                                                                            class="fas fa-lock fa-fw me-1"></i>Premium</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 d-inline-block text-truncate w-70px w-sm-60px">
                                                            35m 30s</p>
                                                    </div>
                                                </div>
                                                <!-- Accordion body END -->
                                            </div>
                                        </div>

                                        <!-- Item -->
                                        <div class="accordion-item mb-3">
                                            <h6 class="accordion-header font-base" id="heading-5">
                                                <button
                                                    class="accordion-button fw-bold collapsed rounded d-sm-flex d-inline-block"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-5" aria-expanded="false"
                                                    aria-controls="collapse-5">
                                                    What is Search Engine Optimization(SEO)
                                                    <span class="small ms-0 ms-sm-2">(10 Lectures)</span>
                                                </button>
                                            </h6>
                                            <div id="collapse-5" class="accordion-collapse collapse"
                                                aria-labelledby="heading-5" data-bs-parent="#accordionExample2">
                                                <!-- Accordion body START -->
                                                <div class="accordion-body mt-3">

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">Introduction</span>
                                                        </div>
                                                        <p class="mb-0">1m 10s</p>
                                                    </div>

                                                    <hr> <!-- Divider -->

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">Overview
                                                                of SEO</span>
                                                        </div>
                                                        <p class="mb-0 text-truncate">11m 03s</p>
                                                    </div>

                                                    <hr> <!-- Divider -->

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">How
                                                                to SEO Optimise Your Homepage</span>
                                                        </div>
                                                        <p class="mb-0">15m 00s</p>
                                                    </div>

                                                    <hr> <!-- Divider -->

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">How
                                                                to SEO Optimise Your Homepage</span>
                                                        </div>
                                                        <p class="mb-0">15m 00s</p>
                                                    </div>

                                                    <hr> <!-- Divider -->

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">How
                                                                to Write Title Tags Search Engines Love</span>
                                                        </div>
                                                        <p class="mb-0">25m 30s</p>
                                                    </div>

                                                    <hr> <!-- Divider -->

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">SEO
                                                                Keyword Planning</span>
                                                        </div>
                                                        <p class="mb-0">18m 10s</p>
                                                    </div>

                                                    <hr> <!-- Divider -->

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">eCommerce
                                                                SEO</span>
                                                        </div>
                                                        <p class="mb-0">28m 10s</p>
                                                    </div>

                                                    <hr> <!-- Divider -->

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">Internal
                                                                and External Links</span>
                                                        </div>
                                                        <p class="mb-0">45m 10s</p>
                                                    </div>

                                                    <hr> <!-- Divider -->

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">Mobile
                                                                SEO</span>
                                                        </div>
                                                        <p class="mb-0">8m 10s</p>
                                                    </div>

                                                    <hr> <!-- Divider -->

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">Off-page
                                                                SEO</span>
                                                        </div>
                                                        <p class="mb-0">18m 10s</p>
                                                    </div>

                                                    <hr> <!-- Divider -->

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">Measuring
                                                                SEO Effectiveness</span>
                                                        </div>
                                                        <p class="mb-0">35m 10s</p>
                                                    </div>
                                                </div>
                                                <!-- Accordion body END -->
                                            </div>
                                        </div>

                                        <!-- Item -->
                                        <div class="accordion-item mb-3">
                                            <h6 class="accordion-header font-base" id="heading-6">
                                                <button
                                                    class="accordion-button fw-bold collapsed rounded d-block d-sm-flex d-inline-block"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-6" aria-expanded="false"
                                                    aria-controls="collapse-6">
                                                    Facebook ADS
                                                    <span class="small ms-0 ms-sm-2">(3 Lectures)</span>
                                                </button>
                                            </h6>
                                            <div id="collapse-6" class="accordion-collapse collapse"
                                                aria-labelledby="heading-6" data-bs-parent="#accordionExample2">
                                                <!-- Accordion body START -->
                                                <div class="accordion-body mt-3">
                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">Introduction</span>
                                                        </div>
                                                        <p class="mb-0">1m 20s</p>
                                                    </div>

                                                    <hr> <!-- Divider -->

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">Creating
                                                                Facebook Pages</span>
                                                        </div>
                                                        <p class="mb-0 text-truncate">25m 20s</p>
                                                    </div>

                                                    <hr> <!-- Divider -->

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">Facebook
                                                                Page Custom URL</span>
                                                        </div>
                                                        <p class="mb-0">11m 30s</p>
                                                    </div>
                                                </div>
                                                <!-- Accordion body END -->
                                            </div>
                                        </div>

                                        <!-- Item -->
                                        <div class="accordion-item mb-3">
                                            <h6 class="accordion-header font-base" id="heading-7">
                                                <button
                                                    class="accordion-button fw-bold collapsed rounded d-sm-flex d-inline-block"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-7" aria-expanded="false"
                                                    aria-controls="collapse-7">
                                                    YouTube Marketing
                                                    <span class="small ms-0 ms-sm-2">(5 Lectures)</span>
                                                </button>
                                            </h6>
                                            <div id="collapse-7" class="accordion-collapse collapse"
                                                aria-labelledby="heading-7" data-bs-parent="#accordionExample2">
                                                <!-- Accordion body START -->
                                                <div class="accordion-body mt-3">
                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">Video
                                                                Flow</span>
                                                        </div>
                                                        <p class="mb-0">25m 20s</p>
                                                    </div>

                                                    <hr> <!-- Divider -->

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">Webmaster
                                                                Tool</span>
                                                        </div>
                                                        <p class="mb-0 text-truncate">15m 20s</p>
                                                    </div>

                                                    <hr> <!-- Divider -->

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">Featured
                                                                Contents on Channel</span>
                                                        </div>
                                                        <p class="mb-0">32m 20s</p>
                                                    </div>

                                                    <hr> <!-- Divider -->

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <div>
                                                                <a href="#"
                                                                    class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fas fa-play me-0"></i>
                                                                </a>
                                                            </div>
                                                            <div class="row g-sm-0 align-items-center">
                                                                <div class="col-sm-6">
                                                                    <span
                                                                        class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-md-400px">Managing
                                                                        Comments</span>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <span
                                                                        class="badge bg-orange text-white ms-2 ms-md-0"><i
                                                                            class="fas fa-lock fa-fw me-1"></i>Premium</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 d-inline-block text-truncate w-70px w-sm-60px">
                                                            20m 20s</p>
                                                    </div>

                                                    <hr> <!-- Divider -->

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <div>
                                                                <a href="#"
                                                                    class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fas fa-play me-0"></i>
                                                                </a>
                                                            </div>
                                                            <div class="row g-sm-0 align-items-center">
                                                                <div class="col-sm-6">
                                                                    <span
                                                                        class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-md-400px">Channel
                                                                        Analytics</span>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <span
                                                                        class="badge bg-orange text-white ms-2 ms-md-0"><i
                                                                            class="fas fa-lock fa-fw me-1"></i>Premium</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 d-inline-block text-truncate w-70px w-sm-60px">
                                                            18m 20s</p>
                                                    </div>
                                                </div>
                                                <!-- Accordion body END -->
                                            </div>
                                        </div>

                                        <!-- Item -->
                                        <div class="accordion-item mb-3">
                                            <h6 class="accordion-header font-base" id="heading-8">
                                                <button
                                                    class="accordion-button fw-bold collapsed rounded d-sm-flex d-inline-block"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-8" aria-expanded="false"
                                                    aria-controls="collapse-8">
                                                    Why SEO
                                                    <span class="small ms-0 ms-sm-2">(8 Lectures)</span>
                                                </button>
                                            </h6>
                                            <div id="collapse-8" class="accordion-collapse collapse"
                                                aria-labelledby="heading-8" data-bs-parent="#accordionExample2">
                                                <!-- Accordion body START -->
                                                <div class="accordion-body mt-3">
                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">Understanding
                                                                SEO</span>
                                                        </div>
                                                        <p class="mb-0">20m 20s</p>
                                                    </div>

                                                    <hr> <!-- Divider -->

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">On-Page
                                                                SEO</span>
                                                        </div>
                                                        <p class="mb-0 text-truncate">15m 20s</p>
                                                    </div>

                                                    <hr> <!-- Divider -->

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">Local
                                                                SEO</span>
                                                        </div>
                                                        <p class="mb-0">16m 20s</p>
                                                    </div>

                                                    <hr> <!-- Divider -->

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">Measuring
                                                                SEO Effectiveness</span>
                                                        </div>
                                                        <p class="mb-0">12m 20s</p>
                                                    </div>

                                                    <hr> <!-- Divider -->

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <div>
                                                                <a href="#"
                                                                    class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fas fa-play me-0"></i>
                                                                </a>
                                                            </div>
                                                            <div class="row g-sm-0 align-items-center">
                                                                <div class="col-sm-6">
                                                                    <span
                                                                        class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-md-400px">Keywords
                                                                        in Blog and Articles</span>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <span
                                                                        class="badge bg-orange text-white ms-2 ms-md-0"><i
                                                                            class="fas fa-lock fa-fw me-1"></i>Premium</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 d-inline-block text-truncate w-70px w-sm-60px">
                                                            15m 20s</p>
                                                    </div>

                                                    <hr> <!-- Divider -->

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <div>
                                                                <a href="#"
                                                                    class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fas fa-play me-0"></i>
                                                                </a>
                                                            </div>
                                                            <div class="row g-sm-0 align-items-center">
                                                                <div class="col-sm-6">
                                                                    <span
                                                                        class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-md-400px">SEO
                                                                        Keyword Planning</span>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <span
                                                                        class="badge bg-orange text-white ms-2 ms-md-0"><i
                                                                            class="fas fa-lock fa-fw me-1"></i>Premium</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 d-inline-block text-truncate w-70px w-sm-60px">
                                                            36m 12s</p>
                                                    </div>
                                                </div>
                                                <!-- Accordion body END -->
                                            </div>
                                        </div>

                                        <!-- Item -->
                                        <div class="accordion-item mb-3">
                                            <h6 class="accordion-header font-base" id="heading-9">
                                                <button
                                                    class="accordion-button fw-bold collapsed rounded d-sm-flex d-inline-block"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-9" aria-expanded="false"
                                                    aria-controls="collapse-9">
                                                    Google tag manager
                                                    <span class="small ms-0 ms-sm-2">(4 Lectures)</span>
                                                </button>
                                            </h6>
                                            <div id="collapse-9" class="accordion-collapse collapse"
                                                aria-labelledby="heading-9" data-bs-parent="#accordionExample2">
                                                <!-- Accordion body START -->
                                                <div class="accordion-body mt-3">
                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">G+
                                                                Pages Ranks Higher</span>
                                                        </div>
                                                        <p class="mb-0">13m 20s</p>
                                                    </div>

                                                    <hr> <!-- Divider -->

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">Adding
                                                                Contact Links</span>
                                                        </div>
                                                        <p class="mb-0 text-truncate">7m 20s</p>
                                                    </div>

                                                    <hr> <!-- Divider -->

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">Google
                                                                Hangouts</span>
                                                        </div>
                                                        <p class="mb-0">12m 20s</p>
                                                    </div>

                                                    <hr> <!-- Divider -->

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">
                                                                Google Local Business</span>
                                                        </div>
                                                        <p class="mb-0 text-truncate">7m 20s</p>
                                                    </div>
                                                </div>
                                                <!-- Accordion body END -->
                                            </div>
                                        </div>

                                        <!-- Item -->
                                        <div class="accordion-item mb-0">
                                            <h6 class="accordion-header font-base" id="heading-10">
                                                <button
                                                    class="accordion-button fw-bold collapsed rounded d-sm-flex d-inline-block"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-10" aria-expanded="false"
                                                    aria-controls="collapse-10">
                                                    Integration with Website
                                                    <span class="small ms-0 ms-sm-2">(3 Lectures)</span>
                                                </button>
                                            </h6>
                                            <div id="collapse-10" class="accordion-collapse collapse"
                                                aria-labelledby="heading-10" data-bs-parent="#accordionExample2">
                                                <!-- Accordion body START -->
                                                <div class="accordion-body mt-3">
                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">Creating
                                                                LinkedIn Account</span>
                                                        </div>
                                                        <p class="mb-0 text-truncate">13m 20s</p>
                                                    </div>

                                                    <hr> <!-- Divider -->

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">Advance
                                                                Searching</span>
                                                        </div>
                                                        <p class="mb-0">31m 20s</p>
                                                    </div>

                                                    <hr> <!-- Divider -->

                                                    <!-- Course lecture -->
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="#"
                                                                class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span
                                                                class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">LinkedIn
                                                                Mobile App</span>
                                                        </div>
                                                        <p class="mb-0 text-truncate">25m 20s</p>
                                                    </div>
                                                </div>
                                                <!-- Accordion body END -->
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Course accordion END -->
                                </div>
                                <!-- Content END -->

                                <!-- Content START -->
                                <div class="tab-pane fade" id="course-pills-3" role="tabpanel"
                                    aria-labelledby="course-pills-tab-3">
                                    <!-- Card START -->
                                    <div class="card mb-0 mb-md-4">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-md-5">
                                                <!-- Image -->
                                                <img src="assets/images/instructor/01.jpg" class="img-fluid rounded-3"
                                                    alt="instructor-image">
                                            </div>
                                            <div class="col-md-7">
                                                <!-- Card body -->
                                                <div class="card-body">
                                                    <!-- Title -->
                                                    <h3 class="card-title mb-0">Louis Ferguson</h3>
                                                    <p class="mb-2">Instructor of Marketing</p>
                                                    <!-- Social button -->
                                                    <ul class="list-inline mb-3">
                                                        <li class="list-inline-item me-3">
                                                            <a href="#" class="fs-5 text-twitter"><i
                                                                    class="fab fa-twitter-square"></i></a>
                                                        </li>
                                                        <li class="list-inline-item me-3">
                                                            <a href="#" class="fs-5 text-instagram"><i
                                                                    class="fab fa-instagram-square"></i></a>
                                                        </li>
                                                        <li class="list-inline-item me-3">
                                                            <a href="#" class="fs-5 text-facebook"><i
                                                                    class="fab fa-facebook-square"></i></a>
                                                        </li>
                                                        <li class="list-inline-item me-3">
                                                            <a href="#" class="fs-5 text-linkedin"><i
                                                                    class="fab fa-linkedin"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="fs-5 text-youtube"><i
                                                                    class="fab fa-youtube-square"></i></a>
                                                        </li>
                                                    </ul>

                                                    <!-- Info -->
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <div class="d-flex align-items-center me-3 mb-2">
                                                                <span
                                                                    class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i
                                                                        class="fas fa-user-graduate"></i></span>
                                                                <span class="h6 fw-light mb-0 ms-2">9.1k</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <div class="d-flex align-items-center me-3 mb-2">
                                                                <span
                                                                    class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i
                                                                        class="fas fa-star"></i></span>
                                                                <span class="h6 fw-light mb-0 ms-2">4.5</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <div class="d-flex align-items-center me-3 mb-2">
                                                                <span
                                                                    class="icon-md bg-danger bg-opacity-10 text-danger rounded-circle"><i
                                                                        class="fas fa-play"></i></span>
                                                                <span class="h6 fw-light mb-0 ms-2">29 Courses</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <div class="d-flex align-items-center me-3 mb-2">
                                                                <span
                                                                    class="icon-md bg-info bg-opacity-10 text-info rounded-circle"><i
                                                                        class="fas fa-comment-dots"></i></span>
                                                                <span class="h6 fw-light mb-0 ms-2">205</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card END -->

                                    <!-- Instructor info -->
                                    <h5 class="mb-3">About Instructor</h5>
                                    <p class="mb-3">Fulfilled direction use continual set him propriety continued.
                                        Saw met applauded favorite deficient engrossed concealed and her. Concluded boy
                                        perpetual old supposing. Farther related bed and passage comfort civilly.
                                        Dashboards see frankness objection abilities. As hastened oh produced prospect
                                        formerly up am. Placing forming nay looking old married few has. Margaret
                                        disposed of add screened rendered six say his striking confined. </p>
                                    <p class="mb-3">As it so contrasted oh estimating instrument. Size like body
                                        someone had. Are conduct viewing boy minutes warrant the expense? Tolerably
                                        behavior may admit daughters offending her ask own. Praise effect wishes change
                                        way and any wanted.</p>
                                    <!-- Email address -->
                                    <div class="col-12">
                                        <ul class="list-group list-group-borderless mb-0">
                                            <li class="list-group-item pb-0">Mail ID:<a href="#"
                                                    class="ms-2">hello@email.com</a></li>
                                            <li class="list-group-item pb-0">Web:<a href="#"
                                                    class="ms-2">https://eduport.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Content END -->

                                <!-- Content START -->
                                <div class="tab-pane fade" id="course-pills-4" role="tabpanel"
                                    aria-labelledby="course-pills-tab-4">
                                    <!-- Review START -->
                                    <div class="row mb-4">
                                        <h5 class="mb-4">Our Student Reviews</h5>

                                        <!-- Rating info -->
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <div class="text-center">
                                                <!-- Info -->
                                                <h2 class="mb-0">4.5</h2>
                                                <!-- Star -->
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-0"><i
                                                            class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0"><i
                                                            class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0"><i
                                                            class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0"><i
                                                            class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0"><i
                                                            class="fas fa-star-half-alt text-warning"></i></li>
                                                </ul>
                                                <p class="mb-0">(Based on todays review)</p>
                                            </div>
                                        </div>

                                        <!-- Progress-bar and star -->
                                        <div class="col-md-8">
                                            <div class="row align-items-center">
                                                <!-- Progress bar and Rating -->
                                                <div class="col-6 col-sm-8">
                                                    <!-- Progress item -->
                                                    <div class="progress progress-sm bg-warning bg-opacity-15">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div class="col-6 col-sm-4">
                                                    <!-- Star item -->
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
                                                                class="fas fa-star text-warning"></i></li>
                                                    </ul>
                                                </div>

                                                <!-- Progress bar and Rating -->
                                                <div class="col-6 col-sm-8">
                                                    <!-- Progress item -->
                                                    <div class="progress progress-sm bg-warning bg-opacity-15">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div class="col-6 col-sm-4">
                                                    <!-- Star item -->
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
                                                    </ul>
                                                </div>

                                                <!-- Progress bar and Rating -->
                                                <div class="col-6 col-sm-8">
                                                    <!-- Progress item -->
                                                    <div class="progress progress-sm bg-warning bg-opacity-15">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div class="col-6 col-sm-4">
                                                    <!-- Star item -->
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item me-0 small"><i
                                                                class="fas fa-star text-warning"></i></li>
                                                        <li class="list-inline-item me-0 small"><i
                                                                class="fas fa-star text-warning"></i></li>
                                                        <li class="list-inline-item me-0 small"><i
                                                                class="fas fa-star text-warning"></i></li>
                                                        <li class="list-inline-item me-0 small"><i
                                                                class="far fa-star text-warning"></i></li>
                                                        <li class="list-inline-item me-0 small"><i
                                                                class="far fa-star text-warning"></i></li>
                                                    </ul>
                                                </div>

                                                <!-- Progress bar and Rating -->
                                                <div class="col-6 col-sm-8">
                                                    <!-- Progress item -->
                                                    <div class="progress progress-sm bg-warning bg-opacity-15">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div class="col-6 col-sm-4">
                                                    <!-- Star item -->
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item me-0 small"><i
                                                                class="fas fa-star text-warning"></i></li>
                                                        <li class="list-inline-item me-0 small"><i
                                                                class="fas fa-star text-warning"></i></li>
                                                        <li class="list-inline-item me-0 small"><i
                                                                class="far fa-star text-warning"></i></li>
                                                        <li class="list-inline-item me-0 small"><i
                                                                class="far fa-star text-warning"></i></li>
                                                        <li class="list-inline-item me-0 small"><i
                                                                class="far fa-star text-warning"></i></li>
                                                    </ul>
                                                </div>

                                                <!-- Progress bar and Rating -->
                                                <div class="col-6 col-sm-8">
                                                    <!-- Progress item -->
                                                    <div class="progress progress-sm bg-warning bg-opacity-15">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 20%" aria-valuenow="20" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div class="col-6 col-sm-4">
                                                    <!-- Star item -->
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item me-0 small"><i
                                                                class="fas fa-star text-warning"></i></li>
                                                        <li class="list-inline-item me-0 small"><i
                                                                class="far fa-star text-warning"></i></li>
                                                        <li class="list-inline-item me-0 small"><i
                                                                class="far fa-star text-warning"></i></li>
                                                        <li class="list-inline-item me-0 small"><i
                                                                class="far fa-star text-warning"></i></li>
                                                        <li class="list-inline-item me-0 small"><i
                                                                class="far fa-star text-warning"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Review END -->

                                    <!-- Student review START -->
                                    <div class="row">
                                        <!-- Review item START -->
                                        <div class="d-md-flex my-4">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-xl me-4 flex-shrink-0">
                                                <img class="avatar-img rounded-circle"
                                                    src="assets/images/avatar/09.jpg" alt="avatar">
                                            </div>
                                            <!-- Text -->
                                            <div>
                                                <div class="d-sm-flex mt-1 mt-md-0 align-items-center">
                                                    <h5 class="me-3 mb-0">Jacqueline Miller</h5>
                                                    <!-- Review star -->
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item me-0"><i
                                                                class="fas fa-star text-warning"></i></li>
                                                        <li class="list-inline-item me-0"><i
                                                                class="fas fa-star text-warning"></i></li>
                                                        <li class="list-inline-item me-0"><i
                                                                class="fas fa-star text-warning"></i></li>
                                                        <li class="list-inline-item me-0"><i
                                                                class="fas fa-star text-warning"></i></li>
                                                        <li class="list-inline-item me-0"><i
                                                                class="far fa-star text-warning"></i></li>
                                                    </ul>
                                                </div>
                                                <!-- Info -->
                                                <p class="small mb-2">2 days ago</p>
                                                <p class="mb-2">Perceived end knowledge certainly day sweetness why
                                                    cordially. Ask a quick six seven offer see among. Handsome met
                                                    debating sir dwelling age material. As style lived he worse dried.
                                                    Offered related so visitors we private removed. Moderate do subjects
                                                    to distance. </p>
                                                <!-- Like and dislike button -->
                                                <div class="btn-group" role="group"
                                                    aria-label="Basic radio toggle button group">
                                                    <!-- Like button -->
                                                    <input type="radio" class="btn-check" name="btnradio"
                                                        id="btnradio1">
                                                    <label class="btn btn-outline-light btn-sm mb-0"
                                                        for="btnradio1"><i
                                                            class="far fa-thumbs-up me-1"></i>25</label>
                                                    <!-- Dislike button -->
                                                    <input type="radio" class="btn-check" name="btnradio"
                                                        id="btnradio2">
                                                    <label class="btn btn-outline-light btn-sm mb-0" for="btnradio2">
                                                        <i class="far fa-thumbs-down me-1"></i>2</label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Comment children level 1 -->
                                        <div class="d-md-flex mb-4 ps-4 ps-md-5">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-lg me-4 flex-shrink-0">
                                                <img class="avatar-img rounded-circle"
                                                    src="assets/images/avatar/02.jpg" alt="avatar">
                                            </div>
                                            <!-- Text -->
                                            <div>
                                                <div class="d-sm-flex mt-1 mt-md-0 align-items-center">
                                                    <h5 class="me-3 mb-0">Louis Ferguson</h5>
                                                </div>
                                                <!-- Info -->
                                                <p class="small mb-2">1 days ago</p>
                                                <p class="mb-2">Water timed folly right aware if oh truth.
                                                    Imprudence attachment him for sympathize. Large above be to means.
                                                    Dashwood does provide stronger is. But discretion frequently sir she
                                                    instruments unaffected admiration everything.</p>
                                            </div>
                                        </div>

                                        <!-- Divider -->
                                        <hr>
                                        <!-- Review item END -->

                                        <!-- Review item START -->
                                        <div class="d-md-flex my-4">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-xl me-4 flex-shrink-0">
                                                <img class="avatar-img rounded-circle"
                                                    src="assets/images/avatar/07.jpg" alt="avatar">
                                            </div>
                                            <!-- Text -->
                                            <div>
                                                <div class="d-sm-flex mt-1 mt-md-0 align-items-center">
                                                    <h5 class="me-3 mb-0">Dennis Barrett</h5>
                                                    <!-- Review star -->
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item me-0"><i
                                                                class="fas fa-star text-warning"></i></li>
                                                        <li class="list-inline-item me-0"><i
                                                                class="fas fa-star text-warning"></i></li>
                                                        <li class="list-inline-item me-0"><i
                                                                class="fas fa-star text-warning"></i></li>
                                                        <li class="list-inline-item me-0"><i
                                                                class="fas fa-star text-warning"></i></li>
                                                        <li class="list-inline-item me-0"><i
                                                                class="far fa-star text-warning"></i></li>
                                                    </ul>
                                                </div>
                                                <!-- Info -->
                                                <p class="small mb-2">2 days ago</p>
                                                <p class="mb-2">Handsome met debating sir dwelling age material. As
                                                    style lived he worse dried. Offered related so visitors we private
                                                    removed. Moderate do subjects to distance. </p>
                                                <!-- Like and dislike button -->
                                                <div class="btn-group" role="group"
                                                    aria-label="Basic radio toggle button group">
                                                    <!-- Like button -->
                                                    <input type="radio" class="btn-check" name="btnradio"
                                                        id="btnradio3">
                                                    <label class="btn btn-outline-light btn-sm mb-0"
                                                        for="btnradio3"><i
                                                            class="far fa-thumbs-up me-1"></i>25</label>
                                                    <!-- Dislike button -->
                                                    <input type="radio" class="btn-check" name="btnradio"
                                                        id="btnradio4">
                                                    <label class="btn btn-outline-light btn-sm mb-0" for="btnradio4">
                                                        <i class="far fa-thumbs-down me-1"></i>2</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Review item END -->
                                        <!-- Divider -->
                                        <hr>
                                    </div>
                                    <!-- Student review END -->

                                    <!-- Leave Review START -->
                                    <div class="mt-2">
                                        <h5 class="mb-4">Leave a Review</h5>
                                        <form class="row g-3">
                                            <!-- Name -->
                                            <div class="col-md-6 bg-light-input">
                                                <input type="text" class="form-control" id="inputtext"
                                                    placeholder="Name" aria-label="First name">
                                            </div>
                                            <!-- Email -->
                                            <div class="col-md-6 bg-light-input">
                                                <input type="email" class="form-control" placeholder="Email"
                                                    id="inputEmail4">
                                            </div>
                                            <!-- Rating -->
                                            <div class="col-12 bg-light-input">
                                                <select id="inputState2" class="form-select js-choice">
                                                    <option selected="">★★★★★ (5/5)</option>
                                                    <option>★★★★☆ (4/5)</option>
                                                    <option>★★★☆☆ (3/5)</option>
                                                    <option>★★☆☆☆ (2/5)</option>
                                                    <option>★☆☆☆☆ (1/5)</option>
                                                </select>
                                            </div>
                                            <!-- Message -->
                                            <div class="col-12 bg-light-input">
                                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Your review" rows="3"></textarea>
                                            </div>
                                            <!-- Button -->
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary mb-0">Post
                                                    Review</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Leave Review END -->

                                </div>
                                <!-- Content END -->

                                <!-- Content START -->
                                <div class="tab-pane fade" id="course-pills-5" role="tabpanel"
                                    aria-labelledby="course-pills-tab-5">
                                    <!-- Title -->
                                    <h5 class="mb-3">Frequently Asked Questions</h5>
                                    <!-- Accordion START -->
                                    <div class="accordion accordion-flush" id="accordionExample">
                                        <!-- Item -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                    <span class="text-secondary fw-bold me-3">01</span>
                                                    <span class="fw-bold">How Digital Marketing Work?</span>
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body pt-0">
                                                    Comfort reached gay perhaps chamber his six detract besides add.
                                                    Moonlight newspaper up its enjoyment agreeable depending. Timed
                                                    voice share led him to widen noisy young. At weddings believed
                                                    laughing although the material does the exercise of. Up attempt
                                                    offered ye civilly so sitting to. She new course gets living within
                                                    Elinor joy. She rapturous suffering concealed.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Item -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    <span class="text-secondary fw-bold me-3">02</span>
                                                    <span class="fw-bold">What is SEO?</span>
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body pt-0">
                                                    Pleasure and so read the was hope entire first decided the so must
                                                    have as on was want up of I will rival in came this touched got a
                                                    physics to travelling so all especially refinement monstrous desk
                                                    they was arrange the overall helplessly out of particularly ill are
                                                    purer.
                                                    <p class="mt-2">Person she control of to beginnings view looked
                                                        eyes Than continues its and because and given and shown creating
                                                        curiously to more in are man were smaller by we instead the
                                                        these sighed Avoid in the sufficient me real man longer of his
                                                        how her for countries to brains warned notch important Finds be
                                                        to the of on the increased explain noise of power deep asking
                                                        contribution this live of suppliers goals bit separated poured
                                                        sort several the was organization the if relations go work after
                                                        mechanic But we've area wasn't everything needs of and doctor
                                                        where would.</p>
                                                    Go he prisoners And mountains in just switching city steps Might
                                                    rung line what Mr Bulk; Was or between towards the have phase were
                                                    its world my samples are the was royal he luxury the about trying
                                                    And on he to my enough is was the remember a although lead in were
                                                    through serving their assistant fame day have for its after would
                                                    cheek dull have what in go feedback assignment Her of a any help if
                                                    the a of semantics is rational overhauls following in from our
                                                    hazardous and used more he themselves the parents up just
                                                    regulatory.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Item -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    <span class="text-secondary fw-bold me-3">03</span>
                                                    <span class="fw-bold">Who should join this course?</span>
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body pt-0">
                                                    Post no so what deal evil rent by real in. But her ready least set
                                                    lived spite solid. September how men saw tolerably two behavior
                                                    arranging. She offices for highest and replied one venture pasture.
                                                    Applauded no discovery in newspaper allowance am northward.
                                                    Frequently partiality possession resolution at or appearance
                                                    unaffected me. Engaged its was the evident pleased husband. Ye
                                                    goodness felicity do disposal dwelling no. First am plate jokes to
                                                    began to cause a scale. <strong>Subjects he prospect elegance
                                                        followed no overcame</strong> possible it on.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Item -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                    aria-expanded="false" aria-controls="collapseFour">
                                                    <span class="text-secondary fw-bold me-3">04</span>
                                                    <span class="fw-bold">What are the T&C for this program?</span>
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse"
                                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body pt-0">
                                                    Night signs creeping yielding green Seasons together man green
                                                    fruitful make fish behold earth unto you'll lights living moving sea
                                                    open for fish day multiply tree good female god had fruitful of
                                                    creature fill shall don't day fourth lesser he the isn't let
                                                    multiply may Creeping earth under was You're without which image
                                                    stars in Own creeping night of wherein Heaven years their he over
                                                    doesn't whose won't kind seasons light Won't that fish him whose
                                                    won't also it dominion heaven fruitful Whales created And likeness
                                                    doesn't that Years without divided saying morning creeping hath
                                                    you'll seas cattle in multiply under together in us said above dry
                                                    tree herb saw living darkness without have won't for i behold meat
                                                    brought winged Moving living second beast Over fish place beast
                                                    image very him evening Thing they're fruit together forth day Seed
                                                    lights Land creature together Multiply waters form brought.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Item -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFive">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                    aria-expanded="false" aria-controls="collapseFive">
                                                    <span class="text-secondary fw-bold me-3">05</span>
                                                    <span class="fw-bold">What certificates will I be received for
                                                        this program?</span>
                                                </button>
                                            </h2>
                                            <div id="collapseFive" class="accordion-collapse collapse"
                                                aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                <div class="accordion-body pt-0">
                                                    Smile spoke total few great had never their too Amongst moments do
                                                    in arrived at my replied Fat weddings servants but man believed
                                                    prospect Companions understood is as especially pianoforte
                                                    connection introduced Nay newspaper can sportsman are admitting
                                                    gentleman belonging his Is oppose no he summer lovers twenty in Not
                                                    his difficulty boisterous surrounded bed Seems folly if in given
                                                    scale Sex contented dependent conveying advantage.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion END -->
                                </div>
                                <!-- Content END -->
                            </div>
                            <!-- Tab contents END -->
                        </div>
                    </div>
                    <!-- Main content END -->

                    <!-- Right sidebar START -->
                    <div class="col-lg-4 pt-5 pt-lg-0">
                        <div class="row mb-5 mb-lg-0">
                            <div class="col-md-6 col-lg-12">
                                <!-- Video START -->
                                <div class="card shadow p-2 mb-4 z-index-9">
                                    <div class="overflow-hidden rounded-3">
                                        <img src="assets/images/courses/4by3/01.jpg" class="card-img"
                                            alt="course image">
                                        <!-- Overlay -->
                                        <div class="bg-overlay bg-dark opacity-6"></div>
                                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                            <!-- Video button and link -->
                                            <div class="m-auto">
                                                <a href="https://www.youtube.com/embed/tXHviS-4ygo"
                                                    class="btn btn-lg text-danger btn-round btn-white-shadow mb-0"
                                                    data-glightbox="" data-gallery="course-video">
                                                    <i class="fas fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card body -->
                                    <div class="card-body px-3">
                                        <!-- Info -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <!-- Price and time -->
                                            <div>
                                                <div class="d-flex align-items-center">
                                                    <h3 class="fw-bold mb-0 me-2">Ksh. 150</h3>
                                                    <span class="text-decoration-line-through mb-0 me-2">Ksh.
                                                        350</span>
                                                    <span class="badge bg-orange text-white mb-0">60% off</span>
                                                </div>
                                                <p class="mb-0 text-danger"><i class="fas fa-stopwatch me-2"></i>5
                                                    days left at this price</p>
                                            </div>

                                            <!-- Share button with dropdown -->
                                            <div class="dropdown">
                                                <!-- Share button -->
                                                <a href="#" class="btn btn-sm btn-light rounded small"
                                                    role="button" id="dropdownShare" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="fas fa-fw fa-share-alt"></i>
                                                </a>
                                                <!-- dropdown button -->
                                                <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                                                    aria-labelledby="dropdownShare">
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fab fa-twitter-square me-2"></i>Twitter</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fab fa-facebook-square me-2"></i>Facebook</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fab fa-linkedin me-2"></i>LinkedIn</a></li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fas fa-copy me-2"></i>Copy link</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Buttons -->
                                        <div class="mt-3 d-sm-flex justify-content-sm-between">
                                            <a href="#" class="btn btn-outline-primary mb-0">Free trial</a>
                                            <a href="#" class="btn btn-success mb-0">Buy course</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Video END -->

                                <!-- Course info START -->
                                <div class="card card-body shadow p-4 mb-4">
                                    <!-- Title -->
                                    <h4 class="mb-3">This course includes</h4>
                                    <ul class="list-group list-group-borderless">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <span class="h6 fw-light mb-0"><i
                                                    class="fas fa-fw fa-book-open text-primary"></i>Lectures</span>
                                            <span>30</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <span class="h6 fw-light mb-0"><i
                                                    class="fas fa-fw fa-clock text-primary"></i>Duration</span>
                                            <span>4h 50m</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <span class="h6 fw-light mb-0"><i
                                                    class="fas fa-fw fa-signal text-primary"></i>Skills</span>
                                            <span>Beginner</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <span class="h6 fw-light mb-0"><i
                                                    class="fas fa-fw fa-globe text-primary"></i>Language</span>
                                            <span>English</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <span class="h6 fw-light mb-0"><i
                                                    class="fas fa-fw fa-user-clock text-primary"></i>Deadline</span>
                                            <span>Nov 30 2021</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <span class="h6 fw-light mb-0"><i
                                                    class="fas fa-fw fa-medal text-primary"></i>Certificate</span>
                                            <span>Yes</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Course info END -->
                            </div>

                            <div class="col-md-6 col-lg-12">
                                <!-- Recently Viewed START -->
                                <div class="card card-body shadow p-4 mb-4">
                                    <!-- Title -->
                                    <h4 class="mb-3">Recently Viewed</h4>
                                    <!-- Course item START -->
                                    <div class="row gx-3 mb-3">
                                        <!-- Image -->
                                        <div class="col-4">
                                            <img class="rounded" src="assets/images/courses/4by3/21.jpg"
                                                alt="">
                                        </div>
                                        <!-- Info -->
                                        <div class="col-8">
                                            <h6 class="mb-0"><a href="#">Fundamentals of Business
                                                    Analysis</a></h6>
                                            <ul
                                                class="list-group list-group-borderless mt-1 d-flex justify-content-between">
                                                <li class="list-group-item px-0 d-flex justify-content-between">
                                                    <span class="text-success">$130</span>
                                                    <span class="h6 fw-light">4.5<i
                                                            class="fas fa-star text-warning ms-1"></i></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Course item END -->

                                    <!-- Course item START -->
                                    <div class="row gx-3">
                                        <!-- Image -->
                                        <div class="col-4">
                                            <img class="rounded" src="assets/images/courses/4by3/18.jpg"
                                                alt="">
                                        </div>
                                        <!-- Info -->
                                        <div class="col-8">
                                            <h6 class="mb-0"><a href="#">The Complete Video Production
                                                    Bootcamp</a></h6>
                                            <ul
                                                class="list-group list-group-borderless mt-1 d-flex justify-content-between">
                                                <li class="list-group-item px-0 d-flex justify-content-between">
                                                    <span class="text-success">$150</span>
                                                    <span class="h6 fw-light">4.0<i
                                                            class="fas fa-star text-warning ms-1"></i></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Course item END -->
                                </div>
                                <!-- Recently Viewed END -->

                                <!-- Tags START -->
                                <div class="card card-body shadow p-4">
                                    <h4 class="mb-3">Popular Tags</h4>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm"
                                                href="#">blog</a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm"
                                                href="#">business</a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm"
                                                href="#">theme</a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm"
                                                href="#">bootstrap</a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm"
                                                href="#">data science</a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm"
                                                href="#">web development</a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm"
                                                href="#">tips</a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm"
                                                href="#">machine learning</a> </li>
                                    </ul>
                                </div>
                                <!-- Tags END -->
                            </div>
                        </div><!-- Row End -->
                    </div>
                    <!-- Right sidebar END -->

                </div><!-- Row END -->
            </div>
        </section>
        <!-- =======================
Page content END -->

        <!-- =======================
Listed courses START -->
        <section class="pt-0">
            <div class="container">
                <!-- Title -->
                <div class="row mb-4">
                    <h2 class="mb-0">Top Listed Courses</h2>
                </div>

                <div class="row">
                    <!-- Slider START -->
                    <div class="tiny-slider arrow-round arrow-blur arrow-hover">
                        <div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-edge="2"
                            data-dots="false" data-items="3" data-items-lg="2" data-items-sm="1">

                            <!-- Card Item START -->
                            <div>
                                <div class="card p-2 border">
                                    <div class="rounded-top overflow-hidden">
                                        <div class="card-overlay-hover">
                                            <img src="assets/images/courses/4by3/17.jpg" class="card-img-top"
                                                alt="course image">
                                        </div>
                                        <!-- Hover element -->
                                        <div class="card-img-overlay">
                                            <div class="card-element-hover d-flex justify-content-end">
                                                <a href="#"
                                                    class="icon-md bg-white rounded-circle text-center">
                                                    <i class="fas fa-shopping-cart text-danger"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <!-- Badge and icon -->
                                        <div class="d-flex justify-content-between">
                                            <!-- Rating and info -->
                                            <ul class="list-inline hstack gap-2 mb-0">
                                                <!-- Info -->
                                                <li
                                                    class="list-inline-item d-flex justify-content-center align-items-center">
                                                    <div
                                                        class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle">
                                                        <i class="fas fa-user-graduate"></i>
                                                    </div>
                                                    <span class="h6 fw-light ms-2 mb-0">9.1k</span>
                                                </li>
                                                <!-- Rating -->
                                                <li
                                                    class="list-inline-item d-flex justify-content-center align-items-center">
                                                    <div
                                                        class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle">
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="h6 fw-light ms-2 mb-0">4.5</span>
                                                </li>
                                            </ul>
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle"
                                                    src="assets/images/avatar/09.jpg" alt="avatar">
                                            </div>
                                        </div>
                                        <!-- Divider -->
                                        <hr>
                                        <!-- Title -->
                                        <h5 class="card-title"><a href="#">The Complete Digital Marketing
                                                Course - 12 Courses in 1</a></h5>
                                        <!-- Badge and Price -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#" class="badge bg-info bg-opacity-10 text-info"><i
                                                    class="fas fa-circle small fw-bold me-2"></i>Personal
                                                Development</a>
                                            <!-- Price -->
                                            <h3 class="text-success mb-0">$140</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Item END -->

                            <!-- Card Item START -->
                            <div>
                                <div class="card p-2 border">
                                    <div class="rounded-top overflow-hidden">
                                        <div class="card-overlay-hover">
                                            <img src="assets/images/courses/4by3/18.jpg" class="card-img-top"
                                                alt="course image">
                                        </div>
                                        <!-- Hover element -->
                                        <div class="card-img-overlay">
                                            <div class="card-element-hover d-flex justify-content-end">
                                                <a href="#"
                                                    class="icon-md bg-white rounded-circle text-center">
                                                    <i class="fas fa-shopping-cart text-danger"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <!-- Badge and icon -->
                                        <div class="d-flex justify-content-between">
                                            <!-- Rating and info -->
                                            <ul class="list-inline hstack gap-2 mb-0">
                                                <!-- Info -->
                                                <li
                                                    class="list-inline-item d-flex justify-content-center align-items-center">
                                                    <div
                                                        class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle">
                                                        <i class="fas fa-user-graduate"></i>
                                                    </div>
                                                    <span class="h6 fw-light ms-2 mb-0">2.5k</span>
                                                </li>
                                                <!-- Rating -->
                                                <li
                                                    class="list-inline-item d-flex justify-content-center align-items-center">
                                                    <div
                                                        class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle">
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="h6 fw-light ms-2 mb-0">3.6</span>
                                                </li>
                                            </ul>
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle"
                                                    src="assets/images/avatar/07.jpg" alt="avatar">
                                            </div>
                                        </div>
                                        <!-- Divider -->
                                        <hr>
                                        <!-- Title -->
                                        <h5 class="card-title"><a href="#">Fundamentals of Business
                                                Analysis</a></h5>
                                        <!-- Badge and Price -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#" class="badge bg-info bg-opacity-10 text-info"><i
                                                    class="fas fa-circle small fw-bold me-2"></i>Business
                                                Development</a>
                                            <!-- Price -->
                                            <h3 class="text-success mb-0">$160</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Item END -->

                            <!-- Card Item START -->
                            <div>
                                <div class="card p-2 border">
                                    <div class="rounded-top overflow-hidden">
                                        <div class="card-overlay-hover">
                                            <img src="assets/images/courses/4by3/21.jpg" class="card-img-top"
                                                alt="course image">
                                        </div>
                                        <!-- Hover element -->
                                        <div class="card-img-overlay">
                                            <div class="card-element-hover d-flex justify-content-end">
                                                <a href="#"
                                                    class="icon-md bg-white rounded-circle text-center">
                                                    <i class="fas fa-shopping-cart text-danger"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <!-- Badge and icon -->
                                        <div class="d-flex justify-content-between">
                                            <!-- Rating and info -->
                                            <ul class="list-inline hstack gap-2 mb-0">
                                                <!-- Info -->
                                                <li
                                                    class="list-inline-item d-flex justify-content-center align-items-center">
                                                    <div
                                                        class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle">
                                                        <i class="fas fa-user-graduate"></i>
                                                    </div>
                                                    <span class="h6 fw-light ms-2 mb-0">6k</span>
                                                </li>
                                                <!-- Rating -->
                                                <li
                                                    class="list-inline-item d-flex justify-content-center align-items-center">
                                                    <div
                                                        class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle">
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="h6 fw-light ms-2 mb-0">3.8</span>
                                                </li>
                                            </ul>
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle"
                                                    src="assets/images/avatar/05.jpg" alt="avatar">
                                            </div>
                                        </div>
                                        <!-- Divider -->
                                        <hr>
                                        <!-- Title -->
                                        <h5 class="card-title"><a href="#">Google Ads Training: Become a PPC
                                                Expert</a></h5>
                                        <!-- Badge and Price -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#" class="badge bg-info bg-opacity-10 text-info"><i
                                                    class="fas fa-circle small fw-bold me-2"></i> SEO</a>
                                            <!-- Price -->
                                            <h3 class="text-success mb-0">$226</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Item END -->

                            <!-- Card Item START -->
                            <div>
                                <div class="card p-2 border">
                                    <div class="rounded-top overflow-hidden">
                                        <div class="card-overlay-hover">
                                            <img src="assets/images/courses/4by3/20.jpg" class="card-img-top"
                                                alt="course image">
                                        </div>
                                        <!-- Hover element -->
                                        <div class="card-img-overlay">
                                            <div class="card-element-hover d-flex justify-content-end">
                                                <a href="#"
                                                    class="icon-md bg-white rounded-circle text-center">
                                                    <i class="fas fa-shopping-cart text-danger"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <!-- Badge and icon -->
                                        <div class="d-flex justify-content-between">
                                            <!-- Rating and info -->
                                            <ul class="list-inline hstack gap-2 mb-0">
                                                <!-- Info -->
                                                <li
                                                    class="list-inline-item d-flex justify-content-center align-items-center">
                                                    <div
                                                        class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle">
                                                        <i class="fas fa-user-graduate"></i>
                                                    </div>
                                                    <span class="h6 fw-light ms-2 mb-0">15k</span>
                                                </li>
                                                <!-- Rating -->
                                                <li
                                                    class="list-inline-item d-flex justify-content-center align-items-center">
                                                    <div
                                                        class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle">
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="h6 fw-light ms-2 mb-0">4.8</span>
                                                </li>
                                            </ul>
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle"
                                                    src="assets/images/avatar/02.jpg" alt="avatar">
                                            </div>
                                        </div>
                                        <!-- Divider -->
                                        <hr>
                                        <!-- Title -->
                                        <h5 class="card-title"><a href="#">Behavior, Psychology and Care
                                                Training</a></h5>
                                        <!-- Badge and Price -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#" class="badge bg-info bg-opacity-10 text-info"><i
                                                    class="fas fa-circle small fw-bold me-2"></i>Lifestyle</a>
                                            <!-- Price -->
                                            <h3 class="text-success mb-0">$342</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Item END -->
                        </div>
                    </div>
                    <!-- Slider END -->
                </div>
            </div>
        </section>
        <!-- =======================
Listed courses END -->

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
                        <img class="light-mode-item h-40px" src="assets/images/gts_logo.png" alt="logo">
                        <img class="dark-mode-item h-40px" src="assets/images/gts_logo.png" alt="logo">
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

                    <p class="mb-0">Email:<span
                            class="h6 fw-light ms-2">contact@globaltempingservices.co.ke</span>
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

    <!-- Modal START -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header border-0 bg-transparent">
                    <!-- Close button -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body px-5 pb-5 position-relative overflow-hidden">

                    <!-- Element -->
                    <figure class="position-absolute bottom-0 end-0 mb-n4 me-n4 d-none d-sm-block">
                        <img src="assets/images/element/01.svg" alt="element">
                    </figure>
                    <figure class="position-absolute top-0 end-0 z-index-n1 opacity-2">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="818.6px" height="235.1px" viewbox="0 0 818.6 235.1">
                            <path class="fill-info"
                                d="M735,226.3c-5.7,0.6-11.5,1.1-17.2,1.7c-66.2,6.8-134.7,13.7-192.6-16.6c-34.6-18.1-61.4-47.9-87.3-76.7 c-21.4-23.8-43.6-48.5-70.2-66.7c-53.2-36.4-121.6-44.8-175.1-48c-13.6-0.8-27.5-1.4-40.9-1.9c-46.9-1.9-95.4-3.9-141.2-16.5 C8.3,1.2,6.2,0.6,4.2,0H0c3.3,1,6.6,2,10,3c46,12.5,94.5,14.6,141.5,16.5c13.4,0.6,27.3,1.1,40.8,1.9 c53.4,3.2,121.5,11.5,174.5,47.7c26.5,18.1,48.6,42.7,70,66.5c26,28.9,52.9,58.8,87.7,76.9c58.3,30.5,127,23.5,193.3,16.7 c5.8-0.6,11.5-1.2,17.2-1.7c26.2-2.6,55-4.2,83.5-2.2v-1.2C790,222,761.2,223.7,735,226.3z">
                            </path>
                        </svg>
                    </figure>
                    <!-- Title -->
                    <h2>Get Premium Course in <span class="text-success">$800</span></h2>
                    <p>Prosperous understood Middletons in conviction an uncommonly do. Supposing so be resolving
                        breakfast am or perfectly.</p>
                    <!-- Content -->
                    <div class="row mb-3 item-collapse">
                        <div class="col-sm-6">
                            <ul class="list-group list-group-borderless">
                                <li class="list-group-item text-body"> <i
                                        class="bi bi-patch-check-fill text-success"></i>High quality Curriculum</li>
                                <li class="list-group-item text-body"> <i
                                        class="bi bi-patch-check-fill text-success"></i>Tuition Assistance</li>
                                <li class="list-group-item text-body"> <i
                                        class="bi bi-patch-check-fill text-success"></i>Diploma course</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-group list-group-borderless">
                                <li class="list-group-item text-body"> <i
                                        class="bi bi-patch-check-fill text-success"></i>Intermediate courses</li>
                                <li class="list-group-item text-body"> <i
                                        class="bi bi-patch-check-fill text-success"></i>Over 200 online courses</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Button -->
                    <a href="#" class="btn btn-lg btn-orange-soft">Purchase premium</a>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer d-block bg-info">
                    <div class="d-sm-flex justify-content-sm-between align-items-center text-center text-sm-start">
                        <!-- Social media button -->
                        <ul class="list-inline mb-0 social-media-btn mb-2 mb-sm-0">
                            <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-facebook"
                                    href="#"><i class="fab fa-fw fa-facebook-f"></i></a> </li>
                            <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-instagram"
                                    href="#"><i class="fab fa-fw fa-instagram"></i></a> </li>
                            <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-twitter"
                                    href="#"><i class="fab fa-fw fa-twitter"></i></a> </li>
                            <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-linkedin"
                                    href="#"><i class="fab fa-fw fa-linkedin-in"></i></a> </li>
                        </ul>
                        <!-- Contact info -->
                        <div>
                            <p class="mb-1 small"><a href="#" class="text-white"><i
                                        class="far fa-envelope fa-fw me-2"></i>example@gmail.com</a></p>
                            <p class="mb-0 small"><a href="#" class="text-white"><i
                                        class="fas fa-headset fa-fw me-2"></i>123-456-789</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal END -->

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i>
    </div>

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="assets/vendor/tiny-slider/tiny-slider.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.js"></script>
    <script src="assets/vendor/choices/js/choices.min.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>

</body>

</html>
