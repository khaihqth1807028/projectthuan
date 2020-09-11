<?php


class Connection{
//    public function getInstall(){
//        $conn = new PDO('mysql:host=sql302.byethost14.com;dbname=b14_26455111_projectbanhang',"b14_26455111" ,"khaihieu231" );
//        $conn->exec("set names utf8");
//        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
//        return $conn;
//    }

    public function getInstall(){
        $conn = new PDO('mysql:host=localhost;dbname=projectbanhang',"root" ,"" );
        $conn->exec("set names utf8");
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        return $conn;
    }
}



























