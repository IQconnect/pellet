// Import everything from autoload
import './autoload/**/*';

// import library
import PureCounter from '@srexi/purecounterjs';
import WOW from 'wowjs';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

// impot components
import slider from './components/slider';
import burger from './components/burger';
//import header from './components/header';
import preloader from './components/preloader';
import wp_block_gallery from './components/wp-block-gallery';
import accordion from './components/accordion';
import search from './components/search';
import priceFormat from './components/price-format';


/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => {
  routes.loadEvents();
  //header.init();
  preloader.init();
  burger.init();
  accordion.init();
  search.init();
  priceFormat.init();
  wp_block_gallery.init();
  slider.init();
  new WOW.WOW().init();
});

setTimeout(()=>{
  PureCounter;
  window.dispatchEvent(new Event('resize'));
}, 1000)
