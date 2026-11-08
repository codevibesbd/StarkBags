<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0B0F17">
    <title>@yield('title', 'Stark Bag Industries Ltd. | Industrial Luggage & Backpack Manufacturer')</title>
    <meta name="description" content="Export-scale luggage, backpack, and travel gear manufacturer in Bangladesh. 1.5M+ pcs monthly capacity, 6 sister concerns, ISO and amfori BSCI certified.">

    <!-- Fonts: Plus Jakarta Sans (Display) & Inter (Body) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&family=JetBrains+Mono:wght@500;600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-stark-bg text-stark-text font-sans antialiased selection:bg-stark-primary selection:text-white">

    <!-- Skip Link for Accessibility -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 focus:px-4 focus:py-2 focus:bg-stark-primary focus:text-white focus:rounded focus:ring-2 focus:ring-white">
        Skip to main content
    </a>

    <!-- Navigation Bar -->
    <header class="sticky top-0 z-50 bg-stark-obsidian/95 backdrop-blur-md border-b border-white/10 transition-colors">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 h-20 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="{{ url('/') }}" class="flex items-center gap-3 group rounded focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary" aria-label="Stark Bag Industries Homepage">
                <div class="w-10 h-10 rounded bg-stark-primary flex items-center justify-center font-display font-extrabold text-white text-2xl tracking-tighter shadow-sm group-hover:bg-stark-primary-hover transition-colors" aria-hidden="true">
                    S
                </div>
                <div class="flex flex-col">
                    <span class="font-display font-extrabold text-xl tracking-wider text-white" translate="no">STARK</span>
                    <span class="text-[10px] tracking-widest text-slate-400 uppercase -mt-1 font-semibold" translate="no">BAG INDUSTRIES</span>
                </div>
            </a>

            <!-- Desktop Navigation Links -->
            <nav class="hidden md:flex items-center gap-8 font-display text-sm font-semibold text-slate-300" aria-label="Main Navigation">
                <a href="#hero" class="hover:text-stark-primary rounded px-1 py-0.5 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary transition-colors">HOME</a>
                <a href="#capabilities" class="hover:text-stark-primary rounded px-1 py-0.5 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary transition-colors">CAPABILITIES</a>
                <a href="#global-presence" class="hover:text-stark-primary rounded px-1 py-0.5 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary transition-colors">GLOBAL EXPORT</a>
                <a href="#facilities" class="hover:text-stark-primary rounded px-1 py-0.5 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary transition-colors">SISTER CONCERNS</a>
                <a href="#products" class="hover:text-stark-primary rounded px-1 py-0.5 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary transition-colors">PRODUCTS</a>
                <a href="#certifications" class="hover:text-stark-primary rounded px-1 py-0.5 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary transition-colors">COMPLIANCE</a>
            </nav>

            <!-- CTA Button -->
            <div class="flex items-center gap-4">
                <a href="#inquiry" class="inline-flex items-center justify-center px-5 py-2.5 rounded-md bg-stark-primary text-white font-display text-xs font-bold uppercase tracking-wider hover:bg-stark-primary-hover active:scale-[0.98] transition-[background-color,transform] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white shadow-sm">
                    Inquire for OEM/Export
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main id="main-content">
        @yield('content')
    </main>

    <!-- Industrial Footer -->
    <footer class="bg-stark-obsidian text-slate-400 border-t border-white/10 pt-16 pb-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                <!-- Col 1: Brand Info -->
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded bg-stark-primary flex items-center justify-center font-display font-extrabold text-white text-xl" aria-hidden="true">
                            S
                        </div>
                        <span class="font-display font-extrabold text-lg text-white tracking-wider" translate="no">STARK BAGS</span>
                    </div>
                    <p class="text-xs leading-relaxed text-slate-400 text-pretty">
                        Export-scale manufacturer and private-label contract producer of hard-case luggage, daypacks, and travel gear based in Bangladesh.
                    </p>
                    <div class="flex items-center gap-3 text-xs text-slate-400 pt-2">
                        <span class="inline-flex items-center px-2 py-0.5 rounded bg-white/5 border border-white/10 text-slate-300 font-mono text-[11px]" translate="no">FLAXA Reg #049</span>
                        <span class="inline-flex items-center px-2 py-0.5 rounded bg-emerald-950/80 border border-emerald-500/30 text-emerald-300 font-mono text-[11px]" translate="no">ISO 9001</span>
                    </div>
                </div>

                <!-- Col 2: Navigation Links -->
                <div>
                    <h4 class="font-display text-xs font-bold uppercase tracking-widest text-white mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-xs">
                        <li><a href="#hero" class="hover:text-white rounded focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-stark-primary transition-colors">Company Overview</a></li>
                        <li><a href="#facilities" class="hover:text-white rounded focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-stark-primary transition-colors">Sister Concern Factories</a></li>
                        <li><a href="#products" class="hover:text-white rounded focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-stark-primary transition-colors">Luggage & Bag Catalog</a></li>
                        <li><a href="#global-presence" class="hover:text-white rounded focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-stark-primary transition-colors">International Trade Footprint</a></li>
                        <li><a href="#certifications" class="hover:text-white rounded focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-stark-primary transition-colors">Compliance & Accreditations</a></li>
                    </ul>
                </div>

                <!-- Col 3: Factories & Plants -->
                <div>
                    <h4 class="font-display text-xs font-bold uppercase tracking-widest text-white mb-4">Plant Locations</h4>
                    <div class="space-y-3 text-xs">
                        <div>
                            <span class="font-semibold text-slate-200 block">Head Office:</span>
                            <span class="text-slate-400">House #07, Road #02, Sector #03, Uttara, Dhaka-1230, Bangladesh</span>
                        </div>
                        <div>
                            <span class="font-semibold text-slate-200 block">Factory Complex:</span>
                            <span class="text-slate-400">Khatihata, Budhal & Kuttapara, Sarail, Brahmanbaria, Bangladesh</span>
                        </div>
                    </div>
                </div>

                <!-- Col 4: Trade Inquiries -->
                <div>
                    <h4 class="font-display text-xs font-bold uppercase tracking-widest text-white mb-4">Export Inquiries</h4>
                    <div class="space-y-2 text-xs">
                        <p class="text-slate-300">Direct procurement & factory audits:</p>
                        <a href="mailto:info@starkbags.com" class="block font-mono text-stark-primary hover:underline rounded focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-stark-primary">info@starkbags.com</a>
                        <p class="text-slate-400">Managing Director: Mohammad Taherul Islam</p>
                        <p class="text-[11px] text-slate-500 pt-2 font-mono">Official Domain: starkbags.com</p>
                    </div>
                </div>
            </div>

            <!-- Bottom Legal Bar -->
            <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row items-center justify-between gap-4 text-xs">
                <p>&copy;&nbsp;{{ date('Y') }} Stark Bag Industries Ltd. All rights reserved.</p>
                <div class="flex items-center gap-6">
                    <span class="text-slate-500">Engineered with Laravel & Tailwind CSS</span>
                    <a href="#inquiry" class="text-stark-primary hover:underline rounded focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-stark-primary">Request OEM Catalog</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
