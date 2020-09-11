<?php

class LoginModel{

    public function vali(){
        $username = $_POST["username"];
        $password = Md5($_POST["password"]);

            $err = array();
            if (empty($_POST["username"])){
                $err["errname"] = "Bạn cần nhập username";
            }
            if (empty($_POST["password"])){
                $err["errpass"] = "Bạn cần nhập pass";
            }

        return $err;
    }
    public function checkLogin()
    {

        $username = $_POST["username"];
        $password = Md5($_POST["password"]);

        $conn = Connection::getInstall();
        $query = $conn->prepare("select * from users where username=:username");
        $query->execute(["username" => $username]);
        $_SESSION["err"]="";
        $result = $query->fetch();
        print_r($result);
        if (isset($result->username)) {
            # code...
            if ($result->password == $password) {
                if ($result->status == 1) {
                    $_SESSION["username"] = $username;

                }
                # code...
            }

        }


    }

    public function checkOnline(){
        if (isset($_SESSION["username"])){
            $_SESSION["list"] = array();
            $_SESSION["list"][] = $_SESSION["username"];
            print_r($_SESSION["list"]);
        }





    }
}































