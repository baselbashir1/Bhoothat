<x-base-layout>

    <x-slot:pageTitle>Bhoothat</x-slot>

    <div class="row layout-top-spacing">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
            <div class="single-post-content">
                <div class="featured-image">
                    <div class="featured-image-overlay"></div>
                    <div class="post-header">
                        <div class="post-title">
                            {{-- <h1 class="mb-0">All educational services are available in our website...</h1> --}}
                            <h1 class="mb-0">Comprehensive educational services are readily accessible through our
                                website, providing a wealth of resources and opportunities for learning...</h1>
                        </div>
                        <div class="post-meta-info d-flex justify-content-between">
                            {{-- <div class="media">
                                <img src="../src/assets/img/profile-12.jpeg" alt="profile">
                                <div class="media-body">
                                    <h5>Kelly Young</h5>
                                    <p>15 May 2022</p>
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

</x-base-layout>
