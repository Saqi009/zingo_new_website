@extends('layout.main')

@section('title', 'Zingo - Assist About Us')

@section('content')
    <!--~~~~~~~~ Start Banner ~~~~~~~~-->
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
                            <h2 class="title">About Us</h2>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~ End Banner ~~~~~~-->

    <!--~~~~~~  Start Scroll-To-Top ~~~~~~~~~-->
    <a href="#" class="scrollToTop"><i class="las la-angle-double-up"></i></a>
    <!--~~~~~~~ End Scroll-To-Top ~~~~~~~~~~-->

    <!--~~~~~~~~ Start About ~~~~~~-->
    <section class="about-section ptb-120">
        <div class="about-element-one two">
            <img src="{{ asset('assets/images/element/element-39.png') }}" alt="element">
        </div>
        <div class="container">
            <div class="row justify-content-center mb-30-none">
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="about-content two">
                        <h3 class="title">Who We Are</h3>
                        <p class="para">Zingo Assist is a worldwide trusted virtual assistance provider, an All-in-One
                            solution for every business need.</p>
                        <p>From managing teams to driving social media campaigns, our dedicated expert teams have all
                            the right skills to meet each need of your firm. We offer our Proficient Solutions to
                            businesses, professionals and entrepreneurs across the globe.</p>
                        <div class="about-btn two">
                            <a href="{{ route('contact') }}" class="btn--base">Contact us</a>
                            <span>or Call <a href="tel:11026593268003">+1 424 542 7170</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="about-thumb two">
                        <img src="{{ asset('assets/images/element/element-68.png') }}" alt="element">
                        <div class="about-thumb-element-one">
                            <img src="{{ asset('assets/images/element/element-60.png') }}" alt="element">
                        </div>
                        <div class="about-thumb-element-two">
                            <img src="{{ asset('assets/images/element/element-60.png') }}" alt="element">
                        </div>
                        <div class="about-thumb-video">
                            <div class="circle">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px"
                                    viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
                                    <defs>
                                        <path id="circlePath"
                                            d=" M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
                                    </defs>
                                    <circle cx="150" cy="100" r="75" fill="none" />
                                    <g>
                                        <use xlink:href="#circlePath" fill="none" />
                                        <text fill="#ffffff">
                                            <textPath xlink:href="#circlePath">ZINGO ASSIST ZINGO ASSIST ZINGO ASSIST
                                                ZINGO ASSIST ZINGO ASSIST ZINGO ASSIST</textPath>
                                        </text>
                                    </g>
                                </svg>
                            </div>
                            <div class="video-main">
                                <a class="video-icon video" data-rel="lightcase:myCollection"
                                    href="https://www.youtube.com/embed/LRhrNC-OC0Y">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~ End About ~~~~~~~~~-->

    <!--~~~~~~~~~~ Start Agency ~~~~~~~~~~~~~-->
    <section class="agency-section ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="agency-content text-center">
                        <div class="agency-logo-text">
                            <span>Zingo Assist</span>
                        </div>
                        <h2 class="title">Source the Optimal Virtual Assistant for Your Business Operations
                            Boost productivity and streamline operations with our expert virtual assistants, tailored to
                            meet the unique needs of your business.</h2>
                    </div>
                    <div class="agency-statistics-area">
                        <div class="row justify-content-center mb-30-none">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                <div class="statistics-item">
                                    <div class="statistics-content">
                                        <div class="odo-area">
                                            <h3 class="odo-title odometer" data-odometer-final="3">0</h3>
                                            <h3 class="title">+</h3>
                                        </div>
                                        <p>Years of operation</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                <div class="statistics-item">
                                    <div class="statistics-content">
                                        <div class="odo-area">
                                            <h3 class="odo-title odometer" data-odometer-final="5">0</h3>
                                            <h3 class="title">+</h3>
                                        </div>
                                        <p>Projects deliverd</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                <div class="statistics-item">
                                    <div class="statistics-content">
                                        <div class="odo-area">
                                            <h3 class="odo-title odometer" data-odometer-final="250">0</h3>
                                            <h3 class="title">+</h3>
                                        </div>
                                        <p>Team Specialist</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                <div class="statistics-item">
                                    <div class="statistics-content">
                                        <div class="odo-area">
                                            <h3 class="odo-title odometer" data-odometer-final="25">0</h3>
                                            <h3 class="title">+</h3>
                                        </div>
                                        <p>Around The World</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~ End Agency ~~~~~~~~~~~-->

    <!--~~~~~~~~ Start About ~~~~~~~-->
    <section class="about-section">
        <div class="about-element-one two">
            <img src="{{ asset('assets/images/element/element-39.png') }}" alt="element">
        </div>
        <div class="container">
            <div class="about-area two">
                <div class="row justify-content-center align-items-center mb-30-none">
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="box-wrapper two">
                            <div class="box3"></div>
                            <div class="box1">
                                <div class="box-element-one">
                                    <img src="{{ asset('assets/images/element/element-59.png') }}" alt="element">
                                </div>
                                <div class="box-element-two">
                                    <img src="{{ asset('assets/images/element/element-7.png') }}" alt="element">
                                </div>
                            </div>
                            <div class="box2">
                                <div class="box-element-five">
                                    <img src="{{ asset('assets/images/element/element-16.png') }}" alt="element">
                                </div>
                                <div class="box-element-six">
                                    <img src="{{ asset('assets/images/element/element-7.png') }}" alt="element">
                                </div>
                            </div>
                        </div>
                        <div class="about-thumb">
                            <img src="{{ asset('assets/images/element/element-58.png') }}" alt="element">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="about-content">
                            <h2 class="title">Have a project in mind? <span class="text--base">Let's connect</span></h2>
                            <p class="para">We rank among the best in the US.</p>
                            <p>Got an idea you're excited about? Let’s bring it to life together! At Zingo Assist, we're
                                here to collaborate with you on turning your vision into reality. Whether you're just
                                starting out or looking to elevate your project, we’re ready to assist you every step of
                                the way. Reach out to us, and let’s make it happen!</p>
                            <div class="about-btn">
                                <a href="{{ route('contact') }}" class="btn--base">Send Message</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')
    <!--~~~~~~~ End About ~~~~~~~~-->

    @include('partials.trail')

@endsection
