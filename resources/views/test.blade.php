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
                        <li class="active"> Shop</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End -->

    </div>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper flex-column flex-md-row pb-10 mb-n4">

                        <!-- Shop Top Bar Left start -->
                        <div class="shop-top-bar-left mb-4">

                            <div class="shop_toolbar_btn">
                                <button data-role="grid_4" type="button" class="active btn-grid-4" title="Grid"><i class="fa fa-th"></i></button>
                                <button data-role="grid_list" type="button" class="btn-list" title="List"><i class="fa fa-list"></i></button>
                            </div>
                            <div class="shop-top-show">
                                <span>Showing 1–12 of 39 results</span>
                            </div>

                        </div>
                        <!-- Shop Top Bar Left end -->

                        <!-- Shopt Top Bar Right Start -->
                        <div class="shop-top-bar-right mb-4">

                            <h4 class="title me-2">Short By: </h4>

                            <div class="shop-short-by">
                                <select class="nice-select" aria-label=".form-select-sm example">
                                    <option selected>Short by Default</option>
                                    <option value="1">Short by Popularity</option>
                                    <option value="2">Short by Rated</option>
                                    <option value="3">Short by Latest</option>
                                    <option value="3">Short by Price</option>
                                    <option value="3">Short by Price</option>
                                </select>
                            </div>
                        </div>
                        <!-- Shopt Top Bar Right End -->

                    </div>
                    <!--shop toolbar end-->

                    <!-- Shop Wrapper Start -->
                    <div class="row shop_wrapper grid_4">

                        <!-- Single Product Start -->
                        @foreach($result as $item)
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 product">
                            <div class="product-inner">
                                <div class="thumb">
                                    <a href="/single/{{ $item['oldId'] }}" class="image">
                                        <img class="first-image" width="260" height="317" src="{{ $item['pictures'][0] }}" alt="Product" />
                                        <img class="second-image fit-image" width="260" height="317" src="{{ $item['pictures'][1] }}" alt="Product" />
                                    </a>
                                    <span class="badges">
                                            <span class="sale">VIP</span>
                                    </span>
                                    <div class="actions">
                                        <a href="wishlist.html" class="action wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="compare.html" class="action compare"><i class="pe-7s-refresh-2"></i></a>
                                        <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="pe-7s-search"></i></a>
                                    </div>
                                    <div class="add-cart-btn">
                                        <button class="btn btn-whited btn-hover-primary text-capitalize add-to-cart">Verify</button>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="single-product.html">{{ $item['username'] }}</a></h5>
                                    <p>{{ $item['title'] }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->
                        @endforeach
                    </div>
                    <!-- Shop Wrapper End -->

                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper mt-10 mb-n4">

                        <!-- Shop Top Bar Left start -->
                        <div class="shop-bottom-bar-left mb-4">
                            <div class="shop-short-by">
                                <select class="nice-select rounded-0" aria-label=".form-select-sm example">
                                    <option selected>Show 12 Per Page</option>
                                    <option value="1">Show 12 Per Page</option>
                                    <option value="2">Show 24 Per Page</option>
                                    <option value="3">Show 15 Per Page</option>
                                    <option value="3">Show 30 Per Page</option>
                                </select>
                            </div>
                        </div>
                        <!-- Shop Top Bar Left end -->

                        <!-- Shopt Top Bar Right Start -->
                        <div class="shop-top-bar-right mb-4">
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link rounded-0" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link rounded-0" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Shopt Top Bar Right End -->

                    </div>
                    <!--shop toolbar end-->

                </div>
            </div>
        </div>
    </div>
    <!-- Shop Section End -->
@endsection
