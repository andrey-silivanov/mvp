@extends('layouts.app')
@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="section">

        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-primary">
            <div class="container">
                <div class="breadcrumb-content">
                    <ul>
                        <li>
                            <a href="index.html"><i class="fa fa-home"></i> </a>
                        </li>
                        <li class="active"> Blog Details Sidebar</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End -->

    </div>
    <!-- Breadcrumb Section End -->
    <div class="section">
        <div class="container-fluid p-0">
            <div class="cover-image"
                 style="background-image: url('https://www.slixa.com/images/s/Z/sZTLnoK33ZmFBfl97bkHKfdnrEw_vx.jpg')">
                <div class="username-info">
                    <span class="vip">VIP</span>
                    <h1>{{ $result['username'] }}</h1>
                    <span class="verified"><i class="fa fa-check"></i> Verified</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Details Section Start -->
    <div class="section mt-5 mb-5">
        <div class="container">

            <div class="row flex-row">
                <!-- Blog Main Area Start -->
                <div class="col-lg-8 col-12 singe_ad">

                    <!-- Single Post Details Start -->
                    <div class="profile-content mb-10">

                        <!-- Blockquote Start -->
                        <blockquote class="blockquote mt-5 mb-5">
                            <p>“{{ $result['title'] }}”</p>
                        </blockquote>
                        <!-- Blockquote End -->

                        <!-- Blog Details Image Start -->
                        <div class="col-lg-6 offset-lg-3 col-12 image mb-6" data-aos="fade-up" data-aos-delay="300">
                            <!-- Product Details Image Start -->
                            <div class="product-details-img">

                                <!-- Single Product Image Start -->
                                <div class="single-product-img swiper-container product-gallery-top">
                                    <div class="swiper-wrapper popup-gallery">
                                        @foreach($result['pictures'] as $image)
                                            <a class="swiper-slide w-100" href="{{ $image }}">
                                                <img class="w-100" src="{{ $image }}" alt="Product">
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- Single Product Image End -->

                                <!-- Single Product Thumb Start -->
                                <div class="single-product-thumb swiper-container product-gallery-thumbs">
                                    <div class="swiper-wrapper">
                                        @foreach($result['pictures'] as $image)
                                            <div class="swiper-slide">
                                                <img src="{{ $image }}" alt="Product">
                                            </div>
                                        @endforeach
                                    </div>

                                    <!-- Next Previous Button Start -->
                                    <div class="swiper-button-next swiper-button-white"><i
                                            class="pe-7s-angle-right"></i></div>
                                    <div class="swiper-button-prev swiper-button-white"><i class="pe-7s-angle-left"></i>
                                    </div>
                                    <!-- Next Previous Button End -->

                                </div>
                                <!-- Single Product Thumb End -->

                            </div>
                            <!-- Product Details Image End -->
                        </div>
                        <!-- Blog Details Image End -->

                        <!-- Single Post Details Content Start -->
                        <div class="content p-5" data-aos="fade-up" data-aos-delay="300">

                            <!-- Description Start -->
                            <div class="desc">
                                {!! $result['description'] !!}
                            </div>
                            <!-- Description End -->

                        </div>
                        <!-- Single Post Details Content End -->

                        <!-- Single Post Details Footer Start -->
                        {{--                        <div class="single-post-details-footer mt-10" data-aos="fade-up" data-aos-delay="300">--}}
                        {{--                            <!-- Shear Article Start -->--}}
                        {{--                            <div class="share-article">--}}
                        {{--                                <span class="left-side">--}}
                        {{--                                        <a href="#"> <i class="fa fa-long-arrow-left"></i> Older Post</a>--}}
                        {{--                                    </span>--}}
                        {{--                                <h6 class="share-title text-uppercase">Share this article</h6>--}}
                        {{--                                <span class="right-side">--}}
                        {{--                                        <a href="#">Newer Post <i class="fa fa-long-arrow-right"></i></a>--}}
                        {{--                                    </span>--}}
                        {{--                            </div>--}}
                        <!-- Shear Article Start -->
                        <!-- Social Shear Start -->
                        {{--                            <div class="widget-social border-top pt-2">--}}
                        {{--                                <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>--}}
                        {{--                                <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                                <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>--}}
                        {{--                                <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>--}}
                        {{--                                <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>--}}
                        {{--                            </div>--}}
                        <!-- Social Shear Start -->
                        {{--                        </div>--}}
                        <!-- Single Post Details Footer End -->

                    </div>
                    <!-- Single Post Details End -->

                </div>

                <div class="col-lg-3 offset-lg-1 col-12 bg-dark">
                    <!-- Sidebar Widget Start -->
                    <aside class="sidebar_widget mt-10 mt-lg-0">
                        <div class="widget_inner" data-aos="fade-up" data-aos-delay="200">

                            <div class="widget-list pb-10">
                                <h3 class="widget-title mb-6 mt-6">Details</h3>
                                <!-- Details Start -->
                                <div class="profile-details">
                                    <div>
                                        <p class="label">Gender</p>
                                        <p class="detail-value">female</p>
                                    </div>
                                    <div>
                                        <p class="label">Age:</p>
                                        <p>22</p>
                                    </div>
                                    <div>
                                        <p class="label">Ethnicity</p>
                                        <p>black/ebony</p>
                                    </div>
                                    <div>
                                        <p class="label">Hair color</p>
                                        <p>brunette</p>
                                    </div>
                                    <div>
                                        <p class="label">Eye color</p>
                                        <p>black</p>
                                    </div>
                                    <div>
                                        <p class="label">Height</p>
                                        <p>1 m 68 cm</p>
                                    </div>
                                    <div>
                                        <p class="label">Weight</p>
                                        <p>49 kg</p>
                                    </div>
                                    <div>
                                        <p class="label">Affiliation</p>
                                        <p>independent</p>
                                    </div>
                                    <div>
                                        <p class="label">Available To</p>
                                        <p>couples, men</p>
                                    </div>
                                </div>
                                <!-- Details End -->
                            </div>

                            <div class="widget-list contact-details">
                                <h3 class="widget-title mb-6">CONTACT INFORMATION</h3>
                                <address class="contact-block">
                                    <ul>
                                        <li data-aos="fade-up" data-aos-delay="400"><i class="fa fa-phone"></i> <a
                                                href="tel:123-123-456-789">123 123 456 789</a></li>
                                        <li data-aos="fade-up" data-aos-delay="600"><i class="fa fa-envelope-o"></i> <a
                                                href="mailto:demo@example.com">demo@example.com </a></li>
                                    </ul>
                                </address>
                            </div>
                        </div>
                    </aside>
                    <!-- Sidebar Widget End -->
                </div>
                <!-- Blog Main Area End -->
            </div>

        </div>
    </div>
    <!-- Blog Details Section End -->
@endsection
