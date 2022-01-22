<?php 
include('includes/header.php'); 
include('includes/navbar.php'); 
 ?>
 <div class="container-fluid" >
    <div class="card shadow mt-4">
        <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">User Detail
        </h4></div>
<div class="card-body">
 <table class="table table-bordered" id="database" width="100%" cellspacing="1" style="font-style:italic; color:black;">
            <thead>
                <tr>
                <th>Order ID</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Street</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>Pin code</th>
                    <th>View</th>

</tr>
</thead>
<tbody>
    <?php
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="oose";
    $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
    $query="select * from purchase";
    $user_result=mysqli_query($conn,$query);
    while($user_fetch=mysqli_fetch_assoc($user_result)){?>
        <tr>
        <td><?php  echo $user_fetch['order_id']; ?></td>
        <td><?php  echo $user_fetch['first']; ?></td>
        <td><?php  echo $user_fetch['last']; ?></td>
        <td><?php  echo $user_fetch['email']; ?></td>
        <td><?php  echo $user_fetch['phone']; ?></td>
        <td><?php  echo $user_fetch['street']; ?></td>
        <td><?php  echo $user_fetch['city']; ?></td>
        <td><?php  echo $user_fetch['state']; ?></td>
        <td><?php  echo $user_fetch['country']; ?></td>
        <td><?php  echo $user_fetch['pin_code']; ?></td>
        <td>
        <form action="confirm_order.php" method="POST">
            <input type="hidden" name="order" value="<?php  echo $user_fetch['order_id']; ?>">
            <button type="submit" name="view" class="btn btn-success">View Order</button>
        </form>
        </td></tr>
        <?php
    }


    ?>
</tbody>
</table>
</div>
</div></div></div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>