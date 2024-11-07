@extends('layout.main')

@section('title', 'Zingo - Assist Blog')

<head>
    <style>
        .header-section {
            background: #A52673;
        }
    </style>
</head>

@section('content')
    <!--~~~~~~~~~~~~ Start Banner ~~~~~~~~-->
    <section class="banner-section two inner">
        <div class="banner-element-four two">
            <img src="{{ asset('assets/images/element/element-5.png') }}" alt="element">
        </div>
        <div class="banner-element-five two">
            <img src="{{ asset('assets/images/element/element-7.png') }}" alt="element">
        </div>
        <div class="banner-element-nineteen two">
            <img src="{{ asset('assets/images/element/element-6.png') }}" alt="element">
        </div>
        <div class="banner-element-twenty-two two">
            <img src="{{ asset('assets/images/element/element-69.png') }}" alt="element">
        </div>
        <div class="banner-element-twenty-three two">
            <img src="{{ asset('assets/images/element/element-70.png') }}" alt="element">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center mb-30-none">
                <div class="col-xl-12 mb-30">
                    <div class="banner-content two">
                        <div class="banner-content-header">
                            <h2 class="title">Blog</h2>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~ End Banner~~~~~~~~~-->


    <!--~~~~~~~ Start Scroll-To-Top~~~~~~-->
    <a href="#" class="scrollToTop"><i class="las la-angle-double-up"></i></a>
    <!--~~~~~ End Scroll-To-Top~~~~~~-->


    <!--~~~~~~~ Start Blog~~~~~~~-->

    <section class="blog-section ptb-120">
        <h1>COMING SOON!</h1>
    </section>
    <!--~~~~~~End Blog~~~~~~~-->

    @include('partials.footer')

    @include('partials.trail')

@endsection
