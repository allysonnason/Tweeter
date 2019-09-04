<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Hay Girl</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="/css/marketing.css" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg">
            <img src="https://scontent.fyyc2-1.fna.fbcdn.net/v/t1.0-9/67389382_2801256249902842_3431914899431751680_n.jpg?_nc_cat=101&_nc_oc=AQl2GGtMf0F1XFcgjfT_7dLlcuSXqQ68KqpgOoJ8w4pGnMDR3iPZ1251GcSKvqiV7UY&_nc_ht=scontent.fyyc2-1.fna&oh=fede3b676fde2be8342beebad58ed59f&oe=5DB5962B" width="80" height="80" alt="HayGirl Logo" class="rounded-circle">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <div class="headerButton">
                            @if (Route::has('login'))
                                <div class="header-links">
                                    @auth
                                        <a href="{{ url('/home') }}">Home</a>
                                    @else
                                        <a href="{{ route('login') }}" button type="submit" class="btn btn-outline-secondary">Login</a></button>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" button type="submit" class="btn btn-outline-secondary">Register</a></button>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <section id="threeBarrels">
            <div class="jumbotron">
                <div class="container" data-depth="0.5">
                    <div><img src="https://scontent.fyyc2-1.fna.fbcdn.net/v/t1.0-9/67389382_2801256249902842_3431914899431751680_n.jpg?_nc_cat=101&_nc_oc=AQl2GGtMf0F1XFcgjfT_7dLlcuSXqQ68KqpgOoJ8w4pGnMDR3iPZ1251GcSKvqiV7UY&_nc_ht=scontent.fyyc2-1.fna&oh=fede3b676fde2be8342beebad58ed59f&oe=5DB5962B" width="180" height="180" alt="HayGirl Logo" class="rounded-circle"></div>
                    <div><h2 class="display-4"><strong>Three</strong> Barrels</h2></div>
                    <div><h2 class="display-4"><strong>Two</strong> Hearts</h2></div>
                    <div><h2 class="display-4"><strong>ONE Amazing Social Network</strong></h2></div>
                    <br>
                </div>
            </div>
            <div class="registerButton">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}" button type="submit" class="btn btn-secondary">Login</a></button>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" button type="submit" class="btn btn-secondary">Register</a></button>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </section>

        <section id="findRaces">
            <div class="jumbotron">
                <div class="container">
                    <h1 class="display-4">Find Races Near You</h1>
                    <p class="lead">Easily Find and Post local events all in one place!</p>
                    <div></div>
                    <br>
                    <div></div>
                </div>
            </div>
        </section>
        <section id="buyHorses">
            <div class="jumbotron">
                <div class="container">
                <h1 class="display-4">Buy and Sell</h1>
                <p class="lead">Horses, Trailers, Tack and more...</p>
                <hr class="my-4">
                <p>...All in one convenient online platform!</p>
            </div>
        </div>
    </section><section id="findARide">
            <div class="jumbotron">
                <div class="container">
                <h1 class="display-4">Need a ride?</h1>
                <p class="lead">Have an empty space in your trailer?</p>
                <hr class="my-4">
                <p>...connect with those traveling to the same event</p>
            </div>
        </div>
        </section>

        <footer>&copy HayGirl 2019</footer>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
        <script>
        var scene = document.querySelector('#threeBarrels .jumbotron');
        var parallaxInstance = new Parallax(scene);
        </script>
    </body>
</html>
