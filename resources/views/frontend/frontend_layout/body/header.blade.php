<!-- Topbar Start -->
<div class="container-fluid top-bar bg-dark text-light px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-lg-6 px-5 text-start">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="small text-light" href="/">Home</a></li>
                    {{-- Tại sao đây lại li sai --}}
                    {{-- <li class="breadcrumb-item"><a class="small text-light" href="frontend/layouts"></a></li> --}}
                    <li class="breadcrumb-item"><a class="small text-light" href="./pages/products.html">Products</a>
                    </li>
                    <li class="breadcrumb-item"><a class="small text-light" href="./pages/about.html">About</a></li>
                    <li class="breadcrumb-item"><a class="small text-light" href="./pages/contact.html">Contact</a></li>
                </ol>
        </div>
        <div class="col-lg-6 px-5 text-end">
            <small>Follow us:</small>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn-lg-square text-primary border-end rounded-0" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn-lg-square text-primary border-end rounded-0" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn-lg-square text-primary border-end rounded-0" href=""><i
                        class="fab fa-linkedin-in"></i></a>
                <a class="btn-lg-square text-primary pe-0" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="./index.html" class="navbar-brand ms-4 ms-lg-0">
        <img src="{{ asset('frontend/img/Bakerz_logo6_edit-removebg-preview.png') }}" alt="" class="logo">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto p-4 p-lg-0">
            <div class="{{ (request()->segment(1) == 'home') ? 'active' : ''}}"><a href="./index"
                    class="nav-item nav-link ">Home</a></div>
            <div class="{{ (request()->segment(1) == 'shop') ? 'active' : ''}}"><a href="./shop"
                    class="nav-item nav-link">Products</a></div>
            <div class="{{ (request()->segment(1) == 'about') ? 'active' : ''}}"><a href="/about"
                    class="nav-item nav-link">About</a></div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <div class="{{ (request()->segment(1) == 'about') ? 'active' : 'map'}}"><a href="./pages/map"
                            class="dropdown-item">Site Map</a></div>
                    <div class="{{ (request()->segment(1) == 'about') ? 'active' : 'gallery'}}"><a
                            href="./pages/gallery" class="dropdown-item">Gallery</a></div>
                </div>
            </div>
            <div class="{{ (request()->segment(1) == 'contact') ? 'active' : ''}}"><a href="/contact"
                    class="nav-item nav-link">Contact</a></div>
        </div>
        <div class=" d-none d-lg-flex">
            <div class="flex-shrink-0 btn-lg-square border border-light rounded-circle">
                <img class="img-profile rounded-circle"
                    src="{{ isset($user) && !empty($user->profile_photo_path) ? url('storage/profile-photos/' . $user->profile_photo_path) : url('upload/admin_images/blank_profile_photo.jpg') }}"
                    alt="">
            </div>
            <div class="ps-3">
                {{-- <p class="text-light fs-5 mb-0">{{ isset($user) ? $user->name : '' }}</p> --}}
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ isset($user) ? $user->name
                        : '' }}</a>
                    <div class="dropdown-menu m-0">
                        <div class=""><a href="{{route('user.profile')}}" class="dropdown-item">Profile</a></div>
                        <div class=""><a href="{{route('myCartView')}}" class="dropdown-item">My Cart</a></div>
                        <div class=""><a href="{{route('user.logout')}}" class="dropdown-item">Log Out</a></div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Nav Item - User Information -->





    </div>
</nav>
<!-- Navbar End -->