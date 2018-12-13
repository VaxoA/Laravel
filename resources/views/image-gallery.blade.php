@extends('layouts.app')

 @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Image Gallery</div>
                        <div class="card-body">


                               <form action="{{ url('image-gallery') }}" class="form-image-upload" method="POST" enctype="multipart/form-data">
                                   {!! csrf_field() !!}

                                   @if (count($errors) > 0)
                                       <div class="alert alert-danger">
                                           <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                           <ul>
                                               @foreach ($errors->all() as $error)
                                                   <li>{{ $error }}</li>
                                               @endforeach
                                           </ul>
                                       </div>
                                   @endif


                                   @if ($message = Session::get('success'))
                                       <div class="alert alert-success alert-block">
                                           <button type="button" class="close" data-dismiss="alert">×</button>
                                           <strong>{{ $message }}</strong>
                                       </div>
                                   @endif


                                   <div class="row">
                                       <div class="col-md-5">
                                           <strong>Image:</strong>
                                           <input type="file" name="image" class="form-control">
                                       </div>
                                       <div class="col-md-2">
                                           <br/>
                                           <button type="submit" class="btn btn-success">Upload</button>
                                       </div>
                                   </div>
                                </form>

                                  <div class='list-group gallery'>
                                      @if($images->count())
                                          @foreach($images as $image)
                                              @if ($image->user_id==auth()->id())
                                              <div class='col-md-12'>
                                                  <a class="thumbnail fancybox" rel="ligthbox" href="/uploads/gallery/{{ $image->image }}">
                                                      <img  class="img-thumbnail" alt="" style="width: 200px; height: 200px" src="/uploads/gallery/{{ $image->image }}" />
                                                          {{--<small class='text-muted'>{{ $image->title }} </small>--}}
                                                  </a>
                                                  <form action="{{ url('image-gallery',$image->id) }}" method="POST">
                                                      <input type="hidden" name="_method" value="delete">
                                                      {!! csrf_field() !!}
                                                      <button type="submit" class="close-icon btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                  </form>
                                   </div>     @endif
                                           @endforeach
                                      @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
