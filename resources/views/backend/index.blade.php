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
                    <li {{(Request::is('admin/post') || Request::is('admin/dashboard')) ? "class=active" : ''}} role="presentation"><a href="#posts" data-toggle="tab">Posts</a></li>
                    <li {{Request::is('admin/team') ? "class=active" : ''}}  role="presentation"><a href="#teams" data-toggle="tab">Teams</a></li>
                    <li {{Request::is('admin/work') ? "class=active" : ''}} role="presentation"><a href="#works" data-toggle="tab">Works</a></li>
                </ul>
            </div>
            <div id="content" class="container-fluid">
                <div class="content-body">
                    <div id="dashboard_content" class="tab-content">
                        <div class="tab-pane fade {{(Request::is('admin/post') || Request::is('admin/dashboard')) ? "active in" : ''}}" id="posts">
                            <div class="row">
                                <table class="table table-responsive">
                                    <thead>
                                        <tr>
                                            <th style="width: 120px;">Image</th>
                                            <th style="width: 200px;">Title En</th>
                                            <th style="width: 200px;">Title AZ</th>
                                            <th style="width: 200px;">Keywords</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-hover">
                                    @foreach(array_chunk($posts->getCollection()->all(),4) as $row)
                                        @foreach($row as $post)
                                            <tr>
                                                <td>
                                                    <img src="{{url('post/'.$post->image)}}" alt="" class="img-thumbnail img-responsive">
                                                </td>
                                                <td>{{$post->title_en}}</td>
                                                <td>{{$post->title_az}}</td>
                                                <td>{{$post->meta_keyword}}</td>
                                                <td>
                                                    <div class="togglebutton">
                                                        <label>
                                                            <input type="checkbox" data-post-id="{{$post->id}}" class="toggle-info" {{ ($post->status == 1) ? 'checked' : "" }}><span class="toggle"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{route('post.edit',['post' => $post->id])}}" class="btn btn-info btn-fab animate-fab btn-fab-sm" ><i class="zmdi zmdi-edit"></i></a>
                                                    <a href="javascript:void(0)" class="btn btn-success btn-fab animate-fab btn-fab-sm" data-toggle="modal" data-target="#{{$post->id}}"><i class="zmdi zmdi-eye"></i></a>
                                                    <a href="javascript:void(0)" class="btn btn-danger btn-fab animate-fab btn-fab-sm sweet-warning"><i class="zmdi zmdi-delete"></i><div class="ripple-container"></div></a>

                                                </td>
                                            </tr>
                                            {{--View Modal--}}
                                            <div class="modal fullscreen fade" id="{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="{{$post->id}}" style="display: none;">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">

                                                            <h4 class="modal-title" id="myModalLabel-2">{{$post->title_en}}</h4>
                                                            <ul class="card-actions icons right-top">

                                                                <a href="javascript:void(0)" data-dismiss="modal" class="text-white" aria-label="Close">
                                                                    <i class="zmdi zmdi-close"></i>
                                                                </a>

                                                            </ul>
                                                        </div>
                                                        <div class="modal-body scrollbar mCustomScrollbar _mCS_4 mCS-autoHide mCS_no_scrollbar" style="overflow: visible;"><div id="mCSB_4" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside" style="max-height: none;" tabindex="0"><div id="mCSB_4_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                                                                    <figure><img src="{{url('post/'.$post->image)}}" width="420px" alt="" class=" img-thumbnail pull-left m-r-10  mCS_img_loaded"></figure>
                                                                    {!! $post->text_en !!}
                                                                </div></div><div id="mCSB_4_scrollbar_vertical" class="mCSB_scrollTools mCSB_4_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_4_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; top: 0px; display: block; height: 8px; max-height: 121px;"><div class="mCSB_dragger_bar" style="line-height: 50px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Cancel<div class="ripple-container"><div class="ripple ripple-on ripple-out" style="left: 66.4688px; top: 16px; background-color: rgb(104, 134, 150); transform: scale(14.5);"></div></div></button>
                                                        </div>
                                                    </div>
                                                    <!-- modal-content -->
                                                </div>
                                                <!-- modal-dialog -->
                                            </div>
                                        @endforeach
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade {{Request::is('admin/team') ? "active in" : ''}}" id="teams">
                            <div class="row">
                                <table class="table table-responsive">
                                    <thead>
                                    <tr>
                                        <th style="width: 120px;">Image</th>
                                        <th style="width: 200px;">Title En</th>
                                        <th style="width: 200px;">Title AZ</th>
                                        <th style="width: 200px;">Position EN</th>
                                        <th style="width: 200px;">Position AZ</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody class="table-hover">
                                    @foreach(array_chunk($teams->getCollection()->all(),4) as $row)
                                        @foreach($row as $team)
                                            <tr>
                                                <td>
                                                    <img src="{{url('team/'.$team->avatar)}}" alt="" class="img-thumbnail img-responsive">
                                                </td>
                                                <td>{{$team->name_en}}</td>
                                                <td>{{$team->name_az}}</td>
                                                <td>{{$team->position_en}}</td>
                                                <td>{{$team->position_az}}</td>
                                                <td>
                                                    <a href="{{route('team.edit',['team' => $team->id])}}" class="btn btn-info btn-fab animate-fab btn-fab-sm" ><i class="zmdi zmdi-edit"></i></a>
                                                    <a href="javascript:void(0)" class="btn btn-danger btn-fab animate-fab btn-fab-sm sweet-warning"><i class="zmdi zmdi-delete"></i><div class="ripple-container"></div></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade {{Request::is('admin/work') ? "active in" : ''}}" id="works">
                            <div class="row">
                                <table class="table table-responsive">
                                    <thead>
                                    <tr>
                                        <th style="width: 120px;">Image</th>
                                        <th style="width: 200px;">Title En</th>
                                        <th style="width: 200px;">Title AZ</th>
                                        <th style="width: 200px;">Description EN</th>
                                        <th style="width: 200px;">Description AZ</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody class="table-hover">
                                    @foreach(array_chunk($works->getCollection()->all(),4) as $row)
                                        @foreach($row as $work)
                                            <tr>
                                                <td>
                                                    <img src="{{url('work/'.$work->image)}}" alt="" class="img-thumbnail img-responsive">
                                                </td>
                                                <td>{{$work->title_en}}</td>
                                                <td>{{$work->title_az}}</td>
                                                <td>{{$work->desc_en}}</td>
                                                <td>{{$work->desc_az}}</td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn btn-info btn-fab animate-fab btn-fab-sm" ><i class="zmdi zmdi-edit"></i></a>
                                                    <a href="javascript:void(0)" class="btn btn-danger btn-fab animate-fab btn-fab-sm sweet-warning"><i class="zmdi zmdi-delete"></i><div class="ripple-container"></div></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- ENDS $dashboard_content -->
                </div>
            </div>
            <!-- ENDS $content -->
        </div>
    </section>
@endsection
