@extends('layout.main')

@section('title', 'Zingo - Assist Graphic Design')

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
                            <h2 class="title">Graphic Design</h2>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Graphic Design</li>
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
                            <img src="{{ asset('assets/images/services/graphic_design.png') }}" alt="service">
                        </div>
                        <div class="service-content">
                            <h2 class="title">Graphic Design</h2>
                            <p>At Zingo, we provide comprehensive graphic design services that elevate your brand's identity. Whether it's a logo, marketing materials, website design, or custom illustrations, our team of expert designers crafts visually stunning solutions tailored to your business needs. We combine creativity with strategic design to create engaging, memorable experiences for your audience.</p>

                            <div class="service-widget-item-area">
                                <div class="row justify-content-center mb-30-none">
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                        <div class="service-widget-item">
                                            <div class="service-widget-icon">
                                                <img src="{{ asset('assets/images/icon/icon-17.png') }}" alt="icon">
                                            </div>
                                            <div class="service-widget-content">
                                                <h5 class="title">Creative Logo Design</h5>
                                                <span class="sub-title">Crafting unique logos that reflect your brand identity.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                        <div class="service-widget-item">
                                            <div class="service-widget-icon">
                                                <img src="{{ asset('assets/images/icon/icon-18.png') }}" alt="icon">
                                            </div>
                                            <div class="service-widget-content">
                                                <h5 class="title">Marketing Collateral</h5>
                                                <span class="sub-title">Designing flyers, brochures, and banners that convert.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                        <div class="service-widget-item">
                                            <div class="service-widget-icon">
                                                <img src="{{ asset('assets/images/icon/icon-19.png') }}" alt="icon">
                                            </div>
                                            <div class="service-widget-content">
                                                <h5 class="title">Web & Mobile UI/UX Design</h5>
                                                <span class="sub-title">Designing intuitive and user-friendly interfaces.</span>
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
                                                <h5 class="title">Custom Illustrations</h5>
                                                <span class="sub-title">Creating bespoke illustrations for your brand's story.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-bottom-content">
                                <h2 class="title">Service Description</h2>
                                <p>Our Graphic Design services are more than just beautiful visuals; they tell the story of your brand in a way that connects emotionally with your target audience. From logo creation to print media and digital interfaces, we design with purpose and strategy. Our goal is to produce high-quality designs that resonate with your audience and communicate your message effectively.</p>
                                <p>We believe in the power of visual storytelling. Our team works closely with you to understand your business and create designs that not only look good but also convey your brand’s personality and values. Whether you need a logo, branding, or promotional materials, we tailor our designs to fit your unique needs and goals.</p>
                                <blockquote class="two">
                                    <div class="quote-area d-flex flex-wrap">
                                        <div class="quote-icon">
                                            <img src="{{ asset('assets/images/client/quote-2.png') }}" alt="quote">
                                        </div>
                                        <div class="quote-shape">
                                            <img src="{{ asset('assets/images/element/element-66.png') }}" alt="element">
                                        </div>
                                        <div class="quote-content-area">
                                            <p class="quote-content">"Good design is not just about making things look pretty—it's about creating a powerful visual experience that communicates your brand message clearly."</p>

                                        </div>
                                    </div>
                                </blockquote>
                                <p>Our design team continuously innovates to keep your brand ahead of trends and relevant to your audience. By merging creativity with strategy, we create designs that not only capture attention but also convert leads into customers. Let us help you elevate your brand through design that speaks volumes.</p>

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
                                                            <p>Contact us for your custom design needs!</p>
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
                                                                        <option value="web_development">Graphic Design
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
