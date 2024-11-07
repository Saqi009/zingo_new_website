@extends('layout.main')

@section('title', 'Zingo - Assist Web Design')

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
                            <h2 class="title">Professional Web Design to Elevate Your Brand</h2>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Web Design</li>
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
                            <img src="{{ asset('assets/images/services/web_design.jpg') }}" alt="service">
                        </div>
                        <div class="service-content">
                            <h2 class="title">Web Design for Growth and Impact</h2>
                            <p>Our Web Design services combine aesthetics and performance to help you stand out online. We create modern, responsive websites that are designed to boost your brand visibility, engage visitors, and drive conversions. Whether you're a small startup or an established business, we offer custom design solutions that cater to your unique needs and goals.</p>

                            <div class="service-widget-item-area">
                                <div class="row justify-content-center mb-30-none">
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                        <div class="service-widget-item">
                                            <div class="service-widget-icon">
                                                <img src="{{ asset('assets/images/icon/icon-17.png') }}" alt="icon">
                                            </div>
                                            <div class="service-widget-content">
                                                <h5 class="title">DATA-DRIVEN STRATEGIES</h5>
                                                <span class="sub-title">Targeted insights to enhance design decisions</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                        <div class="service-widget-item">
                                            <div class="service-widget-icon">
                                                <img src="{{ asset('assets/images/icon/icon-18.png') }}" alt="icon">
                                            </div>
                                            <div class="service-widget-content">
                                                <h5 class="title">MULTI-CHANNEL APPROACH</h5>
                                                <span class="sub-title">Consistent branding across platforms</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                        <div class="service-widget-item">
                                            <div class="service-widget-icon">
                                                <img src="{{ asset('assets/images/icon/icon-19.png') }}" alt="icon">
                                            </div>
                                            <div class="service-widget-content">
                                                <h5 class="title">CONTENT THAT CONVERTS</h5>
                                                <span class="sub-title">Compelling design that builds trust and drives action
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
                                                <h5 class="title">CONTINUOUS OPTIMIZATION</h5>
                                                <span class="sub-title">Ongoing improvements based on user behavior</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-bottom-content">
                                <h2 class="title">Service Description</h2>
                                <p>
                                    Web design is more than just making things look pretty—it’s about crafting an experience that resonates with users and drives results. Our design philosophy combines beauty and functionality to deliver websites that not only look great but also drive traffic, engagement, and conversions.
                                </p>
                                <p>
                                    We take a comprehensive approach to web design, working with you to understand your brand, target audience, and business goals. We then craft a visually stunning and user-friendly design that makes your website a powerful marketing tool. From intuitive navigation to responsive design, every element is carefully considered to ensure a seamless user experience.
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
                                            <p class="quote-content">"Effective web design is about creating a space where visitors feel welcomed, inspired, and motivated to act."</p>

                                        </div>
                                    </div>
                                </blockquote>
                                <p>Our web design services extend beyond just creating a beautiful website. We ensure your site is fully optimized for mobile devices, search engines, and user conversion. We offer ongoing support to continuously improve your site’s performance and keep up with industry trends.</p>

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
                                                    <img src="{{ asset('assets/images/webdev-contact.jpg') }}" alt="contact">
                                                </div>
                                            </div>
                                            <div class="col-xl-7 col-lg-7 mb-30">
                                                <div class="contact-form-area">
                                                    <div class="contact-form-header">
                                                        <div class="left">
                                                            <h2 class="title">Get in Touch <span class="text--base">Let's
                                                                    Talk</span></h2>
                                                                    <p>Have questions or want to discuss your next project? Get in touch with us today to start creating a website that drives results for your business.</p>

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
