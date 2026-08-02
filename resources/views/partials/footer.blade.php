<footer class="border-t border-border bg-muted/40" data-tsd-source="/src/components/site/Footer.tsx:6:5">
  <div class="container-page py-16" data-tsd-source="/src/components/site/Footer.tsx:7:7">
    <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-5" data-tsd-source="/src/components/site/Footer.tsx:8:9">
      <div class="lg:col-span-2 space-y-4" data-tsd-source="/src/components/site/Footer.tsx:9:11">
        <a data-tsd-source="/src/components/site/Footer.tsx:10:13" href="{{ route('home') }}" class="flex items-center gap-2">
          <img src="{{ asset('logo.png') }}" alt="ProPresence Digital logo" class="size-9 object-contain" data-tsd-source="/src/components/site/Footer.tsx:11:15">
          <span class="font-display font-bold text-lg" data-tsd-source="/src/components/site/Footer.tsx:12:15">ProPresence Digital</span>
        </a>
        <p class="text-sm text-muted-foreground max-w-sm" data-tsd-source="/src/components/site/Footer.tsx:15:13">Engineering Digital Growth. Building Digital Futures. A full-service digital, software &amp; technology partner based in Kerala, India — serving businesses worldwide.</p>
        <div class="space-y-2 text-sm text-muted-foreground pt-2" data-tsd-source="/src/components/site/Footer.tsx:19:13">
          <div class="flex items-center gap-2" data-tsd-source="/src/components/site/Footer.tsx:20:15">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail size-4 text-brand" aria-hidden="true" data-tsd-source="/src/components/site/Footer.tsx:20:56"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path><rect x="2" y="4" width="20" height="16" rx="2"></rect></svg> propresencedigital@gmail.com
          </div>
          <div class="flex items-center gap-2" data-tsd-source="/src/components/site/Footer.tsx:21:56">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone size-4 text-brand" aria-hidden="true" data-tsd-source="/src/components/site/Footer.tsx:21:56"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"></path></svg> +91 79079 16891
          </div>
          <div class="flex items-center gap-2" data-tsd-source="/src/components/site/Footer.tsx:22:15">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin size-4 text-brand" aria-hidden="true" data-tsd-source="/src/components/site/Footer.tsx:22:56"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg> Kerala, India
          </div>
        </div>
      </div>
      <div data-tsd-source="/src/components/site/Footer.tsx:68:5">
        <h4 class="font-display font-semibold text-sm mb-4" data-tsd-source="/src/components/site/Footer.tsx:69:7">Company</h4>
        <ul class="space-y-2.5" data-tsd-source="/src/components/site/Footer.tsx:70:7">
          <li data-tsd-source="/src/components/site/Footer.tsx:72:11"><a data-tsd-source="/src/components/site/Footer.tsx:73:13" class="text-sm text-muted-foreground hover:text-foreground transition-colors {{ Route::is('about') ? 'active text-foreground' : '' }}" href="{{ route('about') }}" @if(Route::is('about')) data-status="active" aria-current="page" @endif>About</a></li>
          <li data-tsd-source="/src/components/site/Footer.tsx:72:11"><a data-tsd-source="/src/components/site/Footer.tsx:73:13" class="text-sm text-muted-foreground hover:text-foreground transition-colors {{ Route::is('services') || Route::is('services.*') ? 'active text-foreground' : '' }}" href="{{ route('services') }}">Services</a></li>
          <li data-tsd-source="/src/components/site/Footer.tsx:72:11"><a data-tsd-source="/src/components/site/Footer.tsx:73:13" class="text-sm text-muted-foreground hover:text-foreground transition-colors {{ Route::is('industries') ? 'active text-foreground' : '' }}" href="{{ route('industries') }}">Industries</a></li>
          <li data-tsd-source="/src/components/site/Footer.tsx:72:11"><a data-tsd-source="/src/components/site/Footer.tsx:73:13" class="text-sm text-muted-foreground hover:text-foreground transition-colors {{ Route::is('portfolio') ? 'active text-foreground' : '' }}" href="{{ route('portfolio') }}">Portfolio</a></li>
          <li data-tsd-source="/src/components/site/Footer.tsx:72:11"><a data-tsd-source="/src/components/site/Footer.tsx:73:13" class="text-sm text-muted-foreground hover:text-foreground transition-colors {{ Route::is('careers') ? 'active text-foreground' : '' }}" href="{{ route('careers') }}">Careers</a></li>
          <li data-tsd-source="/src/components/site/Footer.tsx:72:11"><a data-tsd-source="/src/components/site/Footer.tsx:73:13" class="text-sm text-muted-foreground hover:text-foreground transition-colors {{ Route::is('contact') ? 'active text-foreground' : '' }}" href="{{ route('contact') }}">Contact</a></li>
        </ul>
      </div>
      <div data-tsd-source="/src/components/site/Footer.tsx:68:5">
        <h4 class="font-display font-semibold text-sm mb-4" data-tsd-source="/src/components/site/Footer.tsx:69:7">Resources</h4>
        <ul class="space-y-2.5" data-tsd-source="/src/components/site/Footer.tsx:70:7">
          <li data-tsd-source="/src/components/site/Footer.tsx:72:11"><a data-tsd-source="/src/components/site/Footer.tsx:73:13" class="text-sm text-muted-foreground hover:text-foreground transition-colors {{ Route::is('blog') ? 'active text-foreground' : '' }}" href="{{ route('blog') }}">Blog</a></li>
          <li data-tsd-source="/src/components/site/Footer.tsx:72:11"><a data-tsd-source="/src/components/site/Footer.tsx:73:13" class="text-sm text-muted-foreground hover:text-foreground transition-colors {{ Route::is('pricing') ? 'active text-foreground' : '' }}" href="{{ route('pricing') }}">Pricing</a></li>
          <li data-tsd-source="/src/components/site/Footer.tsx:72:11"><a data-tsd-source="/src/components/site/Footer.tsx:73:13" class="text-sm text-muted-foreground hover:text-foreground transition-colors {{ Route::is('faq') ? 'active text-foreground' : '' }}" href="{{ route('faq') }}">FAQ</a></li>
          <li data-tsd-source="/src/components/site/Footer.tsx:72:11"><a data-tsd-source="/src/components/site/Footer.tsx:73:13" class="text-sm text-muted-foreground hover:text-foreground transition-colors" href="/sitemap.xml">Sitemap</a></li>
        </ul>
      </div>
      <div data-tsd-source="/src/components/site/Footer.tsx:68:5">
        <h4 class="font-display font-semibold text-sm mb-4" data-tsd-source="/src/components/site/Footer.tsx:69:7">Legal</h4>
        <ul class="space-y-2.5" data-tsd-source="/src/components/site/Footer.tsx:70:7">
          <li data-tsd-source="/src/components/site/Footer.tsx:72:11"><a data-tsd-source="/src/components/site/Footer.tsx:73:13" class="text-sm text-muted-foreground hover:text-foreground transition-colors {{ Route::is('privacy') ? 'active text-foreground' : '' }}" href="{{ route('privacy') }}">Privacy Policy</a></li>
          <li data-tsd-source="/src/components/site/Footer.tsx:72:11"><a data-tsd-source="/src/components/site/Footer.tsx:73:13" class="text-sm text-muted-foreground hover:text-foreground transition-colors {{ Route::is('terms') ? 'active text-foreground' : '' }}" href="{{ route('terms') }}">Terms &amp; Conditions</a></li>
          <li data-tsd-source="/src/components/site/Footer.tsx:72:11"><a data-tsd-source="/src/components/site/Footer.tsx:73:13" class="text-sm text-muted-foreground hover:text-foreground transition-colors {{ Route::is('refund') ? 'active text-foreground' : '' }}" href="{{ route('refund') }}">Refund Policy</a></li>
          <li data-tsd-source="/src/components/site/Footer.tsx:72:11"><a data-tsd-source="/src/components/site/Footer.tsx:73:13" class="text-sm text-muted-foreground hover:text-foreground transition-colors {{ Route::is('cookies') ? 'active text-foreground' : '' }}" href="{{ route('cookies') }}">Cookie Policy</a></li>
          <li data-tsd-source="/src/components/site/Footer.tsx:72:11"><a data-tsd-source="/src/components/site/Footer.tsx:73:13" class="text-sm text-muted-foreground hover:text-foreground transition-colors {{ Route::is('disclaimer') ? 'active text-foreground' : '' }}" href="{{ route('disclaimer') }}">Disclaimer</a></li>
        </ul>
      </div>
    </div>
    <div class="mt-12 pt-6 border-t border-border flex flex-col md:flex-row items-start md:items-center justify-between gap-4" data-tsd-source="/src/components/site/Footer.tsx:49:9">
      <p class="text-xs text-muted-foreground" data-tsd-source="/src/components/site/Footer.tsx:50:11">&copy; 2026 ProPresence Digital. All rights reserved.</p>
      <div class="flex items-center gap-2 text-muted-foreground" data-tsd-source="/src/components/site/Footer.tsx:53:11">
        <!-- LinkedIn link hidden temporarily -->
        <!-- <a href="#" aria-label="Social link" class="size-9 grid place-items-center rounded-md border border-border hover:text-foreground hover:border-brand transition-colors" data-tsd-source="/src/components/site/Footer.tsx:55:15"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-linkedin size-4" aria-hidden="true" data-tsd-source="/src/components/site/Footer.tsx:56:17"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect width="4" height="12" x="2" y="9"></rect><circle cx="4" cy="4" r="2"></circle></svg></a> -->
        <!-- Twitter link hidden temporarily -->
        <!-- <a href="#" aria-label="Social link" class="size-9 grid place-items-center rounded-md border border-border hover:text-foreground hover:border-brand transition-colors" data-tsd-source="/src/components/site/Footer.tsx:55:15"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter size-4" aria-hidden="true" data-tsd-source="/src/components/site/Footer.tsx:56:17"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path></svg></a> -->
        
        <a href="https://www.instagram.com/propresence.digital/" target="_blank" rel="noopener noreferrer" aria-label="Social link" class="size-9 grid place-items-center rounded-md border border-border hover:text-foreground hover:border-brand transition-colors" data-tsd-source="/src/components/site/Footer.tsx:55:15"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram size-4" aria-hidden="true" data-tsd-source="/src/components/site/Footer.tsx:56:17"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
        
        <a href="https://www.facebook.com/propresencedigital" target="_blank" rel="noopener noreferrer" aria-label="Social link" class="size-9 grid place-items-center rounded-md border border-border hover:text-foreground hover:border-brand transition-colors" data-tsd-source="/src/components/site/Footer.tsx:55:15"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook size-4" aria-hidden="true" data-tsd-source="/src/components/site/Footer.tsx:56:17"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>
        
        <!-- YouTube link hidden temporarily -->
        <!-- <a href="#" aria-label="Social link" class="size-9 grid place-items-center rounded-md border border-border hover:text-foreground hover:border-brand transition-colors" data-tsd-source="/src/components/site/Footer.tsx:55:15"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube size-4" aria-hidden="true" data-tsd-source="/src/components/site/Footer.tsx:56:17"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"></path><path d="m10 15 5-3-5-3z"></path></svg></a> -->
      </div>
    </div>
  </div>
</footer>
