<?php

include_once "Models/UsersModel.php";


class UsersController extends UsersModel {

    /**
     * @return mixed
     */
    public function index(){

        $recordPerPage = 3;
        $numPage = ceil($this->totalRecord()/$recordPerPage);
        $result= $this->checkListUser($recordPerPage);
        return include_once "Views/UserView.php" ;
    }

    public function create(){
        $action ="index.php?controller=users&action=createPost";
        return include_once "Views/FormUsers.php";

    }

    public function createPost(){
        $this->createUser();
        echo "<script>alert('Thêm User thành công')</script>";
        // echo "<script>location.href='index.php?controller=Users&action=index'</script>";
    }
    public function edit(){
        $id = isset($_GET["id"])&&is_numeric($_GET["id"])? $_GET["id"] :0;
        $action = "index.php?controller=users&action=updatePost&id=$id";
        $record =$this->update();
        return include_once "Views/FormUsers.php";

    }
    public function updatePost(){
         $this->editUser();
        echo "<script>location.href='index.php?controller=users&action=index'</script>";
    }
    public function delete(){
        $id = isset($_GET["id"])&&is_numeric($_GET["id"])? $_GET["id"] :0;
        $this->deleteModel();
        echo "<script>location.href='index.php?controller=users&action=index'</script>";

    }
    public function remove(){
        $id = isset($_GET["id"])&&is_numeric($_GET["id"])? $_GET["id"] :0;
        $this->removeModel();
        echo "<script>location.href='index.php?controller=users&action=index'</script>";

    }
    public function checkbox(){

        $this->checkboxModel();
        echo "<script>location.href='index.php?controller=Users&action=index'</script>";
    }
}












