<?php

include_once "Models/parametersModel.php";

class ParametersController extends parametersModel {

    /**
     * @return mixed
     */
    public function index(){

        $recordPerPage = 20;
        $numPage = ceil($this->totalRecord()/$recordPerPage);
        $result= $this->checkListparameters($recordPerPage);
        return include_once "Views/ParametersView.php" ;
    }

    public function create(){
        $action ="index.php?controller=parameters&action=createPost";
        return include_once "Views/FormParameters.php";

    }
    public function createPost(){
        $this->createparameters();
        echo "<script>alert('Thêm parameters thành công')</script>";
        echo "<script>location.href='index.php?controller=parameters&action=index'</script>";
    }
    public function edit(){
        $id = isset($_GET["id"])&&is_numeric($_GET["id"])? $_GET["id"] :0;
        $action = "index.php?controller=parameters&action=updatePost&id=$id";
        $record =$this->update();
        return include_once "Views/Formparameters.php";

    }
    public function updatePost(){
        $id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
        //goi ham modelUpdate de update ban ghi
         $this->editparameters($id);
         echo $id;
//        echo "<script>location.href='index.php?controller=parameters&action=index'</script>";
    }
    public function delete(){
        $id = isset($_GET["id"])&&is_numeric($_GET["id"])? $_GET["id"] :0;
        $this->deleteModel();
        echo "<script>location.href='index.php?controller=parameters&action=index'</script>";

    }
    public function remove(){
        $id = isset($_GET["id"])&&is_numeric($_GET["id"])? $_GET["id"] :0;
        $this->removeModel();
        echo "<script>location.href='index.php?controller=parameters&action=index'</script>";

    }
}












