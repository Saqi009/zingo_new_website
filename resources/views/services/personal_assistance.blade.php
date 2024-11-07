@extends('layout.main')

@section('title', 'Zingo - Personal Assistance')

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
                            <h2 class="title">Personal Assistance</h2>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Personal Assistance</li>
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
                            <img src="{{ asset('assets/images/services/personal_assistance.png') }}" alt="service">
                        </div>
                        <div class="service-content">
                            <h2 class="title">Personal Assistance</h2>
                            <p>Our Personal Assistance services are designed to help busy professionals and individuals manage their time more effectively. From managing emails and scheduling meetings to handling personal tasks, our virtual assistants are equipped to handle a wide range of responsibilities, allowing you to focus on your priorities.</p>

                            <div class="service-widget-item-area">
                                <div class="row justify-content-center mb-30-none">
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                        <div class="service-widget-item">
                                            <div class="service-widget-icon">
                                                <img src="{{ asset('assets/images/icon/icon-17.png') }}" alt="icon">
                                            </div>
                                            <div class="service-widget-content">
                                                <h5 class="title">TIME MANAGEMENT</h5>
                                                <span class="sub-title">Efficient scheduling for your tasks</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                        <div class="service-widget-item">
                                            <div class="service-widget-icon">
                                                <img src="{{ asset('assets/images/icon/icon-18.png') }}" alt="icon">
                                            </div>
                                            <div class="service-widget-content">
                                                <h5 class="title">EMAIL MANAGEMENT</h5>
                                                <span class="sub-title">Organize and prioritize your inbox</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                        <div class="service-widget-item">
                                            <div class="service-widget-icon">
                                                <img src="{{ asset('assets/images/icon/icon-19.png') }}" alt="icon">
                                            </div>
                                            <div class="service-widget-content">
                                                <h5 class="title">SOCIAL MEDIA MANAGEMENT</h5>
                                                <span class="sub-title">Handle your social media presence</span>
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
                                                <h5 class="title">DOCUMENT MANAGEMENT</h5>
                                                <span class="sub-title">Organize and manage important documents</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-bottom-content">
                                <h2 class="title">Service Description</h2>
                                <p>
                                    With Zingo's Personal Assistance services, we take care of your time-consuming tasks so you can focus on what matters most. Our skilled virtual assistants can handle everything from managing your daily calendar, booking appointments, to research and handling communications with your clients, colleagues, or loved ones. Let us help you stay organized, productive, and stress-free.
                                </p>
                                <p>
                                    Whether you're a busy executive, entrepreneur, or someone who needs help with everyday tasks, we provide tailored personal assistance solutions to meet your needs. Our assistants are highly trained, professional, and dedicated to making your life easier by handling administrative tasks efficiently and effectively.
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
                                            <p class="quote-content">"A personal assistant isn’t just for celebrities—it's for anyone looking to free up time, stay organized, and achieve more."</p>

                                        </div>
                                    </div>
                                </blockquote>
                                <p>
                                    Our personal assistance service covers a wide range of tasks, such as managing your appointments, arranging travel plans, sorting through emails, and handling correspondence. Whether it’s a one-time project or ongoing support, our team is here to help you manage your life more effectively, giving you more time to focus on what truly matters.
                                </p>
                                <p>
                                    We believe in providing a seamless experience, working with you to understand your specific requirements and preferences. Let us take care of the details, so you can take control of your day-to-day life with confidence.
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
                                                                    <p>Ready to lighten your load? Contact us today!</p>
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
