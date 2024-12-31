<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr"
    data-theme="theme-default" data-template="vertical-menu-template" data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>{{ $title ?? 'Page Title' }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon"
        href="{{ asset('/') }}assets/img/favicon/favicon.ico" />


    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->

    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/libs/node-waves/node-waves.css" />

    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/libs/typeahead-js/typeahead.css" />

    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/libs/sweetalert2/sweetalert2.css" />


    <!-- Page CSS -->


    <!-- Helpers -->
    <script data-navigate-once src="{{ asset('/') }}assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <!-- <script src="{{ asset('/') }}assets/vendor/js/template-customizer.js"></script> -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script data-navigate-once src="{{ asset('/') }}assets/js/config.js"></script>
    <script data-navigate-once src="{{ asset('/') }}assets/vendor/libs/jquery/jquery.js"></script>
    <script data-navigate-once src="{{ asset('/') }}assets/vendor/js/bootstrap.js"></script>
</head>

<body>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
            <x-navigation-menu />
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <x-nav-top />
                <!-- / Navbar -->
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        {{ $slot }}
                    </div>
                    <!-- / Content -->
                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl">
                            <div
                                class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                                <div class="text-body">
                                    <span class="fs-14">&copy; {{ date('Y') }}, All rights reserved</span>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->
                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js {{ asset('/') }}assets/vendor/js/core.js -->
    <script data-navigate-once src="{{ asset('/') }}assets/vendor/libs/popper/popper.js"></script>
    <script data-navigate-once src="{{ asset('/') }}assets/vendor/libs/node-waves/node-waves.js"></script>
    <script data-navigate-once src="{{ asset('/') }}assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script data-navigate-once src="{{ asset('/') }}assets/vendor/libs/hammer/hammer.js"></script>
    <script data-navigate-once src="{{ asset('/') }}assets/vendor/libs/i18n/i18n.js"></script>
    <script data-navigate-once src="{{ asset('/') }}assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script data-navigate-once src="{{ asset('/') }}assets/vendor/js/menu.js"></script>
    <!-- Main JS -->
    <script data-navigate-once src="{{ asset('/') }}assets/js/main.js"></script>
    <script src="{{ asset('/') }}assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
    <script src="{{ asset('/') }}assets/js/extended-ui-sweetalert2.js"></script>
    <!-- Page JS -->
    @livewireScripts
    <script>
        Livewire.on('alert', (message) => {
            alert('This is an alert from Livewire');k
        });
    </script>

</body>

</html>