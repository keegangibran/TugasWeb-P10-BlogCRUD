@extends('layouts.app')

@section('title', 'Buat Post')

@section('content')

    <h2>Buat Post Baru</h2>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div>
            <label for="title">Judul</label>

            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title') }}"
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
            >{{ old('content') }}</textarea>

            @error('content')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Simpan Post</button>
    </form>

@endsection