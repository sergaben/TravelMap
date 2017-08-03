<?php 
if(isset($_SERVER['HTTPS']))
{
    $_SERVER['HTTP_HTTPS'] = 0;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portfolio</title>
        <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/css/foundation.min.css" integrity="sha256-itWEYdFWzZPBG78bJOOiQIn06QCgN/F0wMDcC4nOhxY=" crossorigin="anonymous" />
<!--
        <script src='https://api.mapbox.com/mapbox-gl-js/v0.38.0/mapbox-gl.js'></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v0.38.0/mapbox-gl.css' rel='stylesheet' />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/js/foundation.min.js" integrity="sha256-Nd2xznOkrE9HkrAMi4xWy/hXkQraXioBg9iYsBrcFrs=" crossorigin="anonymous"></script>
-->
        <link type="text/css" rel="stylesheet" href="css/main.css">
    </head>
    <body>
<!--       style="position: absolute;top:0;bottom:0; width:100%"-->
       <div id='map' class="worldMap"></div>
        <h3 id="region-name"></h3>
        <script src="raphael.min.js"></script>
        <script src="world.js"></script>
<!--
        <script>
            mapboxgl.accessToken = 'pk.eyJ1Ijoia2Fpc29rdWFvIiwiYSI6ImNqNGxvdG9pZjE1cmkzM251aXlobnc5b2UifQ.K8WRpeOJWaalpLaDxuRwhA';
            var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v9',
            });
        </script>
-->
    </body>
</html>