<?php


class HomeModel{


public function hotProductModel(){
    $conn = Connection::getInstall();
    $query= $conn->query("select * from products where status=1 && hot=1 limit 6");
    $result=$query->fetchAll();
    return $result;
}

public function newProductModel(){
    $conn = Connection::getInstall();
    $query= $conn->query("select * from products where status=1 order by id desc limit 6");
    $result=$query->fetchAll();
    return $result;
}
public function saleProductModel(){
    $conn = Connection::getInstall();
    $query= $conn->query("select * from products where status=1 && discount >= 50 limit 6");
    $result=$query->fetchAll();
    return $result;
}


}








?>