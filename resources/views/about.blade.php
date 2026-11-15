@extends('layouts.app')

@section('title', 'About Stark Bag Industries Ltd. | Industrial Heritage, Leadership & Scale')

@section('content')

    <!-- ===================================================================== -->
    <!-- SECTION 1: ABOUT HERO (The Industrial Atelier Manifesto)              -->
    <!-- ===================================================================== -->
    <section class="relative bg-stark-obsidian text-white py-24 sm:py-32 overflow-hidden border-b border-white/10">
        <!-- Subtle Grid Background -->
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,rgba(225,29,72,0.12),transparent_50%)] pointer-events-none" aria-hidden="true"></div>
        <div class="absolute inset-0 opacity-5 bg-[linear-gradient(to_right,#ffffff_1px,transparent_1px),linear-gradient(to_bottom,#ffffff_1px,transparent_1px)] bg-[size:4rem_4rem] pointer-events-none" aria-hidden="true"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-12">
            <div class="max-w-3xl space-y-6">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 border border-white/15 text-xs font-mono text-rose-300">
                    <span class="w-1.5 h-1.5 rounded-full bg-stark-primary animate-pulse" aria-hidden="true"></span>
                    FLAXA Member Reg #049 &bull; Est. Brahmanbaria, Bangladesh
                </span>

                <h1 class="font-display font-medium text-4xl sm:text-5xl lg:text-6xl text-white tracking-tight leading-[1.08] text-balance">
                    Industrial Heritage, <span class="font-serif italic font-normal text-rose-300">Vertical Mastery</span>, &amp; Global Scale.
                </h1>

                <p class="text-base sm:text-lg text-slate-300 leading-relaxed font-sans text-pretty">
                    Stark Bag Industries Ltd. was founded on a singular engineering conviction: South Asian travel gear manufacturing can rival the finest European ateliers in durability, material purity, and ethical compliance. Today, we coordinate 6 specialized manufacturing plants to produce over 1.5 million export-grade luggage and travel items every month.
                </p>

                <div class="flex flex-wrap items-center gap-4 pt-4">
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-6 py-3.5 rounded-lg bg-stark-primary text-white font-sans text-sm font-semibold tracking-wide hover:bg-stark-primary-hover active:scale-[0.98] transition-[background-color,transform] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white shadow-lg shadow-stark-primary/20">
                        Schedule Factory Audit &rarr;
                    </a>
                    <a href="#sister-concerns" class="inline-flex items-center justify-center px-6 py-3.5 rounded-lg bg-white/10 hover:bg-white/15 border border-white/20 text-white font-sans text-sm font-medium tracking-wide transition-[background-color,border-color] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary">
                        Explore Our 6 Specialized Plants
                    </a>
                </div>
            </div>

            <!-- Key Numbers Strip -->
            <div class="mt-16 pt-10 border-t border-white/10 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-8">
                <div>
                    <div class="font-display font-bold text-3xl sm:text-4xl text-white font-mono tabular-nums tracking-tight">1.5M+</div>
                    <div class="text-[12px] font-sans font-medium uppercase tracking-wider text-slate-400 mt-1">Monthly Finished Units</div>
                </div>
                <div>
                    <div class="font-display font-bold text-3xl sm:text-4xl text-white font-mono tabular-nums tracking-tight">5,000+</div>
                    <div class="text-[12px] font-sans font-medium uppercase tracking-wider text-slate-400 mt-1">Skilled Technicians</div>
                </div>
                <div>
                    <div class="font-display font-bold text-3xl sm:text-4xl text-white font-mono tabular-nums tracking-tight">6</div>
                    <div class="text-[12px] font-sans font-medium uppercase tracking-wider text-slate-400 mt-1">Dedicated Sister Plants</div>
                </div>
                <div>
                    <div class="font-display font-bold text-3xl sm:text-4xl text-white font-mono tabular-nums tracking-tight">28+</div>
                    <div class="text-[12px] font-sans font-medium uppercase tracking-wider text-slate-400 mt-1">Export Trade Corridors</div>
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <div class="font-display font-bold text-3xl sm:text-4xl text-emerald-400 font-mono tabular-nums tracking-tight">Grade A</div>
                    <div class="text-[12px] font-sans font-medium uppercase tracking-wider text-slate-400 mt-1">amfori BSCI Audited</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================================================================== -->
    <!-- SECTION 2: EXECUTIVE STATEMENT & CORE PHILOSOPHY                      -->
    <!-- ===================================================================== -->
    <section class="py-24 bg-white border-b border-stark-border">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <!-- Left: MD Vision Card -->
                <div class="lg:col-span-6 bg-stark-bg border border-stark-border rounded-2xl p-8 sm:p-10 shadow-sm relative">
                    <div class="w-12 h-1 bg-stark-primary mb-6"></div>
                    <blockquote class="text-lg sm:text-xl font-display text-stark-text leading-relaxed tracking-tight text-pretty">
                        &ldquo;We built Stark Bag Industries Ltd. on an uncompromising premise: an industrial luggage manufacturer in South Asia can rival any European atelier in precision, durability, and worker welfare. When a traveler picks up our luggage in Frankfurt, Tokyo, or New York, they hold the culmination of thousands of hours of specialized craftsmanship and ethical engineering.&rdquo;
                    </blockquote>

                    <div class="mt-8 pt-6 border-t border-stark-border flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-stark-obsidian text-white flex items-center justify-center font-display font-bold text-lg">
                            MT
                        </div>
                        <div>
                            <h2 class="font-display font-semibold text-base text-stark-text">Mohammad Taherul Islam</h2>
                            <p class="text-xs text-stark-muted font-mono">Managing Director &bull; Stark Bag Industries Ltd.</p>
                        </div>
                    </div>
                </div>

                <!-- Right: Manufacturing Doctrine -->
                <div class="lg:col-span-6 space-y-6">
                    <h2 class="font-display font-medium text-3xl sm:text-4xl text-stark-text tracking-tight text-balance">
                        The Architecture of <span class="font-serif italic font-normal text-stark-primary">Vertical Independence</span>.
                    </h2>

                    <p class="text-base text-slate-600 leading-relaxed font-sans text-pretty">
                        Unlike conventional sub-contractors who outsource components across fragmented third-party vendors, Stark Bag Industries operates as a fully integrated industrial ecosystem. Every structural element—from raw virgin Bayer polycarbonate resin compounding and vacuum thermoforming to aircraft-grade aluminum trolley tubes, silent spinner wheels, and 5-ply export packaging—is produced inside our own factory walls.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                        <div class="p-4 rounded-xl bg-stark-bg border border-stark-border">
                            <span class="font-mono text-xs font-bold text-stark-primary uppercase tracking-wider block mb-1">01 &bull; Material Purity</span>
                            <p class="text-xs text-slate-600">Zero recycled scrap contamination in virgin polycarbonate shells for maximum shatter-resistance at -20&deg;C.</p>
                        </div>
                        <div class="p-4 rounded-xl bg-stark-bg border border-stark-border">
                            <span class="font-mono text-xs font-bold text-stark-primary uppercase tracking-wider block mb-1">02 &bull; Supply Reliability</span>
                            <p class="text-xs text-slate-600">Direct control over hardware casting and carton packaging guarantees uninterrupted FOB dispatch schedules.</p>
                        </div>
                        <div class="p-4 rounded-xl bg-stark-bg border border-stark-border">
                            <span class="font-mono text-xs font-bold text-stark-primary uppercase tracking-wider block mb-1">03 &bull; Cost Advantage</span>
                            <p class="text-xs text-slate-600">Eliminating middleman accessory markups delivers competitive pricing for tier-1 global retail private labels.</p>
                        </div>
                        <div class="p-4 rounded-xl bg-stark-bg border border-stark-border">
                            <span class="font-mono text-xs font-bold text-stark-primary uppercase tracking-wider block mb-1">04 &bull; Ethical Traceability</span>
                            <p class="text-xs text-slate-600">Every millimeter of fabric and every component is traceable under amfori BSCI and Sedex SMETA audits.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================================================================== -->
    <!-- SECTION 3: THE 6 SISTER CONCERNS (Deep Facility Profile)               -->
    <!-- ===================================================================== -->
    <section id="sister-concerns" class="py-24 bg-stark-bg border-b border-stark-border scroll-mt-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="max-w-3xl mb-16">
                <h2 class="font-display font-medium text-3xl sm:text-4xl text-stark-text tracking-tight text-balance">
                    Our 6 Specialized <span class="font-serif italic font-normal text-stark-primary">Manufacturing Facilities</span>.
                </h2>
                <p class="text-base text-stark-muted mt-3 font-sans text-pretty">
                    Each sister concern functions as an autonomous center of excellence, equipped with specialized machinery, trained line supervisors, and rigorous quality inspection checkpoints.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Unit 1 -->
                <div class="bg-white border border-stark-border rounded-2xl p-6 flex flex-col justify-between hover:shadow-xl transition-[box-shadow,transform] duration-200 hover:-translate-y-1">
                    <div>
                        <div class="flex items-center justify-between text-xs font-mono mb-3">
                            <span class="text-stark-primary font-bold">PLANT UNIT #01</span>
                            <span class="text-slate-400">Brahmanbaria Sadar</span>
                        </div>
                        <h3 class="font-display font-semibold text-xl text-stark-text mb-2">Rider Leather Bags &amp; Luggage Factory Ltd.</h3>
                        <p class="text-xs font-mono text-slate-500 mb-4">Core Specialty: Hard-Shell Spinner Suitcases &amp; Leathercraft</p>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            Houses our primary automated assembly lines for zippered and zipperless aluminum-frame luggage, executive leather briefcases, and reinforced weekender duffels.
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs font-mono">
                        <span class="text-slate-500">Output Capacity</span>
                        <span class="font-bold text-stark-text">650,000 Pcs/Month</span>
                    </div>
                </div>

                <!-- Unit 2 -->
                <div class="bg-white border border-stark-border rounded-2xl p-6 flex flex-col justify-between hover:shadow-xl transition-[box-shadow,transform] duration-200 hover:-translate-y-1">
                    <div>
                        <div class="flex items-center justify-between text-xs font-mono mb-3">
                            <span class="text-stark-primary font-bold">PLANT UNIT #02</span>
                            <span class="text-slate-400">Kuttapara, Sarail</span>
                        </div>
                        <h3 class="font-display font-semibold text-xl text-stark-text mb-2">Victor Bags Factory Ltd.</h3>
                        <p class="text-xs font-mono text-slate-500 mb-4">Core Specialty: Technical Backpacks &amp; Commuter Gear</p>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            High-speed multi-needle sewing lines specializing in ergonomic laptop backpacks, weatherproof daypacks, tactical gear, and insulated sports travel bags.
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs font-mono">
                        <span class="text-slate-500">Output Capacity</span>
                        <span class="font-bold text-stark-text">400,000 Pcs/Month</span>
                    </div>
                </div>

                <!-- Unit 3 -->
                <div class="bg-white border border-stark-border rounded-2xl p-6 flex flex-col justify-between hover:shadow-xl transition-[box-shadow,transform] duration-200 hover:-translate-y-1">
                    <div>
                        <div class="flex items-center justify-between text-xs font-mono mb-3">
                            <span class="text-stark-primary font-bold">PLANT UNIT #03</span>
                            <span class="text-slate-400">Brahmanbaria</span>
                        </div>
                        <h3 class="font-display font-semibold text-xl text-stark-text mb-2">Sensible Polymer Industries Ltd.</h3>
                        <p class="text-xs font-mono text-slate-500 mb-4">Core Specialty: Polymer Shell Extrusion &amp; Thermoforming</p>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            Heavy hydraulic vacuum thermoforming and continuous sheet extrusion processing virgin Bayer Polycarbonate (PC), ABS-PC composites, and lightweight polypropylene (PP).
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs font-mono">
                        <span class="text-slate-500">Molding Capacity</span>
                        <span class="font-bold text-stark-text">300,000 Shells/Month</span>
                    </div>
                </div>

                <!-- Unit 4 -->
                <div class="bg-white border border-stark-border rounded-2xl p-6 flex flex-col justify-between hover:shadow-xl transition-[box-shadow,transform] duration-200 hover:-translate-y-1">
                    <div>
                        <div class="flex items-center justify-between text-xs font-mono mb-3">
                            <span class="text-stark-primary font-bold">PLANT UNIT #04</span>
                            <span class="text-slate-400">Brahmanbaria</span>
                        </div>
                        <h3 class="font-display font-semibold text-xl text-stark-text mb-2">Premier Polymer Industries Ltd.</h3>
                        <p class="text-xs font-mono text-slate-500 mb-4">Core Specialty: Tooling, Trolley Tubes &amp; Silent Wheels</p>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            Precision mold making and component fabrication: multi-stage aluminum telescoping trolley handles, 360-degree silent polyurethane dual spinner wheels, and corner bumpers.
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs font-mono">
                        <span class="text-slate-500">Component Integration</span>
                        <span class="font-bold text-stark-text">100% In-House</span>
                    </div>
                </div>

                <!-- Unit 5 -->
                <div class="bg-white border border-stark-border rounded-2xl p-6 flex flex-col justify-between hover:shadow-xl transition-[box-shadow,transform] duration-200 hover:-translate-y-1">
                    <div>
                        <div class="flex items-center justify-between text-xs font-mono mb-3">
                            <span class="text-stark-primary font-bold">PLANT UNIT #05</span>
                            <span class="text-slate-400">Budhal, Brahmanbaria</span>
                        </div>
                        <h3 class="font-display font-semibold text-xl text-stark-text mb-2">Rider Packaging and Accessories Ltd.</h3>
                        <p class="text-xs font-mono text-slate-500 mb-4">Core Specialty: Export Corrugated Cartons &amp; Zipper Lines</p>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            Heavy-duty 5-ply corrugated export master carton fabrication, polybags, hangtags, and automated continuous #8 and #10 coil zipper assembly.
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs font-mono">
                        <span class="text-slate-500">Packaging Output</span>
                        <span class="font-bold text-stark-text">1,500,000 Pcs/Month</span>
                    </div>
                </div>

                <!-- Unit 6 -->
                <div class="bg-white border border-stark-border rounded-2xl p-6 flex flex-col justify-between hover:shadow-xl transition-[box-shadow,transform] duration-200 hover:-translate-y-1">
                    <div>
                        <div class="flex items-center justify-between text-xs font-mono mb-3">
                            <span class="text-stark-primary font-bold">PLANT UNIT #06</span>
                            <span class="text-slate-400">Brahmanbaria</span>
                        </div>
                        <h3 class="font-display font-semibold text-xl text-stark-text mb-2">Sohagpur Printing Factory Ltd.</h3>
                        <p class="text-xs font-mono text-slate-500 mb-4">Core Specialty: Automated Screen, Silicone &amp; Embroidery</p>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            High-density screen printing carousel lines, embossed silicone branding, reflective heat-transfers, and computerized multi-head embroidery machines.
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs font-mono">
                        <span class="text-slate-500">Embellishment Capacity</span>
                        <span class="font-bold text-stark-text">50,000 Imprints/Day</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================================================================== -->
    <!-- SECTION 4: QUALITY TESTING RIG & ENGINEERING LAB                      -->
    <!-- ===================================================================== -->
    <section class="py-24 bg-stark-obsidian text-white border-b border-white/10">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="max-w-3xl mb-16">
                <span class="text-xs font-mono uppercase tracking-widest text-rose-300 block mb-2">Zero-Defect Protocol</span>
                <h2 class="font-display font-medium text-3xl sm:text-4xl text-white tracking-tight text-balance">
                    On-Site Material &amp; <span class="font-serif italic font-normal text-rose-300">Durability Testing</span> Rig.
                </h2>
                <p class="text-base text-slate-300 mt-3 font-sans text-pretty">
                    Every production run must pass exhaustive physical stress testing in our on-site testing facility before packaging clearance is granted.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="p-6 rounded-2xl bg-white/5 border border-white/10">
                    <div class="text-xs font-mono text-rose-400 mb-2">TEST 01 &bull; THERMAL DROP</div>
                    <h3 class="font-display font-semibold text-lg text-white mb-2">Sub-Zero Impact Free-Fall</h3>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Suitcases loaded with 25kg ballast are conditioned at -15&deg;C for 8 hours, then dropped from 1.2 meters at 6 critical corners onto solid concrete.
                    </p>
                    <div class="mt-4 pt-3 border-t border-white/10 text-[11px] font-mono text-emerald-400">Zero shell fracture tolerance</div>
                </div>

                <div class="p-6 rounded-2xl bg-white/5 border border-white/10">
                    <div class="text-xs font-mono text-rose-400 mb-2">TEST 02 &bull; TROLLEY FATIGUE</div>
                    <h3 class="font-display font-semibold text-lg text-white mb-2">5,000-Cycle Handle Jerk</h3>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Pneumatic actuators jerk the extended aluminum telescoping handle 5,000 continuous times at a rate of 20 cycles/minute with 30kg load.
                    </p>
                    <div class="mt-4 pt-3 border-t border-white/10 text-[11px] font-mono text-emerald-400">Zero rivet loosening or bending</div>
                </div>

                <div class="p-6 rounded-2xl bg-white/5 border border-white/10">
                    <div class="text-xs font-mono text-rose-400 mb-2">TEST 03 &bull; DRUM TUMBLE</div>
                    <h3 class="font-display font-semibold text-lg text-white mb-2">Octagonal Tumble Drum</h3>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Luggage rotates through a giant revolving steel drum containing acute angle obstacles, simulating extreme airport conveyor abuse.
                    </p>
                    <div class="mt-4 pt-3 border-t border-white/10 text-[11px] font-mono text-emerald-400">Full hardware retention</div>
                </div>

                <div class="p-6 rounded-2xl bg-white/5 border border-white/10">
                    <div class="text-xs font-mono text-rose-400 mb-2">TEST 04 &bull; WHEEL MILEAGE</div>
                    <h3 class="font-display font-semibold text-lg text-white mb-2">32km Rough Track Rolling</h3>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Casters run continuously over an abrasive conveyor belt embedded with steel slats at 4 km/h under 30kg payload for 32 continuous kilometers.
                    </p>
                    <div class="mt-4 pt-3 border-t border-white/10 text-[11px] font-mono text-emerald-400">&lt;1.5mm wheel diameter wear</div>
                </div>

                <div class="p-6 rounded-2xl bg-white/5 border border-white/10">
                    <div class="text-xs font-mono text-rose-400 mb-2">TEST 05 &bull; ZIPPER STRESS</div>
                    <h3 class="font-display font-semibold text-lg text-white mb-2">5,000-Cycle Lateral Tensile</h3>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Continuous zipper open-close cycle endurance test with lateral cross-pull tension of 15kg applied to coils and sliders.
                    </p>
                    <div class="mt-4 pt-3 border-t border-white/10 text-[11px] font-mono text-emerald-400">No tooth dislocation or split</div>
                </div>

                <div class="p-6 rounded-2xl bg-white/5 border border-white/10">
                    <div class="text-xs font-mono text-rose-400 mb-2">TEST 06 &bull; SALT FOG</div>
                    <h3 class="font-display font-semibold text-lg text-white mb-2">48h Marine Corrosion Spray</h3>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        ASTM B117 salt spray exposure for zipper pullers, rivets, and aluminum profiles to guarantee anti-rust integrity during ocean transit.
                    </p>
                    <div class="mt-4 pt-3 border-t border-white/10 text-[11px] font-mono text-emerald-400">Grade 10 corrosion-free finish</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================================================================== -->
    <!-- SECTION 5: ETHICAL GOVERNANCE & COMPLIANCE                            -->
    <!-- ===================================================================== -->
    <section class="py-24 bg-white border-b border-stark-border">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-5 space-y-6">
                    <h2 class="font-display font-medium text-3xl sm:text-4xl text-stark-text tracking-tight text-balance">
                        Ethical Labor &amp; <span class="font-serif italic font-normal text-stark-primary">Global Compliance</span>.
                    </h2>
                    <p class="text-base text-slate-600 leading-relaxed font-sans text-pretty">
                        We believe true manufacturing leadership starts with human dignity. Stark Bag Industries provides fair living wages, comprehensive occupational safety gear, clean purified drinking water systems, and on-site medical care across all plant facilities.
                    </p>

                    <div class="space-y-4 pt-2">
                        <div class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0 mt-0.5 font-bold text-xs">&#10003;</span>
                            <div>
                                <h3 class="font-display font-semibold text-sm text-stark-text">Full Social Compliance (amfori BSCI Grade A)</h3>
                                <p class="text-xs text-slate-500">Regularly audited by independent third-party inspection firms including SGS and Bureau Veritas.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0 mt-0.5 font-bold text-xs">&#10003;</span>
                            <div>
                                <h3 class="font-display font-semibold text-sm text-stark-text">On-Site Medical &amp; Nursery Centers</h3>
                                <p class="text-xs text-slate-500">Dedicated registered nurses on-site, regular maternal health screenings, and quiet daycare nursery rooms for working mothers.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0 mt-0.5 font-bold text-xs">&#10003;</span>
                            <div>
                                <h3 class="font-display font-semibold text-sm text-stark-text">Green Solar Transition</h3>
                                <p class="text-xs text-slate-500">Installing rooftop solar photovoltaic systems across the Brahmanbaria industrial park to reduce grid carbon emissions.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7 bg-stark-bg border border-stark-border rounded-2xl p-8 sm:p-10">
                    <h3 class="font-display font-semibold text-lg text-stark-text mb-6">International Accreditations &amp; Registrations</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="p-4 rounded-xl bg-white border border-slate-200">
                            <div class="font-mono text-xs font-bold text-stark-primary">ISO 9001:2015</div>
                            <div class="font-semibold text-sm text-stark-text mt-1">Quality Management System</div>
                            <p class="text-xs text-slate-500 mt-1">Standardized assembly SOPs, incoming raw material inspection, and AQL 1.5 final batch audits.</p>
                        </div>

                        <div class="p-4 rounded-xl bg-white border border-slate-200">
                            <div class="font-mono text-xs font-bold text-stark-primary">ISO 14001:2015</div>
                            <div class="font-semibold text-sm text-stark-text mt-1">Environmental Management</div>
                            <p class="text-xs text-slate-500 mt-1">Systematic chemical management, non-toxic water-based adhesives, and scrap regrind recycling.</p>
                        </div>

                        <div class="p-4 rounded-xl bg-white border border-slate-200">
                            <div class="font-mono text-xs font-bold text-stark-primary">amfori BSCI</div>
                            <div class="font-semibold text-sm text-stark-text mt-1">Social Compliance Audited</div>
                            <p class="text-xs text-slate-500 mt-1">Ethical labor practices, transparent payroll, no forced/underage labor, and workplace safety.</p>
                        </div>

                        <div class="p-4 rounded-xl bg-white border border-slate-200">
                            <div class="font-mono text-xs font-bold text-stark-primary">Sedex SMETA 4-Pillar</div>
                            <div class="font-semibold text-sm text-stark-text mt-1">Ethical Trade Initiative</div>
                            <p class="text-xs text-slate-500 mt-1">Comprehensive labor standards, environmental protection, health &amp; safety, and business integrity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================================================================== -->
    <!-- SECTION 6: MILESTONES / INDUSTRIAL TIMELINE                           -->
    <!-- ===================================================================== -->
    <section class="py-24 bg-stark-bg border-b border-stark-border">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="max-w-2xl mx-auto text-center mb-16">
                <h2 class="font-display font-medium text-3xl sm:text-4xl text-stark-text tracking-tight">
                    Our Industrial <span class="font-serif italic font-normal text-stark-primary">Timeline</span>
                </h2>
                <p class="text-sm text-stark-muted mt-2 font-sans">
                    The evolutionary path from regional leather workshop to nationwide export powerhouse.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
                <div class="bg-white p-6 rounded-2xl border border-stark-border relative">
                    <span class="font-mono text-2xl font-bold text-stark-primary block mb-2">2017</span>
                    <h3 class="font-display font-semibold text-base text-stark-text mb-2">Founding in Brahmanbaria</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Established initial travel goods manufacturing lines with 250 sewing stations focusing on regional leather luggage.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-stark-border relative">
                    <span class="font-mono text-2xl font-bold text-stark-primary block mb-2">2019</span>
                    <h3 class="font-display font-semibold text-base text-stark-text mb-2">Polymer Molding Plant</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Commissioned Sensible Polymer Industries Ltd., bringing vacuum sheet extrusion and polycarbonate shell molding in-house.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-stark-border relative">
                    <span class="font-mono text-2xl font-bold text-stark-primary block mb-2">2021</span>
                    <h3 class="font-display font-semibold text-base text-stark-text mb-2">1,000,000 Units Milestone</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Expanded to 6 sister concern facilities, surmounting 1M units monthly and launching dedicated export corridors to Europe.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-stark-border relative">
                    <span class="font-mono text-2xl font-bold text-stark-primary block mb-2">2023</span>
                    <h3 class="font-display font-semibold text-base text-stark-text mb-2">amfori BSCI Grade A</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Secured tier-1 international compliance certifications and initiated direct OEM contract programs with major global retailers.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-stark-border relative">
                    <span class="font-mono text-2xl font-bold text-stark-primary block mb-2">Present</span>
                    <h3 class="font-display font-semibold text-base text-stark-text mb-2">1.5M+ Capacity &amp; Robotics</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Over 5,000 artisans across 6 plants utilizing automated robotic cutting and exporting across 28+ countries worldwide.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================================================================== -->
    <!-- SECTION 7: CTA TO CONTACT & AUDIT                                     -->
    <!-- ===================================================================== -->
    <section class="py-20 bg-stark-obsidian text-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 text-center">
            <h2 class="font-display font-medium text-3xl sm:text-4xl text-white tracking-tight max-w-2xl mx-auto">
                Ready to Experience Bangladesh&rsquo;s <span class="font-serif italic font-normal text-rose-300">Premier Luggage Manufacturer</span>?
            </h2>
            <p class="text-base text-slate-300 mt-4 max-w-xl mx-auto font-sans">
                Schedule a personal facility audit in Brahmanbaria or request counter-samples from our Dhaka commercial headquarters.
            </p>
            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-3.5 rounded-lg bg-stark-primary text-white font-sans text-sm font-semibold tracking-wide hover:bg-stark-primary-hover active:scale-[0.98] transition-[background-color,transform] shadow-lg shadow-stark-primary/20">
                    Contact Our Merchandising Team &rarr;
                </a>
                <a href="{{ route('home') }}#products" class="inline-flex items-center justify-center px-8 py-3.5 rounded-lg bg-white/10 hover:bg-white/15 border border-white/20 text-white font-sans text-sm font-medium tracking-wide transition-colors">
                    View Luggage Catalog
                </a>
            </div>
        </div>
    </section>

@endsection
