<?php $title = "Contact"; ?>
<?php ob_start(); ?>

<div id="contact_us">

    <div class="container_contact">
        <h1>Have some questions or a feedback?</h1><br>
         
        <p id="success">Thank you! <br>Your Message has been sent.</p>

        <form action="/index.php?action=contact" method="POST" id="contactForm">

            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="firstname" placeholder="Your name.." required>

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

            <label for="e-mail">E-mail address</label>
            <input type="text" id="e-mail" name="email" placeholder="john@example.com" required>

            <label for="topic">Subject</label>
            <input type="text" id="topic" name="subject" placeholder="subject" required>

            <label for="messagetext">Message</label>
            <textarea id="messagetext" name="messagebox" placeholder="Write something.." style="height:200px" required></textarea>

            <input type="checkbox">
            <label> I have read and agree to the Privacy Policy.</label>
            <br>

            <button type="submit" name="contact_submit"> Send Message</button>
            
        </form>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require 'views/frontend/template.php'; ?>
 