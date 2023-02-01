document.addEventListener('DOMContentLoaded', function () {

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

	//height scroller 

	var minheight = 350;
	var maxheight = 1486;
	var time = 1000;
	var timer = null;
	var toggled = false;

	var controler = document.getElementById('slide');
	var history = document.getElementById('history');
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
				document.getElementById('log').innerHTML = 'Current Height : <b>' + result + '</b><br /> Current Time : <b>' + instance + '</b>';
			} else {
				history.style.height = height + 'px'; //safety side ^^
				clearInterval(timer);
				controler.value = toggled ? ' Slide Up ' : ' Slide Down ';
				document.getElementById('log').innerHTML = 'Current Height : <b>' + height + '</b><br /> Current Time : <b>' + time + '</b>';
			}
		}, 1);
	};
});
