<?php 
include('includes/header.php'); 
include('includes/navbar.php'); 
 ?>
 <div class="container">
    <div class="card shadow mt-5">
        <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Ordered Product
        </h4></div>
<div class="card-body">
 <table class="table table-bordered" id="database" width="100%" cellspacing="1" style="font-style:italic; color:black;">
            <thead>
                <tr>
                <th>Serial No</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
</tr>
</thead>
<tbody>
    <?php
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="oose";
    $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
    $id=$_POST["order"];
    $query="select * from user_order where id='$id'";
    $order_result=mysqli_query($conn,$query);
    while($order_fetch=mysqli_fetch_assoc($order_result)){
       ?>
        <tr>
        <td>1</td>
        <td><?php echo $order_fetch["name"] ?></td>
        <td><?php echo $order_fetch["price"] ?></td>
        <td>1</td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table></div></div></div></div>
 </div>


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>