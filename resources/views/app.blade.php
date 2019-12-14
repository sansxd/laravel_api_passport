<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <link rel="icon" type="image/x-icon" href="/favicon.ico">

        <title>Laravel SPA</title>


    </head>
    <body>

        <div id="app">
            <router-view></router-view>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>

    </body>
</html>
