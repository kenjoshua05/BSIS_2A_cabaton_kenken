
<?php include('partials/menu.php'); ?>
        <!-- Main Content Section Starts -->
        <div class="main-content">
            <div class="wrapper">
                <h1 class="text-center">Order Dashboard</h1>
                <br><br>
                <?php 
                    if(isset($_SESSION['login']))
                    {
                        echo $_SESSION['login'];
                        unset($_SESSION['login']);
                    }
                ?>
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

                <div class="clearfix"></div>

            </div>
        </div>
        <!-- Main Content Setion Ends -->

<?php include('partials/footer.php') ?>