<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0B0F17">
    <title>@yield('title', 'Stark Bag Industries Ltd. | Industrial Luggage & Backpack Manufacturer')</title>
    <meta name="description" content="Export-scale luggage, backpack, and travel gear manufacturer in Bangladesh. 1.5M+ pcs monthly capacity, 6 sister concerns, ISO and amfori BSCI certified.">

    <!-- Google Fonts: Instrument Serif (Editorial Display), Instrument Sans (Interface & Body), JetBrains Mono (Technical/Tabular) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Instrument+Serif:ital@0;1&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-stark-bg text-stark-text font-sans antialiased selection:bg-stark-primary selection:text-white flex flex-col min-h-screen">

    <!-- Skip Link for Accessibility -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 focus:px-4 focus:py-2 focus:bg-stark-primary focus:text-white focus:rounded focus:ring-2 focus:ring-white">
        Skip to main content
    </a>

    <!-- Navigation Bar -->
    <header class="sticky top-0 z-50 bg-stark-obsidian/95 backdrop-blur-md border-b border-white/10 transition-colors">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 h-20 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group rounded focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary" aria-label="Stark Bag Industries Homepage">
                <div class="w-10 h-10 rounded-lg bg-stark-primary flex items-center justify-center font-display font-bold text-white text-xl tracking-tight shadow-sm group-hover:bg-stark-primary-hover transition-colors" aria-hidden="true">
                    S
                </div>
                <div class="flex flex-col">
                    <span class="font-display font-bold text-xl tracking-wider text-white" translate="no">STARK</span>
                    <span class="text-[10px] tracking-widest text-slate-400 uppercase -mt-0.5 font-mono font-medium" translate="no">BAG INDUSTRIES</span>
                </div>
            </a>

            <!-- Desktop Navigation Links -->
            <nav class="hidden lg:flex items-center gap-7 font-sans text-xs tracking-wider uppercase font-medium text-slate-300" aria-label="Main Navigation">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-white font-semibold' : 'text-slate-300 hover:text-white' }} rounded px-1 py-0.5 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary transition-colors">HOME</a>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-rose-300 font-semibold border-b border-stark-primary' : 'text-slate-300 hover:text-white' }} rounded px-1 py-0.5 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary transition-colors">ABOUT</a>
                <a href="{{ route('home') }}#capabilities" class="text-slate-300 hover:text-white rounded px-1 py-0.5 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary transition-colors">CAPABILITIES</a>
                <a href="{{ route('home') }}#global-presence" class="text-slate-300 hover:text-white rounded px-1 py-0.5 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary transition-colors">GLOBAL EXPORT</a>
                <a href="{{ route('home') }}#facilities" class="text-slate-300 hover:text-white rounded px-1 py-0.5 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary transition-colors">SISTER CONCERNS</a>
                <a href="{{ route('home') }}#products" class="text-slate-300 hover:text-white rounded px-1 py-0.5 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary transition-colors">PRODUCTS</a>
                <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-rose-300 font-semibold border-b border-stark-primary' : 'text-slate-300 hover:text-white' }} rounded px-1 py-0.5 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary transition-colors">CONTACT</a>
            </nav>

            <!-- Desktop CTA & Mobile Toggle -->
            <div class="flex items-center gap-3">
                <a href="{{ route('contact') }}" class="hidden sm:inline-flex items-center justify-center px-5 py-2.5 rounded-lg bg-stark-primary text-white font-sans text-xs font-semibold tracking-wide hover:bg-stark-primary-hover active:scale-[0.98] transition-[background-color,transform] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white shadow-sm">
                    Inquire for OEM / Export
                </a>

                <!-- Mobile Menu Button -->
                <button type="button" id="mobile-menu-btn" class="lg:hidden p-2 rounded-lg text-slate-300 hover:text-white hover:bg-white/10 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary transition-colors" aria-expanded="false" aria-controls="mobile-nav" aria-label="Toggle Navigation Menu">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path id="menu-icon-bars" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path id="menu-icon-close" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Drawer Navigation -->
        <div id="mobile-nav" class="hidden lg:hidden bg-stark-obsidian border-b border-white/10 px-6 py-6 transition-all">
            <nav class="flex flex-col gap-4 font-sans text-sm tracking-wider uppercase font-medium text-slate-300" aria-label="Mobile Navigation">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-white font-semibold' : 'text-slate-300' }} py-1 hover:text-white transition-colors">HOME</a>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-rose-300 font-semibold' : 'text-slate-300' }} py-1 hover:text-white transition-colors">ABOUT</a>
                <a href="{{ route('home') }}#capabilities" class="py-1 hover:text-white transition-colors">CAPABILITIES</a>
                <a href="{{ route('home') }}#global-presence" class="py-1 hover:text-white transition-colors">GLOBAL EXPORT</a>
                <a href="{{ route('home') }}#facilities" class="py-1 hover:text-white transition-colors">SISTER CONCERNS</a>
                <a href="{{ route('home') }}#products" class="py-1 hover:text-white transition-colors">PRODUCTS</a>
                <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-rose-300 font-semibold' : 'text-slate-300' }} py-1 hover:text-white transition-colors">CONTACT</a>
                <div class="pt-4 border-t border-white/10">
                    <a href="{{ route('contact') }}" class="w-full inline-flex items-center justify-center px-5 py-3 rounded-lg bg-stark-primary text-white font-sans text-xs font-semibold tracking-wide hover:bg-stark-primary-hover transition-colors">
                        Inquire for OEM / Export
                    </a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main id="main-content" class="flex-grow">
        @yield('content')
    </main>

    <!-- Industrial Footer -->
    <footer class="bg-stark-obsidian text-slate-400 border-t border-white/10 pt-16 pb-12 font-sans mt-auto">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                <!-- Col 1: Brand Info -->
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-stark-primary flex items-center justify-center font-display font-bold text-white text-lg" aria-hidden="true">
                            S
                        </div>
                        <span class="font-display font-bold text-lg text-white tracking-wider" translate="no">STARK BAGS</span>
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
                    <h4 class="font-sans text-xs font-semibold uppercase tracking-wider text-white mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-xs">
                        <li><a href="{{ route('home') }}" class="hover:text-white rounded focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-stark-primary transition-colors">Home Page</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-white rounded focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-stark-primary transition-colors">About Starkbags &amp; Heritage</a></li>
                        <li><a href="{{ route('home') }}#capabilities" class="hover:text-white rounded focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-stark-primary transition-colors">Production Capabilities</a></li>
                        <li><a href="{{ route('home') }}#facilities" class="hover:text-white rounded focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-stark-primary transition-colors">Sister Concern Factories</a></li>
                        <li><a href="{{ route('home') }}#products" class="hover:text-white rounded focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-stark-primary transition-colors">Luggage &amp; Bag Catalog</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white rounded focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-stark-primary transition-colors">Contact &amp; Plant Audits</a></li>
                    </ul>
                </div>

                <!-- Col 3: Factories & Plants -->
                <div>
                    <h4 class="font-sans text-xs font-semibold uppercase tracking-wider text-white mb-4">Plant Locations</h4>
                    <div class="space-y-3 text-xs">
                        <div>
                            <span class="font-semibold text-slate-200 block">Head Office:</span>
                            <span class="text-slate-400">House #07, Road #02, Sector #03, Uttara, Dhaka-1230, Bangladesh</span>
                        </div>
                        <div>
                            <span class="font-semibold text-slate-200 block">Factory Complex:</span>
                            <span class="text-slate-400">Khatihata, Budhal &amp; Kuttapara, Sarail, Brahmanbaria, Bangladesh</span>
                        </div>
                    </div>
                </div>

                <!-- Col 4: Trade Inquiries -->
                <div>
                    <h4 class="font-sans text-xs font-semibold uppercase tracking-wider text-white mb-4">Export Inquiries</h4>
                    <div class="space-y-2 text-xs">
                        <p class="text-slate-300">Direct procurement &amp; factory audits:</p>
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
                    <a href="{{ route('about') }}" class="text-slate-400 hover:text-white transition-colors">Company Heritage</a>
                    <a href="{{ route('contact') }}" class="text-stark-primary hover:underline rounded focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-stark-primary">Request Factory Quote</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuBtn = document.getElementById('mobile-menu-btn');
            const mobileNav = document.getElementById('mobile-nav');
            const iconBars = document.getElementById('menu-icon-bars');
            const iconClose = document.getElementById('menu-icon-close');

            if (menuBtn && mobileNav) {
                menuBtn.addEventListener('click', function () {
                    const isExpanded = menuBtn.getAttribute('aria-expanded') === 'true';
                    menuBtn.setAttribute('aria-expanded', !isExpanded);
                    mobileNav.classList.toggle('hidden');
                    iconBars.classList.toggle('hidden');
                    iconClose.classList.toggle('hidden');
                });
            }
        });
    </script>
</body>
</html>
