<header class="site-header">
  <div class="container nav">
    <a href="{{ route('home') }}" class="logo"><span class="logo-mark"></span>ProPresence Digital</a>
    <nav class="nav-links">
      <a href="{{ route('home') }}" {!! Route::is('home') ? 'style="color:#fff"' : '' !!}>Home</a>
      <a href="{{ route('about') }}" {!! Route::is('about') ? 'style="color:#fff"' : '' !!}>About</a>
      <a href="{{ route('services') }}" {!! Route::is('services') ? 'style="color:#fff"' : '' !!}>Services</a>
      <a href="{{ route('industries') }}" {!! Route::is('industries') ? 'style="color:#fff"' : '' !!}>Industries</a>
      <a href="{{ route('portfolio') }}" {!! Route::is('portfolio') ? 'style="color:#fff"' : '' !!}>Portfolio</a>
      <a href="{{ route('pricing') }}" {!! Route::is('pricing') ? 'style="color:#fff"' : '' !!}>Pricing</a>
      <a href="{{ route('blog') }}" {!! Route::is('blog') ? 'style="color:#fff"' : '' !!}>Blog</a>
      <a href="{{ route('contact') }}" {!! Route::is('contact') ? 'style="color:#fff"' : '' !!}>Contact</a>
    </nav>
    <a href="{{ route('contact') }}" class="nav-cta">Book a Call</a>
    <button class="nav-toggle" aria-label="Menu">☰</button>
  </div>
</header>
