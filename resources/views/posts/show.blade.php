@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <h1>Posts</h1> </div>

{{--                @if ($post->user_id==auth()->id())--}}

                   <img src="/uploads/images/{{$post['images']}}" class="img-thumbnail" style="width: 200px; height: 200px">
                   <h3>{{ $post->text }}</h3>
                    {{ $post->date }}


                     <form action="/posts/{{ $post->id }}" method="POST">
                      {{ csrf_field() }}
                       {{ method_field('DELETE') }}

                      <button type="submit" class="btn btn-flat btn-danger">Delete Post</button>

                       <td><a href="{{route('post.edit',$post->id)}}" class="btn btn-warning">Edit</a></td>
                     </form>

          </div>
        </div>
    </div>
</div>
@endsection