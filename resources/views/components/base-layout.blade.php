<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>{{ $pageTitle }}</title>
    <link rel="icon" type="image/x-icon" href="{{ Vite::asset('public/src/assets/img/logo-new.png') }}" />

    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

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

    <link href="../layouts/horizontal-dark-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="../layouts/horizontal-dark-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="../layouts/horizontal-dark-menu/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="../src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../layouts/horizontal-dark-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="../layouts/horizontal-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="../src/plugins/src/animate/animate.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="../src/assets/css/light/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="../src/assets/css/light/components/carousel.css" rel="stylesheet" type="text/css">
    <link href="../src/assets/css/light/components/modal.css" rel="stylesheet" type="text/css" />
    <link href="../src/assets/css/light/components/tabs.css" rel="stylesheet" type="text/css">

    <link href="../src/assets/css/dark/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="../src/assets/css/dark/components/carousel.css" rel="stylesheet" type="text/css">
    <link href="../src/assets/css/dark/components/modal.css" rel="stylesheet" type="text/css" />
    <link href="../src/assets/css/dark/components/tabs.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../src/plugins/src/filepond/filepond.min.css">
    <link rel="stylesheet" href="../src/plugins/src/filepond/FilePondPluginImagePreview.min.css">
    <link href="../src/plugins/css/light/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />
    <link href="../src/plugins/css/dark/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />

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
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <script src="../src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="../src/plugins/src/waves/waves.min.js"></script>
    <script src="../layouts/horizontal-dark-menu/app.js"></script>

    <script src="../src/plugins/src/highlight/highlight.pack.js"></script>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM SCRIPT FILE  -->
    <script src="../src/assets/js/scrollspyNav.js"></script>

    <script src="../src/plugins/src/filepond/filepond.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginFileValidateType.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImagePreview.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImageCrop.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImageResize.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImageTransform.min.js"></script>
    <script src="../src/plugins/src/filepond/filepondPluginFileValidateSize.min.js"></script>

    <script>

        function addVideoInModal(btnSelector, videoSource, modalSelector, iframeHeight, iframeWidth, iframeContainer) {
            var myModal = new bootstrap.Modal(document.getElementById(modalSelector), {
                keyboard: false
            })
            document.querySelector(btnSelector).addEventListener('click', function() {
                var src = videoSource;
                myModal.show('show');
                var ifrm = document.createElement("iframe");
                ifrm.setAttribute("src", src);
                ifrm.setAttribute('width', iframeWidth);
                ifrm.setAttribute('height', iframeHeight);
                ifrm.style.border = "0";
                ifrm.setAttribute("allow", "encrypted-media");
                document.querySelector(iframeContainer).appendChild(ifrm);
            })
        }

        addVideoInModal('#yt-video-link', 'https://www.youtube.com/embed/YE7VzlLtp-4', 'videoMedia1', '315', '560', '.yt-container')

        addVideoInModal('#vimeo-video-link', 'https://player.vimeo.com/video/1084537', 'videoMedia2', '315', '560', '.vimeo-container')




        /**
         * ==================
         * Single File Upload
         * ==================
        */

        // We register the plugins required to do
        // image previews, cropping, resizing, etc.
        FilePond.registerPlugin(
        FilePondPluginFileValidateType,
        FilePondPluginImageExifOrientation,
        FilePondPluginImagePreview,
        FilePondPluginImageCrop,
        FilePondPluginImageResize,
        FilePondPluginImageTransform,
        //   FilePondPluginImageEdit
        );

        // Select the file input and use
        // create() to turn it into a pond
        var modalImage = FilePond.create(
        document.querySelector('.filepond'),
        {
            // labelIdle: `<span class="no-image-placeholder"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span> <p class="drag-para">Drag & Drop your picture or <span class="filepond--label-action" tabindex="0">Browse</span></p>`,
            imagePreviewHeight: 170,
            imageCropAspectRatio: '1:1',
            imageResizeTargetWidth: 200,
            imageResizeTargetHeight: 200,
            stylePanelLayout: 'compact circle',
            styleLoadIndicatorPosition: 'center bottom',
            styleProgressIndicatorPosition: 'right bottom',
            styleButtonRemoveItemPosition: 'left bottom',
            styleButtonProcessItemPosition: 'right bottom',
        }
        );

        const myModalEl = document.getElementById('profileModal')
        myModalEl.addEventListener('shown.bs.modal', event => {
            modalImage.addFiles('../src/assets/img/drag-1.jpeg');
        })

    </script>

</body>

</html>
