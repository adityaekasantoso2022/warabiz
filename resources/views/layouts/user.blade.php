<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description"
        content="Solusi untuk memiliki wiralaba yang sesuai dengan diri anda, dengan wiralaba yang terpercaya di Indoensia ">
    <meta name="keywords" content="website waralaba, warabiz, umkm, telkom, indonesia, waralaba">
    <title>{{ $title }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">


    <link rel="shortcut icon" href="{{ asset('assets/frontend/image/favicon.png') }}" type="image/x-icon">

    @include('includes.style')

    @stack('addonStyle')

    <style>
        .swal2-container {
            z-index: 100;
            margin-top: 80px
        }
    </style>
</head>

<body>
    <x-user.navbar />

    @include('sweetalert::alert')

    {{ $slot }}

    <x-user.footer />
    @include('includes.script')
    @stack('addonScript')
</body>

</html>