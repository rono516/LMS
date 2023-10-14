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
    <link rel="stylesheet" type="text/css" href="assets/vendor/choices/css/choices.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/aos/aos.css">

    <!-- Theme CSS -->
    <link id="style-switch" rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

    <!-- Header START -->
    <header class="navbar-light navbar-sticky">
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
                            <a class="nav-link" href="#" id="accounntMenu" aria-haspopup="true"
                                aria-expanded="false">Contact Us</a>
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
Page Banner START -->
        <section class="pt-0">
            <div class="container-fluid px-0">
                <div class="card bg-blue h-100px h-md-200px rounded-0"
                    style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
                </div>
            </div>
            <div class="container mt-n4">
                <div class="row">
                    <div class="col-12">
                        <div class="card bg-transparent card-body pb-0 ps-0 mt-2 mt-sm-0">
                            <div class="row d-sm-flex justify-sm-content-between mt-2 mt-md-0">
                                <!-- Avatar -->
                                <div class="col-auto">
                                    <div class="avatar avatar-xxl position-relative mt-n3">
                                        <img class="avatar-img rounded-circle border border-white border-3 shadow"
                                            src="assets/images/avatar/09.jpg" alt="">
                                        {{-- <span
                                            class="badge bg-success text-white rounded-pill position-absolute top-50 start-100 translate-middle mt-4 mt-md-5 ms-n3 px-md-3">Pro</span> --}}
                                    </div>
                                </div>
                                <!-- Profile info -->
                                <div class="col d-sm-flex justify-content-between align-items-center">
                                    <div>
                                        <h1 class="my-1 fs-4">{{ auth()->user()->name }}</h1>
                                        <ul class="list-inline mb-0">
                                            {{-- <li class="list-inline-item me-3 mb-1 mb-sm-0">
                                                <span class="h6">255</span>
                                                <span class="text-body fw-light">points</span>
                                            </li> --}}
                                            <li class="list-inline-item me-3 mb-1 mb-sm-0">
                                                <span class="h6">7</span>
                                                <span class="text-body fw-light">Completed courses</span>
                                            </li>
                                            <li class="list-inline-item me-3 mb-1 mb-sm-0">
                                                <span class="h6">52</span>
                                                <span class="text-body fw-light">Completed lessons</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Button -->
                                    <div class="mt-2 mt-sm-0">
                                        <a href="student-course-list.html" class="btn btn-outline-primary mb-0">View
                                            my courses</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Advanced filter responsive toggler START -->
                        <!-- Divider -->
                        <hr class="d-xl-none">
                        <div class="col-12 col-xl-3 d-flex justify-content-between align-items-center">
                            <a class="h6 mb-0 fw-bold d-xl-none" href="#">Menu</a>
                            <button class="btn btn-primary d-xl-none" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                                <i class="fas fa-sliders-h"></i>
                            </button>
                        </div>
                        <!-- Advanced filter responsive toggler END -->
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
                <div class="row">

                    <!-- Right sidebar START -->
                    <div class="col-xl-3">
                        <!-- Responsive offcanvas body START -->
                        <nav class="navbar navbar-light navbar-expand-xl mx-0">
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                                aria-labelledby="offcanvasNavbarLabel">
                                <!-- Offcanvas header -->
                                <div class="offcanvas-header bg-light">
                                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">My profile</h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <!-- Offcanvas body -->
                                <div class="offcanvas-body p-3 p-xl-0">
                                    <div class="bg-dark border rounded-3 pb-0 p-3 w-100">
                                        <!-- Dashboard menu -->
                                        <div class="list-group list-group-dark list-group-borderless">
                                            <a class="list-group-item active" href="{{ url('/dashboard') }}"><i
                                                    class="bi bi-ui-checks-grid fa-fw me-2"></i>Dashboard</a>
                                            {{-- <a class="list-group-item" href="student-subscription.html"><i
                                                    class="bi bi-card-checklist fa-fw me-2"></i>My Subscriptions</a> --}}
                                            {{-- <a class="list-group-item" href="student-course-list.html"><i
                                                    class="bi bi-basket fa-fw me-2"></i>My Courses</a> --}}
                                            {{-- <a class="list-group-item" href="student-payment-info.html"><i
                                                    class="bi bi-credit-card-2-front fa-fw me-2"></i>Payment info</a> --}}
                                            <a class="list-group-item" href="{{ url('/wish_list_courses') }}"><i
                                                    class="bi bi-cart-check fa-fw me-2"></i>Wishlist</a>
                                            {{-- <a class="list-group-item" href="instructor-edit-profile.html"><i
                                                    class="bi bi-pencil-square fa-fw me-2"></i>Edit Profile</a> --}}
                                            {{-- <a class="list-group-item" href="instructor-setting.html"><i
                                                    class="bi bi-gear fa-fw me-2"></i>Settings</a> --}}
                                            {{-- <a class="list-group-item" href="instructor-delete-account.html"><i
                                                    class="bi bi-trash fa-fw me-2"></i>Delete Profile</a> --}}
                                            <a class="list-group-item text-danger bg-danger-soft-hover"
                                                href="{{ url('/logout') }}"><i
                                                    class="fas fa-sign-out-alt fa-fw me-2"></i>Sign
                                                Out</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                        <!-- Responsive offcanvas body END -->
                    </div>
                    <!-- Right sidebar END -->

                    <!-- Main content START -->
                    <div class="col-xl-9">

                        <!-- Counter boxes START -->
                        <div class="row mb-4">
                            <!-- Counter item -->
                            <div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
                                <div
                                    class="d-flex justify-content-center align-items-center p-4 bg-orange bg-opacity-15 rounded-3">
                                    <span class="display-6 lh-1 text-orange mb-0"><i
                                            class="fas fa-tv fa-fw"></i></span>
                                    <div class="ms-4">
                                        <div class="d-flex">
                                            <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                                data-purecounter-end="9" data-purecounter-delay="200">0</h5>
                                        </div>
                                        <p class="mb-0 h6 fw-light">Total Courses</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Counter item -->
                            <div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
                                <div
                                    class="d-flex justify-content-center align-items-center p-4 bg-purple bg-opacity-15 rounded-3">
                                    <span class="display-6 lh-1 text-purple mb-0"><i
                                            class="fas fa-clipboard-check fa-fw"></i></span>
                                    <div class="ms-4">
                                        <div class="d-flex">
                                            <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                                data-purecounter-end="52" data-purecounter-delay="200">0</h5>
                                        </div>
                                        <p class="mb-0 h6 fw-light">Complete lessons</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Counter item -->
                            <div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
                                <div
                                    class="d-flex justify-content-center align-items-center p-4 bg-success bg-opacity-10 rounded-3">
                                    <span class="display-6 lh-1 text-success mb-0"><i
                                            class="fas fa-medal fa-fw"></i></span>
                                    <div class="ms-4">
                                        <div class="d-flex">
                                            <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                                data-purecounter-end="8" data-purecounter-delay="300">0</h5>
                                        </div>
                                        <p class="mb-0 h6 fw-light">Achieved Certificates</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Counter boxes END -->

                        <div class="card border rounded-3">
                            <!-- Card header START -->
                            <div class="card-header border-bottom">
                                <h3 class="mb-0">My Courses List</h3>
                            </div>
                            <!-- Card header END -->

                            <!-- Card body START -->
                            <div class="card-body">

                                <!-- Search and select START -->
                                <div class="row g-3 align-items-center justify-content-between mb-4">
                                    <!-- Content -->
                                    <div class="col-md-8">
                                        <form class="rounded position-relative">
                                            <input class="form-control pe-5 bg-transparent" type="search"
                                                placeholder="Search" aria-label="Search">
                                            <button
                                                class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y"
                                                type="submit"><i class="fas fa-search fs-6 "></i></button>
                                        </form>
                                    </div>

                                    <!-- Select option -->
                                    <div class="col-md-3">
                                        <!-- Short by filter -->
                                        <form>
                                            <select class="form-select js-choice border-0 z-index-9 bg-transparent"
                                                aria-label=".form-select-sm">
                                                <option value="">Sort by</option>
                                                <option>Free</option>
                                                <option>Newest</option>
                                                <option>Most popular</option>
                                                <option>Most Viewed</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                                <!-- Search and select END -->

                                <!-- Course list table START -->
                                <div class="table-responsive border-0">
                                    <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                                        <!-- Table head -->
                                        <thead>
                                            <tr>
                                                <th scope="col" class="border-0 rounded-start">Course Title</th>
                                                <th scope="col" class="border-0">Total Lectures</th>
                                                <th scope="col" class="border-0">Completed Lecture</th>
                                                <th scope="col" class="border-0 rounded-end">Action</th>
                                            </tr>
                                        </thead>

                                        <!-- Table body START -->
                                        <tbody>
                                            <!-- Table item -->
                                            {{-- <tr>
                                                <!-- Table data -->
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <!-- Image -->
                                                        <div class="w-100px">
                                                            <img src="assets/images/courses/4by3/08.jpg"
                                                                class="rounded" alt="">
                                                        </div>
                                                        <div class="mb-0 ms-2">
                                                            <!-- Title -->
                                                            <h6><a href="#">Building Scalable APIs with
                                                                    GraphQL</a></h6>
                                                            <!-- Info -->
                                                            <div class="overflow-hidden">
                                                                <h6 class="mb-0 text-end">85%</h6>
                                                                <div
                                                                    class="progress progress-sm bg-primary bg-opacity-10">
                                                                    <div class="progress-bar bg-primary aos"
                                                                        role="progressbar" data-aos="slide-right"
                                                                        data-aos-delay="200" data-aos-duration="1000"
                                                                        data-aos-easing="ease-in-out"
                                                                        style="width: 85%" aria-valuenow="85"
                                                                        aria-valuemin="0" aria-valuemax="100">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <!-- Table data -->
                                                <td>56</td>

                                                <!-- Table data -->
                                                <td>40</td>

                                                <!-- Table data -->
                                                <td>
                                                    <a href="#"
                                                        class="btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0"><i
                                                            class="bi bi-play-circle me-1"></i>Continue</a>
                                                </td>
                                            </tr> --}}

                                            <!-- Table item -->
                                            <tr>
                                                <!-- Table data -->
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <!-- Image -->
                                                        <div class="w-100px">
                                                            <img src="assets/images/courses/4by3/03.jpg"
                                                                class="rounded" alt="">
                                                        </div>
                                                        <div class="mb-0 ms-2">
                                                            <!-- Title -->
                                                            <h6><a href="#">Create a Design System in Figma</a>
                                                            </h6>
                                                            <!-- Info -->
                                                            <div class="overflow-hidden">
                                                                <h6 class="mb-0 text-end">100%</h6>
                                                                <div
                                                                    class="progress progress-sm bg-primary bg-opacity-10">
                                                                    <div class="progress-bar bg-primary aos"
                                                                        role="progressbar" data-aos="slide-right"
                                                                        data-aos-delay="200" data-aos-duration="1000"
                                                                        data-aos-easing="ease-in-out"
                                                                        style="width: 100%" aria-valuenow="100"
                                                                        aria-valuemin="0" aria-valuemax="100">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <!-- Table data -->
                                                <td>42</td>

                                                <!-- Table data -->
                                                <td>42</td>

                                                <!-- Table data -->
                                                <td>
                                                    <button
                                                        class="btn btn-sm btn-success me-1 mb-1 mb-x;-0 disabled"><i
                                                            class="bi bi-check me-1"></i>Complete</button>
                                                    <a href="#" class="btn btn-sm btn-light me-1"><i
                                                            class="bi bi-arrow-repeat me-1"></i>Restart</a>
                                                </td>
                                            </tr>

                                            <!-- Table item -->
                                            <tr>
                                                <!-- Table data -->
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <!-- Image -->
                                                        <div class="w-100px">
                                                            <img src="assets/images/courses/4by3/05.jpg"
                                                                class="rounded" alt="">
                                                        </div>
                                                        <div class="mb-0 ms-2">
                                                            <!-- Title -->
                                                            <h6><a href="#">The Complete Web Development in
                                                                    python</a></h6>
                                                            <!-- Info -->
                                                            <div class="overflow-hidden">
                                                                <h6 class="mb-0 text-end">60%</h6>
                                                                <div
                                                                    class="progress progress-sm bg-primary bg-opacity-10">
                                                                    <div class="progress-bar bg-primary aos"
                                                                        role="progressbar" data-aos="slide-right"
                                                                        data-aos-delay="200" data-aos-duration="1000"
                                                                        data-aos-easing="ease-in-out"
                                                                        style="width: 60%" aria-valuenow="60"
                                                                        aria-valuemin="0" aria-valuemax="100">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <!-- Table data -->
                                                <td>28</td>

                                                <!-- Table data -->
                                                <td>12</td>

                                                <!-- Table data -->
                                                <td>
                                                    <a href="#"
                                                        class="btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0"><i
                                                            class="bi bi-play-circle me-1"></i>Continue</a>
                                                </td>
                                            </tr>

                                            <!-- Table item -->
                                            {{-- <tr>
                                                <!-- Table data -->
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <!-- Image -->
                                                        <div class="w-100px">
                                                            <img src="assets/images/courses/4by3/01.jpg"
                                                                class="rounded" alt="">
                                                        </div>
                                                        <div class="mb-0 ms-2">
                                                            <!-- Title -->
                                                            <h6><a href="#">Digital Marketing Masterclass</a>
                                                            </h6>
                                                            <!-- Info -->
                                                            <div class="overflow-hidden">
                                                                <h6 class="mb-0 text-end">40%</h6>
                                                                <div
                                                                    class="progress progress-sm bg-primary bg-opacity-10">
                                                                    <div class="progress-bar bg-primary aos"
                                                                        role="progressbar" data-aos="slide-right"
                                                                        data-aos-delay="200" data-aos-duration="1000"
                                                                        data-aos-easing="ease-in-out"
                                                                        style="width: 40%" aria-valuenow="40"
                                                                        aria-valuemin="0" aria-valuemax="100">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <!-- Table data -->
                                                <td>32</td>

                                                <!-- Table data -->
                                                <td>18</td>

                                                <!-- Table data -->
                                                <td>
                                                    <a href="#"
                                                        class="btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0"><i
                                                            class="bi bi-play-circle me-1"></i>Continue</a>
                                                </td>
                                            </tr> --}}

                                            <!-- Table item -->
                                            {{-- <tr>
                                                <!-- Table data -->
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <!-- Image -->
                                                        <div class="w-100px">
                                                            <img src="assets/images/courses/4by3/02.jpg"
                                                                class="rounded" alt="">
                                                        </div>
                                                        <div class="mb-0 ms-2">
                                                            <!-- Title -->
                                                            <h6><a href="#">Graphic Design Masterclass</a></h6>
                                                            <!-- Info -->
                                                            <div class="overflow-hidden">
                                                                <h6 class="mb-0 text-end">90%</h6>
                                                                <div
                                                                    class="progress progress-sm bg-primary bg-opacity-10">
                                                                    <div class="progress-bar bg-primary aos"
                                                                        role="progressbar" data-aos="slide-right"
                                                                        data-aos-delay="200" data-aos-duration="1000"
                                                                        data-aos-easing="ease-in-out"
                                                                        style="width: 90%" aria-valuenow="90"
                                                                        aria-valuemin="0" aria-valuemax="100">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <!-- Table data -->
                                                <td>16</td>

                                                <!-- Table data -->
                                                <td>14</td>

                                                <!-- Table data -->
                                                <td>
                                                    <a href="#"
                                                        class="btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0"><i
                                                            class="bi bi-play-circle me-1"></i>Continue</a>
                                                </td>
                                            </tr> --}}
                                        </tbody>
                                        <!-- Table body END -->
                                    </table>
                                </div>
                                <!-- Course list table END -->

                                <!-- Pagination START -->
                                <div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">
                                    <!-- Content -->
                                    <p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                                    <!-- Pagination -->
                                    <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                                        <ul class="pagination pagination-sm pagination-primary-soft mb-0 pb-0">
                                            <li class="page-item mb-0"><a class="page-link" href="#"
                                                    tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
                                            <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item mb-0 active"><a class="page-link"
                                                    href="#">2</a></li>
                                            <li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item mb-0"><a class="page-link" href="#"><i
                                                        class="fas fa-angle-right"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Pagination END -->
                            </div>
                            <!-- Card body START -->
                        </div>
                        <!-- Main content END -->
                    </div><!-- Row END -->
                </div>
            </div>
        </section>
        <!-- =======================
Page content END -->

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
    <script src="assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>

</body>

</html>
