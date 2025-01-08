<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Restorent</title>
        <link rel="stylesheet" href="css/Restorentstyle.css">
        <!--Font Awesome CDN-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- This is a internal css -->
   <style>
    /* CSS button */
.button-33 {
  background-color: #ffffff;
  border-radius: 100px;
  box-shadow: rgba(135, 156, 151, 0.2) 0 -25px 18px -14px inset,rgba(13, 239, 100, 0.15) 0 1px 2px,rgba(44, 187, 99, .15) 0 2px 4px,rgba(44, 187, 99, .15) 0 4px 8px,rgba(44, 187, 99, .15) 0 8px 16px,rgba(44, 187, 99, .15) 0 16px 32px;
  color: rgb(238, 254, 255);
  cursor: pointer;
  display: inline-block;
  font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
  padding: 7px 20px;
  margin-left:150px;
  text-align: center;
  text-decoration: none;
  transition: all 250ms;
  border: 0;
  font-size: 16px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  
}
.button-33 a{
  text-align: center;
  text-decoration: none;
  color: rgb(0, 132, 142);
  font-size: 13px;
  user-select: none;
  -webkit-user-select: none;

}

.button-33:hover {
  box-shadow: rgba(44,187,99,.35) 0 -25px 18px -14px inset,rgba(44,187,99,.25) 0 1px 2px,rgba(44,187,99,.25) 0 2px 4px,rgba(44,187,99,.25) 0 4px 8px,rgba(44,187,99,.25) 0 8px 16px,rgba(44,187,99,.25) 0 16px 32px;
  transform: scale(1.05) rotate(-1deg);
}

   </style>
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
    <main>
        <section>
          <h1 class="headding">Our Restorent</h1>
            <div class="section">
        
                <div class="container">
                    <div class="img-1">
                        <a href="" class="img1"><img src="https://images.pexels.com/photos/67468/pexels-photo-67468.jpeg?auto=compress&cs=tinysrgb&w=600" alt="/burgur.jpg"></a>
                        </div>
                        <h2 class="name"> 
                          The J D Restaurant - Rajkot
                        </h2>
                        <h3 class="about">
                          <b>Address:</b> Hp petrol pump jaynath traders, Shri Chetan Hanuman mandir, Ghodeswar mahadev, near of masjid, Ganjiwada, Shakti Industrial Zone, Rajkot, Gujarat 360003   <br>
                        Phone: +919006856744                     </h3>
                          <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                            <button class="button-33" role="button"><a href="">view more!</button></a> 

                          </div>
                        </div>
                        <div class="container">
                          <div class="img-2">
                            <a href="" class="img2"><img src="https://images.pexels.com/photos/260922/pexels-photo-260922.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""></a>
                            
                          </div>
                          <span>

                            <h2 class="name"> 
                              Flavours Restaurant                                </h2>
                              <h3 class="about">
                                <b>Address:</b>  Manhar Plot, Bhakti Nagar, Rajkot, Gujarat 360001
                                <br>
                                Phone: 0281 248 0008 <br>
                                Order: <a href="https://www.swiggy.com/restaurants/flavours-restaurant-gondal-road-rajkot-423103?is_retargeting=true&media_source=GooglePlaceOrder"> swiggy.com</a>   <br>                    </h3>
                              </span>
                                <span class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bx-star'></i>
                                <button class="button-33" role="button"><a href="">view more!</button></a> 
 
                              </span>

                        </div>
                        <div class="container">
                            <div class="img-2">
                                <a href="" class="img2"><img src="https://images.pexels.com/photos/3028127/pexels-photo-3028127.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""></a>
                                </div>
                               <span>

                                 <h2 class="name"> 
                                   LORDS BANQUET RESTAURANT
                                </h2>
                                <h3 class="about">
                                  <b>Address:</b>Ground floor, Opp. Sargam foods, Kasturba Rd, Opp Temptation, Kashivishwanath Plot, Sadar, Rajkot, <br>
                                  Hours: 
                                  Closes soon ⋅ 11:30 pm ⋅ Opens 12:30 pm Sun <br>
                                  Phone: 0281 244 4486 <br>
                                </h3>
                              </span> 
                                  <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                    <button class="button-33" role="button"><a href="">view more!</button></a> 

                                    
                                    
                                  </div>
                                
                        </div>
        </section>
        <section>
        <div class="section">
            <div class="container">
                <div class="img-2">
                    <a href="" class="img1"><img src="https://images.pexels.com/photos/239975/pexels-photo-239975.jpeg?auto=compress&cs=tinysrgb&w=600" alt="/burgur.jpg"></a>
                    </div>
                    <h2 class="name"> 
                      Hilltop Cafe and Restaurant                    </h2>
                    <h3 class="about">
                      <b>Address:</b>Hilltop Cafe and Restaurant, Decora sky hill road, near Decora west hill, Kalavad Rd, opp. Sanja chula, Rajkot, Gujarat 360005 <br>
                    
                      Phone: 084602 76515
                    
                    
                    </h3>
                      <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bx-star'></i>
                        <button class="button-33" role="button"><a href="">view more!</button></a> 

                    </div>
                    </div>
                    <div class="container">
                        <div class="img-2">
                            <a href="" class="img2"><img src="https://images.pexels.com/photos/6267/menu-restaurant-vintage-table.jpg?auto=compress&cs=tinysrgb&w=600" alt=""></a>
                            </div>
                            <h2 class="name"> 
                              Patel Vihar Garden & Restaurant                            </h2>
                            <h3 class="about">
                              <b>Address:</b> 2, Kuvadva Road, Rajkot, Gujarat 360003 <br>
                              <br>
                              Hours: 
                              Closes soon ⋅ 12 am ⋅ Opens 11:30 am Sun <br>
                              Phone: 098250 40204 <br>
                                   </h3>
                              <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bx-star'></i>
                                <button class="button-33" role="button"><a href="">view more!</button></a> 

                            </div>
                    </div>
                    <div class="container">
                        <div class="img-2">
                            <a href="" class="img2"><img src="https://images.pexels.com/photos/698907/pexels-photo-698907.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""></a>
                            </div>
                            <h2 class="name"> 
                              Temptation Restaurant
                                                        </h2>
                            <h3 class="about">
                              <b>Address:</b>Address: Anand Complex, 1st Floor Yogya, Kasturba Rd, Rajkot, Gujarat 360001 <br>
                              Hours: 
                              Closed ⋅ Opens 12 pm Sun <br>
                              Phone: 0281 247 5010 <br>
                                   </h3>
                              <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bx-star'></i>
                                <button class="button-33" role="button"><a href="">view more!</button></a> 

                            </div>
                    </div>
    </section>
    <section>
        <div class="section">
    
            <div class="container">
                <div class="img-2">
                    <a href="" class="img1"><img src="https://images.pexels.com/photos/67468/pexels-photo-67468.jpeg?auto=compress&cs=tinysrgb&w=600" alt="/burgur.jpg"></a>
                    </div>
                    <h2 class="name"> 
                      Sunny Paji Da Dhaba rajkot
                                        </h2>
                    <h3 class="about">
                      <b>Address:</b> Address: BUS STAND, GHANTESVAR RAJKOT JAMNAGAR HIGHWAY OPPOSITE PARA PIPALIYA, Taluka, Ghanteshwer, Rajkot, Gujarat 360003 <br>
                      Hours: 
                      Phone: 072828 13130
                    </h3>
                      <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bx-star'></i>
                        <button class="button-33" role="button"><a href="">view more!</button></a> 

                    </div>
                    </div>
                    <div class="container">
                        <div class="img-2">
                            <a href="" class="img2"><img src="https://images.pexels.com/photos/260922/pexels-photo-260922.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""></a>
                            </div>
                            <h2 class="name"> 
                              Jay Dwarkadhish Restaurant
                                                        </h2>
                            <h3 class="about">
                              <b>Address:</b>Address: Rajkot, Gujarat 360110 <br>
                              Hours: 
                              Open 24 hours <br>
                              Price per person: ₹1–200 <br>
                              Reported by 130 users <br>
                            </h3>
                              <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bx-star'></i>
                                <button class="button-33" role="button"><a href="">view more!</button></a> 

                            </div>
                    </div>
                    <div class="container">
                        <div class="img-2">
                            <a href="" class="img2"><img src="https://images.pexels.com/photos/3028127/pexels-photo-3028127.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""></a>
                            </div>
                            <h2 class="name"> 
                              Apple Bite
                        </h2>
                            <h3 class="about">
                              <b>Address:</b>4 Plus Complex, Sardar Nagar Main Rd, Astron Chowk, Near, Sardarnagar, Rajkot, Gujarat 360001 <br>
                              Hours:           
                              Open ⋅ Closes 1 am <br>
                              Phone: 0281 248 0881 <br></h3>
                              <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bx-star'></i>
                                <button class="button-33" role="button"><a href="">view more!</button></a> 

                            </div>
                    </div>
    </section>
    
    </main>

    <!-- footer  -->
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