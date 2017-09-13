
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>MaterialWrap - jQuery full version</title>
    <meta name="_token" content="{!!csrf_token()!!}">
    <link rel="stylesheet" href="{{url('css/notifier.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/vendor.bundle.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/app.bundle.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/theme-a.css')}}">
</head>
<body>
<div id="app_wrapper">
    <header id="app_topnavbar-wrapper">
        <nav role="navigation" class="navbar topnavbar">
            <div class="nav-wrapper">
                <ul class="nav navbar-nav pull-left left-menu">
                    <li class="app_menu-open">
                        <a href="javascript:void(0)" data-toggle-state="app_sidebar-left-open" data-key="leftSideBar">
                            <i class="zmdi zmdi-menu"></i>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav left-menu hidden-xs">
                    <li>
                        <a href="{{route('dashboard')}}" class="nav-link">
                            <span>@lang('header.home')</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('add_data')}}" class="nav-link">
                            <span>Add Data</span>
                        </a>
                    </li>
                    <li class="dropdown dropdown-lg app_menu_launcher hidden-xs">
                        <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown" aria-expanded="false">
                            <span>Dropdown</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-lg-menu dropdown-menu-left btn-primary p-15 text-center">
                            <li>
                                <ul>
                                    <li><a href="app-mail.html"><i class="zmdi zmdi-email"></i><span>Mail</span></a></li>
                                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-accounts-list"></i><span>Contacts</span></a></li>
                                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-comment-text"></i><span>Chat</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li><a href="app-notes.html"><i class="mdi mdi-lightbulb"></i><span>Notes</span></a></li>
                                    <li><a href="app-taskboard.html"><i class="zmdi zmdi-view-column"></i><span>Taskboard</span></a></li>
                                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-calendar-note"></i><span>Calendar</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown avatar-menu">
                        <a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">
                <span class="meta">
                  <span class="avatar">
                  </span>
                  <span class="name">Mike Jones</span>
                  <span class="caret"></span>
                </span>
                        </a>
                        <ul class="dropdown-menu btn-primary dropdown-menu-right">
                            <li>
                                <a href="page-profile.html"><i class="zmdi zmdi-account"></i> Profile</a>
                            </li>
                            <li>
                                <a href="app-mail.html"><i class="zmdi zmdi-email"></i> Messages</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="zmdi zmdi-settings"></i> Account Settings</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="zmdi zmdi-sign-in"></i> Sign Out</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-navsearch-open>
                            <i class="zmdi zmdi-search"></i>
                        </a>
                    </li>
                    <li class="dropdown hidden-xs hidden-sm">
                        <ul class="dropdown-menu dropdown-lg-menu dropdown-menu-right dropdown-alt">
                            <li class="dropdown-menu-header">
                                <ul class="card-actions icons  left-top">
                                    <li class="withoutripple">
                                        <a href="javascript:void(0)" class="withoutripple">
                                            <i class="zmdi zmdi-settings"></i>
                                        </a>
                                    </li>
                                </ul>
                                <h5>NOTIFICATIONS</h5>
                                <ul class="card-actions icons right-top">
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="zmdi zmdi-check-all"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="card">
                                    <a href="javascript:void(0)" class="pull-right dismiss" data-dismiss="close">
                                        <i class="zmdi zmdi-close"></i>
                                    </a>
                                    <div class="card-body">
                                        <ul class="list-group ">
                                            <li class="list-group-item ">
                                                <span class="pull-left"><img src="assets/img/profiles/11.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
                                                <div class="list-group-item-body">
                                                    <div class="list-group-item-heading">Dakota Johnson</div>
                                                    <div class="list-group-item-text">Do you want to grab some sushi for lunch?</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card">
                                    <a href="javascript:void(0)" class="pull-right dismiss" data-dismiss="close">
                                        <i class="zmdi zmdi-close"></i>
                                    </a>
                                    <div class="card-body">
                                        <ul class="list-group ">
                                            <li class="list-group-item ">
                                                <span class="pull-left"><img src="assets/img/profiles/07.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
                                                <div class="list-group-item-body">
                                                    <div class="list-group-item-heading">Todd Cook</div>
                                                    <div class="list-group-item-text">Let's schedule a meeting with our design team at 10am.</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card">
                                    <a href="javascript:void(0)" class="pull-right dismiss" data-dismiss="close">
                                        <i class="zmdi zmdi-close"></i>
                                    </a>
                                    <div class="card-body">
                                        <ul class="list-group ">
                                            <li class="list-group-item ">
                                                <span class="pull-left"><img src="assets/img/profiles/05.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
                                                <div class="list-group-item-body">
                                                    <div class="list-group-item-heading">Jennifer Ross</div>
                                                    <div class="list-group-item-text">We're looking to hire two more protypers to our team.</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-menu-footer">
                                <a href="javascript:void(0)">
                                    All notifications
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <form role="search" action="" class="navbar-form" id="navbar_form">
                <div class="form-group">
                    <input type="text" placeholder="Search and press enter..." class="form-control" id="navbar_search" autocomplete="off">
                    <i data-navsearch-close class="zmdi zmdi-close close-search"></i>
                </div>
                <button type="submit" class="hidden btn btn-default">Submit</button>
            </form>
        </nav>
    </header>
    <aside id="app_sidebar-left">
        <div id="logo_wrapper">
            <ul>
                <li class="logo-icon">
                    <a href="index.html">
                        <div class="logo">
                            <img src="assets/img/logo/logo-icon.png" alt="Logo">
                        </div>
                        <h1 class="brand-text">MaterialWrap</h1>
                    </a>
                </li>
                <li class="menu-icon">
                    <a href="javascript:void(0)" role="button" data-toggle-state="app_sidebar-menu-collapsed" data-key="leftSideBar">
                        <i class="mdi mdi-backburger"></i>
                    </a>
                </li>
            </ul>
        </div>
        <nav id="app_main-menu-wrapper" class="scrollbar">
            <div class="sidebar-inner sidebar-push">
                <ul class="nav nav-pills nav-stacked">
                    <li class="sidebar-header">NAVIGATION</li>
                    <li class="active"><a href="index.html"><i class="zmdi zmdi-view-dashboard"></i>Dashboard</a></li>
                    <li class="nav-dropdown">
                        <a href="#"><span></span><i class="zmdi zmdi-view-quilt"></i>Blog</a>
                        <ul class="nav-sub" data-index="0" style="">
                            <li class="nav-dropdown">
                                <a href="#"><span></span>Post </a>
                                <ul class="nav-sub" data-index="1" style="display: none;">
                                    <li><a href="layout-fullwidth-v1.html">Posts</a></li>
                                    <li><a href="layout-fullwidth-v2.html">Add Post</a></li>
                                </ul>
                            </li>
                            <li class="nav-dropdown">
                                <a href="#"><span></span>Category</a>
                                <ul class="nav-sub" data-index="2" style="display: none;">
                                    <li><a href="layout-boxed-v1.html">Categoires</a></li>
                                    <li><a href="layout-boxed-v2.html">Add category</a></li>
                                    <li><a href="layout-boxed-v3.html">Boxed Layout v3</a></li>
                                </ul>
                            </li>
                            <li class="nav-dropdown">
                                <a href="#"><span></span>Left Side Nav</a>
                                <ul class="nav-sub" data-index="3" style="display: none;">
                                    <li><a href="layout-left-sidenav-v1.html">Left Side Nav v1</a></li>
                                    <li><a href="layout-left-sidenav-v2.html">Left Side Nav v2</a></li>

                                </ul>
                            </li>
                            <li class="nav-dropdown">
                                <a href="#"><span></span>Right Side Nav</a>
                                <ul class="nav-sub" data-index="4" style="display: none;">
                                    <li><a href="layout-right-sidenav-v1.html">Right Side Nav v1</a></li>
                                    <li><a href="layout-right-sidenav-v2.html">Right Side Nav v2</a></li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </aside>
    @yield('content')
</div>
<div class="modal fade" id="schedule_modal" tabindex="-1" role="dialog" aria-labelledby="schedule_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel-2">Title goes here</h4>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in ligula id sem tristique ultrices eget id neque. Duis enim turpis, tempus at accumsan vitae, lobortis id sapien. Pellentesque nec orci mi, in pharetra ligula. Nulla facilisi.
                    Nulla facilisi. Mauris convallis venenatis massa, quis consectetur felis ornare quis. Sed aliquet nunc ac ante molestie ultricies. Nam pulvinar ultricies bibendum.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success">Ok</button>
            </div>
        </div>
        <!-- modal-content -->
    </div>
    <!-- modal-dialog -->
</div>
<script src="{{url('assets/js/vendor.bundle.js')}}"></script>
<script src="{{url('assets/js/app.bundle.js')}}"></script>
<script src="{{url('js/notifier.js')}}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@yield('scripts')
</body>
</html>
