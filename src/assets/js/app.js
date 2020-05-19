import $ from 'jquery';

import whatInput from 'what-input';

window.$ = $;

// import Foundation from 'foundation-sites';

// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
import './lib/foundation-explicit-pieces';

$(document).foundation();

//Slick slider
$('.ba-testimonials__slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    autoplay: true,
    autoplaySpeed: 5000,
    speed: 1000
});
