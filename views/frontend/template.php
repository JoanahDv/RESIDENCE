<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Find your city">
    <meta name="RESIDENCE" content="RESIDENCE">
    <title>RESIDENCE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="shortcut icon" href="public/images/favs.png" type="image/x-icon"/>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    
    <!-- MAIN STYLESHEET-->
    <link href="public/style/index.css" rel="stylesheet"/>

    <!--FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
 </head>

<body>
    <div class="bloc_page">
        <?php
            require 'header.php';
            echo $content;
            require 'footer.php';
         ?>
    </div>
    <!-- JAVACRIPT -->
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
 		<script src="https://api.mapbox.com/mapbox-gl-js/v1.10.0/mapbox-gl.js"></script>
        <link href="https://api.mapbox.com/mapbox-gl-js/v1.10.0/mapbox-gl.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/algoliasearch@4.5.1/dist/algoliasearch.umd.js"></script>
        <script src="public/scripts/configuration.js"></script>
        <script src="public/scripts/map.js"></script>
        <script src="public/scripts/frontend.js"></script>

</body>
</html>