<x-layout>
    <h1>Posts</h1>
    <hr>

    @foreach ($posts as $post)
        <article class="mb-4">
            <h3><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h3>
            <td>{{ $post->body }}</td>
        </article>
    @endforeach
</x-layout>
