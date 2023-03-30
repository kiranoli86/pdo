<?php
include("connection/connect.php"); //connection to db
error_reporting(0);
session_start();

if (isset($_GET['order_del'])) {
    $stmt = $db->prepare("DELETE FROM users_orders WHERE o_id = ?");
    $stmt->bindParam(1, $_GET['order_del']);
    $stmt->execute();
    header("location:your_orders.php");
} 
?>




