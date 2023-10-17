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

                    <!-- Nav category menu END -->

                    <!-- Nav Main menu START -->
                    <ul class="navbar-nav navbar-nav-scroll me-auto">
                        <!-- Nav item 1 Demos -->
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="{{ url('/all_courses') }}" id="demoMenu"
                                aria-expanded="false">All Courses</a>

                        </li>

                        <!-- Nav item 2 Pages -->
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="{{ url('/about_gts_learning') }}" id="pagesMenu"
                                aria-haspopup="true" aria-expanded="false">About GTS Learning</a>

                        </li>

                        <!-- Nav item 3 Account -->
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="accounntMenu" aria-haspopup="true"
                                aria-expanded="false">Contact Us</a>

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
                                    </div>
                                </div>
                                <!-- Profile info -->
                                <div class="col d-sm-flex justify-content-between align-items-center">
                                    <div>
                                        <h1 class="my-1 fs-4">{{ auth()->user()->name }}</h1>
                                        <ul class="list-inline mb-0">

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

                                        <a href="{{ url('/all_courses') }}" class="btn btn-outline-primary mb-0">View
                                            all courses</a>
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

                                            <a class="list-group-item" href="{{ url('/wish_list_courses') }}"><i
                                                    class="bi bi-cart-check fa-fw me-2"></i>Wishlist</a>

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
                                                data-purecounter-end="{{ $total_courses }}"
                                                data-purecounter-delay="200">0</h5>
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

                                            @foreach ($student_courses as $sc)
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
                                                                <h6><a
                                                                        href="#">{{ \App\Models\Course::where('id', '=', $sc->course_id)->first()->title }}</a>
                                                                </h6>
                                                                <!-- Info -->
                                                                <div class="overflow-hidden">
                                                                    <h6 class="mb-0 text-end">100%</h6>
                                                                    <div
                                                                        class="progress progress-sm bg-primary bg-opacity-10">
                                                                        <div class="progress-bar bg-primary aos"
                                                                            role="progressbar" data-aos="slide-right"
                                                                            data-aos-delay="200"
                                                                            data-aos-duration="1000"
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
                                            @endforeach


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
