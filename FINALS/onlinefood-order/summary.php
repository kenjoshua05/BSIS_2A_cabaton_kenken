<?php include('partials-front/menu.php'); ?>

<div class="container">
    <h2 class="text-center">Order Summary</h2>  
    <h2 class="success">Food Ordered Successfully.</h2>



        <?php 
           //Get all the orders from database
           $sql = "SELECT * FROM tbl_order ORDER BY id DESC"; // DIsplay the Latest Order at First
           //Execute Query
           $res = mysqli_query($conn, $sql);
           //Count the Rows
           $count = mysqli_num_rows($res); // DIsplay the Latest Order at First
            //Execute Query
            if($count>0)
            {
                //Order Available
                if($row=mysqli_fetch_assoc($res))
                {
                    //Get all the order details
                    $id = $row['id'];
                    $food = $row['food'];
                    $price = $row['price'];
                    $qty = $row['qty'];
                    $total = $row['total'];
                    $order_date = $row['order_date'];
                    $customer_name = $row['customer_name'];
                    $customer_username = ['$username'];
                    $customer_contact = $row['customer_contact'];
                    $customer_email = $row['customer_email'];
                    $customer_address = $row['customer_address'];
                    
                    ?>
                    <table class="order">
                        <tr>
                        <b><ul><h3>Order ID: </b><?php echo $id; ?></h3></ul>
                            <b><ul>Order Date:</b> <?php echo $order_date; ?>.</ul>
                            <b><ul>Food: </b><?php echo $food; ?>.</ul>
                            <b><ul>Price: </b> <?php echo '₱'.$price; ?>.</ul>
                            <b><ul>Qty: </b><?php echo $qty; ?></ul> 
                            <b><ul>Total: </b><?php echo '₱'.$total; ?>.</ul>
                            <b><ul>Customer Name: </b><?php echo $customer_name; ?>.</ul>
                            <b><ul>Username: </b><?php print_r($customer_username); ?>.</ul>
                            <b><ul>Customer Contact: </b><?php echo $customer_contact; ?>.</ul>
                            <b><ul>Customer Email: </b><?php echo $customer_email; ?>.</ul>
                            <b><ul>Customer Address: </b><?php echo $customer_address; ?>.</ul>
                            <ul>
                                <br>
                                <a href="<?php echo SITEURL; ?>foods.php?id=<?php echo $id; ?>" class="btn-secondary">Make another purchase</a>
                            </td>
                        </tr>
                    </table>
                    <?php

                }
            }
            else
            {
                //Order not Available
                echo "<tr><td colspan='12' class='error'>Orders not Available</td></tr>";
            }
        ?>
</div>
<?php include('partials-front/footer.php'); ?>