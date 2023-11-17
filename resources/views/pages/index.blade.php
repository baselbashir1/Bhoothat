<x-base-layout>

    <x-slot:pageTitle>Bhoothat</x-slot>

    <!--  BEGIN CUSTOM STYLE FILE  -->
    @vite(['public/src/plugins/src/leaflet/leaflet.css'])
    @vite(['public/src/assets/css/light/pages/contact_us.css'])
    @vite(['public/src/assets/css/dark/pages/contact_us.css'])
    <!--  END CUSTOM STYLE FILE  -->

    <style>
        @media screen and (max-width: 990px) {
            .font-bg {
                font-size: 26px;
            }
        }

        @media screen and (max-width: 600px) {
            .font-bg {
                font-size: 18px;
            }

            .font-bg-btn {
                font-size: 15px;
            }
        }

        @media screen and (max-width: 300px) {
            .font-bg {
                font-size: 16px;
            }

            .font-bg-btn {
                font-size: 13px;
            }
        }
    </style>

    <div class="row"> {{-- <div class="row layout-top-spacing"> --}}
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
            <div> {{-- <div class="single-post-content"> --}}
                <div class="featured-image">
                    <div class="featured-image-overlay"></div>
                    <div class="post-header">
                        <div class="post-title">
                            {{-- <h1 class="mb-0">All educational services are available in our website...</h1> --}}
                            <h1 class="mb-0 font-bg">Our website offers comprehensive educational services, granting easy
                                access to a wealth of resources and learning opportunities. Request the research paper
                                now to explore these valuable resources.</h1>
                        </div>
                        <div class="post-meta-info d-flex justify-content-between">
                            {{-- <div class="media">
                                <img src="../src/assets/img/profile-12.jpeg" alt="profile">
                                <div class="media-body">
                                    <h5>Kelly Young</h5>
                                    <p>15 May 2022</p>
                                </div>
                            </div> --}}
                            <button class="btn btn-warning m-auto w-auto" style="font-size: 18px; border-radius: 20px"
                                data-bs-toggle="modal" data-bs-target="#loginModal">
                                <span class="font-bg-btn">Request from here</span>
                            </button>

                            <!-- Login Modal -->
                            {{-- <div class="modal fade" id="loginModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
                                        </div>
                                        <form action="" method="">
                                            @csrf
                                            <div class="modal-body">
                                                <label for="email">Email</label>
                                                <input type="text" name="email" class="form-control">

                                                <label for="password">Password</label>
                                                <input type="text" name="password" class="form-control">

                                            </div>
                                            <div class="modal-footer">
                                                <a class="btn btn btn-light-dark" data-bs-dismiss="#loginModal"
                                                    data-bs-toggle="modal" data-bs-target="#registerModal"><i
                                                        class="flaticon-cancel-12"></i> Sign Up</a>
                                                <button type="button" class="btn btn-primary">Log In</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="modal fade inputForm-modal" id="loginModal" tabindex="-1" role="dialog"
                                aria-labelledby="inputFormModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">

                                        <div class="modal-header" id="inputFormModalLabel">
                                            <h5 class="modal-title">Login to <b>Bhoothat</b></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-hidden="true"><svg aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-x">
                                                    <line x1="18" y1="6" x2="6" y2="18">
                                                    </line>
                                                    <line x1="6" y1="6" x2="18" y2="18">
                                                    </line>
                                                </svg></button>
                                        </div>
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-mail" width="24"
                                                                height="24" viewBox="0 0 24 24" stroke-width="2"
                                                                stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                </path>
                                                                <rect x="3" y="5" width="18" height="14"
                                                                    rx="2"></rect>
                                                                <polyline points="3 7 12 13 21 7"></polyline>
                                                            </svg>
                                                        </span>
                                                        {{-- <input type="text" class="form-control" placeholder="Email"
                                                            aria-label="email"> --}}
                                                        <x-text-input id="email" class="form-control" type="email"
                                                            name="email" :value="old('email')" autocomplete="email"
                                                            placeholder="Enter your email address" required autofocus />
                                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-lock" width="24"
                                                                height="24" viewBox="0 0 24 24" stroke-width="2"
                                                                stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                </path>
                                                                <rect x="5" y="11" width="14" height="10"
                                                                    rx="2"></rect>
                                                                <circle cx="12" cy="16" r="1"></circle>
                                                                <path d="M8 11v-4a4 4 0 0 1 8 0v4"></path>
                                                            </svg>
                                                        </span>
                                                        {{-- <input type="password" class="form-control"
                                                            placeholder="Password" aria-label="password"> --}}
                                                        <x-text-input id="password" class="form-control"
                                                            type="password" name="password"
                                                            placeholder="Enter your password" autocomplete="password"
                                                            required autofocus />

                                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="form-check form-check-primary form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="remember_me" name="remember">
                                                        {{-- <input id="remember_me" type="checkbox"
                                                            class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                                            name="remember"> --}}
                                                        <label class="form-check-label mb-0" for="form-check-primary">
                                                            Remember me
                                                        </label>
                                                    </div>

                                                    <a href="javascript:void(0);">Forget Password?</a>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="btn btn-light-success mt-2 mb-2 btn-no-effect"
                                                    data-bs-dismiss="#loginModal" data-bs-toggle="modal"
                                                    data-bs-target="#registerModal">Sign up</div>
                                                <button type="submit"
                                                    class="btn btn-primary mt-2 mb-2 btn-no-effect">Log in</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Register Modal -->
                            {{-- <div class="modal fade" id="registerModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                                        </div>
                                        <form action="" method="">
                                            @csrf
                                            <div class="modal-body">
                                                <label for="name">Name</label>
                                                <input type="text" name="name" class="form-control">

                                                <label for="phone">Phone</label>
                                                <input type="text" name="phone" class="form-control">

                                                <label for="email">Email</label>
                                                <input type="text" name="email" class="form-control">

                                                <label for="password">Password</label>
                                                <input type="text" name="password" class="form-control">
                                            </div>
                                            <div class="modal-footer">
                                                <a class="btn btn btn-light-dark" data-bs-dismiss="#registerModal"
                                                    data-bs-toggle="modal" data-bs-target="#loginModal"><i
                                                        class="flaticon-cancel-12"></i>
                                                    Sign
                                                    In</a>
                                                <button type="button" class="btn btn-primary">Register</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="modal fade inputForm-modal" id="registerModal" tabindex="-1" role="dialog"
                                aria-labelledby="inputFormModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">

                                        <div class="modal-header" id="inputFormModalLabel">
                                            <h5 class="modal-title">Register to <b>Bhoothat</b></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-hidden="true"><svg aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-x">
                                                    <line x1="18" y1="6" x2="6"
                                                        y2="18">
                                                    </line>
                                                    <line x1="6" y1="6" x2="18"
                                                        y2="18">
                                                    </line>
                                                </svg></button>
                                        </div>
                                        <form class="mt-0" method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="modal-body">
                                                {{-- <form class="mt-0" method="POST" action="{{ route('register') }}">
                                                @csrf --}}
                                                <div class="form-group">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-user"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                </path>
                                                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        {{-- <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                                                            placeholder="Name" aria-label="name" required> --}}
                                                        <x-text-input id="name" class="form-control"
                                                            type="text" name="name" :value="old('name')"
                                                            autocomplete="name" placeholder="Enter your name" required
                                                            autofocus />
                                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                                    </div>
                                                </div>
                                                {{-- <div class="form-group">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-mail"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                </path>
                                                                <rect x="3" y="5" width="18" height="14"
                                                                    rx="2"></rect>
                                                                <polyline points="3 7 12 13 21 7"></polyline>
                                                            </svg>
                                                        </span>
                                                        <x-text-input id="phone" class="form-control"
                                                            type="number" name="phone" :value="old('phone')" required
                                                            autofocus autocomplete="phone" placeholder="phone" />
                                                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                                    </div>
                                                </div> --}}
                                                <div class="form-group">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-mail"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                </path>
                                                                <rect x="3" y="5" width="18" height="14"
                                                                    rx="2"></rect>
                                                                <polyline points="3 7 12 13 21 7"></polyline>
                                                            </svg>
                                                        </span>
                                                        {{-- <input type="text" class="form-control"
                                                            placeholder="Email" aria-label="email"> --}}
                                                        <x-text-input id="email" class="form-control"
                                                            type="email" name="email" :value="old('email')"
                                                            autocomplete="email"
                                                            placeholder="Enter your email address" required
                                                            autofocus />
                                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-lock"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                </path>
                                                                <rect x="5" y="11" width="14" height="10"
                                                                    rx="2"></rect>
                                                                <circle cx="12" cy="16" r="1"></circle>
                                                                <path d="M8 11v-4a4 4 0 0 1 8 0v4"></path>
                                                            </svg>
                                                        </span>
                                                        {{-- <input type="password" class="form-control"
                                                            placeholder="Password" aria-label="password"> --}}
                                                        <x-text-input id="password" class="form-control"
                                                            type="password" name="password"
                                                            placeholder="Enter your password"
                                                            autocomplete="new-password" required autofocus />

                                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-lock"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                </path>
                                                                <rect x="5" y="11" width="14" height="10"
                                                                    rx="2"></rect>
                                                                <circle cx="12" cy="16" r="1"></circle>
                                                                <path d="M8 11v-4a4 4 0 0 1 8 0v4"></path>
                                                            </svg>
                                                        </span>
                                                        {{-- <input type="password" class="form-control"
                                                            placeholder="Confirm Password"
                                                            aria-label="confirm-password"> --}}
                                                        <x-text-input id="password_confirmation" class="form-control"
                                                            type="password" name="password_confirmation"
                                                            autocomplete="new-password"
                                                            placeholder="Confirm your password" required autofocus />

                                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="form-check form-check-primary form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="form-check-primary">
                                                        <label class="form-check-label mb-0" for="form-check-primary">
                                                            I agree the <a href="javascript:void(0);"
                                                                class="text-primary">Terms
                                                                and
                                                                Conditions</a>
                                                        </label>
                                                    </div>

                                                    {{-- <a href="javascript:void(0);">Forget Password?</a> --}}
                                                </div>
                                                {{-- <x-primary-button class="ml-4">
                                                    {{ __('Register') }}
                                                </x-primary-button> --}}

                                                {{-- </form> --}}

                                            </div>
                                            <div class="modal-footer">
                                                <div class="btn btn-light-success mt-2 mb-2 btn-no-effect"
                                                    data-bs-dismiss="#registerModal" data-bs-toggle="modal"
                                                    data-bs-target="#loginModal">Sign In</div>
                                                <button type="submit"
                                                    class="btn btn-primary mt-2 mb-2 btn-no-effect">Register</button>
                                                {{-- <x-primary-button class="ml-4">
                                                    {{ __('Register') }}
                                                </x-primary-button> --}}
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            {{-- <button type="button" class="btn btn-dark mb-2 me-4" data-bs-toggle="modal"
                                data-bs-target="#inputFormModal">
                                Form
                            </button> --}}

                            <!-- Modal -->
                            {{-- <div class="modal fade inputForm-modal" id="inputFormModal" tabindex="-1"
                                role="dialog" aria-labelledby="inputFormModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">

                                        <div class="modal-header" id="inputFormModalLabel">
                                            <h5 class="modal-title">Welcome to <b>Cork Admin</b></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-hidden="true"><svg aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-x">
                                                    <line x1="18" y1="6" x2="6"
                                                        y2="18"></line>
                                                    <line x1="6" y1="6" x2="18"
                                                        y2="18"></line>
                                                </svg></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="mt-0">
                                                <div class="form-group">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-mail"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                </path>
                                                                <rect x="3" y="5" width="18" height="14"
                                                                    rx="2"></rect>
                                                                <polyline points="3 7 12 13 21 7"></polyline>
                                                            </svg>
                                                        </span>
                                                        <input type="text" class="form-control"
                                                            placeholder="Email" aria-label="email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-lock"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                </path>
                                                                <rect x="5" y="11" width="14" height="10"
                                                                    rx="2"></rect>
                                                                <circle cx="12" cy="16" r="1"></circle>
                                                                <path d="M8 11v-4a4 4 0 0 1 8 0v4"></path>
                                                            </svg>
                                                        </span>
                                                        <input type="password" class="form-control"
                                                            placeholder="Password" aria-label="password">
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="form-check form-check-primary form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="form-check-primary">
                                                        <label class="form-check-label mb-0" for="form-check-primary">
                                                            Remember me
                                                        </label>
                                                    </div>

                                                    <a href="javascript:void(0);">Forget Password?</a>
                                                </div>

                                            </form>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit"
                                                class="btn btn-light-danger mt-2 mb-2 btn-no-effect"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect"
                                                data-bs-dismiss="modal">Sign in</button>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            {{-- <div class="align-self-center">
                                <button class="btn btn-success btn-icon btn-share btn-rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2">
                                        <circle cx="18" cy="5" r="3"></circle>
                                        <circle cx="6" cy="12" r="3"></circle>
                                        <circle cx="18" cy="19" r="3"></circle>
                                        <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                        <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                    </svg>
                                </button>
                            </div> --}}
                        </div>
                    </div>
                </div>
                {{-- <div class="post-content">
                    <p class="mb-5">Aenean non tempor justo. Donec faucibus sapien a urna interdum porta. Quisque
                        fermentum nisi felis, quis aliquam quam volutpat porta. Nullam aliquet scelerisque massa, quis
                        tincidunt velit. Vivamus semper placerat ornare. Maecenas eget accumsan eros. Donec non felis
                        vitae tortor elementum euismod sit amet vitae risus. Nam nunc turpis, porttitor ut tempor eu,
                        efficitur nec risus.</p>
                    <h4>Cinyras ea tulit in inducit qui mater</h4>
                    <p class="mb-5">Lorem markdownum facit? Hinc tutus serisque, mihi iaculum curam, vicibus aliquando
                        se posses gentis quidem. Meta tenebat diversa dixerat celeberrimus molle require; prendique
                        urnam Pyreneus? Haut mei sive digna noctisque percussit dicta, in pars certaminis iuvenalis.
                        Praemonuisse esse inter in huic, Cinyras pallentem vi sistere cubat ne causa.</p>
                    <h4>Utque tu canibus</h4>
                    <p class="mb-5">Possent quippe. Conata fera ab Hersilie iam auditur haesit. Culpa ignis retia
                        Aonides ictus crescendo micantes, petere, ambustaque vicem in digitos iubet cornigeris.</p>
                    <ul class="mb-5">
                        <li class="mb-1">Consectetur adipiscing elit</li>
                        <li class="mb-1">Integer massa</li>
                        <li class="mb-1">Facilisis nisl aliquet</li>
                    </ul>
                    <h4>Fregit aut Caystro equos</h4>
                    <p>Manet pro aere superest adiacet sua purpura Tereus in multis conantem culpa, inque fingit et
                        referebat? Materiaque mentes et, quo omnia captiva ore mandat cepit triformis filia. Prius sorte
                        nomina in repellite sentit facunde te aures, vires.</p>
                    <hr class="my-5">
                </div> --}}
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <h4 class="text-center mt-4 mb-4"><b>Samples</b></h4>
            @for ($i = 1; $i <= 4; $i++)
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a href="./app-blog-post.html" class="card style-2 mb-md-0 mb-4">
                        <img src="{{ Vite::asset('public/src/assets/img/pdf-to-word.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body px-0 pb-0 text-center">
                            <h5 class="card-title mb-3 font-bg">Convert PDF files to Word.</h5>
                            {{-- <div class="media mt-4 mb-0 pt-1">
                        <img src="../src/assets/img/profile-5.jpeg" class="card-media-image me-3" alt="">
                        <div class="media-body">
                            <h4 class="media-heading mb-1">Shaun Park</h4>
                            <p class="media-text">01 May</p>
                        </div>
                    </div> --}}
                            <button class="btn btn-secondary font-bg-btn">Read</button>
                        </div>
                    </a>
                </div>
            @endfor
        </div>
    </div>

    {{-- <div class="container text-center p-5">
        <div class="statbox widget box box-shadow layout-top-spacing">
            <div class="widget-content widget-content-area">
                <div class="contact-us-form">
                    <div class="row gx-5">
                        <div class="container">
                            <form class="row g-4">
                                <div class="col-md-12">
                                    <h4><b>Contact Us</b></h4>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputName" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="inputName">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="inputEmail">
                                </div>
                                <div class="col-12">
                                    <label for="inputSubject" class="form-label">Subject</label>
                                    <input type="text" class="form-control" id="inputSubject">
                                </div>
                                <div class="col-12">
                                    <label for="inputMessage" class="form-label">Message</label>
                                    <textarea id="inputMessage" class="form-control" cols="30" rows="10"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Send Feedback</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    @vite(['public/src/plugins/src/leaflet/us-states.js'])
    @vite(['public/src/plugins/src/leaflet/eu-countries.js'])
    @vite(['public/src/plugins/src/leaflet/leaflet.js'])
    <!-- END PAGE LEVEL SCRIPTS -->

</x-base-layout>
