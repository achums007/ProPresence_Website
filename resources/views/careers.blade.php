@extends('layouts.app')

@section('title', 'Careers | ProPresence Digital')
@section('meta_description', 'Join a senior-only, craft-obsessed digital growth team.')

@section('content')
<section class="hero"><div class="container"><span class="eyebrow">Careers</span><h1>Build the growth firm we always wanted to work at.</h1><p class="lead">Senior-only. Craft-obsessed. Outcome-accountable.</p></div></section>
<section class="block"><div class="container"><div class="grid cols-2"><div class="card"><span class="tag">Design</span><span class="tag">Remote</span><h3>Senior Brand Designer</h3><p>Senior-only team. Product-grade craft. Real ownership.</p><a href="{{ route('contact') }}">Apply →</a></div><div class="card"><span class="tag">Strategy</span><span class="tag">Hybrid</span><h3>Growth Strategist</h3><p>Senior-only team. Product-grade craft. Real ownership.</p><a href="{{ route('contact') }}">Apply →</a></div><div class="card"><span class="tag">Engineering</span><span class="tag">Remote</span><h3>Full-Stack Engineer</h3><p>Senior-only team. Product-grade craft. Real ownership.</p><a href="{{ route('contact') }}">Apply →</a></div><div class="card"><span class="tag">Growth</span><span class="tag">Remote</span><h3>Performance Marketing Lead</h3><p>Senior-only team. Product-grade craft. Real ownership.</p><a href="{{ route('contact') }}">Apply →</a></div></div></div></section>
@endsection
