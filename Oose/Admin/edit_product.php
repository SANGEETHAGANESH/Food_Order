<?php 
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
 ?>
 <link href="upload.css" rel="stylesheet">
<div class="container-fluid">
    <div class="card shadow mt-4">
        <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Edit product detail
        </h4></div>
<div class="card-body">
    <?php
    $con=mysqli_connect("localhost","root","","oose");
if(isset($_POST['edit_btn'])){
    $id=$_POST['id'];
    $query="select*from product where id='$id'";
    $run=mysqli_query($con,$query);

    foreach($run as $row){
        ?>
       <form action="pcode.php" method="POST" enctype="multipart/form-data">
           <input type="hidden" name="id" value="<?php  echo $row['Id']; ?>">
<div class="modal-body mx-3">
        <div class="md-form mb-3">
        <label>Name</label>
          <input type="text" id="orangeForm-name"class="form-control form-control-user" name="name" value="<?php  echo $row['name']; ?>">
         
        </div>
        <div class="md-form mb-3">
        <label>Description</label>
          <input type="text" id="orangeForm-email"class="form-control form-control-user" name="description" value="<?php  echo $row['description']; ?>">
        
        </div>

        <div class="md-form mb-3">
        <label>Price</label>
          <input type="text" id="orangeForm-pass"  name="price" class="form-control form-control-user"
          value="<?php  echo $row['price']; ?>">
           </div>
           <div class="md-form mb-3">
        <label>Image</label>
          <input type="file" id="orangeForm-pass"  name="image" class="form-control form-control-user"
          value="<?php  echo $row['image']; ?>">
           </div>
          

      </div>

     
     
        <button class="btn btn-success mx-4 mb-4" name="update" type="submit">Update</button>
        <a href="product.php" class="btn btn-danger mb-4">Cancel</a>
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