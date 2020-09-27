<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Sadiq Store | Home</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('head')
</head>

<!-- Demo Styles -->
<style>
    .content {
        min-height: 600px;
    }

</style>

<body class="hold-transition layout-top-nav">
    <div class="wrapper" id="app">

        <the-navigation></the-navigation>

        <div class="content-wrapper">

            <div class="bg-white row justify-content-center p-2">
              <div class="">
                <a href="#" class="nav-link" @click="toggleCatBox">Add
                <i class="fas fa-caret-down inline-block"></i>
                </a>
                
              </div>
            </div>
            <div class="" style="position: absolute; width: 100%; z-index: 10" v-show="catBoxShow">
                <div class="card">
                    <div class="card-body">
                        <div class="row offset-md-2">
                            <div>

                                <h5>Categories</h5>
                                <a href="#">Electronics</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-header">
            </div>

            <div class="content">
                <div class="ml-3 mr-3">
                    <router-view></router-view>
                </div>
            </div>
        </div>

        <the-footer></the-footer>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        //$.widget.bridge('uibutton', $.ui.button)

    </script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminlte/dist/js/adminlte.js') }}"></script>


    @yield('scripts')
</body>

</html>
