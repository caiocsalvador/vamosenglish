/* WAYPOINTS */ 
require('waypoints/lib/jquery.waypoints.js');

$(document).ready(function () {
	//Show Itens when loaded
	$(".hide-on-start").removeClass("hide-on-start").addClass("show");
});

var posts = $(".post");
/* Show the posts */ 
var waypoint = new Waypoint({	
	element: document.querySelector('.post'),	
	handler: function(direction) {
		posts.each(function(index, ele){
			setTimeout(function() {
				console.log(index);
				$(ele).addClass("on-view");
			}, (index+1)*300);
		});
	},
	offset: '50%'
});

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