@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                        @if($images->count())
                            @foreach($images as $image)
                                @if ($image->user_id==auth()->id())
                                    <div class='col-md-12'>
                                        <a class="thumbnail fancybox" rel="ligthbox" href="/uploads/gallery/{{ $image->image }}">
                                            <img  class="img-thumbnail" alt="" style="width: 200px; height: 200px" src="/uploads/gallery/{{ $image->image }}" />
                                            <small class='text-muted'>{{ $image->title }} </small>
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


