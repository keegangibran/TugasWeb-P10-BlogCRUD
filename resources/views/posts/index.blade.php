@extends('layouts.app')

@section('title', 'Daftar Post')

@section('content')

    <h2>Daftar Post</h2>

    @forelse ($posts as $post)

        <article>
            <h3>{{ $post->title }}</h3>

            <p>{{ $post->content }}</p>

            <small>
                Dibuat: {{ $post->created_at->format('d M Y') }}
            </small>
        </article>

    @empty

        <p>Belum ada post.</p>

    @endforelse

    {{ $posts->links() }}

@endsection