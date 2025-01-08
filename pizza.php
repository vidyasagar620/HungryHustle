<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testing</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/order.css">
    
</head>
<body>
<header class="header">
        <a href="#" class="logo">HungryHustel</a>

        <input type="checkbox" id="check">
        <label for="check" class="icons">
            <i class='bx bx-menu' id="menu-icon"></i>
            <i class='bx bx-x' id="close-icon"></i>
        </label>
        <Nav class="navbar">
            <a href="<?php echo'index.php' ?>">Home</a>
            <a href="<?php echo'Restorent.php' ?>" style="--i:1">Restorent</a>
            <a href="<?php echo'Menu.php' ?>" style="--i:2">Menu</a>
            <a href="<?php echo'contact.php' ?>" style="--i:3">contact</a>
            <a href="<?php echo'login.php'?>" style="--i:4">Login</a>
        </Nav>
    </header>
<body>
  <main>
    <div class="card">
      <div class="card__title">
        <div class="icon">
          <a href="<?php echo 'index.php'?>"><i class="fa fa-arrow-left"></i></a>
        </div>
        <h3>New products</h3>
      </div>
      <div class="card__body">
        <div class="half">
          <div class="featured_text">
            <h1 name="product_name" >pizza</h1>
            <p class="sub"> </p>
            <p class="price" name="product_price" >₹149</p>
          </div>
          <div class="image" name="image" >
            <img src="https://images.unsplash.com/photo-1593504049359-74330189a345?q=80&w=1854&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image">
          </div>
        </div>
        <div class="half">
          <div class="description">
            <p>100% Original Products Pay on delivery might be available Easy 14 days returns and exchanges Try Buy might be available</p>
          </div>
          <span class="stock"><i class="fa fa-pen"></i> In stock</span>
          <div class="reviews">
            <ul class="stars">
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star-o"></i></li>
            </ul>
            <span>(64 reviews)</span>
          </div>
        </div>
      </div>
      <div class="card__footer">
        <div class="recommend">
          <p>Recommended by</p>
          <h3>BURGUR KING</h3>
        </div>
        <div class="action">
        <button class="button-33" role="button">order now!</button>

          <button type="button">Add to cart</button>
        </div>
      </div>
    </div>
  </main>
  <!-- footer  -->
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <?php
  include_once('footer.php');
  ?>
    </body>
      </html>

      <?php
include "cart-con.php"; // Include the database connection script

if(isset($_POST['add-to-cart-btn'])){

    $product_name = mysqli_real_escape_string($conn, ($_POST['product_name']));
    $product_price = mysqli_real_escape_string($conn, $_POST['product_price']);
    // $product_quantity = mysqli_real_escape_string($conn, $_POST['product_quantity']);
    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'uploaded_img/'.$image;
}

$sqlinsert = "INSERT INTO cart VALUES ('product_name','product_price','image');";

// Fetch cart items
$sql = "SELECT * FROM cart";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<;>Product: " . $row["product_name"] . " - Price: ₹" . $row["price"] . " -image:" .$row["image"];
    }
} else {
    echo "Your cart is empty";
}