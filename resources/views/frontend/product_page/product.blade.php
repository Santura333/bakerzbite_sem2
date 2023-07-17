@extends('frontend.frontend_master')


{{-- section la 1 khoi de luu tru du lieu => khong hien thi => dung @yield() de hien thi section do --}}
@section('frontend_content')
    <section class="">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="../index.html" class="navbar-brand ms-4 ms-lg-0">
            <img src="../img/Bakerz_logo6_edit-removebg-preview.png" alt="" class="logo">

        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class=" mx-auto p-4 px-lg-5  w-100  ">

                <div class="wrapper mx-auto">
                    <div class="display">
                        <p class="p-0 m-0 text-white">END IN</p>
                        <div id="time" class="mt-0 pt-0"></div>
                    </div>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <div class=" d-none d-lg-flex">
            <div class="flex-shrink-0 btn-lg-square border border-light rounded-circle">
                <a href="tel:+123456789">
                    <i class="fa fa-phone text-primary"></i>
                </a>
            </div>
            <div class="ps-3">
                <small class="text-primary mb-0">Call Us</small>
                <p class="text-light fs-5 mb-0">+012 345 6789</p>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative banner">
                <img class="img-fluid banner" src="../img/carousel-1.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-8">
                                <p class="text-primary text-uppercase fw-bold mb-2">// The Best Bakery</p>
                                <h1 class="display-1 text-light mb-4 animated slideInDown">Where smiles are served
                                    daily.</h1>
                                <p class="text-light fs-5 mb-4 pb-3">Vero elitr justo clita lorem. Ipsum dolor sed stet
                                    sit diam rebum ipsum.</p>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative banner">
                <img class="img-fluid" src="../img/carousel-2.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-8">
                                <p class="text-primary text-uppercase fw-bold mb-2">// The Best Bakery</p>
                                <h1 class="display-1 text-light mb-4 animated slideInDown">We Bake With Passion</h1>
                                <p class="text-light fs-5 mb-4 pb-3">Vero elitr justo clita lorem. Ipsum dolor sed stet
                                    sit diam rebum ipsum.</p>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <div ng-controller="MyController" class="container-xxl bg-white py-5">
        <div class="card-wrapper">
            <div class="card">
                <!-- card left -->
                <div class="product-imgs">
                    <div class="img-display">
                        <div class="img-showcase">
                            <img src="{{ asset('frontend') }}/img/items/{{ $product->productImages[0]->path }}" alt="cake image">
                        </div>
                    </div>
                    <div class="img-select">
                        <div class="img-item">

                            @foreach ($product->productImages as $productImage)
                                <div class="" data-imgbigurl="{{ asset('frontend') }}/img/items/{{ $productImage->path }}">
                                    <img src="{{ asset('frontend') }}/img/items/{{ $productImage->path }}" alt="">
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <!-- card right -->
                <div class="product-content">
                    <h2 class="product-title">{{ $product->name }}</h2>
                    <div class="product-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>4.7({{ $product->rating }})</span>
                    </div>

                    <div class="product-price">
                        {{-- <p class="last-price">Old Price: <span><!--${{item.price*1.2}}--></span> --}}
                        <p class="new-price">New Price: <span>${{ $product->price }} (Save 20%)</span></p>
                    </div>

                    <div class="product-detail">
                        <h2>About this item: </h2>
                        <p>{{ $product->description }}</p>

                    </div>

                    <div class="purchase-info">
                        <button type="button" class="btn">
                            <i class="fas fa-phone"> </i> <span> Call Us Now </span>
                        </button>
                    </div>

                    <div class="social-links">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>

                    <!--Rating start-->
                    <div class="rating container-xxl">
                        <div class="post">
                            <div class="text">Thanks for rating us!</div>
                            <div class="edit">EDIT</div>
                        </div>
                        <div class="star-widget">
                            <input type="radio" name="rate" id="rate-5">
                            <label for="rate-5" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate-4">
                            <label for="rate-4" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate-3">
                            <label for="rate-3" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate-2">
                            <label for="rate-2" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate-1">
                            <label for="rate-1" class="fas fa-star"></label>
                            <form action="#">
                                <header></header>
                                <div class="textarea bg-light ">
                                    <textarea cols="30" placeholder="Your feedback"></textarea>
                                </div>
                                <div class="btn rounded-pill btn-primary">
                                    <a href="../pages/success.html">
                                        <input type="submit"><span class="fs-5 text-white">SEND</span></input>
                                    </a>

                                </div>
                            </form>
                        </div>
                    </div>
                    <!--End Rating-->
                </div>
                <!--END card right-->
            </div>
        </div>

    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Office Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>06 Le Loi, Hue, VIET NAM</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>NTDgroup@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="./about.html">About Us</a>
                    <a class="btn btn-link" href="./contact.html">Contact Us</a>
                    <a class="btn btn-link" href="./products.html">Products</a>
                    <a class="btn btn-link" href="./map.html">Site Map</a>
                </div>
                <div class="col-lg-3 col-md-6">

                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="./gallery.html">
                        <h4 class="text-light mb-4">Photo Gallery</h4>
                    </a>

                    <div class="row g-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="../img/product-1.jpg" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="../img/product-2.jpg" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="../img/product-3.jpg" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="../img/product-2.jpg" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="../img/product-3.jpg" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="../img/product-1.jpg" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">BakeyzBite.Co</a>, All Right Reserved.
                </div>

            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>
@endsection
