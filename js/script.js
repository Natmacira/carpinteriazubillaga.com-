document.addEventListener('DOMContentLoaded', function () {
	let slidesPerPage = document.body.classList.contains('puerta') ? 2 : 1;
	slidesPerPage = screen.width < 1200 ? 1 : slidesPerPage;
	let welcomeSwiper = new Swiper('.generic-swiper', {
		spaceBetween: 30,
		loop: false,
		slidesPerView: slidesPerPage,
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

	//height scroller

	var minheight = window.innerWidth < 1200 ? 350 : 450;
	var maxheight = window.innerWidth < 1200 ? 1409 : 520;
	var time = window.innerWidth < 1200 ? 1000 : 500;
	var timer = null;
	var toggled = false;

	var controler = document.getElementById('slide');
	var history = document.getElementById('history');

	if (history) {
		history.style.height = minheight + 'px';
		controler.onclick = function () {
			clearInterval(timer);
			var instanceheight = parseInt(history.style.height);
			var init = (new Date()).getTime();
			var height = (toggled = !toggled) ? maxheight : minheight;

			var disp = height - parseInt(history.style.height);
			timer = setInterval(function () {
				var instance = (new Date()).getTime() - init;
				if (instance < time) {
					var pos = Math.floor(disp * instance / time);
					result = instanceheight + pos;
					history.style.height = result + 'px';
				} else {
					history.style.height = 'auto'; //safety side ^^
					clearInterval(timer);
					controler.value = toggled ? ' Slide Up ' : ' Slide Down ';
				}
			}, 1);

			controler.classList.add('controler-none');
			history.classList.add('after-none');
		}
	};
});
