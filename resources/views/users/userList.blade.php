@if($users->count())
    @foreach($users as $user)
        <div class="col-2 profile-box border p-1 rounded text-center bg-light mr-4 mt-3">
            <img src="https://dummyimage.com/165x166/420542/edeef5&text=ItSolutionStuff.com" class="w-100 mb-1">
            <h5 class="m-0"><a href="{{ route('user.view', $user->id) }}"><strong>{{ $user->name }}</strong></a></h5>
            <p class="mb-2">
                <small>Follows: <span class="badge badge-primary">{{ $user->follows()->get()->count() }}</span></small>
                <small>Followers: <span class="badge badge-primary tl-follower">{{ $user->followers()->get()->count() }}</span></small>
            </p>
            {{--<button class="btn btn-info btn-sm action-follow" data-id="{{ $user->id }}"><strong>--}}
                    {{--@if(auth()->user()->isFollowing($user))--}}
                        {{--UnFollow--}}
                    {{--@else--}}
                        {{--Follow--}}
                    {{--@endif--}}
                {{--</strong></button>--}}
            <tr>
                {{--<a href="{{ action('UsersController@show',$user->id)}}">{{ $user->name }}</a><br>--}}
                {{--<td clphpass="table-text"><div>{{ $user->name }}</div></td>--}}
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
            </tr>
        </div>
    @endforeach
@endif