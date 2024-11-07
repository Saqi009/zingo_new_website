<footer class="footer-section pt-120">
    <div class="footer-element-one">
        <img src="{{ asset('assets/images/element/element-48.png') }}" alt="element">
    </div>
    <div class="footer-element-two">
        <img src="{{ asset('assets/images/element/element-39.png') }}" alt="element">
    </div>
    <div class="footer-element-three">
        <img src="{{ asset('assets/images/element/element-40.png') }}" alt="element">
    </div>
    <div class="footer-element-four">
        <img src="{{ asset('assets/images/element/element-7.png') }}" alt="element">
    </div>
    <div class="footer-element-five">
        <img src="{{ asset('assets/images/element/element-41.png') }}" alt="element">
    </div>
    <div class="footer-element-six">
        <img src="{{ asset('assets/images/element/element-42.png') }}" alt="element">
    </div>
    <div class="footer-element-seven">
        <img src="{{ asset('assets/images/element/element-39.png') }}" alt="element">
    </div>
    <div class="container">
        <div class="row mb-30-none">
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="footer-widget">
                    <div class="footer-logo">
                        <a class="site-logo site-title" href="index.html"><img src="{{ asset('assets/images/logo2.png') }}"
                                alt="site-logo"></a>
                    </div>
                    <p>Making Your Work Stress-Free, With Zingo Assist</p>
                    <ul class="footer-social">
                        <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                <div class="footer-widget">
                    <h4 class="title">Explore Zingo</h4>
                    <ul class="footer-list">
                        <li><a href="{{ route('service.testimonials') }}">Testimonials</a></li>
                        <li><a href="{{ route('service') }}">Services</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                <div class="footer-widget">
                    <h5 class="title">About us</h5>
                    <ul class="footer-list">
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li><a href="{{ route('faq') }}">FAQ</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-6 mb-30">
                <div class="footer-widget">
                    <h4 class="title">Quick Links</h4>
                    <ul class="footer-list">
                        <li><a href="{{ route('about') }}">About us</a></li>
                        <li><a href="{{ route('service') }}">Service</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ route('faq') }}">FAQs</a></li>
                        {{-- <li><a href="/placeholder/team.html">Team</a></li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 text-center">
                    <div class="copyright-area">
                        <p>Copyright © 2024 <a href="{{ route('home') }}">Zingo</a>. All Rights Reserved. Designed by Muskan
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
