@extends('frontend.layouts.app')
@section('content')

        <!-- Begin Main Content Area -->
        <main class="main-content">
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{asset('frontend/assets/images/breadcrumb/bg/1-1-1920x373.jpg')}}">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item">
                                <h2 class="breadcrumb-heading">Blog Layout</h2>
                                <ul>
                                    <li>
                                        <a href="index.html">Home <i class="pe-7s-angle-right"></i></a>
                                    </li>
                                    <li>Blog Left Sidebar</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-area section-space-y-axis-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 order-lg-1 order-2 pt-10 pt-lg-0">
                            <div class="sidebar-area">
                                <div class="widgets-searchbox mb-9">
                                    <form id="widgets-searchbox" action="#">
                                        <input class="input-field" type="text" placeholder="Search">
                                        <button class="widgets-searchbox-btn" type="submit">
                                            <i class="pe-7s-search"></i>
                                        </button>
                                    </form>
                                </div>
                                <div class="widgets-area mb-9">
                                    <h2 class="widgets-title mb-5">Category</h2>
                                    <div class="widgets-item">
                                        <ul class="widgets-category">
                                            <li>
                                                <a href="blog-detail-left-sidebar.html">
                                                    Natural Products
                                                    <span>7</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-detail-left-sidebar.html">
                                                    Cooking Items
                                                    <span>3</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-detail-left-sidebar.html">
                                                    Firm Food
                                                    <span>4</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-detail-left-sidebar.html">
                                                    Vegetable & Oil
                                                    <span>6</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widgets-area mb-9">
                                    <h2 class="widgets-title mb-5">Top Rated Products</h2>
                                    <div class="widgets-item">
                                        <div class="swiper-container widgets-list-slider style-2">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="product-list-item">
                                                        <div class="product-img img-zoom-effect">
                                                            <a href="single-product.html">
                                                                <img class="img-full" src="{{asset('frontend/assets/images/blog/small-size/1-1-86x86.jpg')}}" alt="Blog Images">
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <h5 class="title mb-3">
                                                                <a href="blog-detail-left-sidebar.html">Lorem ipsum dolor sit amet consecte</a>
                                                            </h5>
                                                            <div class="blog-meta text-manatee pb-1">
                                                                <ul>
                                                                    <li class="date">May 21, 2021</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="product-list-item">
                                                        <div class="product-img img-zoom-effect">
                                                            <a href="single-product.html">
                                                                <img class="img-full" src="{{asset('frontend/assets/images/blog/small-size/1-2-86x86.jpg')}}" alt="Blog Images">
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <h5 class="title mb-3">
                                                                <a href="blog-detail-left-sidebar.html">Lorem ipsum dolor sit amet consecte</a>
                                                            </h5>
                                                            <div class="blog-meta text-manatee pb-1">
                                                                <ul>
                                                                    <li class="date">May 21, 2021</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="product-list-item">
                                                        <div class="product-img img-zoom-effect">
                                                            <a href="single-product.html">
                                                                <img class="img-full" src="{{asset('frontend/assets/images/blog/small-size/1-3-86x86.jpg')}}" alt="Blog Images">
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <h5 class="title mb-3">
                                                                <a href="blog-detail-left-sidebar.html">Lorem ipsum dolor sit amet consecte</a>
                                                            </h5>
                                                            <div class="blog-meta text-manatee pb-1">
                                                                <ul>
                                                                    <li class="date">May 21, 2021</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widgets-area">
                                    <h2 class="widgets-title mb-5">Tag</h2>
                                    <div class="widgets-item">
                                        <ul class="widgets-tags">
                                            <li>
                                                <a href="javascript:void(0)">Clothing</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Accessories</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">For Men</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Women</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Fashion</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 order-lg-2 order-1">
                            <div class="blog-item-wrap row">
                                <div class="col-md-6">
                                    <div class="blog-item">
                                        <div class="blog-img img-zoom-effect">
                                            <a href="blog-detail-left-sidebar.html">
                                                <img class="img-full" src="{{asset('frontend/assets/images/blog/medium-size/1-1-370x315.jpg')}}" alt="Blog Image">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta text-dim-gray pb-3">
                                                <ul>
                                                    <li class="date"><i class="fa fa-calendar-o me-2"></i>May 21, 2021</li>
                                                    <li>
                                                        <span class="comments me-3">
                                                        <a href="javascript:void(0)">2 Comments</a>
                                                    </span>
                                                        <span class="link-share">
                                                        <a href="javascript:void(0)">Share</a>
                                                    </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h5 class="title mb-4">
                                                <a href="blog-detail-left-sidebar.html">Blog Image Post</a>
                                            </h5>
                                            <p class="short-desc mb-5">Lorem ipsum dolor sit amet, consectet adipi elit, sed do eius tempor incididunt ut labore gthydolore magna aliqua.</p>
                                            <div class="button-wrap">
                                                <a class="btn btn-custom-size lg-size btn-dark rounded-0" href="blog-detail-left-sidebar.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pt-6 pt-md-0">
                                    <div class="swiper-container single-blog-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="blog-item">
                                                    <div class="blog-img img-zoom-effect">
                                                        <a href="blog-detail-left-sidebar.html">
                                                            <img class="img-full" src="{{asset('frontend/assets/images/blog/medium-size/1-3-370x315.jpg')}}" alt="Blog Image">
                                                        </a>
                                                    </div>
                                                    <div class="blog-content">
                                                        <div class="blog-meta text-dim-gray pb-3">
                                                            <ul>
                                                                <li class="date"><i class="fa fa-calendar-o me-2"></i>May 21, 2021</li>
                                                                <li>
                                                                    <span class="comments me-3">
                                                                    <a href="javascript:void(0)">2 Comments</a>
                                                                </span>
                                                                    <span class="link-share">
                                                                    <a href="javascript:void(0)">Share</a>
                                                                </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <h5 class="title mb-4">
                                                            <a href="blog-detail-left-sidebar.html">Blog Gallery Post</a>
                                                        </h5>
                                                        <p class="short-desc mb-5">Lorem ipsum dolor sit amet, consectet adipi elit, sed do eius tempor incididunt ut labore gthydolore magna aliqua.</p>
                                                        <div class="button-wrap">
                                                            <a class="btn btn-custom-size lg-size btn-dark rounded-0" href="blog-detail-left-sidebar.html">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="blog-item">
                                                    <div class="blog-img img-zoom-effect">
                                                        <a href="blog-detail-left-sidebar.html">
                                                            <img class="img-full" src="{{asset('frontend/assets/images/blog/medium-size/1-2-370x315.jpg')}}" alt="Blog Image">
                                                        </a>
                                                    </div>
                                                    <div class="blog-content">
                                                        <div class="blog-meta text-dim-gray pb-3">
                                                            <ul>
                                                                <li class="date"><i class="fa fa-calendar-o me-2"></i>May 21, 2021</li>
                                                                <li>
                                                                    <span class="comments me-3">
                                                                    <a href="javascript:void(0)">2 Comments</a>
                                                                </span>
                                                                    <span class="link-share">
                                                                    <a href="javascript:void(0)">Share</a>
                                                                </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <h5 class="title mb-4">
                                                            <a href="blog-detail-left-sidebar.html">Blog Second Gallery Post</a>
                                                        </h5>
                                                        <p class="short-desc mb-5">Lorem ipsum dolor sit amet, consectet adipi elit, sed do eius tempor incididunt ut labore gthydolore magna aliqua.</p>
                                                        <div class="button-wrap">
                                                            <a class="btn btn-custom-size lg-size btn-dark rounded-0" href="blog-detail-left-sidebar.html">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="blog-item">
                                                    <div class="blog-img img-zoom-effect">
                                                        <a href="blog-detail-left-sidebar.html">
                                                            <img class="img-full" src="{{asset('frontend/assets/images/blog/medium-size/1-1-370x315.jpg')}}" alt="Blog Image">
                                                        </a>
                                                    </div>
                                                    <div class="blog-content">
                                                        <div class="blog-meta text-dim-gray pb-3">
                                                            <ul>
                                                                <li class="date"><i class="fa fa-calendar-o me-2"></i>May 21, 2021</li>
                                                                <li>
                                                                    <span class="comments me-3">
                                                                    <a href="javascript:void(0)">2 Comments</a>
                                                                </span>
                                                                    <span class="link-share">
                                                                    <a href="javascript:void(0)">Share</a>
                                                                </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <h5 class="title mb-4">
                                                            <a href="blog-detail-left-sidebar.html">Blog Third Gallery Post</a>
                                                        </h5>
                                                        <p class="short-desc mb-5">Lorem ipsum dolor sit amet, consectet adipi elit, sed do eius tempor incididunt ut labore gthydolore magna aliqua.</p>
                                                        <div class="button-wrap">
                                                            <a class="btn btn-custom-size lg-size btn-dark rounded-0" href="blog-detail-left-sidebar.html">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pt-6">
                                    <div class="blog-item">
                                        <div class="ratio ratio-16x9">
                                            <iframe allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/182537870&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta text-dim-gray pb-3">
                                                <ul>
                                                    <li class="date"><i class="fa fa-calendar-o me-2"></i>May 21, 2021</li>
                                                    <li>
                                                        <span class="comments me-3">
                                                        <a href="javascript:void(0)">2 Comments</a>
                                                    </span>
                                                        <span class="link-share">
                                                        <a href="javascript:void(0)">Share</a>
                                                    </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h5 class="title mb-4">
                                                <a href="blog-detail-left-sidebar.html">Blog Audio Post</a>
                                            </h5>
                                            <p class="short-desc mb-5">Lorem ipsum dolor sit amet, consectet adipi elit, sed do eius tempor incididunt ut labore gthydolore magna aliqua.</p>
                                            <div class="button-wrap">
                                                <a class="btn btn-custom-size lg-size btn-dark rounded-0" href="blog-detail-left-sidebar.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pt-6">
                                    <div class="blog-item">
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.youtube.com/embed/fkoEj95puX0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                            </iframe>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta text-dim-gray pb-3">
                                                <ul>
                                                    <li class="date"><i class="fa fa-calendar-o me-2"></i>May 21, 2021</li>
                                                    <li>
                                                        <span class="comments me-3">
                                                        <a href="javascript:void(0)">2 Comments</a>
                                                    </span>
                                                        <span class="link-share">
                                                        <a href="javascript:void(0)">Share</a>
                                                    </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h5 class="title mb-4">
                                                <a href="blog-detail-left-sidebar.html">Blog Video Post</a>
                                            </h5>
                                            <p class="short-desc mb-5">Lorem ipsum dolor sit amet, consectet adipi elit, sed do eius tempor incididunt ut labore gthydolore magna aliqua.</p>
                                            <div class="button-wrap">
                                                <a class="btn btn-custom-size lg-size btn-dark rounded-0" href="blog-detail-left-sidebar.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pt-6">
                                    <div class="blog-item">
                                        <div class="blog-img img-zoom-effect">
                                            <a href="blog-detail-left-sidebar.html">
                                                <img class="img-full" src="{{asset('frontend/assets/images/blog/medium-size/1-2-370x315.jpg')}}" alt="Blog Image">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta text-dim-gray pb-3">
                                                <ul>
                                                    <li class="date"><i class="fa fa-calendar-o me-2"></i>May 21, 2021</li>
                                                    <li>
                                                        <span class="comments me-3">
                                                        <a href="javascript:void(0)">2 Comments</a>
                                                    </span>
                                                        <span class="link-share">
                                                        <a href="javascript:void(0)">Share</a>
                                                    </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h5 class="title mb-4">
                                                <a href="blog-detail-left-sidebar.html">Lorem ipsum dolor sit amet consecte</a>
                                            </h5>
                                            <p class="short-desc mb-5">Lorem ipsum dolor sit amet, consectet adipi elit, sed do eius tempor incididunt ut labore gthydolore magna aliqua.</p>
                                            <div class="button-wrap">
                                                <a class="btn btn-custom-size lg-size btn-dark rounded-0" href="blog-detail-left-sidebar.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pt-6">
                                    <div class="blog-item">
                                        <div class="blog-img img-zoom-effect">
                                            <a href="blog-detail-left-sidebar.html">
                                                <img class="img-full" src="{{asset('frontend/assets/images/blog/medium-size/1-3-370x315.jpg')}}" alt="Blog Image">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta text-dim-gray pb-3">
                                                <ul>
                                                    <li class="date"><i class="fa fa-calendar-o me-2"></i>May 21, 2021</li>
                                                    <li>
                                                        <span class="comments me-3">
                                                        <a href="javascript:void(0)">2 Comments</a>
                                                    </span>
                                                        <span class="link-share">
                                                        <a href="javascript:void(0)">Share</a>
                                                    </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h5 class="title mb-4">
                                                <a href="blog-detail-left-sidebar.html">Lorem ipsum dolor sit amet consecte</a>
                                            </h5>
                                            <p class="short-desc mb-5">Lorem ipsum dolor sit amet, consectet adipi elit, sed do eius tempor incididunt ut labore gthydolore magna aliqua.</p>
                                            <div class="button-wrap">
                                                <a class="btn btn-custom-size lg-size btn-dark rounded-0" href="blog-detail-left-sidebar.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="pagination-area pt-10">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-center">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span class="fa fa-chevron-left"></span>
                                                    </a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span class="fa fa-chevron-right"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Main Content Area End Here -->
@endsection