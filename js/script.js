document.addEventListener('DOMContentLoaded', function(){

	let welcomeSwiper = new Swiper('.generic-swiper', {
		spaceBetween: 30,
		loop: false,

		pagination: {
			el: ".swiper-pagination",
			clickable: true
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});
});
