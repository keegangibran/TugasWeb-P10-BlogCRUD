@extends('layouts.app')

@section('title', 'Buat Post')

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
                NEW POST
            </span>

            <h2>Buat Post Baru</h2>

            <p>
                Tuangkan ide dan ceritamu ke dalam sebuah tulisan.
            </p>

        </div>


        <form
            action="{{ route('posts.store') }}"
            method="POST"
            class="post-form"
        >

            @csrf

            <div class="form-group">

                <label for="title">
                    Judul Post
                </label>

                <input
                    type="text"
                    id="title"
                    name="title"
                    value="{{ old('title') }}"
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
                >{{ old('content') }}</textarea>

                @error('content')
                    <p class="field-error">{{ $message }}</p>
                @enderror

            </div>


            <div class="form-actions">

                <a
                    href="{{ route('posts.index') }}"
                    class="secondary-button"
                >
                    Batal
                </a>

                <button
                    type="submit"
                    class="primary-button"
                >
                    Publikasikan Post
                </button>

            </div>

        </form>

    </div>

@endsection