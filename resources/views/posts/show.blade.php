@extends('layouts.app')

@section('title', $post->title)

@section('content')

    <div class="post-detail">

        <div class="detail-top">

            <a
                href="{{ route('posts.index') }}"
                class="back-button"
            >
                ← Kembali ke Daftar
            </a>

            <span class="detail-label">
                POST DETAIL
            </span>

        </div>


        <article class="detail-card">

            <div class="detail-header">

                <span class="detail-category">
                    BLOG POST
                </span>

                <h2>{{ $post->title }}</h2>

                <p class="detail-date">
                    Dibuat pada
                    {{ $post->created_at->format('d M Y') }}
                </p>

            </div>


            <div class="detail-divider"></div>


            <div class="detail-content">
                {{ $post->content }}
            </div>


            <div class="detail-actions">

                <a
                    href="{{ route('posts.edit', $post) }}"
                    class="action-button action-edit"
                >
                    Edit Post
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
                        class="action-button action-delete delete-trigger"
                    >
                        Hapus Post
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

    </div>

@endsection