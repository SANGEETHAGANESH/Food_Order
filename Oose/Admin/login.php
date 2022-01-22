<?php
session_start();
include('includes/header.php');
?>
<link href="upload.css" rel="stylesheet">
<div class="container">
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-6">

        <div class="card o-hidden border-0 shadow-lg" style="margin-top:100px;">
            <div class="card-body p-0 shadow">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-md-5">
                        <div class="p-5">
                       
            <div class="container">
            <h2 class="text-center" style="font-family:Brush Script MT, Brush Script Std, cursive;font-size: 60px;
            text-shadow:2px 2px rgb(170, 167, 167)"> Login Here !</h2>

          <hr>
          <p class="text-center">Kindly fill the form then login your the account</p>
          <form action="code.php" method="POST">
          <label>Email</label><br><input type="text" name="email" required><br><br>
               <label>Password</label><br><input type="password" name="password" required style="color:black;"><br><br><br>
                 <button id="but" class="btn btn-success"type="submit" name="login_btn">Sign In</button><br><br></div>
        </form>
                            
                           
                        </div>
                    </div>
                    <div class="col-md-6">
                        
                       <img src="upload/login.jpg" style="heigth:100%;width:650px;" >
         
                    
                </div>
            </div>
        </div>

    </div>

</div>

</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>