<?php
include("../config/db.php");
include("header.php");
include("../includes/sidebar.php");

// Example queries
$menuCount = mysqli_fetch_row(mysqli_query($conn, "SELECT COUNT(*) FROM menu"))[0];
$orderCount = mysqli_fetch_row(mysqli_query($conn, "SELECT COUNT(*) FROM orders"))[0];
$revenue = mysqli_fetch_row(mysqli_query($conn, "SELECT SUM(total) FROM orders"))[0];
?>

<div class="main-content">
  <h1>Dashboard</h1>

  <div class="stat-card">Menu Items: <?= $menuCount ?></div>
  <div class="stat-card">Orders: <?= $orderCount ?></div>
  <div class="stat-card">Revenue: $<?= $revenue ?></div>
</div>

<?php include("../includes/footer.php"); ?>

