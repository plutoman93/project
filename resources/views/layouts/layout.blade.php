<!-- resources/views/layouts/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('asset/frontend/css/style2.css') }}">
</head>
<body>
    <div id="app">
        @include('particials.sidebar')

        <div class="main-content">
            @yield('content')
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
