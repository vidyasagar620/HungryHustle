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
            <h1>Biryani</h1>
            <p class="sub"> </p>
        </div>
        <div class="image">
            <img src="https://images.unsplash.com/photo-1589302168068-964664d93dc0?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YmlyeWFuaXxlbnwwfHwwfHx8MA%3D%3D" alt="image">
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
            <b class="price">Rs.₹149</b>
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
<?php include 'user_footer.php' ?>
    </body>
      </html>