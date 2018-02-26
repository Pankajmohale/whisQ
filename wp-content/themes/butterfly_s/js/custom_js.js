/*
* Custom js
 */

jQuery(document).ready(function() {
	jQuery('#fullpage').fullpage();
});

jQuery(document).ready(function($) {
  var swiper = new Swiper('.home-product-wrapper', {
		slidesPerView: 1,
		spaceBetween: 30,
		loop: true,
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
  });
  var swiper = new Swiper('.home-testi-wrapper', {
		slidesPerView: 1,
		spaceBetween: 30,
		loop: true,
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
  });
});