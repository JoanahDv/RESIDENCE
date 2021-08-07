<?php $title = "adminlogin"; ?>
<?php ob_start(); ?>


<section id="admin">
  <h1> Admin Login Form </h1>
  <form action="index.php?action=adminlogin" method="POST">
    <div class="admin_container">

      <label for="uname"><b>USERNAME</b></label><br>
      <input type="username" placeholder="Enter Username" name="uname" required>
      <br>

      <label for="psw"><b>PASSWORD</b></label><br>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <br>
      <br>
      <?php
      if (isset($message)) {
        echo $message;
      }

      ?>
      <input class="loginSubmit" type="submit" />

    </div>

    <br><br>
    <!-- HELP OF PASSWORD IS FORGOTTEN  -->

    <div class="login-help">

      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      <br><br>

      <p>Forgot your password? <a href="#">Click here to reset it</a>.</p>

    </div>

  </form>


</section>

<?php $content = ob_get_clean(); ?>
<?php require 'views/frontend/template.php'; ?>