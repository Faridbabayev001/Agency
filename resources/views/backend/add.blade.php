@extends('layouts.backend')

@section('content')
    <section id="content_outer_wrapper">
        <div id="content_wrapper" class="simple leftnav_v2">
            <div id="header_wrapper" class="header-sm">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <header id="header">
                                <h1>Add Data</h1>
                            </header>
                        </div>
                    </div>
                </div>
                <ul class="card-actions icons lg alt-actions left-top">
                    <li>
                        <a href="javascript:void(0)" class="drawer-trigger" data-drawer="open-left">
                            <i class="zmdi zmdi-menu"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div id="content" class="container-fluid">
                <div id="content_type" class="leftnav_v2">
                    <div class="content-body">
                        <div class="row">
                            <div class="col-xs-2 leftnav-col-wrapper">
                                <aside id="leftnav" class="scrollbar mCustomScrollbar _mCS_2 mCS-autoHide mCS_no_scrollbar" style="overflow: visible;"><div id="mCSB_2" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside" style="max-height: none;" tabindex="0"><div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                                            <div class="card alt-card">
                                                <div class="card-body">
                                                    <ul class="nav nav-pills nav-stacked" role="tablist">
                                                        <li role="presentation" class="active"><a href="#sidenav1" aria-controls="sidenav1" role="tab" data-toggle="tab">Add Post</a></li>
                                                        <li role="presentation"><a href="#sidenav2" aria-controls="sidenav2" role="tab" data-toggle="tab">Sidenav item 2</a></li>
                                                        <li role="presentation"><a href="#sidenav3" aria-controls="sidenav3" role="tab" data-toggle="tab">Sidenav item 3</a></li>
                                                        <li role="presentation"><a href="#sidenav4" aria-controls="sidenav4" role="tab" data-toggle="tab">Sidenav item 4</a></li>
                                                        <li role="presentation"><a href="#sidenav5" aria-controls="sidenav5" role="tab" data-toggle="tab">Sidenav item 5</a></li>
                                                        <li role="presentation"><a href="#sidenav6" aria-controls="sidenav6" role="tab" data-toggle="tab">Sidenav item 6</a></li>
                                                        <li role="presentation"><a href="#sidenav7" aria-controls="sidenav7" role="tab" data-toggle="tab">Sidenav item 7</a></li>
                                                        <li role="presentation"><a href="#sidenav8" aria-controls="sidenav8" role="tab" data-toggle="tab">Sidenav item 8</a></li>
                                                        <li role="presentation"><a href="#sidenav9" aria-controls="sidenav9" role="tab" data-toggle="tab">Sidenav item 9</a></li>
                                                        <li role="presentation"><a href="#sidenav10" aria-controls="sidenav10" role="tab" data-toggle="tab">Sidenav item 10</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div></div><div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; height: 0px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 50px;"></div></div><div class="mCSB_draggerRail"></div></div></div></aside>
                            </div>
                            <div class="col-xs-10 content-col-wrapper">
                                <div class="row">
                                    <div class="col-xs-12" role="main">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <section role="tabpanel" class="tab-pane active" id="sidenav1">
                                                <div class="card">
                                                    <header class="card-heading">
                                                        <h2 class="card-title">Add Post</h2>
                                                    </header>
                                                    <div class="card-body">
                                                        <form id="form-horizontal" method="" class="form-horizontal" novalidate="novalidate">
                                                            <div class="form-group is-empty">
                                                                <label for="nameInput" class="col-sm-2 control-label">Title EN</label>
                                                                <div class="col-sm-10">
                                                                    <input id="nameInput" type="text" name="title_en" placeholder="Enter title for English language" data-rule-required="true" minlength="2" class="form-control" aria-required="true">
                                                                </div>
                                                            </div>
                                                            <div class="form-group is-empty">
                                                                <label for="nameInput" class="col-sm-2 control-label">Title AZ</label>
                                                                <div class="col-sm-10">
                                                                    <input id="nameInput" type="text" name="title_az" placeholder="Enter title for Azerbaijan language" data-rule-required="true" minlength="2" class="form-control" aria-required="true">
                                                                </div>
                                                            </div>
                                                            <div class="form-group is-empty">
                                                                <label for="keyword" class="col-sm-2 control-label">Keyword</label>
                                                                <div class="col-sm-10">
                                                                    <input id="keyword" type="text" name="meta_keyword" placeholder="Enter keywords for SEO" data-rule-required="true" data-rule-rangelength="[10,30]" data-rule-email="true" class="form-control" aria-required="true">
                                                                </div>
                                                            </div>
                                                            <div class="form-group is-empty">
                                                                <label for="CategoryInput" class="col-sm-2 control-label">Category</label>
                                                                <div class="col-sm-10">
                                                                    <select class="select form-control" name="category_id" id="CategoryInput">
                                                                        <option value="e">qqq</option>
                                                                        <option value="wwe">www</option>
                                                                        <option value="ewwwww">sss</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group is-empty">
                                                                <label for="CategoryInput" class="col-sm-2 control-label">Tag</label>
                                                                <div class="col-sm-10">
                                                                    <select class="select form-control" name="tag" id="CategoryInput" multiple>
                                                                        <option value="eceece">efefe</option>
                                                                        <option value="wweeee">wessefsww</option>
                                                                        <option value="ewesesefsewwww">sssfefsefs</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group is-fileinput is-empty">
                                                                <label for="fileInput" class="col-sm-2 control-label">Image</label>
                                                                <div class="col-sm-10">
                                                                    <div class="input-group">
                                                                        <input id="fileInput" type="file" name="image" data-buttontext="Choose file" data-buttonname="btn-outline btn-primary" data-iconname="ion-image mr-5" data-rule-required="true" data-rule-accept="image/*" class="filestyle" aria-required="true">
                                                                        <div class="input-group">
                                                                            <input type="text" readonly="" class="form-control" placeholder="Upload image file...">
                                                                            <span class="input-group-btn input-group-sm">
                                                                              <button type="button" class="btn btn-primary btn-sm">
                                                                                File
                                                                              </button>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <label class="col-sm-2 control-label">Status</label>
                                                                <div class="col-sm-10 ">
                                                                    <div class="radio radio-inline">
                                                                        <label>
                                                                            <input type="radio" name="status" value="1" data-rule-required="true" aria-required="true"><span class="circle"></span><span class="check"></span> Active
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio radio-inline">
                                                                        <label>
                                                                            <input type="radio" name="status" value="0"><span class="circle"></span><span class="check"></span> Deactive
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-offset-2 col-sm-10">
                                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </section>
                                            <section role="tabpanel" class="tab-pane" id="sidenav2">
                                                <div class="card">
                                                    <header class="card-heading">
                                                        <h2 class="card-title">Card Title 2</h2>
                                                    </header>
                                                    <div class="card-body">
                                                        <img src="assets/img/headers/header-md-02.jpg" class=" m-b-30" alt="">
                                                        <p>Deep v ex celiac twee. Reprehenderit affogato chia, roof party heirloom literally esse sartorial godard ennui. Enim lo-fi everyday carry, normcore anim ugh PBR&amp;B sartorial sunt fashion axe delectus. Assumenda vegan celiac taxidermy
                                                            incididunt. Flannel shabby chic before they sold out tilde, helvetica echo park pop-up gluten-free consequat 3 wolf moon sriracha knausgaard. Celiac culpa bicycle rights, bespoke street art wolf fanny pack et irony cillum in. Thundercats
                                                            vinyl green juice celiac whatever excepteur proident locavore elit, dolor ea viral twee four loko disrupt.
                                                        </p>
                                                        <p>
                                                            Fashion axe kitsch marfa, art party gluten-free beard meditation lumbersexual pinterest sapiente. Aute portland nostrud four dollar toast, organic typewriter cold-pressed wolf do chartreuse godard. Before they sold out consequat voluptate man bun, craft
                                                            beer ullamco mlkshk quis health goth cold-pressed yuccie pork belly. Biodiesel tilde ethical, delectus fap marfa four dollar toast thundercats. Photo booth ad flannel, tempor locavore adipisicing distillery forage venmo sed chillwave chia
                                                            whatever bitters. Helvetica listicle hella deep v ugh. Kickstarter pop-up plaid, selfies street art health goth tempor celiac occupy knausgaard.
                                                        </p>
                                                        <p>
                                                            Celiac tilde commodo four dollar toast. Scenester kale chips roof party PBR&amp;B, organic everyday carry cornhole tumblr kickstarter marfa salvia photo booth voluptate gastropub ennui. Austin craft beer next level whatever beard. Leggings tote bag taxidermy
                                                            occupy, heirloom deep v exercitation ea normcore irure banh mi hella fashion axe et. Mumblecore intelligentsia mustache, id photo booth tofu est. In kale chips voluptate literally, gastropub YOLO consequat fugiat swag gochujang sint est
                                                            ugh 90's. Sriracha bitters meh fanny pack try-hard readymade, stumptown street art blue bottle.
                                                        </p>
                                                        <p>
                                                            Paleo flexitarian bushwick letterpress, ea migas yr adipisicing. Man bun tacos tumblr kombucha, yuccie banjo affogato dolore gentrify retro chartreuse. Anim austin tempor ethical, sapiente food truck fanny pack farm-to-table. Culpa keytar esse tilde hoodie,
                                                            art party nostrud messenger bag authentic helvetica kinfolk cred eu affogato forage. Biodiesel vero proident scenester, normcore mustache umami sint. Echo park adipisicing portland, ethical et hammock exercitation etsy labore health goth
                                                            enim velit green juice jean shorts esse. Lo-fi pinterest accusamus cardigan lumbersexual tempor in pitchfork, four loko narwhal.
                                                        </p>
                                                    </div>
                                                </div>
                                            </section>
                                            <section role="tabpanel" class="tab-pane" id="sidenav3">
                                                <div class="card">
                                                    <header class="card-heading">
                                                        <h2 class="card-title">Card Title 3</h2>
                                                    </header>
                                                    <div class="card-body">
                                                        <img src="assets/img/headers/header-md-03.jpg" class="m-b-30" alt="">
                                                        <p>Deep v ex celiac twee. Reprehenderit affogato chia, roof party heirloom literally esse sartorial godard ennui. Enim lo-fi everyday carry, normcore anim ugh PBR&amp;B sartorial sunt fashion axe delectus. Assumenda vegan celiac taxidermy
                                                            incididunt. Flannel shabby chic before they sold out tilde, helvetica echo park pop-up gluten-free consequat 3 wolf moon sriracha knausgaard. Celiac culpa bicycle rights, bespoke street art wolf fanny pack et irony cillum in. Thundercats
                                                            vinyl green juice celiac whatever excepteur proident locavore elit, dolor ea viral twee four loko disrupt.
                                                        </p>
                                                        <p>
                                                            Fashion axe kitsch marfa, art party gluten-free beard meditation lumbersexual pinterest sapiente. Aute portland nostrud four dollar toast, organic typewriter cold-pressed wolf do chartreuse godard. Before they sold out consequat voluptate man bun, craft
                                                            beer ullamco mlkshk quis health goth cold-pressed yuccie pork belly. Biodiesel tilde ethical, delectus fap marfa four dollar toast thundercats. Photo booth ad flannel, tempor locavore adipisicing distillery forage venmo sed chillwave chia
                                                            whatever bitters. Helvetica listicle hella deep v ugh. Kickstarter pop-up plaid, selfies street art health goth tempor celiac occupy knausgaard.
                                                        </p>
                                                        <p>
                                                            Celiac tilde commodo four dollar toast. Scenester kale chips roof party PBR&amp;B, organic everyday carry cornhole tumblr kickstarter marfa salvia photo booth voluptate gastropub ennui. Austin craft beer next level whatever beard. Leggings tote bag taxidermy
                                                            occupy, heirloom deep v exercitation ea normcore irure banh mi hella fashion axe et. Mumblecore intelligentsia mustache, id photo booth tofu est. In kale chips voluptate literally, gastropub YOLO consequat fugiat swag gochujang sint est
                                                            ugh 90's. Sriracha bitters meh fanny pack try-hard readymade, stumptown street art blue bottle.
                                                        </p>
                                                        <p>
                                                            Paleo flexitarian bushwick letterpress, ea migas yr adipisicing. Man bun tacos tumblr kombucha, yuccie banjo affogato dolore gentrify retro chartreuse. Anim austin tempor ethical, sapiente food truck fanny pack farm-to-table. Culpa keytar esse tilde hoodie,
                                                            art party nostrud messenger bag authentic helvetica kinfolk cred eu affogato forage. Biodiesel vero proident scenester, normcore mustache umami sint. Echo park adipisicing portland, ethical et hammock exercitation etsy labore health goth
                                                            enim velit green juice jean shorts esse. Lo-fi pinterest accusamus cardigan lumbersexual tempor in pitchfork, four loko narwhal.
                                                        </p>
                                                    </div>
                                                </div>
                                            </section>
                                            <section role="tabpanel" class="tab-pane" id="sidenav4">
                                                <div class="card">
                                                    <header class="card-heading">
                                                        <h2 class="card-title">Card Title 4</h2>
                                                    </header>
                                                    <div class="card-body">
                                                        <img src="assets/img/headers/header-md-04.jpg" class="m-b-30" alt="">
                                                        <p>Deep v ex celiac twee. Reprehenderit affogato chia, roof party heirloom literally esse sartorial godard ennui. Enim lo-fi everyday carry, normcore anim ugh PBR&amp;B sartorial sunt fashion axe delectus. Assumenda vegan celiac taxidermy
                                                            incididunt. Flannel shabby chic before they sold out tilde, helvetica echo park pop-up gluten-free consequat 3 wolf moon sriracha knausgaard. Celiac culpa bicycle rights, bespoke street art wolf fanny pack et irony cillum in. Thundercats
                                                            vinyl green juice celiac whatever excepteur proident locavore elit, dolor ea viral twee four loko disrupt.
                                                        </p>
                                                        <p>
                                                            Fashion axe kitsch marfa, art party gluten-free beard meditation lumbersexual pinterest sapiente. Aute portland nostrud four dollar toast, organic typewriter cold-pressed wolf do chartreuse godard. Before they sold out consequat voluptate man bun, craft
                                                            beer ullamco mlkshk quis health goth cold-pressed yuccie pork belly. Biodiesel tilde ethical, delectus fap marfa four dollar toast thundercats. Photo booth ad flannel, tempor locavore adipisicing distillery forage venmo sed chillwave chia
                                                            whatever bitters. Helvetica listicle hella deep v ugh. Kickstarter pop-up plaid, selfies street art health goth tempor celiac occupy knausgaard.
                                                        </p>
                                                        <p>
                                                            Celiac tilde commodo four dollar toast. Scenester kale chips roof party PBR&amp;B, organic everyday carry cornhole tumblr kickstarter marfa salvia photo booth voluptate gastropub ennui. Austin craft beer next level whatever beard. Leggings tote bag taxidermy
                                                            occupy, heirloom deep v exercitation ea normcore irure banh mi hella fashion axe et. Mumblecore intelligentsia mustache, id photo booth tofu est. In kale chips voluptate literally, gastropub YOLO consequat fugiat swag gochujang sint est
                                                            ugh 90's. Sriracha bitters meh fanny pack try-hard readymade, stumptown street art blue bottle.
                                                        </p>
                                                        <p>
                                                            Paleo flexitarian bushwick letterpress, ea migas yr adipisicing. Man bun tacos tumblr kombucha, yuccie banjo affogato dolore gentrify retro chartreuse. Anim austin tempor ethical, sapiente food truck fanny pack farm-to-table. Culpa keytar esse tilde hoodie,
                                                            art party nostrud messenger bag authentic helvetica kinfolk cred eu affogato forage. Biodiesel vero proident scenester, normcore mustache umami sint. Echo park adipisicing portland, ethical et hammock exercitation etsy labore health goth
                                                            enim velit green juice jean shorts esse. Lo-fi pinterest accusamus cardigan lumbersexual tempor in pitchfork, four loko narwhal.
                                                        </p>
                                                    </div>
                                                </div>
                                            </section>
                                            <section role="tabpanel" class="tab-pane" id="sidenav5">
                                                <div class="card">
                                                    <header class="card-heading">
                                                        <h2 class="card-title">Card Title 5</h2>
                                                    </header>
                                                    <div class="card-body">
                                                        <img src="assets/img/headers/header-md-05.jpg" class="m-b-30" alt="">
                                                        <p>Deep v ex celiac twee. Reprehenderit affogato chia, roof party heirloom literally esse sartorial godard ennui. Enim lo-fi everyday carry, normcore anim ugh PBR&amp;B sartorial sunt fashion axe delectus. Assumenda vegan celiac taxidermy
                                                            incididunt. Flannel shabby chic before they sold out tilde, helvetica echo park pop-up gluten-free consequat 3 wolf moon sriracha knausgaard. Celiac culpa bicycle rights, bespoke street art wolf fanny pack et irony cillum in. Thundercats
                                                            vinyl green juice celiac whatever excepteur proident locavore elit, dolor ea viral twee four loko disrupt.
                                                        </p>
                                                        <p>
                                                            Fashion axe kitsch marfa, art party gluten-free beard meditation lumbersexual pinterest sapiente. Aute portland nostrud four dollar toast, organic typewriter cold-pressed wolf do chartreuse godard. Before they sold out consequat voluptate man bun, craft
                                                            beer ullamco mlkshk quis health goth cold-pressed yuccie pork belly. Biodiesel tilde ethical, delectus fap marfa four dollar toast thundercats. Photo booth ad flannel, tempor locavore adipisicing distillery forage venmo sed chillwave chia
                                                            whatever bitters. Helvetica listicle hella deep v ugh. Kickstarter pop-up plaid, selfies street art health goth tempor celiac occupy knausgaard.
                                                        </p>
                                                        <p>
                                                            Celiac tilde commodo four dollar toast. Scenester kale chips roof party PBR&amp;B, organic everyday carry cornhole tumblr kickstarter marfa salvia photo booth voluptate gastropub ennui. Austin craft beer next level whatever beard. Leggings tote bag taxidermy
                                                            occupy, heirloom deep v exercitation ea normcore irure banh mi hella fashion axe et. Mumblecore intelligentsia mustache, id photo booth tofu est. In kale chips voluptate literally, gastropub YOLO consequat fugiat swag gochujang sint est
                                                            ugh 90's. Sriracha bitters meh fanny pack try-hard readymade, stumptown street art blue bottle.
                                                        </p>
                                                        <p>
                                                            Paleo flexitarian bushwick letterpress, ea migas yr adipisicing. Man bun tacos tumblr kombucha, yuccie banjo affogato dolore gentrify retro chartreuse. Anim austin tempor ethical, sapiente food truck fanny pack farm-to-table. Culpa keytar esse tilde hoodie,
                                                            art party nostrud messenger bag authentic helvetica kinfolk cred eu affogato forage. Biodiesel vero proident scenester, normcore mustache umami sint. Echo park adipisicing portland, ethical et hammock exercitation etsy labore health goth
                                                            enim velit green juice jean shorts esse. Lo-fi pinterest accusamus cardigan lumbersexual tempor in pitchfork, four loko narwhal.
                                                        </p>
                                                    </div>
                                                </div>
                                            </section>
                                            <section role="tabpanel" class="tab-pane" id="sidenav6">
                                                <div class="card">
                                                    <header class="card-heading">
                                                        <h2 class="card-title">Card Title 6</h2>
                                                    </header>
                                                    <div class="card-body">
                                                        <img src="assets/img/headers/header-md-06.jpg" class="m-b-30" alt="">
                                                        <p>Deep v ex celiac twee. Reprehenderit affogato chia, roof party heirloom literally esse sartorial godard ennui. Enim lo-fi everyday carry, normcore anim ugh PBR&amp;B sartorial sunt fashion axe delectus. Assumenda vegan celiac taxidermy
                                                            incididunt. Flannel shabby chic before they sold out tilde, helvetica echo park pop-up gluten-free consequat 3 wolf moon sriracha knausgaard. Celiac culpa bicycle rights, bespoke street art wolf fanny pack et irony cillum in. Thundercats
                                                            vinyl green juice celiac whatever excepteur proident locavore elit, dolor ea viral twee four loko disrupt.
                                                        </p>
                                                        <p>
                                                            Fashion axe kitsch marfa, art party gluten-free beard meditation lumbersexual pinterest sapiente. Aute portland nostrud four dollar toast, organic typewriter cold-pressed wolf do chartreuse godard. Before they sold out consequat voluptate man bun, craft
                                                            beer ullamco mlkshk quis health goth cold-pressed yuccie pork belly. Biodiesel tilde ethical, delectus fap marfa four dollar toast thundercats. Photo booth ad flannel, tempor locavore adipisicing distillery forage venmo sed chillwave chia
                                                            whatever bitters. Helvetica listicle hella deep v ugh. Kickstarter pop-up plaid, selfies street art health goth tempor celiac occupy knausgaard.
                                                        </p>
                                                        <p>
                                                            Celiac tilde commodo four dollar toast. Scenester kale chips roof party PBR&amp;B, organic everyday carry cornhole tumblr kickstarter marfa salvia photo booth voluptate gastropub ennui. Austin craft beer next level whatever beard. Leggings tote bag taxidermy
                                                            occupy, heirloom deep v exercitation ea normcore irure banh mi hella fashion axe et. Mumblecore intelligentsia mustache, id photo booth tofu est. In kale chips voluptate literally, gastropub YOLO consequat fugiat swag gochujang sint est
                                                            ugh 90's. Sriracha bitters meh fanny pack try-hard readymade, stumptown street art blue bottle.
                                                        </p>
                                                        <p>
                                                            Paleo flexitarian bushwick letterpress, ea migas yr adipisicing. Man bun tacos tumblr kombucha, yuccie banjo affogato dolore gentrify retro chartreuse. Anim austin tempor ethical, sapiente food truck fanny pack farm-to-table. Culpa keytar esse tilde hoodie,
                                                            art party nostrud messenger bag authentic helvetica kinfolk cred eu affogato forage. Biodiesel vero proident scenester, normcore mustache umami sint. Echo park adipisicing portland, ethical et hammock exercitation etsy labore health goth
                                                            enim velit green juice jean shorts esse. Lo-fi pinterest accusamus cardigan lumbersexual tempor in pitchfork, four loko narwhal.
                                                        </p>
                                                    </div>
                                                </div>
                                            </section>
                                            <section role="tabpanel" class="tab-pane" id="sidenav7">
                                                <div class="card">
                                                    <header class="card-heading">
                                                        <h2 class="card-title">Card Title 7</h2>
                                                    </header>
                                                    <div class="card-body">
                                                        <img src="assets/img/headers/header-md-07.jpg" class="m-b-30" alt="">
                                                        <p>Deep v ex celiac twee. Reprehenderit affogato chia, roof party heirloom literally esse sartorial godard ennui. Enim lo-fi everyday carry, normcore anim ugh PBR&amp;B sartorial sunt fashion axe delectus. Assumenda vegan celiac taxidermy
                                                            incididunt. Flannel shabby chic before they sold out tilde, helvetica echo park pop-up gluten-free consequat 3 wolf moon sriracha knausgaard. Celiac culpa bicycle rights, bespoke street art wolf fanny pack et irony cillum in. Thundercats
                                                            vinyl green juice celiac whatever excepteur proident locavore elit, dolor ea viral twee four loko disrupt.
                                                        </p>
                                                        <p>
                                                            Fashion axe kitsch marfa, art party gluten-free beard meditation lumbersexual pinterest sapiente. Aute portland nostrud four dollar toast, organic typewriter cold-pressed wolf do chartreuse godard. Before they sold out consequat voluptate man bun, craft
                                                            beer ullamco mlkshk quis health goth cold-pressed yuccie pork belly. Biodiesel tilde ethical, delectus fap marfa four dollar toast thundercats. Photo booth ad flannel, tempor locavore adipisicing distillery forage venmo sed chillwave chia
                                                            whatever bitters. Helvetica listicle hella deep v ugh. Kickstarter pop-up plaid, selfies street art health goth tempor celiac occupy knausgaard.
                                                        </p>
                                                        <p>
                                                            Celiac tilde commodo four dollar toast. Scenester kale chips roof party PBR&amp;B, organic everyday carry cornhole tumblr kickstarter marfa salvia photo booth voluptate gastropub ennui. Austin craft beer next level whatever beard. Leggings tote bag taxidermy
                                                            occupy, heirloom deep v exercitation ea normcore irure banh mi hella fashion axe et. Mumblecore intelligentsia mustache, id photo booth tofu est. In kale chips voluptate literally, gastropub YOLO consequat fugiat swag gochujang sint est
                                                            ugh 90's. Sriracha bitters meh fanny pack try-hard readymade, stumptown street art blue bottle.
                                                        </p>
                                                        <p>
                                                            Paleo flexitarian bushwick letterpress, ea migas yr adipisicing. Man bun tacos tumblr kombucha, yuccie banjo affogato dolore gentrify retro chartreuse. Anim austin tempor ethical, sapiente food truck fanny pack farm-to-table. Culpa keytar esse tilde hoodie,
                                                            art party nostrud messenger bag authentic helvetica kinfolk cred eu affogato forage. Biodiesel vero proident scenester, normcore mustache umami sint. Echo park adipisicing portland, ethical et hammock exercitation etsy labore health goth
                                                            enim velit green juice jean shorts esse. Lo-fi pinterest accusamus cardigan lumbersexual tempor in pitchfork, four loko narwhal.
                                                        </p>
                                                    </div>
                                                </div>
                                            </section>
                                            <section role="tabpanel" class="tab-pane" id="sidenav8">
                                                <div class="card">
                                                    <header class="card-heading">
                                                        <h2 class="card-title">Card Title 8</h2>
                                                    </header>
                                                    <div class="card-body">
                                                        <img src="assets/img/headers/header-md-08.jpg" class="m-b-30" alt="">
                                                        <p>Deep v ex celiac twee. Reprehenderit affogato chia, roof party heirloom literally esse sartorial godard ennui. Enim lo-fi everyday carry, normcore anim ugh PBR&amp;B sartorial sunt fashion axe delectus. Assumenda vegan celiac taxidermy
                                                            incididunt. Flannel shabby chic before they sold out tilde, helvetica echo park pop-up gluten-free consequat 3 wolf moon sriracha knausgaard. Celiac culpa bicycle rights, bespoke street art wolf fanny pack et irony cillum in. Thundercats
                                                            vinyl green juice celiac whatever excepteur proident locavore elit, dolor ea viral twee four loko disrupt.
                                                        </p>
                                                        <p>
                                                            Fashion axe kitsch marfa, art party gluten-free beard meditation lumbersexual pinterest sapiente. Aute portland nostrud four dollar toast, organic typewriter cold-pressed wolf do chartreuse godard. Before they sold out consequat voluptate man bun, craft
                                                            beer ullamco mlkshk quis health goth cold-pressed yuccie pork belly. Biodiesel tilde ethical, delectus fap marfa four dollar toast thundercats. Photo booth ad flannel, tempor locavore adipisicing distillery forage venmo sed chillwave chia
                                                            whatever bitters. Helvetica listicle hella deep v ugh. Kickstarter pop-up plaid, selfies street art health goth tempor celiac occupy knausgaard.
                                                        </p>
                                                        <p>
                                                            Celiac tilde commodo four dollar toast. Scenester kale chips roof party PBR&amp;B, organic everyday carry cornhole tumblr kickstarter marfa salvia photo booth voluptate gastropub ennui. Austin craft beer next level whatever beard. Leggings tote bag taxidermy
                                                            occupy, heirloom deep v exercitation ea normcore irure banh mi hella fashion axe et. Mumblecore intelligentsia mustache, id photo booth tofu est. In kale chips voluptate literally, gastropub YOLO consequat fugiat swag gochujang sint est
                                                            ugh 90's. Sriracha bitters meh fanny pack try-hard readymade, stumptown street art blue bottle.
                                                        </p>
                                                        <p>
                                                            Paleo flexitarian bushwick letterpress, ea migas yr adipisicing. Man bun tacos tumblr kombucha, yuccie banjo affogato dolore gentrify retro chartreuse. Anim austin tempor ethical, sapiente food truck fanny pack farm-to-table. Culpa keytar esse tilde hoodie,
                                                            art party nostrud messenger bag authentic helvetica kinfolk cred eu affogato forage. Biodiesel vero proident scenester, normcore mustache umami sint. Echo park adipisicing portland, ethical et hammock exercitation etsy labore health goth
                                                            enim velit green juice jean shorts esse. Lo-fi pinterest accusamus cardigan lumbersexual tempor in pitchfork, four loko narwhal.
                                                        </p>
                                                    </div>
                                                </div>
                                            </section>
                                            <section role="tabpanel" class="tab-pane" id="sidenav9">
                                                <div class="card">
                                                    <header class="card-heading">
                                                        <h2 class="card-title">Card Title 9</h2>
                                                    </header>
                                                    <div class="card-body">
                                                        <img src="assets/img/headers/header-md-09.jpg" class="m-b-30" alt="">
                                                        <p>Deep v ex celiac twee. Reprehenderit affogato chia, roof party heirloom literally esse sartorial godard ennui. Enim lo-fi everyday carry, normcore anim ugh PBR&amp;B sartorial sunt fashion axe delectus. Assumenda vegan celiac taxidermy
                                                            incididunt. Flannel shabby chic before they sold out tilde, helvetica echo park pop-up gluten-free consequat 3 wolf moon sriracha knausgaard. Celiac culpa bicycle rights, bespoke street art wolf fanny pack et irony cillum in. Thundercats
                                                            vinyl green juice celiac whatever excepteur proident locavore elit, dolor ea viral twee four loko disrupt.
                                                        </p>
                                                        <p>
                                                            Fashion axe kitsch marfa, art party gluten-free beard meditation lumbersexual pinterest sapiente. Aute portland nostrud four dollar toast, organic typewriter cold-pressed wolf do chartreuse godard. Before they sold out consequat voluptate man bun, craft
                                                            beer ullamco mlkshk quis health goth cold-pressed yuccie pork belly. Biodiesel tilde ethical, delectus fap marfa four dollar toast thundercats. Photo booth ad flannel, tempor locavore adipisicing distillery forage venmo sed chillwave chia
                                                            whatever bitters. Helvetica listicle hella deep v ugh. Kickstarter pop-up plaid, selfies street art health goth tempor celiac occupy knausgaard.
                                                        </p>
                                                        <p>
                                                            Celiac tilde commodo four dollar toast. Scenester kale chips roof party PBR&amp;B, organic everyday carry cornhole tumblr kickstarter marfa salvia photo booth voluptate gastropub ennui. Austin craft beer next level whatever beard. Leggings tote bag taxidermy
                                                            occupy, heirloom deep v exercitation ea normcore irure banh mi hella fashion axe et. Mumblecore intelligentsia mustache, id photo booth tofu est. In kale chips voluptate literally, gastropub YOLO consequat fugiat swag gochujang sint est
                                                            ugh 90's. Sriracha bitters meh fanny pack try-hard readymade, stumptown street art blue bottle.
                                                        </p>
                                                        <p>
                                                            Paleo flexitarian bushwick letterpress, ea migas yr adipisicing. Man bun tacos tumblr kombucha, yuccie banjo affogato dolore gentrify retro chartreuse. Anim austin tempor ethical, sapiente food truck fanny pack farm-to-table. Culpa keytar esse tilde hoodie,
                                                            art party nostrud messenger bag authentic helvetica kinfolk cred eu affogato forage. Biodiesel vero proident scenester, normcore mustache umami sint. Echo park adipisicing portland, ethical et hammock exercitation etsy labore health goth
                                                            enim velit green juice jean shorts esse. Lo-fi pinterest accusamus cardigan lumbersexual tempor in pitchfork, four loko narwhal.
                                                        </p>
                                                    </div>
                                                </div>
                                            </section>
                                            <section role="tabpanel" class="tab-pane" id="sidenav10">
                                                <div class="card">
                                                    <header class="card-heading">
                                                        <h2 class="card-title">Card Title 10</h2>
                                                    </header>
                                                    <div class="card-body">
                                                        <img src="assets/img/headers/header-md-10.jpg" class="m-b-30" alt="">
                                                        <p>Deep v ex celiac twee. Reprehenderit affogato chia, roof party heirloom literally esse sartorial godard ennui. Enim lo-fi everyday carry, normcore anim ugh PBR&amp;B sartorial sunt fashion axe delectus. Assumenda vegan celiac taxidermy
                                                            incididunt. Flannel shabby chic before they sold out tilde, helvetica echo park pop-up gluten-free consequat 3 wolf moon sriracha knausgaard. Celiac culpa bicycle rights, bespoke street art wolf fanny pack et irony cillum in. Thundercats
                                                            vinyl green juice celiac whatever excepteur proident locavore elit, dolor ea viral twee four loko disrupt.
                                                        </p>
                                                        <p>
                                                            Fashion axe kitsch marfa, art party gluten-free beard meditation lumbersexual pinterest sapiente. Aute portland nostrud four dollar toast, organic typewriter cold-pressed wolf do chartreuse godard. Before they sold out consequat voluptate man bun, craft
                                                            beer ullamco mlkshk quis health goth cold-pressed yuccie pork belly. Biodiesel tilde ethical, delectus fap marfa four dollar toast thundercats. Photo booth ad flannel, tempor locavore adipisicing distillery forage venmo sed chillwave chia
                                                            whatever bitters. Helvetica listicle hella deep v ugh. Kickstarter pop-up plaid, selfies street art health goth tempor celiac occupy knausgaard.
                                                        </p>
                                                        <p>
                                                            Celiac tilde commodo four dollar toast. Scenester kale chips roof party PBR&amp;B, organic everyday carry cornhole tumblr kickstarter marfa salvia photo booth voluptate gastropub ennui. Austin craft beer next level whatever beard. Leggings tote bag taxidermy
                                                            occupy, heirloom deep v exercitation ea normcore irure banh mi hella fashion axe et. Mumblecore intelligentsia mustache, id photo booth tofu est. In kale chips voluptate literally, gastropub YOLO consequat fugiat swag gochujang sint est
                                                            ugh 90's. Sriracha bitters meh fanny pack try-hard readymade, stumptown street art blue bottle.
                                                        </p>
                                                        <p>
                                                            Paleo flexitarian bushwick letterpress, ea migas yr adipisicing. Man bun tacos tumblr kombucha, yuccie banjo affogato dolore gentrify retro chartreuse. Anim austin tempor ethical, sapiente food truck fanny pack farm-to-table. Culpa keytar esse tilde hoodie,
                                                            art party nostrud messenger bag authentic helvetica kinfolk cred eu affogato forage. Biodiesel vero proident scenester, normcore mustache umami sint. Echo park adipisicing portland, ethical et hammock exercitation etsy labore health goth
                                                            enim velit green juice jean shorts esse. Lo-fi pinterest accusamus cardigan lumbersexual tempor in pitchfork, four loko narwhal.
                                                        </p>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <section id="chat_compose_wrapper">
                    <div class="tippy-top">
                        <div class="recipient">Allison Grayce</div>
                        <ul class="card-actions icons  right-top">
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="zmdi zmdi-videocam"></i>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>
                                <ul class="dropdown-menu btn-primary dropdown-menu-right">
                                    <li>
                                        <a href="javascript:void(0)">Option One</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Option Two</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Option Three</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-chat="close">
                                    <i class="zmdi zmdi-close"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="chat-wrapper scrollbar mCustomScrollbar _mCS_3 mCS-autoHide mCS_no_scrollbar" style="position: relative; overflow: visible;"><div id="mCSB_3" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside" style="max-height: none;" tabindex="0"><div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                                <div class="chat-message scrollbar mCustomScrollbar _mCS_4 mCS-autoHide mCS_no_scrollbar" style="position: relative; overflow: visible;"><div id="mCSB_4" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside" style="max-height: none;" tabindex="0"><div id="mCSB_4_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                                            <div class="chat-message chat-message-recipient">
                                                <img class="chat-image chat-image-default mCS_img_loaded" src="assets/img/profiles/05.jpg">
                                                <div class="chat-message-wrapper">
                                                    <div class="chat-message-content">
                                                        <p>Hey Mike, we have funding for our new project!</p>
                                                    </div>
                                                    <div class="chat-details">
                                                        <span class="today small">09/12/2017</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-message chat-message-sender">
                                                <img class="chat-image chat-image-default mCS_img_loaded" src="assets/img/profiles/02.jpg">
                                                <div class="chat-message-wrapper ">
                                                    <div class="chat-message-content">
                                                        <p>Awesome! Photo booth banh mi pitchfork kickstarter whatever, prism godard ethical 90's cray selvage.</p>
                                                    </div>
                                                    <div class="chat-details">
                                                        <span class="today small">09/12/2017</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-message chat-message-recipient">
                                                <img class="chat-image chat-image-default mCS_img_loaded" src="assets/img/profiles/05.jpg">
                                                <div class="chat-message-wrapper">
                                                    <div class="chat-message-content">
                                                        <p> Artisan glossier vaporware meditation paleo humblebrag forage small batch.</p>
                                                    </div>
                                                    <div class="chat-details">
                                                        <span class="today small">09/12/2017</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-message chat-message-sender">
                                                <img class="chat-image chat-image-default mCS_img_loaded" src="assets/img/profiles/02.jpg">
                                                <div class="chat-message-wrapper">
                                                    <div class="chat-message-content">
                                                        <p>Bushwick letterpress vegan craft beer dreamcatcher kickstarter.</p>
                                                    </div>
                                                    <div class="chat-details">
                                                        <span class="today small">09/12/2017</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></div><div id="mCSB_4_scrollbar_vertical" class="mCSB_scrollTools mCSB_4_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_4_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; height: 0px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 50px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div>
                            </div></div><div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; height: 0px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 50px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div>
                    <footer id="compose-footer">
                        <form class="form-horizontal compose-form">
                            <ul class="card-actions icons left-bottom">
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="zmdi zmdi-attachment-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="zmdi zmdi-mood"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="form-group m-10 p-l-75 is-empty">
                                <div class="input-group">
                                    <label class="sr-only">Leave a comment...</label>
                                    <input type="text" class="form-control form-rounded input-lightGray" placeholder="Leave a comment..">
                                    <span class="input-group-btn">
												<button type="button" class="btn btn-blue btn-fab  btn-fab-sm">
													<i class="zmdi zmdi-mail-send"></i>
												</button>
											</span>
                                </div>
                            </div>
                        </form>
                    </footer>
                </section>
            </div>
        </div>
        <footer id="footer_wrapper">
            <div class="footer-content">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h6>Want to Work with Us?</h6>
                        <p>Paleo flexitarian bushwick letterpress, ea migas yr adipisicing. Man bun tacos tumblr kombucha, yuccie banjo affogato dolore gentrify retro chartreuse. Anim austin tempor ethical, sapiente food truck fanny pack farm-to-table. Culpa keytar esse
                            tilde hoodie, art party nostrud messenger bag authentic helvetica kinfolk cred eu affogato forage.</p>
                    </div>
                    <div class="col-xs-12 col-sm-2">
                        <h6>Company</h6>
                        <ul>
                            <li><a href="javascript:void(0)">About Us </a></li>
                            <li><a href="javascript:void(0)">Careers</a></li>
                            <li><a href="javascript:void(0)">Privacy Policy</a></li>
                            <li><a href="javascript:void(0)">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <h6>Email Newsletters</h6>
                        <p>Sign up for new MaterialWrap content, updates, and offers.</p>
                        <div class="form-group is-empty">
                            <div class="input-group">
                                <label class="control-label sr-only" for="footerEmail">Email Address</label>
                                <input type="email" class="form-control" id="footerEmail" placeholder="Enter your email address...">
                                <span class="input-group-btn">
												<button type="button" class="btn btn-white btn-fab animate-fab btn-fab-sm">
													<i class="zmdi zmdi-mail-send"></i>
												</button>
											</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row copy-wrapper">
                    <div class="col-xs-8">
                        <p class="copy">© Copyright <time class="year">2017</time> MaterialWrap - All Rights Reserved</p>
                    </div>
                    <div class="col-xs-4">
                        <ul class="social">
                            <li>
                                <a href="javascript:void(0)"> </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"> </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"> </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </section>
@endsection