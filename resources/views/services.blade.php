@extends('layouts.app')

@section('title', 'Services | ProPresence Digital')
@section('meta_description', 'Explore ProPresence Digital\'s five service pillars: Foundational, Launch, Growth, Enterprise and Creator Economy.')

@section('content')
<section class="hero">
  <div class="container">
    <span class="eyebrow">Services</span>
    <h1>Five pillars. One growth operating system.</h1>
    <p class="lead" style="max-width:720px">Whether you're pre-launch or post-Series B, we plug into the right pillar and stay accountable to outcomes.</p>
  </div>
</section>
<section class="block">
  <div class="container">
    <div class="grid cols-3"><div class="card"><div class="icon">01</div><h3>Foundational</h3><p>The base your growth compounds on.</p><ul><li>Brand strategy & identity</li><li>Website design & development</li><li>SEO foundations & technical audits</li><li>Positioning & messaging</li></ul></div><div class="card"><div class="icon">02</div><h3>Launch</h3><p>Go from stealth to signal in weeks.</p><ul><li>Go-to-market strategy</li><li>Launch campaigns & PR</li><li>Content engines</li><li>Community activation</li></ul></div><div class="card"><div class="icon">03</div><h3>Growth</h3><p>Predictable, attributable, compounding.</p><ul><li>Paid media (Meta, Google, LinkedIn)</li><li>CRO & funnel optimization</li><li>Lifecycle & retention</li><li>Analytics & attribution</li></ul></div><div class="card"><div class="icon">04</div><h3>Enterprise</h3><p>Transformation for scaled operators.</p><ul><li>Digital transformation programs</li><li>Platform & product builds</li><li>RevOps & data infrastructure</li><li>Fractional CMO engagements</li></ul></div><div class="card"><div class="icon">05</div><h3>Creator Economy</h3><p>Turn presence into a business.</p><ul><li>Personal brand systems</li><li>Content operations</li><li>Monetization & product launches</li><li>Influencer partnerships</li></ul></div></div>
  </div>
</section>
<section class="block">
  <div class="container center">
    <h2>Not sure which pillar fits?</h2>
    <p class="muted">Book a diagnostic — we'll tell you honestly, even if it's not us.</p>
    <a href="{{ route('contact') }}" class="btn btn-primary">Talk to Strategy</a>
  </div>
</section>
@endsection
