
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
                    <a href="{{url('/')}}">
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
                                <a href="#">@lang('header.home')</a>
                            </li>
                            <li><a href="#about_us">@lang('header.about_us')</a></li>
                            <li><a href="#portfolio">@lang('header.portfolio')</a></li>
                            <li><a href="#services">@lang('header.features')</a></li>
                            <li>
                                <a href="#latest_blog">@lang('header.blog')</a>
                            </li>
                            <li>
                                <a href="">@lang('header.language')</a>
                                <ul>
                                    <li><a href="{{route('set_locale',['locale' => 'en'])}}">@lang('header.english')</a></li>
                                    <li><a href="{{route('set_locale',['locale' => 'az'])}}">@lang('header.azerbaijan')</a></li>
                                </ul>
                            </li>
                            <li><a href="#contacts">@lang('header.contact')</a></li>
                        </ul>
                    </nav>
                    <!-- Top header navigation end -->

                    <!-- Menu right sidebar -->
                    <nav class="nav" id="menu_right_sidebar">
                        <div class="menu-left-button open-button"><i class="fa fa-bars"></i></div>
                        <div class="container_left_menu">
                            <span class="close-button"><i class="fa fa-times"></i></span>
                            <div class="row footer_menu">
                                <div class="title">@lang('header.menu')</div>
                                <div id="dl-menu" class="dl-menuwrapper">
                                    <ul class="dl-menu dl-menuopen">
                                        <li><a href="#about_us" class="scrolurl">@lang('header.about_us')</a></li>
                                        <li><a href="#portfolio" class="scrolurl">@lang('header.portfolio')</a></li>
                                        <li><a href="#services" class="scrolurl">@lang('header.features')</a></li>
                                        <li>
                                            <a href="">Language</a>
                                            <ul class="dl-submenu">
                                                <li><a href="{{route('set_locale',['locale' => 'en'])}}">English</a></li>
                                                <li><a href="{{route('set_locale',['locale' => 'az'])}}">Azerbaijan</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">@lang('header.blog')</a>
                                        </li>
                                        <li><a href="#contacts" class="scrolurl">@lang('header.contact')</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row logotype_light">
                                <img src="images/logotype_light_green.png" alt="logo2" />
                            </div>
                            <div class="row footer_item_social">
                                <ul>
                                    <li><a href="{{$setting->facebook_link}}" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
                                    <li><a href="{{$setting->twitter_link}}" target="_blank"><i class="fa fa-twitter fa-lg"></i></a></li>
                                    <li><a href="{{$setting->linkedin_link}}" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a></li>
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
                            <span class="name" style="margin-left: 10px;">Facebook</span>
                        </div>
                        <div class="row center twitter-container">
                            <div class="fb-page" data-href="https://www.facebook.com/gigcode/" data-tabs="messages" data-height="250"  data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/gigcode/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/gigcode/">GigCode</a></blockquote></div>
                            <div id="fb-root"></div>
                            <script>(function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s); js.id = id;
                                    js.src = "//connect.facebook.net/{{$language}}/sdk.js#xfbml=1&version=v2.10&appId=216223718844941";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>
                        </div>
                        <!-- Twitter end -->

                        <!-- Social -->
                        <div class="row footer_item_social">
                            <ul>
                                <li><a href="{{$setting->twitter_link}}" target="_blank"><i class="fa fa-twitter fa-lg"></i></a></li>
                                <li><a href="{{$setting->linkedin_link}}" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a></li>
                                <li><a href="{{$setting->facebook_link}}" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
                            </ul>
                        </div>
                        <!-- Social end-->

                        <!-- Copyright -->
                        <div class="row powered">
                            <p>Copyright © 2017 <a href="http://owl-themes.net/">GiG Code </a></p>
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
                            <li><a href="#about_us" class="skrolurl">About Us</a></li>
                            <li><a href="#portfolio" class="skrolurl">Our works</a></li>
                        </ul>
                        <ul class="right">
                            <li><a href="#services" class="skrolurl">Features</a></li>
                            <li><a href="#latest_blog" class="skrolurl">Blog</a></li>
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
                                <p>{{$setting->$address}}</p>
                            </address>
                        </div>
                        <div class="row">
                            <div class="title">E-mail</div>
                            <span>{{$setting->email}}</span>
                        </div>
                        <div class="row">
                            <div class="title">Contact us</div>
                            <span>{{$setting->contact}}</span>
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


        @yield('scripts')
    </footer>
    <!-- Footer end-->
</div>
</body>

</html>