@extends('layouts.backend')

@section('content')
    <section id="content_outer_wrapper">
        <div id="content_wrapper" class="card-overlay">
            <div id="header_wrapper" class="header-md ">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <header id="header">
                                <h1>Settings</h1>
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
                                    <form id="form-horizontal" action="{{route('setting.update',['setting' => $setting->id])}}" method="post" class="form-horizontal" novalidate="novalidate" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        {{ method_field('PATCH') }}
                                        <div class="form-group is-empty">
                                            <label for="nameInput" class="col-sm-2 control-label">Meta Title EN</label>
                                            <div class="col-sm-10">
                                                <input id="nameInput" type="text" name="meta_title_en" placeholder="Enter meta title for SEO" data-rule-required="true" minlength="2" class="form-control" aria-required="true" value="{{$setting->meta_title_en}}">
                                            </div>
                                        </div>
                                        <div class="form-group is-empty">
                                            <label for="nameInput" class="col-sm-2 control-label">Meta Title AZ</label>
                                            <div class="col-sm-10">
                                                <input id="nameInput" type="text" name="meta_title_az" placeholder="Enter meta title for SEO" data-rule-required="true" minlength="2" class="form-control" aria-required="true" value="{{$setting->meta_title_az}}">
                                            </div>
                                        </div>
                                        <div class="form-group is-empty">
                                            <label for="nameInput" class="col-sm-2 control-label">Meta Description EN</label>
                                            <div class="col-sm-10">
                                                <input id="nameInput" type="text" name="meta_desc_en" placeholder="Enter meta description for SEO" data-rule-required="true" minlength="2" class="form-control" aria-required="true" value="{{$setting->meta_desc_en}}">
                                            </div>
                                        </div>
                                        <div class="form-group is-empty">
                                            <label for="nameInput" class="col-sm-2 control-label">Meta Description AZ</label>
                                            <div class="col-sm-10">
                                                <input id="nameInput" type="text" name="meta_desc_az" placeholder="Enter position name for Azerbaijan language" data-rule-required="true" minlength="2" class="form-control" aria-required="true" value="{{$setting->meta_desc_az}}">
                                            </div>
                                        </div>
                                        <div class="form-group is-empty">
                                            <label for="nameInput" class="col-sm-2 control-label">Address EN</label>
                                            <div class="col-sm-10">
                                                <input id="nameInput" type="text" name="address_en" placeholder="Enter position name for Azerbaijan language" data-rule-required="true" minlength="2" class="form-control" aria-required="true" value="{{$setting->address_en}}">
                                            </div>
                                        </div>
                                        <div class="form-group is-empty">
                                            <label for="nameInput" class="col-sm-2 control-label">Address AZ</label>
                                            <div class="col-sm-10">
                                                <input id="nameInput" type="text" name="address_az" placeholder="Enter position name for Azerbaijan language" data-rule-required="true" minlength="2" class="form-control" aria-required="true" value="{{$setting->address_az}}">
                                            </div>
                                        </div>
                                        <div class="form-group is-empty">
                                            <label for="nameInput" class="col-sm-2 control-label">Lat</label>
                                            <div class="col-sm-10">
                                                <input id="nameInput" type="text" name="lat" placeholder="Enter position name for Azerbaijan language" data-rule-required="true" minlength="2" class="form-control" aria-required="true" value="{{$setting->lat}}">
                                            </div>
                                        </div>
                                        <div class="form-group is-empty">
                                            <label for="nameInput" class="col-sm-2 control-label">Lng</label>
                                            <div class="col-sm-10">
                                                <input id="nameInput" type="text" name="lng" placeholder="Enter position name for Azerbaijan language" data-rule-required="true" minlength="2" class="form-control" aria-required="true" value="{{$setting->lng}}">
                                            </div>
                                        </div>
                                        <div class="form-group is-empty">
                                            <label for="nameInput" class="col-sm-2 control-label">Email</label>
                                            <div class="col-sm-10">
                                                <input id="nameInput" type="text" name="email" placeholder="Enter position name for Azerbaijan language" data-rule-required="true" minlength="2" class="form-control" aria-required="true" value="{{$setting->email}}">
                                            </div>
                                        </div>
                                        <div class="form-group is-empty">
                                            <label for="nameInput" class="col-sm-2 control-label">Facebook uUrl</label>
                                            <div class="col-sm-10">
                                                <input id="nameInput" type="text" name="facebook_link" placeholder="Enter position name for Azerbaijan language" data-rule-required="true" minlength="2" class="form-control" aria-required="true" value="{{$setting->facebook_link}}">
                                            </div>
                                        </div>
                                        <div class="form-group is-empty">
                                            <label for="nameInput" class="col-sm-2 control-label">Twitter Url</label>
                                            <div class="col-sm-10">
                                                <input id="nameInput" type="text" name="twitter_link" placeholder="Enter position name for Azerbaijan language" data-rule-required="true" minlength="2" class="form-control" aria-required="true" value="{{$setting->twitter_link}}">
                                            </div>
                                        </div>
                                        <div class="form-group is-empty">
                                            <label for="nameInput" class="col-sm-2 control-label">LinkenIn Url</label>
                                            <div class="col-sm-10">
                                                <input id="nameInput" type="text" name="linkedin_link" placeholder="Enter position name for Azerbaijan language" data-rule-required="true" minlength="2" class="form-control" aria-required="true" value="{{$setting->linkedin_link}}">
                                            </div>
                                        </div>
                                        <div class="form-group is-empty">
                                            <label for="nameInput" class="col-sm-2 control-label">Contact</label>
                                            <div class="col-sm-10">
                                                <input id="nameInput" type="text" name="contact" placeholder="Enter position name for Azerbaijan language" data-rule-required="true" minlength="2" class="form-control" aria-required="true" value="{{$setting->contact}}">
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
        @if(Session::has('update_setting'))
            notifier.show('Success' , '{{Session::get('update_setting')}}', 'success', '/img/ok-48.png', 4000);
        @endif
    </script>
@endsection