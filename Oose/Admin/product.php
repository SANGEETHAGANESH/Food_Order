<?php 
include('includes/header.php'); 
include('includes/navbar.php'); 
 ?>
 <link href="./upload.css" rel="stylesheet">
  <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold mt-3 text-dark">Add product detail</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="height:40px;width:50px; border:none;
        background-color:white;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="pcode.php" method="POST" enctype="multipart/form-data" >
      <div class="modal-body mx-4 mt-3">
        <div class="md-form">
        <label>Name</label>
          <input type="text" id="orangeForm-name" name="name" style="color:black">
               </div><br>
        <div class="md-form">
        <label>Description</label>
          <input type="text" id="orangeForm-email" name="description"style="color:black">
    
        </div><br>

        <div class="md-form">
        <label>Price</label>
          <input type="text" id="orangeForm-pass"  name="price"style="color:black">
          </div><br>
          <div class="md-form">
        <label>Image</label>
          <input type="file" id="orangeForm-pass"  name="image" style="border:none;margin-top:10px;width:200px;color:black;">
          </div>
         
      </div><br>
      <div class="modal-footer d-flex justify-content-center my-3 mx-3">
        <button class="btn btn-success" name="add">Add Product</button>
      </div></form>
    </div>
  </div>
</div>
<div class="container-fluid">
    <div class="card shadow mt-4">
        <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Product
        <button class="btn btn-success btn-rounded mb-2 text-center" data-toggle="modal" data-target="#modalRegisterForm">
            Add Product</button>
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
    $query="select * from product";
    $run=mysqli_query($con,$query);
    ?>
        <table class="table table-bordered" id="database" width="100%" cellspacing="1">
            <thead>
                <tr  style="font-style:italic;color:black;">
                <th>ID</th>
               
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
</tr>
</thead>
<tbody>
    <?php

    if(mysqli_num_rows($run)>0){
        while($row=mysqli_fetch_assoc($run)){
           ?>
           <tr style="font-style:italic;color:black;">
        <td> <?php  echo $row['Id']; ?> </td>
       
        <td> <?php  echo $row['name']; ?> </td>
        <td> <?php  echo $row['description']; ?> </td>
        <td> <?php  echo $row['price']; ?> </td>
        <td>  <?php echo '<img src="upload/'.$row['image'].'" alt="image" width:"100px;" height="130px">' ?> </td>
        <td> 
            <form action="edit_product.php" method="POST">
                <input type="hidden" name="id" value="<?php  echo $row['Id']; ?>">
            <button type="submit" name="edit_btn" class="btn btn-success">Edit</button>
        </form>
        </td>
        <td>
          <form action="pcode.php" method="POST">
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