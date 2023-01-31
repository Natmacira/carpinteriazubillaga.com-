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

	
	// Scrolled Page class
	window.addEventListener('scroll', function () {
		if (window.scrollY > 0) {
			document.body.classList.add('page-scrolled');
		} else {
			document.body.classList.remove('page-scrolled');
		}
	});
});
