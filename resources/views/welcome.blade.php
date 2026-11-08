@extends('layouts.app')

@section('title', 'Stark Bag Industries Ltd. | Industrial Luggage & Backpack Manufacturer')

@section('content')

    <!-- ===================================================================== -->
    <!-- SECTION 1: HERO (The Industrial Atelier)                              -->
    <!-- 1 Section per Viewport on 1440x900                                    -->
    <!-- ===================================================================== -->
    <section id="hero" class="relative min-h-[calc(100vh-5rem)] flex items-center bg-stark-obsidian text-white overflow-hidden py-20 scroll-mt-20">
        <!-- Hero Background: Authentic luggage imagery with subtle ambient dark vignette -->
        <div class="absolute inset-0 z-0 opacity-25">
            <img src="https://starkbags.com/wp-content/uploads/2025/02/footer-slider_0001-1024x427.jpg" alt="Stark Industrial Luggage Showcase" width="1024" height="427" class="w-full h-full object-cover object-center filter grayscale contrast-125">
        </div>
        <div class="absolute inset-0 z-0 bg-gradient-to-r from-stark-obsidian via-stark-obsidian/90 to-stark-obsidian/60"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-12 w-full grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-8 space-y-6">
                <!-- Trust Pill Badge -->
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/10 border border-white/15 text-xs font-mono text-slate-300">
                    <span class="w-2 h-2 rounded-full bg-stark-primary animate-pulse motion-reduce:animate-none" aria-hidden="true"></span>
                    <span>1.5&nbsp;M+ Units Monthly Throughput &bull; Bangladesh to Global Ports</span>
                </div>

                <!-- Headline (No Eyebrow Rule: Headline speaks with its own scale) -->
                <h1 class="font-display font-extrabold text-4xl sm:text-5xl lg:text-6xl text-white tracking-tight leading-[1.08] text-balance">
                    Engineering Export-Grade Travel Gear & Luggage at Scale.
                </h1>

                <!-- Subtitle -->
                <p class="text-base sm:text-lg text-slate-300 leading-relaxed max-w-2xl font-sans text-pretty">
                    Stark Bag Industries Ltd. is Bangladesh’s integrated manufacturing powerhouse. Spanning 6 specialized sister concern plants, precision polymer shell molding, and ethical supply chain governance for global retail leaders.
                </p>

                <!-- Actions -->
                <div class="flex flex-wrap items-center gap-4 pt-4">
                    <a href="#inquiry" class="inline-flex items-center justify-center px-6 py-3.5 rounded-md bg-stark-primary text-white font-display text-sm font-bold uppercase tracking-wider hover:bg-stark-primary-hover active:scale-[0.98] transition-[background-color,transform] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white shadow-lg shadow-stark-primary/20">
                        Inquire for OEM / Contract Production
                    </a>
                    <a href="#facilities" class="inline-flex items-center justify-center px-6 py-3.5 rounded-md bg-white/10 hover:bg-white/15 border border-white/20 text-white font-display text-sm font-semibold tracking-wide transition-[background-color,border-color] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary">
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

            <!-- Hero Floating Spec Card -->
            <div class="lg:col-span-4 hidden lg:block">
                <div class="bg-stark-slate/90 backdrop-blur-md border border-white/15 rounded-2xl p-6 text-white space-y-5 shadow-2xl">
                    <div class="flex items-center justify-between border-b border-white/10 pb-4">
                        <span class="font-display font-bold text-sm uppercase tracking-wider text-stark-primary">Factory Specification</span>
                        <span class="text-[11px] font-mono text-emerald-400 bg-emerald-950/60 px-2 py-0.5 rounded border border-emerald-500/30">Active Production</span>
                    </div>

                    <div class="space-y-4 text-xs">
                        <div class="flex justify-between items-center">
                            <span class="text-slate-400">Total Workforce:</span>
                            <span class="font-mono font-bold text-white text-sm">5,000+ Workers</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-slate-400">Integrated Units:</span>
                            <span class="font-mono font-bold text-white text-sm">6 Sister Concerns</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-slate-400">Primary Port:</span>
                            <span class="font-mono font-bold text-white text-sm">Chittagong Port (BDCGP)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-slate-400">Main Export Hubs:</span>
                            <span class="font-mono font-bold text-white text-sm">USA, EU, Japan, GCC</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-slate-400">Quality Lead Time:</span>
                            <span class="font-mono font-bold text-white text-sm">Strict AQL 1.5 / 2.5</span>
                        </div>
                    </div>

                    <div class="pt-4 border-t border-white/10">
                        <a href="#products" class="w-full inline-flex items-center justify-center py-2.5 rounded bg-white/10 hover:bg-white/20 text-xs font-display font-bold text-white transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary">
                            Inspect Product Lineup &darr;
                        </a>
                    </div>
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
                        <h2 class="font-display font-black text-2xl lg:text-3xl text-white tracking-tight uppercase leading-snug text-balance">
                            Heavy-Duty Production Powerhouse
                        </h2>
                        <p class="text-rose-100 text-xs mt-3 leading-relaxed text-pretty">
                            Complete vertical integration: from resin molding and hardware stamping to robotic cutting and automated sewing lines.
                        </p>
                    </div>

                    <!-- 6 Grid Stats with Tabular Numerals -->
                    <div class="grid grid-cols-2 gap-6 my-8 py-6 border-y border-white/20">
                        <div>
                            <div class="font-display font-black text-3xl lg:text-4xl tracking-tight text-white font-mono tabular-nums">1.5M+</div>
                            <div class="text-[11px] font-display font-semibold uppercase tracking-wider text-rose-200 mt-1">Pcs Monthly Output</div>
                        </div>
                        <div>
                            <div class="font-display font-black text-3xl lg:text-4xl tracking-tight text-white font-mono tabular-nums">5,000+</div>
                            <div class="text-[11px] font-display font-semibold uppercase tracking-wider text-rose-200 mt-1">Skilled Workforce</div>
                        </div>
                        <div>
                            <div class="font-display font-black text-3xl lg:text-4xl tracking-tight text-white font-mono tabular-nums">6</div>
                            <div class="text-[11px] font-display font-semibold uppercase tracking-wider text-rose-200 mt-1">Sister Concern Units</div>
                        </div>
                        <div>
                            <div class="font-display font-black text-3xl lg:text-4xl tracking-tight text-white font-mono tabular-nums">9+</div>
                            <div class="text-[11px] font-display font-semibold uppercase tracking-wider text-rose-200 mt-1">Years Manufacturing</div>
                        </div>
                        <div>
                            <div class="font-display font-black text-3xl lg:text-4xl tracking-tight text-white font-mono tabular-nums">34+</div>
                            <div class="text-[11px] font-display font-semibold uppercase tracking-wider text-rose-200 mt-1">Certifications</div>
                        </div>
                        <div>
                            <div class="font-display font-black text-3xl lg:text-4xl tracking-tight text-white font-mono tabular-nums">7+</div>
                            <div class="text-[11px] font-display font-semibold uppercase tracking-wider text-rose-200 mt-1">Export Continents</div>
                        </div>
                    </div>

                    <a href="#facilities" class="inline-flex items-center justify-between w-full p-4 rounded-xl bg-black/20 hover:bg-black/30 border border-white/20 text-xs font-display font-bold uppercase tracking-wider transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white">
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
                            <h3 class="font-display font-bold text-xl text-stark-text text-pretty">Who We Are</h3>
                            <p class="text-xs text-stark-muted mt-2 leading-relaxed text-pretty">
                                Stark Bag Industries Ltd. operates modern manufacturing compounds in Brahmanbaria and executive trade offices in Uttara, Dhaka. We serve top-tier retailers across North America, Europe, and Asia with uncompromising quality control.
                            </p>
                            <a href="#facilities" class="inline-flex items-center gap-1 text-xs font-display font-semibold text-stark-primary hover:text-stark-primary-hover rounded px-1 py-0.5 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary mt-3 transition-colors">
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
                            <h3 class="font-display font-bold text-xl text-stark-text text-pretty">What We Do</h3>
                            <p class="text-xs text-stark-muted mt-2 leading-relaxed text-pretty">
                                Complete ODM and OEM production for polycarbonate hard-case luggage, water-repellent tech backpacks, weekender duffels, and utility tote bags. We maintain in-house tooling, zipper fabrication, and packaging.
                            </p>
                            <a href="#products" class="inline-flex items-center gap-1 text-xs font-display font-semibold text-stark-primary hover:text-stark-primary-hover rounded px-1 py-0.5 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary mt-3 transition-colors">
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
                            <h3 class="font-display font-bold text-xl text-stark-text text-pretty">Sustainable Industry 4.0</h3>
                            <p class="text-xs text-stark-muted mt-2 leading-relaxed text-pretty">
                                Operating under ISO 14001 environmental frameworks. We utilize computerized CNC fabric cutting to minimize off-cut waste, closed-loop polymer recycling, and full FSC certification for packaging materials.
                            </p>
                            <a href="#certifications" class="inline-flex items-center gap-1 text-xs font-display font-semibold text-stark-primary hover:text-stark-primary-hover rounded px-1 py-0.5 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary mt-3 transition-colors">
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
            <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-stark-text tracking-tight text-balance">
                Global Export Footprint & Trade Corridors
            </h2>
            <p class="text-sm text-stark-muted mt-3 max-w-2xl mx-auto font-sans leading-relaxed text-pretty">
                From our manufacturing hubs in Brahmanbaria through Chittagong Port (BDCGP), Stark luggage and bags reach retail shelves across 7+ key international markets.
            </p>

            <!-- Vector Map with Radiating Export Arcs from Bangladesh -->
            <div class="relative mt-12 bg-slate-900 rounded-3xl p-8 lg:p-14 overflow-hidden border border-slate-800 shadow-2xl">
                <!-- Ambient map grid -->
                <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:16px_16px]"></div>

                <div class="relative z-10 grid grid-cols-1 md:grid-cols-4 gap-6 text-left">
                    <!-- North America -->
                    <div class="p-5 rounded-xl bg-white/5 border border-white/10 hover:border-stark-blue transition-colors">
                        <div class="flex items-center gap-2 text-stark-blue font-mono text-xs uppercase tracking-wider">
                            <span class="w-2 h-2 rounded-full bg-stark-blue" aria-hidden="true"></span>
                            North America
                        </div>
                        <h4 class="font-display font-bold text-lg text-white mt-2">USA & Canada</h4>
                        <p class="text-xs text-slate-400 mt-1">Ports: New York, Los Angeles, Vancouver. High-volume contract luggage & spinner runs.</p>
                        <span class="inline-block mt-3 font-mono text-[10px] text-slate-500">Transit: 28-35 Days FOB</span>
                    </div>

                    <!-- European Union -->
                    <div class="p-5 rounded-xl bg-white/5 border border-white/10 hover:border-stark-blue transition-colors">
                        <div class="flex items-center gap-2 text-stark-blue font-mono text-xs uppercase tracking-wider">
                            <span class="w-2 h-2 rounded-full bg-stark-blue" aria-hidden="true"></span>
                            European Union
                        </div>
                        <h4 class="font-display font-bold text-lg text-white mt-2">Germany, UK & EU</h4>
                        <p class="text-xs text-slate-400 mt-1">Ports: Hamburg, Rotterdam, Felixstowe. amfori BSCI compliant production lines.</p>
                        <span class="inline-block mt-3 font-mono text-[10px] text-slate-500">Transit: 22-26 Days FOB</span>
                    </div>

                    <!-- East Asia -->
                    <div class="p-5 rounded-xl bg-white/5 border border-white/10 hover:border-stark-blue transition-colors">
                        <div class="flex items-center gap-2 text-stark-blue font-mono text-xs uppercase tracking-wider">
                            <span class="w-2 h-2 rounded-full bg-stark-blue" aria-hidden="true"></span>
                            East Asia
                        </div>
                        <h4 class="font-display font-bold text-lg text-white mt-2">Japan & Hong Kong</h4>
                        <p class="text-xs text-slate-400 mt-1">Ports: Yokohama, Tokyo, Hong Kong. Premium finish and tight AQL 1.5 standards.</p>
                        <span class="inline-block mt-3 font-mono text-[10px] text-slate-500">Transit: 14-18 Days FOB</span>
                    </div>

                    <!-- Middle East & GCC -->
                    <div class="p-5 rounded-xl bg-white/5 border border-white/10 hover:border-stark-blue transition-colors">
                        <div class="flex items-center gap-2 text-stark-blue font-mono text-xs uppercase tracking-wider">
                            <span class="w-2 h-2 rounded-full bg-stark-blue" aria-hidden="true"></span>
                            Middle East
                        </div>
                        <h4 class="font-display font-bold text-lg text-white mt-2">UAE & Saudi Arabia</h4>
                        <p class="text-xs text-slate-400 mt-1">Ports: Jebel Ali, Dammam. Heavy-duty luggage and pilgrimage holdalls.</p>
                        <span class="inline-block mt-3 font-mono text-[10px] text-slate-500">Transit: 10-14 Days FOB</span>
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
                    <h2 class="font-display font-bold text-2xl lg:text-3xl text-white tracking-tight uppercase text-balance">
                        Monthly Production Capacity
                    </h2>
                    <div class="w-16 h-1 bg-stark-primary mx-auto mt-3"></div>
                </div>

                <!-- 4 Real Capacity Metrics -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-y md:divide-y-0 md:divide-x divide-white/10">
                    <div class="pt-4 md:pt-0">
                        <div class="font-display font-black text-4xl lg:text-5xl text-white font-mono tabular-nums">9,600</div>
                        <div class="text-xs uppercase tracking-wider text-slate-400 mt-2 font-display font-semibold">Total Daily Units</div>
                    </div>
                    <div class="pt-4 md:pt-0">
                        <div class="font-display font-black text-4xl lg:text-5xl text-white font-mono tabular-nums">7,106</div>
                        <div class="text-xs uppercase tracking-wider text-slate-400 mt-2 font-display font-semibold">Case Rolling Line</div>
                    </div>
                    <div class="pt-4 md:pt-0">
                        <div class="font-display font-black text-4xl lg:text-5xl text-white font-mono tabular-nums">7,124</div>
                        <div class="text-xs uppercase tracking-wider text-slate-400 mt-2 font-display font-semibold">Pocket Preparation</div>
                    </div>
                    <div class="pt-4 md:pt-0">
                        <div class="font-display font-black text-4xl lg:text-5xl text-white font-mono tabular-nums">7,124</div>
                        <div class="text-xs uppercase tracking-wider text-slate-400 mt-2 font-display font-semibold">Assembled & Checked</div>
                    </div>
                </div>
            </div>

            <!-- Sister Concern Facility Heading -->
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
                <div>
                    <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-stark-text tracking-tight text-balance">
                        Integrated Sister Concern Facilities
                    </h2>
                    <p class="text-sm text-stark-muted mt-2 text-pretty">
                        6 dedicated production factories delivering vertical autonomy across luggage, bags, polymer molding, and printing.
                    </p>
                </div>
                <div class="text-xs font-mono text-slate-500">
                    Inspected & Approved by FLAXA
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
                    <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-stark-text tracking-tight text-balance">
                        Featured Luggage & Travel Gear
                    </h2>
                    <p class="text-sm text-stark-muted mt-2 text-pretty">
                        Engineered for international brand programs. Available for custom OEM specification and wholesale contract runs.
                    </p>
                </div>

                <!-- Semantic Filter Controls with Keyboard & Focus States -->
                <div class="flex flex-wrap items-center gap-2 font-display text-xs font-semibold" role="group" aria-label="Product Categories">
                    <button type="button" class="px-3.5 py-1.5 rounded-full bg-stark-primary text-white shadow-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary">All Products</button>
                    <button type="button" class="px-3.5 py-1.5 rounded-full bg-slate-100 text-slate-700 hover:bg-slate-200 transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary">Hard-Shell Spinners</button>
                    <button type="button" class="px-3.5 py-1.5 rounded-full bg-slate-100 text-slate-700 hover:bg-slate-200 transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary">Travel Duffels</button>
                    <button type="button" class="px-3.5 py-1.5 rounded-full bg-slate-100 text-slate-700 hover:bg-slate-200 transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary">Backpacks</button>
                </div>
            </div>

            <!-- 8 Products Grid (4 Columns x 2 Rows) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Product 1 -->
                <x-product-card
                    title="AeroLite 20\" Carry-On Spinner"
                    category="Hard-Shell Suitcase"
                    material="Bayer Polycarbonate Shell"
                    image="https://starkbags.com/wp-content/uploads/2025/02/1-3-1024x1024.png"
                    badge="TSA Approved"
                    :features="['Silent 360° Double Wheels', 'Aluminum Telescopic Handle', 'Expandable Interior Divider']"
                />

                <!-- Product 2 -->
                <x-product-card
                    title="Voyager 60L Weekender Duffel"
                    category="Travel Duffel"
                    material="1000D Ballistic Nylon"
                    image="https://starkbags.com/wp-content/uploads/2025/02/2-3-1024x1024.png"
                    badge="Water Repellent"
                    :features="['YKK #10 Lockable Zippers', 'Reinforced Webbed Handles', 'Separate Shoe Compartment']"
                />

                <!-- Product 3 -->
                <x-product-card
                    title="All-Terrain Wheeled Holdall"
                    category="Rolling Duffel"
                    material="High-Density Poly Fabric"
                    image="https://starkbags.com/wp-content/uploads/2025/02/3-3.png"
                    badge="Heavy Duty"
                    :features="['Oversized Inline Skate Wheels', 'Rigid Molded Base Plate', 'Padded Ergonomic Pull Grip']"
                />

                <!-- Product 4 -->
                <x-product-card
                    title="Navigator Maritime Travel Holdall"
                    category="Travel Duffel"
                    material="Heavy-Duty Ripstop Canvas"
                    image="https://starkbags.com/wp-content/uploads/2025/02/4-3.png"
                    badge="Contract Export"
                    :features="['Reinforced Base Skids', 'Detachable Padded Shoulder Strap', 'Internal Wet Gear Pocket']"
                />

                <!-- Product 5 -->
                <x-product-card
                    title="Carbonite 3-Piece Spinner Set"
                    category="Luggage Trio (20\"/24\"/28\")"
                    material="Textured Scratch-Resistant PC"
                    image="https://starkbags.com/wp-content/uploads/2025/02/1-2.png"
                    badge="Best Seller"
                    :features="['Nest-Inside Storage System', 'Corner Impact Protectors', 'Custom Color Matching']"
                />

                <!-- Product 6 -->
                <x-product-card
                    title="Botanical Mint Luggage Duo"
                    category="Spinner Suitcase Duo"
                    material="Hybrid ABS/PC Formulation"
                    image="https://starkbags.com/wp-content/uploads/2025/02/2-2.png"
                    badge="Lightweight"
                    :features="['25% Lighter Shell Compound', 'Built-in Weight Indicator Option', 'Smooth Dual Spinner Casters']"
                />

                <!-- Product 7 -->
                <x-product-card
                    title="Executive Stealth Hardcase"
                    category="Business Carry-On"
                    material="Anodized Frame + PC Shell"
                    image="https://starkbags.com/wp-content/uploads/2025/02/3-2.png"
                    badge="Premium"
                    :features="['Dual Integrated TSA Latches', 'Slow-Release Spring Handles', 'Suit Packing Foldout']"
                />

                <!-- Product 8 -->
                <x-product-card
                    title="Blush Rose Gold Luxury Spinner"
                    category="Fashion Luggage"
                    material="Gloss Finish Polycarbonate"
                    image="https://starkbags.com/wp-content/uploads/2025/02/4-2.png"
                    badge="Retail Grade"
                    :features="['Color-Matched Zippers & Trim', 'Ultra-Glide Ball Bearing Wheels', 'Velvet-Touch Lined Interior']"
                />
            </div>
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
                        <h3 class="font-display font-bold text-2xl text-white text-pretty">
                            Direct Procurement & Contract Manufacturing
                        </h3>
                        <p class="text-xs text-slate-300 leading-relaxed font-sans text-pretty">
                            Whether you require full private-label creation for an upcoming luggage collection or high-capacity OEM manufacturing, our merchandising and engineering teams provide rapid prototyping, material compounding, and complete FOB/CIF logistics.
                        </p>
                    </div>

                    <!-- Certifications Logos -->
                    <div id="certifications" class="pt-4 border-t border-white/10 scroll-mt-20">
                        <span class="text-[11px] font-mono text-slate-400 uppercase tracking-wider block mb-4">Accredited Compliance Standards</span>
                        <div class="flex flex-wrap items-center gap-6">
                            <div class="px-3 py-1.5 rounded bg-white/10 border border-white/15 font-mono text-xs font-bold text-white">ISO 9001:2015</div>
                            <div class="px-3 py-1.5 rounded bg-white/10 border border-white/15 font-mono text-xs font-bold text-white">ISO 14001:2015</div>
                            <div class="px-3 py-1.5 rounded bg-white/10 border border-white/15 font-mono text-xs font-bold text-white">amfori BSCI</div>
                            <div class="px-3 py-1.5 rounded bg-white/10 border border-white/15 font-mono text-xs font-bold text-white">Sedex SMETA</div>
                            <div class="px-3 py-1.5 rounded bg-white/10 border border-white/15 font-mono text-xs font-bold text-white">FSC Certified</div>
                        </div>
                    </div>
                </div>

                <!-- Right: RFQ Form Container -->
                <div class="lg:col-span-6 bg-white text-stark-text rounded-2xl p-8 lg:p-10 shadow-2xl border border-slate-200">
                    <div class="border-b border-slate-100 pb-4 mb-6">
                        <h3 class="font-display font-extrabold text-2xl text-stark-text text-pretty">Request Factory Quotation</h3>
                        <p class="text-xs text-stark-muted mt-1 text-pretty">Submit your project details for rapid engineering review and export price quotes.</p>
                    </div>

                    <form action="#" method="POST" class="space-y-4" onsubmit="event.preventDefault(); alert('Inquiry received! Our export merchandising department will contact you within 24 hours.');">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="rfq-contact-name" class="block text-xs font-display font-semibold text-slate-700 mb-1">Contact Name *</label>
                                <input type="text" id="rfq-contact-name" name="contact_name" autocomplete="name" required placeholder="e.g. John Doe…" class="w-full px-3.5 py-2.5 rounded-md border border-stark-border text-xs text-stark-text placeholder-slate-400 focus:outline-none focus:border-stark-primary focus:ring-1 focus:ring-stark-primary">
                            </div>
                            <div>
                                <label for="rfq-company-name" class="block text-xs font-display font-semibold text-slate-700 mb-1">Company / Retail Brand *</label>
                                <input type="text" id="rfq-company-name" name="company" autocomplete="organization" required placeholder="e.g. Globetrotter Gear Ltd.…" class="w-full px-3.5 py-2.5 rounded-md border border-stark-border text-xs text-stark-text placeholder-slate-400 focus:outline-none focus:border-stark-primary focus:ring-1 focus:ring-stark-primary">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="rfq-email" class="block text-xs font-display font-semibold text-slate-700 mb-1">Business Email *</label>
                                <input type="email" id="rfq-email" name="email" autocomplete="email" spellcheck="false" required placeholder="procurement@company.com…" class="w-full px-3.5 py-2.5 rounded-md border border-stark-border text-xs text-stark-text placeholder-slate-400 focus:outline-none focus:border-stark-primary focus:ring-1 focus:ring-stark-primary">
                            </div>
                            <div>
                                <label for="rfq-country" class="block text-xs font-display font-semibold text-slate-700 mb-1">Destination Country *</label>
                                <input type="text" id="rfq-country" name="country" autocomplete="country-name" required placeholder="e.g. United States, Germany…" class="w-full px-3.5 py-2.5 rounded-md border border-stark-border text-xs text-stark-text placeholder-slate-400 focus:outline-none focus:border-stark-primary focus:ring-1 focus:ring-stark-primary">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="rfq-product-category" class="block text-xs font-display font-semibold text-slate-700 mb-1">Product Category</label>
                                <select id="rfq-product-category" name="category" class="w-full px-3.5 py-2.5 rounded-md border border-stark-border text-xs text-stark-text bg-white focus:outline-none focus:border-stark-primary focus:ring-1 focus:ring-stark-primary">
                                    <option value="hard-shell">Hard-Shell Spinner Suitcases</option>
                                    <option value="backpacks">Technical / Laptop Backpacks</option>
                                    <option value="duffels">Travel Duffels & Holdalls</option>
                                    <option value="tooling">Custom Polymer Component Tooling</option>
                                    <option value="multi-oem">Multi-Category OEM Program</option>
                                </select>
                            </div>
                            <div>
                                <label for="rfq-quantity" class="block text-xs font-display font-semibold text-slate-700 mb-1">Target Quantity</label>
                                <select id="rfq-quantity" name="target_quantity" class="w-full px-3.5 py-2.5 rounded-md border border-stark-border text-xs text-stark-text bg-white focus:outline-none focus:border-stark-primary focus:ring-1 focus:ring-stark-primary">
                                    <option value="sample">1,000 - 5,000 units (Sample / Pilot)</option>
                                    <option value="medium">5,000 - 25,000 units</option>
                                    <option value="large">25,000 - 100,000 units</option>
                                    <option value="annual">100,000+ units (Annual Contract)</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="rfq-specs" class="block text-xs font-display font-semibold text-slate-700 mb-1">Project Specifications & Requirements</label>
                            <textarea id="rfq-specs" name="specifications" rows="3" placeholder="Provide material preferences, target FOB pricing, required ship date, or customization requests…" class="w-full px-3.5 py-2.5 rounded-md border border-stark-border text-xs text-stark-text placeholder-slate-400 focus:outline-none focus:border-stark-primary focus:ring-1 focus:ring-stark-primary"></textarea>
                        </div>

                        <button type="submit" class="w-full py-3.5 rounded-md bg-stark-primary text-white font-display text-xs font-bold uppercase tracking-wider hover:bg-stark-primary-hover active:scale-[0.99] transition-[background-color,transform] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary shadow-md">
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
