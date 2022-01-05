<?php

session_start();

if(isset($_POST['join'])){
    $first_name = $_POST ['first_name'];
    $last_name = $_POST ['last_name'];
    $email = $_POST ['email'];
    $password = $_POST ['password'];
    $confirm_password = $_POST ['confirm_password'];


    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@',$password);
    $spacial_char = preg_match('@[#,$,%,^,&,*]@', $password);

    if(empty ($first_name)){
        $_SESSION['first_name_error'] = "First Name Field is Required.";
        header('location: index.php');
    }else if(empty($last_name)){
        $_SESSION['last_name_error'] = "Last Name Field is Required.";
        header('location: index.php');
    }else if(empty($email)){
        $_SESSION['email_error'] = "Email Field is Required.";
        header('location: index.php');
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['email_error'] = "Please Provide a Validate Email.";
        header('location: index.php');
    }else if(empty($password)){
        $_SESSION['password_error'] = "Password Field is Required.";
        header('location: index.php');
    }else if(!$uppercase || !$lowercase || !$number || !$spacial_char || strlen($password) < 8){
        $_SESSION['password_error'] = "1. Password must be a uppercase 2. Password must be a lowercase. 3. Password must be a number 4. Password must be spacial character and greater then 8 character.";
        header('location: index.php');
    }else if(empty($confirm_password)){
        $_SESSION['conpassword_error'] = "Confirm Password Field is Required.";
        header('location: index.php');
    
    }else if($password != $confirm_password){
        $_SESSION['conpassword_error'] = "Does not match both password.";
        header('location: index.php');

    }else{
       ?>
       
       <!DOCTYPE html>
       <html lang="en">
       <head>
           <meta charset="UTF-8">
           <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <title>Profile</title>
           <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
       </head>
       <body>
           <div class="container">
               <div class="row">
                   <div class="col-lg-6 m-auto mt-2">
                       <div class="card">
                           <div class="card-header">
                               <h2>Profile</h2>
                           </div>
                           <div class="card-body">
                               <table class="table table-responsive table-stripe table-hovered">
                                   <thead>
                                       <tr>
                                           <th>First Name</th>
                                           <th>Last Name</th>
                                           <th>Email</th>
                                           <th>password</th>

                                       </tr>
                                   </thead>
                                   <tbody>
                                       <tr>
                                           <td><?php echo $first_name; ?></td>
                                           <td><?php echo $last_name; ?></td>
                                           <td><?php echo $email; ?></td>
                                           <td><?php echo $password; ?></td>
                                       </tr>
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
       </body>
       </html>
       
       
       
       <?php
    }



}



?>