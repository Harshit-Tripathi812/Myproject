<?php session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width>, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="chef.css">
    

</head>

<body>

    <section id="dish">
        <!-- <img src="map.jpg"> -->
        <div class="heading text-center">
            <h1>New <span>Registration</span></h1>
            <h4>You can visit in our Store <span1>24 x 7</span2>
            </h4>
        </div>
        <div class="row justify-content-center">
        <div class="col-7  text-center">
            <form enctype="multipart/form-data" action=" <?php htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" >
  <?php ?>
                
                    <div class="input-name">
                        <h3> Username</h3>
                        <input type="text" required name="username">
                    </div>
                   
                    <!-- ------------------ -->
                      
                    <div class="row pass mx-5 justify-content-center">
                    <div class="col-6  input-name text-center">
                        <h3> Location</h3>
                        <input type="text" required name="location">               
                    </div>
                    <div class="col-6 form-group input-name">
                        <h3> Photo</h3>
                        <input type="file" class="form-control" name="image">              
                    </div>
                    </div>

                    <!-- ----------------- -->
                   
                    <!-- <div class="input-name">
                        <h3> Location</h3>
                        <input type="text"  required name="location">
                    </div> -->
                    <div class="input-name">
                        <h3> E-mail</h3>
                        <input type="email"  required name="email">
                    </div>
                    
                    <div class="row pass mx-5 justify-content-center">
                    <div class="col-6  input-name text-center">
                        <h3> Password</h3>
                        <input type="password" required name="password">               
                    </div>
                    <div class="col-6 input-name">
                        <h3> Confirm password</h3>
                        <input type="password" required name="cpassword">               
                    </div>
                    </div>
                        <div class="subs">
                            <button type="submit" class="btn btn-lg bg-primary  sub" name="submit"><span style="color:white; font-weight:bolder">Register</span></button>
                           
                            <a role="button" href="display.php"  class="btn btn-lg bg-info sub1" name="display"><span style="color:white; font-weight:bolder">Display</span></a>
                            <a role="button" href="signUp.php"  class="btn btn-lg bg-danger sub2" name="display"><span style="color:white; font-weight:bolder">Sign Up</span></a>
                        </div>
                    
                
            </form>
            </div>
        </div>
    </section>

</body>

</html>

<?php

if (isset($_POST['submit'])) 
    {   include 'connection.php';
    $name = $_POST['username'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];
    $file = $_FILES['image'];
    // $about= $_POST['about'];

    $selectemail = "select * from regi where email='$email'";
    $qe = mysqli_query($con,$selectemail);
    $emailcount = mysqli_num_rows($qe);
    if($emailcount > 0) {
      ?> <script> alert("email already exist") </script><?php }


      else { 
          $passe = password_hash($pass,PASSWORD_BCRYPT);
          
        //   $cpasse = password_hash($cpass,PASSWORD_BCRYPT);
          if($pass === $cpass)
          {
              $filename = $file['name'];
              $filepath = $file['tmp_name'];
              $fileerror = $file['error'];

              
               $dest = 'upload/'.$filename;
              move_uploaded_file($filepath , $dest); 

              

    $insertquery = "insert into regi(name,email,location,password,image)
     values('$name','$email','$location','$passe','$dest')";

    $res = mysqli_query($con,$insertquery);

    if ($res) {
?>
    <script>
        alert("Registered successfully")
    </script>
      <?php } 

    }
 else{ ?>
    <script>
        alert("passwords do not match")
    </script>
      <?php  } }}
?>
