@extends('layouts.app')

@section('title', $post->title)

@section('content')

    <h2>{{ $post->title }}</h2>

    <p>{{ $post->content }}</p>

    <small>
        Dibuat: {{ $post->created_at->format('d M Y') }}
    </small>

    <br><br>

    <a href="{{ route('posts.index') }}">
        Kembali ke Daftar Post
    </a>

@endsection