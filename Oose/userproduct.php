<?php
session_start();
include('header.php'); 
?>
<link rel="stylesheet"type="text/css" href="product.css">
<div id="item" class="text-center">
    <img src="Image/item-icon.png">
    <h1> MENU ITEMS</h1>
        <p>The various dishes are waiting for your coming to enjoy its..</p><br>
</div>
<div class="container">
    <p class="text-danger text-center mt-5">
        OUR MENU
</p>
<h2 class="text-center" style="font-family:Brush Script MT, Brush Script Std, cursive;font-size: 70px;text-shadow:2px 2px rgb(170, 167, 167)"> Tasty And Good Price</h2>

</div>

                      
    <div class="container">
    <div class="row">
    <?php
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="oose";
    
    $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(isset($_POST["add"])){
        if(isset($_SESSION["cart"])){
            $id_array=array_column($_SESSION["cart"],"id");
            if(!in_array($_POST["id"],$id_array)){
                $index=count($_SESSION["cart"]);
                $item=array(
                    'id'=> $_POST['id'],
                    'name'=> $_POST['name'],
                    'price'=> $_POST['price'],
                    'image'=> $_POST['image'],
                    'quantity'=>1
    
                );
                $_SESSION["cart"][$index]=$item;
                echo "<script>alert('product added');</script>";
                header("Location:view.php");

            }
            else{
                echo "<script>alert('product already added');</script>"; 
            }


       
        }
        else{
            $item=array(
                'id'=> $_POST['id'],
                'name'=> $_POST['name'],
                'price'=> $_POST['price'],
                'image'=> $_POST['image'],
                'quantity'=>1
            );
            $_SESSION["cart"][0]=$item;
            echo "<script>alert('product added');</script>";
            header("Location:view.php");
        }
    
    }
     
    $query='select * from product ';
    $run=mysqli_query($conn,$query);
    if(mysqli_num_rows($run)>0){

    while($row=mysqli_fetch_array($run)){
?>
<div class="col-12 col-lg-6" >
<form method="POST" action="userproduct.php?action=add&Id=<?php echo $row["Id"] ?>">
<div class="card mt-5 shadow" style="font-style:italic;">  
<div class="row no-gutters">
    <div class=" col-sm-4 col-md-5 col-lg-4">  
        <img src="Admin/upload/<?php echo $row["image"]; ?>" alt="image"  style="height:140px; margin-left:10px; margin-top:60px;
        width:180px;background-color:white;">
    </div>
    <div class="col-sm-8 col-md-7 col-lg-8">
    <div class="card-body text-center">
            <h4 class="card-title text-center" > <?php echo $row["name"]; ?> </h4> 
            <p class="text-center"> <?php echo $row["description"]; ?> </p> 
            <h5 class="text-center text-danger">Price: <?php echo $row["price"]; ?> </h5> 
            <button type="submit" name="add" class="btn btn-success text-center mb-3"
            style="  height:40px; border-radius:10px; font-style: italic;
    justify-content:center;width:130px;" >Add to cart</button>
            <input type="hidden" name="id" value="<?php  echo $row['Id']; ?>"> 
            <input type="hidden" name="name" value="<?php  echo $row['name']; ?>">
            <input type="hidden" name="price" value="<?php  echo $row['price']; ?>">
            <input type="hidden" name="image" value="<?php  echo $row['image']; ?>">
         </div>
    </div>
    </div></div>
    </form>
    </div>
<?php
    }
}
?>
 

</div>
   

</div>

        
<?php
include('footer.php'); 
?>