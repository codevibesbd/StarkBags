@extends('layouts.app')

@section('title', 'Stark Bag Industries Ltd. | Industrial Luggage & Backpack Manufacturer')

@section('content')

    <!-- ===================================================================== -->
    <!-- SECTION 1: HERO (The Industrial Atelier with Background Slider)       -->
    <!-- 1 Section per Viewport on 1440x900                                    -->
    <!-- ===================================================================== -->
    <section id="hero" class="relative min-h-[calc(100vh-5rem)] flex items-center bg-stark-obsidian text-white overflow-hidden py-24 scroll-mt-20">
        <!-- Hero Background Slider Layers -->
        <div id="hero-slider" class="absolute inset-0 z-0 overflow-hidden pointer-events-none" aria-hidden="true">
            <!-- Slide 1: Executive Leather Travel Duffle Bag -->
            <div class="hero-slide absolute inset-0 opacity-100 transition-opacity duration-1000 ease-in-out">
                <img src="https://starkbags.com/wp-content/uploads/2025/02/1df95a05-f698-484e-81be-1293d02b9dd2.png" alt="Stark Leather Travel Duffle Bag" width="1920" height="1080" class="w-full h-full object-cover object-center filter contrast-110">
            </div>
            <!-- Slide 2: Hard-Shell Spinner Luggage -->
            <div class="hero-slide absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out pointer-events-none">
                <img src="https://starkbags.com/wp-content/uploads/2025/02/17ee4799-e078-4727-9f87-10b937bcd85d.png" alt="Stark Hard-Shell Spinner Suitcase" width="1920" height="1080" class="w-full h-full object-cover object-center filter contrast-110">
            </div>
            <!-- Slide 3: Commuter & Outdoor Travel Backpack -->
            <div class="hero-slide absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out pointer-events-none">
                <img src="https://starkbags.com/wp-content/uploads/2025/02/def7518e-8735-4e7c-89e7-ecf05def42e4.png" alt="Stark Outdoor Commuter Backpack" width="1024" height="576" class="w-full h-full object-cover object-center filter contrast-110">
            </div>
        </div>

        <!-- High-Contrast Architectural Dark Overlays -->
        <div class="absolute inset-0 z-0 bg-gradient-to-r from-stark-obsidian via-stark-obsidian/85 to-stark-obsidian/50 pointer-events-none"></div>
        <div class="absolute inset-0 z-0 bg-gradient-to-t from-stark-obsidian via-transparent to-stark-obsidian/40 pointer-events-none"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-12 w-full">
            <div class="max-w-3xl space-y-6">
                <!-- Headline (No Eyebrow Rule: Headline speaks with its own scale) -->
                <h1 class="font-display font-medium text-4xl sm:text-5xl lg:text-6xl text-white tracking-tight leading-[1.08] text-balance">
                    Engineering <span class="font-serif italic font-normal text-rose-300">Export-Grade</span> Travel Gear &amp; Luggage at Scale.
                </h1>

                <!-- Subtitle -->
                <p class="text-base sm:text-lg text-slate-300 leading-relaxed max-w-2xl font-sans text-pretty">
                    Stark Bag Industries Ltd. is Bangladesh’s integrated manufacturing powerhouse. Spanning 6 specialized sister concern plants, precision polymer shell molding, and ethical supply chain governance for global retail leaders.
                </p>

                <!-- Actions -->
                <div class="flex flex-wrap items-center gap-4 pt-4">
                    <a href="#inquiry" class="inline-flex items-center justify-center px-6 py-3.5 rounded-lg bg-stark-primary text-white font-sans text-sm font-semibold tracking-wide hover:bg-stark-primary-hover active:scale-[0.98] transition-[background-color,transform] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white shadow-lg shadow-stark-primary/20">
                        Inquire for OEM / Contract Production
                    </a>
                    <a href="#facilities" class="inline-flex items-center justify-center px-6 py-3.5 rounded-lg bg-white/10 hover:bg-white/15 border border-white/20 text-white font-sans text-sm font-medium tracking-wide transition-[background-color,border-color] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary">
                        Explore Sister Concern Plants &rarr;
                    </a>
                </div>

                <!-- Certifications Strip -->
                <div class="pt-8 border-t border-white/10 flex flex-wrap items-center gap-6 text-xs text-slate-400 font-mono">
                    <span class="flex items-center gap-1.5"><span class="text-emerald-400" aria-hidden="true">&#10003;</span> ISO 9001:2015</span>
                    <span class="flex items-center gap-1.5"><span class="text-emerald-400" aria-hidden="true">&#10003;</span> ISO 14001:2015</span>
                    <span class="flex items-center gap-1.5"><span class="text-emerald-400" aria-hidden="true">&#10003;</span> amfori BSCI Audited</span>
                    <span class="flex items-center gap-1.5"><span class="text-emerald-400" aria-hidden="true">&#10003;</span> Sedex SMETA Verified</span>
                    <span class="flex items-center gap-1.5"><span class="text-emerald-400" aria-hidden="true">&#10003;</span> FSC Chain-of-Custody</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================================================================== -->
    <!-- SECTION 2: OPERATIONAL PILLARS & METRICS                              -->
    <!-- Split layout matching original site's signature crimson stats block   -->
    <!-- ===================================================================== -->
    <section id="capabilities" class="py-24 bg-stark-bg border-b border-stark-border scroll-mt-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
                <!-- Left: Signature Stark Crimson Block with 6 Key Live Metrics -->
                <div class="lg:col-span-5 bg-stark-primary rounded-2xl p-8 lg:p-10 text-white flex flex-col justify-between shadow-xl">
                    <div>
                        <h2 class="font-display font-semibold text-2xl lg:text-3xl text-white tracking-tight leading-snug text-balance">
                            Heavy-Duty <span class="font-serif italic font-normal text-rose-200">Production</span> Powerhouse
                        </h2>
                        <p class="text-rose-100 text-sm mt-3 leading-relaxed text-pretty">
                            Complete vertical integration: from resin molding and hardware stamping to robotic cutting and automated sewing lines.
                        </p>
                    </div>

                    <!-- 6 Grid Stats with Tabular Numerals -->
                    <div class="grid grid-cols-2 gap-6 my-8 py-6 border-y border-white/20">
                        <div>
                            <div class="font-display font-bold text-3xl lg:text-4xl tracking-tight text-white font-mono tabular-nums">1.5M+</div>
                            <div class="text-[12px] font-sans font-medium uppercase tracking-wider text-rose-200 mt-1">Pcs Monthly Output</div>
                        </div>
                        <div>
                            <div class="font-display font-bold text-3xl lg:text-4xl tracking-tight text-white font-mono tabular-nums">5,000+</div>
                            <div class="text-[12px] font-sans font-medium uppercase tracking-wider text-rose-200 mt-1">Skilled Workforce</div>
                        </div>
                        <div>
                            <div class="font-display font-bold text-3xl lg:text-4xl tracking-tight text-white font-mono tabular-nums">6</div>
                            <div class="text-[12px] font-sans font-medium uppercase tracking-wider text-rose-200 mt-1">Sister Concern Units</div>
                        </div>
                        <div>
                            <div class="font-display font-bold text-3xl lg:text-4xl tracking-tight text-white font-mono tabular-nums">9+</div>
                            <div class="text-[12px] font-sans font-medium uppercase tracking-wider text-rose-200 mt-1">Years Manufacturing</div>
                        </div>
                        <div>
                            <div class="font-display font-bold text-3xl lg:text-4xl tracking-tight text-white font-mono tabular-nums">34+</div>
                            <div class="text-[12px] font-sans font-medium uppercase tracking-wider text-rose-200 mt-1">Certifications</div>
                        </div>
                        <div>
                            <div class="font-display font-bold text-3xl lg:text-4xl tracking-tight text-white font-mono tabular-nums">7+</div>
                            <div class="text-[12px] font-sans font-medium uppercase tracking-wider text-rose-200 mt-1">Export Continents</div>
                        </div>
                    </div>

                    <a href="#facilities" class="inline-flex items-center justify-between w-full p-4 rounded-xl bg-black/20 hover:bg-black/30 border border-white/20 text-xs font-sans font-semibold uppercase tracking-wider transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white">
                        <span>Inspect Sister Concern Capabilities</span>
                        <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>

                <!-- Right: 3 Architectural Pillar Cards -->
                <div class="lg:col-span-7 flex flex-col justify-between gap-6">
                    <!-- Pillar 1: Who We Are -->
                    <div class="bg-white border border-stark-border rounded-2xl p-6 lg:p-8 flex flex-col md:flex-row gap-6 items-center shadow-sm hover:border-slate-300 transition-colors">
                        <div class="w-full md:w-48 h-36 rounded-xl overflow-hidden bg-slate-100 shrink-0">
                            <img src="https://starkbags.com/wp-content/uploads/2025/02/rider-3-768x432-1.webp" alt="Rider Leather Bags Factory Facility" width="192" height="144" loading="lazy" class="w-full h-full object-cover">
                        </div>
                        <div class="flex-1">
                            <h3 class="font-display font-semibold text-xl text-stark-text tracking-tight text-pretty">Who We Are</h3>
                            <p class="text-sm text-slate-600 mt-2 leading-relaxed text-pretty font-sans">
                                Stark Bag Industries Ltd. operates modern manufacturing compounds in Brahmanbaria and executive trade offices in Uttara, Dhaka. We serve top-tier retailers across North America, Europe, and Asia with uncompromising quality control.
                            </p>
                            <a href="#facilities" class="inline-flex items-center gap-1 text-xs font-sans font-semibold text-stark-primary hover:text-stark-primary-hover rounded px-1 py-0.5 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary mt-3 transition-colors">
                                Learn about corporate structure &rarr;
                            </a>
                        </div>
                    </div>

                    <!-- Pillar 2: What We Do -->
                    <div class="bg-white border border-stark-border rounded-2xl p-6 lg:p-8 flex flex-col md:flex-row gap-6 items-center shadow-sm hover:border-slate-300 transition-colors">
                        <div class="w-full md:w-48 h-36 rounded-xl overflow-hidden bg-slate-100 shrink-0">
                            <img src="https://starkbags.com/wp-content/uploads/2025/02/Sensibal-qyx49htq0vcm9ibd8wky9ejdb0t3obd66qik4jxhn4.jpg" alt="Polymer Molding Factory Plant" width="192" height="144" loading="lazy" class="w-full h-full object-cover">
                        </div>
                        <div class="flex-1">
                            <h3 class="font-display font-semibold text-xl text-stark-text tracking-tight text-pretty">What We Do</h3>
                            <p class="text-sm text-slate-600 mt-2 leading-relaxed text-pretty font-sans">
                                Complete ODM and OEM production for polycarbonate hard-case luggage, water-repellent tech backpacks, weekender duffels, and utility tote bags. We maintain in-house tooling, zipper fabrication, and packaging.
                            </p>
                            <a href="#products" class="inline-flex items-center gap-1 text-xs font-sans font-semibold text-stark-primary hover:text-stark-primary-hover rounded px-1 py-0.5 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary mt-3 transition-colors">
                                Explore product capabilities &rarr;
                            </a>
                        </div>
                    </div>

                    <!-- Pillar 3: Industry 4.0 & Sustainability -->
                    <div class="bg-white border border-stark-border rounded-2xl p-6 lg:p-8 flex flex-col md:flex-row gap-6 items-center shadow-sm hover:border-slate-300 transition-colors">
                        <div class="w-full md:w-48 h-36 rounded-xl overflow-hidden bg-slate-100 shrink-0">
                            <img src="https://starkbags.com/wp-content/uploads/2025/02/20241223_165355-1-768x491-1.jpg" alt="Sustainable Industry 4.0 Equipment" width="192" height="144" loading="lazy" class="w-full h-full object-cover">
                        </div>
                        <div class="flex-1">
                            <h3 class="font-display font-semibold text-xl text-stark-text tracking-tight text-pretty">Sustainable Industry 4.0</h3>
                            <p class="text-sm text-slate-600 mt-2 leading-relaxed text-pretty font-sans">
                                Operating under ISO 14001 environmental frameworks. We utilize computerized CNC fabric cutting to minimize off-cut waste, closed-loop polymer recycling, and full FSC certification for packaging materials.
                            </p>
                            <a href="#certifications" class="inline-flex items-center gap-1 text-xs font-sans font-semibold text-stark-primary hover:text-stark-primary-hover rounded px-1 py-0.5 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary mt-3 transition-colors">
                                View sustainability audits &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================================================================== -->
    <!-- SECTION 3: GLOBAL EXPORT NETWORK                                      -->
    <!-- World map visual illustrating international trade corridors           -->
    <!-- ===================================================================== -->
    <section id="global-presence" class="py-24 bg-white border-b border-stark-border overflow-hidden scroll-mt-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 text-center">
            <h2 class="font-display font-medium text-3xl sm:text-4xl text-stark-text tracking-tight text-balance">
                Global Export Footprint &amp; <span class="font-serif italic font-normal text-stark-primary">Trade Corridors</span>
            </h2>
            <p class="text-base text-stark-muted mt-3 max-w-2xl mx-auto font-sans leading-relaxed text-pretty">
                From our manufacturing hubs in Brahmanbaria through Chittagong Port (BDCGP), Stark luggage and bags reach retail shelves across 7+ key international markets.
            </p>

            <!-- Interactive Animated World Trade Map Canvas -->
            <div id="trade-map-container" class="relative mt-12 bg-slate-950 rounded-3xl p-4 sm:p-8 overflow-hidden border border-slate-800 shadow-2xl">
                <!-- Map Top Bar: Live Status & Regional Corridors Filter -->
                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4 mb-6 relative z-20 pb-4 border-b border-white/10">
                    <div class="flex items-center gap-3 text-left">
                        <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse motion-reduce:animate-none" aria-hidden="true"></div>
                        <div>
                            <span class="font-sans font-semibold text-xs uppercase tracking-wider text-white">Live Maritime &amp; Export Network</span>
                            <span class="text-[11px] font-mono text-slate-400 block">Origin: Chittagong Sea Port (BDCGP) &bull; Direct Carrier Contracts</span>
                        </div>
                    </div>

                    <!-- Region Selector Buttons -->
                    <div class="flex flex-wrap items-center gap-2 font-sans text-xs" role="group" aria-label="Trade Lane Filters">
                        <button type="button" data-region="all" class="map-filter-btn active px-3.5 py-1.5 rounded-full bg-stark-primary text-white font-medium shadow-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary transition-colors">All Corridors</button>
                        <button type="button" data-region="na" class="map-filter-btn px-3.5 py-1.5 rounded-full bg-white/10 text-slate-300 font-medium hover:bg-white/20 transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary">North America</button>
                        <button type="button" data-region="eu" class="map-filter-btn px-3.5 py-1.5 rounded-full bg-white/10 text-slate-300 font-medium hover:bg-white/20 transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary">European Union</button>
                        <button type="button" data-region="asia" class="map-filter-btn px-3.5 py-1.5 rounded-full bg-white/10 text-slate-300 font-medium hover:bg-white/20 transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary">Asia-Pacific</button>
                        <button type="button" data-region="me" class="map-filter-btn px-3.5 py-1.5 rounded-full bg-white/10 text-slate-300 font-medium hover:bg-white/20 transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary">Middle East</button>
                    </div>
                </div>

                <!-- SVG Animated Vector Map -->
                <div class="relative w-full aspect-[2/1] min-h-[380px] lg:min-h-[460px] flex items-center justify-center">
                    <svg viewBox="0 0 1000 520" class="w-full h-full select-none" xmlns="http://www.w3.org/2000/svg" aria-label="Interactive world export map">
                        <defs>
                            <!-- Glow Filter for Moving Cargo Pulses -->
                            <filter id="glow-crimson" x="-50%" y="-50%" width="200%" height="200%">
                                <feGaussianBlur in="SourceGraphic" stdDeviation="3" result="blur" />
                                <feMerge>
                                    <feMergeNode in="blur" />
                                    <feMergeNode in="SourceGraphic" />
                                </feMerge>
                            </filter>
                            <filter id="glow-cyan" x="-50%" y="-50%" width="200%" height="200%">
                                <feGaussianBlur in="SourceGraphic" stdDeviation="2.5" result="blur" />
                                <feMerge>
                                    <feMergeNode in="blur" />
                                    <feMergeNode in="SourceGraphic" />
                                </feMerge>
                            </filter>

                            <!-- Gradient for Trade Lanes -->
                            <linearGradient id="gradient-route" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" stop-color="#E11D48" stop-opacity="0.9" />
                                <stop offset="50%" stop-color="#2563EB" stop-opacity="0.7" />
                                <stop offset="100%" stop-color="#38BDF8" stop-opacity="0.9" />
                            </linearGradient>
                        </defs>

                        <!-- Subtle Latitude & Longitude Coordinate Grid -->
                        <g stroke="#1E293B" stroke-width="0.75" stroke-dasharray="2,6" opacity="0.4" aria-hidden="true">
                            <line x1="0" y1="130" x2="1000" y2="130" />
                            <line x1="0" y1="260" x2="1000" y2="260" />
                            <line x1="0" y1="390" x2="1000" y2="390" />
                            <line x1="200" y1="0" x2="200" y2="520" />
                            <line x1="400" y1="0" x2="400" y2="520" />
                            <line x1="600" y1="0" x2="600" y2="520" />
                            <line x1="800" y1="0" x2="800" y2="520" />
                        </g>

                        <!-- Continents Landmass Silhouettes -->
                        <g fill="#0F172A" stroke="#1E293B" stroke-width="1" opacity="0.85" aria-hidden="true">
                            <!-- North America -->
                            <path d="M 120 70 L 260 50 L 320 80 L 280 130 L 310 160 L 290 200 L 220 220 L 200 290 L 150 240 L 90 180 L 80 120 Z" />
                            <!-- Greenland -->
                            <path d="M 330 30 L 400 35 L 380 90 L 320 80 Z" />
                            <!-- South America -->
                            <path d="M 230 300 L 330 320 L 360 380 L 300 480 L 250 440 L 220 360 Z" />
                            <!-- Europe -->
                            <path d="M 450 90 L 560 80 L 590 130 L 520 180 L 440 180 L 430 130 Z" />
                            <!-- British Isles -->
                            <path d="M 460 115 L 485 110 L 480 150 L 455 140 Z" />
                            <!-- Africa -->
                            <path d="M 460 200 L 580 190 L 610 270 L 560 410 L 490 390 L 440 260 Z" />
                            <!-- Eurasia / Asia -->
                            <path d="M 590 80 L 880 70 L 910 150 L 840 250 L 760 300 L 680 270 L 600 240 L 600 130 Z" />
                            <!-- Japan -->
                            <path d="M 860 150 L 880 160 L 870 210 L 845 200 Z" />
                            <!-- Indian Subcontinent / SE Asia Highlight -->
                            <path d="M 640 220 L 720 220 L 710 320 L 670 330 L 640 260 Z" fill="#131D31" stroke="#334155" />
                            <!-- Australia -->
                            <path d="M 780 360 L 910 350 L 920 440 L 800 450 Z" />
                        </g>

                        <!-- Curved Maritime Trade Paths -->
                        <g class="trade-paths" fill="none" aria-hidden="true">
                            <!-- Route to New York (USA) -->
                            <path id="path-ny" class="route-path" d="M 675 245 C 550 70, 380 80, 275 170" stroke="url(#gradient-route)" stroke-width="1.8" stroke-dasharray="4,4" opacity="0.75" />
                            <!-- Route to Los Angeles (USA) -->
                            <path id="path-la" class="route-path" d="M 675 245 C 490 50, 250 70, 175 185" stroke="url(#gradient-route)" stroke-width="1.8" stroke-dasharray="4,4" opacity="0.75" />
                            <!-- Route to Hamburg (Germany) -->
                            <path id="path-hamburg" class="route-path" d="M 675 245 C 600 120, 560 120, 505 140" stroke="url(#gradient-route)" stroke-width="1.8" stroke-dasharray="4,4" opacity="0.75" />
                            <!-- Route to UK -->
                            <path id="path-uk" class="route-path" d="M 675 245 C 590 120, 530 120, 478 145" stroke="url(#gradient-route)" stroke-width="1.8" stroke-dasharray="4,4" opacity="0.75" />
                            <!-- Route to Dubai (UAE) -->
                            <path id="path-dubai" class="route-path" d="M 675 245 C 640 220, 620 220, 605 225" stroke="url(#gradient-route)" stroke-width="1.8" stroke-dasharray="4,4" opacity="0.75" />
                            <!-- Route to Tokyo (Japan) -->
                            <path id="path-tokyo" class="route-path" d="M 675 245 C 740 180, 800 170, 845 180" stroke="url(#gradient-route)" stroke-width="1.8" stroke-dasharray="4,4" opacity="0.75" />
                            <!-- Route to Hong Kong -->
                            <path id="path-hk" class="route-path" d="M 675 245 C 710 230, 740 230, 765 235" stroke="url(#gradient-route)" stroke-width="1.8" stroke-dasharray="4,4" opacity="0.75" />
                            <!-- Route to Sydney (Australia) -->
                            <path id="path-sydney" class="route-path" d="M 675 245 C 760 320, 830 360, 885 405" stroke="url(#gradient-route)" stroke-width="1.8" stroke-dasharray="4,4" opacity="0.75" />
                        </g>

                        <!-- Moving Cargo Pulse Particles (Continuous Flow via SVG animateMotion) -->
                        <g class="cargo-pulses" aria-hidden="true">
                            <!-- Pulse to NY -->
                            <circle r="3.5" fill="#38BDF8" filter="url(#glow-cyan)">
                                <animateMotion dur="4.2s" repeatCount="indefinite" path="M 675 245 C 550 70, 380 80, 275 170" />
                            </circle>
                            <!-- Pulse to LA -->
                            <circle r="3.5" fill="#38BDF8" filter="url(#glow-cyan)">
                                <animateMotion dur="4.8s" repeatCount="indefinite" path="M 675 245 C 490 50, 250 70, 175 185" />
                            </circle>
                            <!-- Pulse to Hamburg -->
                            <circle r="3.5" fill="#E11D48" filter="url(#glow-crimson)">
                                <animateMotion dur="3.4s" repeatCount="indefinite" path="M 675 245 C 600 120, 560 120, 505 140" />
                            </circle>
                            <!-- Pulse to UK -->
                            <circle r="3" fill="#E11D48" filter="url(#glow-crimson)">
                                <animateMotion dur="3.7s" repeatCount="indefinite" path="M 675 245 C 590 120, 530 120, 478 145" />
                            </circle>
                            <!-- Pulse to Dubai -->
                            <circle r="3.5" fill="#38BDF8" filter="url(#glow-cyan)">
                                <animateMotion dur="2.5s" repeatCount="indefinite" path="M 675 245 C 640 220, 620 220, 605 225" />
                            </circle>
                            <!-- Pulse to Tokyo -->
                            <circle r="3.5" fill="#E11D48" filter="url(#glow-crimson)">
                                <animateMotion dur="3.1s" repeatCount="indefinite" path="M 675 245 C 740 180, 800 170, 845 180" />
                            </circle>
                            <!-- Pulse to Hong Kong -->
                            <circle r="3" fill="#38BDF8" filter="url(#glow-cyan)">
                                <animateMotion dur="2.2s" repeatCount="indefinite" path="M 675 245 C 710 230, 740 230, 765 235" />
                            </circle>
                            <!-- Pulse to Sydney -->
                            <circle r="3.5" fill="#38BDF8" filter="url(#glow-cyan)">
                                <animateMotion dur="3.9s" repeatCount="indefinite" path="M 675 245 C 760 320, 830 360, 885 405" />
                            </circle>
                        </g>

                        <!-- Origin Node: Bangladesh (Dhaka / Chittagong Port) -->
                        <g id="origin-bangladesh" class="cursor-pointer" transform="translate(675, 245)">
                            <!-- Dynamic Radar Pulse Waves -->
                            <circle id="radar-ring-1" r="10" fill="none" stroke="#E11D48" stroke-width="2" opacity="0.8" />
                            <circle id="radar-ring-2" r="14" fill="none" stroke="#E11D48" stroke-width="1.5" opacity="0.5" />
                            <!-- Core Beacon -->
                            <circle r="6" fill="#E11D48" />
                            <circle r="2.5" fill="#FFFFFF" />

                            <!-- Labeled Flag -->
                            <g transform="translate(12, -18)">
                                <rect x="-4" y="-12" width="130" height="24" rx="4" fill="#0B0F17" stroke="#E11D48" stroke-width="1" opacity="0.95" />
                                <text x="6" y="3" fill="#FFFFFF" font-size="10" font-family="'Instrument Sans', sans-serif" font-weight="700">BANGLADESH (HQ)</text>
                            </g>
                        </g>

                        <!-- Destination Port Pins (Interactive with Hover & Tooltip) -->
                        <!-- 1. New York -->
                        <g class="port-pin cursor-pointer group" data-route="route-ny" transform="translate(275, 170)" tabindex="0" role="button" aria-label="Port of New York">
                            <circle r="8" fill="#2563EB" opacity="0.25" class="group-hover:opacity-60 transition-opacity" />
                            <circle r="4" fill="#38BDF8" stroke="#FFFFFF" stroke-width="1" />
                            <text x="8" y="4" fill="#94A3B8" font-size="9" font-family="'Instrument Sans', sans-serif" font-weight="500" class="group-hover:fill-white">New York</text>
                        </g>

                        <!-- 2. Los Angeles -->
                        <g class="port-pin cursor-pointer group" data-route="route-la" transform="translate(175, 185)" tabindex="0" role="button" aria-label="Port of Los Angeles">
                            <circle r="8" fill="#2563EB" opacity="0.25" class="group-hover:opacity-60 transition-opacity" />
                            <circle r="4" fill="#38BDF8" stroke="#FFFFFF" stroke-width="1" />
                            <text x="8" y="4" fill="#94A3B8" font-size="9" font-family="'Instrument Sans', sans-serif" font-weight="500" class="group-hover:fill-white">Los Angeles</text>
                        </g>

                        <!-- 3. Hamburg -->
                        <g class="port-pin cursor-pointer group" data-route="route-hamburg" transform="translate(505, 140)" tabindex="0" role="button" aria-label="Port of Hamburg">
                            <circle r="8" fill="#2563EB" opacity="0.25" class="group-hover:opacity-60 transition-opacity" />
                            <circle r="4" fill="#38BDF8" stroke="#FFFFFF" stroke-width="1" />
                            <text x="8" y="4" fill="#94A3B8" font-size="9" font-family="'Instrument Sans', sans-serif" font-weight="500" class="group-hover:fill-white">Hamburg</text>
                        </g>

                        <!-- 4. UK (London / Felixstowe) -->
                        <g class="port-pin cursor-pointer group" data-route="route-uk" transform="translate(478, 145)" tabindex="0" role="button" aria-label="Port of Felixstowe">
                            <circle r="8" fill="#2563EB" opacity="0.25" class="group-hover:opacity-60 transition-opacity" />
                            <circle r="4" fill="#38BDF8" stroke="#FFFFFF" stroke-width="1" />
                            <text x="-48" y="16" fill="#94A3B8" font-size="9" font-family="'Instrument Sans', sans-serif" font-weight="500" class="group-hover:fill-white">Felixstowe</text>
                        </g>

                        <!-- 5. Tokyo -->
                        <g class="port-pin cursor-pointer group" data-route="route-tokyo" transform="translate(845, 180)" tabindex="0" role="button" aria-label="Port of Tokyo">
                            <circle r="8" fill="#2563EB" opacity="0.25" class="group-hover:opacity-60 transition-opacity" />
                            <circle r="4" fill="#38BDF8" stroke="#FFFFFF" stroke-width="1" />
                            <text x="8" y="4" fill="#94A3B8" font-size="9" font-family="'Instrument Sans', sans-serif" font-weight="500" class="group-hover:fill-white">Tokyo</text>
                        </g>

                        <!-- 6. Hong Kong -->
                        <g class="port-pin cursor-pointer group" data-route="route-hk" transform="translate(765, 235)" tabindex="0" role="button" aria-label="Port of Hong Kong">
                            <circle r="8" fill="#2563EB" opacity="0.25" class="group-hover:opacity-60 transition-opacity" />
                            <circle r="4" fill="#38BDF8" stroke="#FFFFFF" stroke-width="1" />
                            <text x="8" y="4" fill="#94A3B8" font-size="9" font-family="'Instrument Sans', sans-serif" font-weight="500" class="group-hover:fill-white">Hong Kong</text>
                        </g>

                        <!-- 7. Dubai -->
                        <g class="port-pin cursor-pointer group" data-route="route-dubai" transform="translate(605, 225)" tabindex="0" role="button" aria-label="Port of Dubai">
                            <circle r="8" fill="#2563EB" opacity="0.25" class="group-hover:opacity-60 transition-opacity" />
                            <circle r="4" fill="#38BDF8" stroke="#FFFFFF" stroke-width="1" />
                            <text x="-38" y="-8" fill="#94A3B8" font-size="9" font-family="'Instrument Sans', sans-serif" font-weight="500" class="group-hover:fill-white">Dubai</text>
                        </g>

                        <!-- 8. Sydney -->
                        <g class="port-pin cursor-pointer group" data-route="route-sydney" transform="translate(885, 405)" tabindex="0" role="button" aria-label="Port of Sydney">
                            <circle r="8" fill="#2563EB" opacity="0.25" class="group-hover:opacity-60 transition-opacity" />
                            <circle r="4" fill="#38BDF8" stroke="#FFFFFF" stroke-width="1" />
                            <text x="8" y="4" fill="#94A3B8" font-size="9" font-family="'Instrument Sans', sans-serif" font-weight="500" class="group-hover:fill-white">Sydney</text>
                        </g>
                    </svg>

                    <!-- Interactive Live Dispatch HUD Card -->
                    <div id="map-hud-card" class="absolute bottom-4 left-4 right-4 sm:right-auto sm:max-w-md bg-slate-900/95 backdrop-blur-md border border-white/15 rounded-xl p-5 text-white shadow-2xl text-left pointer-events-auto transition-[opacity,transform]">
                        <div class="flex items-center justify-between border-b border-white/10 pb-3 mb-3">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-stark-primary animate-pulse" aria-hidden="true"></span>
                                <span id="hud-country-name" class="font-sans font-semibold text-xs uppercase tracking-wider text-slate-300">Germany / Netherlands</span>
                            </div>
                            <span id="hud-status" class="font-mono text-[10px] text-emerald-400 bg-emerald-950/80 px-2 py-0.5 rounded border border-emerald-500/30">Weekly Direct Discharge</span>
                        </div>

                        <h4 id="hud-port-name" class="font-display font-semibold text-base text-white tracking-tight">Port of Hamburg &amp; Rotterdam (DEHAM / NLRTM)</h4>

                        <div class="grid grid-cols-2 gap-3 mt-3 pt-3 border-t border-white/10 text-xs">
                            <div>
                                <span class="text-[11px] text-slate-400 block font-sans">FOB Transit Time:</span>
                                <span id="hud-transit-time" class="font-mono font-bold text-stark-primary">22-26 Days FOB</span>
                            </div>
                            <div>
                                <span class="text-[11px] text-slate-400 block font-sans">Annual Capacity:</span>
                                <span id="hud-volume" class="font-mono font-bold text-white">520,000 Pcs/Year</span>
                            </div>
                        </div>

                        <div class="mt-2.5">
                            <span class="text-[11px] text-slate-400 block font-sans">Primary Export Cargo:</span>
                            <span id="hud-cargo-type" class="text-xs text-slate-200 font-medium">amfori BSCI Certified Luggage Collections</span>
                        </div>

                        <div class="mt-4 pt-3 border-t border-white/10 flex items-center justify-between">
                            <span class="text-[10px] font-mono text-slate-400">Hover or tap any port to inspect route</span>
                            <a href="#inquiry" class="inline-flex items-center gap-1 text-xs font-display font-bold text-stark-primary hover:text-rose-300 transition-colors">
                                Book Route Quota &rarr;
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Export Dispatch Specs Banner -->
                <div class="mt-8 pt-6 border-t border-white/10 flex flex-wrap items-center justify-between gap-4 text-xs font-mono text-slate-400">
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-emerald-400" aria-hidden="true"></span>
                        <span class="text-slate-200">Origin Port:</span> Chittagong Port (BDCGP)
                    </div>
                    <div>
                        <span class="text-slate-200">Customs Clearance:</span> Dhaka & Chittagong Custom Houses
                    </div>
                    <div>
                        <span class="text-slate-200">Primary HS Code:</span> 4202.12 (Suitcases & Luggage)
                    </div>
                    <a href="#inquiry" class="text-stark-primary hover:text-rose-300 font-bold rounded focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-stark-primary">
                        Download Shipping Matrix &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================================================================== -->
    <!-- SECTION 4: MONTHLY CAPACITY & SISTER CONCERNS                         -->
    <!-- Production allocation banner + 6 Sister Concern Cards                 -->
    <!-- ===================================================================== -->
    <section id="facilities" class="py-24 bg-stark-bg border-b border-stark-border scroll-mt-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <!-- Capacity Dark Slate Container -->
            <div class="bg-stark-slate rounded-2xl p-8 lg:p-12 text-white mb-16 shadow-xl border border-slate-700/50">
                <div class="text-center max-w-xl mx-auto mb-10">
                    <h2 class="font-display font-semibold text-2xl lg:text-3xl text-white tracking-tight uppercase text-balance">
                        Monthly Production Capacity
                    </h2>
                    <div class="w-16 h-1 bg-stark-primary mx-auto mt-3"></div>
                </div>

                <!-- 4 Real Capacity Metrics -->
                <div id="capacity-metrics-grid" class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-y md:divide-y-0 md:divide-x divide-white/10">
                    <div class="pt-4 md:pt-0">
                        <div class="capacity-counter font-display font-bold text-4xl lg:text-5xl text-white font-mono tabular-nums tracking-tight" data-target="9600">9,600</div>
                        <div class="text-xs uppercase tracking-wider text-slate-400 mt-2 font-sans font-medium">Total Daily Units</div>
                    </div>
                    <div class="pt-4 md:pt-0">
                        <div class="capacity-counter font-display font-bold text-4xl lg:text-5xl text-white font-mono tabular-nums tracking-tight" data-target="7106">7,106</div>
                        <div class="text-xs uppercase tracking-wider text-slate-400 mt-2 font-sans font-medium">Case Rolling Line</div>
                    </div>
                    <div class="pt-4 md:pt-0">
                        <div class="capacity-counter font-display font-bold text-4xl lg:text-5xl text-white font-mono tabular-nums tracking-tight" data-target="7124">7,124</div>
                        <div class="text-xs uppercase tracking-wider text-slate-400 mt-2 font-sans font-medium">Pocket Preparation</div>
                    </div>
                    <div class="pt-4 md:pt-0">
                        <div class="capacity-counter font-display font-bold text-4xl lg:text-5xl text-white font-mono tabular-nums tracking-tight" data-target="7124">7,124</div>
                        <div class="text-xs uppercase tracking-wider text-slate-400 mt-2 font-sans font-medium">Assembled &amp; Checked</div>
                    </div>
                </div>
            </div>

            <!-- Sister Concern Facility Heading -->
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
                <div>
                    <h2 class="font-display font-medium text-3xl sm:text-4xl text-stark-text tracking-tight text-balance">
                        Integrated <span class="font-serif italic font-normal text-stark-primary">Sister Concern</span> Facilities
                    </h2>
                    <p class="text-base text-stark-muted mt-2 text-pretty font-sans">
                        6 dedicated production factories delivering vertical autonomy across luggage, bags, polymer molding, and printing.
                    </p>
                </div>
                <div class="text-xs font-mono text-slate-500">
                    Inspected &amp; Approved by FLAXA
                </div>
            </div>

            <!-- 6 Sister Concern Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Facility 1 -->
                <x-facility-card
                    name="Rider Leather Bags & Luggage Factory Ltd."
                    specialty="Luggage & Leathercraft"
                    location="Brahmanbaria Sadar, Bangladesh"
                    capacity="650,000 Pcs/Mo"
                    image="https://starkbags.com/wp-content/uploads/2025/02/rider-3-768x432-1.webp"
                    description="Primary manufacturing unit for hard-shell spinner suitcases, executive leather travel bags, and reinforced duffels with automated assembly lines."
                />

                <!-- Facility 2 -->
                <x-facility-card
                    name="Victor Bags Factory Ltd."
                    specialty="Technical Backpacks"
                    location="Kuttapara, Sarail, Bangladesh"
                    capacity="400,000 Pcs/Mo"
                    image="https://starkbags.com/wp-content/uploads/2025/02/WhatsApp-Image-2023-08-29-at-6-qyxjgku1si9ln1n9nvuvzukk5iawqc8zqjrcnari4w.jpg"
                    description="High-speed sewing plant specializing in commuter backpacks, laptop sleeves, daypacks, and water-repellent sports bags."
                />

                <!-- Facility 3 -->
                <x-facility-card
                    name="Sensible Polymer Industries Ltd."
                    specialty="Polymer & Shell Molding"
                    location="Brahmanbaria, Bangladesh"
                    capacity="300,000 Shells/Mo"
                    image="https://starkbags.com/wp-content/uploads/2025/02/Sensibal-qyx49htq0vcm9ibd8wky9ejdb0t3obd66qik4jxhn4.jpg"
                    description="Heavy injection molding and vacuum sheet thermoforming unit producing 100% Bayer Polycarbonate, ABS, and PP suitcase shells."
                />

                <!-- Facility 4 -->
                <x-facility-card
                    name="Premier Polymer Industries Ltd."
                    specialty="Hardware & Extrusions"
                    location="Brahmanbaria, Bangladesh"
                    capacity="Full Supply Integration"
                    image="https://starkbags.com/wp-content/uploads/2025/02/20241223_165355-1-768x491-1.jpg"
                    description="Custom tooling and hardware component fabrication: aluminum telescoping trolley tubes, 360-degree silent spinner wheels, and corner guards."
                />

                <!-- Facility 5 -->
                <x-facility-card
                    name="Rider Packaging and Accessories Ltd."
                    specialty="Packaging & Zippers"
                    location="Budhal, Brahmanbaria"
                    capacity="1,500,000 Pcs/Mo"
                    image="https://starkbags.com/wp-content/uploads/2025/02/wmremove-transformed-scaled-qyyty5j84b9dwrclks0pt92a0iuos88culrdtupevq.jpeg"
                    description="In-house production of 5-ply export master cartons, polybags, hangtags, and heavy-duty #8 and #10 coil zipper assemblies."
                />

                <!-- Facility 6 -->
                <x-facility-card
                    name="Sohagpur Printing Factory Ltd."
                    specialty="Screen & Digital Printing"
                    location="Brahmanbaria, Bangladesh"
                    capacity="50,000 Imprints/Day"
                    image="https://starkbags.com/wp-content/uploads/2025/02/footer-slider_0000-1024x427.jpg"
                    description="Textile embellishment plant equipped with automated carousel screen printing, silicone branding, heat transfers, and embroidery."
                />
            </div>
        </div>
    </section>

    <!-- ===================================================================== -->
    <!-- SECTION 5: PRODUCTS CATALOG                                           -->
    <!-- 8 Real Products from starkbags.com                                    -->
    <!-- ===================================================================== -->
    <section id="products" class="py-24 bg-white border-b border-stark-border scroll-mt-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <!-- Header & Filter -->
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
                <div>
                    <h2 class="font-display font-medium text-3xl sm:text-4xl text-stark-text tracking-tight text-balance">
                        Featured Luggage &amp; <span class="font-serif italic font-normal text-stark-primary">Travel Gear</span>
                    </h2>
                    <p class="text-base text-stark-muted mt-2 text-pretty font-sans">
                        Engineered for international brand programs. Available for custom OEM specification and wholesale contract runs.
                    </p>
                </div>

                <!-- Semantic Filter Controls with Keyboard & Focus States -->
                <div id="product-filter-group" class="flex flex-wrap items-center gap-2 font-sans text-xs font-medium" role="group" aria-label="Product Categories">
                    <button type="button" data-filter="all" class="product-filter-btn active px-4 py-2 rounded-full bg-stark-primary text-white shadow-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary transition-colors">All Products</button>
                    <button type="button" data-filter="hard-shell" class="product-filter-btn px-4 py-2 rounded-full bg-slate-100 text-slate-700 hover:bg-slate-200 transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary">Hard-Shell Spinners</button>
                    <button type="button" data-filter="duffel" class="product-filter-btn px-4 py-2 rounded-full bg-slate-100 text-slate-700 hover:bg-slate-200 transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary">Travel Duffels</button>
                </div>
            </div>

            <!-- 8 Products Grid (4 Columns x 2 Rows) -->
            <div id="product-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Product 1 -->
                <x-product-card
                    data-category="hard-shell"
                    title="AeroLite 20-Inch Carry-On Spinner"
                    category="Hard-Shell Suitcase"
                    material="Bayer Polycarbonate Shell"
                    image="https://starkbags.com/wp-content/uploads/2025/02/1-3-1024x1024.png"
                    badge="TSA Approved"
                    :features="['Silent 360° Double Wheels', 'Aluminum Telescopic Handle', 'Expandable Interior Divider']"
                />

                <!-- Product 2 -->
                <x-product-card
                    data-category="duffel"
                    title="Voyager 60L Weekender Duffel"
                    category="Travel Duffel"
                    material="1000D Ballistic Nylon"
                    image="https://starkbags.com/wp-content/uploads/2025/02/2-3-1024x1024.png"
                    badge="Water Repellent"
                    :features="['YKK #10 Lockable Zippers', 'Reinforced Webbed Handles', 'Separate Shoe Compartment']"
                />

                <!-- Product 3 -->
                <x-product-card
                    data-category="duffel"
                    title="All-Terrain Wheeled Holdall"
                    category="Rolling Duffel"
                    material="High-Density Poly Fabric"
                    image="https://starkbags.com/wp-content/uploads/2025/02/3-3.png"
                    badge="Heavy Duty"
                    :features="['Oversized Inline Skate Wheels', 'Rigid Molded Base Plate', 'Padded Ergonomic Pull Grip']"
                />

                <!-- Product 4 -->
                <x-product-card
                    data-category="duffel"
                    title="Navigator Maritime Travel Holdall"
                    category="Travel Duffel"
                    material="Heavy-Duty Ripstop Canvas"
                    image="https://starkbags.com/wp-content/uploads/2025/02/4-3.png"
                    badge="Contract Export"
                    :features="['Reinforced Base Skids', 'Detachable Padded Shoulder Strap', 'Internal Wet Gear Pocket']"
                />

                <!-- Product 5 -->
                <x-product-card
                    data-category="hard-shell"
                    title="Carbonite 3-Piece Spinner Set"
                    category="Luggage Trio (20in, 24in, 28in)"
                    material="Textured Scratch-Resistant PC"
                    image="https://starkbags.com/wp-content/uploads/2025/02/1-2.png"
                    badge="Best Seller"
                    :features="['Nest-Inside Storage System', 'Corner Impact Protectors', 'Custom Color Matching']"
                />

                <!-- Product 6 -->
                <x-product-card
                    data-category="hard-shell"
                    title="Botanical Mint Luggage Duo"
                    category="Spinner Suitcase Duo"
                    material="Hybrid ABS/PC Formulation"
                    image="https://starkbags.com/wp-content/uploads/2025/02/2-2.png"
                    badge="Lightweight"
                    :features="['25% Lighter Shell Compound', 'Built-in Weight Indicator Option', 'Smooth Dual Spinner Casters']"
                />

                <!-- Product 7 -->
                <x-product-card
                    data-category="hard-shell"
                    title="Executive Stealth Hardcase"
                    category="Business Carry-On"
                    material="Anodized Frame + PC Shell"
                    image="https://starkbags.com/wp-content/uploads/2025/02/3-2.png"
                    badge="Premium"
                    :features="['Dual Integrated TSA Latches', 'Slow-Release Spring Handles', 'Suit Packing Foldout']"
                />

                <!-- Product 8 -->
                <x-product-card
                    data-category="hard-shell"
                    title="Blush Rose Gold Luxury Spinner"
                    category="Fashion Luggage"
                    material="Gloss Finish Polycarbonate"
                    image="https://starkbags.com/wp-content/uploads/2025/02/4-2.png"
                    badge="Retail Grade"
                    :features="['Color-Matched Zippers & Trim', 'Ultra-Glide Ball Bearing Wheels', 'Velvet-Touch Lined Interior']"
                />
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const filterButtons = document.querySelectorAll('.product-filter-btn');
                    const cards = document.querySelectorAll('#product-grid > div');

                    filterButtons.forEach(btn => {
                        btn.addEventListener('click', function () {
                            const filter = this.getAttribute('data-filter');

                            filterButtons.forEach(b => {
                                b.classList.remove('bg-stark-primary', 'text-white', 'shadow-sm', 'active');
                                b.classList.add('bg-slate-100', 'text-slate-700');
                            });
                            this.classList.add('bg-stark-primary', 'text-white', 'shadow-sm', 'active');
                            this.classList.remove('bg-slate-100', 'text-slate-700');

                            cards.forEach(card => {
                                const cat = card.getAttribute('data-category');
                                if (filter === 'all' || cat === filter) {
                                    card.style.display = 'flex';
                                } else {
                                    card.style.display = 'none';
                                }
                            });
                        });
                    });
                });
            </script>
        </div>
    </section>

    <!-- ===================================================================== -->
    <!-- SECTION 6: FACTORY CALLOUT & DIRECT RFQ INQUIRY                       -->
    <!-- Production floor photograph + RFQ quote submission                    -->
    <!-- ===================================================================== -->
    <section id="inquiry" class="py-24 bg-stark-obsidian text-white relative overflow-hidden scroll-mt-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <!-- Left: Factory Floor Showcase Photo -->
                <div class="lg:col-span-6 space-y-6">
                    <div class="relative rounded-2xl overflow-hidden border border-white/15 shadow-2xl aspect-[16/10] bg-slate-900">
                        <img src="https://starkbags.com/wp-content/uploads/2025/02/3.jpg" alt="Stark Bag Active Manufacturing Assembly Floor" width="640" height="400" loading="lazy" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 text-xs font-mono text-slate-300 flex items-center justify-between">
                            <span>Main Assembly Hall &bull; Plant Unit #02</span>
                            <span class="text-emerald-400">Strict AQL Standards</span>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-medium text-2xl sm:text-3xl text-white text-pretty tracking-tight">
                            Direct Procurement &amp; <span class="font-serif italic font-normal text-rose-300">Contract Manufacturing</span>
                        </h3>
                        <p class="text-sm sm:text-base text-slate-300 leading-relaxed font-sans text-pretty">
                            Whether you require full private-label creation for an upcoming luggage collection or high-capacity OEM manufacturing, our merchandising and engineering teams provide rapid prototyping, material compounding, and complete FOB/CIF logistics.
                        </p>
                    </div>

                    <!-- Certifications Logos -->
                    <div id="certifications" class="pt-4 border-t border-white/10 scroll-mt-20">
                        <span class="text-[11px] font-mono text-slate-400 uppercase tracking-wider block mb-4">Accredited Compliance Standards</span>
                        <div class="flex flex-wrap items-center gap-4">
                            <div class="px-3 py-1.5 rounded bg-white/10 border border-white/15 font-mono text-xs font-semibold text-white">ISO 9001:2015</div>
                            <div class="px-3 py-1.5 rounded bg-white/10 border border-white/15 font-mono text-xs font-semibold text-white">ISO 14001:2015</div>
                            <div class="px-3 py-1.5 rounded bg-white/10 border border-white/15 font-mono text-xs font-semibold text-white">amfori BSCI</div>
                            <div class="px-3 py-1.5 rounded bg-white/10 border border-white/15 font-mono text-xs font-semibold text-white">Sedex SMETA</div>
                            <div class="px-3 py-1.5 rounded bg-white/10 border border-white/15 font-mono text-xs font-semibold text-white">FSC Certified</div>
                        </div>
                    </div>
                </div>

                <!-- Right: RFQ Form Container -->
                <div class="lg:col-span-6 bg-white text-stark-text rounded-2xl p-8 lg:p-10 shadow-2xl border border-slate-200">
                    <div class="border-b border-slate-100 pb-4 mb-6">
                        <h3 class="font-display font-semibold text-2xl text-stark-text text-pretty tracking-tight">Request Factory Quotation</h3>
                        <p class="text-sm text-slate-500 mt-1 text-pretty font-sans">Submit your project details for rapid engineering review and export price quotes.</p>
                    </div>

                    <form action="#" method="POST" class="space-y-4" onsubmit="event.preventDefault(); alert('Inquiry received! Our export merchandising department will contact you within 24 hours.');">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="rfq-contact-name" class="block text-xs font-sans font-medium text-slate-700 mb-1.5">Contact Name *</label>
                                <input type="text" id="rfq-contact-name" name="contact_name" autocomplete="name" required placeholder="e.g. John Doe…" class="w-full px-3.5 py-2.5 rounded-lg border border-stark-border text-sm text-stark-text font-sans placeholder-slate-400 focus:outline-none focus:border-stark-primary focus:ring-1 focus:ring-stark-primary">
                            </div>
                            <div>
                                <label for="rfq-company-name" class="block text-xs font-sans font-medium text-slate-700 mb-1.5">Company / Retail Brand *</label>
                                <input type="text" id="rfq-company-name" name="company" autocomplete="organization" required placeholder="e.g. Globetrotter Gear Ltd.…" class="w-full px-3.5 py-2.5 rounded-lg border border-stark-border text-sm text-stark-text font-sans placeholder-slate-400 focus:outline-none focus:border-stark-primary focus:ring-1 focus:ring-stark-primary">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="rfq-email" class="block text-xs font-sans font-medium text-slate-700 mb-1.5">Business Email *</label>
                                <input type="email" id="rfq-email" name="email" autocomplete="email" spellcheck="false" required placeholder="procurement@company.com…" class="w-full px-3.5 py-2.5 rounded-lg border border-stark-border text-sm text-stark-text font-sans placeholder-slate-400 focus:outline-none focus:border-stark-primary focus:ring-1 focus:ring-stark-primary">
                            </div>
                            <div>
                                <label for="rfq-country" class="block text-xs font-sans font-medium text-slate-700 mb-1.5">Destination Country *</label>
                                <input type="text" id="rfq-country" name="country" autocomplete="country-name" required placeholder="e.g. United States, Germany…" class="w-full px-3.5 py-2.5 rounded-lg border border-stark-border text-sm text-stark-text font-sans placeholder-slate-400 focus:outline-none focus:border-stark-primary focus:ring-1 focus:ring-stark-primary">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="rfq-product-category" class="block text-xs font-sans font-medium text-slate-700 mb-1.5">Product Category</label>
                                <select id="rfq-product-category" name="category" class="w-full px-3.5 py-2.5 rounded-lg border border-stark-border text-sm text-stark-text font-sans bg-white focus:outline-none focus:border-stark-primary focus:ring-1 focus:ring-stark-primary">
                                    <option value="hard-shell">Hard-Shell Spinner Suitcases</option>
                                    <option value="backpacks">Technical / Laptop Backpacks</option>
                                    <option value="duffels">Travel Duffels & Holdalls</option>
                                    <option value="tooling">Custom Polymer Component Tooling</option>
                                    <option value="multi-oem">Multi-Category OEM Program</option>
                                </select>
                            </div>
                            <div>
                                <label for="rfq-quantity" class="block text-xs font-sans font-medium text-slate-700 mb-1.5">Target Quantity</label>
                                <select id="rfq-quantity" name="target_quantity" class="w-full px-3.5 py-2.5 rounded-lg border border-stark-border text-sm text-stark-text font-sans bg-white focus:outline-none focus:border-stark-primary focus:ring-1 focus:ring-stark-primary">
                                    <option value="sample">1,000 - 5,000 units (Sample / Pilot)</option>
                                    <option value="medium">5,000 - 25,000 units</option>
                                    <option value="large">25,000 - 100,000 units</option>
                                    <option value="annual">100,000+ units (Annual Contract)</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="rfq-specs" class="block text-xs font-sans font-medium text-slate-700 mb-1.5">Project Specifications & Requirements</label>
                            <textarea id="rfq-specs" name="specifications" rows="3" placeholder="Provide material preferences, target FOB pricing, required ship date, or customization requests…" class="w-full px-3.5 py-2.5 rounded-lg border border-stark-border text-sm text-stark-text font-sans placeholder-slate-400 focus:outline-none focus:border-stark-primary focus:ring-1 focus:ring-stark-primary"></textarea>
                        </div>

                        <button type="submit" class="w-full py-3.5 rounded-lg bg-stark-primary text-white font-sans text-xs font-bold uppercase tracking-wider hover:bg-stark-primary-hover active:scale-[0.99] transition-[background-color,transform] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary shadow-md">
                            Submit RFQ for Manufacturing Review
                        </button>

                        <p class="text-[11px] text-center text-slate-400">
                            Direct email: <a href="mailto:info@starkbags.com" class="text-stark-primary font-mono hover:underline rounded focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-stark-primary">info@starkbags.com</a> &bull; Non-Disclosure Agreements (NDA) honored.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
