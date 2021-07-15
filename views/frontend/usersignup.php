<?php $title = "userlogin"; ?>
<?php ob_start(); ?>
<section id="signup">
    <div class="main">
        <ul class="formHeader">
            <li class="tab"><a href="index.php?action=usersignup">Sign Up</a></li>
        </ul>
        <h3 class="logintexts">Welcome</h3>
        <form class="form1" action="index.php?action=usersignup" method="POST">
            <input class="user " type="text" placeholder="Username" name="uname"/>
            <i class="fas fa-user"></i>


            <input class="pass" type="password" placeholder="Password" name="psw"/>
            <i class="fas fa-lock"></i>



            <!-- 
            <input class="passVerif " type="text" placeholder="confirm password" name="psw_confirmation" />
            <i class="fas fa-lock"></i>
-->
            <input class="submit" type="submit" />

            <p class="logintexts" class="forgot"><a href="#">Forgot Password?</p>
            <p class="logintexts" class="tab active"><a href="index.php?action=userlogin">Login</a></p>

        </form>
    </div>
    <section>
        <?php $content = ob_get_clean(); ?>
        <?php require 'views/frontend/template.php'; ?>