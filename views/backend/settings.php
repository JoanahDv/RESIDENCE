<?php $title = "settings"; ?>
<?php ob_start(); ?>


<section id="settingsNav">
    <nav>
        <ul class="nav_menu2">
            <li><a class="nav-link" href="#settingsPassword">Edit your password</a></li>
            <li><a class="nav-link" href="#settingsPage">Edit your Profile</a></li>
        </ul>
    </nav>
</section>

<section id="settingsPage">
    <h4>Edit Your Profile Form</h4>
    <div class="container_edit">
        <p id="success">Thank you! <br>Your profile has been edited.</p>
        <form action="index.php?action=settings" method="POST" id="editForm">
            <label for="username"> Name</label><br>
            <input type="text" id="name" name="name" value="<?php echo $user['username']; ?>" required /></br>

            <label for="e-mail">E-mail address</label></br>
            <input type="text" id="e-mail" name="email" value="<?php echo $user['email']; ?>" required></br>

            <button type="submit" name="contact_submit">Save</button>
        </form>
    </div>
</section>
<section id="settingsPassword">

    <div class="container_edit">
        <p id="success">Thank you! <br>Your password has been changed.</p>
        <h4>Edit Your Passoword</h4>
        <form action="index.php?action=settings" method="POST" id="editForm">
            <label for="userpassword"> password</label><br>
            <input type="password" name="currentPassword"><span id="currentPassword" class="required"></span>
            <br>
            New Password:<br>
            <input type="password" name="newPassword"><span id="newPassword" class="required"></span>
            <br>
            Confirm Password:<br>
            <input type="password" name="confirmPassword"><span id="confirmPassword" class="required"></span>
            <br><br>
            <button type="submit" name="contact_submit">Save</button>
        </form>
    </div>

</section>
<?php $content = ob_get_clean(); ?>
<?php require 'views/backend/template.php'; ?>