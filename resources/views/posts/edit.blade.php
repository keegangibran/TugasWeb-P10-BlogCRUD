@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')

    <h2>Edit Post</h2>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Judul</label>

            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title', $post->title) }}"
            >

            @error('title')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="content">Isi</label>

            <textarea
                id="content"
                name="content"
                rows="8"
            >{{ old('content', $post->content) }}</textarea>

            @error('content')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Update Post</button>
    </form>

    <br>

    <a href="{{ route('posts.show', $post) }}">
        Batal
    </a>

@endsection