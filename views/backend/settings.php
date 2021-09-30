<?php $title = "settings"; ?>
<?php ob_start(); ?>

<nav id="settingsNav">  
        <ul class="nav_menu2">
            <li class="passwordE"><a class="nav-link" href="#settingsPassword">Edit your password</a></li>

            <li class="profileE"><a class="nav-link" href="#settingsPage">Edit your Profile</a></li>
        </ul>
    
</nav>
<?php require 'views/backend/passwordEdit.php'; ?>
<?php require 'views/backend/profileEdit.php'; ?>

<?php $content = ob_get_clean(); ?>
<?php require 'views/backend/template.php'; ?>