 <?php

include "Models/HomeModel.php";
     class HomeController extends HomeModel{

public function hotProduct(){
    $hotProducts = $this->hotProductModel();
    include "Views/HotProductView.php";
}

public function newProducts(){
    $newProducts = $this->newProductModel();
    include "Views/NewProductView.php";
}
public function saleProducts(){
    $saleProducts = $this->saleProductModel();
    include "Views/SaleProductView.php";
}

     }