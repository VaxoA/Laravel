@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="search" role="search">

                            @if(isset($details))
                                <div>
                                    <h4> The Search results for your query <b> {{ $query }} </b> are :</h4>

                                </div>
                                @foreach($details as $user)

                                 <img src="/uploads/avatars/{{ $user->avatar }}" class="img-thumbnail" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;" >
                                <a href="{{ action('UsersController@user',$user->id)}}"> <h2>{{ $user->name }}</h2> </a><br>
                                @endforeach

                            @elseif(isset($message))

                                <p>  {{ $message}}  </p>

                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


