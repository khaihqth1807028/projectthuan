<?php

class UsersModel{


    public function checkListUser($recordPerPage){
        $numPage = ceil($this->totalRecord()/$recordPerPage);
        $p = isset($_GET["p"])&&$_GET["p"]>0 ? $_GET["p"]-1:0;
        $from =$p * $recordPerPage;
        $conn = Connection::getInstall();
        $query =$conn->query("select * from users order by id desc limit $from,$recordPerPage ");
        $result = $query->fetchAll();
        return $result;
    }
    public function totalRecord(){
        $conn = Connection::getInstall();
        $query = $conn->query("select id from users");
        return $query->rowCount();


    }
    public function createUser(){
        $username = $_POST["username"];
        echo $username;
        $password = md5($_POST["password"]);
        $status=$_POST["status"];
        $date = GETDATE();
print_r($date);
        $create_At="$date[year]-$date[mon]-$date[hours]" ;
        echo $create_At;
        $conn = Connection::getInstall();

        $query = $conn->prepare("insert into users set username=:username , password=:password ,create_At=:create_At, status=:status");
        $query->execute(array("username"=>$username,"password"=>$password,"create_At"=>$create_At,"status"=>$status));
    }
    public function update(){

        if(isset($_GET["id"])? $_GET["id"] : "");
        $id= $_GET["id"];

        $connection = Connection::getInstall();
        $query = $connection->prepare("select *from users where id=:id");
        $query->execute(array("id"=>$id));
        $record = $query->fetch();
        return $record;
    }
    public function editUser(){
        $username = $_POST["username"];

        $id = isset($_GET["id"]) ? $_GET["id"]:"";
//        $password = md5($_POST["password"]);
        echo $id;
        $status=$_POST["status"];
        $conn = Connection::getInstall();
        $query = $conn->prepare("update users set username=:username,status=:status where id=:id");
        $query->execute(array("id"=>$id,"username"=>$username,"status"=>$status));

    }
    public function deleteModel(){
        $id = isset($_GET["id"]) ? $_GET["id"]:"";
        $status=2;
        $conn = Connection::getInstall();
        $query = $conn->prepare("update users set status=:status where id=:id");
        $query->execute(array("id"=>$id,"status"=>$status));
    }
    public function removeModel(){
        $id = isset($_GET["id"]) ? $_GET["id"]:"";
        $status=1;
        $conn = Connection::getInstall();
        $query = $conn->prepare("update users set status=:status where id=:id");
        $query->execute(array("id"=>$id,"status"=>$status));
    }
    public function checkboxModel(){
        $checkbox = $_POST["checkbox"];
        print_r($checkbox);
        echo $checkbox[0];
        $status= $_POST["status"];

        $conn = Connection::getInstall();
        for($i=0 ; $i < count($checkbox);$i++){
            $query = $conn->query("update users set status=$status where id=$checkbox[$i]");
        }



    }
}
?>



