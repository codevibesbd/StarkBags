@props([
    'name',
    'specialty',
    'location' => 'Brahmanbaria, Bangladesh',
    'capacity' => null,
    'image' => null,
    'description' => null
])

<div class="group bg-white border border-stark-border rounded-xl overflow-hidden flex flex-col justify-between transition-all duration-200 hover:-translate-y-1 hover:shadow-xl hover:border-slate-300">
    <!-- Facility Image -->
    <div class="relative w-full h-48 bg-slate-900 overflow-hidden">
        @if($image)
            <img src="{{ $image }}" alt="{{ $name }}" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out">
        @else
            <div class="w-full h-full flex items-center justify-center bg-slate-800 text-slate-500">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
            </div>
        @endif
        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
        <div class="absolute bottom-3 left-4 right-4 flex items-center justify-between text-white text-xs">
            <span class="inline-flex items-center gap-1.5 px-2 py-0.5 rounded bg-black/50 backdrop-blur-sm border border-white/10 font-mono text-[10px]">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                Active Unit
            </span>
            @if($capacity)
                <span class="font-mono text-[11px] text-slate-300">{{ $capacity }}</span>
            @endif
        </div>
    </div>

    <!-- Facility Info -->
    <div class="p-6 flex-1 flex flex-col justify-between">
        <div>
            <div class="flex items-center justify-between gap-2 mb-2">
                <span class="text-[11px] font-display font-semibold uppercase tracking-wider text-stark-primary">
                    {{ $specialty }}
                </span>
                <span class="text-[11px] font-mono text-slate-400">
                    {{ $location }}
                </span>
            </div>

            <h3 class="font-display font-bold text-lg text-stark-text group-hover:text-stark-primary transition-colors leading-snug">
                {{ $name }}
            </h3>

            @if($description)
                <p class="text-xs text-stark-muted mt-2 leading-relaxed">
                    {{ $description }}
                </p>
            @endif
        </div>

        <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between">
            <span class="text-[11px] text-slate-500 font-mono">Certified Facility</span>
            <a href="#inquiry" class="inline-flex items-center gap-1 text-xs font-display font-semibold text-slate-700 group-hover:text-stark-primary transition-colors">
                Audit Plant &rarr;
            </a>
        </div>
    </div>
</div>

