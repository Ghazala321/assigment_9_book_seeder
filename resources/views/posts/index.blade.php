<h1>All Posts</h1>
<a href="{{ route('posts.create') }}">New Post</a>

@foreach ($posts as $post)
    <div>
        <h3><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h3>
        <small>{{ $post->created_at->format('d M Y') }}</small>
    </div>
@endforeach