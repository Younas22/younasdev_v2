@extends('common.layout')
@section('content')


    <!-- ░░░ 1. HERO ░░░ -->
    <section id="home" class="bg-black" style="min-height:100vh;padding-top:80px;">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 items-center" style="min-height:calc(100vh - 80px);">

                <!-- ── LEFT: 9 cols ── -->
                <div class="lg:col-span-8 space-y-3 py-10 lg:py-0 lg:pr-12">

                    <!-- Badge -->
                    <div class="proof-badge w-fit">
                        <span class="w-2 h-2 rounded-full pulse-dot" style="background:#B1E78E;"></span>
                        Available for New Projects
                    </div>

                    <!-- Name + Tagline -->
                    <div>
                        <h1 class="text-white font-black" style="font-size:clamp(2.6rem,5vw,3.8rem);letter-spacing:-0.05em;line-height:1.02;margin-bottom:-5px;">
                            Younas Dev
                        </h1>
                        <p style="color:#B1E78E;font-size:.7rem;font-weight:700;letter-spacing:.14em;text-transform:uppercase;">
                            PHP Laravel Developer &nbsp;·&nbsp; Travel Tech Expert &nbsp;·&nbsp; SaaS
                        </p>
                    </div>

                    <!-- Bio -->
                    <div class="hero-bio space-y-2" style="font-size:.92rem;line-height:1.2;color:white;">
                        <p>
                            Younas Dev is a Pakistan-based Software Engineer, Travel Tech Expert, and SaaS founder with
                            <span style="color:#B1E78E;font-weight:600;">6+ years</span> of experience building revenue-driven digital systems.
                            Specializes in <span style="color:#B1E78E;font-weight:600;">high-converting travel booking platforms</span>,
                            scalable <span style="color:#B1E78E;font-weight:600;">Laravel</span> applications, and
                            <span style="color:#B1E78E;font-weight:600;">Local SEO</span> strategies that generate real
                            <span style="color:#B1E78E;font-weight:600;">bookings, leads, and business growth</span>.
                        </p>
                        <p>
                            Worked with <span style="color:#B1E78E;font-weight:600;">70+ clients</span> worldwide and generated over
                            <span style="color:#B1E78E;font-weight:600;">10,000+ leads</span>. Built
                            <a href="https://customernearme.com/" target="_blank" style="color:#B1E78E;font-weight:700;text-decoration:none;">CustomerNearMe</a>
                            — a SaaS used by <span style="color:#B1E78E;font-weight:600;">350+ freelancers</span> to find and close clients faster —
                            and authored the
                            <a href="https://younasphere34.gumroad.com/l/8-ClientsBlueprint" target="_blank" style="color:#B1E78E;font-weight:700;text-decoration:none;">8 Clients Blueprint</a>,
                            a practical system for consistent client acquisition.
                        </p>
                        <p>
                            Freelancing experience on
                            <a href="https://www.fiverr.com/" target="_blank" style="color:#B1E78E;font-weight:600;text-decoration:none;">Fiverr</a> and
                            <a href="https://www.upwork.com/" target="_blank" style="color:#B1E78E;font-weight:600;text-decoration:none;">Upwork</a>,
                            delivering projects in SaaS, travel tech, and automation.
                            Focused on building systems that generate
                            <span style="color:#B1E78E;font-weight:600;">clients, bookings, and revenue</span> — not just websites.
                        </p>
                    </div>

                    <!-- Companies -->
                    <div>
                        <p style="font-size:.68rem;font-weight:700;text-transform:uppercase;letter-spacing:.14em;color:#374151;margin-bottom:8px;">Worked with</p>
                        <div class="flex flex-wrap gap-2">
                            <a href="https://phptravels.com/" target="_blank"
                               style="display:inline-flex;align-items:center;gap:5px;padding:5px 12px;border-radius:6px;background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.08);color:#9ca3af;font-size:.8rem;font-weight:500;text-decoration:none;transition:color .2s,border-color .2s;"
                               onmouseover="this.style.color='#B1E78E';this.style.borderColor='rgba(177,231,142,0.3)'" onmouseout="this.style.color='#9ca3af';this.style.borderColor='rgba(255,255,255,0.08)'">
                                <i class="fas fa-plane-departure" style="font-size:.65rem;color:#B1E78E;"></i> PHPTRAVELS
                            </a>
                            <a href="https://growthaccess.ae/" target="_blank"
                               style="display:inline-flex;align-items:center;gap:5px;padding:5px 12px;border-radius:6px;background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.08);color:#9ca3af;font-size:.8rem;font-weight:500;text-decoration:none;transition:color .2s,border-color .2s;"
                               onmouseover="this.style.color='#B1E78E';this.style.borderColor='rgba(177,231,142,0.3)'" onmouseout="this.style.color='#9ca3af';this.style.borderColor='rgba(255,255,255,0.08)'">
                                <i class="fas fa-chart-line" style="font-size:.65rem;color:#B1E78E;"></i> Growth Access
                            </a>
                            <a href="https://avantcoretech.com/" target="_blank"
                               style="display:inline-flex;align-items:center;gap:5px;padding:5px 12px;border-radius:6px;background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.08);color:#9ca3af;font-size:.8rem;font-weight:500;text-decoration:none;transition:color .2s,border-color .2s;"
                               onmouseover="this.style.color='#B1E78E';this.style.borderColor='rgba(177,231,142,0.3)'" onmouseout="this.style.color='#9ca3af';this.style.borderColor='rgba(255,255,255,0.08)'">
                                <i class="fas fa-microchip" style="font-size:.65rem;color:#B1E78E;"></i> Avantcore Tech
                            </a>
                        </div>
                    </div>

                    <!-- CTAs -->
                    <div class="flex flex-wrap gap-3">
                        <a href="https://wa.me/923460820722" target="_blank" class="btn-brand" style="padding:13px 24px;font-size:.93rem;justify-content:center;flex:1;min-width:140px;">
                            <i class="fab fa-whatsapp text-lg"></i> Hire Me
                        </a>
                        <a href="https://calendly.com/younasdev/strategy-call" target="_blank" class="btn-outline" style="padding:11px 22px;font-size:.93rem;justify-content:center;flex:1;min-width:140px;">
                            <i class="fas fa-calendar-check"></i> Book a Free Call
                        </a>
                    </div>

                    <!-- Social Links -->
                    <div class="flex flex-wrap items-center gap-y-2">
                        <span style="font-size:.68rem;font-weight:700;text-transform:uppercase;letter-spacing:.14em;color:#374151;margin-right:10px;">Find me on</span>
                        <a href="https://www.linkedin.com/in/younasdev/" target="_blank" class="social-link"><i class="fab fa-linkedin-in"></i> LinkedIn</a>
                        <span style="color:#1f2937;padding:0 7px;">·</span>
                        <a href="https://x.com/YounasDev" target="_blank" class="social-link"><i class="fab fa-x-twitter"></i> Twitter</a>
                        <span style="color:#1f2937;padding:0 7px;">·</span>
                        <a href="https://www.facebook.com/YounasDev" target="_blank" class="social-link"><i class="fab fa-facebook-f"></i> Facebook</a>
                        <span style="color:#1f2937;padding:0 7px;">·</span>
                        <a href="https://www.youtube.com/@YounasDev" target="_blank" class="social-link"><i class="fab fa-youtube"></i> YouTube</a>
                        <span style="color:#1f2937;padding:0 7px;">·</span>
                        <a href="https://github.com/younas22" target="_blank" class="social-link"><i class="fab fa-github"></i> GitHub</a>
                    </div>

                    <!-- Stats -->
                    <div class="flex flex-wrap gap-0 pt-5 border-t" style="border-color:#111;">
                        <div class="text-center pr-5">
                            <div class="font-black text-white" style="font-size:1.4rem;line-height:1;">6+</div>
                            <div class="text-gray-600 mt-1" style="font-size:0.6rem;text-transform:uppercase;letter-spacing:.1em;">Years Exp</div>
                        </div>
                        <div class="w-px self-stretch mx-1" style="background:#111;"></div>
                        <div class="text-center px-5">
                            <div class="font-black text-white" style="font-size:1.4rem;line-height:1;">70+</div>
                            <div class="text-gray-600 mt-1" style="font-size:0.6rem;text-transform:uppercase;letter-spacing:.1em;">Clients</div>
                        </div>
                        <div class="w-px self-stretch mx-1" style="background:#111;"></div>
                        <div class="text-center px-5">
                            <div class="font-black text-white" style="font-size:1.4rem;line-height:1;">350+</div>
                            <div class="text-gray-600 mt-1" style="font-size:0.6rem;text-transform:uppercase;letter-spacing:.1em;">SaaS Users</div>
                        </div>
                        <div class="w-px self-stretch mx-1" style="background:#111;"></div>
                        <div class="text-center pl-5">
                            <div class="font-black" style="font-size:1.4rem;line-height:1;color:#B1E78E;">10K+</div>
                            <div class="text-gray-600 mt-1" style="font-size:0.6rem;text-transform:uppercase;letter-spacing:.1em;">Leads Generated</div>
                        </div>
                    </div>

                </div>

                <!-- ── RIGHT: 3 cols — Image ── -->
                <div class="lg:col-span-4 flex items-start justify-center lg:justify-end" style="margin-top:-80px;">
                    <div style="position:relative;width:100%;max-width:420px;">
                        <img src="{{ pub_asset('public/assets/images/personal/hero.png') }}"
                             alt="Younas Dev — PHP Laravel & Travel Tech Developer"
                             style="width:100%;max-height:calc(100vh);object-fit:contain;object-position:top center;display:block;" />
                        <div style="position:absolute;bottom:0;left:0;right:0;height:180px;
                                    background:linear-gradient(to top,#000 0%,rgba(0,0,0,0.7) 40%,transparent 100%);
                                    pointer-events:none;"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

 
<!-- ░░░ 4. CUSTOMERNEARME STORY ░░░ -->
<section id="story" class="py-16 border-t section-line" style="background:#B1E78E;">
    <div class="max-w-6xl mx-auto px-6">

        <!-- SECTION HEADLINE -->
        <div class="text-center mb-12">
            <p style="font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.18em;color:#1a1a1a;margin-bottom:14px;opacity:.6;">SaaS Tool · Lead Generation</p>
            <h2 style="font-size:clamp(1.75rem,6vw,4.8rem);font-weight:900;color:#0d0d0d;line-height:1.0;letter-spacing:-0.03em;">
                Stop Hunting Clients.<br>Let the System Find Them.
            </h2>
            <p style="color:#1c1c1c;font-size:1.05rem;margin-top:16px;max-width:560px;margin-left:auto;margin-right:auto;line-height:1.5;">
                Turn Google Maps into your personal client pipeline — real businesses, real leads, no platform fees.
            </p>
        </div>

        <div class="flex flex-col lg:flex-row items-center gap-12">

            <div class="flex-1 space-y-5">

                <div class="proof-badge w-fit" style="background:rgba(0,0,0,0.1);border-color:rgba(0,0,0,0.2);color:#0d0d0d;">
                    <span class="w-2 h-2 rounded-full" style="background:#0d0d0d;flex-shrink:0;display:inline-block;border-radius:50%;"></span>
                    My Journey · Why I Built This
                </div>

                <h2 class="text-3xl md:text-4xl font-black leading-tight" style="color:#0d0d0d;">
                    I Was Tired of Chasing Clients.<br>
                    So I Built a System Instead.
                </h2>

                <p class="leading-relaxed" style="font-size:.95rem;color:#1c1c1c;">
                    When I started freelancing, the hardest part wasn't coding — it was finding clients.
                    Cold emails, random DMs, and freelance marketplaces were unpredictable and exhausting.
                </p>

                <p class="leading-relaxed" style="font-size:.95rem;color:#1c1c1c;">
                    Every day I saw thousands of real businesses on Google Maps actively running — gyms, restaurants, agencies — all of them needing websites, SEO, and automation.
                    But there was no simple way to connect freelancers with these businesses.
                </p>

                <p class="leading-relaxed" style="font-size:.95rem;color:#1c1c1c;">
                    That's when I started building <span style="color:#0d0d0d;font-weight:700;">CustomerNearMe</span>.
                    Not as a tool… but as a system to remove uncertainty from client hunting.
                </p>

                <div class="grid grid-cols-3 gap-2 sm:gap-3">

                    <div class="text-center rounded-xl p-4" style="background:rgba(0,0,0,0.1);border:1px solid rgba(0,0,0,0.15);">
                        <div class="text-2xl font-black" style="color:#0d0d0d;">350+</div>
                        <div class="text-xs mt-1" style="color:#1c1c1c;">Freelancers Using It</div>
                    </div>

                    <div class="text-center rounded-xl p-4" style="background:rgba(0,0,0,0.1);border:1px solid rgba(0,0,0,0.15);">
                        <div class="text-2xl font-black" style="color:#0d0d0d;">10K+</div>
                        <div class="text-xs mt-1" style="color:#1c1c1c;">Real Leads Found</div>
                    </div>

                    <div class="text-center rounded-xl p-4" style="background:rgba(0,0,0,0.1);border:1px solid rgba(0,0,0,0.15);">
                        <div class="text-2xl font-black" style="color:#0d0d0d;">Live</div>
                        <div class="text-xs mt-1" style="color:#1c1c1c;">Evolving System</div>
                    </div>

                </div>

                <div class="space-y-2 text-sm" style="color:#1c1c1c;">
                    <div class="flex items-center gap-2"><i class="fas fa-check-circle" style="color:#0d0d0d;"></i> Built from my own struggle as a freelancer</div>
                    <div class="flex items-center gap-2"><i class="fas fa-check-circle" style="color:#0d0d0d;"></i> Replaces guesswork with real business data</div>
                    <div class="flex items-center gap-2"><i class="fas fa-check-circle" style="color:#0d0d0d;"></i> Helps you find clients who actually need you</div>
                    <div class="flex items-center gap-2"><i class="fas fa-check-circle" style="color:#0d0d0d;"></i> Designed for speed, simplicity, and results</div>
                </div>

                <div class="flex flex-wrap gap-3">
                    <a href="https://customernearme.com/" target="_blank"
                       style="display:inline-flex;align-items:center;gap:8px;padding:12px 24px;font-size:.95rem;background:#0d0d0d;color:#B1E78E;font-weight:700;border-radius:10px;text-decoration:none;transition:opacity .2s;"
                       onmouseover="this.style.opacity='.85'" onmouseout="this.style.opacity='1'">
                        <i class="fas fa-rocket"></i> Try the System I Built
                    </a>

                    <a href="https://wa.me/923460820722?text=Tell%20me%20your%20story%20behind%20CustomerNearMe" target="_blank"
                       style="display:inline-flex;align-items:center;gap:8px;padding:11px 22px;font-size:.92rem;background:transparent;color:#0d0d0d;font-weight:700;border-radius:10px;border:2px solid #0d0d0d;text-decoration:none;transition:opacity .2s;"
                       onmouseover="this.style.opacity='.7'" onmouseout="this.style.opacity='1'">
                        <i class="fab fa-whatsapp"></i> Ask Me Why I Built It
                    </a>
                </div>

            </div>

            <!-- Product Image -->
            <div class="flex-shrink-0 w-full lg:w-96">
                <img src="{{ pub_asset('public/assets/images/personal/customernearme.jpg') }}"
                     alt="CustomerNearMe — SaaS by Younas Dev"
                     class="rounded-2xl w-full object-cover"
                     style="border:2px solid rgba(0,0,0,0.2);" />
            </div>

        </div>
    </div>
</section>

<!-- ░░░ 5. 8 CLIENTS BLUEPRINT — PREMIUM ░░░ -->
<section id="blueprint" class="blueprint-section">
    <div class="max-w-6xl mx-auto px-6">

        <!-- SECTION HEADLINE -->
        <div class="text-center mb-10">
            <p style="font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.18em;color:#6b7280;margin-bottom:14px;">Direct Client Hunting · Blueprint</p>
            <h2 style="font-size:clamp(1.75rem,6vw,4.8rem);font-weight:900;color:#fff;line-height:1.0;letter-spacing:-0.03em;">
                8 Clients in 30 Days.<br><span style="color:#B1E78E;">One System. Zero Platforms.</span>
            </h2>
            <p style="color:#9ca3af;font-size:1.05rem;margin-top:16px;max-width:560px;margin-left:auto;margin-right:auto;line-height:1.5;">
                A proven step-by-step guide to land consistent clients through direct outreach — no Fiverr, no Upwork, no cold spam.
            </p>
        </div>

        <!-- COUNTDOWN — above hero -->
        <div class="bp-pricing-top" style="flex-direction:column;align-items:center;gap:8px;margin-bottom:24px;">
            <div class="bp-timer-label">
                <i class="fas fa-fire" style="color:#f87171;"></i>
                Today only deal — offer expires in:
            </div>
            <div class="bp-countdown">
                <div class="bp-countdown-unit">
                    <div class="bp-countdown-num" id="bp-hours2">06</div>
                    <div class="bp-countdown-label">HRS</div>
                </div>
                <div class="bp-countdown-sep">:</div>
                <div class="bp-countdown-unit">
                    <div class="bp-countdown-num" id="bp-mins2">44</div>
                    <div class="bp-countdown-label">MIN</div>
                </div>
                <div class="bp-countdown-sep">:</div>
                <div class="bp-countdown-unit">
                    <div class="bp-countdown-num bp-countdown-num--green" id="bp-secs2">10</div>
                    <div class="bp-countdown-label">SEC</div>
                </div>
            </div>
        </div>

        <!-- TOP STORY — CENTERED -->
        <div class="blueprint-hero">
            <div class="proof-badge mx-auto mb-6" style="width:fit-content;">
                <span class="w-2 h-2 rounded-full pulse-dot" style="background:#B1E78E;"></span>
                My Personal System · Built From Failure
            </div>
            <h2 class="blueprint-title">
                I Was <span class="bp-highlight">Struggling</span> to Get <span class="bp-highlight">Clients</span>…<br>
                Until I Built This <span class="bp-highlight">System</span>
            </h2>
            <p class="blueprint-subtitle">
                When I lost my job in 2022, I thought freelancing would be easy. I joined Fiverr, Upwork, sent proposals… but nothing worked. The problem was simple — no <span class="bp-highlight">system</span>. After months of testing and <span class="bp-highlight">failure</span>, I discovered a repeatable method. I packaged it into a simple guide anyone can follow.
            </p>
        </div>

        <!-- STATS ROW -->
        <div class="bp-stats-row">
            <div class="bp-stat-card">
                <div class="bp-stat-number">300+</div>
                <div class="bp-stat-label">Freelancers Using It</div>
            </div>
            <div class="bp-stat-card">
                <div class="bp-stat-number">50+</div>
                <div class="bp-stat-label">Real Reviews</div>
            </div>
            <div class="bp-stat-card bp-stat-card--accent">
                <div class="bp-stat-number bp-stat-number--green">5.0</div>
                <div class="bp-stat-label">Average Rating</div>
            </div>
        </div>

        <!-- FORMULA INFOGRAPHIC — DASHBOARD WIDGET -->
        <div class="bpf-wrapper">

            <!-- SECTION 1: HEADER -->
            <div class="bpf-header">
                <h3 class="bpf-main-title">8 Clients in a Month</h3>
                <p class="bpf-sub-title">The Math Behind the System</p>
            </div>

            <!-- SECTION 2: FORMULA FLOW -->
            <div class="bpf-formula">
                <div class="bpf-pill">
                    <span class="bpf-pill-val">20/day</span>
                    <span class="bpf-pill-lbl">emails sent</span>
                </div>
                <span class="bpf-op">×</span>
                <div class="bpf-pill">
                    <span class="bpf-pill-val">20 days</span>
                    <span class="bpf-pill-lbl">consistency</span>
                </div>
                <span class="bpf-op">→</span>
                <div class="bpf-pill">
                    <span class="bpf-pill-val">400</span>
                    <span class="bpf-pill-lbl">total outreach</span>
                </div>
                <span class="bpf-op">→</span>
                <div class="bpf-pill">
                    <span class="bpf-pill-val">40</span>
                    <span class="bpf-pill-lbl">replies</span>
                </div>
                <span class="bpf-op">→</span>
                <div class="bpf-pill bpf-pill--result">
                    <span class="bpf-pill-val bpf-pill-val--result">8 Clients</span>
                    <span class="bpf-pill-lbl">guaranteed</span>
                </div>
            </div>
            <p class="bpf-caption">Simple math. Predictable results.</p>

            <!-- DIVIDER -->
            <div class="bpf-divider"></div>

            <!-- SECTION 3: HOW IT WORKS — ACRONYM CARDS -->
            <p class="bpf-method-heading">How This System Actually Works</p>
            <div class="bpf-method-row">

                <!-- GROW: Find Leads -->
                <div class="bpf-acr-card">
                    <div class="bpf-acr-header">
                        <span class="bpf-acr-name">GROW</span>
                        <span class="bpf-acr-tag">Find Leads</span>
                    </div>
                    <div class="bpf-acr-grid bpf-acr-grid--4">
                        <div class="bpf-acr-col">
                            <span class="bpf-acr-letter bpf-acr-letter--dim">G</span>
                            <span class="bpf-acr-word">Generic</span>
                            <span class="bpf-acr-note">low quality</span>
                        </div>
                        <div class="bpf-acr-col">
                            <span class="bpf-acr-letter bpf-acr-letter--dim">R</span>
                            <span class="bpf-acr-word">Running</span>
                            <span class="bpf-acr-note">active biz</span>
                        </div>
                        <div class="bpf-acr-col">
                            <span class="bpf-acr-letter bpf-acr-letter--dim">O</span>
                            <span class="bpf-acr-word">Organized</span>
                            <span class="bpf-acr-note">avoid slow</span>
                        </div>
                        <div class="bpf-acr-col">
                            <span class="bpf-acr-letter bpf-acr-letter--hot">W</span>
                            <span class="bpf-acr-word bpf-acr-word--hot">Working</span>
                            <span class="bpf-acr-note bpf-acr-note--hot">best leads ★</span>
                        </div>
                    </div>
                </div>

                <span class="bpf-op">→</span>

                <!-- BRIGHT: Qualify Leads -->
                <div class="bpf-acr-card">
                    <div class="bpf-acr-header">
                        <span class="bpf-acr-name">BRIGHT</span>
                        <span class="bpf-acr-tag">Qualify Leads</span>
                    </div>
                    <div class="bpf-acr-grid bpf-acr-grid--6">
                        <div class="bpf-acr-col">
                            <span class="bpf-acr-letter">B</span>
                            <span class="bpf-acr-word">Business</span>
                            <span class="bpf-acr-note">active check</span>
                        </div>
                        <div class="bpf-acr-col">
                            <span class="bpf-acr-letter">R</span>
                            <span class="bpf-acr-word">Reach</span>
                            <span class="bpf-acr-note">decision maker</span>
                        </div>
                        <div class="bpf-acr-col">
                            <span class="bpf-acr-letter">I</span>
                            <span class="bpf-acr-word">Identify</span>
                            <span class="bpf-acr-note">problem</span>
                        </div>
                        <div class="bpf-acr-col">
                            <span class="bpf-acr-letter">G</span>
                            <span class="bpf-acr-word">Good</span>
                            <span class="bpf-acr-note">lead select</span>
                        </div>
                        <div class="bpf-acr-col">
                            <span class="bpf-acr-letter">H</span>
                            <span class="bpf-acr-word">Handle</span>
                            <span class="bpf-acr-note">right contact</span>
                        </div>
                        <div class="bpf-acr-col">
                            <span class="bpf-acr-letter">T</span>
                            <span class="bpf-acr-word">Timing</span>
                            <span class="bpf-acr-note">follow-up</span>
                        </div>
                    </div>
                </div>

                <span class="bpf-op">→</span>

                <!-- MACTER: Outreach -->
                <div class="bpf-acr-card">
                    <div class="bpf-acr-header">
                        <span class="bpf-acr-name">MACTER</span>
                        <span class="bpf-acr-tag">Outreach</span>
                    </div>
                    <div class="bpf-acr-grid bpf-acr-grid--6">
                        <div class="bpf-acr-col">
                            <span class="bpf-acr-letter">M</span>
                            <span class="bpf-acr-word">Mail</span>
                            <span class="bpf-acr-note">first touch</span>
                        </div>
                        <div class="bpf-acr-col">
                            <span class="bpf-acr-letter">A</span>
                            <span class="bpf-acr-word">Ask</span>
                            <span class="bpf-acr-note">qualify</span>
                        </div>
                        <div class="bpf-acr-col">
                            <span class="bpf-acr-letter">C</span>
                            <span class="bpf-acr-word">Chat</span>
                            <span class="bpf-acr-note">engage</span>
                        </div>
                        <div class="bpf-acr-col">
                            <span class="bpf-acr-letter">T</span>
                            <span class="bpf-acr-word">Talk</span>
                            <span class="bpf-acr-note">build trust</span>
                        </div>
                        <div class="bpf-acr-col">
                            <span class="bpf-acr-letter">E</span>
                            <span class="bpf-acr-word">Easy</span>
                            <span class="bpf-acr-note">close deal</span>
                        </div>
                        <div class="bpf-acr-col">
                            <span class="bpf-acr-letter">R</span>
                            <span class="bpf-acr-word">Read</span>
                            <span class="bpf-acr-note">follow up</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- VALUE POINTS -->
        <div class="bp-values-grid">
            <div class="bp-value-item">
                <i class="fas fa-check-circle bp-check-icon"></i>
                <span>Built from real freelancing experience, not theory</span>
            </div>
            <div class="bp-value-item">
                <i class="fas fa-check-circle bp-check-icon"></i>
                <span>Built for direct cold outreach — no platform fees</span>
            </div>
            <div class="bp-value-item">
                <i class="fas fa-check-circle bp-check-icon"></i>
                <span>Simple enough for anyone to follow from day one</span>
            </div>
            <div class="bp-value-item">
                <i class="fas fa-check-circle bp-check-icon"></i>
                <span>Psychology-based approach — no spam, no automation</span>
            </div>
        </div>

        <!-- PRICING CARD — above who is this for -->
        <div class="bp-pricing-top" style="flex-direction:column;align-items:center;gap:12px;">
            <div class="bp-timer-label">
                <i class="fas fa-fire" style="color:#f87171;"></i>
                Today only deal — offer expires in:
            </div>
            <div class="bp-countdown">
                <div class="bp-countdown-unit">
                    <div class="bp-countdown-num" id="bp-hours">06</div>
                    <div class="bp-countdown-label">HRS</div>
                </div>
                <div class="bp-countdown-sep">:</div>
                <div class="bp-countdown-unit">
                    <div class="bp-countdown-num" id="bp-mins">44</div>
                    <div class="bp-countdown-label">MIN</div>
                </div>
                <div class="bp-countdown-sep">:</div>
                <div class="bp-countdown-unit">
                    <div class="bp-countdown-num bp-countdown-num--green" id="bp-secs">10</div>
                    <div class="bp-countdown-label">SEC</div>
                </div>
            </div>
            <div class="bp-pricing-center">
                <div class="bp-price-row">
                    <span class="bp-old-price">$29.00</span>
                    <span class="bp-new-price">$7.99</span>
                    <span class="bp-badge-discount">73% OFF</span>
                </div>
                <a href="https://younasphere34.gumroad.com/l/8-ClientsBlueprint" target="_blank" class="bp-cta-btn">
                    <i class="fas fa-bolt"></i>
                    Download Now
                </a>
                <p class="bp-cta-note">Today only deal — limited time offer</p>
            </div>
        </div>

        <!-- WHO IS THIS FOR -->
        <div class="bp-for-section">
            <p class="bp-for-label">Who Is This For?</p>
            <div class="bp-for-list">
                <span class="bp-for-pill"><span class="bp-for-dot"></span>Freelancers who can't land clients consistently</span>
                <span class="bp-for-pill"><span class="bp-for-dot"></span>Developers, designers &amp; agencies doing cold outreach</span>
                <span class="bp-for-pill"><span class="bp-for-dot"></span>Anyone leaving Fiverr / Upwork for direct clients</span>
                <span class="bp-for-pill"><span class="bp-for-dot"></span>Beginners starting their first freelance hustle</span>
                <span class="bp-for-pill"><span class="bp-for-dot"></span>Solopreneurs building a client pipeline from scratch</span>
            </div>
        </div>

        <!-- REVIEWS — below pricing with heading -->
        <div class="bp-reviews-bottom">
            <p class="bp-reviews-heading">
                <i class="fas fa-star"></i> Real Reviews from Freelancers
            </p>
            <div class="bp-reviews-grid">

                <!-- Left stack (1–7) -->
                <div class="bp-rev-stack">
                    <img src="{{ pub_asset('public/assets/images/bookreviews/1r.png') }}" alt="Review screenshot" class="bp-rev-img">
                    <img src="{{ pub_asset('public/assets/images/bookreviews/2r.png') }}" alt="Review screenshot" class="bp-rev-img">
                    <img src="{{ pub_asset('public/assets/images/bookreviews/3r.png') }}" alt="Review screenshot" class="bp-rev-img">
                    <img src="{{ pub_asset('public/assets/images/bookreviews/4r.png') }}" alt="Review screenshot" class="bp-rev-img">
                    <img src="{{ pub_asset('public/assets/images/bookreviews/5r.png') }}" alt="Review screenshot" class="bp-rev-img">
                    <img src="{{ pub_asset('public/assets/images/bookreviews/6r.png') }}" alt="Review screenshot" class="bp-rev-img">
                    <img src="{{ pub_asset('public/assets/images/bookreviews/7r.png') }}" alt="Review screenshot" class="bp-rev-img">
                </div>

                <!-- Middle stack (8–14) -->
                <div class="bp-rev-stack">
                    <img src="{{ pub_asset('public/assets/images/bookreviews/8r.png') }}" alt="Review screenshot" class="bp-rev-img">
                    <img src="{{ pub_asset('public/assets/images/bookreviews/9r.png') }}" alt="Review screenshot" class="bp-rev-img">
                    <img src="{{ pub_asset('public/assets/images/bookreviews/10r.png') }}" alt="Review screenshot" class="bp-rev-img">
                    <img src="{{ pub_asset('public/assets/images/bookreviews/11r.png') }}" alt="Review screenshot" class="bp-rev-img">
                    <img src="{{ pub_asset('public/assets/images/bookreviews/12r.png') }}" alt="Review screenshot" class="bp-rev-img">
                    <img src="{{ pub_asset('public/assets/images/bookreviews/13r.png') }}" alt="Review screenshot" class="bp-rev-img">
                    <img src="{{ pub_asset('public/assets/images/bookreviews/14r.png') }}" alt="Review screenshot" class="bp-rev-img">
                </div>

                <!-- Right stack (15–21) -->
                <div class="bp-rev-stack">
                    <img src="{{ pub_asset('public/assets/images/bookreviews/15r.png') }}" alt="Review screenshot" class="bp-rev-img">
                    <img src="{{ pub_asset('public/assets/images/bookreviews/16r.png') }}" alt="Review screenshot" class="bp-rev-img">
                    <img src="{{ pub_asset('public/assets/images/bookreviews/17r.png') }}" alt="Review screenshot" class="bp-rev-img">
                    <img src="{{ pub_asset('public/assets/images/bookreviews/18r.png') }}" alt="Review screenshot" class="bp-rev-img">
                    <img src="{{ pub_asset('public/assets/images/bookreviews/19r.png') }}" alt="Review screenshot" class="bp-rev-img">
                    <img src="{{ pub_asset('public/assets/images/bookreviews/20r.png') }}" alt="Review screenshot" class="bp-rev-img">
                    <img src="{{ pub_asset('public/assets/images/bookreviews/21r.png') }}" alt="Review screenshot" class="bp-rev-img">
                </div>

            </div>
        </div>

    </div>
</section>

<script>
(function () {
    function updateCountdown() {
        var now = new Date();
        var midnight = new Date(now.getFullYear(), now.getMonth(), now.getDate() + 1, 0, 0, 0);
        var diff = Math.max(0, Math.floor((midnight - now) / 1000));
        var h = Math.floor(diff / 3600);
        var m = Math.floor((diff % 3600) / 60);
        var s = diff % 60;
        var hStr = String(h).padStart(2, '0');
        var mStr = String(m).padStart(2, '0');
        var sStr = String(s).padStart(2, '0');
        document.getElementById('bp-hours').textContent  = hStr;
        document.getElementById('bp-mins').textContent   = mStr;
        document.getElementById('bp-secs').textContent   = sStr;
        document.getElementById('bp-hours2').textContent = hStr;
        document.getElementById('bp-mins2').textContent  = mStr;
        document.getElementById('bp-secs2').textContent  = sStr;
    }
    updateCountdown();
    setInterval(updateCountdown, 1000);
})();
</script>


    <!-- ░░░ SOCIAL FOLLOW ░░░ -->
    <section class="py-12 border-t section-line" style="background:#B1E78E;">
        <div class="max-w-2xl mx-auto px-6 text-center space-y-6">
            <div>
                <h2 class="text-2xl font-black mb-2" style="color:#0d0d0d;">Follow My Journey</h2>
                <p class="text-sm" style="color:#1c1c1c;">I share tips on PHP, AI tools, freelancing &amp; client hunting — every week</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                <a href="https://www.youtube.com/@YounasDev" target="_blank"
                   class="flex flex-col items-center gap-2 p-4 rounded-xl transition-all duration-300 hover:-translate-y-1"
                   style="background:rgba(0,0,0,0.1);border:1px solid rgba(0,0,0,0.15);">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center" style="background:rgba(255,255,255,0.5);">
                        <i class="fab fa-youtube text-xl text-red-600"></i>
                    </div>
                    <div class="font-semibold text-xs" style="color:#0d0d0d;">YouTube</div>
                    <div class="text-xs" style="color:#1c1c1c;">Subscribe</div>
                </a>
                <a href="https://www.facebook.com/YounasDev" target="_blank"
                   class="flex flex-col items-center gap-2 p-4 rounded-xl transition-all duration-300 hover:-translate-y-1"
                   style="background:rgba(0,0,0,0.1);border:1px solid rgba(0,0,0,0.15);">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center" style="background:rgba(255,255,255,0.5);">
                        <i class="fab fa-facebook text-xl text-blue-600"></i>
                    </div>
                    <div class="font-semibold text-xs" style="color:#0d0d0d;">Facebook</div>
                    <div class="text-xs" style="color:#1c1c1c;">Follow</div>
                </a>
                <a href="https://www.linkedin.com/in/younasdev/" target="_blank"
                   class="flex flex-col items-center gap-2 p-4 rounded-xl transition-all duration-300 hover:-translate-y-1"
                   style="background:rgba(0,0,0,0.1);border:1px solid rgba(0,0,0,0.15);">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center" style="background:rgba(255,255,255,0.5);">
                        <i class="fab fa-linkedin text-xl text-blue-700"></i>
                    </div>
                    <div class="font-semibold text-xs" style="color:#0d0d0d;">LinkedIn</div>
                    <div class="text-xs" style="color:#1c1c1c;">Connect</div>
                </a>
                <a href="https://x.com/YounasDev" target="_blank"
                   class="flex flex-col items-center gap-2 p-4 rounded-xl transition-all duration-300 hover:-translate-y-1"
                   style="background:rgba(0,0,0,0.1);border:1px solid rgba(0,0,0,0.15);">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center" style="background:rgba(255,255,255,0.5);">
                        <i class="fab fa-x-twitter text-xl" style="color:#0d0d0d;"></i>
                    </div>
                    <div class="font-semibold text-xs" style="color:#0d0d0d;">X (Twitter)</div>
                    <div class="text-xs" style="color:#1c1c1c;">Follow</div>
                </a>
            </div>
        </div>
    </section>

    <!-- ░░░ 7. FINAL CTA ░░░ -->
    <section class="py-20 border-t section-line" style="background:#060606;">
        <div class="max-w-2xl mx-auto px-6 text-center space-y-6">

            <div class="proof-badge mx-auto w-fit">
                <span class="w-2 h-2 rounded-full pulse-dot" style="background:#B1E78E;"></span>
                Taking New Projects — Limited Spots
            </div>

            <h2 class="font-black text-white leading-tight" style="font-size:clamp(2rem,5vw,2.8rem);letter-spacing:-0.02em;">
                Ready to Get Clients,<br>
                Rank on Google, or<br>
                <span style="color:#B1E78E;">Build Something Real?</span>
            </h2>

            <p class="text-gray-400 text-sm max-w-sm mx-auto">
                Message me now. I reply fast. If it fits, we start within 48 hours. No long proposals. No wasted time.
            </p>

            <div class="rounded-2xl p-6 space-y-3 glow-green" style="background:#0a0a0a;border:1px solid rgba(177,231,142,0.2);">
                <a href="https://wa.me/923460820722" target="_blank"
                   class="btn-brand w-full" style="padding:15px 28px;font-size:1rem;justify-content:center;border-radius:12px;">
                    <i class="fab fa-whatsapp text-xl"></i>
                    Message Me — +92 346 0820722
                </a>
                <a href="https://calendly.com/younasdev/strategy-call" target="_blank"
                   class="btn-outline w-full" style="padding:12px 28px;font-size:.92rem;justify-content:center;border-radius:12px;">
                    <i class="fas fa-calendar-check"></i>
                    Book a Free Strategy Call
                </a>
                <a href="mailto:hello@younasdev.com"
                   class="btn-ghost w-full" style="padding:12px 28px;font-size:.88rem;justify-content:center;border-radius:12px;">
                    <i class="fas fa-envelope"></i>
                    hello@younasdev.com
                </a>
                <p class="text-gray-600 text-xs pt-1">6+ Years · 70+ Clients · Replies in under 12 hours</p>
            </div>

            <div class="flex flex-wrap justify-center gap-2 pt-2">
                <a href="https://customernearme.com/" target="_blank"
                   class="text-xs font-medium px-3 py-1.5 rounded-full border border-gray-700 text-gray-400 hover:text-white hover:border-gray-500 transition-colors">
                    <i class="fas fa-location-dot mr-1"></i> CustomerNearMe
                </a>
                <a href="https://younasphere34.gumroad.com/l/8-ClientsBlueprint" target="_blank"
                   class="text-xs font-medium px-3 py-1.5 rounded-full border border-gray-700 text-gray-400 hover:text-white hover:border-gray-500 transition-colors">
                    <i class="fas fa-book-open mr-1"></i> 8 Clients Blueprint
                </a>
                <a href="{{route('about')}}"
                   class="text-xs font-medium px-3 py-1.5 rounded-full border border-gray-700 text-gray-400 hover:text-white hover:border-gray-500 transition-colors">
                    <i class="fas fa-user mr-1"></i> About Me
                </a>
                <a href="{{route('blog')}}"
                   class="text-xs font-medium px-3 py-1.5 rounded-full border border-gray-700 text-gray-400 hover:text-white hover:border-gray-500 transition-colors">
                    <i class="fas fa-pen-nib mr-1"></i> Blog
                </a>
            </div>

        </div>
    </section>
@endsection
