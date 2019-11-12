<?php

$db_name = 'chiahoutan_products';
$db_user = 'chiahoutan5309';
$db_pass = 'github5309';

$db     = new PDO("mysql:host=localhost;dbname = $db_name;
charset=utf8mb4", $db_user, $db_pass);

$statement = $db->prepare('SELECT id, name, price, description FROM products');
$statement -> sxecute();

$products = $statement->fetchAll();

header('Content-Type: application/json');
echo json_encode($products);

?>