<?php $title = "Dashboard"; ?>

<?php ob_start(); ?>
<section id="dashboardHome">
    <H2>WELCOME TO YOUR DASHBOARD</H2>
    <nav>
        <ul>
            <li class ="dashboardContact">
                <a href ="">Contact</a>
            </li>
        </ul>
    </nav>
</section>
<?php require 'views/backend/contactList.php'; ?>
<?php $content = ob_get_clean(); ?>
<!-- <?php require 'views/backend/template.php'; ?> -->