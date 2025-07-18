import './bootstrap';

// Import jQuery
import $ from 'jquery';

// Make jQuery available globally
window.$ = window.jQuery = $;

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';

// Import Swiper JS
import Swiper from 'swiper';
import { Navigation, Pagination, Scrollbar, Autoplay } from 'swiper/modules';

// Make Swiper available globally
window.Swiper = Swiper;
window.SwiperModules = { Navigation, Pagination, Scrollbar, Autoplay };
