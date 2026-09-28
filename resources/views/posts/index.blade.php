@extends('layouts.app')

@section('title', 'Daftar Post')

@section('content')

    <h2>Daftar Post</h2>

    @forelse ($posts as $post)

        <x-card :post="$post" />

    @empty

        <p>Belum ada post.</p>

    @endforelse

    {{ $posts->links() }}

@endsection