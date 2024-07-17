<h1>Post</h1>
<hr>


    <article class="mb-4">
        <h3><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h3>
        <p>{{ $post->body }}</p>
        <p>

            <a href="{{ route('posts.edit', $post) }}">Edit</a>
        </p>
    </article>
