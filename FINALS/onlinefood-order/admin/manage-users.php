<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Users</h1>

                <br /><br /><br />

                <?php 
                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }
                ?>
                <br><br>

                <table class="tbl-full">
                    <tr>
                        <th width="5%">S.N.</th>
                        <th width="10%">Customer Name</th>
                        <th width="10%">Username</th>
                        <th width="10%">Contact</th>
                        <th width="15%">Email</th>
                        <th width="10%">Address</th>
                    </tr>

                    <?php 
                        //Get all the orders from database
                        $sql = "SELECT * FROM users ORDER BY user_id DESC"; // DIsplay the Latest Order at First
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count the Rows
                        $count = mysqli_num_rows($res);

                        $sn = 1; //Create a Serial Number and set its initail value as 1

                        if($count>0)
                        {
                            //Order Available
                            while($row=mysqli_fetch_assoc($res))
                            {
                                //Get all the order details
                                $user_id = $row['user_id'];
                                $customer_name = $row['customer_name'];
                                $username = $row['username'];
                                $customer_contact = $row['customer_contact'];
                                $customer_email = $row['customer_email'];
                                $customer_address = $row['customer_address'];
                                
                                ?>
                                        </td>
                                        <td><?php echo $sn++; ?> </td>
                                        <td><?php echo $customer_name; ?></td>
                                        <td><?php echo $username; ?></td>
                                        <td><?php echo $customer_contact; ?></td>
                                        <td><?php echo $customer_email; ?></td>
                                        <td><?php echo $customer_address; ?></td>
                                    </tr>

                                <?php

                            }
                        }
                        else
                        {
                            //Order not Available
                            echo "<tr><td colspan='12' class='error'>Users not Available</td></tr>";
                        }
                    ?>

 
                </table>
    </div>
    
</div>

<?php include('partials/footer.php'); ?>