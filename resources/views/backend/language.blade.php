@extends('layouts.backend')

@section('content')
    <section id="content_outer_wrapper">
        <div id="content_wrapper" class="card-overlay">
            <div id="header_wrapper" class="header-md ">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <header id="header">
                                <h1>Language Settings</h1>
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
                                    <form id="form-horizontal" action="{{route('set_language',['folder' => $folder,'file' => $file])}}" method="post" class="form-horizontal" novalidate="novalidate" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        @foreach($languages as $key => $value)
                                            <div class="form-group is-empty">
                                                <label for="nameInput" class="col-sm-2 control-label">{{$key}}</label>
                                                <div class="col-sm-10">
                                                    <input id="nameInput" type="text" name="{{$key}}" data-rule-required="true" class="form-control" aria-required="true" value="{{$value}}">
                                                </div>
                                            </div>
                                        @endforeach
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
        @if(Session::has('update_language'))
            notifier.show('Success' , '{{Session::get('update_language')}}', 'success', '/img/ok-48.png', 4000);
        @endif
    </script>
@endsection