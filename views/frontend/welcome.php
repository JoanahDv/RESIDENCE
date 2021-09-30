<?php ob_start(); ?>


<div class="parallax"></div>
<section id="homepage">
    <div class="slogan">
        <h1>RESIDENCE</h1>
        <br>
        <a class="startbutton" href="index.php?action=usersignup">Find your home</a>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require 'views/frontend/template.php'; ?>