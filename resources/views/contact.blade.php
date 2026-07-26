@extends('layouts.app')

@section('title', 'Contact | ProPresence Digital')
@section('meta_description', 'Get in touch with ProPresence Digital\'s senior strategy team.')

@section('content')
<section class="hero"><div class="container"><span class="eyebrow">Contact</span><h1>Let's talk about your next growth chapter.</h1><p class="lead">Share a few details and a senior strategist will reply within one business day.</p></div></section>
<section class="block"><div class="container two-col">
  <form class="form" data-contact>
    <div><label>Full name</label><input required placeholder="Jane Doe" /></div>
    <div><label>Work email</label><input type="email" required placeholder="jane@company.com" /></div>
    <div><label>Company</label><input placeholder="Company name" /></div>
    <div><label>Interested in</label>
      <select><option>Foundational</option><option>Launch</option><option>Growth</option><option>Enterprise</option><option>Creator Economy</option></select>
    </div>
    <div><label>Project details</label><textarea placeholder="Tell us about goals, timeline and budget."></textarea></div>
    <button class="btn btn-primary" type="submit">Send message</button>
  </form>
  <div>
    <h3>Direct channels</h3>
    <p>Email: hello@propresence.digital<br />WhatsApp: +1 (000) 000-0000<br />Hours: Mon–Fri, 9am–6pm</p>
    <h3 style="margin-top:24px">Offices</h3>
    <p>Remote-first. Team in New York, London and Bangalore.</p>
  </div>
</div></section>
@endsection
