<?php $title = "Account"; ?>
<?php ob_start(); ?>

<section id="userlogin">

    <div class="main">
        <ul class="formHeader">
            <li class="tab"><a href="index.php?action=userlogin">Log In</a></li>
        </ul>
        <!-- <p class="logintexts" class="sign">Log in</p> -->
        <h3 class="logintexts">Welcome back! </h3>

        <form class="form1" action="index.php?action=userlogin" method="POST">
            <input class="un " type="text" placeholder="Username">
            <input class="pass" type="password" placeholder="Password">
            <a class="submit">Sign in</a>
            <p class="logintexts" class="forgot"><a href="#">Forgot Password?</p>
            <p class="logintexts" class="tab active"><a href="index.php?action=usersignup">Sign Up Here</a></p>
        </form>

    </div>
    </div>
</section>
<section id="signup">
    <div class="main">
        <ul class="formHeader">
            <li class="tab"><a href="index.php?action=usersignup">Sign Up</a></li>
        </ul>
        <h3 class="logintexts">Welcome</h3>
        <form class="form1" action="index.php?action=usersignup" method="POST">
            <input class="user " type="text" placeholder="Username">
            <input class="email " type="text" placeholder="e-mail">
            <input class="pass" type="password" placeholder="Password">
            <input class="passVerif " type="text" placeholder="confirm password">
            <a class="submit">Sign in</a>
            <p class="logintexts" class="forgot"><a href="#">Forgot Password?</p>
            <p class="logintexts" class="tab active"><a href="index.php?action=userlogin">Login</a></p>

        </form>
    </div>
    <section>
        <?php $content = ob_get_clean(); ?>
        <?php require 'views/frontend/template.php'; ?>