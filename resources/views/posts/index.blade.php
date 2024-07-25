<x-layout>
    <h1 class="text-4xl font-bold mb-4">Posts</h1>
    <hr>
    <div class="divide-y">
        @foreach ($posts as $post)
            <article class="mb-4">
                <h3 class="font-bold mb-2 text-teal-500"><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h3>
                <td>{{ $post->body }}</td>
            </article>
        @endforeach
    </div>
</x-layout>
