<header class="header-section">
    <div class="header">
        <div class="header-bottom-area">
            <div class="container custom-container">
                <div class="header-menu-content">
                    <nav class="navbar navbar-expand-xl p-0">
                        <a class="site-logo site-title" href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}"
                                alt="site-logo"></a>
                        <button class="navbar-toggler d-block d-xl-none ml-auto" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggle-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                            <div class="header-right">
                                <div class="search-bar">
                                    <form class="header-search-form">
                                        <input type="search" name="keyword" id="header_search" placeholder="Search...">
                                        <button class="header-search-btn"><i class="las la-search"></i></button>
                                    </form>
                                </div>
                                <div class="header-links-area">
                                    <ul class="header-links">
                                        <li>
                                            <a href="mailto:Info@zingoassist.com">
                                                <div class="links-thumb">
                                                    <img src="{{ asset('assets/images/icon/icon-1.png') }}" alt="icon">
                                                </div>
                                                <span>Info@zingoassist.com</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tel:+11256326501">
                                                <div class="links-thumb">
                                                    <img src="{{ asset('assets/images/icon/icon-2.png') }}" alt="icon">
                                                </div>
                                                <span>+1 424 542 7170</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <button class="menu-toggler ml-auto">
                                    <span class="toggle-bar"></span>
                                </button>
                                <div class="menu-toggler-wrapper">
                                    <ul class="navbar-nav main-menu">
                                        <li class="menu_has_children">
                                            <a href="{{ route('home') }}">Home <i class="las"></i></a>
                                        </li>
                                        <li><a href="{{ route('about') }}">About</a></li>
                                        <li class="menu_has_children">
                                            <a href="#0">Pages <i class="las la-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                {{-- <li><a href="{{ route('team') }}">Team</a></li> --}}
                                                <li><a href="{{ route('faq') }}">FAQ</a></li>
                                                <li><a href="{{ route('service') }}">Services</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('blog') }}">Blog</a></li>
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="header-action-area">
                                    <div class="header-action">
                                        <a class="btn-show-popup" onclick="showPopup()" class="btn--base">GET STARTED</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    @include('partials.popup')

</header>
