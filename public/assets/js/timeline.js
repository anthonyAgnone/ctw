(function(){
	function VerticalTimeline( element ) {
		this.element = element;
		this.blocks = this.element.getElementsByClassName("js-cd-block");
		this.images = this.element.getElementsByClassName("js-cd-img");
		this.contents = this.element.getElementsByClassName("js-cd-content");
		this.offset = 0.8;
		this.hideBlocks();
	};

	VerticalTimeline.prototype.hideBlocks = function() {
		//hide timeline blocks which are outside the viewport
		if ( !"classList" in document.documentElement ) {
			return;
		}
		var self = this;
		for( var i = 0; i < this.blocks.length; i++) {
			(function(i){
				if( self.blocks[i].getBoundingClientRect().top > window.innerHeight*self.offset ) {
					self.images[i].classList.add("cd-is-hidden"); 
					self.contents[i].classList.add("cd-is-hidden"); 
				}
			})(i);
		}
	};

	VerticalTimeline.prototype.showBlocks = function() {
		if ( ! "classList" in document.documentElement ) {
			return;
		}
		var self = this;
		for( var i = 0; i < this.blocks.length; i++) {
			(function(i){
				if( self.contents[i].classList.contains("cd-is-hidden") && self.blocks[i].getBoundingClientRect().top <= window.innerHeight*self.offset ) {
					// add bounce-in animation
					self.images[i].classList.add("cd-timeline__img--bounce-in");
					self.contents[i].classList.add("cd-timeline__content--bounce-in");
					self.images[i].classList.remove("cd-is-hidden");
					self.contents[i].classList.remove("cd-is-hidden");
				}
			})(i);
		}
	};

	var verticalTimelines = document.getElementsByClassName("js-cd-timeline"),
		verticalTimelinesArray = [],
		scrolling = true;
	if( verticalTimelines.length > 0 ) {
		for( var i = 0; i < verticalTimelines.length; i++) {
			(function(i){
				verticalTimelinesArray.push(new VerticalTimeline(verticalTimelines[i]));
			})(i);
		}

		//show timeline blocks on scrolling
		window.addEventListener("scroll", function(event) {
			if( !scrolling ) {
				scrolling = true;
				(!window.requestAnimationFrame) ? setTimeout(checkTimelineScroll, 250) : window.requestAnimationFrame(checkTimelineScroll);
			}
		});
	}

	function checkTimelineScroll() {
		verticalTimelinesArray.forEach(function(timeline){
			timeline.showBlocks();
		});
		scrolling = true;
	};
})();

$(window).on("load", function() {
	    // Preloadsetup

		setTimeout(function() {
			$("body").addClass("loaded");
		});

	  // Menu Setup
	  var $hamburger = $(".hamburger"),
	  link = $('#menu ul li a'),
	  menuContainer = $(".menu-container"),
	  tlMenu = new TimelineLite();
	  $hamburger.on("click", function(e) {
		  $hamburger.toggleClass("is-active");
		  $('#overlay').toggleClass('open');
	  });
	  link.on("click", function(e) {
		  $hamburger.toggleClass("is-active");
		  $('#overlay').toggleClass('open');
	  })

	var scene = $( '.bp-sections' );
	var sceneHeight = $( window ).height();
	var sceneWidth = $(window).width();
	
	$( window ).resize( function() {
		sceneHeight = $( window ).height();
		sceneWidth = $(window).width();
	})
	
	// Initialise the scrollmagic controller
	// var scrollMagicController = new ScrollMagic.Controller({
	// 	globalSceneOptions:
	// 	{
	// 		triggerHook: 'onLeave'
	// 	}
	// });
	

	// Loop through each scene and create a new
	// scrollmagic scene for each one
	// if(sceneWidth >= 1170){
	// 	scene.each( function() 
	// 	{
	// 		var scene = new ScrollMagic.Scene({
	// 			triggerElement: this,
	// 			duration: sceneHeight,
	// 		})
	// 		.setPin( this )
	// 		.addTo( scrollMagicController )
	// 		.setClassToggle( scene, 'is-active' )
	// 	});
	// };

	var controller = new ScrollMagic.Controller();

	var pinIntroScene = new ScrollMagic.Scene({
		triggerElement: '#header-history',
		triggerHook: 0,
		duration: '80%'
	})

	.setPin('#header-history', {
		pushFollowers: false
	})
	.addTo(controller);


// 	if(navigator.userAgent.match(/Trident\/7\./)) { // if IE
//         $('body').on("mousewheel", function () {
//             // remove default behavior
//             event.preventDefault(); 

//             //scroll without smoothing
//             var wheelDelta = event.wheelDelta;
//             var currentScrollPosition = window.pageYOffset;
//             window.scrollTo(0, currentScrollPosition - wheelDelta);
//         });
// }

// move bcg container when slide gets into the view


}(jQuery));
