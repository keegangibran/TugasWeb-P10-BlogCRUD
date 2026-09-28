<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Blog CRUD')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <header>
        <h1>Blog CRUD Laravel</h1>

        <nav>
            <a href="{{ route('posts.index') }}">Posts</a>
            <a href="{{ route('posts.create') }}">Buat Post</a>
        </nav>
    </header>

    <main>
        <x-alert />

        @yield('content')
    </main>

</body>
</html>