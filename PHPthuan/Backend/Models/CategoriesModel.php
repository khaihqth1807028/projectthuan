<?php

class categoriesModel{


    public function checkListCategories($recordPerPage){
        $numPage = ceil($this->totalRecord()/$recordPerPage);
        $p = isset($_GET["p"])&&$_GET["p"]>0 ? $_GET["p"]-1:0;
        $from =$p * $recordPerPage;
        $conn = Connection::getInstall();
        $query =$conn->query("select * from categories where parent_id=0 order by id desc limit $from,$recordPerPage ");
        $result = $query->fetchAll();
        return $result;
    }
    public function totalRecord(){
        $conn = Connection::getInstall();
        $query = $conn->query("select id from categories where parent_id=0");
        return $query->rowCount();
    }
    public function createCategories(){
        $name = $_POST["name"];
        $parent_id=$_POST["parent_id"];
        $status=$_POST["status"];

        $conn = Connection::getInstall();
        $query = $conn->prepare("insert into categories set name=:name , parent_id=:parent_id , status=:status");
        $query->execute(array("name"=>$name,"parent_id"=>$parent_id,"status"=>$status,));

    }
    public function update(){

        if(isset($_GET["id"])? $_GET["id"] : "");
        $id= $_GET["id"];

        $connection = Connection::getInstall();
        $query = $connection->prepare("select *from categories where id=:id");
        $query->execute(array("id"=>$id));
        $record = $query->fetch();
        return $record;
    }
    public function editCategories($id){
        $name = $_POST["name"];
        $parent_id=$_POST["parent_id"];
//        $id = isset($_GET["id"]) ? $_GET["id"]:"";
        $status=$_POST["status"];
        $conn = Connection::getInstall();
        $query = $conn->prepare("update categories set name=:name,parent_id=:parent_id, status=:status where id=:id");
        $query->execute(array("id"=>$id,"name"=>$name,"status"=>$status,"parent_id"=>$parent_id));
    }
    public function deleteModel(){
        $id = isset($_GET["id"]) ? $_GET["id"]:"";
        $status=2;
        $conn = Connection::getInstall();
        $query = $conn->prepare("update categories set status=:status where id=:id");
        $query->execute(array("id"=>$id,"status"=>$status));
    }
    public function removeModel(){
        $id = isset($_GET["id"]) ? $_GET["id"]:"";
        $status=1;
        $conn = Connection::getInstall();
        $query = $conn->prepare("update categories set status=:status where id=:id");
        $query->execute(array("id"=>$id,"status"=>$status));
    }
    // lấy các danh mục cấp con từ view sẽ gọi hàm này
    public function ModelReadSub($category_id){
        $conn = Connection::getInstall();
        $query = $conn->query("select * from categories where parent_id=$category_id");
        $result =$query->fetchAll();
        return $result;
    }
    public function ModelReadDropDownCategory(){
        $conn = Connection::getInstall();
        $query =$conn->query("select * from categories where parent_id = 0 && status=1 order by id desc ");
        $result = $query->fetchAll();
        return $result;
    }
}
?>



