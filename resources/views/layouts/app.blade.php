<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Toastr css -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        $(document).ready(function() {
            toastr.options.timeOut = 9500;
            @if (Session::has('success'))
                toastr.options = {
                    "closeButton": true,
                    "timeOut": 3000
                }
                toastr.success("{{ Session::get('success') }}");
            @endif
            @if (Session::has('error'))
                toastr.options = {
                    "closeButton": true,
                    "timeOut": 3000
                }
                toastr.error("{{ Session::get('error') }}");
            @endif
            @if (Session::has('info'))
                toastr.options = {
                    "closeButton": true,
                    "timeOut": 3000
                }
                toastr.info("{{ Session::get('info') }}");
            @endif
            @if (Session::has('warning'))
                toastr.options = {
                    "closeButton": true,
                    "timeOut": 3000
                }
                toastr.warning("{{ Session::get('warning') }}");
            @endif
        });
    </script>
</body>

</html>
