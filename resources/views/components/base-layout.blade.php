<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>{{ $pageTitle }}</title>
    <link rel="icon" type="image/x-icon" href="{{ Vite::asset('public/src/assets/img/logo-new.png') }}" />

    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    @vite(['public/layouts/horizontal-dark-menu/css/light/loader.css'])
    @vite(['public/layouts/horizontal-dark-menu/css/dark/loader.css'])
    @vite(['public/layouts/horizontal-dark-menu/loader.js'])
    @vite(['public/src/bootstrap/css/bootstrap.min.css'])
    @vite(['public/layouts/horizontal-dark-menu/css/light/plugins.css'])
    @vite(['public/layouts/horizontal-dark-menu/css/dark/plugins.css'])
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    @vite(['public/src/plugins/src/filepond/filepond.min.css'])
    @vite(['public/src/plugins/src/filepond/FilePondPluginImagePreview.min.css'])
    @vite(['public/src/plugins/src/tagify/tagify.css'])
    @vite(['public/src/assets/css/light/forms/switches.css'])
    @vite(['public/src/plugins/css/light/editors/quill/quill.snow.css'])
    @vite(['public/src/plugins/css/light/tagify/custom-tagify.css'])
    @vite(['public/src/plugins/css/light/filepond/custom-filepond.css'])
    @vite(['public/src/assets/css/dark/forms/switches.css'])
    @vite(['public/src/plugins/css/dark/editors/quill/quill.snow.css'])
    @vite(['public/src/plugins/css/dark/tagify/custom-tagify.css'])
    @vite(['public/src/plugins/css/dark/filepond/custom-filepond.css'])
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    @vite(['public/src/assets/css/light/apps/blog-create.css'])
    @vite(['public/src/assets/css/dark/apps/blog-create.css'])
    @vite(['public/src/assets/css/light/elements/custom-pagination.css'])
    @vite(['public/src/assets/css/light/apps/blog-post.css'])
    @vite(['public/src/assets/css/dark/elements/custom-pagination.css'])
    @vite(['public/src/assets/css/dark/apps/blog-post.css'])
    <!--  END CUSTOM STYLE FILE  -->

    {{-- <style>
        .scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        .scrollbar::-webkit-scrollbar {
            width: 0;
        }
    </style> --}}

</head>

<body class="layout-boxed scrollbar">

    <!-- BEGIN LOADER -->
    <x-loader />
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <x-header />
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <x-overlay />

        <!--  BEGIN SIDEBAR  -->
        {{-- <x-sidebar /> --}}
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="middle-content container-xxl p-0">
                    <!--  BEGIN BREADCRUMBS  -->
                    {{ $slot }}
                    <!--  END BREADCRUMBS  -->
                </div>
            </div>

            <!--  BEGIN FOOTER  -->
            <x-footer />
            <!--  END FOOTER  -->

        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    @vite(['public/src/bootstrap/js/bootstrap.bundle.min.js'])
    @vite(['public/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js'])
    @vite(['public/src/plugins/src/mousetrap/mousetrap.min.js'])
    @vite(['public/src/plugins/src/waves/waves.min.js'])
    @vite(['public/layouts/horizontal-dark-menu/app.js'])
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    @vite(['public/src/plugins/src/editors/quill/quill.js'])
    @vite(['public/src/plugins/src/filepond/filepond.min.js'])
    @vite(['public/src/plugins/src/filepond/FilePondPluginFileValidateType.min.js'])
    @vite(['public/src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js'])
    @vite(['public/src/plugins/src/filepond/FilePondPluginImagePreview.min.js'])
    @vite(['public/src/plugins/src/filepond/FilePondPluginImageCrop.min.js'])
    @vite(['public/src/plugins/src/filepond/FilePondPluginImageResize.min.js'])
    @vite(['public/src/plugins/src/filepond/FilePondPluginImageTransform.min.js'])
    @vite(['public/src/plugins/src/filepond/filepondPluginFileValidateSize.min.js'])
    @vite(['public/src/plugins/src/tagify/tagify.min.js'])
    @vite(['public/src/assets/js/apps/blog-create.js'])
    @vite(['public/src/plugins/src/highlight/highlight.pack.js'])
    <!-- END PAGE LEVEL SCRIPTS -->
</body>

</html>
