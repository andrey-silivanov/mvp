<!-- Header Section Start -->
<div class="header section">

    <!-- Header Top Start -->
    <div class="header-top bg-primary">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Top Message Start -->
                <div class="col-md-12 col-lg-6 text-lg-start text-center">
                    <div class="header-top-msg-wrapper">
                        <p class="header-top-message">Welcome to Toyqo baby toys online store</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 text-end d-none d-lg-block">
                    <div class="header-top-settings">
                        <ul class="nav align-items-center justify-content-end">
                            <li class="curreny-wrap">
                                $ Currency
                                <i class="fa fa-angle-down"></i>
                                <ul class="dropdown-list curreny-list">
                                    <li><a href="#">$ USD</a></li>
                                    <li><a href="#">€ EURO</a></li>
                                </ul>
                            </li>
                            <li class="language"> {{ LaravelLocalization::getCurrentLocaleNative() }}<i class="fa fa-angle-down"></i>
                                <ul class="dropdown-list">
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <li>
                                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                {{ $properties['native'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Header Top Message End -->

            </div>
        </div>
    </div>
    <!-- Header Top End -->

    <!-- Header Bottom Start -->
    <div class="header-bottom">
        <div class="header-sticky">
            <div class="container">
                <div class="row align-items-center position-relative">

                    <!-- Header Logo Start -->
                    <div class="col-md-6 col-lg-3 col-xl-2 col-6">
                        <div class="header-logo">
                            <span class="text-warning">WorldEscort</span>
{{--                            <a href="index.html"><img src="/images/logo1.png" alt="Site Logo"/></a>--}}
                        </div>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Menu Start -->
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="main-menu">
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li class="position-static">
                                    <a href="#">{{ __('shop.catalog') }}</a>
                                </li>
                                <li>
                                    <a href="#">Pages</a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Menu End -->

                    <!-- Header Action Start -->
                    <div class="col-md-6 col-lg-3 col-xl-4 col-6 justify-content-end">
                        <div class="header-actions">
                            <a href="javascript:void(0)"
                               class="header-action-btn header-action-btn-search d-none d-lg-block"><i
                                    class="pe-7s-search"></i></a>
                            <div class="dropdown-user d-none d-lg-block">
                                @auth
{{--                                    <form method="POST" action="{{ route('logout') }}">--}}
                                    <form method="POST" action="#">
                                        @csrf
                                        <a href="javascript:void(0)" onclick="event.preventDefault();
                                                this.closest('form').submit();" class="header-action-btn alert-danger">
                                            <i class="pe-7s-user"></i>
                                        </a>

                                    </form>
                                @endauth
                                @guest
                                    <a href="#" class="header-action-btn">
                                        <i class="pe-7s-user"></i>
                                    </a>
                                @endguest
                            </div>
{{--                            <a href="{{ route('wishlist') }}" class="header-action-btn header-action-btn-wishlist">--}}
{{--                                <i class="pe-7s-like"></i>--}}
{{--                                <header-wish-list-count-component />--}}
{{--                            </a>--}}
{{--                            <a href="javascript:void(0)" class="header-action-btn header-action-btn-cart">--}}
{{--                                <i class="pe-7s-cart"></i>--}}
{{--                                <header-cart-count-component/>--}}
{{--                            </a>--}}
                            <!-- Mobile Menu Hambarger Action Button Start -->
                            <a href="javascript:void(0)"
                               class="header-action-btn header-action-btn-menu d-lg-none d-md-block">
                                <i class="fa fa-bars"></i>
                            </a>
                            <!-- Mobile Menu Hambarger Action Button End -->

                        </div>
                    </div>
                    <!-- Header Action End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Header Bottom End -->

    <!-- Offcanvas Search Start -->
{{--    <search-component></search-component>--}}
    <!-- Offcanvas Search End -->

</div>
<!-- Header Section End -->

<!-- Mobile Menu Start -->
<div class="mobile-menu-wrapper">
    <div class="offcanvas-overlay"></div>

    <!-- Mobile Menu Inner Start -->
    <div class="mobile-menu-inner">

        <!-- Button Close Start -->
        <div class="offcanvas-btn-close">
            <i class="pe-7s-close"></i>
        </div>
        <!-- Button Close End -->

        <!-- Mobile Menu Inner Wrapper Start -->
        <div class="mobile-menu-inner-wrapper">
            <!-- Mobile Menu Search Box Start -->
            <div class="search-box-offcanvas">
                <form>
                    <input class="search-input-offcanvas" type="text" placeholder="Search product...">
                    <button class="search-btn"><i class="pe-7s-search"></i></button>
                </form>
            </div>
            <!-- Mobile Menu Search Box End -->

            <!-- Mobile Menu Start -->
            <div class="mobile-navigation">
                <nav>
                    <ul class="mobile-menu">
                        <li class="has-children">
                            <a href="#">Home <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown">
                                <li><a href="index.html">Home One</a></li>
                                <li><a href="index-2.html">Home Two</a></li>
                                <li><a href="index-3.html">Home Three</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">{{ __('shop.catalog') }} <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        </li>
                        <li class="has-children">
                            <a href="#">Product <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown">
                                <li><a href="single-product.html">Single Product</a></li>
                                <li><a href="single-product-sale.html">Single Product Sale</a></li>
                                <li><a href="single-product-group.html">Single Product Group</a></li>
                                <li><a href="single-product-normal.html">Single Product Normal</a></li>
                                <li><a href="single-product-affiliate.html">Single Product Affiliate</a></li>
                                <li><a href="single-product-slider.html">Single Product Slider</a></li>
                                <li><a href="single-product-gallery-left.html">Gallery Left</a></li>
                                <li><a href="single-product-gallery-right.html">Gallery Right</a></li>
                                <li><a href="single-product-tab-style-left.html">Tab Style Left</a></li>
                                <li><a href="single-product-tab-style-right.html">Tab Style Right</a></li>
                                <li><a href="single-product-sticky-left.html">Sticky Left</a></li>
                                <li><a href="single-product-sticky-right.html">Sticky Right</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="faq.html">Faq</a></li>
                                <li><a href="error-404.html">Error 404</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="login.html">Loging | Register</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Blog <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                                <li><a href="blog-details-sidebar.html">Blog Details Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Mobile Menu End -->

            <!-- Language, Currency & Link Start -->
            <div class="offcanvas-lag-curr mb-6">
                <div class="header-top-lan-curr-link">
                    <div class="header-top-lan dropdown">
                        <h4 class="title">Language:</h4>
                        <button class="dropdown-toggle" data-bs-toggle="dropdown">English <i
                                class="fa fa-angle-down"></i></button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a class="dropdown-item" href="#">English</a></li>
                            <li><a class="dropdown-item" href="#">Japanese</a></li>
                            <li><a class="dropdown-item" href="#">Arabic</a></li>
                            <li><a class="dropdown-item" href="#">Romanian</a></li>
                        </ul>
                    </div>
                    <div class="header-top-curr dropdown">
                        <h4 class="title">Currency:</h4>
                        <button class="dropdown-toggle" data-bs-toggle="dropdown">USD <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a class="dropdown-item" href="#">USD</a></li>
                            <li><a class="dropdown-item" href="#">Pound</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Language, Currency & Link End -->

            <!-- Contact Links/Social Links Start -->
            <div class="mt-auto bottom-0">

                <!-- Contact Links Start -->
                <ul class="contact-links">
                    <li><i class="fa fa-phone"></i><a href="#"> +012 3456 789</a></li>
                    <li><i class="fa fa-envelope-o"></i><a href="#"> info@example.com</a></li>
                    <li><i class="fa fa-clock-o"></i> <span>Monday - Sunday 9.00 - 18.00</span></li>
                </ul>
                <!-- Contact Links End -->

                <!-- Social Widget Start -->
                <div class="widget-social">
                    <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                    <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                    <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                    <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                    <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                </div>
                <!-- Social Widget Ende -->
            </div>
            <!-- Contact Links/Social Links End -->
        </div>
        <!-- Mobile Menu Inner Wrapper End -->

    </div>
    <!-- Mobile Menu Inner End -->
</div>
<!-- Mobile Menu End -->
