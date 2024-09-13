<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Peserta Pelatihan Reguler</title>

    <!-- Font Icon -->
    <link rel="stylesheet"
        href="{{ asset('daftar/vendor/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('daftar/css/style.css') }}">
</head>

<body>

    <div class="main">
        <div class="container">
            @include('sweetalert::alert')
            @yield('content')


        </div>

    </div>


    <!-- JS -->
    <script src="{{ asset('daftar/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('daftar/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('daftar/vendor/jquery-validation/dist/additional-methods.min.js') }}"></script>
    <script src="{{ asset('daftar/vendor/jquery-steps/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('daftar/vendor/minimalist-picker/dobpicker.js') }}"></script>
    <script src="{{ asset('daftar/vendor/jquery.pwstrength/jquery.pwstrength.js') }}"></script>
    <script src="{{ asset('daftar/js/main.js') }}"></script>
    @include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])
</body>

</html>
