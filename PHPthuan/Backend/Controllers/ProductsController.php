<?php

include_once "Models/ProductsModel.php";


class ProductsController extends ProductsModel {

    /**
     * @return mixed
     */

    public function index(){
        $recordPerPage = 4;
        $numPage = ceil($this->totalRecord()/$recordPerPage);
        if(isset($_GET['oderid'])){
            $result = $this->checkListProductoderid($recordPerPage);
            $action="index.php?controller=products&action=index";
             include_once "Views/ProductView.php" ;
             return $action;

        }else{
            $result= $this->checkListProduct($recordPerPage);
            $action="index.php?controller=products&action=index&oderid=oderid";
             include_once "Views/ProductView.php" ;
            return $action;
        }
    }

    public function create(){
        $action ="index.php?controller=Products&action=createPost";
        return include_once "Views/FormProducts.php";
    }
    public function createPost(){
        $this->createProduct();
       echo "<script>alert('Thêm Product thành công')</script>";
       echo "<script>location.href='index.php?controller=Products&action=index'</script>";
    }
    public function edit(){
        $id = isset($_GET["id"])&&is_numeric($_GET["id"])? $_GET["id"] :0;
        $action = "index.php?controller=Products&action=updatePost&id=$id";
        $record =$this->update();
        return include_once "Views/FormProducts.php";

    }
    public function updatePost(){
         $this->updatePostModel();
       echo "<script>location.href='index.php?controller=Products&action=index'</script>";
    }
    public function delete(){
        $recordPerPage = 5;
        $numPage = ceil($this->totalRecord()/$recordPerPage);
        $id = isset($_GET["id"])&&is_numeric($_GET["id"])? $_GET["id"] :0;
        $this->deleteModel();
        echo "<script>alert('đã đưa vào thùng rác')</script>";

        if ($this->checkListProduct($recordPerPage) == null){
            echo "<script>location.href='index.php?controller=RycyleBin&action=index'</script>";
        }
        else{
            echo "<script>location.href='index.php?controller=Products&action=index'</script>";
        }


    }
    public function remove(){
        $id = isset($_GET["id"])&&is_numeric($_GET["id"])? $_GET["id"] :0;
        $this->removeModel();
        echo "<script>location.href='index.php?controller=Products&action=index'</script>";

    }

    public function parameters(){
        $product_id = isset($_GET["product_id"]) && is_numeric($_GET["product_id"])? $_GET["product_id"]:0;
        $result = $this->ModelReadParameterProduct($product_id);

        include "Views/ProductParametersView.php";
    }
    //them moi thuoc tinh
    public function createParameter(){
        $product_id = isset($_GET["product_id"])&&is_numeric($_GET["product_id"]) ? $_GET["product_id"] : 0;
        $action = "index.php?controller=products&action=createParameterPost&product_id=$product_id";
        //load view
        include "Views/ProductParametersCreate.php";
    }
    public function deleteParameter(){
        $id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
        $product_id = isset($_GET["product_id"])&&is_numeric($_GET["product_id"]) ? $_GET["product_id"] : 0;
        //goi ham modelUpdate de update ban ghi
        $this->modelDeleteParameter($id);
        echo "<script>location.href='index.php?controller=products&action=parameters&product_id=$product_id';</script>";

    }
    public function createParameterPost(){
        $product_id = isset($_GET["product_id"])&&is_numeric($_GET["product_id"]) ? $_GET["product_id"] : 0;

        //goi ham modelUpdate de update ban ghi
        $this->modelAddParameter($product_id);
        echo "<script>location.href='index.php?controller=products&action=parameters&product_id=$product_id';</script>";
//
    }
public function checkbox(){
    $this->checkboxModel();
    echo "<script>location.href='index.php?controller=Products&action=index'</script>";
}
}












