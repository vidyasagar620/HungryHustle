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
            <a href="<?php echo'order.php'?>" style="--i:4">order</a>
            <a href="<?php echo'profile.php'?>" style="--i:4">
            <i class="fa-regular fa-user"></i></a>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> </a>
            
        </Nav>
    </header>