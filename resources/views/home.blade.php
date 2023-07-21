<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- link fortawsome -->         
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    @include('partials.header')

    <main>
        <div>
            <img class="jumbotron" src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="jumbo">
        </div>
        
        <div class="bg-serie">
            <div class="container">
                <div class="row position">
                    @foreach($comics as $comic)
                        <div class="col-12 col-md-6 col-lg-2 my-3">
                            <div class="my-card">
                                <img class="img-fluid img-comic" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                                <div class="card-body">
                                    <span><h4 class="title_h4">{{ $comic['series'] }}</h4></span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-12 d-flex justify-content-center">
                        <button class="btn-load">LOAD MORE</button>
                    </div>
                    <div class="current_series">
                        CURRENT SERIES
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="bg-icons">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-12">
                            <div class="content-icons d-flex align-items-center justify-content-between">
                                <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}" class="icon">
                                <div class="text-icon">DIGITAL COMICS</div>
    
                                <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}" class="icon">
                                <div class="text-icon">DIGITAL COMICS</div>
    
                                <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}" class="icon">
                                <div class="text-icon">DIGITAL COMICS</div>
    
                                <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}" class="icon">
                                <div class="text-icon">DIGITAL COMICS</div>
    
                                <img src="{{ Vite::asset('resources/images/buy-dc-power-visa.png') }}" class="icon">
                                <div class="text-icon">DIGITAL COMICS</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-footer">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-12">
                            <div class="bg_dc">
                                <ul>
                                    <li><h4>DC COMICS</h4></li>
                                    <li><a href="#">Characters</a></li>
                                    <li><a href="#">Comics</a></li>
                                    <li><a href="#">Movies</a></li>
                                    <li><a href="#">TV</a></li>
                                    <li><a href="#">Games</a></li>
                                    <li><a href="#">Videos</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><h4>SHOP</h4></li>
                                    <li><a href="#">Shop DC</a></li>
                                    <li><a href="#">Shop DC Collectibles</a></li>
                                </ul>
                
                                <ul>
                                    <li><h4>DC</h4></li>
                                    <li><a href="#">Terms Of Use</a></li>
                                    <li><a href="#">Privacy policy (New)</a></li>
                                    <li><a href="#">Ad Choices</a></li>
                                    <li><a href="#">Advertising</a></li>
                                    <li><a href="#">Jobs</a></li>
                                    <li><a href="#">Subscriptions</a></li>
                                    <li><a href="#">Talent Workshops</a></li>
                                    <li><a href="#">CPSC Certificates</a></li>
                                    <li><a href="#">Ratings</a></li>
                                    <li><a href="#">Shop Help</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                
                                <ul>
                                    <li><h4>SITES</h4></li>
                                    <li><a href="#">DC</a></li>
                                    <li><a href="#">MAD Magazine</a></li>
                                    <li><a href="#">DC Kids</a></li>
                                    <li><a href="#">DC Universe</a></li>
                                    <li><a href="#">DC Power Visa</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            
        </footer>
    </main>

</body>

</html>