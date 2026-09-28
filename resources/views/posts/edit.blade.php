@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')

    <div class="form-page">

        <div class="form-page-header">

            <a
                href="{{ route('posts.index') }}"
                class="back-button"
            >
                ← Kembali ke Daftar
            </a>

            <span class="detail-label">
                EDIT POST
            </span>

            <h2>Edit Post</h2>

            <p>
                Perbarui tulisanmu dan simpan perubahan yang telah dibuat.
            </p>

        </div>


        <form
            action="{{ route('posts.update', $post) }}"
            method="POST"
            class="post-form"
        >

            @csrf
            @method('PUT')

            <div class="form-group">

                <label for="title">
                    Judul Post
                </label>

                <input
                    type="text"
                    id="title"
                    name="title"
                    value="{{ old('title', $post->title) }}"
                    placeholder="Masukkan judul post..."
                >

                @error('title')
                    <p class="field-error">{{ $message }}</p>
                @enderror

            </div>


            <div class="form-group">

                <label for="content">
                    Isi Post
                </label>

                <textarea
                    id="content"
                    name="content"
                    rows="10"
                    placeholder="Tulis sesuatu yang menarik..."
                >{{ old('content', $post->content) }}</textarea>

                @error('content')
                    <p class="field-error">{{ $message }}</p>
                @enderror

            </div>


            <div class="form-actions">

                <a
                    href="{{ route('posts.show', $post) }}"
                    class="secondary-button"
                >
                    Batal
                </a>

                <button
                    type="submit"
                    class="primary-button"
                >
                    Simpan Perubahan
                </button>

            </div>

        </form>

    </div>

@endsection