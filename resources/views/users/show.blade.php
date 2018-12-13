@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-2 col-md-offset-1 card">

                <img src="/uploads/avatars/{{ $user->avatar }}" class="img-thumbnail" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;" >
                <h2>{{ $user->name }}</h2>
                {{--<div class="btn-group">--}}
                    {{--<a href="{{url('show-gallery')}}" class="btn btn-info"> Images</a>--}}
                    {{--<a href="{{url('followers')}}" class="btn btn-success">Followers</a>--}}
                {{--</div>--}}
                {{--<small>--}}
                    {{--<strong>Website:</strong> ItSolutionStuff.com,--}}
                    {{--<strong>Email: </strong>{{ $user->email }}--}}
                {{--</small>--}}
                {{--<p class="mb-2">--}}
                    {{--<small>Following: <span class="badge badge-primary">{{ $user->followers()->get()->count() }}</span></small>--}}
                    {{--<small>Followers: <span class="badge badge-primary tl-follower">{{ $user->followers()->get()->count() }}</span></small>--}}
                {{--</p>--}}

                @if (auth()->user()->isFollowing($user->id))
                    <td>
                        <form action="{{route('unfollow', ['id' => $user->id])}}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="submit" id="delete-follow-{{ $user->id }}" class="btn btn-danger">
                                <i class="fa fa-btn fa-trash"></i>Unfollow
                            </button>
                        </form>
                    </td>
                @else
                    <td>
                        <form action="{{route('follow', ['id' => $user->id])}}" method="POST">
                            {{ csrf_field() }}

                            <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                                <i class="fa fa-btn fa-user"></i>Follow
                            </button>
                        </form>
                    </td>
                @endif
            </div>

            <div class="col-md-5 col-md-offset-1">


                @foreach ($posts as $post)

                    <div class="card">

                        <label>
                            <img src="/uploads/avatars/{{ $user->avatar }}" style="width:25px; height:25px; position:page; top:10px;  border-radius:50%">
                            <a>{{ $user->name }}</a>
                          <h3>  shared a link:</h3>
                        </label>
                        <h6 style="color: rgb(0,0,255)">{{ $post->created_at }}</h6>

                        <img src="/uploads/images/{{ $post->images }}" class="images" style="width:250px; height:250px;" >
                        <h6 style="color: #0000F0">{{ $post->text }}</h6>

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
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
