<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="scroll-behavior: smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Belocrkvansko pivo, sveze i mnogo dobro jbt">
        <title>Beerz</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

       
    </head>
    <body style="margin:0;">
    <div id="app">
           <home-component>
               
           </home-component>
           
    </div>
    <script src="{{ asset('js/app.js') }}"></script>    
    </body>
</html>
