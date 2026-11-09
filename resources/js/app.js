import { initTradeMap } from './trade-map';
import { initHeroSlider } from './hero-slider';
import { initCapacityCounters } from './counter';

document.addEventListener('DOMContentLoaded', () => {
    initHeroSlider();
    initTradeMap();
    initCapacityCounters();
});
