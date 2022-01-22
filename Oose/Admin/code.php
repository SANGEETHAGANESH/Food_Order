<?php
session_start();
 $host="localhost";
 $dbusername="root";
 $dbpassword="";
 $dbname="oose";
 
 $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
if(isset($_POST['register'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $usertype=$_POST['usertype'];

    $query="insert into register(name,email,password,usertype) values ('$name','$email','$password','$usertype')";
    $run=mysqli_query($conn,$query);
    if($run)
    {
        $_SESSION['success'] ="Admin profile added";
        header('Location:register.php');
    }
    else
    {
        $_SESSION['status'] ="Admin profile not added";
        header('Location:register.php');
    }
}

if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $usertype=$_POST['usertype'];
    $update="update register set name='$name' , email='$email' , password='$password',usertype='$usertype' where id='$id'";
    $run=mysqli_query($conn,$update);

    if($run){
        $_SESSION['success'] ="Your data is updated";
        header('Location:register.php');

    }
    else
    {
        $_SESSION['status'] ="Your data is not updated";
        header('Location:register.php');
    }
}


if(isset($_POST['delete_btn'])){
    $id=$_POST['delete_id'];
    $delete="delete from register where id='$id'";
    $run=mysqli_query($conn,$delete);
    if($run){
        $_SESSION['success'] ="Your data is deleted";
        header('Location:register.php');

    }
    else
    {
        $_SESSION['status'] ="Your data is not deletedd";
        header('Location:register.php');
    }

}

if(isset($_POST['login_btn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $select="select * from register where email='$email' and password='$password'";
    $run=mysqli_query($conn,$select);
    $usertype=mysqli_fetch_array($run);
    if($usertype['usertype']=="admin")
    {
     $_SESSION['success'] =$email;
     header('Location:index.php');        
    }
    else if($usertype['usertype']=="user")
    {
    $_SESSION['success'] =$email;
     header('Location:../userproduct.php');      
    }
    else 
    {
    $_SESSION['success'] ='Email and Password is invalid';
     header('Location:login.php');      
    }

}

?>
