<?php
include 'db.php';

$name = $_POST['name'];
$price = $_POST['price'];

$sql = "INSERT INTO menu_items (name, price) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sd", $name, $price);
$stmt->execute();

header("Location: admin.php");
?>
