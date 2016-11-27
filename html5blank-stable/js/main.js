$(document).ready(function() {
	$('body').on('click', '#nav-button', function(e) {
		e.stopPropagation();
		$('#mobile-nav').toggleClass('active');
	})

	$('body').on('click', '#nav-button-side', function(e) {
		$('#mobile-nav').toggleClass('active');
	})

	$('body').on('click', '#mobile-nav',function(e) {
		e.stopPropagation();
	})

	$('html').on('click', 'body', function(){
		$('#mobile-nav').removeClass('active');
	})

	// $('#carousel-container').slick({
	// 	dots: true,
	// 	infinite: true,
	// 	arrows: false,
	// 	speed: 500,
	// 	slidesToShow: 1
	// });

	$('#testimonials').slick({
		dots: true,
		infinite: true,
		arrows: false,
		speed: 500,
		slidesToShow: 1
	});

	$('#cc-testimonials').slick({
		dots: false,
		infinite: true,
		arrows: false,
		speed: 500,
		slidesToShow: 2,
		slidesToScroll: 2,
		responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
				
			}
		]
	});


	$('#news').slick({
		slidesToShow: 3,
		slidesToScroll: 3,
		dots: false,
		arrows: false,
		responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
				
			}
		]
	})

	$('#members').slick({
		slidesToShow: 4,
		dots: false,
		arrows: false,
		infinite: true,
		slidesToScroll: 4,
		autoplay: true,
		speed: 500,
		responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
				
			}
		]
	})

	// $('body').on('click', 'a[href*="#"]:not([href="#"])', function(e){
	// 	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	// 		var target = $(this.hash);
	// 		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

	// 		if (target.length) {
	// 			$('html, body').animate({
	// 				scrollTop: target.offset().top - $('#header').height() - 30
	// 			}, 1000);

	// 			e.preventDefault();
	// 		}
	// 	}
	// });
})