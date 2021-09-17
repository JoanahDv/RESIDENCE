<?php $title = "Dashboard"; ?>

<?php ob_start(); ?>
<section id="dashboardHome">
    <H2>WELCOME TO YOUR DASHBOARD</H2>
</section>
<?php require 'views/backend/contactList.php'; ?>
<?php $content = ob_get_clean(); ?>
 <?php require 'views/backend/template.php'; ?>