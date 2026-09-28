<article>

    <h3>{{ $post->title }}</h3>

<p>
    {{ Illuminate\Support\Str::words($post->content, 30, '...') }}
</p>

    <small>
        Dibuat: {{ $post->created_at->format('d M Y') }}
    </small>

    <div class="card-actions">

        <a href="{{ route('posts.show', $post) }}">
            Lihat Detail
        </a>

        <a href="{{ route('posts.edit', $post) }}">
            Edit
        </a>

        <form
            action="{{ route('posts.destroy', $post) }}"
            method="POST"
            class="delete-form"
        >
            @csrf
            @method('DELETE')

            <button
                type="button"
                class="delete-trigger"
            >
                Hapus
            </button>
        </form>

    </div>

</article>


<div class="delete-modal">

    <div class="delete-modal-overlay"></div>

    <div class="delete-modal-card">

        <div class="delete-modal-icon">
            !
        </div>

        <span class="delete-modal-label">
            DELETE POST
        </span>

        <h3>Hapus Post?</h3>

        <p>
            Apakah kamu yakin ingin menghapus
            <strong>{{ $post->title }}</strong>?
            Tindakan ini tidak dapat dibatalkan.
        </p>

        <div class="delete-modal-actions">

            <button
                type="button"
                class="modal-cancel"
            >
                Batal
            </button>

            <button
                type="button"
                class="modal-confirm"
            >
                Hapus Post
            </button>

        </div>

    </div>

</div>