<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width>, initial-scale=1.0">
    <title>UPDATE</title>
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
            <h1>Our <span>Dishes</span></h1>
            <h4>You must visit in our Store <span1>24 x 7</span2>
            </h4>
        </div>
        <div class="row justify-content-center">
        <div class="col-7  text-center">
            <form enctype="multipart/form-data" method="POST" action="">


            <?php include 'connection.php';
 
 $ids= $_GET['id'];
 echo $ids ;

 $select = "select * from regi where Id=$ids";
 $quer = mysqli_query($con,$select);
 $resu = mysqli_fetch_array($quer);
 
 
 

if (isset($_POST['submit'])) {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $files = $_FILES['image'];
    // $about= $_POST['about'];

    $filename = $files['name'];
    $filepath = $files['tmp_name'];
    $fileerror = $files['error'];

    
     $dests = 'upload/'.$filename;
    move_uploaded_file($filepath , $dests); 


    // $insertquery = "insert into reg(name,email,location)
    //  values('$name','$email','$location')";

    $update = "update regi set Id=$ids , name='$name' , email='$email' , location='$location' , image='$dests' where Id=$ids";

    // $selectemail = "select * from regi where email='$email'";
    // $qe = mysqli_query($con,$selectemail);
    // $emailcount = mysqli_num_rows($qe);
    // if($emailcount > 0) {
    //  }


    $res = mysqli_query($con,$update);

    if ($res) {      
?>
    <script>
        alert("updated successfully");
        location.replace('display.php')
    </script>
      <?php  
    
   // header('location:display.php');
    } }
?>
                
                    <div class="input-name">
                        <h3> Username</h3>
                        <input type="text" value="<?php echo $resu['name'] ; ?>" required name="username">
                    </div>

                    <!-- ---------------------------------------------- -->
                    <div class="row pass mx-5 justify-content-center">
                    <div class="col-6  input-name text-center">
                        <h3> Location</h3>
                        <input type="text" value="<?php echo $resu['location'] ; ?>" required name="location">               
                    </div>
                    <div class="col-6 form-group input-name">
                        <h3> Photo</h3>
                        <input type="file" value="<?php echo $resu['image'] ; ?>" class="form-control" name="image">              
                    </div>
                    </div>



                    <!-- ------------------------------------- -->
                    <div class="input-name">
                        <h3> E-mail</h3>
                        <input type="email" value="<?php echo $resu['email'] ; ?>" required name="email">
                    </div>
                    <!-- <div class="input-name">
                        <h3> Location</h3>
                        <input type="text" value="<?php echo $resu['location'] ; ?>" required name="location">
                    </div> -->
                    <!-- <div class="input-name">
                        <h3> About you</h3>
                        <textarea name="about"></textarea> -->

                        <div class="sub">
                            <button type="submit" class="btn btn-lg  sub" name="submit">Update</button>
                           
                            


                        </div>
                    </div>
                
            </form>
            </div>
    </section>

</body>

</html>

