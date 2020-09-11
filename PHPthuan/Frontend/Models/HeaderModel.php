<?php

class HeaderModel{


    public function showListCategories(){
        $conn = Connection::getInstall();
        $query = $conn->query("select * from categories where status=1 && parent_id=0");
        $result = $query->fetchAll();
        return $result;
    }
    public function showListCategoriesSub($category_id){
        $conn = Connection::getInstall();
        $query = $conn->query("select * from categories where status=1 && parent_id=$category_id");
        $result = $query->fetchAll();
        return $result;
    }


}