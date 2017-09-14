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
                                                        <li role="presentation" {{Request::is('admin/post/create') ? "class=active" : ''}}><a href="#sidenav1" aria-controls="sidenav1" role="tab" data-toggle="tab">Add Post</a></li>
                                                        <li role="presentation" {{Request::is('admin/tag') ? "class=active" : ''}}><a href="#sidenav2" aria-controls="sidenav2" role="tab" data-toggle="tab">Add Tag</a></li>
                                                        <li role="presentation" {{Request::is('admin/category/create') ? "class=active" : ''}}><a href="#sidenav3" aria-controls="sidenav3" role="tab" data-toggle="tab">Add Category</a></li>
                                                        <li role="presentation" {{Request::is('admin/team/create') ? "class=active" : ''}}><a href="#sidenav4" aria-controls="sidenav4" role="tab" data-toggle="tab">Add Team</a></li>
                                                        <li role="presentation" {{Request::is('admin/social') ? "class=active" : ''}}><a href="#sidenav5" aria-controls="sidenav5" role="tab" data-toggle="tab">Add Social</a></li>
                                                        <li role="presentation" {{Request::is('admin/question') ? "class=active" : ''}}><a href="#sidenav6" aria-controls="sidenav6" role="tab" data-toggle="tab">Add Question</a></li>
                                                        <li role="presentation" {{Request::is('admin/work-tag') ? "class=active" : ''}}><a href="#sidenav7" aria-controls="sidenav7" role="tab" data-toggle="tab">Add Work Tag</a></li>
                                                        <li role="presentation" {{Request::is('admin/work/create') ? "class=active" : ''}}><a href="#sidenav8" aria-controls="sidenav8" role="tab" data-toggle="tab">Add Work</a></li>
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
                                            <section role="tabpanel" class="tab-pane {{Request::is('admin/post/create') ? "active" : ''}}" id="sidenav1">
                                                <div class="card">
                                                    <header class="card-heading">
                                                        <h2 class="card-title">Add Post</h2>
                                                    </header>
                                                    <div class="card-body">
                                                        <form id="form-horizontal" action="{{route('post.store')}}" method="post" class="form-horizontal" novalidate="novalidate" enctype="multipart/form-data">
                                                            {{csrf_field()}}
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
                                                                    <input id="keyword" type="text" name="meta_keyword" placeholder="Enter keywords for SEO" data-rule-required="true"  class="form-control" aria-required="true">
                                                                </div>
                                                            </div>
                                                            <div class="form-group is-empty">
                                                                <label for="CategoryInput" class="col-sm-2 control-label">Category</label>
                                                                <div class="col-sm-10">
                                                                    <select class="select form-control" name="category_id" id="CategoryInput">
                                                                       @foreach($categories as $category)
                                                                            <option value="{{$category->id}}">{{$category->name_en}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group is-empty">
                                                                <label for="CategoryInput" class="col-sm-2 control-label">Tag</label>
                                                                <div class="col-sm-10">
                                                                    <select class="select form-control" name="tags[]" id="CategoryInput" multiple>
                                                                        @foreach($tags as $tag)
                                                                            <option value="{{$tag->id}}">{{$tag->name_en}}</option>
                                                                        @endforeach
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
                                                            <div class="form-group is-empty">
                                                                <label for="textArea" class="col-md-2 control-label">Content En</label>
                                                                <div class="col-md-10">
                                                                    <textarea name="text_en" class="form-control" rows="3" id="textArea" placeholder="Enter content for English language"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group is-empty">
                                                                <label for="textArea" class="col-md-2 control-label">Content Az</label>
                                                                <div class="col-md-10">
                                                                    <textarea name="text_az" class="form-control" rows="3" id="textArea" placeholder="Enter content for Azerbaijan language"></textarea>
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
                                            <section role="tabpanel" class="tab-pane {{Request::is('admin/tag') ? "active" : ''}}" id="sidenav2">
                                                <div class="card">
                                                    <header class="card-heading">
                                                        <h2 class="card-title">Add Tag</h2>
                                                    </header>
                                                    <div class="card-body">
                                                        <form id="form-horizontal" action="{{route('tag.store')}}" method="post" class="form-horizontal" novalidate="novalidate" enctype="multipart/form-data">
                                                            {{csrf_field()}}
                                                            <div class="form-group is-empty">
                                                                <label for="nameInput" class="col-sm-2 control-label">Name EN</label>
                                                                <div class="col-sm-10">
                                                                    <input id="nameInput" type="text" name="name_en" placeholder="Enter tag name for English language" data-rule-required="true" minlength="2" class="form-control" aria-required="true">
                                                                </div>
                                                            </div>
                                                            <div class="form-group is-empty">
                                                                <label for="nameInput" class="col-sm-2 control-label">Name AZ</label>
                                                                <div class="col-sm-10">
                                                                    <input id="nameInput" type="text" name="name_az" placeholder="Enter tag name for Azerbaijan language" data-rule-required="true" minlength="2" class="form-control" aria-required="true">
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
                                            <section role="tabpanel" class="tab-pane {{Request::is('admin/category/create') ? "active" : ''}}" id="sidenav3">
                                                <div class="card">
                                                    <header class="card-heading">
                                                        <h2 class="card-title">Add Category</h2>
                                                    </header>
                                                    <div class="card-body">
                                                        <form id="form-horizontal" action="{{route('category.store')}}" method="post" class="form-horizontal" novalidate="novalidate">
                                                            {{csrf_field()}}
                                                            <div class="form-group is-empty">
                                                                <label for="nameInput" class="col-sm-2 control-label">Name EN</label>
                                                                <div class="col-sm-10">
                                                                    <input id="nameInput" type="text" name="name_en" placeholder="Enter category name for English language" data-rule-required="true" minlength="2" class="form-control" aria-required="true">
                                                                </div>
                                                            </div>
                                                            <div class="form-group is-empty">
                                                                <label for="nameInput" class="col-sm-2 control-label">Name AZ</label>
                                                                <div class="col-sm-10">
                                                                    <input id="nameInput" type="text" name="name_az" placeholder="Enter category name for Azerbaijan language" data-rule-required="true" minlength="2" class="form-control" aria-required="true">
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
                                            <section role="tabpanel" class="tab-pane {{Request::is('admin/team/create') ? "active" : ''}}" id="sidenav4">
                                                <div class="card">
                                                    <header class="card-heading">
                                                        <h2 class="card-title">Add Team</h2>
                                                    </header>
                                                    <div class="card-body">
                                                        <form id="form-horizontal" action="{{route('team.store')}}" method="post" class="form-horizontal" novalidate="novalidate" enctype="multipart/form-data">
                                                            {{csrf_field()}}
                                                            <div class="form-group is-empty">
                                                                <label for="nameInput" class="col-sm-2 control-label">Name EN</label>
                                                                <div class="col-sm-10">
                                                                    <input id="nameInput" type="text" name="name_en" placeholder="Enter category name for English language" data-rule-required="true" minlength="2" class="form-control" aria-required="true">
                                                                </div>
                                                            </div>
                                                            <div class="form-group is-empty">
                                                                <label for="nameInput" class="col-sm-2 control-label">Name AZ</label>
                                                                <div class="col-sm-10">
                                                                    <input id="nameInput" type="text" name="name_az" placeholder="Enter category name for Azerbaijan language" data-rule-required="true" minlength="2" class="form-control" aria-required="true">
                                                                </div>
                                                            </div>
                                                            <div class="form-group is-empty">
                                                                <label for="nameInput" class="col-sm-2 control-label">Position EN</label>
                                                                <div class="col-sm-10">
                                                                    <input id="nameInput" type="text" name="position_en" placeholder="Enter position name for English language" data-rule-required="true" minlength="2" class="form-control" aria-required="true">
                                                                </div>
                                                            </div>
                                                            <div class="form-group is-empty">
                                                                <label for="nameInput" class="col-sm-2 control-label">Position AZ</label>
                                                                <div class="col-sm-10">
                                                                    <input id="nameInput" type="text" name="position_az" placeholder="Enter position name for Azerbaijan language" data-rule-required="true" minlength="2" class="form-control" aria-required="true">
                                                                </div>
                                                            </div>
                                                            <div class="form-group is-fileinput is-empty">
                                                                <label for="fileInput" class="col-sm-2 control-label">Image</label>
                                                                <div class="col-sm-10">
                                                                    <div class="input-group">
                                                                        <input id="fileInput" type="file" name="avatar" data-buttontext="Choose file" data-buttonname="btn-outline btn-primary" data-iconname="ion-image mr-5" data-rule-required="true" data-rule-accept="image/*" class="filestyle" aria-required="true">
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
                                                            <div class="form-group">
                                                                <div class="col-sm-offset-2 col-sm-10">
                                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </section>
                                            <section role="tabpanel" class="tab-pane" id="sidenav5">
                                                <div class="card">
                                                    <header class="card-heading">
                                                        <h2 class="card-title">Add Social</h2>
                                                    </header>
                                                    <div class="card-body">
                                                        <form id="form-horizontal" action="{{route('social.store')}}" method="post" class="form-horizontal" novalidate="novalidate">
                                                            {{csrf_field()}}
                                                            <div class="form-group is-empty">
                                                                <label for="nameInput" class="col-sm-2 control-label">Social icon</label>
                                                                <div class="col-sm-10">
                                                                    <input id="nameInput" type="text" name="icon" placeholder="Enter social icon" data-rule-required="true" minlength="2" class="form-control" aria-required="true">
                                                                </div>
                                                            </div>
                                                            <div class="form-group is-empty">
                                                                <label for="nameInput" class="col-sm-2 control-label">Name</label>
                                                                <div class="col-sm-10">
                                                                    <input id="nameInput" type="text" name="name" placeholder="Enter social name" data-rule-required="true" minlength="2" class="form-control" aria-required="true">
                                                                </div>
                                                            </div>
                                                            <div class="form-group is-empty">
                                                                <label for="nameInput" class="col-sm-2 control-label">Link</label>
                                                                <div class="col-sm-10">
                                                                    <input id="nameInput" type="text" name="link" placeholder="Enter social link" data-rule-required="true" minlength="2" class="form-control" aria-required="true">
                                                                </div>
                                                            </div>
                                                            <div class="form-group is-empty">
                                                                <label for="CategoryInput" class="col-sm-2 control-label">Team</label>
                                                                <div class="col-sm-10">
                                                                    <select class="select form-control" name="team_id" id="CategoryInput">
                                                                        @foreach($teams as $team)
                                                                            <option value="{{$team->id}}">{{$team->name_en}}</option>
                                                                        @endforeach
                                                                    </select>
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
                                            <section role="tabpanel" class="tab-pane" id="sidenav6">
                                                <div class="card">
                                                    <header class="card-heading">
                                                        <h2 class="card-title">Add Question</h2>
                                                    </header>
                                                    <div class="card-body">
                                                        <form id="form-horizontal" method="" class="form-horizontal" novalidate="novalidate">
                                                            <div class="form-group is-empty">
                                                                <label for="nameInput" class="col-sm-2 control-label">Question EN</label>
                                                                <div class="col-sm-10">
                                                                    <input id="nameInput" type="text" name="question_en" placeholder="Enter question for English language" data-rule-required="true" minlength="2" class="form-control" aria-required="true">
                                                                </div>
                                                            </div>
                                                            <div class="form-group is-empty">
                                                                <label for="nameInput" class="col-sm-2 control-label">Question AZ</label>
                                                                <div class="col-sm-10">
                                                                    <input id="nameInput" type="text" name="question_az" placeholder="Enter question for Azerbaijan language" data-rule-required="true" minlength="2" class="form-control" aria-required="true">
                                                                </div>
                                                            </div>
                                                            <div class="form-group is-empty">
                                                                <label for="nameInput" class="col-sm-2 control-label">Answer EN</label>
                                                                <div class="col-sm-10">
                                                                    <input id="nameInput" type="text" name="answer_en" placeholder="Enter answer for English language" data-rule-required="true" minlength="2" class="form-control" aria-required="true">
                                                                </div>
                                                            </div>
                                                            <div class="form-group is-empty">
                                                                <label for="nameInput" class="col-sm-2 control-label">Answer AZ</label>
                                                                <div class="col-sm-10">
                                                                    <input id="nameInput" type="text" name="answer_en" placeholder="Enter answer for Azerbaijan language" data-rule-required="true" minlength="2" class="form-control" aria-required="true">
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
                                            <section role="tabpanel" class="tab-pane {{Request::is('admin/work-tag') ? "active" : ''}}" id="sidenav7">
                                                <div class="card">
                                                    <header class="card-heading">
                                                        <h2 class="card-title">Add Work Tag</h2>
                                                    </header>
                                                    <div class="card-body">
                                                        <form id="form-horizontal" action="{{route('work-tag.store')}}" method="post" class="form-horizontal" novalidate="novalidate">
                                                           {{csrf_field()}}
                                                            <div class="form-group is-empty">
                                                                <label for="nameInput" class="col-sm-2 control-label">Name EN</label>
                                                                <div class="col-sm-10">
                                                                    <input id="nameInput" type="text" name="name_en" placeholder="Enter question for English language" data-rule-required="true" minlength="2" class="form-control" aria-required="true">
                                                                </div>
                                                            </div>
                                                            <div class="form-group is-empty">
                                                                <label for="nameInput" class="col-sm-2 control-label">Name AZ</label>
                                                                <div class="col-sm-10">
                                                                    <input id="nameInput" type="text" name="name_az" placeholder="Enter question for Azerbaijan language" data-rule-required="true" minlength="2" class="form-control" aria-required="true">
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
                                            <section role="tabpanel" class="tab-pane {{Request::is('admin/work/create') ? "active" : ''}}" id="sidenav8" >
                                                <div class="card">
                                                    <header class="card-heading">
                                                        <h2 class="card-title">Add Work</h2>
                                                    </header>
                                                    <div class="card-body">
                                                        <form id="form-horizontal" action="{{route('work.store')}}" method="post" class="form-horizontal" novalidate="novalidate" enctype="multipart/form-data">
                                                            {{csrf_field()}}
                                                            <div class="form-group is-empty">
                                                                <label for="CategoryInput" class="col-sm-2 control-label">Work Tag</label>
                                                                <div class="col-sm-10">
                                                                    <select class="select form-control" name="work_tag_id" id="CategoryInput">
                                                                        @foreach($work_tags as $work_tag)
                                                                            <option value="{{$work_tag->id}}">{{$work_tag->name_en}}</option>
                                                                        @endforeach
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
                                                            <div class="form-group is-empty">
                                                                <label for="nameInput" class="col-sm-2 control-label">Title EN</label>
                                                                <div class="col-sm-10">
                                                                    <input id="nameInput" type="text" name="title_en" placeholder="Enter question for English language" data-rule-required="true" minlength="2" class="form-control" aria-required="true">
                                                                </div>
                                                            </div>
                                                            <div class="form-group is-empty">
                                                                <label for="nameInput" class="col-sm-2 control-label">Title AZ</label>
                                                                <div class="col-sm-10">
                                                                    <input id="nameInput" type="text" name="title_az" placeholder="Enter question for Azerbaijan language" data-rule-required="true" minlength="2" class="form-control" aria-required="true">
                                                                </div>
                                                            </div>
                                                            <div class="form-group is-empty">
                                                                <label for="nameInput" class="col-sm-2 control-label">Description EN</label>
                                                                <div class="col-sm-10">
                                                                    <input id="nameInput" type="text" name="desc_en" placeholder="Enter question for English language" data-rule-required="true" minlength="2" class="form-control" aria-required="true">
                                                                </div>
                                                            </div>
                                                            <div class="form-group is-empty">
                                                                <label for="nameInput" class="col-sm-2 control-label">Description AZ</label>
                                                                <div class="col-sm-10">
                                                                    <input id="nameInput" type="text" name="desc_az" placeholder="Enter question for Azerbaijan language" data-rule-required="true" minlength="2" class="form-control" aria-required="true">
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
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        @if(Session::has('add_tag'))
            notifier.show('Success' , '{{Session::get('add_tag')}}', 'success', '/img/ok-48.png', 4000);
        @endif
        @if(Session::has('add_category'))
            notifier.show('Success' , '{{Session::get('add_category')}}', 'success', '/img/ok-48.png', 4000);
        @endif
        @if(Session::has('add_social'))
            notifier.show('Success' , '{{Session::get('add_social')}}', 'success', '/img/ok-48.png', 4000);
        @endif
        @if(Session::has('add_team'))
            notifier.show('Success' , '{{Session::get('add_team')}}', 'success', '/img/ok-48.png', 4000);
        @endif
        @if(Session::has('add_post'))
            notifier.show('Success' , '{{Session::get('add_post')}}', 'success', '/img/ok-48.png', 4000);
        @endif
        @if(Session::has('add_work_tag'))
            notifier.show('Success' , '{{Session::get('add_work_tag')}}', 'success', '/img/ok-48.png', 4000);
        @endif
         @if(Session::has('add_work'))
            notifier.show('Success' , '{{Session::get('add_work')}}', 'success', '/img/ok-48.png', 4000);
        @endif
    </script>
@endsection