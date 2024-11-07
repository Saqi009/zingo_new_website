@extends('layout.main')

@section('title', 'Zingo - Assist Contact Us')

@section('content')

    <!--~~~~~~~~ Start Banner ~~~~~~~-->
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
                            <h2 class="title">Contact us</h2>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~ End Banner ~~~~~~~~~~~-->


    <!--~~~~~~~~ Start Scroll-To-Top ~~~~~~~~~-->
    <a href="#" class="scrollToTop"><i class="las la-angle-double-up"></i></a>
    <!--~~~~~~~~ End Scroll-To-Top ~~~~~~~~~~-->


    <!--~~~~~~~~~ Start Contact-item ~~~~~~~~~-->
    <section class="contact-item-section ptb-120">
        <div class="contact-item-element-one">
            <img src="{{ asset('assets/images/element/element-71.png') }}" alt="element">
        </div>
        <div class="contact-item-element-two">
            <img src="{{ asset('assets/images/element/element-72.png') }}" alt="element">
        </div>
        <div class="container">
            <div class="row justify-content-center mb-30-none">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="contact-item text-center">
                        <div class="contact-icon-area">
                            <div class="contact-icon">
                                <i class="las la-map-marked-alt"></i>
                            </div>
                        </div>
                        <div class="contact-content">
                            <h3 class="title">Address</h3>
                            <p><a
                                    href="https://www.google.it/maps/place/11+Bridgend+Ct,+Dingwall+IV15+9AE,+Regno+Unito/@57.6004138,-4.4437133,17z/data=!3m1!4b1!4m6!3m5!1s0x488fa057512881b7:0x213ff81fe61f1055!8m2!3d57.600411!4d-4.4411384!16s%2Fg%2F11c25pdb4g?entry=ttu&g_ep=EgoyMDI0MDkwNC4wIKXMDSoASAFQAw%3D%3D">11
                                    Bridgend Ct, Dingwall IV15 9AE, United Kingdom</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="contact-item text-center">
                        <div class="contact-icon-area">
                            <div class="contact-icon">
                                <i class="las la-phone"></i>
                            </div>
                        </div>
                        <div class="contact-content">
                            <h3 class="title">Call Us</h3>
                            <br>
                            <p><a href="tel:4245427170">424 542 7170</a> </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="contact-item text-center">
                        <div class="contact-icon-area">
                            <div class="contact-icon">
                                <i class="las la-envelope-open-text"></i>
                            </div>
                        </div>
                        <div class="contact-content">
                            <h3 class="title">Mail Us</h3>
                            <br>
                            <p><a href="mailto:support@zingoassist.com">support@zingoassist.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~ End Contact-item ~~~~~~~~~-->


    <!--~~~~~~~~ Start Contact ~~~~~~~~-->
    <div class="contact-section ptb-120">
        <div class="contact-element-one">
            <img src="{{ asset('assets/images/element/element-73.png') }}" alt="element">
        </div>
        <div class="contact-element-two">
            <img src="{{ asset('assets/images/element/element-74.png') }}" alt="element">
        </div>
        <div class="container">
            <form class="contact-form" id="contact-form">
                @csrf
                <div class="row justify-content-center mb-25-none">
                    <div class="col-xl-6 col-lg-6 form-group">
                        <label>Enter Your Name</label>
                        <input type="text" name="name" id="name" class="form--control" placeholder="Name">
                    </div>
                    <div class="col-xl-6 col-lg-6 form-group">
                        <label>Enter Your Email Address</label>
                        <input type="email" name="email" id="email" class="form--control"
                            placeholder="Email">
                    </div>
                    <div class="col-xl-6 col-lg-6 form-group">
                        <label>Enter Your Phone</label>
                        <input type="text" name="phone" id="phone" class="form--control" placeholder="xxxxxxxxxx"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
                    </div>
                    <div class="col-xl-6 col-lg-6 form-group">
                        <label>Select Subject</label>
                        <div class="contact-select">
                            <select class="form--control" name="service" id="service">
                                <option value="" selected>Choose subject</option>
                                <option value="virtual_assistant">Virtual Assistant</option>
                                <option value="web_development">Web Development</option>
                                <option value="web_design">Web Design</option>
                                <option value="search_seo">Search SEO</option>
                                <option value="email_and_text_marketing">Email and Text Marketing</option>
                                <option value="lead_generation">Lead Generation</option>
                                <option value="transaction_cordinator">Transaction Cordination</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 form-group">
                        <label>Write Message</label>
                        <textarea name="message" class="form--control" id="message" name="message" placeholder="Write Here ..."></textarea>
                    </div>
                    <div class="col-xl-12 col-lg-12 form-group text-center">
                        <button type="submit" name="submit" class="btn--base mt-20">Send Now <i
                                class="fas fa-arrow-right ml-2"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--~~~~~~~~ End Contact ~~~~~~~~-->

    @include('partials.footer')

    @include('partials.trail')

    @include('partials.popup')

    <script>
        const sendEmailRoute = @json(route('api.send_email'));
    </script>

    <script src="{{ asset('assets/custom/custom.js') }}"></script>

@endsection
