<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Digrand - One Page Portfolio Template And Blog</title>
    <meta name="keywords" content="HTML5 Template, Portfolio Template, Blog and One Page" />
    <meta name="description" content="Digrand - Responsive HTML5 Template" />
    <meta name="author" content="http://owl-themes.net/" />

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

    <!-- Animsition page load -->
    <link rel="stylesheet" property="stylesheet" href="css/vendor/animsition.min.css" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CRaleway:400,700%7CRoboto&amp;subset=cyrillic" rel="stylesheet">

    <!-- Include bootstrap -->
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />

    <!-- Include main style theme -->
    <link rel="stylesheet" href="css/custom/style.css" />

    <!-- Blog -->
    <link rel="stylesheet" href="css/custom/blog.css" />

    <!-- Responsive -->
    <link rel="stylesheet" href="css/custom/responsive.css" />

    <!-- Jquery and modernizr -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <script src="js/vendor/modernizr.custom.js"></script>
</head>

<body>
<div class="animsition">
    <!-- Header -->
    <header id="site-header">
        <div class="container">
            <div class="row header">
                <!-- Logo -->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2 logo">
                    <a href="index.html">
                        <img class="logo-display" src="images/logo_green.png" alt="Digrand"/>
                        <img class="logo-scrolled" src="images/logo_green_black.png" alt="Digrand"/>
                    </a>
                </div>
                <!-- logo end -->

                <!-- Navigation -->
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-10 menu_container">
                    <!-- Top header navigation -->
                    <nav class="menu">
                        <div class="menu-button"><i class="fa fa-bars"></i> Navigation</div>
                        <ul class="flexnav" data-breakpoint="991">
                            <li>
                                <a href="demo2.html#">@lang('header.home')</a>
                                <ul>
                                    <li><a href="demo1.html">Home Slider (Blue color)</a></li>
                                    <li><a href="demo2.html">Home Video (Green color)</a></li>
                                </ul>
                            </li>
                            <li><a href="demo2.html#about_us">About Us</a></li>
                            <li><a href="demo2.html#portfolio">Our works</a></li>
                            <li><a href="demo2.html#price">Price & Plans</a></li>
                            <li><a href="demo2.html#services">Features</a></li>
                            <li>
                                <a href="demo2.html#latest_blog">Blog</a>
                                <ul>
                                    <li><a href="blog_left_sidebar_green.html">Full width image</a></li>
                                    <li><a href="blog_list_left_sidebar_green.html">Blog List</a></li>
                                    <li><a href="blog_2_col_left_sidebar_green.html">Blog Grid</a></li>
                                    <li><a href="blog_3_col_left_sidebar_green.html">3 Columns grid</a></li>
                                    <li><a href="blog_right_sidebar_green.html">Right Sidebar</a></li>
                                    <li><a href="blog_detail_green.html">Blog post</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="element_green.html">Element</a>
                                <ul>
                                    <li><a href="{{route('set_locale',['locale' => 'en'])}}">English</a></li>
                                    <li><a href="{{route('set_locale',['locale' => 'az'])}}">Azerbaijan</a></li>
                                </ul>
                            </li>
                            <li><a href="demo2.html#contacts">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- Top header navigation end -->

                    <!-- Menu right sidebar -->
                    <nav class="nav" id="menu_right_sidebar">
                        <div class="menu-left-button open-button"><i class="fa fa-bars"></i></div>
                        <div class="container_left_menu">
                            <span class="close-button"><i class="fa fa-times"></i></span>
                            <div class="row footer_menu">
                                <div class="title">Our menu</div>
                                <div id="dl-menu" class="dl-menuwrapper">
                                    <ul class="dl-menu dl-menuopen">
                                        <li><a href="demo2.html#about_us" class="scrolurl">About Us</a></li>
                                        <li><a href="demo2.html#portfolio" class="scrolurl">Our works</a></li>
                                        <li><a href="demo2.html#price" class="scrolurl">Price & Plans</a></li>
                                        <li><a href="demo2.html#services" class="scrolurl">Features</a></li>
                                        <li>
                                            <a href="element_green.html">Element</a>
                                            <ul class="dl-submenu">
                                                <li><a href="element_green.html#heading">Heading</a></li>
                                                <li><a href="element_green.html#list">List</a></li>
                                                <li><a href="element_green.html#select">Select and Input</a></li>
                                                <li><a href="element_green.html#list">Radio and Checkbox</a></li>
                                                <li><a href="element_green.html#textarea">Textarea</a></li>
                                                <li><a href="element_green.html#button">Button</a></li>
                                                <li><a href="element_green.html#popups">Popup</a></li>
                                                <li><a href="element_green.html#tabsto">Tabs and Alert Message</a></li>
                                                <li><a href="element_green.html#column">Column</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="demo2.html#">Blog</a>
                                            <ul class="dl-submenu">
                                                <li><a href="blog_left_sidebar_green.html">Full width image</a></li>
                                                <li><a href="blog_list_left_sidebar_green.html">Blog List</a></li>
                                                <li><a href="blog_2_col_left_sidebar_green.html">Blog Grid</a></li>
                                                <li><a href="blog_3_col_left_sidebar_green.html">3 Columns grid</a></li>
                                                <li><a href="blog_right_sidebar_green.html">Right Sidebar</a></li>
                                                <li><a href="blog_detail_green.html">Blog post</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="demo2.html#contacts" class="scrolurl">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row logotype_light">
                                <img src="images/logotype_light_green.png" alt="logo2" />
                            </div>
                            <div class="row footer_item_social">
                                <ul>
                                    <li><a href="demo2.html#"><i class="fa fa-twitter fa-lg"></i></a></li>
                                    <li><a href="demo2.html#"><i class="fa fa-behance fa-lg"></i></a></li>
                                    <li><a href="demo2.html#"><i class="fa fa-linkedin fa-lg"></i></a></li>
                                    <li><a href="demo2.html#"><i class="fa fa-facebook fa-lg"></i></a></li>
                                </ul>
                            </div>
                            <div class="row menu_contact">
                                <ul>
                                    <li><address>3717 CedarWood Dr. Holiday FL, 349672</address></li>
                                    <li>Phone: +3 555 285 8620</li>
                                    <li>owlthemesnet@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- Menu right sidebar end -->
                </div>
                <!-- Navigation end -->
            </div>
        </div>
    </header>
    <!-- Header end-->
    @yield('video_background')


   @yield('content')

    <!-- Footer -->
    <footer>
        <!-- Back to top -->
        <div id="scroller" title="Back to top"></div>
        <!-- Back to top end-->

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="social">
                        <!-- Twitter -->
                        <div class="row top">
                            <i class="fa fa-twitter fa-lg"></i>
                            <span class="name">Twitter</span>
                        </div>
                        <div class="row center twitter-container">
                            <a class="twitter-timeline" href="https://twitter.com/Tom27Johnson" data-widget-id="679985187644649472" data-theme="dark" data-chrome="noheader nofooter noborders noscrollbar transparent" data-link-color="#333" data-tweet-limit="1">@Tom27Johnson</a>
                            <script>
                                ! function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0],
                                        p = /^http:/.test(d.location) ? 'http' : 'https';
                                    if (!d.getElementById(id)) {
                                        js = d.createElement(s);
                                        js.id = id;
                                        js.src = p + "://platform.twitter.com/widgets.js";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }
                                }(document, "script", "twitter-wjs");
                            </script>
                        </div>
                        <!-- Twitter end -->

                        <!-- Social -->
                        <div class="row footer_item_social">
                            <ul>
                                <li><a href="demo2.html#"><i class="fa fa-twitter fa-lg"></i></a></li>
                                <li><a href="demo2.html#"><i class="fa fa-behance fa-lg"></i></a></li>
                                <li><a href="demo2.html#"><i class="fa fa-linkedin fa-lg"></i></a></li>
                                <li><a href="demo2.html#"><i class="fa fa-facebook fa-lg"></i></a></li>
                            </ul>
                        </div>
                        <!-- Social end-->

                        <!-- Copyright -->
                        <div class="row powered">
                            <p>Copyright © 2017 <a href="http://owl-themes.net/">Digrand</a></p>
                        </div>
                        <div class="row copy">
                            All Rights Reserved
                        </div>
                        <!-- Copyright end -->
                    </div>
                </div>

                <!-- Footer menu -->
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="footer_menu">
                        <div class="title">Menu</div>
                        <ul class="left">
                            <li><a href="demo2.html#about_us" class="skrolurl">About Us</a></li>
                            <li><a href="demo2.html#portfolio" class="skrolurl">Our works</a></li>
                            <li><a href="demo2.html#price" class="skrolurl">Price & Plans</a></li>
                        </ul>
                        <ul class="right">
                            <li><a href="demo2.html#services" class="skrolurl">Features</a></li>
                            <li><a href="demo2.html#latest_blog" class="skrolurl">Blog</a></li>
                            <li><a href="demo2.html#contacts" class="skrolurl">Contact</a></li>
                        </ul>

                    </div>
                </div>
                <!-- Footer menu end -->

                <!-- Contact us -->
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="footer_contacts">
                        <div class="row">
                            <address>
                                <div class="title">Address</div>
                                <p>3717 CedarWood Dr. Holiday FL, 349672</p>
                            </address>
                        </div>
                        <div class="row">
                            <div class="title">E-mail</div>
                            <span>owlthemesnet@gmail.com</span>
                        </div>
                        <div class="row">
                            <div class="title">Contact us</div>
                            <span>+3 555 285 8620</span>
                            <span>+3 358 321 6548</span>
                        </div>
                    </div>
                </div>
                <!-- Contact us end -->
            </div>
        </div>

        <!-- Flexnav -->
        <link rel="stylesheet" property="stylesheet" href="css/vendor/flexnav.css" />

        <!-- Font awesome -->
        <link rel="stylesheet" property="stylesheet" href="css/fonts/font-awesome.min.css" />

        <!-- Responsive height image -->
        <link rel="stylesheet" property="stylesheet" href="css/vendor/liCover.css" />

        <!-- Animate -->
        <link rel="stylesheet" property="stylesheet" href="css/vendor/animate.min.css" />

        <!-- Include owl-carousel -->
        <link rel="stylesheet" property="stylesheet" href="css/vendor/owl.carousel.css" />

        <!-- Portfolio Galery  -->
        <link rel="stylesheet" property="stylesheet" href="css/vendor/cbpGridGallery.css" />

        <!-- Class input -->
        <link rel="stylesheet" property="stylesheet" href="css/vendor/input.css" />

        <!-- Liquid-slider -->
        <link rel="stylesheet" property="stylesheet" href="css/vendor/liquid-slider.css" />

        <!-- Magnific Popup core CSS file -->
        <link rel="stylesheet" property="stylesheet" href="css/vendor/magnific-popup.css" />

        <!-- Select -->
        <link rel="stylesheet" property="stylesheet" href="css/vendor/select.css" />

        <!-- Jquery Ui -->
        <link rel="stylesheet" property="stylesheet" href="css/vendor/jquery-ui.css" />

        <!-- Green color -->
        <link rel="stylesheet" href="css/custom/green-color.css" />

        <!--[if lt IE 9]>
        <script src="js/vendor/html5shiv.js"></script>
        <![endif]-->

        <!-- Animsition page load -->
        <script src="js/vendor/animsition.min.js"></script>

        <!-- Jarallax -->
        <script src="js/vendor/jarallax.min.js"></script>
        <script src="js/vendor/jarallax-video.min.js"></script>

        <!--  Portfolio gallery  -->
        <script src="js/vendor/jquery.shuffle.min.js"></script>

        <!-- Jquery Ui -->
        <script src="js/vendor/jquery-ui.min.js"></script>

        <!-- Plugin animate -->
        <script src="js/vendor/jquery.viewportchecker.min.js"></script>

        <!-- Flexnav plugin -->
        <script src="js/vendor/flexnav.js"></script>

        <!-- Plugin owl-carousel -->
        <script src="js/vendor/owl.carousel.min.js"></script>

        <!-- Counters -->
        <script async src="js/vendor/numcount.js"></script>

        <!-- Liquid slider -->
        <script src="js/vendor/jquery.touchSwipe.min.js"></script>
        <script src="js/vendor/jquery.liquid-slider.min.js"></script>

        <!-- Our works gallery -->
        <script async src="js/vendor/imagesloaded.pkgd.min.js"></script>
        <script src="js/vendor/cbpGridGallery.js"></script>

        <!-- Retina ready -->
        <script src="js/vendor/retina.min.js"></script>

        <!-- Magnific Popup core JS file -->
        <script src="js/vendor/jquery.magnific-popup.min.js"></script>

        <!-- Select -->
        <script src="js/vendor/selectFx.js"></script>

        <!-- Sidebar menu -->
        <script src="js/vendor/jquery.dlmenu.js"></script>

        <!-- Scrollreveal-->
        <script src="js/vendor/scrollreveal.min.js"></script>

        <!-- Svgcheckbx -->
        <script src="js/vendor/svgcheckbx.js"></script>

        <!-- Custom -->
        <script src="js/custom/custom.js"></script>

        <!-- Google maps -->
        <script>
            function initMap() {
                var uluru = {
                    lat: -33.8765,
                    lng: 151.2094
                };
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 12,
                    center: uluru,
                    scrollwheel: false,
                    //green map
                    styles: [{
                        "featureType": "landscape",
                        "stylers": [{
                            "hue": "#FFA800"
                        }, {
                            "saturation": 0
                        }, {
                            "lightness": 0
                        }, {
                            "gamma": 1
                        }]
                    }, {
                        "featureType": "road.highway",
                        "stylers": [{
                            "hue": "#53FF00"
                        }, {
                            "saturation": -73
                        }, {
                            "lightness": 40
                        }, {
                            "gamma": 1
                        }]
                    }, {
                        "featureType": "road.arterial",
                        "stylers": [{
                            "hue": "#FBFF00"
                        }, {
                            "saturation": 0
                        }, {
                            "lightness": 0
                        }, {
                            "gamma": 1
                        }]
                    }, {
                        "featureType": "road.local",
                        "stylers": [{
                            "hue": "#00FFFD"
                        }, {
                            "saturation": 0
                        }, {
                            "lightness": 30
                        }, {
                            "gamma": 1
                        }]
                    }, {
                        "featureType": "water",
                        "stylers": [{
                            "hue": "#00BFFF"
                        }, {
                            "saturation": 6
                        }, {
                            "lightness": 8
                        }, {
                            "gamma": 1
                        }]
                    }, {
                        "featureType": "poi",
                        "stylers": [{
                            "hue": "#679714"
                        }, {
                            "saturation": 33.4
                        }, {
                            "lightness": -25.4
                        }, {
                            "gamma": 1
                        }]
                    }],
                });
                var image = '/images/marker_green.png';
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map,
                    icon: image
                });
            }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=&amp;callback=initMap">
        </script>
        <!-- Google maps end-->

    </footer>
    <!-- Footer end-->
</div>
</body>

</html>