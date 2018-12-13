@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                   <div class="card-header"> <h1>All Posts</h1> </div>



                    @foreach ($posts as $post)

                   @if ($post->user_id==auth()->id())

                         <img src="/uploads/images/{{$post['images']}}" class="img-thumbnail" style="width: 200px; height: 200px">
                               <a href="{{ url('/posts', $post->id) }}"><span class="badge badge-secondary"><h4>{{ $post->text }}</h4></span></a>
                            {{ $post->date }}

                        @endif

                    @endforeach
                    {{ $posts->links() }}

              </div>
            </div>
        </div>
    </div>
@endsection