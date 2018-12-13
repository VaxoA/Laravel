@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">

                        {{--<table class="table table-striped">--}}

                            {{--<tbody>--}}

                            {{--@foreach($posts as $post)--}}
                                {{--@php--}}
                                    {{--$date=date('Y-m-d', $post['date']);--}}
                                {{--@endphp--}}


                                    {{--<td><img src="/uploads/images/{{$post['images']}}" class="img-thumbnail" style="width: 200px; height: 200px"></td>--}}
                                    {{--<td>{{$post->text}}</td>--}}
                                    {{--<td>{{$date}}</td>--}}

                        {{--</table>--}}
                                    {{--<td>--}}
                                        {{--<form action="{{ action('PostsController@destroy', $post->id)}}" method="post">--}}
                                            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}" />--}}
                                            {{--@csrf--}}

                                            {{--<button class="btn btn-danger" type="submit">Delete</button>--}}
                                        {{--</form>--}}
                                    {{--</td>--}}
                            {{--</tbody>--}}



                            {{--<span>{{$post->comments->count()}} {{ str_plural('comment', $post->comments->count()) }}</span>--}}

                            {{--<h3>Comments</h3>--}}
                            {{--@if (Auth::check())--}}
                                {{--{{ Form::open(['route' => ['comments.store'], 'method' => 'POST']) }}--}}
                                {{--<p>{{ Form::textarea('body', old('body')) }}</p>--}}
                                {{--{{ Form::hidden('post_id', $post->id) }}--}}
                                {{--<p>{{ Form::submit('Send') }}</p>--}}
                                {{--{{ Form::close() }}--}}
                            {{--@endif--}}

                            {{--@forelse ($post->comments as $comment)--}}
                                {{--<p>{{ $comment->user->name }} {{$comment->created_at}}</p>--}}
                                {{--<p>{{ $comment->body }}</p>--}}
                                {{--<hr>--}}
                            {{--@empty--}}
                                {{--<p>This post has no comments</p>--}}
                            {{--@endforelse--}}
                                    {{--@endforeach--}}


                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

