

<div class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-header"><a href ="/profiles/{{$post->user->id}}">{{$post->user->name}}</a></h5>

            <p class="card-text">{{ $post->body}}</p>
        </div>

        
            @if (Auth::check())
            <form action="{{route('comments.store', $post->id)}}" method="POST">
                @csrf
                <p>{{ Form::textarea('body', old('body')) }}</p>
                {{ Form::hidden('post_id', $post->id) }}
                <p>{{ Form::submit('Post') }}</p>
            </form>
            @endif

            @forelse ($post->comments as $comment)
                <p>{{ $comment->user->name }}</p>
                <p>{{ $comment->body }}</p>
                <hr>
            @empty
                <p>This post has no comments</p>
            @endforelse

        <a href="/posts/{{ $post->id }}/like" class="btn btn-primary">Like</a>
        ({{ $post->likes()->count() }})

        @if(Auth::id() == $post->user_id)
        <form action="/posts/{{ $post->id}}" method="POST">
            @csrf
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-dark">Delete</button>
            <a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edit</a>
        </form>
        @endif
    </div>
</div>
