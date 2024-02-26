<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Solusi untuk memiliki wiralaba yang sesuai dengan diri anda, dengan wiralaba yang terpercaya di Indoensia ">
    <meta name="keywords" content="website waralaba, warabiz, umkm, telkom, indonesia, waralaba">
    <title>{{ $title }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/frontend/image/favicon.png') }}" type="image/x-icon">
    @include('includes.style')
    @stack('addonStyle')
</head>

<body>
    <x-user.navbar />
    
    {{ $slot }}

    <x-user.footer />
    @include('includes.script')
    @stack('addonScript')
</body>

</html>
