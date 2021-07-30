<?php $title = "Profile"; ?>

<?php ob_start(); ?>


<header class="headerbackend">
    <div class="logo">
        <a class="navbar-brand text-white-50 text-uppercase" href="index.php">RESIDENCE</a>
    </div>

    <div id="burger_action">MENU</div>
    <div id="burger_menu">
        <ul>
            <li> <a class="nav-link" href="index.php"></a><i class="fas fa-home"></i></li>
            <li><a class="nav-link" href="index.php?action=profile">profile</a></li>
            <li><a class="nav-link" href="index.php?action=logout">logout</a></li>
        </ul>
    </div>

    <ul class="nav_menu">
        <li> <a class="nav-link" href="index.php"></a><i class="fas fa-home"></i></li>
        <li><a class="nav-link" href="index.php?action=profile">profile</a></li>
        <li><a class="nav-link" href="index.php?action=logout">logout</a></li>
    </ul>
</header>

<section id="ProfileHome">
  <H1>
    WELCOME TO YOUR PROFILE
  </H1>
</section>
<?php $content = ob_get_clean(); ?>
<?php require 'views/backend/template.php'; ?>
