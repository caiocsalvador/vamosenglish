
/* WAYPOINTS */ 
window.jQuery = window.$ = require("jquery");
require('waypoints/lib/jquery.waypoints.js');
require('slick-carousel/slick/slick.js');

// Detect objectFit support
if ('objectFit' in document.documentElement.style === false) {
	
	// assign HTMLCollection with parents of images with objectFit to variable
	var container = document.getElementsByClassName('post-thumbnail');

	// Loop through HTMLCollection
	for (var i = 0; i < container.length; i++) {

		// Asign image source to variable
		var imageSource = container[i].querySelector('img').src;

		// Hide image
		container[i].querySelector('img').style.display = 'none';

		// Add background-size: cover
		container[i].style.backgroundSize = 'cover';

		// Add background-image: and put image source here
		container[i].style.backgroundImage = 'url(' + imageSource + ')';

		// Add background-position: center center
		container[i].style.backgroundPosition = 'center center';
	}
}

$(document).ready(function () {
	//Show Itens when loaded
	$(".hide-on-start").removeClass("hide-on-start").addClass("show");

	var posts = $(".animated.post");
	animate(posts);

	/*var posts_home = $(".animated.post.post-home");
	animateWithDelay(posts_home);*/

	var services = $(".animated.service");
	animate(services);	

	var widgets = $(".widget");
	animate(widgets);

	$('.carousel-testimonials').slick({
		slidesToShow: 1,
		autoplay: true,
		autoplaySpeed: 7000,
	});

	$(".comment-form-url").hide();	

	if ($(window).scrollTop() > 200) {
		$('.cont-fixed-menu').addClass('show');
   	} else {
		$('.cont-fixed-menu').removeClass('show');
   	}
});

$(window).scroll(function() {
    if ($(this).scrollTop() > 200) {
         $('.cont-fixed-menu').addClass('show');
    } else {
         $('.cont-fixed-menu').removeClass('show');
    }
});

function animateWithDelay(itens){
	
	$(itens).each(function(index, ele){
		
		var self = $(this);
	
		$(this).waypoint({
			handler: function(direction){
				setTimeout(function() {
					$(ele).addClass("on-view");
				}, (index+1)*100);
			},
			offset: '75%'
		});
	});
}

function animate(itens){
	
	$(itens).each(function(index, ele){
		
		var self = $(this);
	
		$(this).waypoint({
			handler: function(direction){
				$(ele).addClass("on-view");
			},
			offset: '75%'
		});
	});
}