@extends('layouts.backend')

@section('content')
    <section id="content_outer_wrapper">
        <div id="content_wrapper" class="card-overlay">
            <div id="header_wrapper" class="header-md ">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <header id="header">
                                <h1>Edit Team</h1>
                            </header>
                        </div>
                    </div>
                </div>
            </div>
            <div id="content" class="container">

                <div class="content-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-body">
                                    <form id="form-horizontal" action="{{route('team.update',['team' => $team->id])}}" method="post" class="form-horizontal" novalidate="novalidate" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        {{ method_field('PATCH') }}
                                        <div class="form-group is-empty">
                                            <label for="nameInput" class="col-sm-2 control-label">Name EN</label>
                                            <div class="col-sm-10">
                                                <input id="nameInput" type="text" name="name_en" placeholder="Enter category name for English language" data-rule-required="true" minlength="2" class="form-control" aria-required="true" value="{{$team->name_en}}">
                                            </div>
                                        </div>
                                        <div class="form-group is-empty">
                                            <label for="nameInput" class="col-sm-2 control-label">Name AZ</label>
                                            <div class="col-sm-10">
                                                <input id="nameInput" type="text" name="name_az" placeholder="Enter category name for Azerbaijan language" data-rule-required="true" minlength="2" class="form-control" aria-required="true" value="{{$team->name_az}}">
                                            </div>
                                        </div>
                                        <div class="form-group is-empty">
                                            <label for="nameInput" class="col-sm-2 control-label">Position EN</label>
                                            <div class="col-sm-10">
                                                <input id="nameInput" type="text" name="position_en" placeholder="Enter position name for English language" data-rule-required="true" minlength="2" class="form-control" aria-required="true" value="{{$post->position_en}}">
                                            </div>
                                        </div>
                                        <div class="form-group is-empty">
                                            <label for="nameInput" class="col-sm-2 control-label">Position AZ</label>
                                            <div class="col-sm-10">
                                                <input id="nameInput" type="text" name="position_az" placeholder="Enter position name for Azerbaijan language" data-rule-required="true" minlength="2" class="form-control" aria-required="true" value="{{$team->position_az}}">
                                            </div>
                                        </div>
                                        <div class="form-group is-fileinput is-empty">
                                            <label for="fileInput" class="col-sm-2 control-label">Image</label>
                                            <div class="col-sm-10">
                                                <div class="input-group">
                                                    <input id="fileInput" type="file" name="avatar" data-buttontext="Choose file" data-buttonname="btn-outline btn-primary" data-iconname="ion-image mr-5" data-rule-required="true" data-rule-accept="image/*" class="filestyle" aria-required="true">
                                                    <div class="input-group">
                                                        <input type="text" readonly="" class="form-control" placeholder="Upload image file..." value="{{$team->avatar}}">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        @if(Session::has('update_team'))
            notifier.show('Success' , '{{Session::get('update_team')}}', 'success', '/img/ok-48.png', 4000);
        @endif
    </script>
@endsection