export function initHeroSlider() {
    const sliderContainer = document.getElementById('hero-slider');
    if (!sliderContainer) return;

    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.hero-dot-btn');
    const toggleBtn = document.getElementById('hero-slider-toggle');
    const toggleIcon = document.getElementById('hero-slider-toggle-icon');
    const toggleText = document.getElementById('hero-slider-toggle-text');

    if (slides.length === 0) return;

    let currentIndex = 0;
    let isPlaying = true;
    let intervalId = null;
    const slideDuration = 5500;

    // Check for prefers-reduced-motion
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReducedMotion) {
        isPlaying = false;
        updateToggleState();
    }

    function goToSlide(index) {
        slides.forEach((slide, i) => {
            if (i === index) {
                slide.classList.remove('opacity-0', 'pointer-events-none');
                slide.classList.add('opacity-100');
            } else {
                slide.classList.remove('opacity-100');
                slide.classList.add('opacity-0', 'pointer-events-none');
            }
        });

        dots.forEach((dot, i) => {
            const indicatorDot = dot.querySelector('span');
            if (i === index) {
                dot.classList.remove('bg-white/5', 'text-slate-400');
                dot.classList.add('bg-white/20', 'text-white', 'font-bold');
                if (indicatorDot) {
                    indicatorDot.classList.remove('bg-slate-500');
                    indicatorDot.classList.add('bg-stark-primary');
                }
            } else {
                dot.classList.remove('bg-white/20', 'text-white', 'font-bold');
                dot.classList.add('bg-white/5', 'text-slate-400');
                if (indicatorDot) {
                    indicatorDot.classList.remove('bg-stark-primary');
                    indicatorDot.classList.add('bg-slate-500');
                }
            }
        });

        currentIndex = index;
    }

    function nextSlide() {
        const next = (currentIndex + 1) % slides.length;
        goToSlide(next);
    }

    function startAutoplay() {
        if (intervalId) clearInterval(intervalId);
        intervalId = setInterval(nextSlide, slideDuration);
        isPlaying = true;
        updateToggleState();
    }

    function stopAutoplay() {
        if (intervalId) clearInterval(intervalId);
        intervalId = null;
        isPlaying = false;
        updateToggleState();
    }

    function updateToggleState() {
        if (!toggleBtn) return;
        if (isPlaying) {
            toggleBtn.setAttribute('aria-label', 'Pause background slider');
            if (toggleIcon) {
                toggleIcon.className = 'w-2 h-2 rounded-sm bg-emerald-400 animate-pulse motion-reduce:animate-none';
            }
            if (toggleText) toggleText.textContent = 'Auto Playing';
        } else {
            toggleBtn.setAttribute('aria-label', 'Resume background slider');
            if (toggleIcon) {
                toggleIcon.className = 'w-2 h-2 rounded-sm bg-slate-500';
            }
            if (toggleText) toggleText.textContent = 'Paused';
        }
    }

    // Dot click listeners
    dots.forEach(dot => {
        dot.addEventListener('click', function () {
            const targetIndex = parseInt(this.getAttribute('data-slide'), 10);
            if (!isNaN(targetIndex)) {
                goToSlide(targetIndex);
                if (isPlaying) startAutoplay(); // Reset interval
            }
        });
    });

    // Toggle button listener
    if (toggleBtn) {
        toggleBtn.addEventListener('click', () => {
            if (isPlaying) {
                stopAutoplay();
            } else {
                startAutoplay();
            }
        });
    }

    if (isPlaying) {
        startAutoplay();
    }
}
