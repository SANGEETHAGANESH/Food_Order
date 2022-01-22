<?php
session_start();
include('header.php'); 
include('script.php');
?>
<link rel="stylesheet"type="text/css" href="product.css">
<?php
                        $count=0;
                        if(isset($_SESSION['cart'])){
                            $count=count($_SESSION['cart']);
                        }


?> 
<div class="container">
    <p class="text-danger text-center mt-5">
        Your Shopping Cart
</p>
<h2 class="text-center" style="font-family:Brush Script MT, Brush Script Std, cursive;
font-size: 70px;text-shadow:2px 2px rgb(170, 167, 167)">
<?php echo $count; ?> Item In Your Cart </h2>

</div>
                    <div class="container">
                          <table class="table table-bordered shadow" width="100%" style="margin-top:50px;">
                     <thead>
                <tr style="font-style:italic;">
                    <th>Name</th>
                    <th>Image</th>
                    <th>Item Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Remove</th>
</tr></thead>
<?php
if(!empty($_SESSION["cart"])){
    $total_price = 0;
    foreach($_SESSION["cart"]as $keys=>$row){
        $amt=$row['price']*$row['quantity'];
        $total_price += $amt;
       ?>
       <tbody>
         <tr style="font-style:italic;">
         <td> <?php  echo $row['name']; ?> </td>
         <td>  <?php echo '<img src="Admin/upload/'.$row['image'].'" alt="image" width:"100px;" height="130px">' ?> </td>
         <td> <?php  echo $row['price']; ?> <input type='hidden' class='iprice' value=' <?php  echo $row['price']; ?>'></td>
         <td> 
             <form method="GET" action="card.php">
             <input type="hidden" name="name" value="<?php  echo $row['name']; ?>">
                          <input class="form-control" id="iquantity" type="number" value="1" min="1"name="quantity"
                          style="width:80px;"></form>
            </td>
            <td><?php
              echo $amt;

             ?>
            </td>
           <td> 
               <form action="card.php" method="POST">
               <input type="hidden" name="name" value="<?php  echo $row['name']; ?>">
           <button class="btn btn-danger" style="font-style:italic;"name="card_remove">Remove</button>
    </form>
        </td>
    </tr>
    <?php
    }
}
?>
</tbody>
</table>
</div>
<div class="container">
    <h3 style="font-style:italic;" class="m-3">Total: <?php
     
     echo $total_price; ?></h3>

    <form action="userproduct.php" method="POST">
    <button style="float:left;font-style:italic;" class="btn btn-success" name="checkout">Add Another Product</button>
</form>
<form action="detail.php" method="POST">
    <button style="float:right;font-style:italic;" class="btn btn-success" name="checkout">checkout</button>
</form>
</div>
<br><br><br>
</div>
</body>
</html>