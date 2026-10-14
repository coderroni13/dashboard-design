<?php
require_once __DIR__ . "/db.php";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM admins WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['admin'] = $email;
        header("Location: index.php");
    } else {
        $error = "Invalid credentials";
    }
}
?>
