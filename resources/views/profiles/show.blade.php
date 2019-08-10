@extends('layout.main')

@section('content')
<div class="container-fluid">
    <div class="row justify content-center">
        <div class="col-sm-6">
            <div class="profile-info">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{ $user->name}}</h3>
                    <p class="card-text">

                        {{ $profile->interests}} <br />
                        {{ $profile->location}} <br />
                        {{ $profile->horsename}} <br />
                        {{ $profile->breed}} <br /></p>

                        @if(Auth::id()== $user->profile->user_id)
                        <a href ="/profiles/{{ $user->id}}/edit" class="btn btn-secondary">Edit Profile</a><br />
                        @endif
                    </div>
                </div>
                </div><br />


                <div class="card">

                        <div class="card-body ">
                            @foreach ($user->posts as $post)
                            @include('posts._post')
                            @endforeach
                        </div><br />
                </div>
            </div>
        </div>

@endsection
