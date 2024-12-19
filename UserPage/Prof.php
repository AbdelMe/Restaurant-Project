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
    <link rel="stylesheet" href="UserStyle/Slider.css">
    <link rel="stylesheet" href="UserStyle/backGg.css">
    <link rel="stylesheet" href="UserStyle/Profiless.css">
    <link rel="icon" href="./Picture/food.png">

</head>
<?php  
    // if(! isset($_SESSION['email'])){
    //     header('location: signUp.php');
    //     // exit();
    // }
?>
<body>
    <?php
        include ('connect.php');
        session_start();

        $sql = $dbt->prepare('SELECT * from Notifications order by rand() limit 1');
        $sql->execute();
        $Notifs = $sql->fetch();

    ?>

    <!-- Header -->
    <div class="header">
        <div id='CartOfProduct'>0</div>
        <header>

            <!-- App Logo -->
            <div class="Logo_Search">
                <a href="prof.php"><img src="Picture/logolavilla-new_copy-2.png" alt=""></a>
                 <img src="Picture/caret-down.png" id='down-chevron'>
                 <h1 id='More_Options'>See More Options</h1>
            </div>

            <!-- Options For Scrolling into The App -->
            <div id='Options'>
                <a href="">Home</a>
                <a href="#AllProduct">Products</a>
                <a href="OrderHistory.php?user_id=<?=  $_SESSION['user_Id'] ?>">Your Orders</a>
                <a href="discounts.php">Discounts</a>
                <a href="#tranding">Food Slide</a>
            </div>

            <!-- More Options  -->
            <div class="Menu">
                <div class='divProfil'>
                    <img src="<?=  $_SESSION['picture']  ?>" id="profil">
                    <p>Hi, <?= $_SESSION['F_name']  ?> </p>
                </div>
                <div class='divPic'>
                    <img src="./Picture/picMe/profile.png" alt="" id='prof'>
                    <img src="./Picture/picMe/notification-bell.png" id="notification">
                    <div id='Notif_'></div>
                    <a href="signUp.php"><img src="./Picture/picMe/log-out.png" id="orders"></a>
                    <img src="Picture/shopping-cart.png" alt="" class='Cart'>
                </div>
            </div>

            <div id='AddedItems'></div>

            <!-- User Profil Bare -->
            <div id="sideBar">
                <div class="picSideBar">
                    <img src="Picture/logolavilla-new_copy-2.png">
                </div>
                <div class="services">
                    <h1>services</h1>
                    <a href="Prof.php">Home</a>
                    <a href="about.php">About</a>
                    <a href="contactUs.php">Contact Us</a>
                </div>
                <div class="links">
                    <h1>Profil</h1>
                    <a href="info.php?user_id=<?=  $_SESSION['user_Id'] ?>">Your Information</a>
                    <a href="OrderHistory.php?user_id=<?=  $_SESSION['user_Id'] ?>">Orders History</a>
                    <a href="Discounts.php">Discounts</a>
                </div>
            </div>

            <!-- Notification Bare -->
            <div class="notif">
                <div class="picText">
                    <img src="<?php if($sql->rowCount() === 0) echo './Picture/error404.png'; else echo '../AdminPage/' . $Notifs['picture']; ?>" id="TaginPic">
                    <h1 id="Notif_Title">
                        <?php if($sql->rowCount() === 0) echo 'NO New Pruducts'; else echo $Notifs['Title'] ?>
                    </h1>
                </div>
                <a href="#AllProduct" id="More_">Check More</a>
                <hr>
                <div class="rat">
                    <p>What's Your Rating Of This Product ?</p>
                    <div class="stars">
                        <span onclick="gfg(1)"  class='star'>★</span>
                        <span onclick="gfg(2)"  class='star'>★</span>
                        <span onclick="gfg(3)"  class='star'>★</span>
                        <span onclick="gfg(4)"  class='star'>★</span>
                        <span onclick="gfg(5)"  class='star'>★</span>
                    </div>
                </div>
            </div>
        </header>
    </div>


    <!-- carousel -->
    <div class="carousel">
        <!-- list item -->
        <div class="list">
            <div class="item">
                <img src="Picture/high-angle-vegetarian-burger-cutting-board-with-copy-space.jpg">
                <div class="content">
                    <!-- <div class="author">MED ABDEL</div> -->
                    <div class="title">SPICY FOOD</div>
                    <div class="topic">Burger</div>
                    <div class="des">
                        A high-angle vegetarian burger shot captures the burger from above,
                        showcasing its vibrant layers, such as fresh vegetables and a plant-based patty.
                        This angle highlights the textures and colors, making it visually appealing.
                    </div>
                    <div class="buttons">
                        <button><a href="about.php">SEE MORE</a></button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="Picture/delicious-ravioli-pasta-plate-with-fork-copy-space.jpg">
                <div class="content">
                    <!-- <div class="author">SPICY FOOD</div> -->
                    <div class="title">SPICY FOOD</div>
                    <div class="topic">Pasta</div>
                    <div class="des">     
                        A delicious ravioli pasta plate features delicate, stuffed pasta pockets filled
                        with rich ingredients like cheese, spinach, or meat, served with a flavorful sauce.
                        The dish is often garnished with fresh herbs, creating a perfect balance of textures 
                        and tastes in each bite.
                    </div>
                    <div class="buttons">
                        <button><a href="about.php">SEE MORE</a></button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="Picture/delicious-pizza-studio.jpg">
                <div class="content">
                    <!-- <div class="author">SPICY FOOD</div> -->
                    <div class="title">SPICY FOOD</div>
                    <div class="topic">Pizza</div>
                    <div class="des">
                        A pizza is a classic dish consisting of a round, thin crust topped with a rich tomato sauce,
                        melted cheese, and a variety of ingredients like vegetables, meats, and herbs. The combination
                        of crispy edges and gooey cheese, along with savory toppings, makes it a universally loved
                        comfort food, perfect for any occasion.
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
                <img src="Picture/high-angle-vegetarian-burger-cutting-board-with-copy-space.jpg">
                <div class="content">
                    <div class="title">
                        DELECIOUS Burger
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="Picture/delicious-ravioli-pasta-plate-with-fork-copy-space.jpg">
                <div class="content">
                    <div class="title">
                        HEARTY Burger
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="Picture/delicious-pizza-studio.jpg">
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
    </div>



    <!-- Product Slider -->
    <section id="tranding">
        <div class="container">
            <!-- <h3 class="text-center section-subheading">All You Need Is Here</h3> -->
             <!-- <img src="../wallpaperflare.com_wallpaper (2).jpg" alt="" width=''> -->
            <div id="DiscoverP">
                <h1>Discover Our Delicious Products</h1>
                <p>Explore our carefully selected food items, ranging from fresh ingredients to ready-to-eat meals. Find everything you need to bring flavor to your kitchen!</p>
            </div>
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

    <!-- Products Title -->
    <div id="ProductsTitle">
        <h1>Our Food Products</h1>
        <p>Discover a wide range of fresh ingredients and delicious food products. Browse through our curated selection and find everything you need to cook your favorite meals!</p>
    </div>


    <!-- Pagination -->
    <div class="pagination" id="pagination">
        <a id="prevPage">Previous</a>
        <a class="page-link" data-page="1">1</a>
        <a class="page-link" data-page="2">2</a>
        <a class="page-link" data-page="3">...</a>
        <a id="nextPage">Next</a>
        <p id="page-numbers"></p>
    </div>

    <!-- Product Details  -->
    <div class="Prod" id="AllProduct">

        <!-- Search For special Food -->
        <div class="Filter">
            <h1>Filter By</h1>
            <div id="F-ele">
                <div class="type">
                    <label for="" class="TitleLabel">Food Name: </label>
                    <div>
                        <input type="text" placeholder="Pizza,Icecream,Juice..." id="inpt">
                    </div>
                </div>
                <div class="price">
                    <label class="TitleLabel">price Less Than: </label>
                    <div>
                        <input type="number" placeholder="Price" id="LessThan"><br>
                    </div>
                    <label class="TitleLabel">price Biger Than: </label>
                    <div>
                        <input type="number" placeholder="Price" id="BigerThan"><br>
                    </div>
                </div>
                <div class="Date">
                    <label for="" class="TitleLabel">Posted Date:</label>
                    <div>
                        <select name="" id="SelectOpt" >
                            <option>--- All Time ---</option>
                            <option value="" id='opt1'>This Day</option>
                            <option value="" id='opt3'>This Month</option>
                            <option value="" id='opt4'>This Year</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Food Card  -->
        <div class="Food IceCream Juice">
            <?php

                include 'connect.php';

                $sql = $dbt->prepare('SELECT * from product order by rand()');//limit 6
                $sql->execute();
                $Tab_products = $sql->fetchAll();

                foreach($Tab_products as $P){
                    ?>
            <div id="container" class='contai'>
                <input type="number" hidden value="<?php echo $P['id_P'] ?>" id='InptId_P'>
                <img src="<?php echo '../AdminPage/' . $P['pic'] ?>" id="ProductPic">
                <p><?php echo $P['Title'] ?></p>
                <div id="Price">
                    Price : <span><?php echo $P['Price'] ?>$</span>
                </div>
                <a id='OrderLink' href='Ord.php?id_P=<?= $P['id_P'] ?>' >Order Now</a>
                    <img src="./Picture/add-to-cart.png" id='addtocart'  onclick="affiche(<?php echo $P['id_P'] ?>)">
                <span hidden><?php echo  $P['Posted_Date'] ?></span>
            </div>
            <?php } ?>
        </div>
    </div>

    <!-- Footer -->
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
                    <p><a href="https://www.facebook.com/DevMind1" target="_blank"><img src="Picture/social media/icons8-facebook-96.png" alt=""></a></p>
                    <p><a href=""><img src="Picture/social media/icons8-instagram-96.png" alt=""></a></p>
                    <p><a href="https://www.linkedin.com/in/mohammed-el-abdellaoui-397b15313/" target="_blank"><img src="Picture/social media/icons8-linkedin-96.png" alt=""></a></p>
                    <p><a href=""><img src="Picture/social media/icons8-twitter-96.png" alt=""></a></p>
                    <p><a href="https://www.youtube.com/@SimoHd" target="_blank"><img src="Picture/social media/icons8-youtube-96.png" alt=""></a></p>
                </div>
            </div>
            <div>
                <h1>Services</h1>
                <p><a href="about.php">About</a></p>
                <p><a href="ContactUs.php">Contact Us</a></p>
            </div>
        </section>
        <div id="Location">
            <div>
                <img src="./Picture/logolavilla-new_copy-2.png" width='300px'>
            </div>
            <div>
                <!-- <h1>Our Location</h1> -->
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d5988.3344617982!2d-5.0192026412014314!3d34.023284572190136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sla%20villa%20fes!5e1!3m2!1sen!2sus!4v1734015691393!5m2!1sen!2sus" 
                    width="400" 
                    height="200" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
        <p>©All Right Reserved</p>
    </footer>


    <script src="./Userjs/Prrffs.js"></script>
    <script src="./Userjs/filtt.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- <script src="./Userjs/tst.js"></script> -->
    <!-- <script src='./Userjs/backG.js'></script> -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="./Userjs/SLDprfl.js"></script>

</body>

</html>