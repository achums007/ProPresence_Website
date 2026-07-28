<!DOCTYPE html>
<html lang="en" data-tsd-source="/src/routes/__root.tsx:88:5">
<head data-tsd-source="/src/routes/__root.tsx:89:7">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preload" as="image" href="{{ asset('logo.png') }}">
<title>@yield('title', 'ProPresence Digital — Engineering Digital Growth')</title>
<meta name="author" content="ProPresence Digital">
<meta name="theme-color" content="#0F172A">
<meta property="og:site_name" content="ProPresence Digital">
<meta property="og:type" content="website">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="@yield('title', 'ProPresence Digital')">
<meta name="twitter:description" content="@yield('meta_description', 'Engineering Digital Growth. Building Digital Futures.')">
<meta name="description" content="@yield('meta_description', 'Marketing, software, branding and cloud — a complete digital growth partner for startups, SMEs and enterprises.')">
<meta property="og:title" content="@yield('title', 'ProPresence Digital — Engineering Digital Growth')">
<meta property="og:description" content="@yield('meta_description', 'From startup branding to enterprise software engineering. Kerala, India.')">
<meta property="og:url" content="{{ url()->current() }}">
<link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
<link rel="canonical" href="{{ url()->current() }}">
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body data-tsd-source="/src/routes/__root.tsx:92:7">
<div class="flex min-h-screen flex-col" data-tsd-source="/src/routes/__root.tsx:104:7">

@include('partials.header')

<main class="flex-1" data-tsd-source="/src/routes/__root.tsx:106:9">
<!--$--><!--@yield('content')--><!--/$-->
</main>

@include('partials.footer')

@include('partials.floating')

</div>
<script src="{{ asset('js/main.js') }}" defer></script>
</body>
</html>
