@extends('layout.main')

@section('title', 'Zingo - IT Support')

@section('content')

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Banner
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
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
                            <h2 class="title">IT Support</h2>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">IT Support</li>
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
        Start Service
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="service-section two ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="service-item three details">
                        <div class="service-thumb">
                            <img src="{{ asset('assets/images/services/it_support.png') }}" alt="service">
                        </div>
                        <div class="service-content">
                            <h2 class="title">IT Support</h2>
                            <p>Our IT Support services are designed to ensure that your business operations run smoothly without any technical interruptions. From troubleshooting issues to network management and system optimization, our expert team is always available to provide you with the support you need to stay productive and secure.</p>

                            <div class="service-widget-item-area">
                                <div class="row justify-content-center mb-30-none">
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                        <div class="service-widget-item">
                                            <div class="service-widget-icon">
                                                <img src="{{ asset('assets/images/icon/icon-17.png') }}" alt="icon">
                                            </div>
                                            <div class="service-widget-content">
                                                <h5 class="title">24/7 SUPPORT</h5>
                                                <span class="sub-title">Round-the-clock assistance for your IT needs</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                        <div class="service-widget-item">
                                            <div class="service-widget-icon">
                                                <img src="{{ asset('assets/images/icon/icon-18.png') }}" alt="icon">
                                            </div>
                                            <div class="service-widget-content">
                                                <h5 class="title">NETWORK MANAGEMENT</h5>
                                                <span class="sub-title">Optimize and maintain a secure network</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                        <div class="service-widget-item">
                                            <div class="service-widget-icon">
                                                <img src="{{ asset('assets/images/icon/icon-19.png') }}" alt="icon">
                                            </div>
                                            <div class="service-widget-content">
                                                <h5 class="title">HARDWARE & SOFTWARE INSTALLATION</h5>
                                                <span class="sub-title">Expert installation and setup of systems</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                        <div class="service-widget-item">
                                            <div class="service-widget-icon">
                                                <img src="{{ asset('assets/images/icon/icon-20.png') }}" alt="icon">
                                            </div>
                                            <div class="service-widget-content">
                                                <h5 class="title">DATA RECOVERY</h5>
                                                <span class="sub-title">Secure recovery of critical business data</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-bottom-content">
                                <h2 class="title">Service Description</h2>
                                <p>
                                    Our IT Support services are here to keep your business running smoothly, no matter what technical challenges arise. Whether you need immediate troubleshooting, ongoing network management, or system updates, we provide comprehensive IT solutions designed to minimize downtime and optimize efficiency.
                                </p>
                                <p>
                                    We offer 24/7 support, meaning you can always count on us to resolve any issues promptly. Our expert team can help with everything from hardware and software installations to network security and data recovery, ensuring that your systems are always performing at their best.
                                </p>
                                <blockquote class="two">
                                    <div class="quote-area d-flex flex-wrap">
                                        <div class="quote-icon">
                                            <img src="{{ asset('assets/images/client/quote-2.png') }}" alt="quote">
                                        </div>
                                        <div class="quote-shape">
                                            <img src="{{ asset('assets/images/element/element-66.png') }}" alt="element">
                                        </div>
                                        <div class="quote-content-area">
                                            <p class="quote-content">"Reliable IT support is the backbone of any successful business operation, ensuring productivity and seamless technology integration."</p>

                                        </div>
                                    </div>
                                </blockquote>
                                <p>
                                    Our team of dedicated IT professionals is ready to support your business with tailored IT solutions, custom-fit to your needs. We understand that every business is unique, and we work closely with you to ensure your systems and processes are optimized to deliver the best results.
                                </p>
                                <p>
                                    From proactive monitoring and issue resolution to software and hardware management, our goal is to provide you with the peace of mind that your IT infrastructure is in capable hands.
                                </p>
                                <div class="contact-section two">
                                    <div class="contact-area">
                                        <div class="contact-element-five">
                                            <img src="{{ asset('assets/images/element/element-60.png') }}" alt="element">
                                        </div>
                                        <div class="contact-element-six">
                                            <img src="{{ asset('assets/images/element/element-60.png') }}" alt="element">
                                        </div>
                                        <div class="row mb-30-none">
                                            <div class="col-xl-5 col-lg-5 mb-30">
                                                <div class="contact-thumb">
                                                    <img src="{{ asset('assets/images/webdev-contact.jpg') }}"
                                                        alt="contact">
                                                </div>
                                            </div>
                                            <div class="col-xl-7 col-lg-7 mb-30">
                                                <div class="contact-form-area">
                                                    <div class="contact-form-header">
                                                        <div class="left">
                                                            <h2 class="title">Get in Touch <span class="text--base">Let's
                                                                    Talk</span></h2>
                                                                    <p>Need IT support? Contact us today!</p>
                                                                </div>
                                                    </div>
                                                    <form class="contact-form" id="contact-form">
                                                        @csrf
                                                        <div class="row justify-content-center mb-25-none">
                                                            <div class="col-xl-6 col-lg-6 form-group">
                                                                <label>Enter Your Name</label>
                                                                <input type="text" name="name" id="name"
                                                                    class="form--control" placeholder="Name">
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 form-group">
                                                                <label>Enter Your Email Address</label>
                                                                <input type="email" name="email" id="email"
                                                                    class="form--control" placeholder="Email">
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 form-group">
                                                                <label>Enter Your Phone</label>
                                                                <input type="text" name="phone" id="phone"
                                                                    class="form--control" placeholder="xxxxxxxxxx"
                                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 form-group">
                                                                <label>Select Subject</label>
                                                                <div class="contact-select">
                                                                    <select class="form--control" name="service"
                                                                        id="service">
                                                                        <option value="" selected>Choose subject
                                                                        </option>
                                                                        <option value="virtual_assistant">Virtual Assistant
                                                                        </option>
                                                                        <option value="web_development">Web Development
                                                                        </option>
                                                                        <option value="web_design">Web Design</option>
                                                                        <option value="search_seo">Search SEO</option>
                                                                        <option value="email_and_text_marketing">Email and
                                                                            Text Marketing</option>
                                                                        <option value="lead_generation">Lead Generation
                                                                        </option>
                                                                        <option value="transaction_cordinator">Transaction
                                                                            Cordination</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12 col-lg-12 form-group">
                                                                <label>Write Message</label>
                                                                <textarea name="message" class="form--control" id="message" name="message" placeholder="Write Here ..."></textarea>
                                                            </div>
                                                            <div class="col-xl-12 col-lg-12 form-group text-center">
                                                                <button type="submit" name="submit"
                                                                    class="btn--base mt-20">Send Now <i
                                                                        class="fas fa-arrow-right ml-2"></i></button>
                                                            </div>
                                                        </div>
                                                    </form>
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
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Service
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    @include('partials.trail')

    @include('partials.popup')

    <script>
        const sendEmailRoute = @json(route('api.send_email'));
    </script>

    <script src="{{ asset('assets/custom/custom.js') }}"></script>

@endsection
