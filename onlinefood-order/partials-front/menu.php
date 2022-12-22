<?php include('config/constants.php');
include('login-check.php');

if(!isset($_SESSION['username'])){
    echo "You are not logged in";
}else {
    //echo "You are pakyu in";
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.jpg">
    <title>Tasty Buds Cuisine</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo.jpg" alt="Restaurant Logo" class="img-responsive">
                </a>

            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>foods.php">Foods</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>your_order.php">Your Order</a>
                    </li>            
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->