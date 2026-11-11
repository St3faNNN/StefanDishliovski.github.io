<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#07182b">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/profile-avatar.svg') }}">
    <link rel="shortcut icon" href="{{ asset('images/profile-avatar.svg') }}">
    <meta name="description" content="Stefan Dishliovski — software engineering, artificial intelligence, machine learning and research.">
    <meta property="og:title" content="Stefan Dishliovski — Portfolio">
    <meta property="og:description" content="Software engineering, artificial intelligence and research.">
    <meta property="og:type" content="website">
    <title>@yield('title', 'Stefan Dishliovski — Portfolio')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <a class="skip-link" href="#main">Skip to content</a>

    @yield('content')

    <button class="back-to-top" type="button" aria-label="Back to top" title="Back to top">↑</button>

    <footer class="site-footer">
        <div class="container footer-inner">
            <span>© {{ date('Y') }} Stefan Dishliovski</span>
            <span>Designed and built with Laravel</span>
            <a href="#top" class="footer-top-link">Back to top ↑</a>
        </div>
    </footer>
</body>
</html>
