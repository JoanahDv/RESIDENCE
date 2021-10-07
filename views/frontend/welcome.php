<?php ob_start(); ?>

<div class="parallax"></div>
<div id="homepage">
    <div class="slogan">
        <h1>RESIDENCE</h1>
         <a class="startbutton" href="index.php?action=usersignup"> <span>Find your home</span> </a>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require 'views/frontend/template.php'; ?>