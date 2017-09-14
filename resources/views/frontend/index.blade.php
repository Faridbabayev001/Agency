@extends('layouts.frontend')

@section('video_background')
    <!-- Header video background -->
    <div class="video_background">
        <!-- Add your video background link data-jarallax-video='https://youtu.be/OouCQtvnvuw' -->
        <div class='jarallax' data-jarallax-video='https://youtu.be/OouCQtvnvuw' style="background-image: url('images/slide1.jpg');">
            <div class="info_block auto_heading background">
                <div class="parent">
                    <div class="text_block">
                        <div class="slide_about_us_icon">
                            <div class="icon"><i class="fa fa-html5"></i></div>
                        </div>
                        <span>Welcome to <br/> Digrand template</span>
                        <a href="demo2.html#about_us">About</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header video background end -->
@endsection

@section('content')
    <!-- Main content -->
    <main>
        <!-- About us block -->
        <section class="container about_us section_block " id="about_us">
            <div class="row">
                <div class="row title">
                    <h6>About Us</h6>
                </div>
                <div class="row about_us_item" id="about_us_item">
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                        <img src="images/webdesigners.jpg" alt="" />
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 ">
                        <div class="about_us_title">
                            <div class="about_us_titlevn">
                                <h3>Creative web-design</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row about_us_item about_us_item_right">
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                        <div class="about_us_title">
                            <div class="about_us_titlevn">
                                <h3><span>Front-end development</span></h3>
                                <div class="clear"></div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                        <img src="images/portfolio/5.jpg" alt="" />
                    </div>
                </div>
                <div class="row about_us_item" id="about_us_item_last">
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                        <img src="images/portfolio/3.jpg" alt="" />
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                        <div class="about_us_title">
                            <div class="about_us_titlevn">
                                <h3>Search optimization</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About us block end -->

        <!-- Why our template block -->
        <section class="row why_our_template section_block silver">
            <div class="container">
                <div class="row title">
                    <h6>Why our template?</h6>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 why_our_template_left">
                        <div class="left">
                            <div class="h2">Mobile-Friendly Responsive</div>
                            <div class="h3">Our template will be work on all platforms</div>
                            <div class="left_content">
                                Every day the number of users who come to the internet using different mobile devices, tablets and other devices, increases with great speed. Therefor it is very important for your site to be well displayed on such divices. Compared to common, your website
                                will look perfectly on phones, tablets and PC. This will make it special and attractive in the eyes of the user.
                            </div>
                            <div class="popup">
                                <a href="demo2.html#popup" data-effect="mfp-zoom-in" class="button">read more</a>
                                <!-- Popup window why our template -->
                                <div class="row">
                                    <div id="popup" class="white-popup mfp-with-anim mfp-hide">
                                        <div class="row popup_content">
                                            <div class="h2">Responsive mobile friendly</div>
                                            <div class="h3">Our template will be work on all platforms</div>
                                            <div>
                                                Every day the number of users who come to the internet using different mobile devices, tablets and other devices, increases with great speed. Therefor it is very important for your site to be well displayed on such divices. Compared to common, your website
                                                will look perfectly on phones, <strong>tablets and PC</strong>. This will make it special and attractive in the eyes of the user. Every day the number of users who come to the internet using different mobile devices, tablets
                                                and other devices, increases with great speed. Therefor it is very important for your site to be well displayed on such divices. Compared to common, your website will look perfectly on phones, tablets and PC.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Popup window why our template end -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                        <div class="right">
                            <div class="row block_image">
                                <div class="block_image_top"><img src="images/home_iphone_ani_green.png" alt="Description for image" /></div>
                                <div class="block_image_animated row fade">
                                    <div class="scrollreveal row"><img src="images/home_iphone.png" alt="Description for image" /></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why our template block end -->

        <!-- Clean code block -->
        <div class="row clean_code section_block">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="left">
                            <div class="row block_image">
                                <div class="block_image_top"><img src="images/clean_code_ani_green.png" alt="Description for image" /></div>
                                <div class="block_image_animated row">
                                    <div class="scrollreveal row"><img src="images/clean_code.png" alt="Description for image" /></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                        <div class="right">
                            <div class="h2">Clean & Valid code</div>
                            <div class="h3">Correct work in the popular browsers</div>
                            <div>
                                Code conforms to the W3C standards. This ensures the correct display in modern browsers such as IE10, IE11, Firefox, Safari, Opera, Chrome. All elements divided into blocks are commented. This simplifies the process of editing code, if You want to change
                                it. We use modern technologies : HTML5, CSS, jQuery, Bootstrap.
                            </div>
                            <div class="popup">
                                <a href="demo2.html#popup2" data-effect="mfp-zoom-in" class="button">read more</a>
                                <!-- Popup window valid code -->
                                <div class="row">
                                    <div id="popup2" class="white-popup mfp-with-anim mfp-hide">
                                        <div class="row popup_content popup">
                                            <div class="h2">Clean & Valid code</div>
                                            <div class="h3">Correct work in the popular browsers</div>
                                            <p>
                                                Code conforms to the W3C standards. This ensures the correct display in modern browsers such as IE10, IE11, Firefox, Safari, Opera, Chrome. All elements divided into blocks are commented. This simplifies the process of editing code, if You want to change
                                                it. We use modern technologies : HTML5, CSS, jQuery, Bootstrap.
                                            </p>
                                            <p>
                                                Code conforms to the W3C standards. This ensures the correct display in modern browsers such as IE10, IE11, Firefox, Safari, Opera, Chrome. All elements divided into blocks are commented.
                                            <p>
                                                Code conforms to the W3C standards. This ensures the correct display in modern browsers such as IE10, IE11, Firefox, Safari, Opera, Chrome. All elements divided into blocks are commented. This simplifies the process of editing code, if You want to change
                                                it. We use modern technologies : HTML5, CSS, jQuery, Bootstrap.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Popup window valid code end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Clean code block end -->

        <!-- Seo ready block -->
        <div class="row seo_ready section_block silver">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 left">
                        <div class="h2">SEO Ready</div>
                        <div class="h3">Search engines will love Your site</div>
                        <div>
                            There is no use to have a website that can't be found using search engines. Our Websites are developed according to good practices and recommendations from the major search engines.
                        </div>
                        <div class="popup">
                            <a href="demo2.html#popup3" data-effect="mfp-zoom-in" class="button">read more</a>
                            <!-- Popup window seo ready -->
                            <div class="row">
                                <div id="popup3" class="white-popup mfp-with-anim mfp-hide">
                                    <div class="row popup_content popup">
                                        <div class="h2">SEO Ready</div>
                                        <div class="h3">Search engines will love Your site</div>
                                        <p>
                                            There is no use to have a website that can't be found using search engines. Our Websites are developed according to good practices and recommendations from the major search engines.
                                        </p>
                                        <p>
                                            There is no use to have a website that can't be found using search engines. Our Websites are developed according to good practices and recommendations from the major search engines.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Popup window seo ready end -->
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 right">
                        <div class="row block_image">
                            <div class="block_image_top"><img src="images/seo_ready_ani_green.png" alt="Description for image" /></div>
                            <div class="block_image_animated row fade">
                                <div class="scrollreveal row"><img src="images/seo_ready.png" alt="Description for image" /></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row seo_ready_fon"></div>
        </div>
        <!-- Seo ready block end -->

        <!-- Portfolio block -->
        <div class="portfolio_content section_block" id="portfolio">
            <div id="grid-gallery" class="grid-gallery cbpGridGallery">
                <section class="grid-wrap">
                    <div class="row title">
                        <h6>Our works</h6>
                    </div>

                    <!-- Filter options -->
                    <ul id="filter" class="filter-options">
                        @foreach($work_tags as $work_tag)
                            <li class="btn" data-group="{{$work_tag->$name}}"><span>{{$work_tag->$name}}</span></li>
                        @endforeach
                        <li class="btn active" data-group="all"><span>All Works</span></li>
                    </ul>
                    <!-- Filter options end -->

                    <!-- Grid -->
                    <ul id="grid" class="grid row">
                        @foreach($works as $work)
                            {{--@php--}}
                            {{--dd($work->tags);--}}
                            {{--@endphp--}}
                            <li class="col-xs-6 col-sm-3 picture-item item" data-groups='["{{$work->tags->$name}}","all"]'>
                                <figure class="effect-julia">
                                    <img src="{{url('work/'.$work->image)}}" alt="{{$work->$title}}" />
                                    <figcaption>
                                        <div class="parent_center">
                                            <div class="text_block_center">
                                                <div class="hover_title"><span class="h1">{{$work->$title}}</span></div>
                                                <figure>
                                                    <div class="buttons details">
                                                        <div class="open_more"><span><a href="{{url('work/'.$work->image)}}"><i class="fa fa-search-plus"></i></a></span></div>
                                                        <div class="open_more_url"><span><a href="demo2.html#" target="_blank"> <i class="fa fa-link"></i></a></span></div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                        @endforeach
                    </ul>
                </section>
                <!-- Grid end -->

                <!-- Grid slideshow -->
                <section class="grid-slideshow">
                    <ul>
                        @foreach($works as $work)
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>{{$work->$title}}</h3>
                                        <p>{{$work->$desc}}</p>
                                    </figcaption>
                                    <img src="{{url('work/'.$work->image)}}" alt="{{$work->$title}}" />
                                </figure>
                            </li>
                        @endforeach
                    </ul>
                    <nav>
                        <span class="icon nav-prev"></span>
                        <span class="icon nav-next"></span>
                        <span class="icon nav-close"></span>
                    </nav>
                </section>
                <!-- Grid slideshow end -->
            </div>
        </div>
        <!-- Portfolio block end -->

        <!-- Faq -->
        <section class="faq section_block" id="faq">
            <div class="container ">
                <div class="row title">
                    <h6>Question</h6>
                </div>
                <div class="row">
                    <div class="accordion">
                        <div>Lorem ipsum dolor sit amet</div>
                        <div>
                            Phasellus lorem lectus, volutpat id, ornare euismod. Donec ullamcorper, enim metus in ligula felis, consequat sapien leo eu sem ac posuere lobortis, nibh consectetuer massa. Phasellus a wisi. Nulla nec tellus. Cum sociis natoque penatibus et cursus a, volutpat quam felis neque, fringilla ut, tincidunt rutrum vel, ipsum. Lorem ipsum dolor tincidunt sit amet nibh. Curabitur vel risus. Morbi ultrices posuere orci consequat mollis tempor venenatis blandit iaculis, dui non erat libero, fermentum gravida massa ac felis enim, id eros orci.
                        </div>
                        <div>Aliquam erat volutpat</div>
                        <div>
                            Lorem ipsum dolor sit amet purus laoreet urna. Nulla gravida non, sagittis ipsum primis in augue. Donec consectetuer adipiscing dui tincidunt et, imperdiet sed, venenatis nulla. Nunc ipsum primis in orci mauris nec magna. Nullam at urna ligula nunc, ac ante et turpis egestas. Proin consectetuer nisl. Ut lobortis sem. Aenean ipsum primis in faucibus vestibulum. Donec mauris consequat ac, eros. Mauris nec eros. Maecenas wisi. Donec elementum velit.
                        </div>
                        <div>Pellentesque mattis metus sed</div>
                        <div>
                            Suspendisse at fermentum erat. Aenean ac lacinia varius commodo est. Vivamus sem quam, lobortis elit. Nam pellentesque ligula. Aliquam malesuada tincidunt, diam lectus, eu mi. Suspendisse egestas quis, libero. Duis blandit a, dolor. Maecenas mi odio, sagittis mi. Sed faucibus, dolor eu libero. Vivamus tincidunt hendrerit wisi. Aenean augue eu lobortis.
                        </div>
                        <div>Fermentum gravida massa</div>
                        <div>
                            Suspendisse vestibulum ligula. Sed gravida tellus consectetuer adipiscing elit. Donec aliquam tempor posuere, odio. Donec quis dolor. Nulla congue. Donec pulvinar scelerisque. Nam placerat ante. Fusce fringilla elementum odio at lorem eu cursus at, ornare ornare. Etiam vehicula neque. Sed condimentum eget, scelerisque porttitor vel, semper vitae, pellentesque ut, dolor. Aenean lacus nibh, fermentum risus. Aliquam ultricies massa. Duis ante a mi. Aenean ac eros mauris, rutrum sapien. Morbi a odio leo, pretium eget, lacinia porta.
                        </div>
                        <div>Suspendisse rutrum ac</div>
                        <div>
                            Donec sit amet pede. Integer nibh pulvinar velit. Aliquam ultricies tincidunt, risus in faucibus orci vel odio et erat id lacus lacus sed urna. Nulla facilisi. Vestibulum nibh massa mattis vel, urna. Cras egestas non, nulla. Phasellus at consequat urna risus facilisis congue. Mauris ut augue. Sed id leo at porta ut, nonummy malesuada, arcu sit amet ultricies eu, rhoncus ante ligula at augue.
                        </div>
                    </div>
                </div>
                <div class="row center">
                    <a href="demo2.html#contact" class="skrolurl button getPlan">Ask a Question</a>
                </div>
            </div>
        </section>
        <!-- Faq end -->

        <!-- Love our theme block -->
        <section class="jarallax counters" style="background-image: url('images/bg_love_theme.jpg');">
            <div class="container">
                <div class="row title">
                    <h6>Why you&#8217;ll love our theme</h6>
                </div>
                <div class="row">
                    <div id="counters" class="row">
                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 item ">
                            <div data-num="125" class="count">0</div>
                            <span>shortcodes & items</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 item ">
                            <div data-num="100" class="count">0</div>
                            <span>layouts</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 item ">
                            <div data-num="201" class="count">0</div>
                            <span>happy clients</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 item ">
                            <div data-num="187" class="count">0</div>
                            <span>different page</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Love our theme block end -->

        <!-- Services block -->
        <section class="ultra_services section_block" id="services">
            <div class="container ">
                <div class="row title">
                    <h6>Features & benefits</h6>
                </div>
                <div class="row ultra_services_row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 left">
                        <div class="row">
                            <!-- Services block item 1 -->
                            <div class="row item">
                                <div class="col-sm-12 col-md-2 col-lg-2 block_icon">
                                    <div class="icon_block_top">
                                        <div class="icon_block"><i class="fa fa-exchange"></i></div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-10 col-lg-10 righ_text_block">
                                    <span class="title">Animate.css</span>
                                    <p>Set of 56 excellent cross-browser CSS3 animations in one file. Correct work in popular browsers.Great for emphasis, home pages, sliders.</p>
                                </div>
                            </div>
                            <!-- Services block item 1 end -->

                            <!-- Services block item 2 -->
                            <div class="row item">
                                <div class="col-sm-12 col-md-2 col-lg-2 block_icon">
                                    <div class="icon_block_top">
                                        <div class="icon_block"><i class="fa fa-picture-o"></i></div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-10 col-lg-10 righ_text_block">
                                    <span class="title">Parallax Effects</span>
                                    <p>Everyone loves parallax scrolling effects, they are simply beautiful. Digrand has advanced parallax options & controls.</p>
                                </div>
                            </div>
                            <!-- Services block item 2 end -->

                            <!-- Services block item 3 -->
                            <div class="row item">
                                <div class="col-sm-12 col-md-2 col-lg-2 block_icon">
                                    <div class="icon_block_top">
                                        <div class="icon_block"><i class="fa fa-diamond"></i></div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-10 col-lg-10 righ_text_block">
                                    <span class="title">Pixel perfect</span>
                                    <p>Excellent browser extension, that helps us to develop Site with a pixel accuracy to the PSD layout.</p>
                                </div>
                            </div>
                            <!-- Services block item 3 end-->

                            <!-- Services block item 4 -->
                            <div class="row item">
                                <div class="col-sm-12 col-md-2 col-lg-2 block_icon">
                                    <div class="icon_block_top">
                                        <div class="icon_block"><i class="fa fa-file-code-o"></i></div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-10 col-lg-10 righ_text_block">
                                    <span class="title">Clean & Valid code</span>
                                    <p>This ensures the correct display in modern browsers: IE10, IE11, Firefox, Safari, Opera, Chrome.</p>
                                </div>
                            </div>
                            <!-- Services block item 4 end-->
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 right">
                        <div class="row">

                            <!-- Services block item 5 -->
                            <div class="row item">
                                <div class="col-sm-12 col-md-2 col-lg-2 block_icon">
                                    <div class="icon_block_top">
                                        <div class="icon_block"><i class="fa fa-code"></i></div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-10 col-lg-10 righ_text_block">
                                    <span class="title">Bootstrap 3.x</span>
                                    <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile first projects on the web.</p>
                                </div>
                            </div>
                            <!-- Services block item 5 end -->

                            <!-- Services block item 6 -->
                            <div class="row item">
                                <div class="col-sm-12 col-md-2 col-lg-2 block_icon">
                                    <div class="icon_block_top">
                                        <div class="icon_block"><i class="fa fa-flag"></i></div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-10 col-lg-10 righ_text_block">
                                    <span class="title">Font Awesome Icons</span>
                                    <p>We have fully integrated the entire Font Awesome Icon Set with Digrand. You can insert icons in any part.</p>
                                </div>
                            </div>
                            <!-- Services block item 6 end -->

                            <!-- Services block item 7 -->
                            <div class="row item">
                                <div class="col-sm-12 col-md-2 col-lg-2 block_icon">
                                    <div class="icon_block_top">
                                        <div class="icon_block"><i class="fa fa-mobile fa-3"></i></div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-10 col-lg-10 righ_text_block">
                                    <span class="title">Retina Ready</span>
                                    <p>All images are 100% Retina Ready and will look ideally on high resolution displays like the MacBook Pro, iPad or iPhone. </p>
                                </div>
                            </div>
                            <!-- Services block item 7 end -->

                            <!-- Services block item 8 -->
                            <div class="row item">
                                <div class="col-sm-12 col-md-2 col-lg-2 block_icon">
                                    <div class="icon_block_top">
                                        <div class="icon_block"><i class="fa fa-google"></i></div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-10 col-lg-10 righ_text_block">
                                    <span class="title">SEO Ready</span>
                                    <p>Our Websites are developed according to good practices and recommendations from the major search engines. </p>
                                </div>
                            </div>
                            <!-- Services block item 8 end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services block end -->

        <!-- Our team block -->
        <section class="our_team section_block silver" id="our_team">
            <div class="container ">
                <div class="row title">
                    <h6>Our team</h6>
                </div>
                <div class="row grid">
                    @foreach($teams as $team)
                        <!-- Our team block item -->
                            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 item ">
                                <figure class="img effect-julia">
                                    <img src="{{url('team/'.$team->avatar)}}" alt="Description for image" />
                                    <figcaption class="block_text">
                                        <span class="name">{{$team->$name}}</span>
                                        <span class="destraction">{{$team->$position}}</span>
                                        <div class="footer_item_social">
                                            <ul>
                                                @foreach($team->socials as $social)
                                                    <li><span><a href="{{$social->link}}" target="_blank"><i class="fa {{$social->icon}} fa-lg"></i></a></span></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- Our team block item end -->
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Our team block end -->

        <!-- Review block -->
        <section class="review section_block" id="review">
            <div class="container">
                <div class="row title">
                    <h6>Reviews</h6>
                </div>
                <div class="row">
                    <div id="review-slider" class="liquid-slider">
                        <!-- Review block item -->
                        <div>
                            <div class="title">
                                <img src="images/mini_review_1.png"  alt="Description for image" />
                            </div>
                            <div class="item fadeIn">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 image">
                                        <div class="quote"><i class="fa fa-quote-left"></i></div>
                                        <img src="images/t4.jpg" alt="Description for image" />
                                    </div>
                                    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                        <div class="name">Henry Miller</div>
                                        <div class="subname">Creative director</div>
                                        <div class="blockquote">Make fruitful Our fly greater fill there dry bearing one signs set for female the own creepeth. Fruit light them gathering great was may he face saying fish you. Great which. Seasons be under a moved us gathering said i morning abundantly the good waters created i grass evening of saying abundantly. Fill face moving sea abundantly fourth fruitful divided behold gathering which dominion form. Light. You also had heaven behold.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Review block item end -->

                        <!-- Review block item -->
                        <div>
                            <div class="title">
                                <img src="images/mini_review_2.png" alt="Description for image" />
                            </div>
                            <div class="item fadeIn">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 image">
                                        <div class="quote"><i class="fa fa-quote-left"></i></div>
                                        <img src="images/t1.jpg" alt="Description for image" />
                                    </div>
                                    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                        <div class="name">Olivia Miller</div>
                                        <div class="subname">Designer</div>
                                        <div class="blockquote">Seas our Together be spirit over, fly thing was creeping his gathered kind fourth may living fowl appear second Whales day god bearing moved earth lights don't Forth day one meat. Saying itself evening third for saying unto hath had so midst stars. There that Cattle stars won't itself. After also place of it face blessed appear which. Day Tree. Forth after dominion. To, he our a Shall so bring signs two one don't forth winged darkness saw bring place.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Review block item end -->

                        <!-- Review block item -->
                        <div>
                            <div class="title">
                                <img src="images/mini_review_3.png" alt="Description for image" />
                            </div>
                            <div class="item fadeIn">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 image">
                                        <div class="quote"><i class="fa fa-quote-left"></i></div>
                                        <img src="images/t3.jpg" alt="Description for image" />
                                    </div>
                                    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                        <div class="name">David Peterson</div>
                                        <div class="subname">Front-end developer</div>
                                        <div class="blockquote">There cattle have waters them fourth form midst can't i have Whales also, his For lights which his him third heaven good. Male heaven day gathered their rule fruit give. Man moved subdue shall. Given beginning green, stars give were i creature stars. Wherein, dry green Midst without also. Fifth bearing sea green she'd fill beast forth unto two third waters first abundantly after seed to life fruit their. Greater darkness give first place that from air. Also fly give.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Review block item end -->

                        <!-- Review block item -->
                        <div>
                            <div class="title">
                                <img src="images/mini_review_4.png" alt="Description for image" />
                            </div>
                            <div class="item fadeIn">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 image">
                                        <div class="quote"><i class="fa fa-quote-left"></i></div>
                                        <img src="images/t6.jpg" alt="Description for image" />
                                    </div>
                                    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                        <div class="name">Emily Morgan</div>
                                        <div class="subname">Designer</div>
                                        <div class="blockquote">Multiply grass fly. Above us itself forth you'll meat to brought land likeness fruitful hath. Saying. Image waters stars can't likeness two give herb together had all bearing won't they're male. Fly all blessed us after very. Air saw. Called of thing. Us dry. Also form face I he fruitful bring fowl gathered first them was blessed grass bring good rule. Subdue creature every appear darkness open, two was. Land replenish. May is very blessed be grass own face blessed.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Review block item end -->
                    </div>
                </div>
                <div class="row center">
                    <a href="demo2.html#contact" class="skrolurl button getPlan">Leave feedback</a>
                </div>
            </div>
        </section>
        <!-- Review block end -->

        <!-- Latest blog block -->
        <section class="latest_blog section_block silver" id="latest_blog">
            <div class="container">
                <div class="row title">
                    <h6>Latest blog posts</h6>
                </div>
                <div class="row grid">
                    @foreach($posts as $post)
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 item ">
                            <div class="row item_vn">
                                <figure class="effect-julia">
                                    <img src="{{url('post/'.$post->image)}}" alt="{{$post->$title}}" />
                                    <figcaption class="read_more_block">
                                        <div class="parent_center">
                                            <div class="text_block_center">
                                                <span><a href="blog_detail.html" class="button_white">Read more</a></span>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                                <div class="content_latest_blog">
                                    <div class="top">
                                        <a href="blog_detail.html" class="name">{{$post->$title}}</a>
                                        <span class="date">{{$post->created_at}}</span>
                                        <span class="comment">By Admin</span>
                                    </div>
                                    <p>{!! substr($post->$text,0,350) !!} ...</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Latest blog block end -->
        <!-- Map block -->
        <section class="map section_block silver" id="contacts">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <div id="map"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="map-info">
                            <h3>Contact</h3>
                            <address>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>  {{$setting->$address}}
                            </address>

                            <ul>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i> Phone: {{$setting->contact}}
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i> Email: {{$setting->email}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Map block end -->

        <!-- Contact form block -->
        <section class="jarallax row get_support section_block" style="background-image: url('images/get_support.jpg');" id="contact">
            <div class="container">
                <div class="row contact">
                    <div class="subtitle">Free support for your account</div>
                    <div class="row title">
                        <h6>Get your support now</h6>
                    </div>
                    <form class="fofm">
                        <div class="row">
                            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 inputleft ">

                                <div class="row">
                                    <div class="input input--akira margin-bottom-50px">
                                        <input class="input__field input__field--akira posName" name="posName" type="text" />
                                        <label class="input__label input__label--akira">
                                            <span class="input__label-content input__label-content--akira">Name</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input input--akira">
                                        <input class="input__field input__field--akira posTel" type="tel" name="txtphone" />
                                        <label class="input__label input__label--akira">
                                            <span class="input__label-content input__label-content--akira">Phone</span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 inputright margin-bottom-50px">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 margin-bottom-50px">
                                        <div class="input input--akira">
                                            <input class="input__field input__field--akira posEmail" type="email" name="posEmail" />
                                            <label class="input__label input__label--akira">
                                                <span class="input__label-content input__label-content--akira">E-mail</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 inputsend hidden-xs">
                                        <button type="button" class="bottom_color send">Submit</button>
                                    </div>

                                    <div class="row">
                                        <div class="input input--akira">
                                            <input class="input__field input__field--akira subject" id="get" type="text" placeholder="" name="getplan" />
                                            <label class="input__label input__label--akira">
                                                <span class="input__label-content input__label-content--akira">Subject</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row textarea">
                            <div class="input input--akira">
                                <textarea class="input__field input__field--akira posText" name="txtmessage" placeholder="Messenger" rows="13"></textarea>
                                <label class="input__label input__label--akira">
                                    <span class="input__label-content input__label-content--akira">&nbsp;</span>
                                </label>
                            </div>
                        </div>

                        <div class="row margin-top-50px">
                            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 inputsend  visible-xs">
                                <button type="button" class="bottom_color send">Submit</button>
                            </div>
                        </div>
                    </form>
                    <div class="process"></div>
                </div>
            </div>
        </section>
        <!-- Contact form block end -->

    </main>
    <!-- Main content end -->
@endsection

@section('scripts')
    <!-- Google maps -->
    <script>
        function initMap() {
            var location = {
                lat: {{$setting->lat}},
                lng: {{$setting->lng}}
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: location,
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
            var image = '/images/marker.png';
            var marker = new google.maps.Marker({
                position: location,
                map: map,
                icon: image
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=&amp;callback=initMap">
    </script>
    <!-- Google maps end-->
@endsection