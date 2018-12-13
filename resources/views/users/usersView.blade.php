@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <img src="/uploads/avatars/{{ $user->avatar }}" class="img-thumbnail"  style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                        {{ $user->name }}
                        <br/>

                        <small>
                            <strong>Website:</strong> ItSolutionStuff.com,
                            <strong>Email: </strong>{{ $user->email }}
                        </small>
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


                    <div class="card-body">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#followers" role="tab" aria-controls="nav-home" aria-selected="true">Followers
                                    <span class="badge badge-primary">{{ $user->followers()->get()->count() }}</span></a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#following" role="tab" aria-controls="nav-profile" aria-selected="false">Following
                                    <span class="badge badge-primary">{{ $user->follows()->get()->count() }}</span></a>
                                <a class="nav-item nav-link"  href="{{url('show-gallery')}}" role="tab" aria-controls="nav-profile" aria-selected="false">Images
                                    <span class="badge badge-primary">{{ $user->ImageGallery()->get()->count() }}</span>
                                    <a class="nav-item nav-link"  href="{{route('post.show',$user->id)}}" role="tab" aria-controls="nav-profile" aria-selected="false">Posts
                                        <span class="badge badge-primary">{{ $user->post()->get()->count() }}</span>
                                    </a>
                                </a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="followers" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="row pl-5">
                                    @include('users.userList', ['users'=>$user->followers()->get()])
                                </div>
                            </div>
                            <div class="tab-pane fade" id="following" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="row pl-5">
                                    @include('users.userList', ['users'=>$user->follows()->get()])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection