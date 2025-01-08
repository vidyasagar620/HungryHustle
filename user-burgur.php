<?php
include'cart-con.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testing</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/order.css">
    
</head>
<body>
<?php include "user_navbar.php"; ?>
<body>
  <main>
    <div class="card">
      <div class="card__title">
        <div class="icon">
          <a href="<?php echo 'user-index.php'?>"><i class="fa fa-arrow-left"></i></a>
        </div>
        <h3>New products</h3>
      </div>
      <div class="card__body">
        <div class="half">
          <div class="featured_text">
            <h1 name="product_name">Burgur</h1>
            <p class="sub"> </p>
        </div>
        <div class="image" name="image">
            <img name="image" src="https://images.unsplash.com/photo-1550547660-d9450f859349?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image">
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
            <br>
            <br>
            <b class="price" name="product_price">Rs.₹149</b>
        </div>
        </div>
      </div>
      <div class="card__footer">
        <div class="recommend">
          <p>Recommended by</p>
          <h3>BURGUR KING</h3>
        </div>
        <div class="action">
        <button  class="button-33" role="button">order now!</button>

          <button name="add-to-cart-btn" id="add-to-cart-btn" type="button">Add to cart</button>
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
 include_once('user_footer.php');
 ?>
    </body>
      </html>

    <!-- <script src="javascript/script.js"></script> -->

    <?php
    if(isset($_POST['add-to-cart-btn'])){

      $product_name =  ($_POST['product_name']);
      $product_price =  $_POST['product_price'];
      // $product_quantity = mysqli_real_escape_string($conn, $_POST['product_quantity']);
      $image = $_FILES['image']['name'];
      $image_size = $_FILES['image']['size'];
      $image_tmp_name = $_FILES['image']['tmp_name'];
      $image_folder = 'uploaded_img/'.$image;
    }
    
    if(!empty($image)){
       if($image_size > 5000000){
          $message[] = 'image is too large';
       }else{
          $image_update_query = mysqli_query($conn, "UPDATE `cart` SET image = '$image' WHERE id = '$product_id'") or die('query failed');
          if($image_update_query){
             move_uploaded_file($image_tmp_name, $image_folder);
          }
       }
    }
    $sqlinsert = "INSERT INTO cart VALUES ('product_name','product_price','image');";
    
    ?>
    <script>
         // script.js
    let cartCount = 0;

document.getElementById("add-to-cart-btn").addEventListener("click", function() {
    alert("Product added to cart!");
    cartCount++;
    updateCartCount();
    displayCart("cart-dis.php"); // Update the cart display
});

function updateCartCount() {
    document.getElementById("cart-count").innerText = cartCount + " item" + (cartCount !== 1 ? "s" : "") + " in cart";
}

function displayCart() {
    const cartItems = document.getElementById("cart-items");
    const newItem = document.createElement("li");
    newItem.textContent = "Product Name"; // Replace with actual product name
    cartItems.appendChild(newItem);
}

    </script>