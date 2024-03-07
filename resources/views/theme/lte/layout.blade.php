<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo', 'Biblioteca') | mariahstefanie</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset("assets/$theme/plugins/fontawesome-free/css/all.min.css") }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset("assets/$theme/dist/css/adminlte.min.css") }}">
    @yield('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

</head>

<body class="hold-transition sidebar-mini layout-boxed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Inicio header -->
        @include("theme/$theme/header")
        <!-- Fin header -->
        <!-- Inicio aside -->
        @include("theme/$theme/aside")
        <!-- Fin aside -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('contenido')
        </div>
        <!-- Inicio footer -->
        @include("theme/$theme/footer")
        <!-- Fin footer -->
    </div>
    <script src="{{ asset("assets/$theme/plugins/jquery/jquery.min.js") }}"></script>
    <script src="{{ asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("assets/$theme/dist/js/adminlte.min.js") }}"></script>
    @yield('scriptsPlugins')
    <script src="{{ asset('assets/js/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-validation/localization/messages_es.min.js') }}"></script>
    <script src="{{ asset('assets/js/funciones.js') }}"></script>
    @yield('scripts')
</body>

</html>
