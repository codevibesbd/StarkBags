export function initCapacityCounters() {
    const grid = document.getElementById('capacity-metrics-grid');
    if (!grid) return;

    const counters = grid.querySelectorAll('.capacity-counter');
    if (counters.length === 0) return;

    // Check for prefers-reduced-motion
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReducedMotion) return; // Keep final numbers as-is

    let hasAnimated = false;

    // Reset counters to 0 initially
    counters.forEach(counter => {
        counter.textContent = '0';
    });

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !hasAnimated) {
                hasAnimated = true;
                obs.disconnect();
                animateCounters(counters);
            }
        });
    }, {
        threshold: 0.25,
        rootMargin: '0px 0px -50px 0px'
    });

    observer.observe(grid);
}

function animateCounters(counters) {
    const duration = 1800; // ms
    const startTime = performance.now();

    const targets = Array.from(counters).map(c => {
        const val = parseInt(c.getAttribute('data-target'), 10) || 0;
        return {
            element: c,
            target: val
        };
    });

    function easeOutExpo(x) {
        return x === 1 ? 1 : 1 - Math.pow(2, -10 * x);
    }

    function update(currentTime) {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);
        const easedProgress = easeOutExpo(progress);

        targets.forEach(item => {
            const currentVal = Math.round(easedProgress * item.target);
            item.element.textContent = currentVal.toLocaleString('en-US');
        });

        if (progress < 1) {
            requestAnimationFrame(update);
        } else {
            // Ensure exact final values
            targets.forEach(item => {
                item.element.textContent = item.target.toLocaleString('en-US');
            });
        }
    }

    requestAnimationFrame(update);
}

