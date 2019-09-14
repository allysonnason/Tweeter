<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Hay Girl</title>
        <meta name="description" content="The number one Network for Barrel Racers!">
        <meta name="keywords" content="barrel racer, barrel racing, barrel horses, horses for sale, jackpots, rodeo, tack, trailers">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="/css/marketing.css" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">

                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <section id="threeBarrels">
            <div class="jumbotron">
                <div class="containerBanner" data-depth="0.5">
                    <div><img src="https://scontent.fyyc2-1.fna.fbcdn.net/v/t1.0-9/67389382_2801256249902842_3431914899431751680_n.jpg?_nc_cat=101&_nc_oc=AQl2GGtMf0F1XFcgjfT_7dLlcuSXqQ68KqpgOoJ8w4pGnMDR3iPZ1251GcSKvqiV7UY&_nc_ht=scontent.fyyc2-1.fna&oh=fede3b676fde2be8342beebad58ed59f&oe=5DB5962B" width="180" height="180" alt="HayGirl Logo" class="rounded-circle"></div>
                    <div><h2 class="display-4"><strong>Three</strong> Barrels</h2></div>
                    <div><h2 class="display-4"><strong>Two</strong> Hearts</h2></div>
                    <div><h2 class="display-4"><strong>ONE Amazing Social Network</strong></h2></div>
                    <br>
                </div>
            </div>

            <div class="registerButton">
                <?php if(Route::has('login')): ?>
                    <div class="top-right links">
                        <a href="<?php echo e(route('login')); ?>" button type="submit" class="btn btn-secondary">Login</a></button>
                        <?php if(Route::has('register')): ?>
                                <a href="<?php echo e(route('register')); ?>" button type="submit" class="btn btn-secondary">Register</a></button>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
        </section>

        <section id="findRaces">
            <div class="jumbotron">
                <div class="container">
                    <h3 class="display-3">Find Races Near You</h3>
                    <p class="lead">Easily Find and Post local events all in one place!</p>
                </div>
            </div>
        </section>

        <section id="buyHorses">
            <div class="jumbotron">
                <div class="container">
                <h3 class="display-3">Buy and Sell</h3>
                <p class="lead">Horses, Trailers, Tack and more...</p>
                <p>...All on one convenient online platform!</p>
            </div>
        </div>
    </section>

    <section id="findARide">
            <div class="jumbotron">
                <div class="container">
                    <h3 class="display-3">Need a ride?</h3>
                    <p class="lead">Have an empty space in your trailer?</p>
                    <p>...connect with those traveling to the same event</p>
                </div>
            </div>
        </section>

        <section id="getTheApp">
                <div class="jumbotron">
                    <div class="container" data-depth="0.5">
                        <h3 class="display-3"></h3>
                        <p class="lead"></p>
                        <div class ="ball"><div class="ballText">Get the App!</div></div>
                    </div>
                </div>
        </section>

        <footer>&copy HayGirl 2019</footer>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
        <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
        <script>
        var scene = document.querySelector('#threeBarrels .jumbotron');
        var parallaxInstance = new Parallax(scene);
        </script>
        <script>
        var scene = document.querySelector('#getTheApp .jumbotron');
        var parallaxInstance = new Parallax(scene);
        </script>
        <script>
        ScrollReveal().reveal('.jumbotron', {delay: 500});
        ScrollReveal().reveal('.display-4', {delay: 800});
        ScrollReveal().reveal('.lead', {delay: 1000});
        ScrollReveal().reveal('p', {delay: 1100});
        </script>
    </body>
</html>
<?php /**PATH /home/vagrant/code/HayGirl/resources/views/marketing.blade.php ENDPATH**/ ?>