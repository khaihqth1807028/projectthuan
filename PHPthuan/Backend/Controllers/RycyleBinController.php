<?php

include "Models/RycyleBinModel.php";
class RycyleBinController extends RycyleBinModel{

    public function index(){
    $data = $this->listBin();
    include_once "Views/BinView.php";

    }
    public function remove(){
        $id = $_GET["id"];
    $this->removeModel();
    echo $id;
    echo "<script>location.href='index.php?controller=RycyleBin&action=index'</script>";
    }


}