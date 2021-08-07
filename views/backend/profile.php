<?php $title = "Profile"; ?>

<?php ob_start(); ?>

<section id="ProfileHome">
  <H1>
    WELCOME TO YOUR PROFILE
  </H1>

</section>
<?php $content = ob_get_clean(); ?>
<?php require 'views/backend/template.php'; ?>
