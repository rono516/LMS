@extends('layouts.frontendinc.main')

@section('content')
    <section class="section lb p120">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tagline-message page-title text-center">
                        <h3>All Courses</h3>
                        <ul class="breadcrumb">
                            <li><a href="{{ url('/') }}">GTS - Digital Learning</a></li>
                        </ul>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section gb nopadtop">
        <div class="container">
            <div class="boxed boxedp4">

                <div class="row blog-grid shop-grid">
                    <div class="col-md-3">
                        <div class="course-box shop-wrapper">

                            <div class="course-details shop-box text-center">
                                <h4>
                                </h4>
                            </div>

                        </div><!-- end box -->
                    </div><!-- end col -->
                </div>
            </div><!-- end container -->
    </section>
@endsection
