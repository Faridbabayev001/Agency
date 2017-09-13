jQuery(document).ready(function() {
    "use strict";

    /* Scrollreveal*/
    if( typeof ScrollReveal !== 'undefined' ) {
        window.sr = ScrollReveal();
        sr.reveal('.scrollreveal', {
            opacity     : 0,
            duration    : 1000,
            delay       : 0,
            mobile      : true,
            // reset       : true,
            viewFactor  : 0.6,
            origin      : 'bottom'
        });
        }

    /* Inline popups */
    jQuery('.popup').magnificPopup({
      delegate: 'a:not(.popupclose)',
      removalDelay: 500, //delay removal by X to allow out-animation
      callbacks: {
        beforeOpen: function() {
           this.st.mainClass = this.st.el.attr('data-effect');
        }
      },
      midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
    });
    jQuery('.popupclose').on('click', function(){
        jQuery.magnificPopup.close();
    });

    /* Load page animsition */
    jQuery('.animsition').animsition({
        linkElement: 'nav a:not([target="_blank"]):not([href*="#"]), .logo a'
    });

    /* Contact form  */

    var regVr22 = "<div class='process green'>Processing. Please wait.</div>";
    jQuery(".send").on('click', function(){
        jQuery(".process").html(regVr22).show();
        var posName = jQuery(".posName").val();
        var subject = jQuery(".subject").val();
        var posEmail = jQuery(".posEmail").val();
        var posTel = jQuery(".posTel").val();
        var posText = jQuery(".posText").val();
        jQuery.ajax({
            type: "POST",
            url: "contact.php",
            data: {"posName": posName,"subject": subject,"posEmail": posEmail, "posTel": posTel, "posText": posText},
            cache: false,
            success: function(response){
                var messageResp = '<div class="infobox infobox_success"><div class="close_button"><i class="fa fa-times"></i></div><i class="fa fa-check"></i><b>Your message has been sent.</b><span>Dear ';
                var resultStat = ' , our managers will contact you shortly.</span></div>';
                var oll = (messageResp + posName + resultStat);
                if(response === '1'){
                    jQuery(".process").html(oll).fadeIn(3000);
                    jQuery(".posName").val("");
                    jQuery(".posEmail").val("");
                    jQuery(".subject").val("");
                    jQuery(".posTel").val("");
                    jQuery(".posText").val("");
                } else {
                    jQuery(".process").html(response).fadeIn(3000); }
                    jQuery('.infobox .close_button').on('click', function(){
                    jQuery(this).closest('.infobox').fadeOut(500);
                });
              }
        });
        return false;
    });


    jQuery('.getPlan').on('click', function () {
        document.getElementById('get').value = this.firstChild.data;
        jQuery('#get').change();
    });

    /* Infobox close button */
    jQuery('.infobox .close_button').on('click', function(){
        jQuery(this).closest('.infobox').fadeOut(500);
    });


    /* Jarallax */
    jQuery('.jarallax').jarallax({
        speed: 0.5,
        imgWidth: 1920,
        noAndroid: true
        // imgHeight: 1110
    });

    /* Reviews slider */
    if ( jQuery.fn.liquidSlider ) {
        jQuery('#review-slider').liquidSlider({
            autoSlide:true,
            autoSlideInterval: 4000,
            includeTitle:false,
            dynamicArrows:  false,
            mobileNavigation:false,
            pauseOnHover: true,
            slideEaseFunction:'animate.css',
            slideEaseDuration:500,
            heightEaseDuration:500,
            dynamicTabsPosition: "bottom",
            animateIn:"zoomIn",
            animateOut:"zoomOut",
            onload: function() {
                this.alignNavigation();
            }
        });
    }

    /* Select */
    ( function( window ) {

    'use strict';

    // class helper functions from bonzo https://github.com/ded/bonzo

    function classReg( className ) {
      return new RegExp("(^|\\s+)" + className + "(\\s+|jQuery)");
    }

    // classList support for class management
    // altho to be fair, the api sucks because it won't accept multiple classes at once
    var hasClass, addClass, removeClass;

    if ( 'classList' in document.documentElement ) {
      hasClass = function( elem, c ) {
        return elem.classList.contains( c );
      };
      addClass = function( elem, c ) {
        elem.classList.add( c );
      };
      removeClass = function( elem, c ) {
        elem.classList.remove( c );
      };
    }
    else {
      hasClass = function( elem, c ) {
        return classReg( c ).test( elem.className );
      };
      addClass = function( elem, c ) {
        if ( !hasClass( elem, c ) ) {
          elem.className = elem.className + ' ' + c;
        }
      };
      removeClass = function( elem, c ) {
        elem.className = elem.className.replace( classReg( c ), ' ' );
      };
    }

    function toggleClass( elem, c ) {
      var fn = hasClass( elem, c ) ? removeClass : addClass;
      fn( elem, c );
    }

    var classie = {
      // full names
      hasClass: hasClass,
      addClass: addClass,
      removeClass: removeClass,
      toggleClass: toggleClass,
      // short names
      has: hasClass,
      add: addClass,
      remove: removeClass,
      toggle: toggleClass
    };

    // transport
    if ( typeof define === 'function' && define.amd ) {
      // AMD
      define( classie );
    } else {
      // browser global
      window.classie = classie;
    }

    })( window );

    (function() {
        [].slice.call( document.querySelectorAll( 'select' ) ).forEach( function(el) {
            new SelectFx(el);
        } );
    })();

    /* Slideshow */
    var jQueryowl = jQuery('.slideshow');
    jQueryowl.owlCarousel({
        nav : true,
        items: 1,
        smartSpeed : 900,
        navSpeed : 900,
        loop:true,
        autoplay:true,
        autoplayTimeout:10000,
        // autoplayHoverPause:true  ,
        navText:["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
        autoHeight: false,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut'
    });

    /* Brand carousel */
    var jQueryowl1 = jQuery('.brand');
      jQueryowl1.owlCarousel({
        nav : false,
        slideSpeed : 300,
        paginationSpeed : 400,
        autoplay: false,
        items: 5,
        loop: true,
        autoplayTimeout: 4000,
        pagination: false,
        autoHeight: false,
        responsiveRefreshRate: 200,
        margin: 60,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
      });

    jQuery('#scroller').on('click', function () {
      jQuery('body,html').animate({
          scrollTop: 0
      }, 1500);
      return false;
    });

    /* Mobile nav */
    jQuery(".flexnav").flexNav();

    /* Right sidebar popup menu */
    var jQueryopen_button = jQuery('.open-button');
    var jQueryclose_button = jQuery('.close-button');
    var jQuerycontainer_left_menu = jQuery('.container_left_menu');
    var jQuerymenu_left = jQuery('.menu_left')

    jQueryopen_button.on('click', function() {
        jQuery('.container_left_menu').toggleClass('open');
    });

    jQueryclose_button.on('click', function() {
        jQuery('.container_left_menu').toggleClass('open');
    });

    jQuery('.scrolurl').on('click', function() {
        jQuery('.container_left_menu').toggleClass('open');
    });


    jQuery( '#dl-menu' ).dlmenu({
        animationClasses : { classin : 'dl-animate-in-3', classout : 'dl-animate-out-3' }
    });


    function fixDiv() {
        var jQuerycache = jQuery('.menu-left-button');
        if (jQuery(window).scrollTop() > 50)
          jQuerycache.addClass('fixed');
        else
          jQuerycache.removeClass('fixed');
    }
    fixDiv();

    /*  Scrolling url */
    setup_slight_scroll_to_anchors();
    function setup_slight_scroll_to_anchors() {
        // Select all links with hashes
        jQuery('.menu_container a[href*="#"], .skrolurl , .info_block .text_block a[href^="#"]')
        // Remove links that don't actually link to anything
            .not('[href="#"]')
            .not('[href="#0"]')
            .click(function(event) {
                // On-page links
                if (
                    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                    &&
                    location.hostname == this.hostname
                ) {
                    // Figure out element to scroll to
                    var target = jQuery(this.hash);
                    target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
                    // Does a scroll target exist?
                    if (target.length) {
                        // Only prevent default if animation is actually gonna happen
                        event.preventDefault();
                        jQuery('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000, function() {
                            // Callback after animation
                        });
                    }
                }
            });
    }


    /* Input and textarea style */
    (function() {
        // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
        if (!String.prototype.trim) {
            (function() {
                // Make sure we trim BOM and NBSP
                var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+jQuery/g;
                String.prototype.trim = function() {
                    return this.replace(rtrim, '');
                };
            })();
        }

        [].slice.call( document.querySelectorAll( '.input__field' ) ).forEach( function( inputEl ) {
            // in case the input is already filled..
            if( inputEl.value.trim() !== '' ) {
                classie.add( inputEl.parentNode, 'input--filled' );
            }

            // events:
            inputEl.addEventListener( 'focus', onInputFocus );
            inputEl.addEventListener( 'blur', onInputBlur );
            jQuery(inputEl).on( "change", onInputFocus );

        } );



        function onInputFocus( ev ) {
            classie.add( ev.target.parentNode, 'input--filled' );
        }

        function onInputBlur( ev ) {
            if( ev.target.value.trim() === '' ) {
                classie.remove( ev.target.parentNode, 'input--filled' );
            }
        }
    })();



    /* Portfolio gallery */

    (function(b,c){var jQuery=b.jQuery||b.Cowboy||(b.Cowboy={}),a;jQuery.throttle=a=function(e,f,j,i){var h,d=0;if(typeof f!=="boolean"){i=j;j=f;f=c}function g(){var o=this,m=+new Date()-d,n=arguments;function l(){d=+new Date();j.apply(o,n)}function k(){h=c}if(i&&!h){l()}h&&clearTimeout(h);if(i===c&&m>e){l()}else{if(f!==true){h=setTimeout(i?k:l,i===c?e-m:e)}}}if(jQuery.guid){g.guid=j.guid=j.guid||jQuery.guid++}return g};jQuery.debounce=function(d,e,f){return f===c?a(d,e,false):a(d,f,e!==false)}})(this);
    var shuffleme = (function( jQuery ) {
      'use strict';

      var jQuerygrid = jQuery('#grid'),
          jQueryfilterOptions = jQuery('.filter-options'),
          jQuerysizer = jQuerygrid.find('.shuffle_sizer'),

      init = function() {

        // None of these need to be executed synchronously
        setTimeout(function() {
          listen();
          setupFilters();
        }, 100);

        // instantiate the plugin
        jQuerygrid.shuffle({
          itemSelector: '[class*="col-"]',
          sizer: jQuerysizer
        });
      },

      // Set up button clicks
      setupFilters = function() {
        var jQuerybtns = jQueryfilterOptions.children();
        jQuerybtns.on('click', function() {
          var jQuerythis = jQuery(this),
              isActive = jQuerythis.hasClass( 'active' ),
              group = isActive ? 'all' : jQuerythis.data('group');

          // Hide current label, show current label in title
          if ( !isActive ) {
            jQuery('.filter-options .active').removeClass('active');
          }

          jQuerythis.toggleClass('active');

          // Filter elements
          jQuerygrid.shuffle( 'shuffle', group );
        });

        jQuerybtns = null;
      },

      // Re layout shuffle when images load. This is only needed
      // below 768 pixels because the .picture-item height is auto and therefore
      // the height of the picture-item is dependent on the image
      // I recommend using imagesloaded to determine when an image is loaded
      // but that doesn't support IE7
      listen = function() {
        var debouncedLayout = jQuery.throttle( 300, function() {
          jQuerygrid.shuffle('update');
        });

        // Get all images inside shuffle
        jQuerygrid.find('img').each(function() {
          var proxyImage;

          // Image already loaded
          if ( this.complete && this.naturalWidth !== undefined ) {
            return;
          }

          // If none of the checks above matched, simulate loading on detached element.
          proxyImage = new Image();
          jQuery( proxyImage ).on('load', function() {
            jQuery(this).off('load');
            debouncedLayout();
          });

          proxyImage.src = this.src;
        });

        // Because this method doesn't seem to be perfect.
        setTimeout(function() {
          debouncedLayout();
        }, 500);
      };

      return {
        init: init
      };
    }( jQuery ));


    if ( jQuery.fn.shuffle )  {
        shuffleme.init();
    }

    /* Portfolio gallery magnificPopup*/
    jQuery('.magnific-gallery .open_more a').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        closeBtnInside: false,
        mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
        gallery: {
           enabled:true
        },
        image: {
            verticalFit: true
        },
        zoom: {
            enabled: true,
            duration: 300, // don't forget to change the duration also in CSS
            // The "opener" function should return the element from which popup will be zoomed in
            // and to which popup will be scaled down
            // By defailt it looks for an image tag:
            opener: function(openerElement) {
                // openerElement is the element on which popup was initialized,
                return openerElement.closest('.item').find('img');
            }
        }
    });

    /* Portfolio gallery CBPGridGallery*/
    if ( jQuery('.cbpGridGallery').length ){
        if( document.getElementById( 'grid-gallery' ) ) {
            new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
        }
    }


    /* Animations */
    jQuery('.bounceUp').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInUp',
        offset: 200
    });

    jQuery('.bounceLeft').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated slideInLeft',
        offset: 200
    });

    jQuery('.bounceRight').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated slideInRight',
        offset: 200
    });

    jQuery('.zooms').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated zoomIn',
        offset: 100
    });

    jQuery('.fade').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeIn',
        offset: 400
    });

    /* Autohide fixed menu*/
    function stickyHeader(headerSelector){

        //hide right header menu when sticky header is inited
        var mainHeader = jQuery(headerSelector),
            headerHeight = mainHeader.height();

        //set scrolling variables
        var scrolling = false,
            previousTop = 0,
            currentTop = 0,
            scrollDelta = 10,
            scrollOffset = 60;

        mainHeader.addClass('autohide');

        jQuery(window).on('scroll', function(){
            if( !scrolling ) {
                scrolling = true;
                (!window.requestAnimationFrame)
                    ? setTimeout(autoHideHeader, 250)
                    : requestAnimationFrame(autoHideHeader);
            }
        });

        jQuery(window).on('resize', function(){
            headerHeight = mainHeader.height();
        });

        function autoHideHeader() {
            var currentTop = jQuery(window).scrollTop();

            checkSimpleNavigation(currentTop);
            previousTop = currentTop;
            scrolling = false;

            // add class when pass offset
            if (jQuery(window).scrollTop() > scrollOffset) {
                mainHeader.addClass('fixed');
            } else {
                mainHeader.removeClass('fixed');
            }
        }

        function checkSimpleNavigation(currentTop) {
            //there's no secondary nav or secondary nav is below primary nav
            if (previousTop - currentTop > scrollDelta) {
                //if scrolling up...
                mainHeader.removeClass('is-hidden');
            } else if( currentTop - previousTop > scrollDelta && currentTop > scrollOffset) {
                //if scrolling down...
                mainHeader.addClass('is-hidden');
            }
        }
    }
    if (jQuery(window).width() > 991) {stickyHeader('#site-header.sticky');}

    /* Accordion */
    jQuery( ".accordion" ).accordion();

    /* Tabs */
    jQuery( ".tabs" ).tabs({
      hide: { effect: "fade", duration: 500 },
      show: { effect: "fade", duration: 500 }
    });

    /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
    if (typeof particlesJS === "function") {
        if (location.hostname === "localhost" || location.hostname === "127.0.0.1" || location.hostname === "") {
            console.warn("particlesJS can run only on a web server!");
        } else {
            particlesJS.load('particles-js', '/js/vendor/particles.json');
        }

    }


    jQuery(document).on("scroll", onScroll);
    function onScroll(event){

        /* Set active menu item on scroll */
        var scrollPos = jQuery(document).scrollTop();
        jQuery('.menu_container a[href^="#"]').each(function () {
            var currLink = jQuery(this);
            var refElement = jQuery(currLink.attr("href"));
            if (refElement.length) {
                if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                    currLink.addClass("active");
                }
                else{
                    currLink.removeClass("active");
                }
            }
        });

        /* Back to top */
        if (jQuery(this).scrollTop() > 0) {
            jQuery('#scroller').fadeIn();
        } else {
            jQuery('#scroller').fadeOut();
        }

        fixDiv();
    }
});