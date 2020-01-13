<?php
global $database;
// $sql = "SELECT * FROM products WHERE quantity>0";
$sql = "SELECT * FROM products";

$result = $database->query($sql);
?>