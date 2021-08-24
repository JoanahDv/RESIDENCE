<?php $title = "Profile"; ?>
<?php ob_start(); ?>

<section id="ProfileHome">
    <H1>
        WELCOME TO YOUR PROFILE
    </H1>
    <div>
    
    </div>

    <!-- Navbar top-->
    <div action="index.php?action=profile" method="POST">

        <!-- <div class="title">
        </div>
         <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#about">About</a></li>
        </ul>
    </div> -->
    <!-- End -->
    <div class="details">
    <h3 class="firtN"> Firt Name</h3>
    <h3 class="lastN"> Last Name</h3>


     </section> 
        <?php $content = ob_get_clean(); ?> <?php require 'views/backend/template.php'; ?>