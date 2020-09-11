<?php


class RycyleBinModel{

public function listBin(){
    $conn= Connection::getInstall();
    $query =$conn->query("select * from products where status=2");
    $data = $query->fetchAll();
    return $data;
}
public function getCate($category_id){
    $conn= Connection::getInstall();
    $query =$conn->query("select name from categories where id=$category_id");
    $cate = $query->fetch();
    return $query->rowCount() >0? $cate->name:"";

}
public function removeModel(){
    $id = isset($_GET["id"]) ? $_GET["id"]:"";
    $conn= Connection::getInstall();
    $query =$conn->query("update products set status=1 where id=$id");
}

}