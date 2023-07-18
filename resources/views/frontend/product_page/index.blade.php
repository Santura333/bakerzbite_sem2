@extends('frontend.frontend_master')


{{-- section la 1 khoi de luu tru du lieu => khong hien thi => dung @yield() de hien thi section do --}}
@section('frontend_content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative banner">
                <img class="img-fluid banner" src="{{ asset('frontend') }}/img/caurosel-1.png" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-8">
                                <p class="text-primary text-uppercase fw-bold mb-2">// The Best Bakery</p>
                                <h1 class="display-1 text-light mb-4 animated slideInDown">Where smiles are served
                                    daily.</h1>
                                <p class="text-light fs-5 mb-4 pb-3">Vero elitr justo clita lorem. Ipsum dolor sed stet
                                    sit diam rebum ipsum.</p>
                                <a href="/" class="btn btn-primary rounded-pill py-3 px-5">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative banner">
                <img class="img-fluid" src="{{ asset('frontend') }}/img/carousel-2.jpg" alt="">
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
        <div class="container">
            <div class="">
                <ul class="d-flex justify-content-between mb-4">
                    @foreach ($categories as $category)
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
                            <option {{ request('sort_by') == 'idup' ? 'selected' : '' }} value="idup">ID Up </option>
                            <option {{ request('sort_by') == 'iddown' ? 'selected' : '' }} value="iddown">ID Down
                            </option>
                            <option {{ request('sort_by') == 'nameup' ? 'selected' : '' }} value="nameup">Name (A-Z)
                            </option>
                            <option {{ request('sort_by') == 'namedown' ? 'selected' : '' }} value="namedown">Name (Z-A)
                            </option>
                            <option {{ request('sort_by') == 'priceup' ? 'selected' : '' }} value="priceup">Price Up
                            </option>
                            <option {{ request('sort_by') == 'pricedown' ? 'selected' : '' }} value="pricedown">Price Down
                            </option>
                            <option {{ request('sort_by') == 'ratingup' ? 'selected' : '' }} value="ratingup">Rating (Low
                                to High)</option>
                            <option {{ request('sort_by') == 'ratingdown' ? 'selected' : '' }} value="ratingdown">Rating
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
                                    <img class="img-fluid"
                                        src="{{ asset('frontend') }}/img/items/{{ $product->productImages[0]->path }}"
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
                {{ $products->links('pagination::bootstrap-5') }}
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
                            <img class="img-fluid" src="{{ asset('frontend') }}/img/product-1.jpg" alt="">
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
                            <img class="img-fluid" src="{{ asset('frontend') }}/img/product-2.jpg" alt="">
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
                            <img class="img-fluid" src="{{ asset('frontend') }}/img/product-3.jpg" alt="">
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
    </div>
@endsection
