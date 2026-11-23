@extends('layouts.app')

@section('title', 'Contact & Factory Audits | Stark Bag Industries Ltd.')

@section('content')

    <!-- ===================================================================== -->
    <!-- SECTION 1: CONTACT HERO                                               -->
    <!-- ===================================================================== -->
    <section class="relative bg-stark-obsidian text-white py-20 sm:py-28 overflow-hidden border-b border-white/10">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,rgba(225,29,72,0.12),transparent_50%)] pointer-events-none" aria-hidden="true"></div>
        <div class="absolute inset-0 opacity-5 bg-[linear-gradient(to_right,#ffffff_1px,transparent_1px),linear-gradient(to_bottom,#ffffff_1px,transparent_1px)] bg-[size:4rem_4rem] pointer-events-none" aria-hidden="true"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-12">
            <div class="max-w-3xl space-y-6">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 border border-white/15 text-xs font-mono text-rose-300">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400" aria-hidden="true"></span>
                    Direct Export Merchandising Desk &bull; 24h Response Guaranteed
                </span>

                <h1 class="font-display font-medium text-4xl sm:text-5xl lg:text-6xl text-white tracking-tight leading-[1.08] text-balance">
                    Direct Procurement, RFQs &amp; <span class="font-serif italic font-normal text-rose-300">Factory Audits</span>.
                </h1>

                <p class="text-base sm:text-lg text-slate-300 leading-relaxed font-sans text-pretty">
                    Connect directly with our Dhaka commercial office for custom OEM development, price quotations, or to schedule an on-site factory inspection at our Brahmanbaria manufacturing complex.
                </p>

                <div class="flex flex-wrap items-center gap-6 pt-4 text-xs font-mono text-slate-400">
                    <div><span class="text-slate-200">Email:</span> <a href="mailto:info@starkbags.com" class="text-stark-primary hover:underline">info@starkbags.com</a></div>
                    <div><span class="text-slate-200">Hours:</span> Sun – Thu: 09:00 – 18:00 BST (UTC+6)</div>
                    <div><span class="text-slate-200">Domain:</span> starkbags.com</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================================================================== -->
    <!-- SECTION 2: FORM & PLANT DIRECTORY SPLIT                               -->
    <!-- ===================================================================== -->
    <section id="inquiry-form" class="py-20 bg-stark-bg border-b border-stark-border scroll-mt-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

                <!-- Left Column: Interactive RFQ & Audit Request Form -->
                <div class="lg:col-span-7 bg-white border border-stark-border rounded-2xl p-8 sm:p-10 shadow-xl">
                    <div class="border-b border-slate-100 pb-5 mb-8">
                        <h2 class="font-display font-semibold text-2xl sm:text-3xl text-stark-text tracking-tight">
                            Request Quotation or Plant Inspection
                        </h2>
                        <p class="text-sm text-stark-muted mt-1.5 font-sans">
                            Complete this project brief for rapid technical review and export quotation by our engineering team.
                        </p>
                    </div>

                    <!-- Flash Notification -->
                    @if(session('status'))
                        <div class="mb-8 p-5 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-900 text-sm font-sans flex items-start gap-3 shadow-sm">
                            <span class="w-5 h-5 rounded-full bg-emerald-500 text-white flex items-center justify-center font-bold text-xs shrink-0 mt-0.5" aria-hidden="true">&#10003;</span>
                            <div>
                                <h3 class="font-semibold text-emerald-900">Inquiry Dispatched Successfully</h3>
                                <p class="text-xs text-emerald-800 mt-1 leading-relaxed">{{ session('status') }}</p>
                            </div>
                        </div>
                    @endif

                    <!-- Validation Errors -->
                    @if($errors->any())
                        <div class="mb-8 p-5 rounded-xl bg-rose-50 border border-rose-200 text-rose-900 text-sm font-sans">
                            <div class="font-semibold mb-2">Please correct the following errors:</div>
                            <ul class="list-disc list-inside text-xs space-y-1">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                        @csrf

                        <!-- Contact Name & Company -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="contact_name" class="block text-xs font-sans font-medium text-slate-700 mb-1.5">
                                    Full Name <span class="text-stark-primary">*</span>
                                </label>
                                <input
                                    type="text"
                                    id="contact_name"
                                    name="contact_name"
                                    value="{{ old('contact_name') }}"
                                    required
                                    autocomplete="name"
                                    placeholder="e.g. John Doe"
                                    class="w-full px-4 py-3 rounded-lg border border-stark-border text-sm text-stark-text font-sans placeholder-slate-400 focus:outline-none focus:border-stark-primary focus:ring-1 focus:ring-stark-primary transition-colors"
                                >
                            </div>

                            <div>
                                <label for="company" class="block text-xs font-sans font-medium text-slate-700 mb-1.5">
                                    Company / Retail Brand <span class="text-stark-primary">*</span>
                                </label>
                                <input
                                    type="text"
                                    id="company"
                                    name="company"
                                    value="{{ old('company') }}"
                                    required
                                    autocomplete="organization"
                                    placeholder="e.g. Globetrotter Travel Ltd."
                                    class="w-full px-4 py-3 rounded-lg border border-stark-border text-sm text-stark-text font-sans placeholder-slate-400 focus:outline-none focus:border-stark-primary focus:ring-1 focus:ring-stark-primary transition-colors"
                                >
                            </div>
                        </div>

                        <!-- Business Email & Phone -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="email" class="block text-xs font-sans font-medium text-slate-700 mb-1.5">
                                    Business Email <span class="text-stark-primary">*</span>
                                </label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    autocomplete="email"
                                    spellcheck="false"
                                    placeholder="procurement@company.com"
                                    class="w-full px-4 py-3 rounded-lg border border-stark-border text-sm text-stark-text font-sans placeholder-slate-400 focus:outline-none focus:border-stark-primary focus:ring-1 focus:ring-stark-primary transition-colors"
                                >
                            </div>

                            <div>
                                <label for="phone" class="block text-xs font-sans font-medium text-slate-700 mb-1.5">
                                    Phone / WhatsApp (Optional)
                                </label>
                                <input
                                    type="text"
                                    id="phone"
                                    name="phone"
                                    value="{{ old('phone') }}"
                                    autocomplete="tel"
                                    placeholder="+1 (555) 012-3456"
                                    class="w-full px-4 py-3 rounded-lg border border-stark-border text-sm text-stark-text font-sans placeholder-slate-400 focus:outline-none focus:border-stark-primary focus:ring-1 focus:ring-stark-primary transition-colors"
                                >
                            </div>
                        </div>

                        <!-- Country & Inquiry Type -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="country" class="block text-xs font-sans font-medium text-slate-700 mb-1.5">
                                    Destination Country <span class="text-stark-primary">*</span>
                                </label>
                                <input
                                    type="text"
                                    id="country"
                                    name="country"
                                    value="{{ old('country') }}"
                                    required
                                    autocomplete="country-name"
                                    placeholder="e.g. Germany, USA, Japan"
                                    class="w-full px-4 py-3 rounded-lg border border-stark-border text-sm text-stark-text font-sans placeholder-slate-400 focus:outline-none focus:border-stark-primary focus:ring-1 focus:ring-stark-primary transition-colors"
                                >
                            </div>

                            <div>
                                <label for="inquiry_type" class="block text-xs font-sans font-medium text-slate-700 mb-1.5">
                                    Inquiry Category
                                </label>
                                <select
                                    id="inquiry_type"
                                    name="inquiry_type"
                                    class="w-full px-4 py-3 rounded-lg border border-stark-border text-sm text-stark-text font-sans bg-white focus:outline-none focus:border-stark-primary focus:ring-1 focus:ring-stark-primary transition-colors"
                                >
                                    <option value="oem-luggage" {{ old('inquiry_type') === 'oem-luggage' ? 'selected' : '' }}>Hard-Shell Spinner Suitcases OEM</option>
                                    <option value="backpacks" {{ old('inquiry_type') === 'backpacks' ? 'selected' : '' }}>Technical Commuter &amp; Laptop Backpacks</option>
                                    <option value="duffels" {{ old('inquiry_type') === 'duffels' ? 'selected' : '' }}>Travel Duffels &amp; Weekender Bags</option>
                                    <option value="tooling" {{ old('inquiry_type') === 'tooling' ? 'selected' : '' }}>Custom Polymer Tooling &amp; Mold Making</option>
                                    <option value="audit" {{ old('inquiry_type') === 'audit' ? 'selected' : '' }}>Schedule Factory Audit / Plant Visit</option>
                                    <option value="general" {{ old('inquiry_type') === 'general' ? 'selected' : '' }}>Other Commercial Inquiries</option>
                                </select>
                            </div>
                        </div>

                        <!-- Target Quantity -->
                        <div>
                            <label for="target_quantity" class="block text-xs font-sans font-medium text-slate-700 mb-1.5">
                                Anticipated Production Volume
                            </label>
                            <select
                                id="target_quantity"
                                name="target_quantity"
                                class="w-full px-4 py-3 rounded-lg border border-stark-border text-sm text-stark-text font-sans bg-white focus:outline-none focus:border-stark-primary focus:ring-1 focus:ring-stark-primary transition-colors"
                            >
                                <option value="1k-5k" {{ old('target_quantity') === '1k-5k' ? 'selected' : '' }}>1,000 – 5,000 Units (Pilot Run / New Launch)</option>
                                <option value="5k-25k" {{ old('target_quantity') === '5k-25k' ? 'selected' : '' }}>5,000 – 25,000 Units (Quarterly Program)</option>
                                <option value="25k-100k" {{ old('target_quantity') === '25k-100k' ? 'selected' : '' }}>25,000 – 100,000 Units (High-Volume Brand Run)</option>
                                <option value="100k+" {{ old('target_quantity') === '100k+' ? 'selected' : '' }}>100,000+ Units (Annual Contract Allocation)</option>
                            </select>
                        </div>

                        <!-- Specifications -->
                        <div>
                            <label for="specifications" class="block text-xs font-sans font-medium text-slate-700 mb-1.5">
                                Project Scope, Materials &amp; Target Delivery Date
                            </label>
                            <textarea
                                id="specifications"
                                name="specifications"
                                rows="4"
                                placeholder="Describe shell materials (Polycarbonate, ABS, PP, Cordura), target FOB price per unit, size run (20'' / 24'' / 28''), or specific inspection dates…"
                                class="w-full px-4 py-3 rounded-lg border border-stark-border text-sm text-stark-text font-sans placeholder-slate-400 focus:outline-none focus:border-stark-primary focus:ring-1 focus:ring-stark-primary transition-colors"
                            >{{ old('specifications') }}</textarea>
                        </div>

                        <!-- Mutual NDA Checkbox -->
                        <div class="flex items-start gap-3">
                            <input
                                type="checkbox"
                                id="nda_requested"
                                name="nda_requested"
                                value="1"
                                {{ old('nda_requested') ? 'checked' : '' }}
                                class="mt-1 h-4 w-4 rounded border-stark-border text-stark-primary focus:ring-stark-primary"
                            >
                            <label for="nda_requested" class="text-xs text-slate-600 font-sans leading-relaxed">
                                <span class="font-semibold text-slate-800">Request Mutual Non-Disclosure Agreement (NDA)</span> &bull; Our commercial legal desk will countersign your proprietary Tech Pack before review.
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <button
                            type="submit"
                            class="w-full py-4 rounded-lg bg-stark-primary text-white font-sans text-xs font-bold uppercase tracking-wider hover:bg-stark-primary-hover active:scale-[0.99] transition-[background-color,transform] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary shadow-lg shadow-stark-primary/20"
                        >
                            Submit Manufacturing Brief for Review
                        </button>

                        <div class="flex items-center justify-between text-[11px] font-mono text-slate-400 pt-2">
                            <span>Direct Email: info@starkbags.com</span>
                            <span>AQL 1.5 Guaranteed</span>
                        </div>
                    </form>
                </div>

                <!-- Right Column: Factory Plants & Physical Directory -->
                <div class="lg:col-span-5 space-y-6">

                    <!-- Dhaka Corporate HQ Card -->
                    <div class="bg-white border border-stark-border rounded-2xl p-6 shadow-sm">
                        <div class="flex items-center justify-between text-xs font-mono text-stark-primary mb-2">
                            <span class="font-bold">COMMERCIAL HEADQUARTERS</span>
                            <span class="text-slate-400">Dhaka, Bangladesh</span>
                        </div>
                        <h3 class="font-display font-semibold text-lg text-stark-text mb-2">Uttara Commercial &amp; Export Office</h3>
                        <p class="text-xs text-slate-600 mb-4 leading-relaxed">
                            House #07, Road #02, Sector #03, Uttara, Dhaka-1230, Bangladesh
                        </p>
                        <div class="space-y-2 text-xs font-mono text-slate-600 border-t border-slate-100 pt-3">
                            <div class="flex justify-between">
                                <span class="text-slate-400">Primary Contact:</span>
                                <span class="font-semibold text-stark-text">info@starkbags.com</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-400">Managing Director:</span>
                                <span class="text-stark-text">Mohammad Taherul Islam</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-400">Airport Proximity:</span>
                                <span class="text-stark-text">10 Mins from Dhaka Int'l (DAC)</span>
                            </div>
                        </div>
                    </div>

                    <!-- Brahmanbaria Manufacturing Complex Card -->
                    <div class="bg-white border border-stark-border rounded-2xl p-6 shadow-sm">
                        <div class="flex items-center justify-between text-xs font-mono text-stark-primary mb-2">
                            <span class="font-bold">PRODUCTION COMPLEX #01 &amp; #02</span>
                            <span class="text-slate-400">Sarail, Brahmanbaria</span>
                        </div>
                        <h3 class="font-display font-semibold text-lg text-stark-text mb-2">Main Assembly &amp; Quality Testing Campus</h3>
                        <p class="text-xs text-slate-600 mb-4 leading-relaxed">
                            Khatihata &amp; Budhal, Sarail, Brahmanbaria, Bangladesh
                        </p>
                        <div class="space-y-2 text-xs font-mono text-slate-600 border-t border-slate-100 pt-3">
                            <div class="flex justify-between">
                                <span class="text-slate-400">Active Facilities:</span>
                                <span class="text-stark-text">Rider Leather &amp; Victor Bags</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-400">Capacity:</span>
                                <span class="font-semibold text-stark-text">1,050,000 Units/Month</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-400">Compliance:</span>
                                <span class="text-emerald-600 font-semibold">amfori BSCI Grade A</span>
                            </div>
                        </div>
                    </div>

                    <!-- Polymer & Accessories Campus Card -->
                    <div class="bg-white border border-stark-border rounded-2xl p-6 shadow-sm">
                        <div class="flex items-center justify-between text-xs font-mono text-stark-primary mb-2">
                            <span class="font-bold">PRODUCTION COMPLEX #03 &amp; #04</span>
                            <span class="text-slate-400">Kuttapara, Sarail</span>
                        </div>
                        <h3 class="font-display font-semibold text-lg text-stark-text mb-2">Polymer Extrusion &amp; Tooling Campus</h3>
                        <p class="text-xs text-slate-600 mb-4 leading-relaxed">
                            Kuttapara, Sarail &amp; Brahmanbaria Industrial Belt, Bangladesh
                        </p>
                        <div class="space-y-2 text-xs font-mono text-slate-600 border-t border-slate-100 pt-3">
                            <div class="flex justify-between">
                                <span class="text-slate-400">Facilities:</span>
                                <span class="text-stark-text">Sensible &amp; Premier Polymer</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-400">Specialization:</span>
                                <span class="text-stark-text">Vacuum Forming &amp; Casting</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-400">Accreditations:</span>
                                <span class="text-stark-text">ISO 9001 &bull; ISO 14001</span>
                            </div>
                        </div>
                    </div>

                    <!-- Logistics & Port Routing Information -->
                    <div class="p-6 rounded-2xl bg-stark-slate text-white">
                        <div class="text-xs font-mono uppercase text-stark-primary mb-1">Logistics Matrix</div>
                        <h4 class="font-display font-semibold text-base text-white mb-2">Port Clearance &amp; FOB Dispatch</h4>
                        <div class="space-y-2 text-xs font-mono text-slate-300">
                            <div class="flex justify-between">
                                <span class="text-slate-400">Primary Sea Port:</span>
                                <span>Chittagong Port (BDCGP)</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-400">Air Cargo Hub:</span>
                                <span>Dhaka Airport (DAC)</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-400">Lead Times:</span>
                                <span>45 – 60 Days (Post-Approval)</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ===================================================================== -->
    <!-- SECTION 3: FACTORY AUDIT PROTOCOL FOR BUYERS                          -->
    <!-- ===================================================================== -->
    <section class="py-20 bg-white border-b border-stark-border">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="max-w-3xl mb-16">
                <span class="text-xs font-mono uppercase tracking-widest text-stark-primary block mb-2">Buyer Experience</span>
                <h2 class="font-display font-medium text-3xl sm:text-4xl text-stark-text tracking-tight text-balance">
                    International Buyer &amp; <span class="font-serif italic font-normal text-stark-primary">Factory Inspection</span> Protocol.
                </h2>
                <p class="text-base text-stark-muted mt-3 font-sans text-pretty">
                    We welcome brand directors, technical sourcers, and third-party compliance auditors (SGS, Bureau Veritas, Intertek) to inspect our facilities directly.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="p-6 rounded-2xl bg-stark-bg border border-stark-border">
                    <div class="font-mono text-xs font-bold text-stark-primary mb-2">STEP 01</div>
                    <h3 class="font-display font-semibold text-base text-stark-text mb-2">VIP Airport Greeting</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Chauffeured pickup from Dhaka Hazrat Shahjalal International Airport (DAC) and private transport to your hotel or our Uttara showroom.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-stark-bg border border-stark-border">
                    <div class="font-mono text-xs font-bold text-stark-primary mb-2">STEP 02</div>
                    <h3 class="font-display font-semibold text-base text-stark-text mb-2">Showroom &amp; Materials</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Inspect our 2026/2027 luggage catalog, handle polycarbonate swatch libraries, test telescoping tubes, and align on tech specs.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-stark-bg border border-stark-border">
                    <div class="font-mono text-xs font-bold text-stark-primary mb-2">STEP 03</div>
                    <h3 class="font-display font-semibold text-base text-stark-text mb-2">Plant Campus Tour</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Escorted walkthrough of live sewing lines, injection molding, laboratory test rigs, and worker welfare facilities in Sarail.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-stark-bg border border-stark-border">
                    <div class="font-mono text-xs font-bold text-stark-primary mb-2">STEP 04</div>
                    <h3 class="font-display font-semibold text-base text-stark-text mb-2">7-Day Counter-Sample</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Our master pattern makers generate custom physical pre-production samples delivered to your international office in 7–10 days.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================================================================== -->
    <!-- SECTION 4: PROCUREMENT FAQS                                           -->
    <!-- ===================================================================== -->
    <section class="py-20 bg-stark-bg">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="max-w-2xl mx-auto text-center mb-16">
                <h2 class="font-display font-medium text-3xl sm:text-4xl text-stark-text tracking-tight">
                    Frequently Asked <span class="font-serif italic font-normal text-stark-primary">Procurement Questions</span>
                </h2>
                <p class="text-sm text-stark-muted mt-2 font-sans">
                    Essential guidelines for brand managers, procurement directors, and sourcing agencies.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                <div class="bg-white p-6 rounded-2xl border border-stark-border">
                    <h3 class="font-display font-semibold text-base text-stark-text mb-2">What is your standard Minimum Order Quantity (MOQ)?</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Our standard MOQ is 1,000 units per style / colorway for hard-shell luggage and 1,500 units for technical backpacks. For emerging direct-to-consumer (DTC) luggage brands, we support multi-size container consolidation programs.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-stark-border">
                    <h3 class="font-display font-semibold text-base text-stark-text mb-2">What are typical production lead times?</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Counter-samples are turned around within 7–10 business days. Bulk production takes 45–60 days following final sample sign-off and Letter of Credit (L/C) confirmation.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-stark-border">
                    <h3 class="font-display font-semibold text-base text-stark-text mb-2">Can we audit your social and environmental compliance?</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Yes. We provide verified amfori BSCI, ISO 9001:2015, ISO 14001:2015, and Sedex SMETA 4-Pillar audit summaries upon request. Independent audit teams are permitted full access under standard notification protocols.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-stark-border">
                    <h3 class="font-display font-semibold text-base text-stark-text mb-2">What shipping terms (Incoterms) do you operate under?</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        We primarily export under FOB Chittagong Port (BDCGP) terms. We also accommodate CIF, CFR, and door-to-door DDP arrangements through partner international freight forwarders (Maersk, MSC, Hapag-Lloyd).
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection

