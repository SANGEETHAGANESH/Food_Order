<?php 
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
 ?>
 <link href="style.css" rel="stylesheet" type="text/css">
 <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold mt-3 text-dark">Add profile</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="height:40px;width:50px; border:none;
        background-color:white;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST" >
      <div class="modal-body mx-4 mt-3">
        <div class="md-form">
        <label>Name</label>
          <input type="text" id="orangeForm-name" name="name"style="color:black">
               </div><br>
        <div class="md-form">
        <label>Email</label>
          <input type="email" id="orangeForm-email" name="email"style="color:black">
    
        </div><br>

        <div class="md-form">
        <label>Password</label>
          <input type="password" id="orangeForm-pass"  name="password"style="color:black">
          </div>
          <input type="hidden" name="usertype" value="admin">

      </div>
      <div class="modal-footer d-flex justify-content-center my-3 mx-3">
        <button class="btn btn-success" name="register">Register</button>
      </div></form>
    </div>
  </div>
</div>


<div class="container-fluid">
    <div class="card shadow mt-4">
        <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Profile
        <button class="btn btn-success btn-rounded mb-2 text-center" data-toggle="modal" data-target="#modalRegisterForm">
            Add Profile</button>
        </h4></div>
<div class="card-body">

<?php
if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
    echo  '<h2> '.$_SESSION['success'].' </h2>';
    unset($_SESSION['success']);
}
?>

    <div class="table-responsive">

    <?php
    $con=mysqli_connect("localhost","root","","oose");
    $query="select * from register";
    $run=mysqli_query($con,$query);
    ?>
        <table class="table table-bordered" id="database" width="100%" cellspacing="1">
            <thead>
                <tr>
                <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Usertype</th>
                    <th>Edit</th>
                    <th>Delete</th>
</tr>
</thead>
<tbody>
    <?php

    if(mysqli_num_rows($run)>0){
        while($row=mysqli_fetch_assoc($run)){
           ?>
           <tr>
        <td> <?php  echo $row['Id']; ?> </td>
        <td> <?php  echo $row['name']; ?> </td>
        <td> <?php  echo $row['email']; ?> </td>
        <td> <?php  echo $row['password']; ?> </td>
        <td> <?php  echo $row['usertype']; ?> </td>
        <td> 
            <form action="edit.php" method="POST">
                <input type="hidden" name="id" value="<?php  echo $row['Id']; ?>">
            <button type="submit" name="edit_btn" class="btn btn-success">Edit</button>
        </form>
        </td>
        <td>
          <form action="code.php" method="POST">
            <input type="hidden" name="delete_id"  value="<?php  echo $row['Id']; ?>">
            <button type="submit" name="delete_btn"class="btn btn-danger">Delete</button>
        </form>
        </td>
       
    </tr>
    <?php
           
        }
    }
    else{
        echo "No Record Found";
    }
    ?>
   
</tbody>
</table>
</div>
</div>
</div>
</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>