<?php
session_start();
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="oose";

$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(isset($_POST['purchase'])){
        $first=$_POST['first'];
        $last=$_POST['last'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $street=$_POST['street'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $country=$_POST['country'];
        $pin_code=$_POST['pin_code'];
        $query="insert into purchase(first,last,email,phone,street,city,state,country,pin_code) 
        values ('$first','$last','$email','$phone','$street','$city','$state','$country','$pin_code')";
        $run=mysqli_query($conn,$query);
        if($run)
        {
           $id=mysqli_insert_id($conn);
           $insert="insert into user_order(id,name,price) values (?,?,?)";
           $stmt=mysqli_prepare($conn,$insert);
           if($stmt){
               mysqli_stmt_bind_param($stmt,"iss",$id,$name,$price);
               foreach($_SESSION["cart"]as $keys=>$row){
                $name=$row['name'];
                $price=$row['price'];
                mysqli_stmt_execute($stmt);
               }
               unset($_SESSION['cart']);
               echo "<script>alert('order placed');
               </script>";

           }
           else{
               echo "failed";
           }
        }
        else
        {
            echo "fails";
        }
    }
    




?>