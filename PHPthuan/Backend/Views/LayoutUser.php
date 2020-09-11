<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css">
</head>
<body>
<?php
// lay bien controller tu url


if (file_exists("Controllers/UserController.php")){
    include "Controllers/UserController.php";
    if (class_exists("UserController")) {
        $obj = new UsersController();
        $obj->$action();
    }
}
?>
</body>
</html>