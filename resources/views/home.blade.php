@extends('layout.main')

@section('title', 'Zingo - Assist Home')

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

@section('content')
    <!--~~~~~ Start Banner ~~~~~~~-->
    <section class="banner-section">
        <div class="banner-text">
            <span>ZINGO ASSIST</span>
        </div>
        <div class="banner-element-one">
            <img src="{{ asset('assets/images/element/element-3.png') }}" alt="element">
        </div>
        <div class="banner-element-two">
            <img src="{{ asset('assets/images/element/element-4.png') }}" alt="element">
        </div>
        <div class="banner-element-three">
            <img src="{{ asset('assets/images/element/element-5.png') }}" alt="element">
        </div>
        <div class="banner-element-four">
            <img src="{{ asset('assets/images/element/element-6.png') }}" alt="element">
        </div>
        <div class="banner-element-five">
            <img src="{{ asset('assets/images/element/element-7.png') }}" alt="element">
        </div>
        <div class="banner-group-shape">
            <div class="banner-group-element-one">
                <img src="{{ asset('assets/images/element/element-8.png') }}" alt="element">
            </div>
            <div class="banner-group-element-two">
                <img src="{{ asset('assets/images/element/element-9.png') }}" alt="element">
            </div>
            <div class="banner-group-element-three">
                <img src="{{ asset('assets/images/element/element-10.png') }}" alt="element">
            </div>
            <div class="banner-group-element-four">
                <img src="{{ asset('assets/images/element/element-6.png') }}" alt="element">
            </div>
            <div class="banner-group-element-five">
                <img src="{{ asset('assets/images/element/element-5.png') }}" alt="element">
            </div>
            <div class="banner-group-element-six">
                <img src="{{ asset('assets/images/element/element-11.png') }}" alt="element">
            </div>
            <div class="banner-group-element-seven">
                <img src="{{ asset('assets/images/element/element-12.png') }}" alt="element">
            </div>
            <div class="banner-group-element-eight">
                <img src="{{ asset('assets/images/element/element-13.png') }}" alt="element">
            </div>
            <div class="banner-group-element-nine">
                <img src="{{ asset('assets/images/element/element-14.png') }}" alt="element">
            </div>
            <div class="banner-group-element-ten">
                <img src="{{ asset('assets/images/element/element-15.png') }}" alt="element">
            </div>
            <div class="banner-group-element-eleven">
                <img src="{{ asset('assets/images/element/element-16.png') }}" alt="element">
            </div>
            <div class="banner-group-element-twelve">
                <img src="{{ asset('assets/images/element/element-17.png') }}" alt="element">
            </div>
            <div class="banner-group-element-thirteen">
                <img src="{{ asset('assets/images/element/element-18.png') }}" alt="element">
            </div>
            <div class="banner-group-element-fourteen">
                <img src="{{ asset('assets/images/element/element-19.png') }}" alt="element">
            </div>
            <div class="banner-group-element-fifteen">
                <img src="{{ asset('assets/images/element/element-20.png') }}" alt="element">
            </div>
            <div class="banner-group-element-sixteen">
                <img src="{{ asset('assets/images/element/element-21.png') }}" alt="element">
            </div>
            <div class="banner-group-element-seventeen">
                <img src="{{ asset('assets/images/element/element-22.png') }}" alt="element">
            </div>
        </div>
        <div class="container custom-container">
            <div class="row align-items-end mb-30-none">
                <div class="col-xl-7 col-lg-7 mb-30">
                    <div class="banner-content" data-aos="fade-right" data-aos-duration="1800">
                        <h1 class="title">Zingo Assist</h1>
                        <span class="sub-title text-light">Turning Overwhelm into Achievement</span>
                        <p>At Zingo Assist, we offer Advanced Virtual Assistance Services that help businesses and
                            individuals succeed in today’s ever-changing world.</p>
                        <div class="banner-arrow">
                            <img src="{{ asset('assets/images/element/element-1.png') }}" alt="element">
                        </div>
                        <div class="banner-widget">
                            <div class="banner-widget-wrapper">
                                <div class="banner-widget-left">
                                    <div class="banner-widget-thumb">
                                        <img src="{{ asset('assets/images/element/element-2.png') }}" alt="element">
                                    </div>
                                </div>
                                <div class="banner-widget-middle">
                                    <div class="banner-widget-content">
                                        <p><span>500+</span> Satisfied Clients</p>
                                    </div>
                                </div>
                                <div class="banner-widget-right">
                                    <div class="banner-widget-btn">
                                        <a href="{{ route('contact') }}" class="btn--base">Let's Talk</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~ End Banner ~~~~~~~~~-->


    <!--~~~~~~~~ Start Scroll-To-Top ~~~~~~~~~-->
    <a href="#" class="scrollToTop"><i class="las la-angle-double-up"></i></a>
    <!--~~~~~ End Scroll-To-Top ~~~~~~~~-->


    <!--~~~~~~~~~  Start Brand ~~~~~~~~~~~-->
    <div class="container-xxl py-5">
        <div class="container py-5 px-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-5">#1 Digital solution with 3+ years of experience</h1>
                    <p class="mb-4">With three years of experience, I specialize in tailored digital solutions,
                        including website design, SEO optimization, and digital marketing. I leverage the latest
                        technologies to enhance online presence and drive business growth, focusing on innovative
                        strategies that meet each client's unique needs.
                    </p>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <p class="mb-2">Digital Marketing</p>
                            <p class="mb-2">95%</p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <p class="mb-2">SEO & Backlinks</p>
                            <p class="mb-2">97%</p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar " role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <p class="mb-2">Design & Development</p>
                            <p class="mb-2">95%</p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar " role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <a href="#0" class="btn bg-pink text-white py-sm-3 px-sm-5 rounded-pill mt-3">Read More</a>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="./assets/images/fact.png">
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~ End Brand ~~~~~~~~~~-->


    <!--~~~~~~~~~~ Start Choose ~~~~~~~~-->
    <section class="choose-section pb-120">
        <div class="choose-element-one" data-aos="fade-left" data-aos-duration="1200">
            <img src="{{ asset('assets/images/element/element-28.png') }}" alt="element">
        </div>
        <div class="choose-element-two">
            <img src="{{ asset('assets/images/element/element-29.png') }}" alt="element">
        </div>
        <div class="choose-element-three">
            <img src="{{ asset('assets/images/element/element-30.png') }}" alt="element">
        </div>
        <div class="choose-element-four">
            <img src="{{ asset('assets/images/element/element-31.png') }}" alt="element">
        </div>
        <div class="choose-element-five">
            <img src="{{ asset('assets/images/element/element-32.png') }}" alt="element">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 text-center">
                    <div class="section-header">
                        <h2 class="section-title">Why Choose Zingo?</h2>
                        <p>Our Virtual Assistant Can Help You to Grow Your Business
                            Our service features a hassle-free setup, top-notch security and privacy, and an advanced
                            CRM system with the latest tools. We lead in business automation with budget-friendly
                            options, backed by in-house experts and seamless integration</p>
                    </div>
                </div>
            </div>
            <div class="choose-area">
                <div class="choose-tab">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link" id="software-tab" data-toggle="tab" data-target="#software"
                                type="button" role="tab" aria-controls="software" aria-selected="false">Top
                                Website
                                Developer</button>
                            <button class="nav-link active" id="company-tab" data-toggle="tab" data-target="#company"
                                type="button" role="tab" aria-controls="company"
                                aria-selected="true">Fastest-Growing
                                Company</button>
                            <button class="nav-link" id="client-tab" data-toggle="tab" data-target="#client"
                                type="button" role="tab" aria-controls="client" aria-selected="false">100%
                                Client's
                                Satisfaction</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade" id="software" role="tabpanel" aria-labelledby="software-tab">
                            <div class="choose-item">
                                <div class="choose-thumb">
                                    <img src="{{ asset('assets/images/element/element-27.png') }}" alt="element">
                                </div>
                                <div class="choose-content">
                                    <h4 class="title"><span class="text--base">About Zingo Assist</span> Website
                                        Development
                                    </h4>
                                    <p>At Zingo Assist, we specialize in crafting custom websites tailored to your
                                        unique business needs. Whether you're launching a new brand or revamping an
                                        existing site, our team will design a visually stunning, user-friendly website
                                        that resonates with your audience. From concept to deployment, we focus on
                                        delivering a fully responsive and scalable website that drives growth and meets
                                        your goals.</p>
                                    <div class="choose-statistics-area">
                                        <div class="row mb-30-none">
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                                <div class="statistics-item">
                                                    <div class="statistics-content">
                                                        <div class="odo-area">
                                                            <h3 class="odo-title odometer" data-odometer-final="150">0
                                                            </h3>
                                                            <h3 class="title">+</h3>
                                                        </div>
                                                        <p>Awesome Solutions</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                                <div class="statistics-item">
                                                    <div class="statistics-content">
                                                        <div class="odo-area">
                                                            <h3 class="odo-title odometer" data-odometer-final="500">0
                                                            </h3>
                                                            <h3 class="title">+</h3>
                                                        </div>
                                                        <p>Trusted Clients</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                                <div class="statistics-item">
                                                    <div class="statistics-content">
                                                        <div class="odo-area">
                                                            <h3 class="odo-title odometer" data-odometer-final="5">0
                                                            </h3>
                                                            <h3 class="title">+</h3>
                                                        </div>
                                                        <p>Served Countries</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="choose-content-footer">
                                        <div class="choose-btn">
                                            <a href="{{ route('contact') }}" class="btn--base active">Contact us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="company" role="tabpanel"
                            aria-labelledby="company-tab">
                            <div class="choose-item">
                                <div class="choose-thumb">
                                    <img src="{{ asset('assets/images/element/element-77.png') }}" alt="element">
                                </div>
                                <div class="choose-content">
                                    <h4 class="title"><span class="text--base">About Zingo Assist</span> Digital
                                        Agency
                                    </h4>
                                    <p>We provides a wide range of online marketing,
                                        design, and development services to help businesses build and grow their
                                        presence in the digital world. We specialize in creating digital strategies
                                        that enhance brand visibility, engage audiences, and drive growth through
                                        various online channels such as websites, social media, email marketing, search
                                        engines, and paid advertising.</p>
                                    <div class="choose-statistics-area">
                                        <div class="row mb-30-none">
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                                <div class="statistics-item">
                                                    <div class="statistics-content">
                                                        <div class="odo-area">
                                                            <h3 class="odo-title odometer" data-odometer-final="150">0
                                                            </h3>
                                                            <h3 class="title">+</h3>
                                                        </div>
                                                        <p>Awesome Solutions</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                                <div class="statistics-item">
                                                    <div class="statistics-content">
                                                        <div class="odo-area">
                                                            <h3 class="odo-title odometer" data-odometer-final="500">0
                                                            </h3>
                                                            <h3 class="title">+</h3>
                                                        </div>
                                                        <p>Trusted Clients</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                                <div class="statistics-item">
                                                    <div class="statistics-content">
                                                        <div class="odo-area">
                                                            <h3 class="odo-title odometer" data-odometer-final="5">0
                                                            </h3>
                                                            <h3 class="title">+</h3>
                                                        </div>
                                                        <p>Served Countries</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="choose-content-footer">
                                        <div class="choose-btn">
                                            <a href="{{ route('contact') }}" class="btn--base active">Contact us</a>
                                        </div>
                                        <div class="choose-video-btn">
                                            <a class="video" data-rel="lightcase:myCollection"
                                                href="https://www.youtube.com/embed/6zsr22OeF2I">
                                                <i class="las la-video"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="client" role="tabpanel" aria-labelledby="client-tab">
                            <div class="choose-item">
                                <div class="choose-thumb">
                                    <img src="{{ asset('assets/images/element/element-78.png') }}" alt="element">
                                </div>
                                <div class="choose-content">
                                    <h4 class="title"><span class="text--base">About Zingo Assist</span> Client
                                        Demand
                                    </h4>
                                    <p>
                                        Client demand refers to the specific needs, requests, or expectations that
                                        customers have for products or services. Meeting client demand is essential for
                                        businesses to remain competitive and relevant, as it directly impacts customer
                                        satisfaction, loyalty, and growth.</p>
                                    <div class="choose-statistics-area">
                                        <div class="row mb-30-none">
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                                <div class="statistics-item">
                                                    <div class="statistics-content">
                                                        <div class="odo-area">
                                                            <h3 class="odo-title odometer" data-odometer-final="150">0
                                                            </h3>
                                                            <h3 class="title">+</h3>
                                                        </div>
                                                        <p>Awesome Solutions</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                                <div class="statistics-item">
                                                    <div class="statistics-content">
                                                        <div class="odo-area">
                                                            <h3 class="odo-title odometer" data-odometer-final="500">0
                                                            </h3>
                                                            <h3 class="title">+</h3>
                                                        </div>
                                                        <p>Trusted Clients</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                                <div class="statistics-item">
                                                    <div class="statistics-content">
                                                        <div class="odo-area">
                                                            <h3 class="odo-title odometer" data-odometer-final="5">0
                                                            </h3>
                                                            <h3 class="title">+</h3>
                                                        </div>
                                                        <p>Served Countries</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="choose-content-footer">
                                        <div class="choose-btn">
                                            <a href="contact.html" class="btn--base active">Contact us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~ End Choose ~~~~~~~-->


    <!--~~~~~~~~~ Start Call to action ~~~~~~~~~~-->
    <section class="call-to-action-section pb-120">
        <div class="call-to-action-element" data-aos="fade-left" data-aos-duration="1200">
            <img src="{{ asset('assets/images/element/element-33.png') }}" alt="element">
        </div>
        <div class="wrapper demo-text">
            <div class="marquee">
                <span>
                    ZINGO ASSIST ZINGO ASSIST ZINGO ASSIST ZINGO ASSIST ZINGO ASSIST ZINGO ASSIST ZINGO ASSIST ZINGO
                    ASSIST ZINGO ASSIST
                </span>
            </div>
        </div>
        <!-- <div class="container">
                                                                                            <div class="row justify-content-center mb-10-none">
                                                                                                <div class="col-xl-9">
                                                                                                    <div class="call-to-action-wrapper">
                                                                                                        <div class="call-to-action-content">
                                                                                                            <h3 class="title">We have three projects with this template & that is because we love the
                                                                                                                design,</h3>
                                                                                                            <h3 class="inner-title">the large number of possibilities.</h3>
                                                                                                        </div>
                                                                                                        <div class="call-to-action-btn">
                                                                                                            <a href="#0" class="btn--base">Read More</a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div> -->
    </section>
    <!--~~~~~~~~ End Call to action ~~~~~~~~~~~~~-->


    <!--~~~~~~~~ Start Service ~~~~~~~~~~-->
    <section class="service-section ptb-120">
        <div class="service-element-one">
            <img src="{{ asset('assets/images/element/element-34.png') }}" alt="element">
        </div>
        <div class="service-element-two">
            <img src="{{ asset('assets/images/element/element-35.png') }}" alt="element">
        </div>
        <div class="service-element-three">
            <img src="{{ asset('assets/images/element/element-36.png') }}" alt="element">
        </div>
        <div class="service-element-four">
            <img src="{{ asset('assets/images/element/element-36.png') }}" alt="element">
        </div>
        <div class="service-element-five">
            <img src="{{ asset('assets/images/element/element-37.png') }}" alt="element">
        </div>
        <div class="service-shape shape-1"></div>
        <div class="service-shape shape-2"></div>
        <div class="service-shape shape-3"></div>
        <div class="service-shape shape-4"></div>
        <div class="service-shape shape-5"></div>
        <div class="service-shape shape-6"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-header-wrapper">
                        <div class="section-header white">
                            <h2 class="section-title">Our Awesome Services</h2>
                            <p>Credibly grow premier ideas rather than bricks-and-clicks strategic theme areas
                                distributed for stand-alone web-readiness.</p>
                        </div>
                        <div class="section-header-btn">
                            <a href="service.html" class="custom-btn two">View All Services <i
                                    class="icon-Group-2361 ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-30-none">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/icon/icon-3.png') }}" alt="icon">
                        </div>
                        <div class="service-content">
                            <h3 class="title"><a href="{{ route('service.web_development') }}">Web Development</a></h3>
                            <p>Web Development involves the creation and maintenance of websites, ensuring they</p>
                            <div class="service-btn">
                                <a href="{{ route('service.web_development') }}" class="custom-btn">Learn More <i
                                        class="icon-Group-2361 ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/icon/icon-4.png') }}" alt="icon">
                        </div>
                        <div class="service-content">
                            <h3 class="title"><a href="{{ route('service.digital_marketing') }}">Digital Marketing</a>
                            </h3>
                            <p>Digital Marketing is the promotion of products, services, or brands using online channels
                            </p>
                            <div class="service-btn">
                                <a href="{{ route('service.digital_marketing') }}" class="custom-btn">Learn More <i
                                        class="icon-Group-2361 ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/icon/icon-5.png') }}" alt="icon">
                        </div>
                        <div class="service-content">
                            <h3 class="title"><a href="{{ route('service.search_seo') }}">Search SEO</a></h3>
                            <p>Search Engine Optimization (SEO) is the process of improving a website's visibility on
                                search </p>
                            <div class="service-btn">
                                <a href="{{ route('service.search_seo') }}" class="custom-btn">Learn More <i
                                        class="icon-Group-2361 ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/icon/icon-6.png') }}" alt="icon">
                        </div>
                        <div class="service-content">
                            <h3 class="title"><a href="{{ route('service.graphic_design') }}">Graphic Designing</a></h3>
                            <p>At Zingo Assist, we provide comprehensive Social Media Marketing services designed to
                                boost your</p>
                            <div class="service-btn">
                                <a href="{{ route('service.graphic_design') }}" class="custom-btn">Learn More <i
                                        class="icon-Group-2361 ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~ End Service ~~~~~~~~~~~-->


    <!--~~~~~~~~~ Start About ~~~~~~~~~-->
    <section class="about-section pt-120">
        <div class="about-element-one">
            <img src="{{ asset('assets/images/element/element-39.png') }}" alt="element">
        </div>
        <div class="about-element-two">
            <img src="{{ asset('assets/images/element/element-40.png') }}" alt="element">
        </div>
        <div class="about-element-three">
            <img src="{{ asset('assets/images/element/element-7.png') }}" alt="element">
        </div>
        <div class="about-element-four">
            <img src="{{ asset('assets/images/element/element-41.png') }}" alt="element">
        </div>
        <div class="about-element-five">
            <img src="{{ asset('assets/images/element/element-42.png') }}" alt="element">
        </div>
        <div class="container">
            <div class="about-area three">
                <div class="row justify-content-center align-items-center mb-30-none">
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="box-wrapper">
                            <div class="box3"></div>
                            <div class="box1">
                                <div class="box-element-one">
                                    <img src="{{ asset('assets/images/element/element-14.png') }}" alt="element">
                                </div>
                                <div class="box-element-two">
                                    <img src="{{ asset('assets/images/element/element-15.png') }}" alt="element">
                                </div>
                                <div class="box-element-three">
                                    <img src="{{ asset('assets/images/element/element-13.png') }}" alt="element">
                                </div>
                                <div class="box-element-four">
                                    <img src="{{ asset('assets/images/element/element-6.png') }}" alt="element">
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
                            <img src="{{ asset('assets/images/element/element-38.png') }}" alt="element">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="about-content">
                            <h2 class="title">We Provide Best<span class="text--base">Virtual Assistant Services
                                </span>
                            </h2>
                            <p>At Zingo Assist, we offer top-tier virtual assistance to help you streamline your
                                business operations and achieve success. Our highly skilled professionals are ready to
                                support you with a range of services designed to meet your unique needs.</p>
                            <div class="about-btn">
                                <a href="{{ route('contact') }}" class="btn--based">Send Message</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~ End About ~~~~~~~~~~-->


    <!--~~~~~~~ Start Client ~~~~~~~~-->
    <section class="client-section ptb-120">
        <div class="client-element-one">
            <img src="{{ asset('assets/images/element/element-44.png') }}" alt="element">
        </div>
        <div class="client-element-two">
            <img src="{{ asset('assets/images/element/element-45.png') }}" alt="element">
        </div>
        <div class="client-element-three">
            <img src="{{ asset('assets/images/element/element-46.png') }}" alt="element">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 text-center">
                    <div class="section-header">
                        <h2 class="title">Hear from happy customers</h2>
                    </div>
                </div>
            </div>
            <div class="client-area">
                <div class="row justify-content-center mb-10-none">
                    <div class="col-xl-12">
                        <div class="client-slider-area">
                            <div class="client-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="client-item">
                                            <div class="client-header">
                                                <div class="client-ratings">
                                                    <span class="ratings">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                </div>
                                                <div class="client-quote">
                                                    <img src="{{ asset('assets/images/client/quote.png') }}"
                                                        alt="quote">
                                                </div>
                                            </div>
                                            <div class="client-content">
                                                <p>As a business person, I have to manage a lot of tasks daily, which
                                                    costs not only in terms of resources but also results in poor health
                                                    for me. Then I hired Zingo Assist to streamline my work, and it was
                                                    a game changer for my business. With my assistant handling all my
                                                    administrative tasks and email management, I am only seeing the
                                                    essential emails. Plus, I am no longer tied up with scheduling
                                                    appointments. It's a whole new level of productivity! Keep up with
                                                    the fabulous work Team Zingo Assist.
                                                </p>
                                            </div>
                                            <div class="client-footer">
                                                <div class="client-footer-user-thumb">
                                                    <img src="{{ asset('assets/images/client/client-1.png') }}"
                                                        alt="client">
                                                </div>
                                                <div class="client-footer-user-content">
                                                    <h6 class="title">Marlon Guzman</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-item">
                                            <div class="client-header">
                                                <div class="client-ratings">
                                                    <span class="ratings">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                </div>
                                                <div class="client-quote">
                                                    <img src="{{ asset('assets/images/client/quote.png') }}"
                                                        alt="quote">
                                                </div>
                                            </div>
                                            <div class="client-content">
                                                <p>I had an amazing experience with Zingo Assist! They provided
                                                    exceptional services at a very nominal price. Their time management,
                                                    social media management, and cold calling were all spot on. Super
                                                    impressed with how everything was handled so smoothly. Highly
                                                    recommend their services if you're looking for top-notch support
                                                    without breaking the bank!</p>
                                            </div>
                                            <div class="client-footer">
                                                <div class="client-footer-user-thumb">
                                                    <img src="{{ asset('assets/images/client/client-2.png') }}"
                                                        alt="client">
                                                </div>
                                                <div class="client-footer-user-content">
                                                    <h6 class="title">Lindsey Mancur</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-item">
                                            <div class="client-header">
                                                <div class="client-ratings">
                                                    <span class="ratings">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                </div>
                                                <div class="client-quote">
                                                    <img src="{{ asset('assets/images/client/quote.png') }}"
                                                        alt="quote">
                                                </div>
                                            </div>
                                            <div class="client-content">
                                                <p>I recently had the pleasure of working with Zingo Assist, and I can
                                                    confidently say they offer the best virtual assistant services
                                                    available.Zingo Assist's pricing is competitive and transparent,
                                                    offering excellent value. Their flexible plans allowed me to choose
                                                    a package that best suited my business needs.
                                                    I highly recommend Zingo Assist.</p>
                                            </div>
                                            <div class="client-footer">
                                                <div class="client-footer-user-thumb">
                                                    <img src="{{ asset('assets/images/client/client-3.png') }}"
                                                        alt="client">
                                                </div>
                                                <div class="client-footer-user-content">
                                                    <h6 class="title">Saleha Safdar</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-item">
                                            <div class="client-header">
                                                <div class="client-ratings">
                                                    <span class="ratings">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                </div>
                                                <div class="client-quote">
                                                    <img src="{{ asset('assets/images/client/quote.png') }}"
                                                        alt="quote">
                                                </div>
                                            </div>
                                            <div class="client-content">
                                                <p>Hi, I'm Cynthia. I want to share how amazing ZingoAssist has been for
                                                    me. Their virtual assistants have made managing my daily tasks so
                                                    much easier. From scheduling appointments to handling emails and
                                                    social media, they do it all with professionalism and efficiency.
                                                    ZingoAssist's personalized approach and attention to detail have
                                                    truly impressed me. I can now focus on my work, knowing everything
                                                    else is in capable hands. If you need reliable virtual assistant
                                                    services, I highly recommend ZingoAssist. They've made my life so
                                                    much more organized!
                                                    Thank you, ZingoAssist!</p>
                                            </div>
                                            <div class="client-footer">
                                                <div class="client-footer-user-thumb">
                                                    <img src="{{ asset('assets/images/client/client-3.png') }}"
                                                        alt="client">
                                                </div>
                                                <div class="client-footer-user-content">
                                                    <h6 class="title">Cynthia OC</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~ End Client ~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                    Start Call-to-action
                                                                                ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="subscribe-section ptb-120">
        <div class="subscribe-element-one">
            <img src="{{ asset('assets/images/element/element-51.png') }}" alt="element">
        </div>
        <div class="container">
            <div class="subscribe-area">
                <div class="subscribe-element-two">
                    <img src="{{ asset('assets/images/element/element-76.png') }}" alt="element">
                </div>
                <div class="subscribe-element-three">
                    <img src="{{ asset('assets/images/element/element-50.png') }}" alt="element">
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-7 offset-xl-5">
                        <div class="subscribe-content">
                            <h2 class="title">Get 2 days Free Trail From Zingo</h2>
                            <p>A Free Trial Service To Get The Hands-On Experience Of Our Services.</p>
                            <form class="subscribe-form" action="{{ route('send_mail') }}" method="post">
                                @csrf
                                <label class="subscribe-icon"><img src="{{ asset('assets/images/icon/icon-7.png') }}"
                                        alt="icon"></label>
                                <input type="email" class="form--control" name="mail" placeholder="Email Address">
                                @error('mail')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <button type="submit" name="submit" class="btn--base">SEND<i
                                        class="fab fa-telegram-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~ End Call-to-action ~~~-->

    @include('partials.footer')


    {{-- <button class="btn-show-popup" onclick="showPopup()">Open Form</button> --}}

    @include('partials.trail')

@endsection
