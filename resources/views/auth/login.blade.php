<link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/login.css">
<div class="header">
    <div class="header-main">
        <img src="{{ asset('frontend/img/Bakerz_logo6_edit-removebg-preview.png') }}" alt="">

        <h1> Login </h1>
        <div class="header-bottom">
            <div class="header-right w3agile">

                <div class="header-left-bottom agileinfo">
                    @csrf

                    <form method="POST" action="{{ route('login') }}">
                        <input type="text" :value="old('email')" name="name" id="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                        <input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" />


                        <div class="remember">
                            <span class="checkbox1">
                                <label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Remember
                                    me</label>
                            </span>
                            <div class="forgot">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    href="{{ route('register') }}" style="padding-right: 10px;">
                                    {{ __('Register') }}
                                </a>
                                <h6><a href="#">Forgot Password?</a></h6>
                            </div>
                            <div class="clear"> </div>
                        </div>

                        <button type="submit" class="login-button-thien">Login</button>
                    </form>
                    <div class="header-left-top">

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<script src="{{ asset('frontend') }}/assets/js/jquery,log.js"></script>