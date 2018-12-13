@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">

                        <div class="container">

                            Check if current user is logged-in or a guest
                            @if (Auth::guest())

                                <p class="mt-5">Please <a href="/login/">login</a> to add a new post.</p>

                            @else

                                <div class="blog-header">
                                    <h1 class="blog-title">Add New Post</h1>
                                </div>

                                <div class="row">
                                    <div class="push-md-2 col-md-8">

                                        <form enctype="multipart/form-data"  action="{{action('PostsController@store') }}" method="POST">
                                            {{ csrf_field() }}

                                            <input type="hidden" name="author_ID" value="{{ Auth::id() }}"/>


                                            <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                                                <label class="control-label col-sm-2" for="date">Date</label> <br/>
                                                <input type="date" class="form-control" name="date" id="date" />

                                                @if ($errors->has('date'))
                                                    <span class="help-block">
	                                <strong>{{ $errors->first('date') }}</strong>
	                            </span>
                                                @endif
                                            </div>

                                            <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
                                                <label class="control-label col-sm-2" for="text">Text</label> <br/>
                                                <textarea name="text" class="form-control" id="text" cols="80" rows="6"></textarea>

                                                @if ($errors->has('text'))
                                                    <span class="help-block">
	                                <strong>{{ $errors->first('text') }}</strong>
	                            </span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="images">Image</label> <br/>
                                                <input type="file"  name="images"/>
                                            </div>

                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary" value="Submit" />
                                                <a class="btn btn-dark" href="{{ url('/home') }}">Cancel</a>
                                            </div>

                                        </form>
                                        @endif
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection

