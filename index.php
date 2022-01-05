<?php 
session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

    <title>Sign-up from</title>
  </head>
  <body>
    <section class="container   col-xl-4 justify-content-center">
      <div class="sign-up">
      
      <div class="row shadow p-5 mb-5 rounded">
        <img src="images/freelancer-logo.svg">
        <h1 class="text-center mb-4">Sign-up from</h1>
        <a href="https://www.facebook.com/" target="_blank" class="btn btn-primary"> Continue with Facebook</a>
        <div class="heading">
          <h6 class="text-center my-4"><span>OR</span></h6>
        </div>
        
        <form class="row" action="POST.php" method="POST">
          <div class="col-xl-6 mb-2">
            <label for="fname">First Name</label>
            <input name="first_name" type="text" class="form-control" id="fname">
            <?php if(isset($_SESSION['first_name_error'])){ ?>
              <div class="alert alert-danger" role="alert">
             <?=$_SESSION['first_name_error']; ?>
              </div>
             <?php } unset($_SESSION['first_name_error']); ?>
            
          </div>

          <div class="col-xl-6 mb-2">
            <label for="lname">Last Name</label>
            <input  name="last_name" type="text" class="form-control" id="lname">
            <?php if (isset($_SESSION['last_name_error'])){  ?>
              <div class="alert alert-danger" role="alert">
              <?= $_SESSION['last_name_error']; ?>
              </div>
            <?php  } unset($_SESSION['last_name_error']); ?>
          </div>

        <div class="col-xl-12 mb-2">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <?php if(isset($_SESSION['email_error'])){  ?>
            <div class="alert alert-danger" role="alert">
          <?= $_SESSION['email_error']; ?>
            </div>
          <?php } unset($_SESSION['email_error']); ?>
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="col-xl-6 mb-2" style="position: relative;">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="password_hint">
          <i class="fa fa-eye eye-icon" style="position: absolute; top:43px; right:20px;"></i>
                    <?php if(isset($_SESSION['password_error'])){ ?>
                      <div class="alert alert-danger" role="alert">
                      <?= $_SESSION['password_error']; ?>
                      </div>
                    <?php } unset($_SESSION['password_error']); ?>
        </div>

        <div class="col-xl-6 mb-2">
          <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
          <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword2">
          <?php if(isset($_SESSION['conpassword_error'])){   ?>
            <div class="alert alert-danger" role="alert">
                      <?= $_SESSION['conpassword_error'] ?>
            </div>
            <?php } unset($_SESSION['conpassword_error']); ?>
        </div>

        <button type="submit" name="join" class="btn btn-primary d-block w-100">Join Freelancer</button>
      </form>

      <p class="text-center my-4">Already have an account? <a href="index.html">Log in</a></p>
        
      </div>
      </div>
    </section>


    <script>
        let eye = document.querySelector('.eye-icon');
        let passwordField = document.getElementById('password_hint');

        eye.addEventListener('click', () => {
            if(passwordField.type == 'password'){
                passwordField.type = 'text';
            }else{
                passwordField.type = 'password';
            }
        })
    </script>

    

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
  </body>
</html>
