<?php

include_once "Models/CategoriesModel.php";


class categoriesController extends categoriesModel {

    /**
     * @return mixed
     */
    public function index(){

        $recordPerPage = 20;
        $numPage = ceil($this->totalRecord()/$recordPerPage);
        $result= $this->checkListCategories($recordPerPage);
        return include_once "Views/CategoriesView.php" ;
    }

    public function create(){
        $action ="index.php?controller=categories&action=createPost";
        return include_once "Views/FormCategories.php";

    }
    public function createPost(){
        $this->createCategories();
        echo "<script>alert('Thêm Categories thành công')</script>";
        echo "<script>location.href='index.php?controller=categories&action=index'</script>";
    }
    public function edit(){
        $id = isset($_GET["id"])&&is_numeric($_GET["id"])? $_GET["id"] :0;
        $action = "index.php?controller=categories&action=updatePost&id=$id";
        $record =$this->update();
        return include_once "Views/FormCategories.php";

    }
    public function updatePost(){
        $id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
        //goi ham modelUpdate de update ban ghi
         $this->editCategories($id);
         echo $id;
//        echo "<script>location.href='index.php?controller=categories&action=index'</script>";
    }
    public function delete(){
        $id = isset($_GET["id"])&&is_numeric($_GET["id"])? $_GET["id"] :0;
        $this->deleteModel();
        echo "<script>location.href='index.php?controller=categories&action=index'</script>";

    }
    public function remove(){
        $id = isset($_GET["id"])&&is_numeric($_GET["id"])? $_GET["id"] :0;
        $this->removeModel();
        echo "<script>location.href='index.php?controller=categories&action=index'</script>";

    }
}












