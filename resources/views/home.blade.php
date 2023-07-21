<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content d-flex justify-content-between">
                    <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" class="img-logo">
                    <ul class="list-unstyled d-flex">
                        <li class="nav-link">
                            <a href="#" class="link">Characters</a>
                        </li>
                        <li class="nav-link {{ Route::currentRouteName() === 'homepage' ? 'fw-bold active_li' : ''}}">
                            <a href="{{ route('homepage') }}" class="link {{ Route::currentRouteName() === 'homepage' ? 'fw-bold active_a' : ''}}">Comics</a>
                        </li>
                        <li class="nav-link">
                            <a href="#" class="link">Movies</a>
                        </li>
                        <li class="nav-link">
                            <a href="#" class="link">TV</a>
                        </li>
                        <li class="nav-link">
                            <a href="#" class="link">Games</a>
                        </li>
                        <li class="nav-link">
                            <a href="#" class="link">Collectibles</a>
                        </li>
                        <li class="nav-link">
                            <a href="#" class="link">Videos</a>
                        </li>
                        <li class="nav-link">
                            <a href="#" class="link">Fans</a>
                        </li>
                        <li class="nav-link">
                            <a href="#" class="link">News</a>
                        </li>
                        <li class="nav-link">
                            <a href="#" class="link">Shop</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</body>

</html>