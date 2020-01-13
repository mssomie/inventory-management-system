<?php
include 'config/init.php';

global $database;
// echo ('yeah')
// $sql = "SELECT * FROM products WHERE quantity>0";
$sql = "SELECT * FROM products";

$responses = $database->prepare($sql);
$responses->execute();
$response = $responses->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($response);
exit;
?>