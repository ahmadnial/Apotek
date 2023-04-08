<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--
    <link rel="stylesheet" href="{{ asset ('asset/dashboard/plugins/fontawesome-free/css/all.min.css') }}"> --}}
    <!-- DataTables -->
    {{--
    <link rel="stylesheet"
        href="{{ asset ('asset/dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset ('asset/dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset ('asset/dashboard/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}"> --}}
    <!-- Theme style -->
    {{--
    <link rel="stylesheet" href="{{ asset ('asset/dashboard/dist/css/adminlte.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset ('asset/dashboard/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet"
        href="{{ asset ('asset/dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset ('asset/dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset ('asset/dashboard/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- Theme style -->
    {{--
    <link rel="stylesheet" href="{{ asset ('asset/dashboard/dist/css/adminlte.min.css') }}"> --}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    {{ Html::style(url('css/plugins/bootstrap.min.css')) }}
    {{ Html::style('css/plugins/bootstrap-theme.min.css') }}
    @yield('ext_css')
    {{ Html::style(url('css/app.custom.css')) }}

    <!-- Scripts -->

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body>
    @include('layouts.partials.top-nav')
    <div class="container">
        @include('flash::message')
        @yield('content')
        <br>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    {{ Html::script(url('js/plugins/jquery.min.js')) }}
    {{ Html::script(url('js/plugins/bootstrap.min.js')) }}
    @stack('ext_js')
    <script>
        $('div.notifier').not('.alert-important').delay(5000).fadeOut(350);
    </script>
    @yield('script')
</body>

</html>