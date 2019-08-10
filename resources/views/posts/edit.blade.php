@extends('layout.main')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center"
        <div class="col-sm-6">

            <div class="card">
                <div class="card-body">


                    <form action="/posts/{{ $post->id}}" method="POST">
                        {{method_field('PUT')}}
                        @csrf
                        <textarea name="body" value="body">{{ $post->body}}</textarea><br />
                        <button type="submit">Save</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
