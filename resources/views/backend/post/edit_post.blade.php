@extends('layouts.backend')

@section('content')
    <section id="content_outer_wrapper">
        <div id="content_wrapper" class="card-overlay">
            <div id="header_wrapper" class="header-md ">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <header id="header">
                                <h1>Edit Post</h1>
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
                                    <form id="form-horizontal" action="{{route('post.update',['post' => $post->id])}}" method="post" class="form-horizontal" novalidate="novalidate" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        {{method_field('PATCH')}}
                                        <div class="form-group is-empty">
                                            <label for="nameInput" class="col-sm-2 control-label">Title EN</label>
                                            <div class="col-sm-10">
                                                <input id="nameInput" type="text" name="title_en" placeholder="Enter title for English language" data-rule-required="true" minlength="2" class="form-control" aria-required="true" value="{{$post->title_en}}">
                                            </div>
                                        </div>
                                        <div class="form-group is-empty">
                                            <label for="nameInput" class="col-sm-2 control-label">Title AZ</label>
                                            <div class="col-sm-10">
                                                <input id="nameInput" type="text" name="title_az" placeholder="Enter title for Azerbaijan language" data-rule-required="true" minlength="2" class="form-control" aria-required="true" value="{{$post->title_az}}">
                                            </div>
                                        </div>
                                        <div class="form-group is-empty">
                                            <label for="keyword" class="col-sm-2 control-label">Keyword</label>
                                            <div class="col-sm-10">
                                                <input id="keyword" type="text" name="meta_keyword" placeholder="Enter keywords for SEO" data-rule-required="true"  class="form-control" aria-required="true" value="{{$post->meta_keyword}}">
                                            </div>
                                        </div>
                                        <div class="form-group is-empty">
                                            <label for="CategoryInput" class="col-sm-2 control-label">Category</label>
                                            <div class="col-sm-10">
                                                <select class="select form-control" name="category_id" id="CategoryInput">
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}" {{($category->id == $post->category_id) ? "selected" : ""}}>{{$category->name_en}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group is-empty">
                                            <label for="CategoryInput" class="col-sm-2 control-label">Tag</label>
                                            <div class="col-sm-10">
                                                <select class="select form-control" name="tags[]" id="CategoryInput" multiple>
                                                    @foreach($tags as $tag)
                                                        <option value="{{$tag->id}}" {{($tag->id)}} >{{$tag->name_en}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group is-fileinput is-empty">
                                            <label for="fileInput" class="col-sm-2 control-label">Image</label>
                                            <div class="col-sm-10">
                                                <div class="input-group">
                                                    <input id="fileInput" type="file" name="image" data-buttontext="Choose file" data-buttonname="btn-outline btn-primary" data-iconname="ion-image mr-5"  data-rule-accept="image/*" class="filestyle" aria-required="true">
                                                    <div class="input-group">
                                                        <input type="text" readonly="" class="form-control" placeholder="Upload image file..." value="{{$post->image}}">
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
                                                <textarea name="text_en" data-rule-required="true" class="form-control" rows="3" id="textArea" placeholder="Enter content for English language">{!! $post->text_en !!}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group is-empty">
                                            <label for="textArea" class="col-md-2 control-label">Content Az</label>
                                            <div class="col-md-10">
                                                <textarea name="text_az" data-rule-required="true" class="form-control" rows="3" id="textArea" placeholder="Enter content for Azerbaijan language">{!! $post->text_az !!}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="col-sm-2 control-label">Status</label>
                                            <div class="col-sm-10 ">
                                                <div class="radio radio-inline">
                                                    <label>
                                                        <input type="radio" name="status" value="1" data-rule-required="true" aria-required="true" {{($post->status == 1) ? 'checked' : ""}}><span class="circle"></span><span class="check"></span> Active
                                                    </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <label>
                                                        <input type="radio" name="status" value="0" {{($post->status == 0) ? 'checked' : ""}}><span class="circle"></span><span class="check"></span> Deactive
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        @if(Session::has('update_post'))
            notifier.show('Success' , '{{Session::get('update_post')}}', 'success', '/img/ok-48.png', 4000);
        @endif
    </script>
@endsection