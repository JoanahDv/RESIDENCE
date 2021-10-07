<section id="settingsPassword">
    <div class="container_edit">
        <p id="successful">Thank you! <br>Your password has been changed.</p>
        <h1>Edit Your Passoword</h1>
        <form action="index.php?action=settings" method="POST" id="editPasswordForm">
            <label for="passwordNew"> password</label><br>
            <input type="password" id="passwordNew" name="currentPassword"><span id="Password" class="required"></span>
            <br>
            New Password:<br>
            <input type="password" name="newPassword"><span id="newPassword" class="required"></span>
            <br>
            Confirm Password:<br>
            <input type="password" name="confirmPassword"><span id="confirmPassword" class="required"></span>
            <br>
            <button type="submit" name="contact_submit">Save</button>
        </form>
    </div>
</section>
 