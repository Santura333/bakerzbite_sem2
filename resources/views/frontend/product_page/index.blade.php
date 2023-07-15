@extends('frontend.frontend_master')


{{-- section la 1 khoi de luu tru du lieu => khong hien thi => dung @yield() de hien thi section do --}}
@section('frontend_content')
<div class="body-content">
        <!-- Carousel Start -->
        <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative banner">
                    <img class="img-fluid banner" src="../img/caurosel-3.png" alt="">
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


        <!--Product -->
        <div class="container-xxl bg-light p-4 border border-5">
            <div ng-controller="MyController" class="container">
                <div class="">
                    <ul class="d-flex justify-content-between mb-4">
                        @foreach ( $categories as $category )
                         <li><a href="shop/{{ $category->name }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="row">
                    <div class="col-2">
                        <label class="form-label">Search</label>
                    </div>
                    <div class="col-md-4 col-10 mb-2">
                        <form action="shop">
                            <input name="search" type="text" class="form-control">
                        </form>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Sort</label>
                    </div>
                    <div class="col-md-4 col-10 mb-2">
                        <form action="">
                            <select name="sort_by" class="form-select" onchange="this.form.submit();">
                                <option {{ request('sort_by') == 'id' ? 'selected' : '' }} value="id">ID Up </option>
                                <option {{ request('sort_by') == '-id' ? 'selected' : '' }} value="-id">ID Down
                                </option>
                                <option {{ request('sort_by') == 'name' ? 'selected' : '' }} value="name">Name (A-Z)
                                </option>
                                <option {{ request('sort_by') == '-name' ? 'selected' : '' }} value="-name">Name (Z-A)
                                </option>
                                <option {{ request('sort_by') == 'price' ? 'selected' : '' }} value="price">Price Up
                                </option>
                                <option {{ request('sort_by') == '-price' ? 'selected' : '' }} value="-price">Price Down
                                </option>
                                <option {{ request('sort_by') == 'rating' ? 'selected' : '' }} value="rating">Rating (Low
                                    to High)</option>
                                <option {{ request('sort_by') == '-rating' ? 'selected' : '' }} value="-rating">Rating
                                    (High to Low)</option>
                            </select>
                        </form>
                    </div>
                </div>
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-lg-4 col-md-6 py-4 wow fadeInUp" data-wow-delay="0.1s">

                            <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                                <div class="text-center p-4">

                                    <div class="d-inline-block border border-primary rounded-pill px-3 mb-3">
                                        ${{ $product->price }}
                                    </div>

                                    <h3 class="mb-3">{{ $product->name }}</h3>

                                    <div class="container-xxl ">
                                        <div class="container ">
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star "></i>
                                        </div>
                                        <p>Rating: {{ $product->rating }}</p>
                                    </div>

                                </div>
                                <div class="position-relative mt-auto">
                                    <a href="shop/product/{{ $product->id }}">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/img/items/{{ $product->productImages[0]->path }}"
                                            alt="">

                                    </a>
                                    <div class="product-overlay">
                                        <a class="btn btn-lg-square btn-outline-light rounded-circle"
                                            href="/shop/product/{{ $product->id }}">
                                            <i class="fa fa-eye text-primary"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{ $products->links('pagination::tailwind') }}
                </div>
                <!--Row END-->
            </div>
            <!--ng END-->
        </div>
        <!--Product End-->


        <!-- Product Start -->
        <div class="container-xxl bg-light my-6 py-6 pt-0">
            <div class="container">
                <div class="text-center mx-auto mb-5  wow fadeInUp " data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-6 mb-4">Explore The Categories Of Our Bakery Products</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                            <div class="text-center p-4">
                                <div class="d-inline-block border border-primary rounded-pill px-3 mb-3">$11 - $99</div>
                                <h3 class="mb-3">Cake</h3>
                                <span>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</span>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="../img/product-1.jpg" alt="">
                                <div class="product-overlay">
                                    <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i
                                            class="fa fa-eye text-primary"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                            <div class="text-center p-4">
                                <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">$11 - $99
                                </div>
                                <h3 class="mb-3">Bread</h3>
                                <span>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</span>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="../img/product-2.jpg" alt="">
                                <div class="product-overlay">
                                    <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i
                                            class="fa fa-eye text-primary"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                            <div class="text-center p-4">
                                <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">$11 - $99
                                </div>
                                <h4 class="mb-3">Cookies</h4>
                                <span>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</span>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="../img/product-3.jpg" alt="">
                                <div class="product-overlay">
                                    <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i
                                            class="fa fa-eye text-primary"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product End -->



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

</div>
@endsection
