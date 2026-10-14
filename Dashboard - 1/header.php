<?php
if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CulinaryHub Dashboard</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- Header Bar -->
    <div class="header-bar">
      <div class="brand-container">
        <div class="brand-logo">C</div>
        <div class="brand-name">CulinaryHub</div>
      </div>

      <div class="header-actions">
        <div class="search-bar">
          <span>🔍</span>
          <input type="text" placeholder="Search for dishes, orders..." />
        </div>

        <div>🔔</div>

        <div class="user-profile">
          <div class="user-avatar">MJ</div>
          <div>Maria Johnson</div>
        </div>
      </div>
    </div>