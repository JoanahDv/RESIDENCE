<?php $title = "profileEdit"; ?>
<?php ob_start(); ?>
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
 
<?php $content = ob_get_clean(); ?>
<?php require 'views/backend/template.php'; ?>
