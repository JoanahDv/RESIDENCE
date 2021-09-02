<?php $title = "favorite"; ?>
<?php ob_start(); ?>

    <section id="ProfileHome" action="index.php?action=favorites" method="POST">

<!-- 
    <H1>
        WELCOME =name
    </H1>
    <ul class ="profile_menu">
    <li><a href="#editProfile">Settings</a></li>
    </ul>
        
</section> -->

<!-- SETTINGS EDITINGS   -->

<!-- <section id="editProfile">
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
         -->
      
</section>
<?php $content = ob_get_clean(); ?>
 <?php require 'views/backend/template.php'; ?>