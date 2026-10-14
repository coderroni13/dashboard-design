<?php if (!isset($_SESSION['admin'])) header("Location: login.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include('sidebar.php');?>