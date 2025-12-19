<?php
include 'db.php';

if (!empty($_POST['items'])) {
    foreach ($_POST['items'] as $item_id) {
        $qty = $_POST['qty'][$item_id];
        $stmt = $conn->prepare("INSERT INTO orders (item_id, quantity) VALUES (?, ?)");
        $stmt->bind_param("ii", $item_id, $qty);
        $stmt->execute();
    }
}

echo "<script>alert('Order Placed!'); window.location.href='menu.php';</script>";
?>
