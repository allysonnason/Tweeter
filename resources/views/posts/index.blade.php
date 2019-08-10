@extends('layout.main')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-6">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">News Feed</h4>
                        <p class="card-text">
                            @foreach ($posts as $post)

                            @include('posts._post')

                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
