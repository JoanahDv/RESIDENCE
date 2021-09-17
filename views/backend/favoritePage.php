<?php $title = "Favorite"; ?>
<?php ob_start(); ?>

<?php require 'views/backend/favorite.php'; ?>

<?php $content = ob_get_clean(); ?>
<?php require 'views/backend/template.php'; ?>