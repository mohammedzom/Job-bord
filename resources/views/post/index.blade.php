<x-layout :title="$pageTitle">
    <h2>Blog Page</h2>
    @foreach ($posts as $post)
        <div>
            <h3>{{ $post->id }} - {{ $post->title }}</h3>
            <p>{{ $post->body }}</p>
        </div>
    @endforeach
</x-layout>

<a href="/blog/create">Create New Post</a>
