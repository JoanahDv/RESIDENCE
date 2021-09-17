<?php $title = "DashboardContacts"; ?>
<?php ob_start(); ?>

<?php require 'views/backend/contactList.php'; ?>

<?php $content = ob_get_clean(); ?>
<?php require 'views/backend/template.php'; ?>