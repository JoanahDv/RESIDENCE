<?php $title = "Profile"; ?>
<?php ob_start(); ?>

<section id="ProfileHome">
    <!-- <H1>
        WELCOME TO YOUR PROFILE
    </H1> -->


    <!-- Navbar top-->
    <!-- <div>
        <ul>
            <li>
                <a href="#"> Settings </a>
            </li>
            <li>
                <a href="#"> Inbox </a>
            </li>
            <li>
                <a href="#"> Favourites </a>
            </li>
        </ul>
    </div> -->

    <ul class ="profile_menu">
    <li><a href="#editProfile">Settings</a></li>
    <li><a href="#favorites">Favourites</a></li>
    </ul>

    <div action="index.php?action=profile" method="POST">
        <h3 class="firtN"> Firt Name</h3>
        <h3 class="lastN"> Last Name</h3>
</section>

<!-- SETTINGS EDITINGS   -->

<section id="editProfile">
    <div class="container_settings">
        <h3>Edit your profile here</h3>
        <p id="success">Thank you! <br>Your settings have been saved.</p>

        <form>
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

            <label for="e-mail">E-mail address</label>
            <input type="text" id="e-mail" name="email" placeholder="john@example.com" required>

            <button type="submit" name="setting_submit">Save</button>
        </form>
    </div>
     
</section>
<?php $content = ob_get_clean(); ?>
 <?php require 'views/backend/template.php'; ?>