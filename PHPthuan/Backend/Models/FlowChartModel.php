<?php



class FlowChartModel{

    public function chartProductModel(){
        $conn= Connection::getInstall();
        $queryCate=$conn->query("select id from categories where status=1 && parent_id=0");
       $cate= $queryCate->fetchAll();
       for($i =0;$i<=count($cate)-1 ;$i++){
           $query[$i]= $conn->query("select id from categories where parent_id = {$cate[$i]->id}");
           $result[$i] = $query[$i]->fetchAll();
           return $result[$i];
       }
        return $cate;
    }
    public function cateParentModel(){
        $conn= Connection::getInstall();
        $queryCate=$conn->query("select id from categories where status=1 && parent_id=0");
        $cate= $queryCate->fetchAll();
        return $cate;
    }
}