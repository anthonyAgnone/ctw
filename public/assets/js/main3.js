$(window).on("load", function() {
    if(navigator.userAgent.match(/Trident\/7\./)) { // if IE
        $('body').on("mousewheel", function () {
            // remove default behavior
            event.preventDefault(); 

            //scroll without smoothing
            var wheelDelta = event.wheelDelta;
            var currentScrollPosition = window.pageYOffset;
            window.scrollTo(0, currentScrollPosition - wheelDelta);
        });
}
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

  //FP Set Up

    $("#fullpage").fullpage({
        //Navigation
        smenu: '#menu',
        lockAnchors: false,
        anchors: ["firstPage", "secondPage", "thirdPage", "fourthPage", "fifthPage"],
        navigation: true,
        navigationPosition: "left",
        navigationTooltips: [
        "Welcome",
        "Who We Are",
        "How We Do It",
        "Why We Excel",
        "Get In Touch"
        ],
        showActiveTooltip: false,
        slidesNavigation: false,
        slidesNavPosition: "bottom",

        //Scrolling
        css3: true,
        scrollingSpeed: 900,
        autoScrolling: true,
        fitToSection: true,
        fitToSectionDelay: 600,
        scrollBar: false,
        easing: "easeInOutCubic",
        easingcss3: "ease",
        loopBottom: false,
        loopTop: false,
        continuousVertical: false,
        continuousHorizontal: false,
        scrollHorizontally: false,
        normalScrollElements: "#element1, .element2",
        scrollOverflow: false,
        scrollOverflowReset: false,
        scrollOverflowOptions: null,
        touchSensitivity: 15,
        normalScrollElementTouchThreshold: 5,
        bigSectionsDestination: null,

        //Accessibility
        keyboardScrolling: true,
        animateAnchor: true,
        recordHistory: true,

        //Design
        verticalCentered: false,
        responsiveWidth: 1020,

        lazyLoading: true,

        //events
        onLeave: function(index, nextIndex, direction) {
            if(index == 2 && (direction == 'up' || direction == 'down')){
                slide1Out();
            } else if (index == 3 && (direction == 'up' || direction == 'down')){
                var logo = $('.section2-content-wrap .logo svg'),
                title = $('.section2-content-wrap .section2-title h1'),
                image = $('.section2-image img'),
                content = $('.section2-content p'),
                button = $('#button2'),
                banner = $('#banner2')

                slideOut(logo,title,image,content,button,banner);
            } else if (index == 4 && (direction == 'up' || direction == 'down')){
                var logo = $('.section3-content-wrap .logo svg'),
                title = $('.section3-content-wrap .section3-title h1'),
                image = $('.section3-image img'),
                content = $('.section3-content p'),
                button = $('#button3'),
                banner = $('#banner3')

                slideOut(logo,title,image,content,button,banner);
            } else if (index == 5  && (direction == 'up' || direction == 'down')){
                var logo = $('.section4-content-wrap .logo svg'),
                title = $('.section4-content-wrap .section4-title'),
                map = $('.map-container'),
                content = $('.section4-content'),
                tl5 = new TimelineLite();

                tl5
                    .fromTo(
                        logo,
                        .6,
                        {x: 0, opacity: 1, ease: Power2.easeOut},
                        {x: -50, opacity: 0, ease: Power2.easeOut}
                    )
                    .fromTo(
                        title,
                        .8,
                        {y: 0, opacity: 1, ease: Power2.easeOut},
                        {y: 400, opacity: 0, ease: Power2.easeOut},
                        '-=.6'
                    )
                    .fromTo(
                        map,
                        .8,
                        {y: 0, opacity: 1, ease: Power2.easeOut},
                        {y: 400, opacity: 0,ease: Power2.easeOut},
                        '-=.8'
                    )
                    .fromTo(
                        content,
                        .8,
                        {y: 0, opacity: 1, ease: Power2.easeOut},
                        {y: 400, opacity: 0,ease: Power2.easeOut},
                        '-=.8'
                    )
            }
        },
        afterLoad: function(anchorLink, index) {
            if(index==2){
                slide1In()
            } else if(index == 3) {
                var logo = $('.section2-content-wrap .logo svg'),
                title = $('.section2-content-wrap .section2-title h1'),
                image = $('.section2-image img'),
                content = $('.section2-content p'),
                button = $('#button2'),
                banner = $('#banner2')

                slideIn(logo,title,image,content,button,banner);
            } else if (index == 4) {
                var logo = $('.section3-content-wrap .logo svg'),
                title = $('.section3-content-wrap .section3-title h1'),
                image = $('.section3-image img'),
                content = $('.section3-content p'),
                button = $('#button3'),
                banner = $('#banner3')

                slideIn(logo,title,image,content,button,banner);
            } else if (index == 5) {
                var logo = $('.section4-content-wrap .logo svg'),
                title = $('.section4-content-wrap .section4-title'),
                map = $('.map-container'),
                content = $('.section4-content'),
                tl5 = new TimelineLite();

                tl5
                    .fromTo(
                        logo,
                        .6,
                        {x: -50, opacity: 0, ease: Power2.easeOut},
                        {x: 0, opacity: 1, ease: Power2.easeOut}
                    )
                    .fromTo(
                        title,
                        .8,
                        {y: 400, opacity: 0,ease: Power2.easeOut},
                        {y: 0, opacity: 1, ease: Power2.easeOut},
                        '-=.6'
                    )
                    .fromTo(
                        map,
                        .3,
                        {y: 400, opacity: 0,ease: Power2.easeOut},
                        {y: 0, opacity: 1, ease: Power2.easeOut},
                        '-=.5'
                    )
                    .fromTo(
                        content,
                        .4,
                        {y: 400, opacity: 0,ease: Power2.easeOut},
                        {y: 0, opacity: 1, ease: Power2.easeOut},
                        '-=.4'
                    )
            }
        },
        afterRender: function() {},
        afterResize: function() {},
        afterResponsive: function(isResponsive) {},
        afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex) {
  
        },
        onSlideLeave: function(
        anchorLink,
        index,
        slideIndex,
        direction,
        nextSlideIndex
        ) {}
    });

    

    function scaleImage(image){
        var tl = new TimelineLite();

        tl
            .to(image,7000, {css:{scale:"10"}})
    }

    function resetImage(image) {
        var tl2 = new TimelineLite();

        tl2
            .set(image, {css: {scale: "1"}})
    }

// Page Animations
    function slide1In() {

        var logo = $('.section1-content-wrap .logo svg'),
            title = $('.section1-content-wrap .section1-title h1'),
            image = $('.section1-image img'),
            content = $('.section1-content p'),
            button = $('#button1'),
            banner = $('#banner1'),
            tlS1 = new TimelineLite();
    
            tlS1
                .fromTo(logo, 
                    .6, 
                    {x: -60, opacity: 0, ease: Power2.easeOut},
                    {x: 0, opacity: 1, ease: Power2.easeOut}
                )
                .fromTo(title,
                    .6,
                    {x: 60, opacity: 0, ease: Power2.easeOut},
                    {x: 0, opacity: 1, ease: Power2.easeOut},
                    '-=.6'
                )
                .fromTo(content,
                    .8,
                    {y: 60, opacity: 0, ease: Power2.easeOut},
                    {y: 0, opacity: 1, ease: Power2.easeOut},
                    '-=.8'
                )
                .fromTo(image,
                    .8,
                    {opacity: 0, ease: Power2.easeOut},
                    {opacity: .8, ease: Power2.easeIn},
                    '-=.4'
                )
                .fromTo(button,
                    .8,
                    {x: 60, opacity: 0, ease: Power2.easeOut},
                    {x: 0, opacity: 1, ease: Power2.easeOut},
                    '-=.9'
                )
                .fromTo(banner,
                    .8,
                    {x: 300, opacity: 0, ease: Power2.easeOut},
                    {x: 0, opacity: 1, ease: Power2.easeOut},
                    '-=.8'
                )
        scaleImage(image);
    }
    function slide1Out() {

        var logo = $('.section1-content-wrap .logo svg'),
            title = $('.section1-content-wrap .section1-title h1'),
            image = $('.section1-image img'),
            content = $('.section1-content p'),
            button = $('#button1'),
            banner = $('#banner1'),
            tlS1 = new TimelineLite();
    
            tlS1
                .fromTo(logo, 
                    .8, 
                    {x: 0, opacity: 1, ease: Power2.easeOut},
                    {x: -60, opacity: 0, ease: Power2.easeOut}
                )
                .fromTo(title,
                    .8,
                    {x: 0, opacity: 1, ease: Power2.easeOut},
                    {x: 60, opacity: 0, ease: Power2.easeOut},
                    '-=.8'
                )
                .fromTo(content,
                    .8,
                    {y: 0, opacity: 1, ease: Power2.easeOut},
                    {y: 60, opacity: 0, ease: Power2.easeOut},
                    '-=.8'
                )
                .fromTo(image,
                    .8,
                    {opacity: .8, ease: Power2.easeOut},
                    {opacity: 0, ease: Power2.easeOut},
                    '-=.8'
                )
                .fromTo(button,
                    .8,
                    {x: 0, opacity: 1, ease: Power2.easeOut},
                    {x: 60, opacity: 0, ease: Power2.easeOut},
                    '-=.8'
                )
                .fromTo(banner,
                    .8,
                    {x: 0, opacity: 1, ease: Power2.easeOut},
                    {x: 300, opacity: 0, ease: Power2.easeOut},
                    '-=.8'
                )
        resetImage(image);
    }

    function slideIn(logo,title,image,content,button,banner) {

        var tlS1 = new TimelineLite();
    
            tlS1
                .fromTo(logo, 
                    .6, 
                    {x: -60, opacity: 0, ease: Power2.easeOut},
                    {x: 0, opacity: 1, ease: Power2.easeOut}
                )
                .fromTo(title,
                    .6,
                    {x: 60, opacity: 0, ease: Power2.easeOut},
                    {x: 0, opacity: 1, ease: Power2.easeOut},
                    '-=.6'
                )
                .fromTo(content,
                    .8,
                    {y: 60, opacity: 0, ease: Power2.easeOut},
                    {y: 0, opacity: 1, ease: Power2.easeOut},
                    '-=.8'
                )
                .fromTo(image,
                    .8,
                    {opacity: 0, ease: Power2.easeOut},
                    {opacity: .8, ease: Power2.easeIn},
                    '-=.4'
                )
                .fromTo(button,
                    .8,
                    {x: 60, opacity: 0, ease: Power2.easeOut},
                    {x: 0, opacity: 1, ease: Power2.easeOut},
                    '-=.9'
                )
                .fromTo(banner,
                    .8,
                    {x: 300, opacity: 0, ease: Power2.easeOut},
                    {x: 0, opacity: 1, ease: Power2.easeOut},
                    '-=.8'
                )

        scaleImage(image);
    }
    function slideOut(logo,title,image,content,button,banner) {

        var tlS1 = new TimelineLite();
    
            tlS1
                .fromTo(logo, 
                    .8, 
                    {x: 0, opacity: 1, ease: Power2.easeOut},
                    {x: -60, opacity: 0, ease: Power2.easeOut}
                )
                .fromTo(title,
                    .8,
                    {x: 0, opacity: 1, ease: Power2.easeOut},
                    {x: 60, opacity: 0, ease: Power2.easeOut},
                    '-=.8'
                )
                .fromTo(content,
                    .8,
                    {y: 0, opacity: 1, ease: Power2.easeOut},
                    {y: 60, opacity: 0, ease: Power2.easeOut},
                    '-=.8'
                )
                .fromTo(image,
                    .8,
                    {opacity: .8, ease: Power2.easeOut},
                    {opacity: 0, ease: Power2.easeOut},
                    '-=.8'
                )
                .fromTo(button,
                    .8,
                    {x: 0, opacity: 1, ease: Power2.easeOut},
                    {x: 60, opacity: 0, ease: Power2.easeOut},
                    '-=.8'
                )
                .fromTo(banner,
                    .8,
                    {x: 0, opacity: 1, ease: Power2.easeOut},
                    {x: 300, opacity: 0, ease: Power2.easeOut},
                    '-=.8'
                )

        resetImage(image);
    }


  // Vegas Slides Set up

    var slidesVegas = [
        {
        src: "assets/images/building1.jpeg"
        },
        {
        src: "assets/images/building2.jpeg"
        },
        {
        src: "assets/images/building3.jpeg"
        }
    ];
    function initVegas() {
        $("#section0").vegas({
        slides: slidesVegas,
        animation: "random",
        overlay: true,
        overlay: false,
        delay: 6500,
        transitionDuration: 2000,
        animationDuration: 20000,
        timer: false
        });
    }

  // Logo Animation

    function fadeStroke() {
        var stroke = anime({
        targets: ".plugin-stroke",
        strokeWidth: {
            value: 0,
            easing: "easeInOutQuint",
            duration: 300,
            delay: function(el, i) {
            return 100 + i * 30;
            }
        },
        fillOpacity: {
            value: 1,
            easing: "easeInOutQuint",
            duration: 500,
            delay: function(el, i) {
            return 100 + i * 30;
            }
        }
        });
    }

    function fadeInLogo() {
        var opacity = anime({
        targets: ".svgCTWlogo",
        opacity: {
            value: 1,
            easing: "easeInOutQuint",
            delay: function(el, i) {
            return 100 + i * 30;
            },
            duration: 300
        },
        complete: function(anim) {
            initVegas();
            slide0Banner();
        }
        });
    }

    var lineDrawing = anime({
        targets: ".plugin-stroke",
        strokeDashoffset: {
        value: [anime.setDashoffset, 0],
        duration: 600,
        delay: function(el, i, t) {
            return 700 + i * 100;
        },
        easing: "easeOutQuart"
        },
        stroke: {
        value: [
            "#FFF",
            function(el) {
            return anime.getValue(el.parentNode, "stroke");
            }
        ],
        delay: 500,
        easing: "easeInQuad"
        },
        fill: {
        value: [
            "#FFF",
            function(el) {
            return anime.getValue(el.parentNode, "stroke");
            }
        ],
        delay: 500,
        easing: "easeInQuad"
        },
        delay: function(el, i, t) {
        return 700 + i * 100;
        },
        easing: "easeOutQuart",
        begin: function(anim) {},
        complete: function(anim) {
        fadeStroke();
        fadeInLogo();
        },
        autoplay: true
    });


    function slide0Banner() {
        var banner = $('#banner0'),
        char = $('#banner0 .inner-banner1'),
        char2 = $('#banner0 .inner-banner2'),
        char3 = $('#banner0 .inner-banner3'),
        tl = new TimelineLite();

        tl
            .fromTo(banner, 
                0.3, 
                {x: 1300, opacity: 0, ease: Power2.easeOut},
                {x: 10, opacity: 1, ease: Power2.easeOut}
            )
            .to(char2, .8, {text:"Residential", ease:Linear.easeNone}, '1')
            .to(char3, .8, {text:"Commercial", ease:Linear.easeNone},'-=0.6')
            .to(char, .1, {text:"Professionals", ease:Linear.easeNone},'-=.4')
    }


});
