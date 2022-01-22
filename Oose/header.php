<!DOCTYPE html>
<html lang="en">
<head>
  <title>Foodpicky</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="homepage.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <?php
                        $count=0;
                        if(isset($_SESSION['cart'])){
                            $count=count($_SESSION['cart']);
                        }


?>   
  <body style="font-size:18px;">
      <div  style="background-color:black;" class="navbar navbar-expand-md sticky-top navbar-dark">
          <div class="navbar-brand">
              <img src="Image/foodlogo.png" id="image" style="height:30px;">
          </div>
          <button class="navbar-toggler" data-target="#data" data-toggle="collapse">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="data">
              <ul class="navbar-nav m-3" style="font-size:20px;color:white;">
                  <li class="nav-item"style="margin-left:20px;"><a class="nav-link text-white" href="home.php">Home</a></li>
                  <li class="nav-item"style="margin-left:20px;"><a class="nav-link text-white" href="userproduct.php">Menu</a></li>
                  <li class="nav-item"style="margin-left:20px;"><a class="nav-link text-white" href="admin/login.php">Sign in/up</a></li>
                <li class="nav-item"style="margin-left:20px;"><a class="nav-link text-white" href="contact.php">Contact us</a></li>
                <form action="search.php" method="Get" class="mx-4 my-2">
                <button type="submit" style="position:absolute;border:none;background-color:white;border-radius:5px 0px 0px 5px;"><i class="fa fa-search"></i></button>
                    <input type="text" name="search" style="margin-left:30.5px; border:none;width:280px;border-radius:0px 5px 5px 0px;">
                    
</form>


<a href="view.php" style="font-style:italic;" class="btn btn-success my-1 mx-3">My cart (<?php echo $count; ?>)</a>
                  
                 </ul>
          </div>
      </div>
    