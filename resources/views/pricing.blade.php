@extends('layouts.app')

@section('title', 'Pricing | ProPresence Digital')
@section('meta_description', 'Transparent pricing across Foundational, Growth and Enterprise engagements.')

@section('content')
<section class="hero"><div class="container"><span class="eyebrow">Pricing</span><h1>Transparent packages. Custom outcomes.</h1><p class="lead">Start with a package or design a bespoke engagement with our strategy team.</p></div></section>
<section class="block"><div class="container"><div class="grid cols-3"><div class="card price-card"><h3>Foundational</h3><div class="price">$4,500 <small>/ one-time</small></div><ul><li>Brand identity kit</li><li>Marketing website (up to 8 pages)</li><li>SEO foundations</li><li>Analytics setup</li></ul><a href="{{ route('contact') }}" class="btn btn-ghost" style="margin-top:20px">Get started</a></div><div class="card price-card featured"><span class="badge">Most Popular</span><h3>Growth Retainer</h3><div class="price">$8,500 <small>/ per month</small></div><ul><li>Paid media management</li><li>CRO experiments</li><li>Content & lifecycle</li><li>Bi-weekly reporting</li></ul><a href="{{ route('contact') }}" class="btn btn-primary" style="margin-top:20px">Get started</a></div><div class="card price-card"><h3>Enterprise</h3><div class="price">Custom <small>/ quarterly</small></div><ul><li>Fractional CMO</li><li>Platform builds</li><li>RevOps & data</li><li>Executive workshops</li></ul><a href="{{ route('contact') }}" class="btn btn-ghost" style="margin-top:20px">Get started</a></div></div></div></section>
<section class="block"><div class="container center"><h2>Need something bespoke?</h2><p class="muted">We tailor scope to the outcome, not the other way around.</p><a class="btn btn-primary" href="{{ route('contact') }}">Request a Custom Quote</a></div></section>
@endsection
