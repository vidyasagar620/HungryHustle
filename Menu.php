<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu</title>
        <!--Font Awesome CDN-->
        <link rel="stylesheet" href="css/Menustyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- this is a part of styling and enternal css -->
    
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
    <!-- main  -->

    <main>
        <section>
         <div class="section">
         
         <div class="container">
             <div class="img-1">
                 <a href="<?php echo'login.php'?>" class="img1"><img src="https://images.pexels.com/photos/3762075/pexels-photo-3762075.jpeg?auto=compress&cs=tinysrgb&w=600" alt="/burgur.jpg"></a>

                     <a href="<?php echo'login.php'?>"><h1 class="Burgur">
                         Tandoori Pizza
                        </h1></a>
                        <p class="comment">
                            "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                            <p class="rate">Rs.₹249</p>
                        
                        <span class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                            <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a> 
                        </span>  
                    </div>
         </div>
         <div class="container">
             <div class="img-2">
                 <a href="<?php echo'login.php'?>" class="img2"><img src="https://images.unsplash.com/photo-1593504049359-74330189a345?q=80&w=1854&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""></a>
                 <a href="<?php echo'login.php'?>"><h1 class="Burgur">
                     Cheese Pizza
                     </h1></a>
                     <p class="comment">
                         "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                         <p class="rate">Rs.₹299</p>
                         <div class="rating">
                             <i class='bx bxs-star'></i>
                             <i class='bx bxs-star'></i>
                             <i class='bx bxs-star'></i>
                             <i class='bx bxs-star'></i>
                             <i class='bx bx-star'></i>
                            <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a> 


                         </div>
             </div>
         </div>
 
         <div class="container">
             <div class="img-2">
                 <a href="<?php echo'login.php'?>" class="img2"><img src="https://images.pexels.com/photos/825661/pexels-photo-825661.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""></a>
                 <a href="<?php echo'login.php'?>"><h3 class="Burgur">
                    Neapolitan Pizza
                     </h3></a>
                     <p class="comment">
                         "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                         <p class="rate">Rs.₹299</p>
                         <div class="rating">
                             <i class='bx bxs-star'></i>
                             <i class='bx bxs-star'></i>
                             <i class='bx bxs-star'></i>
                             <i class='bx bxs-star'></i>
                             <i class='bx bx-star'></i>
                             <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a> 

                         </div>
             </div>
         </div>


         <div class="container">
            <div class="img-2">
                <a href="<?php echo'login.php'?>" class="img1"><img src="https://images.pexels.com/photos/1049626/pexels-photo-1049626.jpeg?auto=compress&cs=tinysrgb&w=600" alt="/burgur.jpg"></a>
                <a href="<?php echo'login.php'?>"><h1 class="Burgur">
                    Sicilian Pizza
                </h1></a>
                <p class="comment">
                    "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                    <p class="rate">Rs.₹249</p>
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bx-star'></i>
                        <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a> 

                    </div>
            </div>
        </div>
     </div>
     
 </section>
 
 <section class="section2">
    <div class="container">
        <div class="img-2">
            <a href="<?php echo'login.php'?>" class="img2"><img src="https://images.pexels.com/photos/1049620/pexels-photo-1049620.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""></a>
            <a href="<?php echo'login.php'?>"><h1 class="Burgur">
                Margherita Pizza
                </h1></a>
                <p class="comment">
                    "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                    <p class="rate">Rs.₹349</p>
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bx-star'></i>
                        <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a> 

                    </div>
        </div>
    </div>
 
     <div class="container">
         <div class="img-1">
             <a href="<?php echo'login.php'?>" class="img1"><img src="https://images.pexels.com/photos/803290/pexels-photo-803290.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""></a>
             <a href="<?php echo'login.php'?>"><h1 class="Burgur">
                 Domino's Pizza
                 </h1>
             </a>
                 <p class="comment">
                     "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                     <p class="rate">Rs.₹249</p>
                     <div class="rating">
                         <i class='bx bxs-star'></i>
                         <i class='bx bxs-star'></i>
                         <i class='bx bxs-star'></i>
                         <i class='bx bxs-star'></i>
                         <i class='bx bx-star'></i>
                         <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a> 

                     </div>
         </div>
     </div>
     <div class="container">
         <div class="img-2">
             <a href="<?php echo'login.php'?>" class="img2"><img src="https://images.pexels.com/photos/4004422/pexels-photo-4004422.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""></a>
             <a href="<?php echo'login.php'?>"><h1 class="Burgur">
                classic pizza
                             </h1></a>
                 <p class="comment">
                     "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                     <p class="rate">Rs.₹149</p>
                     <div class="rating">
                         <i class='bx bxs-star'></i>
                         <i class='bx bxs-star'></i>
                         <i class='bx bxs-star'></i>
                         <i class='bx bxs-star'></i>
                         <i class='bx bx-star'></i>
                         <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a> 

                     </div>
         </div>
     </div>
 
     <div class="container">
         <div class="img-2">
             <a href="<?php echo'login.php'?>" class="img2"><img src="https://images.pexels.com/photos/2741457/pexels-photo-2741457.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""></a>
             <a href="<?php echo'login.php'?>"><h1 class="Burgur">
                 Pizza Hut
                 </h1></a>
                 <p class="comment">
                     "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                     <p class="rate">Rs.₹199</p>
                     <div class="rating">
                         <i class='bx bxs-star'></i>
                         <i class='bx bxs-star'></i>
                         <i class='bx bxs-star'></i>
                         <i class='bx bxs-star'></i>
                         <i class='bx bx-star'></i>
                         <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a> 
                        
                     </div>
         </div>
     </div>
 </div>
 </section>
 <section>
 
   <div class="section3">
   
   <div class="container">
       <div class="img-1">
           <a href="<?php echo'login.php'?>" class="img1"><img src="https://images.pexels.com/photos/1199957/pexels-photo-1199957.jpeg?auto=compress&cs=tinysrgb&w=600" alt="/burgur.jpg"></a>
           <a href="<?php echo'login.php'?>"><h1 class="Burgur">
           Burger
           </h1></a>
           <p class="comment">
               "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
               <p class="rate">Rs.₹129</p>
               <div class="rating">
                   <i class='bx bxs-star'></i>
                   <i class='bx bxs-star'></i>
                   <i class='bx bxs-star'></i>
                   <i class='bx bxs-star'></i>
                   <i class='bx bx-star'></i>
                   <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a> 

               </div>
       </div>
   </div>
   <div class="container">
       <div class="img-2">
           <a href="<?php echo'login.php'?>" class="img2"><img src="https://images.pexels.com/photos/2702674/pexels-photo-2702674.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""></a>
           <a href="<?php echo'login.php'?>"><h1 class="Burgur">
            Classic Hamburger
               </h1></a>
               <p class="comment">
                   "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                   <p class="rate">Rs.₹149</p>
                   <div class="rating">
                       <i class='bx bxs-star'></i>
                       <i class='bx bxs-star'></i>
                       <i class='bx bxs-star'></i>
                       <i class='bx bxs-star'></i>
                       <i class='bx bx-star'></i>
                     <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a>
                   </div>
       </div>
   </div>
 
   <div class="container">
    <div class="img-2">
        <a href="<?php echo'login.php'?>" class="img2"><img src="https://images.pexels.com/photos/1199958/pexels-photo-1199958.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""></a>
        <a href="<?php echo'login.php'?>"><h1 class="Burgur">
            Slider Burger
            </h1></a>
            <p class="comment">
                "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                <p class="rate">Rs.₹129</p>
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bx-star'></i>
                    <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a>

                </div>
    </div>
</div>

  
 <div class="container">
    <div class="img-2">
        <a href="<?php echo'login.php'?>" class="img2"><img src="https://images.pexels.com/photos/16877270/pexels-photo-16877270/free-photo-of-close-up-of-a-burger-with-a-lot-of-melted-cheese.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""></a>
        <a href="<?php echo'login.php'?>"><h1 class="Burgur">
            Cheeseburger
            </h1></a>
            <p class="comment">
                "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                <p class="rate">Rs.₹199</p>
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bx-star'></i>
                    <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a>

                </div>
    </div>
</div>
 </section>

 <section>
 
    <div class="section3">
    
    <div class="container">
        <div class="img-1">
            <a href="<?php echo'login.php'?>" class="img1"><img src="https://images.unsplash.com/photo-1550547660-d9450f859349?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="/burgur.jpg"></a>
            <a href="<?php echo'login.php'?>"><h1 class="Burgur">
                Turkey Burger
            </h1></a>
            <p class="comment">
                "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                <p class="rate">Rs.₹99</p>
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bx-star'></i>
                    <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a>

                </div>
        </div>
    </div>
    <div class="container">
        <div class="img-2">
            <a href="<?php echo'login.php'?>" class="img2"><img src="https://images.pexels.com/photos/750075/pexels-photo-750075.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""></a>
            <a href="<?php echo'login.php'?>"><h1 class="Burgur">
                Chicken Burger
                </h1></a>
                <p class="comment">
                    "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                    <p class="rate">Rs.₹199</p>
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bx-star'></i>
                     <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a>

                    </div>
        </div>
    </div>
  
    <div class="container">
     <div class="img-2">
         <a href="<?php echo'login.php'?>" class="img2"><img src="https://images.pexels.com/photos/15476354/pexels-photo-15476354/free-photo-of-close-up-of-tasty-hamburger-on-board.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""></a>
         <a href="<?php echo'login.php'?>"><h1 class="Burgur">
            Mushroom Swiss Burger
             </h1></a>
             <p class="comment">
                 "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                 <p class="rate">Rs.₹149</p>
                 <div class="rating">
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bx-star'></i>
                     <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a>

                 </div>
     </div>
 </div>
 
   
  <div class="container">
     <div class="img-2">
         <a href="<?php echo'login.php'?>" class="img2"><img src="https://images.pexels.com/photos/15010309/pexels-photo-15010309/free-photo-of-delicious-hamburger-on-wooden-board.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" alt=""></a>
         <a href="<?php echo'login.php'?>"><h1 class="Burgur">
            Triple Patty Burger
             </h1></a>
             <p class="comment">
                 "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                 <p class="rate">Rs.₹149</p>
                 <div class="rating">
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bx-star'></i>
                     <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a>

                 </div>
     </div>
 </div>
  </section>
  <section>
 
    <div class="section3">
    
    <div class="container">
        <div class="img-1">
            <a href="<?php echo'login.php'?>" class="img1"><img src="https://images.unsplash.com/photo-1697155406055-2db32d47ca07?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDR8fEJpcnlhbml8ZW58MHx8MHx8fDA%3D" alt="/burgur.jpg"></a>
            <a href="<?php echo'login.php'?>"><h1 class="Burgur">
            Chicken Biryani
            </h1></a>
            <p class="comment">
                "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                <p class="rate">Rs.₹149</p>
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bx-star'></i>
                    <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a>

                </div>
        </div>
    </div>
    <div class="container">
        <div class="img-2">
            <a href="<?php echo'login.php'?>" class="img2"><img src="https://images.unsplash.com/photo-1697276063790-a68a966b12f7?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDN8fEJpcnlhbml8ZW58MHx8MHx8fDA%3D" alt=""></a>
            <a href="<?php echo'login.php'?>"><h1 class="Burgur">
                Mutton Biryani
                </h1></a>
                <p class="comment">
                    "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                    <p class="rate">Rs.₹249</p>
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bx-star'></i>
                     <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a>

                    </div>
        </div>
    </div>
  
    <div class="container">
     <div class="img-2">
         <a href="<?php echo'login.php'?>" class="img2"><img src="https://images.unsplash.com/photo-1705174299330-939dd03cc864?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTA5fHxCaXJ5YW5pfGVufDB8fDB8fHww" alt=""></a>
         <a href="<?php echo'login.php'?>"><h1 class="Burgur">
             Veg Biryani
             </h1></a>
             <p class="comment">
                 "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                 <p class="rate">Rs.₹149</p>
                 <div class="rating">
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bx-star'></i>
                     <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a>

                 </div>
     </div>
 </div>
 
   
  <div class="container">
     <div class="img-2">
         <a href="<?php echo'login.php'?>" class="img2"><img src="https://images.unsplash.com/photo-1701579231305-d84d8af9a3fd?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDZ8fEJpcnlhbml8ZW58MHx8MHx8fDA%3D" alt=""></a>
         <a href="<?php echo'login.php'?>"><h1 class="Burgur">
             Egg Biryani
             </h1></a>
             <p class="comment">
                 "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                 <p class="rate">Rs.₹129</p>
                 <div class="rating">
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bx-star'></i>
                     <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a>

                 </div>
     </div>
 </div>
  </section>
  <section>
 
    <div class="section3">
    
    <div class="container">
        <div class="img-1">
            <a href="<?php echo'login.php'?>" class="img1"><img src="https://images.pexels.com/photos/15014918/pexels-photo-15014918/free-photo-of-bowl-with-gulab-jamun-sweet.jpeg?auto=compress&cs=tinysrgb&w=600" alt="/burgur.jpg"></a>
            <a href="<?php echo'login.php'?>"><h1 class="Burgur">
            Gulab Jamun
            </h1></a>
            <p class="comment">
                "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                <p class="rate">Rs.₹199</p>
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bx-star'></i>
                     <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a>

                </div>
        </div>
    </div>
    <div class="container">
        <div class="img-2">
            <a href="<?php echo'login.php'?>" class="img2"><img src="https://images.pexels.com/photos/8788869/pexels-photo-8788869.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""></a>
            <a href="<?php echo'login.php'?>"><h1 class="Burgur">
                Rasgulla
                </h1></a>
                <p class="comment">
                    "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                    <p class="rate">Rs.₹199</p>
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bx-star'></i>
                     <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a>
                        
                    </div>
        </div>
    </div>
  
    <div class="container">
     <div class="img-2">
         <a href="<?php echo'login.php'?>" class="img2"><img src="https://images.pexels.com/photos/19151502/pexels-photo-19151502/free-photo-of-sweets-in-a-box.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""></a>
         <a href="<?php echo'login.php'?>"><h1 class="Burgur">
             Laddu
             </h1></a>
             <p class="comment">
                 "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                 <p class="rate">Rs.₹129</p>
                 <div class="rating">
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bx-star'></i>
                     <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a>

                 </div>
     </div>
 </div>
 
   
  <div class="container">
     <div class="img-2">
         <a href="<?php echo'login.php'?>" class="img2"><img src="https://t4.ftcdn.net/jpg/03/91/14/45/240_F_391144526_wtyv45UzXD9xPoMUpMYuUKzVoxILmsmY.jpg" alt=""></a>
         <a href="<?php echo'login.php'?>"><h1 class="Burgur">
             Ras malai
             </h1></a>
             <p class="comment">
                 "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                 <p class="rate">Rs.₹249</p>
                 <div class="rating">
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bx-star'></i>
                     <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a>

                 </div>
     </div>
 </div>
  </section>
  <section>
 
    <div class="section3">
    
    <div class="container">
        <div class="img-1">
            <a href="<?php echo'login.php'?>" class="img1"><img src="https://images.pexels.com/photos/9609835/pexels-photo-9609835.jpeg?auto=compress&cs=tinysrgb&w=600" alt="/burgur.jpg"></a>
            <a href="<?php echo'login.php'?>"><h1 class="Burgur">
                Regular Paneer
            </h1></a>
            <p class="comment">
                "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                    <p class="rate">Rs.₹149</p>
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bx-star'></i>
                     <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a>

                </div>
        </div>
    </div>
    <div class="container">
        <div class="img-2">
            <a href="<?php echo'login.php'?>" class="img2"><img src="https://images.pexels.com/photos/11115801/pexels-photo-11115801.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""></a>
            <a href="<?php echo'login.php'?>"><h1 class="Burgur">
                Shahi Paneer
                </h1></a>
                <p class="comment">
                    "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                        <p class="rate">Rs.₹249</p>
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bx-star'></i>
                     <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a>

                    </div>
        </div>
    </div>
  
    <div class="container">
     <div class="img-2">
         <a href="<?php echo'login.php'?>" class="img2"><img src="https://images.unsplash.com/photo-1603894584373-5ac82b2ae398?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fHBhbmVlcnxlbnwwfHwwfHx8MA%3D%3D" alt=""></a>
         <a href="<?php echo'login.php'?>"><h1 class="Burgur">
             Malai Paneer
             </h1></a>
             <p class="comment">
                 "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                     <p class="rate">Rs.₹249</p>
                 <div class="rating">
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bx-star'></i>
                     <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a>

                 </div>
     </div>
 </div>
 
   
  <div class="container">
     <div class="img-2">
         <a href="<?php echo'login.php'?>" class="img2"><img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDF8fHxlbnwwfHx8fHw%3D" alt=""></a>
         <a href="<?php echo'login.php'?>"><h1 class="Burgur">
             Paneer tikka
             </h1></a>
             <p class="comment">
                 "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                     <p class="rate">Rs.₹149</p>
                 <div class="rating">
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bx-star'></i>
                     <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a>

                 </div>
     </div>
 </div>
  </section>

  <section>
 
    <div class="section3">
    
    <div class="container">
        <div class="img-1">
            <a href="<?php echo'login.php'?>" class="img1"><img src="https://images.unsplash.com/photo-1585032226651-759b368d7246?q=80&w=1892&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="/burgur.jpg"></a>
            <a href="<?php echo'login.php'?>"><h1 class="Burgur">
                Noodles
            </h1></a>
            <p class="comment">
                "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                    <p class="rate">Rs.₹99</p>
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bx-star'></i>
                     <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a>

                </div>
        </div>
    </div>
    <div class="container">
        <div class="img-2">
            <a href="<?php echo'login.php'?>" class="img2"><img src="https://images.unsplash.com/photo-1565976469618-061774653bee?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""></a>
            <a href="<?php echo'login.php'?>"><h1 class="Burgur">
                Vegetable Noodles
                </h1></a>
                <p class="comment">
                    "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                        <p class="rate">Rs.₹129</p>
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bx-star'></i>
                     <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a>

                    </div>
        </div>
    </div>
  
    <div class="container">
     <div class="img-2">
         <a href="<?php echo'login.php'?>" class="img2"><img src="https://images.unsplash.com/photo-1563379926898-05f4575a45d8?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nzl8fG5vb2RsZXxlbnwwfHwwfHx8MA%3D%3D" alt=""></a>
         <a href="<?php echo'login.php'?>"><h1 class="Burgur">
             Tomato Noodles
             </h1></a>
             <p class="comment">
                 "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                     <p class="rate">Rs.₹99</p>
                 <div class="rating">
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bx-star'></i>
                     <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a>

                 </div>
     </div>
 </div>
 
   
  <div class="container">
     <div class="img-2">
         <a href="<?php echo'login.php'?>" class="img2"><img src="https://images.unsplash.com/photo-1634300184694-f7034660da10?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjc4fHxub29kbGV8ZW58MHx8MHx8fDA%3D" alt=""></a>
         <a href="<?php echo'login.php'?>"><h1 class="Burgur">
             Masala Maggi
             </h1></a>
             <p class="comment">
                 "Juicy, grilled perfection embraced by a golden bun; every bite is a flavor symphony, a savory sonnet of delight."</p>
                     <p class="rate">Rs.₹79</p>
                 <div class="rating">
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bx-star'></i>
                     <button class="button-33" role="button"><a href="<?php echo'login.php'?>">order now!</button></a>

                 </div>
     </div>
 </div>
  </section>
  <br>
    <br>
    
 <!-- this is a footer part -->
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
              <span>R K UNIVERSITY RAJKOT GUJARAT 360020 </span>
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
