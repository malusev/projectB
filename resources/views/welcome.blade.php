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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
    <script>
        
        window.addEventListener("load", function(){

            TweenMax.to('.banner__logo', 1.5, {scaleY: 1, height: '100vh'})
            TweenMax.to('.kvadrat', 1.5, {opacity: 1, y: 0, delay: 1})
        })
        document.getElementById('onama').addEventListener('click', function(){
            TweenMax.to('#uskoro', 1, {opacity: 1, y: 0, delay: 0.5})
            TweenMax.to('#uskoro2', 1, {opacity: 1, y: 0, delay: 1.5})
            TweenMax.to('#uskoro3', 1, {opacity: 1, y: 0, delay: 2.5})

        })
    </script>  

    <script>
    
        
    </script>
    </body>
</html>
