@extends('layouts.app')

@section('title', 'Contact — ProPresence Digital')
@section('meta_description', 'Book a free consultation, request a proposal or start a project with ProPresence Digital.')

@section('content')
    <!--$-->
    <div class="bg-gradient-hero border-b border-border" data-tsd-source="/src/routes/contact.tsx:54:7">
        <div class="container-page py-20 md:py-24 max-w-3xl" data-tsd-source="/src/routes/contact.tsx:55:9">
            <h1 class="text-4xl md:text-6xl font-bold tracking-tight" data-tsd-source="/src/routes/contact.tsx:56:11">Let's
                <span class="text-gradient" data-tsd-source="/src/routes/contact.tsx:56:79">talk.</span></h1>
            <p class="mt-4 text-lg text-muted-foreground" data-tsd-source="/src/routes/contact.tsx:57:11">Book a free
                consultation, request a proposal, or just say hello. We reply within one business day.</p>
        </div>
    </div>
    <section class="section" data-tsd-source="/src/components/site/Section.tsx:19:5">
        <div class="container-page" data-tsd-source="/src/components/site/Section.tsx:20:7">
            <div class="grid lg:grid-cols-5 gap-10" data-tsd-source="/src/routes/contact.tsx:62:9">
                <div class="lg:col-span-3" data-tsd-source="/src/routes/contact.tsx:63:11">
                    <form class="rounded-2xl border border-border bg-card p-6 md:p-8 space-y-4"
                        data-tsd-source="/src/routes/contact.tsx:64:13">
                        <div class="grid sm:grid-cols-2 gap-4" data-tsd-source="/src/routes/contact.tsx:65:15">
                            <div data-tsd-source="/src/routes/contact.tsx:124:5"><label
                                    class="text-xs font-semibold text-muted-foreground uppercase tracking-wider"
                                    data-tsd-source="/src/routes/contact.tsx:119:10">Full name<span class="text-brand"
                                        data-tsd-source="/src/routes/contact.tsx:125:34"> *</span></label><input type="text"
                                    required=""
                                    class="mt-1.5 w-full rounded-xl border border-input bg-background px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-ring/40"
                                    data-tsd-source="/src/routes/contact.tsx:126:7" name="name"></div>
                            <div data-tsd-source="/src/routes/contact.tsx:124:5"><label
                                    class="text-xs font-semibold text-muted-foreground uppercase tracking-wider"
                                    data-tsd-source="/src/routes/contact.tsx:119:10">Business name</label><input type="text"
                                    class="mt-1.5 w-full rounded-xl border border-input bg-background px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-ring/40"
                                    data-tsd-source="/src/routes/contact.tsx:126:7" name="business"></div>
                        </div>
                        <div class="grid sm:grid-cols-2 gap-4" data-tsd-source="/src/routes/contact.tsx:69:15">
                            <div data-tsd-source="/src/routes/contact.tsx:124:5"><label
                                    class="text-xs font-semibold text-muted-foreground uppercase tracking-wider"
                                    data-tsd-source="/src/routes/contact.tsx:119:10">Email<span class="text-brand"
                                        data-tsd-source="/src/routes/contact.tsx:125:34"> *</span></label><input
                                    type="email" required=""
                                    class="mt-1.5 w-full rounded-xl border border-input bg-background px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-ring/40"
                                    data-tsd-source="/src/routes/contact.tsx:126:7" name="email"></div>
                            <div data-tsd-source="/src/routes/contact.tsx:124:5"><label
                                    class="text-xs font-semibold text-muted-foreground uppercase tracking-wider"
                                    data-tsd-source="/src/routes/contact.tsx:119:10">Phone</label><input type="text"
                                    class="mt-1.5 w-full rounded-xl border border-input bg-background px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-ring/40"
                                    data-tsd-source="/src/routes/contact.tsx:126:7" name="phone"></div>
                        </div>
                        <div class="grid sm:grid-cols-4 gap-4" data-tsd-source="/src/routes/contact.tsx:73:15">
                            <div data-tsd-source="/src/routes/contact.tsx:139:5"><label
                                    class="text-xs font-semibold text-muted-foreground uppercase tracking-wider"
                                    data-tsd-source="/src/routes/contact.tsx:119:10">Service</label><select name="service"
                                    class="mt-1.5 w-full rounded-xl border border-input bg-background px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-ring/40"
                                    data-tsd-source="/src/routes/contact.tsx:141:7">
                                    <option value="" data-tsd-source="/src/routes/contact.tsx:142:9">Select…</option>
                                    <option value="Digital Marketing" data-tsd-source="/src/routes/contact.tsx:143:29">
                                        Digital Marketing</option>
                                    <option value="Web Development" data-tsd-source="/src/routes/contact.tsx:143:29">Web
                                        Development</option>
                                    <option value="Software Development" data-tsd-source="/src/routes/contact.tsx:143:29">
                                        Software Development</option>
                                    <option value="Branding" data-tsd-source="/src/routes/contact.tsx:143:29">Branding
                                    </option>
                                    <option value="Cloud &amp; Infrastructure"
                                        data-tsd-source="/src/routes/contact.tsx:143:29">Cloud &amp; Infrastructure</option>
                                    <option value="Consulting" data-tsd-source="/src/routes/contact.tsx:143:29">Consulting
                                    </option>
                                    <option value="Other" data-tsd-source="/src/routes/contact.tsx:143:29">Other</option>
                                </select></div>
                            <!-- <div data-tsd-source="/src/routes/contact.tsx:139:5"><label
                                    class="text-xs font-semibold text-muted-foreground uppercase tracking-wider"
                                    data-tsd-source="/src/routes/contact.tsx:119:10">Budget</label><select name="budget"
                                    class="mt-1.5 w-full rounded-xl border border-input bg-background px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-ring/40"
                                    data-tsd-source="/src/routes/contact.tsx:141:7">
                                    <option value="" data-tsd-source="/src/routes/contact.tsx:142:9">Select…</option>
                                    <option value="&lt; ₹50K" data-tsd-source="/src/routes/contact.tsx:143:29">&lt; ₹50K
                                    </option>
                                    <option value="₹50K – ₹2L" data-tsd-source="/src/routes/contact.tsx:143:29">₹50K – ₹2L
                                    </option>
                                    <option value="₹2L – ₹10L" data-tsd-source="/src/routes/contact.tsx:143:29">₹2L – ₹10L
                                    </option>
                                    <option value="₹10L+" data-tsd-source="/src/routes/contact.tsx:143:29">₹10L+</option>
                                </select></div> -->
                        </div>
                        <div data-tsd-source="/src/routes/contact.tsx:77:15"><label
                                class="text-xs font-semibold text-muted-foreground uppercase tracking-wider"
                                data-tsd-source="/src/routes/contact.tsx:119:10">Project details <span class="text-brand"
                                    data-tsd-source="/src/routes/contact.tsx:78:40">*</span></label><textarea name="details"
                                rows="5" required="" maxlength="2000"
                                class="mt-1.5 w-full rounded-xl border border-input bg-background px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-ring/40"
                                placeholder="Tell us about your goals, timeline and what success looks like."
                                data-tsd-source="/src/routes/contact.tsx:79:17"></textarea></div><button type="submit"
                            class="btn-primary w-full sm:w-auto" data-tsd-source="/src/routes/contact.tsx:90:15"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-send size-4" aria-hidden="true"
                                data-tsd-source="/src/routes/contact.tsx:91:17">
                                <path
                                    d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z">
                                </path>
                                <path d="m21.854 2.147-10.94 10.939"></path>
                            </svg> Book Consultation</button>
                    </form>
                </div>
                <aside class="lg:col-span-2 space-y-4" data-tsd-source="/src/routes/contact.tsx:103:11">
                    <div class="rounded-2xl border border-border bg-card p-5 flex items-start gap-4"
                        data-tsd-source="/src/routes/contact.tsx:151:5">
                        <div class="size-10 rounded-lg bg-gradient-brand grid place-items-center text-white"
                            data-tsd-source="/src/routes/contact.tsx:152:7"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-mail size-5" aria-hidden="true"
                                data-tsd-source="/src/routes/contact.tsx:152:96">
                                <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path>
                                <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                            </svg></div>
                        <div data-tsd-source="/src/routes/contact.tsx:153:7">
                            <div class="text-xs uppercase tracking-wider text-muted-foreground font-semibold"
                                data-tsd-source="/src/routes/contact.tsx:154:9">Email</div>
                            <div class="mt-1 font-medium" data-tsd-source="/src/routes/contact.tsx:155:9">
                                propresencedigital@gmail.com</div>
                        </div>
                    </div>
                    <div class="rounded-2xl border border-border bg-card p-5 flex items-start gap-4"
                        data-tsd-source="/src/routes/contact.tsx:151:5">
                        <div class="size-10 rounded-lg bg-gradient-brand grid place-items-center text-white"
                            data-tsd-source="/src/routes/contact.tsx:152:7"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-phone size-5" aria-hidden="true"
                                data-tsd-source="/src/routes/contact.tsx:152:96">
                                <path
                                    d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384">
                                </path>
                            </svg></div>
                        <div data-tsd-source="/src/routes/contact.tsx:153:7">
                            <div class="text-xs uppercase tracking-wider text-muted-foreground font-semibold"
                                data-tsd-source="/src/routes/contact.tsx:154:9">Phone</div>
                            <div class="mt-1 font-medium" data-tsd-source="/src/routes/contact.tsx:155:9">+91 00000 00000
                            </div>
                        </div>
                    </div>
                    <div class="rounded-2xl border border-border bg-card p-5 flex items-start gap-4"
                        data-tsd-source="/src/routes/contact.tsx:151:5">
                        <div class="size-10 rounded-lg bg-gradient-brand grid place-items-center text-white"
                            data-tsd-source="/src/routes/contact.tsx:152:7"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-map-pin size-5" aria-hidden="true"
                                data-tsd-source="/src/routes/contact.tsx:152:96">
                                <path
                                    d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                </path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg></div>
                        <div data-tsd-source="/src/routes/contact.tsx:153:7">
                            <div class="text-xs uppercase tracking-wider text-muted-foreground font-semibold"
                                data-tsd-source="/src/routes/contact.tsx:154:9">Office</div>
                            <div class="mt-1 font-medium" data-tsd-source="/src/routes/contact.tsx:155:9">Kerala, India
                            </div>
                        </div>
                    </div>
                    <div class="rounded-2xl border border-border bg-card p-5 flex items-start gap-4"
                        data-tsd-source="/src/routes/contact.tsx:151:5">
                        <div class="size-10 rounded-lg bg-gradient-brand grid place-items-center text-white"
                            data-tsd-source="/src/routes/contact.tsx:152:7"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-clock size-5" aria-hidden="true"
                                data-tsd-source="/src/routes/contact.tsx:152:96">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 6v6l4 2"></path>
                            </svg></div>
                        <div data-tsd-source="/src/routes/contact.tsx:153:7">
                            <div class="text-xs uppercase tracking-wider text-muted-foreground font-semibold"
                                data-tsd-source="/src/routes/contact.tsx:154:9">Business hours</div>
                            <div class="mt-1 font-medium" data-tsd-source="/src/routes/contact.tsx:155:9">Mon – Sat · 9:00 –
                                19:00 IST</div>
                        </div>
                    </div>
                    <!-- <div class="rounded-2xl border border-border overflow-hidden bg-muted h-56 grid place-items-center text-muted-foreground text-sm"
                        data-tsd-source="/src/routes/contact.tsx:108:13">Map placeholder</div> -->
                </aside>
            </div>
        </div>
    </section><!--/$-->
@endsection