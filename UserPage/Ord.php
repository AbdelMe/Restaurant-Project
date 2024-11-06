<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="UserStyle/ordee.css">
    <link rel="icon" href="./Picture/hamburger.png">
</head>

<body>
    <!-- <div class="jjj">
        <h4><a href="Prof.php" id="homeL">Home</a> / <a href="#" id="ThisPag">Your Information</a></h4>
        <a href="Prof.php" id="BackL">Back</a>      
    </div> -->
    <div class="product" id='P_R'>
        <?php  


                include 'connect.php';

                @$p = $_GET['id_P'];

                $sql = $dbt->prepare('SELECT * from product where id_P=?');
                $sql->execute([$p]);
                $products = $sql->fetch();
                // echo '<pre>';
                // print_r($products);
                // echo '</pre>';



            ?>

        <div class="pic">
            <img src="<?php echo  '../AdminPage/' . $products['pic']  ?>">
        </div>
        <div class="Quantity">
            <div class="info">
                <p><?php  echo $products['Title'] ?></p>
                <p>Price: <span id='Cr_Price'><?php echo $products['Price'] ?></span>$</p>
                <p><?php echo $products['Price'] + 5 ?>$</p>
                <a href="#"><button>View More...</button></a>
            </div>
            <!-- <div class="more">
                </div> -->
            <div class="Add_Remove">
                <div class="icons">
                    <img src="Picture/Add_Remove/add.png" alt="" id='Add'>
                    <p id='Q_Product'>1</p>
                    <img src="Picture/Add_Remove/remove.png" alt="" id='Remove'>
                </div>
                <div class="deleteIcon">
                    <img src="Picture/Add_Remove/trash.png" alt="" id='Trash'>
                </div>
            </div>

        </div>

        <div class="Total">
            <div>
                <h2>Total Items: (<span id='Totalitems'>1</span> items)</h2>
                <h3>Total Price: $<span id='TotalPrice'></span></h3>
            </div>
            <div>
                <a href="Prof.php"><button>Back To Home</button></a>
                <button>continue shoping</button>
            </div>
        </div>

        <div class="rat">
            <p>Rate This Food:</p>
            <div class="stars">
                <span onclick="gfg(1)"  class='star'>★</span>
                <span onclick="gfg(2)"  class='star'>★</span>
                <span onclick="gfg(3)"  class='star'>★</span>
                <span onclick="gfg(4)"  class='star'>★</span>
                <span onclick="gfg(5)"  class='star'>★</span>
            </div>
            <!-- <h3 id="output">Rating is: 0/5</h3> -->
        </div>
    </div>

    <div class="order">
        <div class="editProfil">
            <form action="" method="post">
                <input type="text" placeholder="First Name" name='Fname' id='ttt'>
                <input type="text" placeholder="Last Name" name='Lname'>
                <input type="number" placeholder="Tele" name='tele'>
                <input type="text" placeholder="Adress" name='adress'>
                <div>
                    Fast Delevery <input type="radio" name="rad" value="2" checked>
                    Normal Delevery <input type="radio" name="rad" value="0">
                </div>
                <p>Total Price: $<input type="text" name="priceTot" id='TextInpt' readonly><span id='T_Price'></span>
                </p>
                <input type="hidden" name="id" value="<?= $products['id_P'] ?>">
                <input type="submit" value="ORDER" name='submit' id='ConfirmBtn'>
            </form>
        </div>
    </div>

    <?php

            include 'connect.php';

            @$Fname = $_POST['Fname'];
            @$Lname = $_POST['Lname'];
            @$tele = $_POST['tele'];
            @$adress = $_POST['adress'];
            // @$rad = $_POST['rad'];
            @$priceTot = $_POST['priceTot'];
            @$id = $_POST['id'];
            @$confirm = $_POST['submit'];

            @$C_Message = '';

            if(isset($confirm)){
                if(empty($Fname) || empty($Lname) ||empty($tele) ||empty($adress)){
                    echo "<p name='C_Message' id='C_Message' style='display:block;background-color: rgb(250, 156, 156);'>remplire les champs</p>";
                }
                else{
                    $sqll = $dbt->prepare('INSERT into Orders (First_name , Last_name , Tele , Adress , Price_Total , id_P)
                                    values(?,?,?,?,?,?)');
                    $sqll->execute([$Fname , $Lname , $tele , $adress , $priceTot , $id]);
                    echo "<p name='C_Message' id='C_Message' style='display:block'>Ordred Succesfuly</p>";
                    // header('location: Prof.php');
                }
            }

        
        ?>
    <!-- <p name='C_Message' id='C_Message'></p> -->

    <script src='./Userjs/validat.js'></script>

</body>

</html>