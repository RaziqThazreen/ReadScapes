<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="header-1">
      <div class="flex">
         <div class="share">
          
         </div>
         <p>  <a href="login.php"><img src="images/enter.png" width="30" height="30"></a> | <a href="register.php"><img src="images/add-user.png" width="30" height="30" ></a> </p>
      </div>
   </div>

   <div class="header-2">
      <div class="flex">
        <img src="images/book.png" width="50" height="50">
		  <a href="home.php" class="logo">ReadScapes</a>

         <nav class="navbar">
            <a href="home.php"><img src="images/home.png" width="30" height="30" >Home</a>
			 <a href="shop.php"><img src="images/book (1).png" width="30" height="30">Products</a>
			 <a href="contact.php"><img src="images/chat.png" width="30" height="30">Contact Us</a>
			 <a href="about.php"><img src="images/info.png" width="30" height="30">About Us</a>
			 <a href="orders.php"><img src="images/shopping-bag.png" width="30" height="30">Orders</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
         </div>

         <div class="user-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
         </div>
      </div>
   </div>

</header>