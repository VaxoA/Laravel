@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">Dashboard</div>


                        <div class="card-body">
                            <div class="container">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div><br/>
                                @endif
                                <div class="container">
                                    <form method="post" action="{{action('HomeController@update', $id)}}" >
                                        {{csrf_field()}}
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        @csrf


                                        <div class="form-group">
                                            <label for="name"> Name:</label>
                                            <input type="text" class="form-control" name="name" value={{ $user->name }} >
                                        </div>

                                        <div class="form-group">
                                            <label for="name"> Email:</label>
                                            <input type="text" class="form-control" name="email" value={{ $user->email }} >
                                        </div>

                                        <div class="form-group">
                                            <label for="name"> Mobile:</label>
                                            <input type="text" class="form-control" name="mobile" value={{ $user->mobile }} >
                                        </div>

                                        <button type="submit" class="btn btn-primary">Update</button>
                                            {{--<a class="btn btn-dark" href="{{ url('/delete/user/{id}') }}">Cancel</a>--}}
                                    </form>

                                    <form  onsubmit="return confirm('Do you really want to delete?');" action="{{action('HomeController@destroy', $user->id)}}" method="post">
                                        {{csrf_field()}}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection