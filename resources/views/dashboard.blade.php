{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout> --}}

{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout> --}}


@extends('frontend.frontend_master')


{{-- section la 1 khoi de luu tru du lieu => khong hien thi => dung @yield() de hien thi section do --}}
@section('frontend_content')
<?php

?>

<div class="body-content">
    <div class="container">
        <div class="row front-dashboard-wrap">
            @include('frontend.profile.user-sidebar')
            <div class="col-md-9">

                @yield('userdashboard_content')
            </div>

        </div>
    </div>
</div>

<script>
    // START product remove from my cart
    // function showToast(type, message) {
    //     const toast = document.createElement("div");
    //     toast.classList.add("toast");
    //     toast.classList.add(`toast-${type}`);
    //     toast.innerText = message;

    //     // Thêm toast vào body của trang
    //     document.body.appendChild(toast);

    //     // Hiển thị toast trong 3 giây
    //     setTimeout(() => {
    //     toast.remove();
    //     }, 3000);
    // }
    //     // END product remove from my cart
    // showToast();
</script>

@endsection