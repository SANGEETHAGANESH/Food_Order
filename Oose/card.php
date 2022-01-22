<?php
session_start();
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="oose";
    
    $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
    $query="select * from product";
    $run=mysqli_query($conn,$query);
    if(isset($_POST['card_remove'])){
        foreach($_SESSION['cart'] as $key => $row){
            if($row['name']==$_POST['name']){
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']);
                header('Location:view.php');
            }
    
        }
    }
    if(isset($_Get['quantity'])){
        foreach($_SESSION['cart'] as $key => $row){
                $row['quantity']=$_GET['quantity'];
                header('Location:view.php');

        }
    }
?>
