<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<?php
// lay bien controller tu url


if (file_exists("Controllers/LoginController.php")){
    include "Controllers/LoginController.php";
    if (class_exists("LoginController")) {
        $obj = new LoginController();
        $obj->$action();
    }
}
?>
<script src="Assets/js/style.js"></script>
</body>
</html>