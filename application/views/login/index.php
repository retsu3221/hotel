<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Silahkan Melakukan Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/login/') ?>stylee.css">
  </head>
  <body>

    <div class="box">
        <div class="cont">
            <nav class="kepala">
                <div class="logo"><a href="#" class="">ROYALE<span>.</span></a></div>
                <div class="list">
                    <ul>
                        <li><a href="<?= base_url('home'); ?>">Home</a></li>
                        <li><a href="<?php echo base_url('home/kamar'); ?>">Kamar</a></li>
                        <li><a href="">Tentang</a></li>
                    </ul>
                </div>
            </nav>
        </div> 
    </div>

    <div class="center">
      <h1>Login</h1>
      
      <form method="post" action="<?php echo base_url('user/login'); ?>">
        <div class="txt_field">
          <input name="email" type="text" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input name="password" type="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <?php echo $this->session->flashdata('message'); ?>
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="#">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>
