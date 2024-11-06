<?php

include ('AdminPage/connect.php');

$sql = $dbt->prepare('SELECT * from product');
$sql->execute();
$Tab_products = $sql->fetchAll();

echo '<pre>';
print_r($Tab_products);
echo '</pre>';

?>