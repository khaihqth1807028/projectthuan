<?php

include_once "Models/LoginModel.php";
class LoginController extends LoginModel{
    public function index(){
        include "Views/LoginView.php";
    }
    public function loginPost()
    {

            $this->checkLogin();

//
       header("location:index.php");
    }

    /**
     *
     */
    public function logout(){


    echo "<script>alert('đã Logout');</script>";

  unset($_SESSION["username"]);
          echo "<script>location.href='index.php';</script>";
 }
}









