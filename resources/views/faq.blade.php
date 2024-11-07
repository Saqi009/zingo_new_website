@extends('layout.main')

@section('title', 'Zingo - Assist FAQ')

<head>
    <style>
        .header-section {
            background: #A52673;
        }
    </style>
</head>

@section('content')
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Banner
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="banner-section two inner">
        <div class="banner-element-four two">
            <img src="assets/images/element/element-5.png" alt="element">
        </div>
        <div class="banner-element-five two">
            <img src="assets/images/element/element-7.png" alt="element">
        </div>
        <div class="banner-element-nineteen two">
            <img src="assets/images/element/element-6.png" alt="element">
        </div>
        <div class="banner-element-twenty-two two">
            <img src="assets/images/element/element-69.png" alt="element">
        </div>
        <div class="banner-element-twenty-three two">
            <img src="assets/images/element/element-70.png" alt="element">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center mb-30-none">
                <div class="col-xl-12 mb-30">
                    <div class="banner-content two">
                        <div class="banner-content-header">
                            <h2 class="title">Frequently Asked Questions</h2>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Banner
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Scroll-To-Top
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <a href="#" class="scrollToTop"><i class="las la-angle-double-up"></i></a>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Scroll-To-Top
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Faq
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="faq-section ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-12">
                    <div class="faq-wrapper">
                        <div class="faq-item">
                            <h3 class="faq-title"><span class="title">What services does your virtual assistant
                                    provide?</span><span class="right-icon"></span></h3>
                            <div class="faq-content">
                                <p>Our virtual assistants offer a wide range of services, including administrative
                                    support, email and calendar management, social media management, content creation,
                                    customer service, CRM management, Cold Calling, and more. We tailor our services to meet
                                    the unique
                                    needs of each client, so feel free to reach out with specific requirements!</p>
                                <div class="faq-inner-thumb-area">
                                    <div class="faq-inner-thumb">
                                        <img src="{{ asset('assets/images/faq.png') }}" alt="faq">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq-item">
                            <h3 class="faq-title"><span class="title"> How do I know if a virtual assistant is right for
                                    my business?</span><span class="right-icon"></span></h3>
                            <div class="faq-content">
                                <p>If you’re looking to streamline tasks, free up time, and focus on core aspects of
                                    your business, a virtual assistant can be a great solution. Our assistants handle
                                    daily tasks that might otherwise take up your time, allowing you to increase
                                    productivity and grow your business.
                                </p>
                                <div class="faq-inner-thumb-area">
                                    <div class="faq-inner-thumb">
                                        <img src="{{ asset('assets/images/faq.png') }}" alt="faq">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq-item active open">
                            <h3 class="faq-title"><span class="title">Are your virtual assistants trained and
                                    experienced?</span><span class="right-icon"></span></h3>
                            <div class="faq-content">
                                <p>Yes, our virtual assistants are skilled professionals with experience in various
                                    fields, including administrative support, marketing, and customer service. Each
                                    assistant is carefully vetted and trained to provide reliable, high-quality support
                                    to our clients.</p>
                                <div class="faq-inner-thumb-area">
                                    <div class="faq-inner-thumb">
                                        <img src="{{ asset('assets/images/faq.png') }}" alt="faq">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq-item">
                            <h3 class="faq-title"><span class="title">Can I hire a virtual assistant for part-time or
                                    project-based work?</span><span class="right-icon"></span></h3>
                            <div class="faq-content">
                                <p>Absolutely! We offer flexible options to accommodate part-time, full-time, and
                                    project-based needs. Whether you require assistance for a single project or ongoing
                                    support, we can tailor a package to suit your needs.</p>
                                <div class="faq-inner-thumb-area">
                                    <div class="faq-inner-thumb">
                                        <img src="{{ asset('assets/images/faq.png') }}" alt="faq">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq-item">
                            <h3 class="faq-title"><span class="title">How do I communicate with my virtual
                                    assistant?</span><span class="right-icon"></span></h3>
                            <div class="faq-content">
                                <p>You can communicate with your virtual assistant through your preferred methods, such
                                    as email, phone calls, video conferencing, or instant messaging. We work with you to
                                    establish a seamless communication process that aligns with your workflow.</p>
                                <div class="faq-inner-thumb-area">
                                    <div class="faq-inner-thumb">
                                        <img src="{{ asset('assets/images/faq.png') }}" alt="faq">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Faq
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    @include('partials.trail')


@endsection
