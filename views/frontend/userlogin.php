<?php $title = "userlogin"; ?>
<?php ob_start(); ?>

<section id="userlogin">

    <div class="main">
        <ul class="formHeader">
            <li class="tab"><a>Log In</a></li>
        </ul>
        <h3 class="logintexts">Welcome back!</h3>

        <form class="form1" action="index.php?action=userlogin" method="POST">
            <input class="un" type="text" placeholder="username" name="uname">
            <i class="fas fa-user"></i>

            <input class="pass" type="password" placeholder="Password" name="psw">
            <i class="fas fa-lock"></i>
            <?php
            if (isset($message)) {
            ?>
                <br>
                <?php
                echo $message;
                ?>
                <br>
            <?php
            }
            ?>
            <input class="submit" type="submit"/>
        <hr>
            <p class="logintexts" class="tab active">Not a member? Click here to <a href="index.php?action=usersignup">Sign Up </a></p>
        </form>

    </div>
    </div>
</section>
<?php $content = ob_get_clean(); ?>
<?php require 'views/frontend/template.php'; ?>