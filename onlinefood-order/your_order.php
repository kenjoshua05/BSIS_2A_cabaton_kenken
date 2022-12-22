<?php include('partials-front/menu.php');?>

<div class="filter">
    <div class="wrapper">

                <br /><br /><br />

                <?php 
                 if(empty($_SESSION['username'])) 
                 {
                    header('location:registration/login.php');
                }
                else
                {
                ?>
                <br><br>

                <table>
                    <tr>
					<h3> <th width="10%">Order ID</th></h3>
                        <th width="10%">Order Date</th>
                        <th width="10%">Food</th>
                        <th width="7%">Price</th>
                        <th width="4%">Qty</th>
                        <th width="10%">Total</th>
                        <th width="10%">Status</th>
                        <th width="10%">Customer Name</th>
                        
                    </tr>
                    

                    <?php   
                    
                    if(!isset( $_SESSION['username']))
                    {
                        echo '<td colspan="8"><center>You have No orders Placed yet. </center></td>';
                    }
                   
                        else {
                    $sql = "SELECT * FROM tbl_order WHERE customer_username='".$_SESSION['username']."'"; // DIsplay the Latest Order at First
                    //Execute Query
                    $res = mysqli_query($conn, $sql);
                    //Count the Rows
                    $count = mysqli_num_rows($res);
                   
                   if($count>0)
                   {
    while($row=mysqli_fetch_assoc($res))
    {
        //Get all the order details
        $id = $row['id'];
        $food = $row['food'];
        $price = $row['price'];
        $qty = $row['qty'];
        $total = $row['total'];
        $order_date = $row['order_date'];
        $status = $row['status'];
        $customer_name = $row['customer_name'];
        
        ?>

            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $order_date; ?></td>
                <td><?php echo $food; ?></td>
                <td><?php echo '₱'.$price; ?></td>
                <td><?php echo $qty; ?></td>
                <td><?php echo '₱'.$total; ?></td>
                

                <td>
                    <?php 
                        // Ordered, On Delivery, Delivered, Cancelled

                        if($status=="Ordered")
                        {
                            echo "<label style='color: blue;'>$status</label>";
                        }
                        elseif($status=="On Delivery")
                        {
                            echo "<label style='color: orange;'>$status</label>";
                        }
                        elseif($status=="Delivered")
                        {
                            echo "<label style='color: green;'><b>$status</b></label>";
                        }
                        elseif($status=="Cancelled")
                        {
                            echo "<label style='color: red;'>$status</label>";
                            echo "<p style='color: gray;'>Out of stock</p>";
                        }
                    ?>
                </td>

                <td><?php echo $customer_name; ?></td>
            </tr>

        <?php

    }
}
}
                }
                    ?>

 
                </table>
    </div>
    
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php include('partials-front/footer.php'); ?>


