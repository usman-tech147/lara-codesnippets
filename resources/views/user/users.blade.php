@extends('layout.app')

@section('content')

    <div class="container" style="margin-top: 20px; margin-bottom: 50px">
        <a href="{{route('users.create')}}" class="btn btn-success"> Add User </a>

        <div class="row">
            @foreach($users as $user)
                <div class="col-md-4" style="margin-top: 10px">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $user['image'] ? asset('/storage/images/'.$user['image']): asset('/storage/images/avatar.png')}}"
                             class="card-img-top" alt="..." width="100" height="200">
                        <div class="card-body">
                            <h5 class="card-title">{{$user["name"]}}</h5>
                            <a href="{{route('users.edit',$user['id'])}}" class="btn btn-primary">Edit</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

@endsection