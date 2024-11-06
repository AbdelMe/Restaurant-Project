<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/order.css">
</head>
<body>
    <div class="product">
            <?php  


                include 'AdminPage/connect.php';

                @$p = $_GET['id_P'];

                $sql = $dbt->prepare('SELECT * from product where id_P=?');
                $sql->execute([$p]);
                $products = $sql->fetch();
                // echo '<pre>';
                // print_r($products);
                // echo '</pre>';



            ?>
            <div class="info">
                <p><?php  echo $products['Title'] ?></p>
                <p>Price: <?php echo $products['Price']  ?>$</p>
            </div>
            <div class="pic"><img src="<?php echo  'AdminPage/' . $products['pic']  ?>"></div>
            <div class="rat">
                <p>Rate This Food</p>
                <div class="star">
                    <img src="img/star (2).png" alt="">
                    <img src="img/star (2).png" alt="">
                    <img src="img/star (2).png" alt="">
                    <img src="img/star (2).png" alt="">
                    <img src="img/star (2).png" alt="">
                </div>
            </div>
        </div>

        <div class="order">
            <div class="editProfil">
                <form action="" method="post">
                    <input type="text" placeholder="First Name" name='Fname'>
                    <input type="text" placeholder="Last Name" name='Lname'>
                    <input type="number" placeholder="Tele" name='tele'>
                    <input type="text" placeholder="Adress" name='adress'>
                    <div>
                        Fast Delevery <input type="radio" name="rad" value="2" checked>
                        Normal Delevery <input type="radio" name="rad" value="0">
                    </div>
                    <p name='priceTot'>Total Price: <?php echo $products['Price'] ?>$</p>
                    <input type="hidden" name="id" value="<?= $products['id_P'] ?>">
                    <input type="submit" value="Confirm" name='submit' id='ConfirmBtn'>
                </form>
            </div>
        </div>

        <?php

            include 'AdminPage/connect.php';

            @$Fname = $_POST['Fname'];
            @$Lname = $_POST['Lname'];
            @$tele = $_POST['tele'];
            @$adress = $_POST['adress'];
            // @$rad = $_POST['rad'];
            @$priceTot = $products['Price'];
            @$id = $_POST['id'];
            @$confirm = $_POST['submit'];

            @$C_Message = '';

            if(isset($confirm)){
                $sqll = $dbt->prepare('INSERT into Orders (First_name , Last_name , Tele , Adress , Price_Total , id_P)
                                    values(?,?,?,?,?,?)');
                $sqll->execute([$Fname , $Lname , $tele , $adress , $priceTot , $id]);
                // $C_Message = 'Ordred Succesfuly';
            }
            // else {
            //     $C_Message = ''
            // }

        
        ?>
        <p name='C_Message' id='C_Message'></p>

        <script src='js/validation.js'></script>

</body>
</html>




