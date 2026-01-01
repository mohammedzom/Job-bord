<x-layout :title="$pageTitle">
    <h2>Blog Page</h2>
    <div>
        <h3>{{ $post->id }} - {{ $post->title }}</h3>
        <p>{{ $post->body }}</p>
    </div>
</x-layout>
