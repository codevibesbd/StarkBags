export function initHeroSlider() {
    const sliderContainer = document.getElementById('hero-slider');
    if (!sliderContainer) return;

    const slides = document.querySelectorAll('.hero-slide');
    if (slides.length <= 1) return;

    let currentIndex = 0;
    const slideDuration = 5500;

    // Respect user's motion preference
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReducedMotion) return;

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
        currentIndex = index;
    }

    function nextSlide() {
        const next = (currentIndex + 1) % slides.length;
        goToSlide(next);
    }

    setInterval(nextSlide, slideDuration);
}
