<!DOCTYPE html>
<html lang="id">
<head>
    <title>@yield('title', 'My App')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @stack('styles')
</head>
<body>
    <div id="navbar">
        @yield('navbar')
    </div>
    <main id="content">
        @yield('content')
    </main>
    <footer id="footer">
        @yield('footer')
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @stack('script')
</body>
</html>