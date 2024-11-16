<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <title>Profil</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="UserStyle/Slide.css">
    <link rel="stylesheet" href="UserStyle/backG.css">
    <link rel="stylesheet" href="UserStyle/Prof.css">
    <link rel="icon" href="./Picture/hamburger.png">

</head>

<body>
    <?php
        include ('connect.php');
        session_start();
    ?>
    <div class="header">
        <header>
            <div class="Logo_Search">
                <a href="prof.php"><img src="Picture/logolavilla-new_copy-2.png" alt=""></a>
                <input type="search" placeholder="Pizza,Burger,Tagin...">
            </div>
            <div class="Menu">
                <div class='divProfil'>
                    <img src="<?=  $_SESSION['picture']  ?>" id="profil">
                    <p>Hi, <?= $_SESSION['F_name']  ?> </p>
                </div>
                <div class='divPic'>
                    <img src="./Picture/picMe/profile.png" alt="" id='prof'>
                    <img src="./Picture/picMe/notification-bell.png" id="notification">
                    <a href="signUp.php"><img src="./Picture/picMe/log-out.png" id="orders"></a>
                    <!-- <img src="Picture/shopping-cart.png" alt="" class='Cart'> -->
                </div>
            </div>
        </header>
    </div>
    <div id="sideBar">
        <div class="picSideBar">
            <img src="Picture/backG_Pic/wallpaperflare.com_wallpaper.jpg" alt="">
        </div>
        <div class="services">
            <h1>services</h1>
            <a href="Prof.php">Home</a>
            <a href="about.php">About</a>
            <a href="contactUs.php">Contact Us</a>
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
                <img src="Picture/Star/star (2).png" alt="">
                <img src="Picture/Star/star (2).png" alt="">
                <img src="Picture/Star/star (2).png" alt="">
                <img src="Picture/Star/star (2).png" alt="">
                <img src="Picture/Star/star (2).png" alt="">
            </div>
        </div>
    </div>




    <!-- carousel -->
    <div class="carousel">
        <!-- list item -->
        <div class="list">
            <div class="item">
                <img
                    src="Picture/backG_Pic/exploding-burger-with-vegetables-melted-cheese-black-background-generative-ai.jpg">
                <div class="content">
                    <!-- <div class="author">SPICY FOOD</div> -->
                    <div class="title">SPICY FOOD</div>
                    <div class="topic">JUICE</div>
                    <div class="des">
                        <!-- lorem 50 -->
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima
                        placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et
                        quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at
                        laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button><a href="about.php">SEE MORE</a></button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="Picture/backG_Pic/view-delicious-shawarma-dish.jpg">
                <div class="content">
                    <!-- <div class="author">MED ABDEL</div> -->
                    <div class="title">SPICY FOOD</div>
                    <div class="topic">JUICE</div>
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima
                        placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et
                        quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at
                        laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button><a href="about.php">SEE MORE</a></button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="Picture/backG_Pic/fresh-pasta-with-hearty-bolognese-parmesan-cheese-generated-by-ai.jpg">
                <div class="content">
                    <!-- <div class="author">SPICY FOOD</div> -->
                    <div class="title">SPICY FOOD</div>
                    <div class="topic">JUICE</div>
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima
                        placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et
                        quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at
                        laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button><a href="about.php">SEE MORE</a></button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="Picture/backG_Pic/delicious-pizza-studio.jpg">
                <div class="content">
                    <!-- <div class="author">SPICY FOOD</div> -->
                    <div class="title">SPICY FOOD</div>
                    <div class="topic">JUICE</div>
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima
                        placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et
                        quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at
                        laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button><a href="about.php">SEE MORE</a></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- list thumnail -->
        <div class="thumbnail">
            <div class="item">
                <img
                    src="Picture/backG_Pic/exploding-burger-with-vegetables-melted-cheese-black-background-generative-ai.jpg">
                <div class="content">
                    <div class="title">
                        SPICY BURGER
                    </div>
                    <!-- <div class="description">
                        Description
                    </div> -->
                </div>
            </div>
            <div class="item">
                <img src="Picture/backG_Pic/view-delicious-shawarma-dish.jpg">
                <div class="content">
                    <div class="title">
                        DELECIOUS SHAWARMA
                    </div>
                    <!-- <div class="description">
                        Description
                    </div> -->
                </div>
            </div>
            <div class="item">
                <img src="Picture/backG_Pic/fresh-pasta-with-hearty-bolognese-parmesan-cheese-generated-by-ai.jpg">
                <div class="content">
                    <div class="title">
                        HEARTY PARMESAN
                    </div>
                    <!-- <div class="description">
                        Description
                    </div> -->
                </div>
            </div>
            <div class="item">
                <img src="Picture/backG_Pic/delicious-pizza-studio.jpg">
                <div class="content">
                    <div class="title">
                        DELECIEUS PIZZA
                    </div>
                    <!-- <div class="description">
                        Description
                    </div> -->
                </div>
            </div>
        </div>
        <!-- next prev -->

        <div class="arrows">
            <button id="prev">
                < </button>
                    <button id="next">></button>
        </div>
        <!-- time running -->
        <!-- <div class="time"></div> -->
    </div>



    <!-- <div class="background">
            <img src="./Picture/wallpaperflare.com_wallpaper (2).jpg" alt="">
            <div class="information">
                <h1>Order The Most Delecious Food<br>& Drinks & Fruts </h1>
                <p>With The Best And Fast Delevery In Morocco</p>
                <button>Order Now</button>
            </div>
        </div> -->



    <!-- Product Slider -->
    <section id="tranding">
        <div class="container">
            <!-- <h3 class="text-center section-subheading">- popular Delivery -</h3> -->
             <!-- <img src="../wallpaperflare.com_wallpaper (2).jpg" alt="" width=''> -->
            <h1 class="section-heading">Discover Our Products</h1>
        </div>
        <div class="container">
            <div class="swiper tranding-slider">
                <div class="swiper-wrapper">
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="Picture/Slider_Pic/tranding-food-1.png" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price">$10</h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    Special Pizza
                                </h2>
                                <h3 class="food-rating">
                                    <span>500</span>
                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="Picture/Slider_Pic/tranding-food-2.png" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price">$20</h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    Meat Ball
                                </h2>
                                <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="Picture/Slider_Pic/tranding-food-3.png" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price">$40</h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    Burger
                                </h2>
                                <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="Picture/Slider_Pic/tranding-food-4.png" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price">$15</h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    Frish Curry
                                </h2>
                                <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="Picture/Slider_Pic/tranding-food-5.png" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price">$15</h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    Pane Cake
                                </h2>
                                <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="Picture/Slider_Pic/tranding-food-6.png" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price">$20</h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    Vanilla cake
                                </h2>
                                <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="Picture/Slider_Pic/tranding-food-7.png" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price">$8</h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    Straw Cake
                                </h2>
                                <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                </div>

                <div class="tranding-slider-control">
                    <div class="swiper-button-prev slider-arrow">
                        <ion-icon name="arrow-back-outline"></ion-icon>
                    </div>
                    <div class="swiper-button-next slider-arrow">
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </div>
    </section>



    <div class="pagination" id="pagination">
        <a id="prevPage">Previous</a>
        <a class="page-link" data-page="1">1</a>
        <a class="page-link" data-page="2">2</a>
        <a class="page-link" data-page="3">...</a>
        <a id="nextPage">Next</a>
        <p id="page-numbers"></p>
    </div>
    <!-- Product html -->
    <div class="Prod">
        <div class="Filter">
            <h1>Filter By</h1>
            <!-- <div class="name">
                <label for="">Name: </label>
                <div id="FilterByName">
                    Food <input type="radio" name="Rname" value="pizza"><br>
                    Juice <input type="radio" name="Rname" value="juice"><br>
                    IceCream <input type="radio" name="Rname" value="icecream"> -->

            <!-- name <input type="text" id="inpt"> -->
            <!-- </div> -->
            <!-- </div> -->
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
            <!-- <div class="kitchenCountry">
                <label for="">Country: </label>
                <div>
                    <label for="">Morocco</label> <input type="checkbox">
                    <label for="">Italy</label> <input type="checkbox">
                    <label for="">Usa</label> <input type="checkbox">
                </div>
            </div> -->
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
        </div>
        <div class="Food IceCream Juice">

            <?php

                include 'connect.php';


                $sql = $dbt->prepare('SELECT * from product order by rand()');//limit 6
                $sql->execute();
                $Tab_products = $sql->fetchAll();

                // echo '<pre>';
                // print_r($Tab_products);
                // echo '</pre>';

                foreach($Tab_products as $P){
                    ?>
            <div id="container" class='contai'>
                <img src="<?php echo '../AdminPage/' . $P['pic'] ?>" id="ProductPic">
                <p><?php echo $P['Title'] ?></p>
                <div id="Price">
                    Price : <span><?php echo $P['Price'] ?>$</span>
                </div>
                <a id='OrderLink' href='Ord.php?id_P=<?= $P['id_P'] ?>' >Order Now</a>
                <!-- <a href="" name='CartLink'>
                    <img src="./Picture/add.png" id='addtocart'  width='30px'>
                </a> -->

            </div>
            <?php } ?>
        </div>
    </div>


    <footer id="Foot">
        <section>
            <div>
                <h1>Personel Contact</h1>
                <p><a href="mailto:simoelabdellaoui08@gmail.com">simoelabdellaoui08@gmail.com</a></p>
                <p><a href="tel:0618116760">0618116760</a></p>
                <p></p>
            </div>
            <div>
                <h1>social Media</h1>
                <div>
                    <p><a href=""><img src="Picture/social media/icons8-facebook-96.png" alt=""></a></p>
                    <p><a href=""><img src="Picture/social media/icons8-instagram-96.png" alt=""></a></p>
                    <p><a href=""><img src="Picture/social media/icons8-linkedin-96.png" alt=""></a></p>
                    <p><a href=""><img src="Picture/social media/icons8-twitter-96.png" alt=""></a></p>
                    <p><a href=""><img src="Picture/social media/icons8-youtube-96.png" alt=""></a></p>
                </div>
            </div>
            <div>
                <h1>Services</h1>
                <p><a href="#">About</a></p>
                <p><a href="#"></a>Contact Us</p>
            </div>
        </section>
        <p>©All Right Reserved</p>
    </footer>


    <script src="./Userjs/Prof.js"></script>
    <script src="./Userjs/filter.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- <script src="./Userjs/tst.js"></script> -->
    <!-- <script src='./Userjs/backG.js'></script> -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="./Userjs/SLDprfl.js"></script>

</body>

</html>