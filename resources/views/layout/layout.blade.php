<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/upi.png') }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.css') }}">
    <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    {{-- important add chart js to add  chart --}}
</head>

<body>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            {{-- Include Navbar Section --}}
            @yield('navbar')

            <div class="content-wrapper">
                @yield('content')
            </div>
        </div>
        {{-- end code  --}} {{-- test --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.12.0/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.0.0-beta2/Chart.min.js"></script>
        <script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>
        <script src="{{ asset('lte/plugins/datatables/jquery.dataTables') }}"></script>
        <script src="{{ asset('lte/plugins/datatables-bs4/js/dataTables.bootstrap4') }}"></script>
        {{-- chart js --}}
        <script src="{{ asset('lte/plugins/chart.js/Chart.min.js') }}"></script>
        <script src="{{ asset('lte/plugins/chart.js/Chart.css') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>




    </body>

</html>
