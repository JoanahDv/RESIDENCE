<?php $title = "Dashboard"; ?>

<?php ob_start(); ?>
<section id="dashBoard">
<?php require 'views/backend/contactList.php'; ?>
</section>
<?php $content = ob_get_clean(); ?>
 <?php require 'views/backend/template.php'; ?>