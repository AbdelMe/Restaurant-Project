<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="UserStyle/order.css">
    <link rel="icon" href="./Picture/food.png">
</head>

<body>
    <?php
        session_start();
    ?>

    <!-- Back Link -->
    <div class="Back">
        <a href="Prof.php" id="BackLink">Back</a>
        <h4><a href="Prof.php" id="homeLink">Home</a> / <a href="#" id="ThisPage">Order </a></h4>
    </div>

    <!-- Product Details  -->
    <div class="product" id='P_R'>
        <?php  
                include 'connect.php';

                @$p = $_GET['id_P'];
                $sql = $dbt->prepare('SELECT * from product where  id_P=?');
                $sql->execute([$p]);
                $products = $sql->fetch();

                $sql1 = $dbt->prepare('SELECT discount_Num from discount where  id_P=?');
                $sql1->execute([$_GET['id_P']]);
                $discount = $sql1->fetch();
        ?>

        <div class="pic">
            <img src="<?php echo  '../AdminPage/' . $products['pic']  ?>">
        </div>
        <div class="Quantity">
            <div class="info">
                <p><?php  echo $products['Title'] ?></p>
                <p>Price: <span id='Cr_Price'><?php echo $products['Price'] ?></span>$</p>
                <p><?php echo $products['Price'] + 5 ?>$</p>
                <p id='discount_Num'>Discount: <span><?php if($sql1->rowCount() === 0) echo '0'; else echo $discount['discount_Num'] ?></span>%</p>
            </div>

            <!-- Add Or Remove From Quantity -->
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

        <!-- Total Items & Price  -->
        <div class="Total">
            <div>
                <h2>Total Items: (<span id='Totalitems'>1</span> items)</h2>
                <h3>Total Price: $<span id='TotalPrice'></span></h3>
            </div>
            <div>
                <a href="Prof.php"><button>Back To Home</button></a>
                <a href="OrderHistory.php?user_id=<?=  $_SESSION['user_Id'] ?>"><button>See Orders History</button></a>
            </div>
        </div>

        <!-- Rating -->
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

    <!-- Form For Ordring -->
    <div class="order">
        <div class="editProfil">
            <form action="" method="post">
                <input type="text" placeholder="First Name" name='Fname' id='ttt'>
                <input type="text" placeholder="Last Name" name='Lname'>
                <input type="number" placeholder="Tele" name='tele'>
                <input type="text" placeholder="Adress" name='adress'>
                <p>Total Price: $<input type="text" name="priceTot" id='TextInpt' readonly><span id='T_Price'></span>
                </p>
                <input type="hidden" name="id" value="<?= $products['id_P'] ?>">
                <input type="text" name="Qte" id='Qte' value='1' hidden>
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
            @$priceTot = $_POST['priceTot']; 

            @$id = $_POST['id'];
            @$user_id = $_SESSION['user_Id'] ;
            @$confirm = $_POST['submit'];
            @$Qte = $_POST['Qte'] ;

            @$C_Message = '';

            if(isset($confirm)){
                if(empty($Fname) || empty($Lname) ||empty($tele) ||empty($adress)){
                    echo "<p name='C_Message' id='C_Message' style='display:block;background-color: rgb(250, 156, 156);'>remplire les champs</p>";
                }
                else{
                    $sqll = $dbt->prepare('INSERT into Orders (First_name , Last_name , Tele , Adress , Price_Total, Qte, user_id , id_P)
                                    values(?,?,?,?,?,?,?,?)');
                    $sqll->execute([$Fname , $Lname , $tele , $adress , $priceTot, $Qte, $user_id, $id]);
                    echo "<p name='C_Message' id='C_Message' style='display:block'>Ordred Succesfuly</p>";
                }
            }
        ?>
    <script src='./Userjs/vallyy.js'></script>
</body>

</html>