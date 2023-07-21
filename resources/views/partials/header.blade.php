<header>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content d-flex justify-content-between">
                    <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" class="img-logo">
                    <ul class="list-unstyled d-flex ms-5 text-uppercase">
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
                            <a href="#" class="link d-flex align-items-center">Shop <i class="fa-solid fa-caret-down ms-2" style="color: #0074e8;"></i></a>
                        </li>
                    </ul>
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="col-md-8">
                            <div class="search d-flex">
                                <input type="text" class="form-control" placeholder="">
                                <i class="fa fa-search align-self-center"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>