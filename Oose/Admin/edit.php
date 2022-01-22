<?php 
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
 ?>
 <link href="upload.css" rel="stylesheet">
<div class="container-fluid">
    <div class="card shadow mt-4">
        <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Edit Admin Profile
        </h4></div>
<div class="card-body">
    <?php
    $con=mysqli_connect("localhost","root","","oose");
if(isset($_POST['edit_btn'])){
    $id=$_POST['id'];
    $query="select*from register where id='$id'";
    $run=mysqli_query($con,$query);

    foreach($run as $row){
        ?>
       <form action="code.php" method="POST">
           <input type="hidden" name="id" value="<?php  echo $row['Id']; ?>">
<div class="modal-body mx-3">
        <div class="md-form mb-3">
        <label>Name</label>
          <input type="text" id="orangeForm-name"class="form-control form-control-user" name="name" value="<?php  echo $row['name']; ?>">
         
        </div>
        <div class="md-form mb-3">
        <label>Email</label>
          <input type="email" id="orangeForm-email"class="form-control form-control-user" name="email" value="<?php  echo $row['email']; ?>">
        
        </div>

        <div class="md-form mb-3">
        <label>Password</label>
          <input type="password" id="orangeForm-pass"  name="password" class="form-control form-control-user"
          value="<?php  echo $row['password']; ?>">
           </div>
           <div class="md-form mb-3">
        <label>Usertype</label>
         <select name="usertype" class="form-control form-control-user">
           <option value="admin">Admin</option>
           <option value="user">User</option>
    </select>
           </div>

      </div>

     
     
        <button class="btn btn-success mx-4 mb-4" name="update" type="submit">Update</button>
        <a href="register.php" class="btn btn-danger mb-4">Cancel</a>
    </form>
      <?php
    }
}
?>


</div>
</div>
</div></div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>