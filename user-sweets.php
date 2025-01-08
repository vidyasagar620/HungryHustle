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
<header class="header">
        <a href="#" class="logo">HungryHustel</a>

        <input type="checkbox" id="check">
        <label for="check" class="icons">
            <i class='bx bx-menu' id="menu-icon"></i>
            <i class='bx bx-x' id="close-icon"></i>
        </label>
        <Nav class="navbar">
            <a href="<?php echo'user-index.php' ?>">Home</a>
            <a href="<?php echo'user-Restorent.php' ?>" style="--i:1">Restorent</a>
            <a href="<?php echo'user-Menu.php' ?>" style="--i:2">Menu</a>
            <a href="<?php echo'user-contact.php' ?>" style="--i:3">contact</a>
            <a href="<?php echo'profile.php'?>" style="--i:4">
            <i class="fa-regular fa-user"></i></a>
            <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
        </Nav>
    </header>
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
            <h1>Pizza</h1>
            <p class="sub"> </p>
        </div>
        <div class="image">
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
  <footer>
    <div class="container1">
      <div class="footer_content">
        <div class="first_section">
          <h3 class="footer_headings">About Us</h3>
              <img src="https://images.unsplash.com/photo-1605194000384-439c3ced8d15?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8bGFkZHV8ZW58MHx8MHx8fDA%3D" alt="" />
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. A
                adipisci minus ratione nulla cum ut repellendus omnis, odit
                ducimus nisi?
              </p>
              <div class="social_icons">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-pinterest"></i>
                <i class="fa-brands fa-youtube"></i>
              </div>
            </div>
            <div class="second_section">
              <h3 class="footer_headings">Useful links</h3>
              <ul>
                <li><a href="<?php echo 'index.php'?>">Home</a></li>
                <li><a href="<?php echo 'Restorent.php'?>">Restorent</a></li>
                <li><a href="<?php echo 'contact.php'?>">Contact Us</a></li>
              </ul>
            </div>
            <div class="third_section">
              <h3 class="footer_headings">Address</h3>
              <ul>
                <li>
                  <i class="fa fa-envelope"></i>
                  <SPan>vs1262537vidya@gmail.com</SPan>
                </li>
                <li>
                  <i class="fa-solid fa-location-dot"></i>
                  <span>R K UNVARSITY RAJKOT GUJARAT 360020 </span>
                </li>
                
                <li>
                  <i class="fa-solid fa-phone"></i>
                  <span>+91 6201581541 <br>+91 8651052512</span>
                </li>
              </ul>
            </div>
            <div class="fourth_section">
              <h3 class="footer_headings">Contact Us</h3>
              <form action="#">
                <div class="form_control">
                  <input type="text" placeholder="Enter an Email" />
                </div>
                <div class="form_control">
                  <textarea
                  name=""
                  id=""
                  cols="10"
                  rows="5"
                    placeholder="Write Message....."
                  ></textarea>
                </div>
                <button type="button">Send</button>
              </form>
            </div>
          </div>
        </div>
        <div class="footer_txt">
          <p>
            All rights reservered by
          </p>
        </div>
      </footer>
    </body>
      </html>