@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header"> <h1>All Post</h1> </div>

                    @foreach ($posts as $post)

                        <div align="center">

                            <img src="/uploads/images/{{$post['images']}}" class="img-thumbnail" style="width: 250px; height: 250px">
                            <h6 style="color: rgb(0,0,255)">
                                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
                                      integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
                                <i class="far fa-clock"></i>
                                {{ $post->created_at }}</h6>
                        </div>

                        <span class="badge badge-secondary"><h4>{{ $post->text }}</h4></span>


                        <span>{{$post->comments->count()}} {{ str_plural('comment', $post->comments->count()) }}</span>

                        <h3>Comments</h3>
                        @if (Auth::check())
                            {{ Form::open(['route' => ['comments.store'], 'method' => 'POST']) }}
                            <p>{{ Form::textarea('body', old('body')) }}</p>
                            {{ Form::hidden('post_id', $post->id) }}
                            <p>{{ Form::submit('Send') }}</p>
                            {{ Form::close() }}
                        @endif

                        @forelse ($post->comments as $comment)
                            <p>{{ $comment->user->name }} {{$comment->created_at}}</p>
                            <p>{{ $comment->body }}</p>
                            <hr>
                        @empty
                            <p>This post has no comments</p>
                        @endforelse

                    @endforeach

                </div>

            </div>
        </div>
    </div>


@endsection