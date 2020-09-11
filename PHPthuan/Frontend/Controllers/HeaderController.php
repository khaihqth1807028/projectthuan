<?php

include "Models/HeaderModel.php";
class HeaderController extends HeaderModel {

    public function listCate()
    {
        $list =  $this->showListCategories();
        include "Views/HeaderView.php";

    }

    public function listCateTrangTrong()
    {
        $list =  $this->showListCategories();
        include "Views/HeaderTrangTrongView.php";

    }

}
