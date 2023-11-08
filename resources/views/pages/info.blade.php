<x-base-layout>

    <x-slot:pageTitle>Bhoothat</x-slot>

    <link href="../layouts/horizontal-dark-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="../layouts/horizontal-dark-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="../layouts/horizontal-dark-menu/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="../src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../layouts/horizontal-dark-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="../layouts/horizontal-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="../src/plugins/src/stepper/bsStepper.min.css">

    <link rel="stylesheet" type="text/css" href="../src/assets/css/light/scrollspyNav.css"/>
    <link rel="stylesheet" type="text/css" href="../src/plugins/css/light/stepper/custom-bsStepper.css">

    <link rel="stylesheet" type="text/css" href="../src/assets/css/dark/scrollspyNav.css"/>
    <link rel="stylesheet" type="text/css" href="../src/plugins/css/dark/stepper/custom-bsStepper.css">


    <div class="row layout-top-spacing" id="cancel-row">
        <div id="wizard_Default" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Default</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="bs-stepper stepper-form-one">
                        <div class="bs-stepper-header" role="tablist">
                            <div class="step" data-target="#defaultStep-one">
                                <button type="button" class="step-trigger" role="tab">
                                    <span class="bs-stepper-circle">1</span>
                                    <span class="bs-stepper-label">Step One</span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#defaultStep-two">
                                <button type="button" class="step-trigger" role="tab">
                                    <span class="bs-stepper-circle">2</span>
                                    <span class="bs-stepper-label">Step Two</span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#defaultStep-three">
                                <button type="button" class="step-trigger" role="tab">
                                    <span class="bs-stepper-circle">3</span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Step Three</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="bs-stepper-content">
                            <div id="defaultStep-one" class="content" role="tabpanel">
                                <form>
                                    <div class="form-group mb-4">
                                        <label for="defaultForm-name">Name</label>
                                        <input type="text" class="form-control" id="defaultForm-name">
                                    </div>
                                </form>

                                <div class="button-action mt-5">
                                    <button class="btn btn-secondary btn-prev me-3" disabled>Prev</button>
                                    <button class="btn btn-secondary btn-nxt">Next</button>
                                </div>
                            </div>
                            <div id="defaultStep-two" class="content" role="tabpanel">
                                <form>
                                    <div class="form-group mb-4">
                                        <label for="defaultEmailAddress">Email Address</label>
                                        <input type="email" class="form-control" id="defaultEmailAddress">
                                    </div>
                                </form>

                                <div class="button-action mt-5">
                                    <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                    <button class="btn btn-secondary btn-nxt">Next</button>
                                </div>
                            </div>
                            <div id="defaultStep-three" class="content" role="tabpanel">
                                <form class="row g-3">
                                    <div class="col-12">
                                        <label for="defaultInputAddress" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="defaultInputAddress"
                                            placeholder="1234 Main St">
                                    </div>
                                    <div class="col-12">
                                        <label for="defaultInputAddress2" class="form-label">Address 2</label>
                                        <input type="text" class="form-control" id="defaultInputAddress2"
                                            placeholder="Apartment, studio, or floor">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="defaultInputCity" class="form-label">City</label>
                                        <input type="text" class="form-control" id="defaultInputCity">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="defaultInputState" class="form-label">State</label>
                                        <select id="defaultInputState" class="form-select">
                                            <option selected="">Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="defaultInputZip" class="form-label">Zip</label>
                                        <input type="text" class="form-control" id="defaultInputZip">
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="defaultGridCheck">
                                            <label class="form-check-label" for="defaultGridCheck">
                                                Check me out
                                            </label>
                                        </div>
                                    </div>
                                </form>

                                <div class="button-action mt-3">
                                    <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                    <button class="btn btn-success me-3">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="../src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="../src/plugins/src/waves/waves.min.js"></script>
    <script src="../layouts/horizontal-dark-menu/app.js"></script>
    <script src="../src/plugins/src/highlight/highlight.pack.js"></script>
    <script src="../src/assets/js/scrollspyNav.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="../src/plugins/src/stepper/bsStepper.min.js"></script>
    <script src="../src/plugins/src/stepper/custom-bsStepper.min.js"></script>

</x-base-layout>
