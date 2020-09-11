<?php

include_once "Models/FlowChartModel.php";
class FlowChartController extends FlowChartModel {

public function flowChart(){

   $parentIdCate =$this->cateParentModel();
    include_once "Views/FLowChart.php";



}


}