@extends('layout.main')

@section('title', 'Zingo - Video Editing')

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
                            <h2 class="title">Video Editing</h2>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Video Editing</li>
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
                            <img src="{{ asset('assets/images/services/video_editing.png') }}" alt="service">
                        </div>
                        <div class="service-content">
                            <h2 class="title">Video Editing</h2>
                            <p>Our Video Editing services are designed to help you create stunning videos that captivate
                                your audience and leave a lasting impression. From basic cuts to advanced effects and
                                transitions, we provide high-quality editing services to turn your raw footage into
                                polished, professional content.</p>

                            <div class="service-widget-item-area">
                                <div class="row justify-content-center mb-30-none">
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                        <div class="service-widget-item">
                                            <div class="service-widget-icon">
                                                <img src="{{ asset('assets/images/icon/icon-17.png') }}" alt="icon">
                                            </div>
                                            <div class="service-widget-content">
                                                <h5 class="title">PROFESSIONAL EDITING</h5>
                                                <span class="sub-title">Expert editing for flawless videos</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                        <div class="service-widget-item">
                                            <div class="service-widget-icon">
                                                <img src="{{ asset('assets/images/icon/icon-18.png') }}" alt="icon">
                                            </div>
                                            <div class="service-widget-content">
                                                <h5 class="title">COLOR GRADING</h5>
                                                <span class="sub-title">Enhance the look and feel of your footage</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                        <div class="service-widget-item">
                                            <div class="service-widget-icon">
                                                <img src="{{ asset('assets/images/icon/icon-19.png') }}" alt="icon">
                                            </div>
                                            <div class="service-widget-content">
                                                <h5 class="title">TRANSITIONS & EFFECTS</h5>
                                                <span class="sub-title">Smooth transitions and special effects</span>
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
                                                <h5 class="title">SOUND DESIGN</h5>
                                                <span class="sub-title">Audio enhancement and sound mixing</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-bottom-content">
                                <h2 class="title">Service Description</h2>
                                <p>
                                    At Zingo, we understand the power of video content in today’s digital world. Whether
                                    you're creating content for social media, marketing campaigns, or personal projects, we
                                    offer professional video editing services that transform raw footage into engaging,
                                    high-quality videos. Our editing team is equipped with the latest tools and skills to
                                    give your video content a cinematic touch.
                                </p>
                                <p>
                                    Our video editing services include cutting, trimming, adding transitions, color
                                    correction, sound design, and more, making sure your video is not only visually
                                    appealing but also delivers a powerful message to your audience.
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
                                            <p class="quote-content">"A great video is a perfect blend of creativity and
                                                technical skills – and that’s what we deliver."</p>

                                        </div>
                                    </div>
                                </blockquote>
                                <p>
                                    Whether you're a small business looking to create promotional videos or a content
                                    creator wanting to enhance your YouTube channel, we provide tailored solutions that meet
                                    your specific needs. Our team is committed to delivering your vision with precision,
                                    creativity, and professionalism.
                                </p>
                                <p>
                                    With our expert editing services, we help you communicate your message more effectively,
                                    ensuring your video resonates with your target audience and achieves the results you
                                    want.
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
                                                            <p>Ready to bring your vision to life? Contact us today!</p>
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
