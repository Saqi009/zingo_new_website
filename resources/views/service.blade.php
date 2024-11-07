@extends('layout.main')

@section('title', 'Zingo - Assist Services')

@section('content')
    <!--~~~~~~~~~ Start Banner ~~~~~~~~~-->
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
                            <h2 class="title">Services</h2>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Service</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~ End Banner ~~~~~~~~~-->


    <!--~~~~~~~~ Start Scroll-To-Top ~~~~~~~~~-->
    <a href="#" class="scrollToTop"><i class="las la-angle-double-up"></i></a>
    <!--~~~~~~~ End Scroll-To-Top ~~~~~~~-->


    <!--~~~~~~~~ Start Service ~~~~~-->
    <section class="service-section two ptb-120">
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
        <div class="container">
            <div class="row justify-content-center mb-30-none">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="service-item three">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/icon2/web_design.png') }}" alt="icon">
                        </div>
                        <div class="service-content">
                            <h3 class="title"><a href="{{ route('service.graphic_design') }}">Graphic Design</a></h3>
                            <p>Web design is all about creating visually appealingw</p>
                            <div class="service-btn">
                                <a href="{{ route('service.graphic_design') }}" class="custom-btn">Learn More <i
                                        class="icon-Group-2361 ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="service-item three">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/icon2/digital_marketing.png') }}" alt="icon">
                        </div>
                        <div class="service-content">
                            <h3 class="title"><a href="{{ route('service.digital_marketing') }}">Digital Marketing</a></h3>
                            <p>Driving growth with strategies to amplify reach, engagement, and impact.</p>
                            <div class="service-btn">
                                <a href="{{ route('service.digital_marketing') }}" class="custom-btn">Learn More <i
                                        class="icon-Group-2361 ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="service-item three">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/icon2/seo.png') }}" alt="icon">
                        </div>
                        <div class="service-content">
                            <h3 class="title"><a href="{{ route('service.search_seo') }}">Search SEO</a></h3>
                            <p>Boosting visibility and traffic through targeted, optimized SEO solutions.</p>
                            <div class="service-btn">
                                <a href="{{ route('service.search_seo') }}" class="custom-btn">Learn More <i
                                        class="icon-Group-2361 ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="service-item three">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/icon2/app_dev.png') }}" alt="icon">
                        </div>
                        <div class="service-content">
                            <h3 class="title"><a href="{{ route('service.web_development') }}">Web Development</a></h3>
                            <p>Building scalable, high-performance sites to elevate user experience.</p>
                            <div class="service-btn">
                                <a href="{{ route('service.web_development') }}" class="custom-btn">Learn More <i
                                        class="icon-Group-2361 ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="service-item three">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/icon2/crm_managemnt.png') }}" alt="icon">
                        </div>
                        <div class="service-content">
                            <h3 class="title"><a href="{{ route('service.crm_management') }}">CRM Management</a></h3>
                            <p>Enabling smooth, secure operations with expert IT management solutions.</p>
                            <div class="service-btn">
                                <a href="{{ route('service.crm_management') }}" class="custom-btn">Learn More <i
                                        class="icon-Group-2361 ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="service-item three">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/icon2/it_support.png') }}" alt="icon">
                        </div>
                        <div class="service-content">
                            <h3 class="title"><a href="{{ route('service.it_support') }}">IT Support</a></h3>
                            <p>Protecting critical data with advanced security for peace and compliance.</p>
                            <div class="service-btn">
                                <a href="{{ route('service.it_support') }}" class="custom-btn">Learn More <i
                                        class="icon-Group-2361 ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="service-item three">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/icon2/video_editing.png') }}" alt="icon">
                        </div>
                        <div class="service-content">
                            <h3 class="title"><a href="{{ route('service.video_editing') }}">Video Editing</a></h3>
                            <p>Empowering decisions through insights from data-driven analytics.</p>
                            <div class="service-btn">
                                <a href="{{ route('service.video_editing') }}" class="custom-btn">Learn More <i
                                        class="icon-Group-2361 ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="service-item three">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/icon2/personal_assistance.png') }}" alt="icon">
                        </div>
                        <div class="service-content">
                            <h3 class="title"><a href="{{ route('service.personal_assistance') }}">Personal Assistance</a></h3>
                            <p>Ensuring quality and reliability with meticulous, thorough QA testing.</p>
                            <div class="service-btn">
                                <a href="{{ route('service.personal_assistance') }}" class="custom-btn">Learn More <i
                                        class="icon-Group-2361 ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="service-item three">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/icon2/lead_generation.png') }}" alt="icon">
                        </div>
                        <div class="service-content">
                            <h3 class="title"><a href="{{ route('service.lead_generation') }}">Lead Generation</a></h3>
                            <p>Ensuring quality and reliability with meticulous, thorough QA testing.</p>
                            <div class="service-btn">
                                <a href="{{ route('service.lead_generation') }}" class="custom-btn">Learn More <i
                                        class="icon-Group-2361 ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="service-item three">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/icon2/cold_calling.png') }}" alt="icon">
                        </div>
                        <div class="service-content">
                            <h3 class="title"><a href="{{ route('service.cold_calling') }}">Cold Calling</a></h3>
                            <p>Ensuring quality and reliability with meticulous, thorough QA testing.</p>
                            <div class="service-btn">
                                <a href="{{ route('service.cold_calling') }}" class="custom-btn">Learn More <i
                                        class="icon-Group-2361 ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~ End Service ~~~~~~~~~-->


    <!--~~~~~~~~ Start Agency ~~~~~~~~~-->
    <section class="agency-section pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="agency-content text-center">
                        <div class="agency-logo-text">
                            <span>Zingo Assist</span>
                        </div>
                        <h2 class="title">Zingo is a digital agency that offers a wide scale of
                            creative services, including brand development
                            online marketing and lots more.</h2>
                    </div>
                    <div class="agency-statistics-area">
                        <div class="row justify-content-center mb-80-none">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-80">
                                <div class="statistics-item">
                                    <div class="statistics-content">
                                        <div class="odo-area">
                                            <h3 class="odo-title odometer" data-odometer-final="12">0</h3>
                                            <h3 class="title">+</h3>
                                        </div>
                                        <p>Years of operation</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-80">
                                <div class="statistics-item">
                                    <div class="statistics-content">
                                        <div class="odo-area">
                                            <h3 class="odo-title odometer" data-odometer-final="256">0</h3>
                                            <h3 class="title">+</h3>
                                        </div>
                                        <p>Projects deliverd</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-80">
                                <div class="statistics-item">
                                    <div class="statistics-content">
                                        <div class="odo-area">
                                            <h3 class="odo-title odometer" data-odometer-final="65">0</h3>
                                            <h3 class="title">+</h3>
                                        </div>
                                        <p>Team Specialist</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-80">
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
    <!--~~~~~~~~~ End Agency ~~~~~~~~~~~~-->


    <!--~~~~~~ Start Process ~~~~~~~~~-->
    <section class="process-section ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 text-center">
                    <div class="section-header">
                        <h2 class="section-title mb-0">Our Development Process</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-30-none">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                    <div class="process-item text-center">
                        <div class="process-icon-area">
                            <div class="process-element">
                                <div class="process-number">
                                    <span>01</span>
                                </div>
                                <div class="process-dot">
                                    <span></span>
                                </div>
                            </div>
                            <div class="process-icon">
                                <img src="{{ asset('assets/images/icon/icon-22.png') }}" alt="icon">
                            </div>
                        </div>
                        <div class="process-content">
                            <h3 class="title">Discover</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                    <div class="process-item text-center">
                        <div class="process-icon-area">
                            <div class="process-element">
                                <div class="process-number">
                                    <span>02</span>
                                </div>
                                <div class="process-dot">
                                    <span></span>
                                </div>
                            </div>
                            <div class="process-icon">
                                <img src="{{ asset('assets/images/icon/icon-23.png') }}" alt="icon">
                            </div>
                        </div>
                        <div class="process-content">
                            <h3 class="title">Design</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                    <div class="process-item text-center">
                        <div class="process-icon-area">
                            <div class="process-element">
                                <div class="process-number">
                                    <span>03</span>
                                </div>
                                <div class="process-dot">
                                    <span></span>
                                </div>
                            </div>
                            <div class="process-icon">
                                <img src="{{ asset('assets/images/icon/icon-24.png') }}" alt="icon">
                            </div>
                        </div>
                        <div class="process-content">
                            <h3 class="title">Build</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                    <div class="process-item text-center">
                        <div class="process-icon-area">
                            <div class="process-element">
                                <div class="process-number">
                                    <span>04</span>
                                </div>
                                <div class="process-dot">
                                    <span></span>
                                </div>
                            </div>
                            <div class="process-icon">
                                <img src="{{ asset('assets/images/icon/icon-25.png') }}" alt="icon">
                            </div>
                        </div>
                        <div class="process-content">
                            <h3 class="title">Deliver</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~ End Process ~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~  Start Plan ~~~~~~~~~~~-->
    {{-- <section class="plan-section two ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 text-center">
                    <div class="section-header">
                        <h2 class="section-title mb-0">Our Digital Pricing Plan</h2>
                    </div>
                </div>
            </div>
            <div class="plan-tab">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="monthly-tab" data-toggle="tab" data-target="#monthly"
                            type="button" role="tab" aria-controls="monthly" aria-selected="true">Monthly</button>
                        <button class="nav-link" id="yearly-tab" data-toggle="tab" data-target="#yearly" type="button"
                            role="tab" aria-controls="yearly" aria-selected="false">Yearly</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                        <div class="row justify-content-center mb-30-none">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-10 mb-30">
                                <div class="plan-item">
                                    <div class="plan-header">
                                        <h3 class="title">Standard Plan</h3>
                                    </div>
                                    <div class="plan-body">
                                        <div class="plan-price-area">
                                            <h2 class="price-title">$39<sub>Monthly</sub></h2>
                                        </div>
                                        <ul class="plan-list">
                                            <li>Up to 100 keyphrases optimized</li>
                                            <li>Custom dashboards: 4</li>
                                            <li>Content, and link monitoring</li>
                                            <li>Digital marketing expert</li>
                                            <li>Content marketing assets</li>
                                        </ul>
                                    </div>
                                    <div class="plan-footer">
                                        <div class="plan-btn">
                                            <a href="plan.html" class="btn--base active w-100">Choose Plan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-10 mb-30">
                                <div class="plan-item">
                                    <div class="plan-header">
                                        <h3 class="title">Ultra Plan</h3>
                                        <div class="plan-badge-area">
                                            <span class="plan-badge">Most Popular</span>
                                        </div>
                                    </div>
                                    <div class="plan-body">
                                        <div class="plan-price-area">
                                            <h2 class="price-title">$69<sub>Monthly</sub></h2>
                                        </div>
                                        <ul class="plan-list">
                                            <li>Up to 100 keyphrases optimized</li>
                                            <li>Custom dashboards: 4</li>
                                            <li>Content, and link monitoring</li>
                                            <li>Digital marketing expert</li>
                                            <li>Content marketing assets</li>
                                        </ul>
                                    </div>
                                    <div class="plan-footer">
                                        <div class="plan-btn">
                                            <a href="plan.html" class="btn--base active w-100">Choose Plan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-10 mb-30">
                                <div class="plan-item">
                                    <div class="plan-header">
                                        <h3 class="title">Premium Plan</h3>
                                    </div>
                                    <div class="plan-body">
                                        <div class="plan-price-area">
                                            <h2 class="price-title">$49<sub>Monthly</sub></h2>
                                        </div>
                                        <ul class="plan-list">
                                            <li>Up to 100 keyphrases optimized</li>
                                            <li>Custom dashboards: 4</li>
                                            <li>Content, and link monitoring</li>
                                            <li>Digital marketing expert</li>
                                            <li>Content marketing assets</li>
                                        </ul>
                                    </div>
                                    <div class="plan-footer">
                                        <div class="plan-btn">
                                            <a href="plan.html" class="btn--base active w-100">Choose Plan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="yearly" role="tabpanel" aria-labelledby="yearly-tab">
                        <div class="row justify-content-center mb-30-none">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-10 mb-30">
                                <div class="plan-item">
                                    <div class="plan-header">
                                        <h3 class="title">Standard Plan</h3>
                                    </div>
                                    <div class="plan-body">
                                        <div class="plan-price-area">
                                            <h2 class="price-title">$79<sub>Yearly</sub></h2>
                                        </div>
                                        <ul class="plan-list">
                                            <li>Up to 100 keyphrases optimized</li>
                                            <li>Custom dashboards: 4</li>
                                            <li>Content, and link monitoring</li>
                                            <li>Digital marketing expert</li>
                                            <li>Content marketing assets</li>
                                        </ul>
                                    </div>
                                    <div class="plan-footer">
                                        <div class="plan-btn">
                                            <a href="plan.html" class="btn--base active w-100">Choose Plan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-10 mb-30">
                                <div class="plan-item">
                                    <div class="plan-header">
                                        <h3 class="title">Ultra Plan</h3>
                                        <div class="plan-badge-area">
                                            <span class="plan-badge">Most Popular</span>
                                        </div>
                                    </div>
                                    <div class="plan-body">
                                        <div class="plan-price-area">
                                            <h2 class="price-title">$99<sub>Yearly</sub></h2>
                                        </div>
                                        <ul class="plan-list">
                                            <li>Up to 100 keyphrases optimized</li>
                                            <li>Custom dashboards: 4</li>
                                            <li>Content, and link monitoring</li>
                                            <li>Digital marketing expert</li>
                                            <li>Content marketing assets</li>
                                        </ul>
                                    </div>
                                    <div class="plan-footer">
                                        <div class="plan-btn">
                                            <a href="plan.html" class="btn--base active w-100">Choose Plan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-10 mb-30">
                                <div class="plan-item">
                                    <div class="plan-header">
                                        <h3 class="title">Premium Plan</h3>
                                    </div>
                                    <div class="plan-body">
                                        <div class="plan-price-area">
                                            <h2 class="price-title">$59<sub>Yearly</sub></h2>
                                        </div>
                                        <ul class="plan-list">
                                            <li>Up to 100 keyphrases optimized</li>
                                            <li>Custom dashboards: 4</li>
                                            <li>Content, and link monitoring</li>
                                            <li>Digital marketing expert</li>
                                            <li>Content marketing assets</li>
                                        </ul>
                                    </div>
                                    <div class="plan-footer">
                                        <div class="plan-btn">
                                            <a href="plan.html" class="btn--base active w-100">Choose Plan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--~~~~~~~~~~~~~~ End Plan ~~~~~~~~~~~-->


    <!--~~~~~~~~~~ Start About ~~~~~~~~~~~~~-->
    <section class="about-section ptb-120">
        <div class="about-element-one two">
            <img src="{{ asset('assets/images/element/element-39.png') }}" alt="element">
        </div>
        <div class="container">
            <div class="about-area">
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
                                    <img src="assets/images/element/element-16.png" alt="element">
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
                            <p class="para">We rank among the best in the US, Argentina, and Ukraine. Our apps get
                                featured as best in class, & our clients love our work.</p>
                            <p>Welcome To Zingo, a software development company, helps to digitize businesses by focusing on
                                client’s business challenges, needs, pain points and providing business-goals-oriented
                                software solutions.</p>
                            <div class="about-btn">
                                <a href="{{ route('contact') }}" class="btn--base">Send Message</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~ End About ~~~~~~~~~-->

    @include('partials.footer')

    @include('partials.trail')

@endsection
