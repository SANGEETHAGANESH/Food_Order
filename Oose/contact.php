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
                   <div class="m-3"><br>
              <a href="home.php" style="color:black;text-decoration:none;">Home /</a>
                <span><a  href="contact.php" class="text-success">Contact Us</a></span></div><hr>
<form method="POST" >
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
      <label for="inputZip">Phone Number</label>
      <input type="text" class="form-control" name="phone" style="height:150px;">
    </div>
 <br>
  <button  style="  height:40px; border-radius:15px; font-style: italic;
    justify-content:center;width:130px;" type="submit" name="purchase" class="btn btn-success">Sign in</button>
</form>
                        
</div>
