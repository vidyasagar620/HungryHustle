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
            <h1>Noodles</h1>
            <p class="sub"> </p>
        </div>
        <div class="image">
            <img src="https://images.unsplash.com/photo-1589302168068-964664d93dc0?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB" alt="image">
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
                <p class="price">₹149</p>
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
              <img src="https://images.pexels.com/photos/750073/pexels-photo-750073.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" />
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