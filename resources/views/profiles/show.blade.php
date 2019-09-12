@extends('layout.main')

@section('content')

            <div class="card">
                <h5 class="card-header">{{ $user->name}}</h5>
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $profile->interests}} <br />
                        {{ $profile->location}} <br />
                        {{ $profile->horsename}} <br />
                        {{ $profile->breed}} <br />

                        @if(Auth::id()== $user->profile->user_id)
                        <a href ="/profiles/{{ $user->id}}/edit" class="btn btn-secondary">Edit Profile</a><br />
                        @endif
                    </h5>
                    <p class="card-text">
                        <div class="card-body ">
                            @foreach ($user->posts as $post)
                            @include('posts._post')
                            @endforeach
                        </div>
                    </div>




@endsection
