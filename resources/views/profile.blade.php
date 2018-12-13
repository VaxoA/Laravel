@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">


                         <div class="col-md-10 col-md-offset-1">
                             <img src="/uploads/avatars/{{ $user->avatar }}" class="img-thumbnail" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                             <h2>{{ $user->name }}'s Profile</h2>
                             <form enctype="multipart/form-data" action="/profile" method="POST">
                                 <label>Update Profile Image</label>
                                 <input type="file" name="avatar">
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                 <input type="submit" class="pull-right btn btn-sm btn-primary">
                             </form>

                             <div class="btn-group">
                                 <a href="{{url('show-gallery')}}" class="btn btn-info">All Images</a>
                                 <a href="{{route('user.view',$user->id)}}" class="btn btn-success">All Followers</a>
                                 <a href="{{url('posts')}}" class="btn btn-dark">All Posts</a>
                             </div>

                             <p class="mb-2">
                                 <small>Following: <span class="badge badge-primary">{{ $user->follows()->get()->count() }}</span></small>
                                 <small>Followers: <span class="badge badge-primary tl-follower">{{ $user->followers()->get()->count() }}</span></small>
                                 <small>Image: <span class="badge badge-primary">{{ $user->ImageGallery()->get()->count() }}</span></small>
                                 <small>Post: <span class="badge badge-primary">{{ $user->post()->get()->count() }}</span></small>
                             </p>
                             <small>
                                 <strong>Website:</strong> ItSolutionStuff.com,
                                 <strong>Email: </strong>{{ $user->email }}
                             </small>
                           {{--<div class="card">--}}
                             {{--@foreach ($posts as $post)--}}
                                 {{--@php--}}
                                     {{--$date=date('Y-m-d', $post['date']);--}}
                                 {{--@endphp--}}

                                 {{--<img src="/uploads/images/{{$post['images']}}" class="img-thumbnail" style="width: 200px; height: 200px">--}}
                                 {{--<a href="{{ url('/posts', $post->id) }}"><span class="badge badge-secondary"><h4>{{ $post->text }}</h4></span></a>--}}

                            {{--<h6 style="color: rgb(0,0,255)">{{ $post->created_at }}</h6>--}}
                             {{--@endforeach--}}
                            {{--</div>--}}

                         </div>
                    </div>
                </div>
            </div>
        </div>
@endsection