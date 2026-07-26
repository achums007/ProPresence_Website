<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>@yield('title', 'Enterprise Digital Growth Agency | ProPresence Digital')</title>
<meta name="description" content="@yield('meta_description', 'ProPresence Digital is an enterprise-grade digital agency engineering brands, websites and growth systems for ambitious companies.')" />
<meta property="og:title" content="@yield('title', 'Enterprise Digital Growth Agency | ProPresence Digital')" />
<meta property="og:description" content="@yield('meta_description', 'ProPresence Digital is an enterprise-grade digital agency engineering brands, websites and growth systems for ambitious companies.')" />
<meta property="og:type" content="website" />
<meta name="twitter:card" content="summary_large_image" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
</head>
<body>

@include('partials.header')

@yield('content')

@include('partials.footer')

@include('partials.floating')

<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
