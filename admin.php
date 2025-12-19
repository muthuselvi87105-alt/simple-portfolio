<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin - Restaurant System</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<div class="overlay">
    <h1>Admin Panel</h1>

    <form action="add_item.php" method="post">
        <input type="text" name="name" placeholder="Item Name" required>
        <input type="number" step="0.01" name="price" placeholder="Price" required>
        <button class="btn" type="submit">Add Item</button>
    </form>

    <h2>Menu Items</h2>
    <?php
    $result = $conn->query("SELECT * FROM menu_items");
    while($row = $result->fetch_assoc()) {
        echo "<p>{$row['name']} - ₹{$row['price']}
              <a href='delete_item.php?id={$row['id']}'><button class='btn'>Delete</button></a></p>";
    }
    ?>
</div>
</body>
</html>
