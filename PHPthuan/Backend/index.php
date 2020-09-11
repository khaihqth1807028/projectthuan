<?php
session_start();
include_once "../Application/Connection.php";
$controller= isset($_GET["controller"])? $_GET["controller"]: "";
$controller=ucfirst($controller);
$nameClass = $controller."Controller";
$fileController = "Controllers/"."$controller"."Controller.php";
$view = $controller."View.php";
$fileviews="Views/$view";
$action = isset($_GET["action"])? $_GET["action"] : "index";
if (isset($_SESSION['username']) == false){

        include_once "Views/LayoutLogin.php";
}
else{
    include_once "Views/Layout.php";
}

