<?php ob_start(); ?>


<div class="parallax"></div>
<section id="homepage" action>
    <!-- <figure>
       
    </figure> -->
    <figcaption id="slogan">
        <p>RESIDENCE</p>
         <br>
         <hr>
         <a href = "index.php?action=usersignup"><button class="startbutton">Find your home</button></a>
        <!-- <a href="index.php?action=app"><button class="startbutton">Find your city</button></a> -->
    </figcaption>
</section>

 
<?php $content = ob_get_clean(); ?>
<?php require 'views/frontend/template.php'; ?>