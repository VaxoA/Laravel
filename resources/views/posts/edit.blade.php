@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Post Edit</div>
                    <div class="card-body">

                        <div class="container">
                             <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ url('/posts', $post->id) }}">
                                 {{ method_field('PUT') }}
                                 {!! csrf_field() !!}

                                 <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                                     <label for="date" class="col-md-8">Date</label>

                                     <div class="col-md-10">
                                         <input id="date" type="date" class="form-control" name="date" value="{{ $post->date }}">

                                         @if ($errors->has('date'))
                                             <span class="help-block">
                                                 <strong>{{ $errors->first('date') }}</strong>
                                             </span>
                                         @endif
                                     </div>
                                 </div>

                                 <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
                                     <label for="text" class="col-md-8">Text</label>

                                     <div class="col-md-10">
                                         <textarea class="form-control" name="text">
                                             {{ $post->text }}
                                         </textarea>

                                         @if ($errors->has('text'))
                                             <span class="help-block">
                                                 <strong>{{ $errors->first('text') }}</strong>
                                             </span>
                                         @endif
                                     </div>
                                 </div>

                                 <div class="form-group{{ $errors->has('images') ? ' has-error' : '' }}">
                                     <label for="images" class="col-md-8">Images</label>

                                     <div class="col-md-10">
                                         <input type="file" id="images" name="images"/>

                                         @if ($errors->has('images'))
                                             <span class="help-block">
                                                 <strong>{{ $errors->first('images') }}</strong>
                                             </span>
                                         @endif
                                     </div>
                                 </div>

                                 {{--<div class="form-group">--}}
                                     {{--<label class="control-label col-sm-2" for="images">Image</label> <br/>--}}
                                     {{--<input type="file"  name="images"/>--}}
                                 {{--</div>--}}

                                 <div class="form-group">
                                     <div class="col-md-6 col-md-offset-4" style="text-align: right">
                                         <button type="submit" class="btn btn-primary">
                                             Edit Post
                                         </button>
                                     </div>
                                 </div>
                             </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

