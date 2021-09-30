<section id="settingsPage">
    <div class="container_edit">
    <h4>Edit Your Profile Form</h4>
        <p id="success">Thank you! <br>Your profile has been edited.</p>
        <form action="index.php?action=settings" method="POST" id="username">
            <label for="name"> Name</label><br>
            <input type="text" id="name" name="name" value="<?php echo $user['username']; ?>" required />
            <button type="submit" name="contact_submit">Save</button>
        </form>
    </div>
</section>
 
