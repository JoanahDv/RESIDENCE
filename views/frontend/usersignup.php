<?php $title = "userlogin"; ?>
<?php ob_start(); ?>
<section id="signup">
    <div class="main">
        <ul class="formHeader">
            <li class="tab"><a>Sign Up</a></li>
        </ul>
        <h3 class="logintexts">Welcome</h3>
        <form class="form1" action="index.php?action=usersignup" method="POST">
            <input class="user " type="text" placeholder="Username" name="uname" />
            <i class="fas fa-user"></i>

            <input class="pass" type="password" placeholder="Password" name="psw" />
            <i class="fas fa-lock"></i>

            <input class="submit" type="submit" />
            <br>
            <p class="logintexts" class="tab active">Click here to <a href="index.php?action=userlogin">Login</a></p>

        </form>
    </div>
    <section>
        <?php $content = ob_get_clean(); ?>
        <?php require 'views/frontend/template.php'; ?>