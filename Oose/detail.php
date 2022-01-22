<?php
session_start();
include('header.php'); 
include('script.php');
?>
<style>
  input{
    color:black;
  }
  </style>

                    <div class="container" style="font-style:italic; ">
                   <div class="m-3">
              <a href="home.php" style="color:black;text-decoration:none;">Home /</a>
                <span><a  href="detail.php" class="text-success">Check Out</a></span></div><hr>
                
                               <?php
                        if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0){
                        ?>
<form action="purchase.php" method="POST" >
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">First name</label>
      <input type="text" class="form-control" name="first" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Last name</label>
      <input type="text" class="form-control" name="last">
    </div>
  </div>
  <div class="form-group ">
      <label for="inputZip">Email</label>
      <input type="email" class="form-control"  name="email">
    </div>
    <div class="form-group">
      <label for="inputZip">Phone Number</label>
      <input type="text" class="form-control" name="phone" >
    </div>
  <div class="form-group">
    <label for="inputAddress2">Street address</label>
    <input type="text" class="form-control" id="inputAddress2"  name="street">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control"  name="city">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control" name="state">
        <option selected>Tamil Nadu</option>
        <option>Kerala</option>
        <option>Karnataka</option>
        <option>Andhra pradesh</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Country</label>
      <input type="text" class="form-control"  name="country" >
    </div>
  
    <div class="form-group col-md-6">
      <label for="inputZip">Pin code</label>
      <input type="text" class="form-control"  name="pin_code">
    </div>
  </div>
 <br>
  <button  style="  height:40px; border-radius:15px; font-style: italic;
    justify-content:center;width:130px;" type="submit" name="purchase" class="btn btn-success">Sign in</button>
</form>
<?php
                        }
                        ?>
                        
</div>
