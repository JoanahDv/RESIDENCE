<?php $title = "passwordEdit"; ?>

<?php ob_start(); ?>
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