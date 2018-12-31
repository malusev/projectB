<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Beerz</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

       
    </head>
    <body style="margin:0">
    <div id="app">
           <home-component>
               
           </home-component>
           <div class="parallax-window" data-parallax="scroll" data-image-src="https://wallpaperplay.com/walls/full/0/e/c/272141.jpg"></div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <!--parallax-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../js/parallax/parallax.min.js"></script>
    </body>
</html>
