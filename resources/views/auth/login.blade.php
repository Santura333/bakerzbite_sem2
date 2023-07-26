<link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/login.css">
<div class="header">
    <div class="header-main">
        <img src="{{ asset('frontend/img/Bakerz_logo6_edit-removebg-preview.png') }}" alt="">

        <h1> Login </h1>
        <div class="header-bottom">
            <div class="header-right w3agile">

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div style="display: flex; flex-direction: column;">
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                            required autofocus autocomplete="username" class="input-thien" />
                    </div>

                    <div style="display: flex; flex-direction: column;">
                        <x-label for="password" value="{{ __('Password') }}" />
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" class="input-thien" />
                    </div>

                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>


                    <div class="flex items-center justify-end mt-4">

                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('register') }}" style="padding-right: 10px;">
                            {{ __('Register') }}
                        </a>

                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif

                        <x-button class="ml-4 login-button-thien">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<script src="{{ asset('frontend') }}/assets/js/jquery,log.js"></script>