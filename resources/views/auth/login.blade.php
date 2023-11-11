{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<x-guest-layout>

    <x-slot:pageTitle>SignIn | Bhoothat</x-slot>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="row">
        {{-- <div class="col-6 d-lg-flex d-none h-100 my-auto top-0 start-0 text-center justify-content-center flex-column">
            <div class="auth-cover-bg-image"></div>
            <div class="auth-overlay"></div>
            <div class="auth-cover">
                <div class="position-relative">
                    <img src="{{ Vite::asset('public/src/assets/img/nnn.png') }}" alt="auth-img">
                    <h2 class="mt-5 text-white font-weight-bolder px-2">Join the community of expert doctors
                    </h2>
                    <p class="text-white px-2">It is easy to setup with great customer experience. Start your
                        7-day free trial</p>
                </div>
            </div>
        </div> --}}
        <div
            class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
            <div class="card mt-3 mb-3" style="box-shadow: 0 2px 10px 10px rgba(0, 0, 0, 0.1);">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <h2>Sign In</h2>
                            <p>Enter your email and password to login</p>
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                                        class="form-control">
                                </div>
                            </div>
                            {{-- <x-text-input id="email" class="form-control" type="email" name="email"
                                :value="old('email')" required autofocus autocomplete="email" /> --}}
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                            <div class="col-12">
                                <div class="mb-4">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" id="password" value="{{ old('password') }}"
                                        class="form-control">
                                </div>
                            </div>
                            {{-- <x-text-input id="password" class="form-control" type="password" name="password"
                                required autocomplete="password" /> --}}

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />

                            <div class="col-12">
                                <div class="mb-3">
                                    <div class="form-check form-check-primary form-check-inline">
                                        <input class="form-check-input me-3" type="checkbox" id="form-check-default">
                                        <label class="form-check-label" for="form-check-default">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-4">
                                    <button class="btn btn-secondary w-100">SIGN IN</button>
                                </div>
                            </div>
                        </form>

                        {{-- <div class="col-12 mb-4">
                            <div class="">
                                <div class="seperator">
                                    <hr>
                                    <div class="seperator-text"> <span>Or continue with</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="mb-4">
                                <button class="btn  btn-social-login w-100 ">
                                    <img src="../src/assets/img/google-gmail.svg" alt=""
                                        class="img-fluid">
                                    <span class="btn-text-inner">Google</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="mb-4">
                                <button class="btn  btn-social-login w-100">
                                    <img src="../src/assets/img/github-icon.svg" alt=""
                                        class="img-fluid">
                                    <span class="btn-text-inner">Github</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="mb-4">
                                <button class="btn  btn-social-login w-100">
                                    <img src="../src/assets/img/twitter.svg" alt="" class="img-fluid">
                                    <span class="btn-text-inner">Twitter</span>
                                </button>
                            </div>
                        </div> --}}

                        <div class="col-12">
                            <div class="text-center">
                                <p class="mb-0">Dont't have an account ? <a href="/register"
                                        class="text-warning">Sign Up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
