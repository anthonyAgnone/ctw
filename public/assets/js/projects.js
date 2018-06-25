$(window).on("load", function() {
	    // Preloadsetup

		setTimeout(function() {
			$("body").addClass("loaded");
		});

	  // Menu Setup
	  var $hamburger = $(".hamburger"),
	  link = $('#menu ul li a'),
	  menuContainer = $(".menu-container");
	  $hamburger.on("click", function(e) {
		  $hamburger.toggleClass("is-active");
		  $('#overlay').toggleClass('open');
	  });
	  link.on("click", function(e) {
		  $hamburger.toggleClass("is-active");
		  $('#overlay').toggleClass('open');
	  })

});