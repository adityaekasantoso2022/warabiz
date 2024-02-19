<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner | {{ $title }}</title>

    <link rel="stylesheet" href="{{ asset('assets/backend/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/css/main/app-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/css/pages/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/css/pages/datatables.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/css/shared/iconly.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/css/pages/lightbox.css') }}">

    @stack('addonStyle')

    <meta name="description" content="">

    <link rel="icon" href="{{ asset('assets/frontend/image/favicon.png') }}" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="main">
            <x-owner.sidebar active="{{ $active }}" />
            {{ $slot }}
        </div>
    </div>
    <script src="{{ asset('assets/backend/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/pages/datatables.js') }}"></script>
    <script src="{{ asset('assets/backend/js/script.js') }}"></script>
    <script src="{{ asset('assets/backend/js/pages/lightbox-plus-jquery.min.js') }}"></script>

    @stack('addonScript')
</body>

</html>
