<div>
    <h1>New Comment</h1>
    <p>{{ $comment->user->name }} has commented on your post</p>
    <p>
        <a href= "{{ env('APP_URL') . '/posts/' . $comment->post->id }}">View Comments</a>
    </p>
</div>
