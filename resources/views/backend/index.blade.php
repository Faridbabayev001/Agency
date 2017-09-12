@extends('layouts.backend')

@section('content')
    <section id="content_outer_wrapper" class="">
        <div id="content_wrapper">
            <div id="header_wrapper" class="header-sm">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <header id="header">
                                <h1>Dashboards</h1>
                            </header>
                        </div>
                    </div>
                </div>
                <ul class="card-actions icons lg alt-actions right-top">
                    <li>
                        <a href="javascript:void(0)" class="drawer-trigger" data-drawer="toggle-right">
                            <i class="zmdi zmdi-menu"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tabpanel tab-header">
                <ul class="nav nav-tabs p-l-20">
                    <li class="active" role="presentation"><a href="#dashboard1" data-toggle="tab">Dashboard v1</a></li>
                    <li role="presentation"><a href="#dashboard2" data-toggle="tab">Dashboard v2</a></li>
                </ul>
            </div>
            <div id="content" class="container-fluid">
                <div class="content-body">
                    <div id="dashboard_content" class="tab-content">
                        <div class="tab-pane fade active in" id="dashboard1">
                        </div>
                        <div class="tab-pane fade" id="dashboard2">
                        </div>
                    </div>
                    <!-- ENDS $dashboard_content -->
                </div>
            </div>
            <!-- ENDS $content -->
        </div>
    </section>
@endsection