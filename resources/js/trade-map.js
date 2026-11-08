import gsap from 'gsap';

export function initTradeMap() {
    const mapContainer = document.getElementById('trade-map-container');
    if (!mapContainer) return;

    const routes = [
        {
            id: 'route-ny',
            region: 'na',
            name: 'Port of New York & New Jersey (USNYC)',
            country: 'United States',
            pathId: 'path-ny',
            destX: 275,
            destY: 170,
            transit: '28-32 Days FOB',
            cargo: 'Polycarbonate Spinners & Executive Daypacks',
            volume: '480,000 Pcs/Year',
            status: 'Regular Bi-Weekly Vessel'
        },
        {
            id: 'route-la',
            region: 'na',
            name: 'Port of Los Angeles / Long Beach (USLAX)',
            country: 'United States',
            pathId: 'path-la',
            destX: 175,
            destY: 185,
            transit: '24-28 Days FOB',
            cargo: 'Hard-Shell Luggage Trios & Duffels',
            volume: '360,000 Pcs/Year',
            status: 'Weekly Trans-Pacific Express'
        },
        {
            id: 'route-hamburg',
            region: 'eu',
            name: 'Port of Hamburg & Rotterdam (DEHAM / NLRTM)',
            country: 'Germany / Netherlands',
            pathId: 'path-hamburg',
            destX: 505,
            destY: 140,
            transit: '22-26 Days FOB',
            cargo: 'amfori BSCI Certified Luggage Collections',
            volume: '520,000 Pcs/Year',
            status: 'Weekly Direct Discharge'
        },
        {
            id: 'route-uk',
            region: 'eu',
            name: 'Port of Felixstowe / London Gateway (GBFXT)',
            country: 'United Kingdom',
            pathId: 'path-uk',
            destX: 478,
            destY: 145,
            transit: '24-28 Days FOB',
            cargo: 'Retail Luggage & Commuter Backpacks',
            volume: '290,000 Pcs/Year',
            status: 'Bi-Weekly Scheduled Call'
        },
        {
            id: 'route-tokyo',
            region: 'asia',
            name: 'Port of Tokyo & Yokohama (JPTYO)',
            country: 'Japan',
            pathId: 'path-tokyo',
            destX: 845,
            destY: 180,
            transit: '14-18 Days FOB',
            cargo: 'High-Spec AQL 1.5 Precision Travel Cases',
            volume: '310,000 Pcs/Year',
            status: 'Weekly Direct Feeder'
        },
        {
            id: 'route-hk',
            region: 'asia',
            name: 'Port of Hong Kong (HKHKG)',
            country: 'Hong Kong SAR',
            pathId: 'path-hk',
            destX: 765,
            destY: 235,
            transit: '8-12 Days FOB',
            cargo: 'Regional Sourcing & Component Consolidation',
            volume: '400,000 Pcs/Year',
            status: 'Fast-Track Feeder Service'
        },
        {
            id: 'route-dubai',
            region: 'me',
            name: 'Port of Jebel Ali, Dubai (AEJEA)',
            country: 'United Arab Emirates',
            pathId: 'path-dubai',
            destX: 605,
            destY: 225,
            transit: '10-14 Days FOB',
            cargo: 'Heavy-Duty Luggage & Holdall Collections',
            volume: '340,000 Pcs/Year',
            status: 'Weekly Direct Sailings'
        },
        {
            id: 'route-sydney',
            region: 'asia',
            name: 'Port of Sydney / Botany (AUBOT)',
            country: 'Australia',
            pathId: 'path-sydney',
            destX: 885,
            destY: 405,
            transit: '20-25 Days FOB',
            cargo: 'Outdoor Daypacks & Wheeled Holdalls',
            volume: '180,000 Pcs/Year',
            status: 'Fortnightly Service'
        }
    ];

    const hudCard = document.getElementById('map-hud-card');
    const hudPort = document.getElementById('hud-port-name');
    const hudCountry = document.getElementById('hud-country-name');
    const hudTransit = document.getElementById('hud-transit-time');
    const hudCargo = document.getElementById('hud-cargo-type');
    const hudVolume = document.getElementById('hud-volume');
    const hudStatus = document.getElementById('hud-status');

    function showRouteInfo(route) {
        if (!hudCard) return;

        hudPort.textContent = route.name;
        hudCountry.textContent = route.country;
        hudTransit.textContent = route.transit;
        hudCargo.textContent = route.cargo;
        hudVolume.textContent = route.volume;
        hudStatus.textContent = route.status;

        gsap.to(hudCard, {
            opacity: 1,
            y: 0,
            duration: 0.25,
            ease: 'power2.out'
        });

        // Highlight corresponding path
        document.querySelectorAll('.route-path').forEach(p => {
            if (p.id === route.pathId) {
                gsap.to(p, { stroke: '#E11D48', strokeWidth: 2.5, opacity: 1, duration: 0.2 });
            } else {
                gsap.to(p, { stroke: '#334155', strokeWidth: 1, opacity: 0.25, duration: 0.2 });
            }
        });

        // Highlight node pin
        document.querySelectorAll('.port-pin').forEach(pin => {
            if (pin.getAttribute('data-route') === route.id) {
                gsap.to(pin, { scale: 1.35, transformOrigin: 'center', duration: 0.2 });
            } else {
                gsap.to(pin, { scale: 1, transformOrigin: 'center', duration: 0.2 });
            }
        });
    }

    function resetRouteInfo() {
        document.querySelectorAll('.route-path').forEach(p => {
            gsap.to(p, { stroke: '#2563EB', strokeWidth: 1.5, opacity: 0.65, duration: 0.3 });
        });
        document.querySelectorAll('.port-pin').forEach(pin => {
            gsap.to(pin, { scale: 1, transformOrigin: 'center', duration: 0.3 });
        });
    }

    // Attach pin events
    document.querySelectorAll('.port-pin').forEach(pin => {
        const routeId = pin.getAttribute('data-route');
        const route = routes.find(r => r.id === routeId);

        if (route) {
            pin.addEventListener('mouseenter', () => showRouteInfo(route));
            pin.addEventListener('focus', () => showRouteInfo(route));
            pin.addEventListener('click', () => showRouteInfo(route));
        }
    });

    mapContainer.addEventListener('mouseleave', resetRouteInfo);

    // Region Filter Buttons
    const filterBtns = document.querySelectorAll('.map-filter-btn');
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            const region = this.getAttribute('data-region');

            filterBtns.forEach(b => {
                b.classList.remove('bg-stark-primary', 'text-white', 'active');
                b.classList.add('bg-white/10', 'text-slate-300');
            });
            this.classList.add('bg-stark-primary', 'text-white', 'active');
            this.classList.remove('bg-white/10', 'text-slate-300');

            routes.forEach(route => {
                const pathEl = document.getElementById(route.pathId);
                const pinEl = document.querySelector(`.port-pin[data-route="${route.id}"]`);
                const isMatch = region === 'all' || route.region === region;

                if (pathEl) {
                    gsap.to(pathEl, {
                        opacity: isMatch ? 0.75 : 0.08,
                        stroke: isMatch ? (region === 'all' ? '#2563EB' : '#E11D48') : '#334155',
                        strokeWidth: isMatch ? (region === 'all' ? 1.5 : 2.5) : 0.8,
                        duration: 0.35
                    });
                }

                if (pinEl) {
                    gsap.to(pinEl, {
                        opacity: isMatch ? 1 : 0.2,
                        duration: 0.35
                    });
                }
            });

            // Set HUD to first match if filtered
            if (region !== 'all') {
                const firstMatch = routes.find(r => r.region === region);
                if (firstMatch) showRouteInfo(firstMatch);
            }
        });
    });

    // Animate Bangladesh Radar Rings with GSAP
    gsap.to('#radar-ring-1', {
        attr: { r: 28 },
        opacity: 0,
        duration: 2.2,
        repeat: -1,
        ease: 'power1.out'
    });

    gsap.to('#radar-ring-2', {
        attr: { r: 42 },
        opacity: 0,
        duration: 2.2,
        delay: 0.8,
        repeat: -1,
        ease: 'power1.out'
    });
}

