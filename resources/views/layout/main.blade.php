<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="_token" content="{{csrf_token()}}" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/app.css" />


        <title></title>
    </head>
    <body>
        <div class="grid-container">

            <div class="header">
            @include('layout._header')
            </div>

            <div class="content">
            @yield('content')
            </div>

            <div class="footer">
            @include('layout._footer')
            </div>

        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
