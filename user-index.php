<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Home</title>
        <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/499/499552.png" type="image/png">
        <!--Font Awesome CDN-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/user-index.css">

    

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
            <a href="<?php echo'order.php'?>" style="--i:4">order</a>

            <a href="<?php echo'profile.php'?>" style="--i:4">
            <i class="fa-regular fa-user"></i></a>
            <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
   

        </Nav>
    </header>


    <!-- main  -->

    
    <main>
       <section>
        <div class="section">
        
        <div class="container">
            <div class="img-1">
                <a href="<?php echo 'user-burgur.php'?>" class="img1"><img src="https://images.unsplash.com/photo-1550547660-d9450f859349?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="/burgur.jpg"></a>
                <a href="<?php echo 'user-burgur.php'?>"><h1 class="Burgur">
                Burgur
                </h1></a>
                <p class="comment">
                    "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bx-star'></i>
                        <button class="button-33" role="button"><a href="<?php echo 'user-burgur.php'?>">order now!</button></a>

                    </div>
            </div>
        </div>
        <div class="container">
            <div class="img-2">
                <a href="<?php echo 'user-pizza.php'?>" class="img2"><img src="https://images.unsplash.com/photo-1593504049359-74330189a345?q=80&w=1854&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""></a>
                <a href="<?php echo 'user-pizza.php'?>"><h1 class="Burgur">
                    Pizza
                    </h1></a>
                    <p class="comment">
                        "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                            <button class="button-33" role="button"><a href="<?php echo 'user-pizza.php'?>">order now!</button></a>

                        </div>
            </div>
        </div>

        <div class="container">
            <div class="img-2">
                <a href="<?php echo 'user-biryani.php'?>" class="img2"><img src="https://images.unsplash.com/photo-1589302168068-964664d93dc0?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YmlyeWFuaXxlbnwwfHwwfHx8MA%3D%3D" alt=""></a>
                <a href="<?php echo 'user-biryani.php'?>"><h1 class="Burgur">
                    Biryani
                    </h1></a>
                    <p class="comment">
                        "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                            <button class="button-33" role="button"><a href="<?php echo 'user-biryani.php'?>">order now!</button></a>

                        </div>
            </div>
        </div>
    </div>
</section>

<section class="section2">

    <div class="container">
        <div class="img-1">
            <a href="<?php echo 'user-sweets.php'?>" class="img1"><img src="https://images.unsplash.com/photo-1605194000384-439c3ced8d15?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8bGFkZHV8ZW58MHx8MHx8fDA%3D" alt=""></a>
            <a href="<?php echo 'user-sweets.php'?>"><h1 class="Burgur">
                Sweets
                </h1>
            </a>
                <p class="comment">
                    "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bx-star'></i>
                        <button class="button-33" role="button"><a href="<?php echo 'user-sweets.php'?>">order now!</button></a>

                    </div>
        </div>
    </div>
    <div class="container">
        <div class="img-2">
            <a href="<?php echo 'user-paneer.php'?>" class="img2"><img src="https://images.unsplash.com/photo-1690401767645-595de0e0e5f8?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjh8fHBhbmVlcnxlbnwwfHwwfHx8MA%3D%3D" alt=""></a>
            <a href="<?php echo 'user-paneer.php'?>"><h1 class="Burgur">
                Paneer
                </h1></a>
                <p class="comment">
                    "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bx-star'></i>
                        <button class="button-33" role="button"><a href="<?php echo 'user-paneer.php'?>">order now!</button></a>

                    </div>
        </div>
    </div>

    <div class="container">
        <div class="img-2">
            <a href="<?php echo 'user-noodles.php'?>" class="img2"><img src="https://images.unsplash.com/photo-1612929633738-8fe44f7ec841?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bm9vZGxlc3xlbnwwfHwwfHx8MA%3D%3D" alt=""></a>
            <a href="<?php echo 'user-noodles.php'?>"><h1 class="Burgur">
                Noodles
                </h1></a>
                <p class="comment">
                    "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bx-star'></i>
                        <button class="button-33" role="button"><a href="<?php echo 'user-noodles.php'?>">order now!</button></a>

                    </div>
        </div>
    </div>
</div>
</section>
<section>
  <div class="section">
  
  <div class="container">
      <div class="img-1">
          <a href="" class="img1"><img src="https://images.unsplash.com/photo-1550547660-d9450f859349?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="/burgur.jpg"></a>
          <a href=""><h1 class="Burgur">
          Burgur
          </h1></a>
          <p class="comment">
              "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
              <div class="rating">
                  <i class='bx bxs-star'></i>
                  <i class='bx bxs-star'></i>
                  <i class='bx bxs-star'></i>
                  <i class='bx bxs-star'></i>
                  <i class='bx bx-star'></i>
                  <button class="button-33" role="button"><a href="">order now!</button></a>

              </div>
      </div>
  </div>
  <div class="container">
      <div class="img-2">
          <a href="" class="img2"><img src="https://images.unsplash.com/photo-1593504049359-74330189a345?q=80&w=1854&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""></a>
          <a href=""><h1 class="Burgur">
              Pizza
              </h1></a>
              <p class="comment">
                  "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                  <div class="rating">
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                      <i class='bx bx-star'></i>
                      <button class="button-33" role="button"><a href="">order now!</button></a>

                  </div>
      </div>
  </div>

  <div class="container">
      <div class="img-2">
          <a href="" class="img2"><img src="https://images.unsplash.com/photo-1589302168068-964664d93dc0?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YmlyeWFuaXxlbnwwfHwwfHx8MA%3D%3D" alt=""></a>
          <a href=""><h1 class="Burgur">
              Biryani
              </h1></a>
              <p class="comment">
                  "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                  <div class="rating">
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                      <i class='bx bx-star'></i>
                      <button class="button-33" role="button"><a href="">order now!</button></a>
                    </div>

      </div>
  </div>
</div>
</section>

  <footer>
    <div class="container1">
      <div class="footer_content">
        <div class="first_section">
          <h3 class="footer_headings">About Us</h3>
          <img src="images/logo-1.png" alt="" />
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
        All rights reservered by vidya
      </p>
    </div>
  </footer>


    
</body>
</html>

<script src="/style.js"></script>



