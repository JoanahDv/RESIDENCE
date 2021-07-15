
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="JEAN FORTEROCHE">
    <meta name="author" content="ME">
    <title>RESIDENCE</title>
    <link rel="shortcut icon" type="image/jpg" href="/favicon.png"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/m2mcqbbpqkwunod1mevcdhfk0kwqjcjk8m5lkt7ljd273u90/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
     
    
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->

    
    <!-- MAIN STYLESHEET-->
    <link href="public/style/index.css" rel="stylesheet"/>
    <script src="public/scripts/backend.js"></script>
  


    <!--FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
 </head>

<body>
    <div>
        <?php
            require 'views/backend/header.php';
            echo $content;
          ?>
    </div>
</body>
</html>