
<?php  include('../config/constants.php'); ?>

<head>
    <link rel="icon" href="../images/admin.png">
        <title>Tasty Buds Cuisine</title>

        <link rel="stylesheet" href="../css/admin.css">
    </head>

     <div>
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="../images/logo.jpg" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

        <!-- Main Content Section Starts -->
        <div class="main-content">
            <div class="wrapper">
                <h1 class="text-center">Administrator Dashboard</h1>
                <br><br>
                <?php 
                    if(isset($_SESSION['login']))
                    {
                        echo $_SESSION['login'];
                        unset($_SESSION['login']);
                    }
                ?>
                <br><br>
                <a href="manage-category.php">
                <div class="col-4 text-center">

                    <?php 
                        //Sql Query 
                        $sql = "SELECT * FROM tbl_category";
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count Rows
                        $count = mysqli_num_rows($res);
                    ?>

                    <h1><?php echo $count; ?></h1>
                    <br />
                    Food Categories
                </div>
                </a>

                <a href="manage-food.php">
                <div class="col-4 text-center">

                    <?php 
                        //Sql Query 
                        $sql2 = "SELECT * FROM tbl_food";
                        //Execute Query
                        $res2 = mysqli_query($conn, $sql2);
                        //Count Rows
                        $count2 = mysqli_num_rows($res2);
                    ?>

                    <h1><?php echo $count2; ?></h1>
                    <br />
                    Foods
                </div>
                </a>

                <a href="manage-order.php">
                <div class="col-4 text-center">
                    
                    <?php 
                        //Sql Query 
                        $sql3 = "SELECT * FROM tbl_order";
                        //Execute Query
                        $res3 = mysqli_query($conn, $sql3);
                        //Count Rows
                        $count3 = mysqli_num_rows($res3);
                    ?>

                    <h1><?php echo $count3; ?></h1>
                    <br />
                    Total Orders
                </div>
                </a>

                <div class="col-4 text-center">
                    
                    <?php 
                        //Creat SQL Query to Get Total Revenue Generated
                        //Aggregate Function in SQL
                        $sql4 = "SELECT SUM(total) AS Total FROM tbl_order WHERE status='Delivered'";

                        //Execute the Query
                        $res4 = mysqli_query($conn, $sql4);

                        //Get the VAlue
                        $row4 = mysqli_fetch_assoc($res4);
                        
                        //GEt the Total REvenue
                        $total_revenue = $row4['Total'];

                    ?>

                    <h1>₱<?php echo $total_revenue; ?></h1>
                    <br />
                    Revenue Generated
                </div>

                <a href="manage-ordered.php">
                <div class="col-4 text-center">
                    
                    <?php 
                        //Sql Query 
                        $sql6 = "SELECT * FROM tbl_order WHERE status = 'Ordered'";
                        //Execute Query
                        $res6 = mysqli_query($conn, $sql6);
                        //Count Rows
                        $count6 = mysqli_num_rows($res6);
                    ?>

                    <h1><?php echo $count6; ?></h1>
                    <br />
                    Pending Orders
                </div>
                </a>

                <a href="manage-ondelivery.php">
                <div class="col-4 text-center">
                
                    <?php 
                        //Sql Query 
                        $sql7 = "SELECT * FROM tbl_order WHERE status = 'On Delivery'";
                        //Execute Query
                        $res7 = mysqli_query($conn, $sql7);
                        //Count Rows
                        $count7 = mysqli_num_rows($res7);
                    ?>

                    <h1><?php echo $count7; ?></h1>
                    <br />
                    On Delivery Orders
                </div>
                </a>

                <a href="delivered.php">
                <div class="col-4 text-center">
                
                    <?php 
                        //Sql Query 
                        $sql7 = "SELECT * FROM tbl_order WHERE status = 'Delivered'";
                        //Execute Query
                        $res7 = mysqli_query($conn, $sql7);
                        //Count Rows
                        $count7 = mysqli_num_rows($res7);
                    ?>

                    <h1><?php echo $count7; ?></h1>
                    <br />
                    Delivered Orders
                </div>
                </a>

                <a href="manage-cancelled.php">
                <div class="col-4 text-center">
                    
                    <?php 
                        //Sql Query 
                        $sql7 = "SELECT * FROM tbl_order WHERE status = 'Cancelled'";
                        //Execute Query
                        $res7 = mysqli_query($conn, $sql7);
                        //Count Rows
                        $count7 = mysqli_num_rows($res7);
                    ?>

                    <h1><?php echo $count7; ?></h1>
                    <br />
                    Cancelled Orders
                </div>
                </a>

                <a href="manage-admin.php">
                <div class="col-4 text-center">
                    
                    <?php 
                        //Sql Query 
                        $sql8 = "SELECT * FROM tbl_admin";
                        //Execute Query
                        $res8 = mysqli_query($conn, $sql8);
                        //Count Rows
                        $count8 = mysqli_num_rows($res8);
                    ?>

                    <h1><?php echo $count8; ?></h1>
                    <br />
                    System Administrator
                </div>
                </a>

                
                <a href="manage-users.php">
                <div class="col-4 text-center">
                    
                    <?php 
                        //Sql Query 
                        $sql9 = "SELECT * FROM users";
                        //Execute Query
                        $res9 = mysqli_query($conn, $sql9);
                        //Count Rows
                        $count9 = mysqli_num_rows($res9);
                    ?>

                    <h1><?php echo $count9; ?></h1>
                    <br />
                    Users
                </div>
                </a>

                <div class="clearfix"></div>

            </div>
        </div>
        <!-- Main Content Setion Ends -->

<?php include('partials/footer.php') ?>