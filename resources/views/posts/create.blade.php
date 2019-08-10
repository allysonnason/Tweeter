@extends('layout.main')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-6">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">What is on your mind?</h4>
                        <p class="card-text">
                            <form action="/posts" method="POST">
                                @csrf
                                <textarea name='body' placeholder="Enter your text here" required></textarea>
                                <button type="submit" class="btn btn-primary mb-2">Post</button>
                            </form></p>
                        </div>
                    </div>
                </div>
            </div>

@endsection
