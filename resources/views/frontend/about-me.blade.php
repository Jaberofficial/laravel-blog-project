@extends('frontend.master')

@section('content')

        <!-- Page Header-->
        <header class="masthead" style="background-image: url('{{ asset('frontend/assets/img/about-bg-01.png') }}')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>About Me</h1>
                            <span class="subheading">Developer • Blogger • Tech Enthusiast</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        {!! $siteSetting->about_me !!}
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer-->

@endsection