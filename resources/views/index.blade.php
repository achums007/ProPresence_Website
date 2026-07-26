@extends('layouts.app')

@section('title', 'Enterprise Digital Growth Agency | ProPresence Digital')
@section('meta_description', 'ProPresence Digital is an enterprise-grade digital agency engineering brands, websites and growth systems for ambitious companies.')

@section('content')
<section class="hero">
  <div class="container hero-grid">
    <div>
      <span class="eyebrow">Enterprise Digital Growth Partner</span>
      <h1>Engineered presence. Predictable growth.</h1>
      <p class="lead">ProPresence Digital builds the systems, brands and campaigns that turn ambitious companies into category leaders — with the operating rigor of a top product team.</p>
      <div class="hero-actions">
        <a href="{{ route('contact') }}" class="btn btn-primary">Book a Strategy Call</a>
        <a href="{{ route('portfolio') }}" class="btn btn-ghost">View Case Studies</a>
      </div>
    </div>
    <div class="mockup" aria-hidden="true">
      <div class="mockup-head"><span></span><span></span><span></span></div>
      <div class="metric-grid">
        <div class="metric"><small>Revenue</small><strong>$4.82M</strong><span class="up">▲ 38.4%</span></div>
        <div class="metric"><small>Pipeline</small><strong>1,284</strong><span class="up">▲ 22.1%</span></div>
        <div class="metric"><small>ROAS</small><strong>6.7x</strong><span class="up">▲ 12.9%</span></div>
      </div>
      <div class="chart"></div>
    </div>
  </div>
</section>

<section class="block">
  <div class="container">
    <div class="trust">
      <div class="stat"><strong>200+</strong><span>Brands Scaled</span></div>
      <div class="stat"><strong>$120M+</strong><span>Revenue Influenced</span></div>
      <div class="stat"><strong>18</strong><span>Industries Served</span></div>
      <div class="stat"><strong>97%</strong><span>Client Retention</span></div>
    </div>
  </div>
</section>

<section class="block">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Who We Are</span>
      <h2>A senior team, engineered like a product org.</h2>
      <p>We combine strategy, design, engineering and performance under one accountable roof — so growth stops being a guess.</p>
    </div>
    <div class="grid cols-3">
      <div class="card"><div class="icon">S</div><h3>Strategy-Led</h3><p>Every engagement starts with market, ICP and unit-economics clarity.</p></div>
      <div class="card"><div class="icon">D</div><h3>Design-Obsessed</h3><p>Brand systems and product surfaces held to Vercel/Linear standards.</p></div>
      <div class="card"><div class="icon">P</div><h3>Performance-Native</h3><p>Attribution, funnels and dashboards you can actually operate against.</p></div>
    </div>
  </div>
</section>

<section class="block">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Service Pillars</span>
      <h2>Five pillars, one growth operating system.</h2>
    </div>
    <div class="grid cols-3">
      <div class="card"><div class="icon">01</div><h3>Foundational</h3><p>Brand identity, positioning, websites, SEO foundations.</p></div>
      <div class="card"><div class="icon">02</div><h3>Launch</h3><p>Go-to-market, PR, content engines, launch campaigns.</p></div>
      <div class="card"><div class="icon">03</div><h3>Growth</h3><p>Paid media, CRO, lifecycle, retention, analytics.</p></div>
      <div class="card"><div class="icon">04</div><h3>Enterprise</h3><p>Digital transformation, platform builds, RevOps.</p></div>
      <div class="card"><div class="icon">05</div><h3>Creator Economy</h3><p>Personal brands, influencer ops, monetization.</p></div>
      <div class="card"><div class="icon">→</div><h3>Explore all</h3><p>See detailed offerings across every pillar.</p><p><a href="{{ route('services') }}">View services →</a></p></div>
    </div>
  </div>
</section>

<section class="block">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Our Process</span>
      <h2>A five-step system, not a black box.</h2>
    </div>
    <div class="steps">
      <div class="step"><div><h3>Discover</h3><p>Deep audit of business, market, funnel and analytics.</p></div></div>
      <div class="step"><div><h3>Strategize</h3><p>Roadmap, positioning and measurable KPIs.</p></div></div>
      <div class="step"><div><h3>Build</h3><p>Design, engineering and content systems shipped.</p></div></div>
      <div class="step"><div><h3>Launch</h3><p>Campaigns, channels and attribution wired live.</p></div></div>
      <div class="step"><div><h3>Optimize</h3><p>Weekly experiments and quarterly business reviews.</p></div></div>
    </div>
  </div>
</section>

<section class="block">
  <div class="container center">
    <span class="eyebrow">Ready?</span>
    <h2>Let's build a growth engine your board notices.</h2>
    <p class="muted" style="max-width:560px;margin:0 auto 28px">Book a 30-minute strategy call. We'll come with a diagnostic, not a pitch.</p>
    <a href="{{ route('contact') }}" class="btn btn-primary">Book a Strategy Call</a>
  </div>
</section>
@endsection
