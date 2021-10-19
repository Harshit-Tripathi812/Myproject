<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width>, initial-scale=1.0">
    <title>display page</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="chef.css">
    

</head>

<body>
  <section class="main-div text-center ">
     <div> <h3>Display all registration</h3> </div>
      <div class="container centerdiv">
          <table class="table table-bordered table-striped table-hover ">
              <thead>
                  <tr>
                      <th> No.</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Location</th>
                      <th>Image</th>
                      <th colspan="2">Modify</th>
                  </tr>
              </thead>
              <tbody>
                  <?php include 'connection.php'; 
                  
                     $selectquery = "select * from regi" ;
                       $query = mysqli_query($con,$selectquery);
                       $re = mysqli_num_rows($query);
                       if($re==0) { ?> <script> alert("No Registered Data")</script> <?php } 
                       while($res = mysqli_fetch_array($query)) {?>
                  <tr>
                      <td><?php  echo $res['Id'] ;?></td>
                      <td> <?php echo $res['name'] ; ?></td>
                      <td> <?php echo $res['email'] ; ?></td>
                      <td><?php echo $res['location'] ; ?></td>
                      <td style="position:relative;"><img src="<?php echo $res['image'] ; ?>"></td>
                      <td><a href="update.php?id=<?php  echo $res['Id'] ;?>" ><i class="fa fa-edit" data-toggle="tooltip" data-placement="bottom" title="update"></i></a></td>
                      <td><a href="delete.php?id=<?php echo $res['Id'] ; ?>"><i class="fa fa-trash" data-toggle="tooltip" data-placement="bottom" title="delete"></i></a></td>
                  </tr>
                  <?php }
                 ?>
              </tbody>
          </table>
      </div>
  </section>

</body>
</html>