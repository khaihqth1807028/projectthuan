<?php
include "Models/RightCateModel.php";
class RightCateController extends RightCateModel{
    public function listCategories(){
       $listCate = $this->listCateModel();
        include "Views/RightCategories.php";

    }
}
