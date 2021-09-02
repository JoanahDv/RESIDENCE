<?php $title = "settings"; ?>
<?php ob_start(); ?>


<section id="settingsPage">
<h4>Edit Your Profile Form</h4>
    <div class="container_edit">
        <p id="success">Thank you! <br>Your profile has been edited.</p>
        <form action="index.php?action=settings" method="POST" id="editForm">
            <label for="name"> Name</label><br>
            <input type="text" id="name" name="name" placeholder="Your name.." required></br>
            <label for="e-mail">E-mail address</label></br>
            <input type="text" id="e-mail" name="email" placeholder="john@example.com" required></br>
            <label for="password">Password</label></br>
            <input type="text" id="password" name="password" placeholder="New password" required></br>
            </br>

            <button type="submit" name="contact_submit">Save</button>
        </form>
    </div>
</section>
<?php $content = ob_get_clean(); ?>
<?php require 'views/backend/template.php'; ?>