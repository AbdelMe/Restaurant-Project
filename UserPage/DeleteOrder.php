<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        include 'connect.php';
        @$id_Order = $_GET['id_O'];
        $sql = $dbt->prepare('DELETE from Orders where id_O=?');
        $sql->execute([$id_Order]);
        header('location: OrderHistory.php?user_id='.$_SESSION['user_Id']);
    ?>
</body>
</html>