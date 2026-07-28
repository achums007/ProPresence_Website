<header class="sticky top-0 z-50 glass border-b border-border/60" data-tsd-source="/src/components/site/Header.tsx:18:5">
  <div class="container-page flex h-16 items-center justify-between" data-tsd-source="/src/components/site/Header.tsx:19:7">
    <a data-tsd-source="/src/components/site/Header.tsx:20:9" class="flex items-center gap-2 group {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}" @if(Route::is('home')) data-status="active" aria-current="page" @endif>
      <img src="{{ asset('logo.png') }}" alt="ProPresence Digital logo" class="size-9 object-contain" data-tsd-source="/src/components/site/Header.tsx:21:11">
      <span class="font-display font-bold text-lg tracking-tight" data-tsd-source="/src/components/site/Header.tsx:22:11">ProPresence<span class="text-gradient" data-tsd-source="/src/components/site/Header.tsx:23:24">.</span></span>
    </a>
    <nav class="hidden lg:flex items-center gap-1" data-tsd-source="/src/components/site/Header.tsx:28:9">
      <a data-tsd-source="/src/components/site/Header.tsx:30:13" class="px-3 py-2 text-sm font-medium text-muted-foreground hover:text-foreground transition-colors rounded-md {{ Route::is('home') ? 'text-foreground' : '' }}" href="{{ route('home') }}" @if(Route::is('home')) data-status="active" aria-current="page" @endif>Home</a>
      <a data-tsd-source="/src/components/site/Header.tsx:30:13" class="px-3 py-2 text-sm font-medium text-muted-foreground hover:text-foreground transition-colors rounded-md {{ Route::is('services') || Route::is('services.*') ? 'text-foreground' : '' }}" href="{{ route('services') }}" @if(Route::is('services') || Route::is('services.*')) data-status="active" aria-current="page" @endif>Services</a>
      <a data-tsd-source="/src/components/site/Header.tsx:30:13" class="px-3 py-2 text-sm font-medium text-muted-foreground hover:text-foreground transition-colors rounded-md {{ Route::is('industries') ? 'text-foreground' : '' }}" href="{{ route('industries') }}" @if(Route::is('industries')) data-status="active" aria-current="page" @endif>Industries</a>
      <a data-tsd-source="/src/components/site/Header.tsx:30:13" class="px-3 py-2 text-sm font-medium text-muted-foreground hover:text-foreground transition-colors rounded-md {{ Route::is('portfolio') ? 'text-foreground' : '' }}" href="{{ route('portfolio') }}" @if(Route::is('portfolio')) data-status="active" aria-current="page" @endif>Work</a>
      <a data-tsd-source="/src/components/site/Header.tsx:30:13" class="px-3 py-2 text-sm font-medium text-muted-foreground hover:text-foreground transition-colors rounded-md {{ Route::is('pricing') ? 'text-foreground' : '' }}" href="{{ route('pricing') }}" @if(Route::is('pricing')) data-status="active" aria-current="page" @endif>Pricing</a>
      <a data-tsd-source="/src/components/site/Header.tsx:30:13" class="px-3 py-2 text-sm font-medium text-muted-foreground hover:text-foreground transition-colors rounded-md {{ Route::is('about') ? 'text-foreground' : '' }}" href="{{ route('about') }}" @if(Route::is('about')) data-status="active" aria-current="page" @endif>About</a>
      <a data-tsd-source="/src/components/site/Header.tsx:30:13" class="px-3 py-2 text-sm font-medium text-muted-foreground hover:text-foreground transition-colors rounded-md {{ Route::is('contact') ? 'text-foreground' : '' }}" href="{{ route('contact') }}" @if(Route::is('contact')) data-status="active" aria-current="page" @endif>Contact</a>
    </nav>
    <div class="hidden lg:flex items-center gap-3" data-tsd-source="/src/components/site/Header.tsx:42:9">
      <a data-tsd-source="/src/components/site/Header.tsx:43:11" href="{{ route('contact') }}" class="btn-primary text-sm">Book Consultation</a>
    </div>
    <button class="lg:hidden inline-flex size-10 items-center justify-center rounded-md border border-border" aria-label="Toggle menu" data-tsd-source="/src/components/site/Header.tsx:48:9">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu size-5" aria-hidden="true" data-tsd-source="/src/components/site/Header.tsx:53:46"><path d="M4 5h16"></path><path d="M4 12h16"></path><path d="M4 19h16"></path></svg>
    </button>
  </div>
</header>
