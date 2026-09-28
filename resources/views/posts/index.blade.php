@extends('layouts.app')

@section('title', 'Daftar Post')

@section('content')

    <section class="blog-hero">

        <div class="hero-content">
            <span class="hero-label">BLOG CRUD</span>

            <h2>Temukan Cerita<br>di Setiap Post.</h2>

            <p>
                Kelola tulisanmu dengan mudah menggunakan
                Laravel CRUD yang sederhana dan elegan.
            </p>

            <a
                href="{{ route('posts.create') }}"
                class="hero-button"
            >
                + Buat Post Baru
            </a>
        </div>

        <div class="hero-decoration">
            <div class="hero-circle"></div>

            <div class="hero-card">
                <span>POSTS</span>
                <strong>{{ $posts->total() }}</strong>
            </div>
        </div>

    </section>


    <section class="posts-section">

        <div class="section-heading">

            <div>
                <span class="section-label">COLLECTION</span>

                <h2>Daftar Post</h2>
            </div>

            <span class="post-count">
                {{ $posts->total() }} post
            </span>

        </div>


        <div class="posts-list">

            @forelse ($posts as $post)

                <x-card :post="$post" />

            @empty

                <div class="empty-state">

                    <div class="empty-icon">✦</div>

                    <h3>Belum Ada Post</h3>

                    <p>
                        Belum ada tulisan yang dibuat.
                        Yuk buat post pertamamu.
                    </p>

                    <a href="{{ route('posts.create') }}">
                        Buat Post
                    </a>

                </div>

            @endforelse

        </div>


        @if ($posts->hasPages())

            <div class="pagination-wrapper">

                <p class="pagination-info">
                    <span>Showing</span>

                    <strong>{{ $posts->firstItem() }}</strong>

                    <span>to</span>

                    <strong>{{ $posts->lastItem() }}</strong>

                    <span>of</span>

                    <strong>{{ $posts->total() }}</strong>

                    <span>results</span>
                </p>


                <div class="pagination-numbers">

                    @for ($page = 1; $page <= $posts->lastPage(); $page++)

                        <a
                            href="{{ $posts->url($page) }}"
                            class="{{ $posts->currentPage() == $page ? 'active' : '' }}"
                        >
                            {{ $page }}
                        </a>

                    @endfor

                </div>

            </div>

        @endif

    </section>

@endsection