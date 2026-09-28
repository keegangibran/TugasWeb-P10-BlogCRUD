<article>
    <h3>{{ $post->title }}</h3>

    <p>{{ $post->content }}</p>

    <small>
        Dibuat: {{ $post->created_at->format('d M Y') }}
    </small>

    <br><br>

    <a href="{{ route('posts.show', $post) }}">
        Lihat Detail
    </a>

    <a href="{{ route('posts.edit', $post) }}">
        Edit
    </a>

    <form
        action="{{ route('posts.destroy', $post) }}"
        method="POST"
        style="display: inline;"
        onsubmit="return confirm('Yakin ingin menghapus post ini?')"
    >
        @csrf
        @method('DELETE')

        <button type="submit">
            Hapus
        </button>
    </form>
</article>