<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="UserStyle/OrderHistory.css">
</head>

<body>
    <div class="Back">
        <a href="Prof.php" id="BackLink">Back</a>
        <h4><a href="Prof.php" id="homeLink">Home</a> / <a href="#" id="ThisPage">Order History</a></h4>
    </div>
    <!-- <h1>Your Order History</h1> -->
    <div class="pagination" id="pagination">
            <a id="prevPage">Previous</a>
            <a class="page-link" data-page="1">1</a>
            <a class="page-link" data-page="2">2</a>
            <a class="page-link" data-page="3">...</a>
            <a id="nextPage">Next</a>
            <p id="page-numbers"></p>
        </div>
    <?php

        include 'connect.php';

        @$user_id = $_GET['user_id'];


        $sql = $dbt->prepare('SELECT distinct * from Orders o , Product p where o.id_P = p.id_P and user_id=?');
        $sql->execute([$user_id]);
        $Tab_products = $sql->fetchAll();

        // echo '<pre>';
        //     print_r($Tab_products);
        // echo '</pre>';
    ?>
    <table id='Table' class='Table'>
        <thead>
            <tr id='Tr1'>
                <th width='30%'>Product Name</th>
                <th width='10%'>Picture</th>
                <th width='10%'>Price</th>
                <th width='10%'>Quantity</th>
                <th width='10%'>Total Price</th>
                <th width='10%'>Order Date</th>
                <th width='10%'>Order Time</th>
                <th width='10%'>Action</th>
            </tr>
        </thead>
    </table>
    <table width='100%' id='Table1'>
        <tbody class='T-Body' id='T-Body'>
            <?php
                if(count($Tab_products) === 0){
                    echo '<h2 id="Nodata">No Orders</h2>';
                }
                else{
                    foreach($Tab_products as $P){
                
                ?>
                <tr id='Tr2' class='Tr2' width='100%'>
                    <td width='30%'><?= $P['Title']?></td>
                    <td width='10%'><img src="<?php echo '../AdminPage/' . $P['pic'] ?>"  id='ProdPic'></td>
                    <td width='10%'><?= $P['Price']?>$</td>
                    <td width='10%'><?= $P['Qte']?></td>
                    <td width='10%'><?= $P['Price_Total']?>$</td>
                    <td width='10%'><?= $P['Order_Date']?></td>
                    <td width='10%'><?= $P['Order_Time']?></td>
                    <td width='10%'>
                        <a href='DeleteOrder.php?id_O=<?= $P['id_O'] ?>'><button>Delete</button></a>
                        <button>Download</button>
                    </td>
                </tr>
                <?php } }?>
        </tbody>
    </table>

    <script src='./Userjs/OrderHist.js'></script>


</body>

</html>

