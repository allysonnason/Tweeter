

<div class="container">
    <div class="card">
        <h5 class="card-header"><a href ="/profiles/{{$post->user->id}}">{{$post->user->name}}</a></h5>
            <div class="card">
                <div class="card-header">{{ $post->body}}
                    <br>
                @php
                    $found = 0;
                @endphp
                @foreach($post->likes as $like)
                    @if(Auth::id() == $like->user_id)
                        @php
                            $found = 1;
                        @endphp
                    @endif
                @endforeach

                @if($found == 1)
                    <a href="/posts/{{ $post->id }}/like" class="btn btn-danger">Unlike</a>
                @endif
                @if($found == 0)
                    <a href="/posts/{{ $post->id }}/like" class="btn btn-primary">Like</a>
                @endif
                ({{ $post->likes()->count() }})

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
            <form action="{{route('comments.store', $post->id)}}" method="POST">
                @csrf
                <p>{{ Form::textarea('body', old('body')) }}</p>
                {{ Form::hidden('post_id', $post->id) }}
                <p>{{ Form::submit('Comment') }}</p>

                <div class="form-group">
                    <a class= "btn btn-primary" href="#addGif" data-toggle="collapse">GIF</a>
                    <div id="addGif" class="collapse">
                        <gif-component></gif-component>
                    </div>
                </div>
            </form>
            @endif

            @forelse ($post->comments as $comment)

                    <h5 class="card-title">{{ $comment->user->name }}</h5>
                <p>{{ $comment->body }}</p>
                <img src="{{ $comment->gif}}" alt="">
                <hr>
            @empty
                <p></p>
            @endforelse

    </div><br>
</div>
</div>
