<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">



        <title>HayGirl</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: pink;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    HayGirl
                </div>
                <div>
                    <img src="https://scontent.fyyc2-1.fna.fbcdn.net/v/t1.0-9/67389382_2801256249902842_3431914899431751680_n.jpg?_nc_cat=101&_nc_oc=AQl2GGtMf0F1XFcgjfT_7dLlcuSXqQ68KqpgOoJ8w4pGnMDR3iPZ1251GcSKvqiV7UY&_nc_ht=scontent.fyyc2-1.fna&oh=fede3b676fde2be8342beebad58ed59f&oe=5DB5962B" width="150" height="150" alt="HayGirl Logo" class="rounded-circle">
                </div>
                <h2>Where "Can Chasers" Connect</h2>

                <div class="links">
                    <a href="/register" button type="submit" class="btn btn-primary">Register</a></button>
                    <a href="/login" button type="submit" class="btn btn-primary">login</a></button>
                </div>
            </div>
        </div>
    </body>
</html>
