<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="UserStyle/profi.css">
</head>

<body>
    <?php
    // include ('connect.php');
    // session_start();
?>
    <div class="header">
        <header>
            <h1>LOGO </h1>
            <input type="search" placeholder="Pizza,Burger,Tagin...">
            <img src="<?=  $_SESSION['picture']  ?>" id="profil"><span>Hi, <?= $_SESSION['F_name']  ?> </span>
            <img src="./Picture/picMe/profile.png" alt="" id='prof'>
            <img src="./Picture/picMe/notification-bell.png" id="notification">
            <a href="logOut.php"><img src="./Picture/picMe/log-out.png" id="orders"></a>
        </header>
    </div>
    <div id="sideBar">
        <div class="picSideBar">
            <img src="wallpaperflare.com_wallpaper (1).jpg" alt="">
        </div>
        <div class="services">
            <h1>services</h1>
            <a href="">Home</a>
            <a href="">About</a>
            <a href="">Contact Us</a>
        </div>

        <div class="links">
            <h1>Profil</h1>
            <a href="info.php?email=<?=  $_SESSION['email'] ?>">Your Information</a>
            <a href="">Orders History</a>
            <a href="">Orders</a>
            <!-- <a href="">Log Out</a> -->
        </div>
    </div>
    <!-- Notification Html -->
    <div class="notif">
        <div class="picText">
            <img src="img/Lammtagine med smak av Marocko på mitt vis - Zeinas Kitchen.jpeg" id="TaginPic">
            <span>New Food Is Ready <br> Order Now!</span>
        </div>
        <hr>
        <div class="rat">
            <p>How was your last order ?</p>
            <div class="star">
                <img src="img/star (2).png" alt="">
                <img src="img/star (2).png" alt="">
                <img src="img/star (2).png" alt="">
                <img src="img/star (2).png" alt="">
                <img src="img/star (2).png" alt="">
            </div>
        </div>
    </div>
    <div class="background">
        <img src="./Picture/wallpaperflare.com_wallpaper (2).jpg" alt="">
        <div class="information">
            <h1>Order The Most Delecious Food<br>& Drinks & Fruts </h1>
            <p>With The Best And Fast Delevery In Morocco</p>
            <button>Order Now</button>

        </div>
    </div>

    <!-- Product html -->
    <div class="pd">
        <div class="Filter">
            <h1>Filter By</h1>

            <div class="type">
                <label for="" class="TitleLabel">Type: </label>
                <div>
                    <input type="text" placeholder="Pizza,Icecream,Juice..." id="inpt">
                </div>
            </div>
            <div class="price">
                <label class="TitleLabel">price Less Than: </label>
                <div>
                    <!-- <label >From </label> -->
                    <input type="number" placeholder="Price" id="LessThan"><br>
                    <!-- <label >To </label><input type="number"> -->
                </div>
                <label class="TitleLabel">price Biger Than: </label>
                <div>
                    <!-- <label >From </label> -->
                    <input type="number" placeholder="Price" id="BigerThan"><br>
                    <!-- <label >To </label><input type="number"> -->
                </div>
            </div>

            <div class="Date">
                <label for="" class="TitleLabel">Posted Date:</label>
                <div>
                    <label class="DateLabel">This Day</label> <input type="radio" name="Rdate" value="">
                    <label class="DateLabel">This Week</label> <input type="radio" name="Rdate" value="">
                    <label class="DateLabel">This Month</label> <input type="radio" name="Rdate" value="">
                </div>
            </div>
            <div class="search">
                <button id="btn">Search</button>
            </div>
            <!-- </div> -->

        </div>


        <div class="Food IceCream Juice">

            <?php

                include 'connect.php';


                $sql = $dbt->prepare('SELECT * from product');
                $sql->execute();
                $Tab_products = $sql->fetchAll();

                // echo '<pre>';
                // print_r($Tab_products);
                // echo '</pre>';

                foreach($Tab_products as $P){
                    ?>
            <div id="container">
                <img src="<?php echo '../AdminPage/' . $P['pic'] ?>" id="ProductPic">
                <p><?php echo $P['Title'] ?></p>
                <div id="Price">
                    Price : <span><?php echo $P['Price'] ?>$</span>
                </div>
                <a href='Ord.php?id_P=<?php echo $P['id_P'] ?>'>Order Now</a>

            </div>
            <?php } ?>
        </div>

    </div>

    <div>
        hhhhhhhhhhhhhhhhhhhhhhhhh
    </div>











    <!-- <script src="./Userjs/test.js"></script> -->
    <script src="./Userjs/filt.js"></script>
    <script src="./Userjs/Profil.js"></script>
</body>

</html>