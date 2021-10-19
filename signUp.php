

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width>, initial-scale=1.0">
    <title>SignUp </title>
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
            <h1>Sign <span >UP</span></h1>
            <h4>You can visit in our Store <span1>24 x 7</span2>
            </h4>
        </div>
        <div class="row justify-content-center">
        <div class="col-7  text-center">
            <form action=" <?php htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" >               
                   
                    <div class="input-name">
                        <h3> E-mail</h3>
                        <input type="email" required name="email">
                    </div> 
                    <div class="pass mx-5 row   justify-content-center">
                    <div class="col-6  input-name text-center">
                        <h3> Password</h3>
                        <input type="password" required name="password">               
                    </div>
                   
                    </div>
                 <button type="submit" class="btn btn-lg bg-primary  sub" name="submit"><span style="color:white; font-weight:bolder">Log In</span></button>
               
                        
                
            </form>
            </div>
        </div>
    </section>

</body>

</html>

<?php

if (isset($_POST['submit'])) 
    {   include 'connection.php';
   
    $email = $_POST['email'];
    
    $pass = $_POST['password'];
    
    // $about= $_POST['about'];

    $selectemail = "select * from regi where email='$email'";
    $qe = mysqli_query($con,$selectemail);
    $emailcount = mysqli_num_rows($qe);
    if($emailcount > 0) {
         $pas = mysqli_fetch_array($qe);
//$pus = $pas['password'];
         $puss = $pas['Id'];
         echo $puss;

       $check = password_verify($pass,$pus);
      if($check) 
     { header('location:page.php?id=echo "$puss"');} 
     else {?>  <script> alert("Wrong Password") </script> 
        <?php }


      
      } 
    
    else{  ?> <script> alert("Email does not exist") </script> <?php }}
?>