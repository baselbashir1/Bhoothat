<x-base-layout>

    <x-slot:pageTitle>Bhoothat</x-slot>

    <!--  BEGIN CUSTOM STYLE FILE  -->
    @vite(['public/src/plugins/src/leaflet/leaflet.css'])
    @vite(['public/src/assets/css/light/pages/contact_us.css'])
    @vite(['public/src/assets/css/dark/pages/contact_us.css'])
    <!--  END CUSTOM STYLE FILE  -->

    <div class="row"> {{-- <div class="row layout-top-spacing"> --}}
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
            <div> {{-- <div class="single-post-content"> --}}
                <div class="featured-image">
                    <div class="featured-image-overlay"></div>
                    <div class="post-header">
                        <div class="post-title">
                            {{-- <h1 class="mb-0">All educational services are available in our website...</h1> --}}
                            <h1 class="mb-0">Our website offers comprehensive educational services, granting easy
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
                            <button class="btn btn-warning m-auto w-auto" style="font-size: 18px" data-bs-toggle="modal"
                                data-bs-target="#loginModal">
                                <span>Request from here</span>
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
            <h4 class="text-center m-4"><b>Samples</b></h4>
            @for ($i = 1; $i <= 4; $i++)
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a href="./app-blog-post.html" class="card style-2 mb-md-0 mb-4">
                        <img src="{{ Vite::asset('public/src/assets/img/pdf-to-word.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body px-0 pb-0">
                            <h5 class="card-title mb-3">Convert PDF files to Word.</h5>
                            {{-- <div class="media mt-4 mb-0 pt-1">
                        <img src="../src/assets/img/profile-5.jpeg" class="card-media-image me-3" alt="">
                        <div class="media-body">
                            <h4 class="media-heading mb-1">Shaun Park</h4>
                            <p class="media-text">01 May</p>
                        </div>
                    </div> --}}
                        </div>
                    </a>
                </div>
            @endfor
        </div>
    </div>



    <div class="container">
        <div class="row">
            <h4 class="text-center m-4"><b>Our Services</b></h4>
            @for ($i = 1; $i <= 4; $i++)
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a href="./app-blog-post.html" class="card style-2 mb-md-0 mb-4">
                        <img src="{{ Vite::asset('public/src/assets/img/pdf-to-word.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body px-0 pb-0">
                            <h5 class="card-title mb-3">Convert PDF files to Word.</h5>
                            {{-- <div class="media mt-4 mb-0 pt-1">
                        <img src="../src/assets/img/profile-5.jpeg" class="card-media-image me-3" alt="">
                        <div class="media-body">
                            <h4 class="media-heading mb-1">Shaun Park</h4>
                            <p class="media-text">01 May</p>
                        </div>
                    </div> --}}
                        </div>
                    </a>
                </div>
            @endfor
        </div>
    </div>

    <div class="container">
        <div class="statbox widget box box-shadow layout-top-spacing">
            <div class="widget-content widget-content-area">
                <div class="contact-us-form">
                    <div class="row gx-5">
                        <div class="col-md-6">
                            <form class="row g-4">
                                <div class="col-md-12">
                                    <h5>Send Us Email</h5>
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
                        <div class="col-md-6 align-self-center">
                            <div id="contact-map" class="w-100 rounded mb-2 mb-lg-0 mt-2" style="height: 486px">
                            </div>
                            <!-- <div id="contact-map"></div> -->
                        </div>
                        <div class="col-md-12 mt-4">
                            <div class="paper contact-us-info-section-1">
                                <div class="row gx-5">
                                    <div class="col-12">
                                        <h4 class="contact-title">Let's Talk</h4>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                                        <div class="widget-paper">
                                            <h5>New York</h5>
                                            <p>+1 (070) 123 457</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                                        <div class="widget-paper">
                                            <h5>Miami</h5>
                                            <p>+1 (120) 456 789</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 mb-3 mx-auto">
                                        <div class="widget-paper">
                                            <h5>Edinburgh</h5>
                                            <p>+1 (218) 356 954</p>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-5">
                                        <h4 class="contact-title">Mail Us at</h4>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                                        <div class="widget-paper">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-help" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <circle cx="12" cy="12" r="9"></circle>
                                                    <line x1="12" y1="17" x2="12"
                                                        y2="17.01">
                                                    </line>
                                                    <path d="M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4"></path>
                                                </svg>
                                            </div>
                                            <h5>Support</h5>
                                            <p>info@mail.com</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                                        <div class="widget-paper">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-message-2" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M12 20l-3 -3h-2a3 3 0 0 1 -3 -3v-6a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-2l-3 3">
                                                    </path>
                                                    <line x1="8" y1="9" x2="16"
                                                        y2="9">
                                                    </line>
                                                    <line x1="8" y1="13" x2="14"
                                                        y2="13">
                                                    </line>
                                                </svg>
                                            </div>
                                            <h5>Enquire</h5>
                                            <p>enquire@mail.com</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 mb-3 mx-auto">
                                        <div class="widget-paper">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-report-analytics"
                                                    width="24" height="24" viewBox="0 0 24 24"
                                                    stroke-width="2" stroke="currentColor" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2">
                                                    </path>
                                                    <rect x="9" y="3" width="6" height="4" rx="2">
                                                    </rect>
                                                    <path d="M9 17v-5"></path>
                                                    <path d="M12 17v-1"></path>
                                                    <path d="M15 17v-3"></path>
                                                </svg>
                                            </div>
                                            <h5>Sales Office</h5>
                                            <p>sales@mail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    @vite(['public/src/plugins/src/leaflet/us-states.js'])
    @vite(['public/src/plugins/src/leaflet/eu-countries.js'])
    @vite(['public/src/plugins/src/leaflet/leaflet.js'])
    <script>
        // / Define Map Location
        var leaflet = L.map('contact-map', {
            center: [40.74785318312211, -73.98370985752007],
            zoom: 30
        });

        // Init Leaflet Map. For more info check the plugin's documentation: https://leafletjs.com/
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(leaflet);

        // Define Marker Layer
        var markerLayer = L.layerGroup().addTo(leaflet);

        // Set Custom SVG icon marker
        var leafletIcon = L.divIcon({
            html: `<span><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" style="fill: #ffffff80;color: #191e3a;">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="12" cy="11" r="3"></circle>
                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                    </svg></span>`,
            bgPos: [10, 10],
            iconAnchor: [20, 37],
            popupAnchor: [-7, -37],
            className: 'leaflet-marker'
        });

        // Show current address
        L.marker([40.74785318312211, -73.98370985752007], {
            icon: leafletIcon
        }).addTo(markerLayer).bindPopup('16 E 34th St, NY 10016, US', {
            closeButton: false
        }).openPopup();
    </script>
    <!-- END PAGE LEVEL SCRIPTS -->

</x-base-layout>
