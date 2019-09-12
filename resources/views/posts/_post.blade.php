

    <div class="card">
        <h5 class="card-header"><a href ="/profiles/{{$post->user->id}}">{{$post->user->name}}</a></h5>
            <div class="card-body">
                <div class="card-title">{{ $post->body}}</div>
                    <br>

            

                <div class="card-text post-buttons">
                    <like-button :post-id="{{ $post->id }}" is-liked="{{ $post->likedByUser }}" :count="{{ $post->likes()->count() }}"></like-button>

                </div>
                @if(Auth::id() == $post->user_id)
                <form action="/posts/{{ $post->id}}" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edit</a>
                </form>
                @endif
                @if (Auth::check())

                <div class="card-text post-buttons">


                <form action="{{route('comments.store', $post->id)}}" method="POST">
                @csrf
                <p>{{ Form::textarea('body', old('body')) }}</p>
                {{ Form::hidden('post_id', $post->id) }}
                <p>{{ Form::submit('Comment') }}</p>
                </form>

                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <a class= "btn btn-primary" href="#addGif" data-toggle="collapse">GIF</a>
                        <div id="addGif" class="collapse">
                            <gif-component></gif-component>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>

    @foreach ($post->comments as $comment)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $comment->user->name }}</h5>
                <p class="card-text">
                    {{ $comment->body }} <br>
                    <img src="{{ $comment->gif }}" alt="">
                </p>
            </div><br>
        </div>
    @endforeach
