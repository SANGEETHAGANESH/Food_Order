<?php
session_start();
 $host="localhost";
 $dbusername="root";
 $dbpassword="";
 $dbname="oose";
 
 $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
if(isset($_POST['add'])){
    $name=$_POST['name'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    $image=$_FILES["image"]['name'];

    $query="insert into product(name,description,price,image) values ('$name','$description','$price','$image')";
    $run=mysqli_query($conn,$query);
    if($run)
    {
        move_uploaded_file($_FILES["image"]["temp"],"upload/".$_FILES["image"]["name"]);
        $_SESSION['success'] ="Successfully";
        header('Location:product.php');
    }
    else
    {
        $_SESSION['status'] ="Admin profile not added";
        header('Location:product.php');
    }
}



if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    $image=$_FILES["image"]['name'];
    $update="update product set name='$name' , description='$description' , price='$price',image='$image' where id='$id'";
    $run=mysqli_query($conn,$update);

    if($run){
        move_uploaded_file($_FILES["image"]["temp"],"upload/".$_FILES["image"]["name"]);
        $_SESSION['success'] ="Your data is updated";
        header('Location:product.php');

    }
    else
    {
        $_SESSION['status'] ="Your data is not updated";
        header('Location:product.php');
    }
}
if(isset($_POST['delete_btn'])){
    $id=$_POST['delete_id'];
    $delete="delete from product where id='$id'";
    $run=mysqli_query($conn,$delete);
    if($run){
        $_SESSION['success'] ="Your data is deleted";
        header('Location:product.php');

    }
    else
    {
        $_SESSION['status'] ="Your data is not deletedd";
        header('Location:product.php');
    }

}
?>