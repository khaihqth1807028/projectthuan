<?php

include "Models/ProductsModel.php";

class ProductsController extends ProductsModel{

    public function ProductCategory(){
        $recordPerPage = 8;
        $category_id =isset($_GET['category_id'])? $_GET['category_id'] : "";
        //tinh so trang
        $numPage = ceil($this->totalRecord($category_id)/$recordPerPage);
        //goi ham ModelRead tu class ProductsModel de lay ket qua
        $listCategories = $this->findCategories($category_id,$recordPerPage);

        include "Views/ProductsCategory.php";
    }

    public function CategoryProduct(){
        $recordPerPage = 8;
        $category_id =isset($_GET['category_id'])? $_GET['category_id'] : "";
        //tinh so trang
        $numPage = ceil($this->totalRecordCate($category_id)/$recordPerPage);
        //goi ham ModelRead tu class ProductsModel de lay ket qua
        $listCategories = $this->categoriesFind($category_id,$recordPerPage);
//
        include "Views/CategoryProduct.php";
    }
    public function SearchPrice(){
        $recordPerPage = 8;
        //tinh so trang
        $numPage = ceil($this->totalRecordSearchPrice()/$recordPerPage);
        //goi ham ModelRead tu class ProductsModel de lay ket qua
        $listRecord = $this->modelSearchPrice($recordPerPage);
        //load view
        include "Views/ProductsSearch.php";
    }
    public function Search(){
        $recordPerPage = 8;
        //tinh so trang
        $numPage = ceil($this->totalRecordSearch()/$recordPerPage);
        //goi ham ModelRead tu class ProductsModel de lay ket qua
        $listRecord = $this->modelSearch($recordPerPage);
        //load view
        include "Views/ProductsSearchHome.php";
    }
    public function ProductDetail(){
//
        $id = isset($_GET['id'])?$_GET['id']:"";
        $result = $this->detailProduct($id);

        include "Views/ProductDetail.php";
    }
public function SearchPara(){
    $recordPerPage = 4;
    $para_id=isset($_GET['parameterId'])? $_GET['parameterId'] :"";
    //tinh so trang
    $numPage = ceil($this->totalRecordProductParameter($para_id)/$recordPerPage);

        $listProductParameter=  $this->ProductParameter();
        include "Views/ProductParameter.php";
}

}


?>