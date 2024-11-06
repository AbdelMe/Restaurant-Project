<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="AdminStyle/Hom.css">
</head>
<body>
    <aside id='aside1'>
        <img src="Picture/profile.png" alt="">
        <div>
            <h1><a href="AddProduct.php">Add Product</a></h1>
        </div>
    </aside>
    <div id="infos">
        <div id='NbProduct'>
            <h2>Number Of Products</h2>
            <?php
                    include ('connect.php');
                    $E = $dbt->query('SELECT id_p from Product');
                    $s = $E->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <h1><?php echo(count($s)) ?></h1>
        </div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</body>
</html>