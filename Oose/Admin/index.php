<?php 
include('includes/header.php'); 
 include('includes/navbar.php'); 
 ?>
 <div class="container" style="font-style:italic;">
<div id="content-wrapper" class="d-flex flex-column card mt-5 shadow">


        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between m-4 card-title">
        <h2  style="font-family:Brush Script MT, Brush Script Std, cursive;
        font-size: 70px;text-shadow:2px 2px rgb(170, 167, 167)"> Dashboard</h2>

        </div>

        <div class="container">
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 my-4 mx-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Admin profile</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php
                                    $host="localhost";
                                    $dbusername="root";
                                    $dbpassword="";
                                    $dbname="oose";
                                    
                                    $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
                                    $query="select id from register order by id";
                                    $run=mysqli_query($conn,$query);
                                    $row=mysqli_num_rows($run);
                                    echo '<h2 style="text-shadow:2px 2px rgb(170, 167, 167)">'.$row.'</h2>';

                                    ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-group fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mx-4 my-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                   Product</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                    $host="localhost";
                                    $dbusername="root";
                                    $dbpassword="";
                                    $dbname="oose";
                                    
                                    $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
                                    $query="select id from product order by id";
                                    $run=mysqli_query($conn,$query);
                                    $row=mysqli_num_rows($run);
                                    echo '<h2 style="text-shadow:2px 2px rgb(170, 167, 167)">'.$row.'</h2>';

                                    ?>

                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-store fa-2x text-gray-300" ></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mx-4 my-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                   Ordered Product</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                    $host="localhost";
                                    $dbusername="root";
                                    $dbpassword="";
                                    $dbname="oose";
                                    
                                    $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
                                    $query="select order_id from purchase order by order_id";
                                    $run=mysqli_query($conn,$query);
                                    $row=mysqli_num_rows($run);
                                    echo '<h2 style="text-shadow:2px 2px rgb(170, 167, 167)">'.$row.'</h2>';

                                    ?>
                                </div>
                            </div>
                            <div class="col-auto">
                            <i class="fa fa-shopping-cart fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>