<article>
    <h3>{{ $post->title }}</h3>

    <p>{{ $post->content }}</p>

    <small>
        Dibuat: {{ $post->created_at->format('d M Y') }}
    </small>
</article>