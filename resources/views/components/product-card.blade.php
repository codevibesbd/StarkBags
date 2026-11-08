@props([
    'title',
    'category',
    'material' => 'Bayer Polycarbonate / Cordura',
    'features' => [],
    'image' => null,
    'badge' => null
])

<div class="group relative bg-white border border-stark-border rounded-xl p-5 flex flex-col justify-between transition-[transform,box-shadow,border-color] duration-200 hover:-translate-y-1 hover:shadow-xl hover:border-slate-300">
    <!-- Card Header / Tags -->
    <div class="flex items-center justify-between mb-4">
        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[11px] font-display font-semibold uppercase tracking-wider bg-slate-100 text-slate-700">
            {{ $category }}
        </span>
        @if($badge)
            <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-mono font-medium bg-rose-50 text-stark-primary border border-rose-200">
                {{ $badge }}
            </span>
        @endif
    </div>

    <!-- Product Image with 1.02x subtle hover scale inside container -->
    <div class="relative w-full aspect-square bg-slate-50 rounded-lg overflow-hidden flex items-center justify-center p-4 mb-4">
        @if($image)
            <img src="{{ $image }}" alt="{{ $title }}" width="300" height="300" loading="lazy" class="w-full h-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-300 ease-out">
        @else
            <!-- Geometric Fallback Vector for Luggage / Bag -->
            <div class="w-24 h-32 rounded-lg border-2 border-dashed border-slate-300 flex items-center justify-center text-slate-400 group-hover:border-stark-primary transition-colors" aria-hidden="true">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                </svg>
            </div>
        @endif
    </div>

    <!-- Product Title & Details -->
    <div>
        <h3 class="font-display font-bold text-base text-stark-text group-hover:text-stark-primary transition-colors text-pretty">
            {{ $title }}
        </h3>
        <p class="text-xs text-stark-muted mt-1 font-mono">
            {{ $material }}
        </p>

        @if(!empty($features))
            <ul class="mt-3 space-y-1 border-t border-slate-100 pt-3 text-[11px] text-slate-600">
                @foreach($features as $feature)
                    <li class="flex items-center gap-1.5">
                        <span class="w-1 h-1 rounded-full bg-stark-primary" aria-hidden="true"></span>
                        <span>{{ $feature }}</span>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>

    <!-- Action -->
    <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
        <span class="text-[11px] font-mono text-slate-400">OEM / ODM Available</span>
        <a href="#inquiry" class="inline-flex items-center gap-1 text-xs font-display font-semibold text-stark-primary hover:text-stark-primary-hover rounded px-1 py-0.5 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-stark-primary transition-colors">
            Inquire Specs &rarr;
        </a>
    </div>
</div>
