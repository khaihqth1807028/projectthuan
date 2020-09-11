<?php


include_once "Models/OrderModel.php";

class OrderController extends OrderModel {
    public function ListOrder(){
        $recordPerPage=4;
        $numPage = ceil($this->totalRecord()/$recordPerPage);
        $desc=isset($_GET['Desc'])?$_GET['Desc']:"";
        $asc=isset($_GET['Asc'])?$_GET['Asc']:"";
        $key =isset($_GET['key'])?$_GET['key']:"";
        if(isset($_GET['Desc'])&& $_GET['Desc']=='date'){
            $result = $this->dateDecsModels($recordPerPage);
            $action="index.php?controller=Order&action=ListOrder&Asc=date";
            $actionId="index.php?controller=Order&action=ListOrder&Desc=id";
            $actionPrice="index.php?controller=Order&action=ListOrder&Desc=price";
            $paginate = 'ListOrder&Desc=date';
            $actionStatus="index.php?controller=Order&action=ListOrder&Desc=status";
            include "Views/OrderView.php";
            return $action;

        }
        elseif(isset($_GET['Asc'])&& $_GET['Asc']=='date'){
            $result= $this->listOrderModel($recordPerPage);
            $action="index.php?controller=Order&action=ListOrder&Desc=date";
            $actionId="index.php?controller=Order&action=ListOrder&Asc=id";
            $actionPrice="index.php?controller=Order&action=ListOrder&Asc=price";
            $actionStatus="index.php?controller=Order&action=ListOrder&Asc=status";
            $paginate = 'ListOrder&Asc=date';
            include "Views/OrderView.php";
            return $action;
        }
        elseif(isset($_GET['Asc'])&& $_GET['Asc']=='id'){
            $result= $this->listOrderModelOrderByIdAsc($recordPerPage);
            $action="index.php?controller=Order&action=ListOrder&Desc=date";
            $actionId="index.php?controller=Order&action=ListOrder&Desc=id";
            $actionPrice="index.php?controller=Order&action=ListOrder&Asc=price";
            $actionStatus="index.php?controller=Order&action=ListOrder&Asc=status";
            $paginate = 'ListOrder&Asc=id';
            include "Views/OrderView.php";
            return $action;
        }
        elseif(isset($_GET['Desc'])&& $_GET['Desc']=='id'){

            $action="index.php?controller=Order&action=ListOrder&Desc=date";
            $actionId="index.php?controller=Order&action=ListOrder&Asc=id";
            $actionPrice="index.php?controller=Order&action=ListOrder&Desc=price";
            $searchOrder = "index.php?controller=Order&action=ListOrder&Desc=id&key=$key";
            $actionStatus="index.php?controller=Order&action=ListOrder&Desc=status";
            $result= $this->listOrderModelOrderByIdDesc($recordPerPage);
            $paginate = 'ListOrder&Desc=id';
            include "Views/OrderView.php";
            return $action;
        }
        elseif(isset($_GET['Desc'])&& $_GET['Desc']=='price'){
            $result= $this->listOrderModelOrderByPriceDesc($recordPerPage);
            $action="index.php?controller=Order&action=ListOrder&Desc=date";
            $actionId="index.php?controller=Order&action=ListOrder&Asc=id";
            $actionPrice="index.php?controller=Order&action=ListOrder&Asc=price";
            $actionStatus="index.php?controller=Order&action=ListOrder&Desc=status";
            $paginate = 'ListOrder&Desc=price';
            include "Views/OrderView.php";
            return $action;
        }
        elseif(isset($_GET['Asc'])&& $_GET['Asc']=='price'){
            $result= $this->listOrderModelOrderByPriceAsc($recordPerPage);
            $action="index.php?controller=Order&action=ListOrder&Desc=date";
            $actionId="index.php?controller=Order&action=ListOrder&Asc=id";
            $actionPrice="index.php?controller=Order&action=ListOrder&Desc=price";
            $actionStatus="index.php?controller=Order&action=ListOrder&Asc=status";
            $paginate = 'ListOrder&Asc=price';
            include "Views/OrderView.php";
            return $action;
        }
        elseif(isset($_GET['Desc'])&& $_GET['Desc']=='status'){
            $result= $this->listOrderModelOrderByStatusDesc($recordPerPage);

            $action="index.php?controller=Order&action=ListOrder&Desc=date";
            $actionId="index.php?controller=Order&action=ListOrder&Asc=id";
            $actionPrice="index.php?controller=Order&action=ListOrder&Asc=price";
            $actionStatus="index.php?controller=Order&action=ListOrder&Asc=status";
            $paginate = 'ListOrder&Desc=status';
            include "Views/OrderView.php";
            return $action;
        }
        elseif(isset($_GET['Asc'])&& $_GET['Asc']=='status'){
            $result= $this->listOrderModelOrderByStatusAsc($recordPerPage);
            $action="index.php?controller=Order&action=ListOrder&Desc=date";
            $actionId="index.php?controller=Order&action=ListOrder&Asc=id";
            $actionPrice="index.php?controller=Order&action=ListOrder&Desc=price";
            $actionStatus="index.php?controller=Order&action=ListOrder&Desc=status";
            $paginate = 'ListOrder&Asc=status';
            include "Views/OrderView.php";
            return $action;
        }






    }
    public function DetailOder(){

        $result = $this->getOrderDetail();
            include_once "Views/Order_Detail.php";
    }
    public function Done(){
        $this->doneOrder();
        $p =isset($_GET['p'])?$_GET['p']:"";
        $Asc=isset($_GET['Asc'])?$_GET['Asc']:"";
$key = isset($_GET['key'])?$_GET['key']:"";
        $Desc=isset($_GET['Desc'])?$_GET['Desc']:"";
        $id= isset($_GET['id'])?$_GET['id']:"";
        if(isset($Asc) && $Asc!=null ){
            if (isset($key) && $key!=null){
                echo "<script>location.href='index.php?controller=Order&action=Search&Asc=$Asc&key=$key&p=$p'</script>";

            }else{
                echo "<script>location.href='index.php?controller=Order&action=ListOrder&Asc=$Asc&p=$p'</script>";
            }
        }
        elseif(isset($Desc) && $Desc!=null){
            if (isset($key) && $key!=null){
                echo "<script>location.href='index.php?controller=Order&action=Search&Desc=$Desc&key=$key&p=$p'</script>";

            }else{
                echo "<script>location.href='index.php?controller=Order&action=ListOrder&Desc=$Desc&p=$p'</script>";
            }
        }
    }
    public function DeleteOrder(){
        $this->deleteOrdersModel();
 $p =isset($_GET['p'])?$_GET['p']:"";
 echo $Asc=isset($_GET['Asc'])?$_GET['Asc']:"";
 $Desc=isset($_GET['Desc'])?$_GET['Desc']:"";
 echo $key=isset($_GET['key'])?$_GET['key']:"";
        $id= isset($_GET['id'])?$_GET['id']:"";
        if(isset($Asc) && $Asc!=null ){
            if (isset($key) && $key!=null){
                echo "<script>location.href='index.php?controller=Order&action=Search&Asc=$Asc&key=$key&p=$p'</script>";

            }else{
                echo "<script>location.href='index.php?controller=Order&action=ListOrder&Asc=$Asc&p=$p'</script>";
            }
        }
      elseif(isset($Desc) && $Desc!=null){
          if (isset($key) && $key!=null){
              echo "<script>location.href='index.php?controller=Order&action=Search&Desc=$Desc&key=$key&p=$p'</script>";

          }else{
              echo "<script>location.href='index.php?controller=Order&action=ListOrder&Desc=$Desc&p=$p'</script>";
          }
      }
    }
    public function Checkbox(){
        $p =isset($_GET['p'])?$_GET['p']:"";
        echo $Asc=isset($_GET['Asc'])?$_GET['Asc']:"";
        $Desc=isset($_GET['Desc'])?$_GET['Desc']:"";
        echo $key=isset($_GET['key'])?$_GET['key']:"";
        $id= isset($_GET['id'])?$_GET['id']:"";
        $checkbox= isset($_POST['checkbox'])?$_POST['checkbox']:"";
        if(isset($Asc) && $Asc!=null && !isset($checkbox) || $checkbox==null ){
            if (isset($key) && $key!=null){
                echo "<script>location.href='index.php?controller=Order&action=Search&Asc=$Asc&key=$key&p=$p'</script>";

            }else{
                echo "<script>location.href='index.php?controller=Order&action=ListOrder&Asc=$Asc&p=$p'</script>";
            }
        }
        elseif(isset($Desc) && $Desc!=null && !isset($checkbox) || $checkbox==null){
            if (isset($key) && $key!=null){
                echo "<script>location.href='index.php?controller=Order&action=Search&Desc=$Desc&key=$key&p=$p'</script>";

            }else{

                echo "<script>location.href='index.php?controller=Order&action=ListOrder&Desc=$Desc&p=$p'</script>";
            }
        }

        if(isset($Asc) && $Asc!=null ){
            if (isset($key) && $key!=null){
                $this->checkboxModel();
                echo "<script>location.href='index.php?controller=Order&action=Search&Asc=$Asc&key=$key&p=$p'</script>";

            }else{
                $this->checkboxModel();
                echo "<script>location.href='index.php?controller=Order&action=ListOrder&Asc=$Asc&p=$p'</script>";
            }
        }
        elseif(isset($Desc) && $Desc!=null){
            if (isset($key) && $key!=null){
                $this->checkboxModel();
                echo "<script>location.href='index.php?controller=Order&action=Search&Desc=$Desc&key=$key&p=$p'</script>";

            }else{
                $this->checkboxModel();
                echo "<script>location.href='index.php?controller=Order&action=ListOrder&Desc=$Desc&p=$p'</script>";
            }
        }
    }
    public function Search(){
        $recordPerPage=4;
        $numPage = ceil($this->totalRecord()/$recordPerPage);

        $key=isset($_GET['key'])?$_GET['key']:"";
        $paginate = 'Desc=id';
        if(isset($_GET['Asc'])&& $_GET['Asc']=='id'){
            $result=$this-> searchOrderModel($recordPerPage);
            $action="index.php?controller=Order&action=Search&Asc=date&key=$key";
            $actionId="index.php?controller=Order&action=Search&Desc=id&key=$key";
            $actionPrice="index.php?controller=Order&action=Search&Asc=price&key=$key";
            $actionStatus="index.php?controller=Order&action=Search&Asc=status&key=$key";
            $paginate = "Search&Asc=id&key=$key";
            include "Views/OrderView.php";
            return $action;
        }
        if(isset($_GET['Desc'])&& $_GET['Desc']=='id'){
            $result=$this-> searchOrderModelDescId($recordPerPage);
            $action="index.php?controller=Order&action=Search&Desc=date&key=$key";
            $actionId="index.php?controller=Order&action=Search&Asc=id&key=$key";
            $actionPrice="index.php?controller=Order&action=Search&Desc=price&key=$key";
            $actionStatus="index.php?controller=Order&action=Search&Desc=status&key=$key";
            $paginate = "Search&Asc=id&key=$key";
            include "Views/OrderView.php";
            return $action;
        }
        if(isset($_GET['Desc'])&& $_GET['Desc']=='price'){
            $result=$this-> searchOrderModelDescPrice($recordPerPage);
            $action="index.php?controller=Order&action=Search&Desc=date&key=$key";
            $actionId="index.php?controller=Order&action=Search&Desc=id&key=$key";
            $actionPrice="index.php?controller=Order&action=Search&Asc=price&key=$key";
            $paginate = "Search&Desc=id&key=$key";
            $actionStatus="index.php?controller=Order&action=Search&Desc=status&key=$key";
            include "Views/OrderView.php";
            return $action;
        }
        if(isset($_GET['Asc'])&& $_GET['Asc']=='price'){
            $result=$this-> searchOrderModelAscPrice($recordPerPage);
            $action="index.php?controller=Order&action=Search&Desc=date&key=$key";
            $actionId="index.php?controller=Order&action=Search&Desc=id&key=$key";
            $actionPrice="index.php?controller=Order&action=Search&Desc=price&key=$key";
            $actionStatus="index.php?controller=Order&action=Search&Asc=status&key=$key";
            $paginate = "Search&Asc=id&key=$key";
            include "Views/OrderView.php";
            return $action;
        }
        if(isset($_GET['Desc'])&& $_GET['Desc']=='date'){
            $result=$this-> searchOrderModelDescDate($recordPerPage);
            $action="index.php?controller=Order&action=Search&Asc=date&key=$key";
            $actionId="index.php?controller=Order&action=Search&Desc=id&key=$key";
            $actionPrice="index.php?controller=Order&action=Search&Desc=price&key=$key";
            $actionStatus="index.php?controller=Order&action=Search&Desc=status&key=$key";
            $paginate = "Search&Desc=id&key=$key";
            include "Views/OrderView.php";
            return $action;
        }
        if(isset($_GET['Asc'])&& $_GET['Asc']=='date'){
            $result=$this-> searchOrderModelAscDate($recordPerPage);
            $action="index.php?controller=Order&action=Search&Desc=date&key=$key";
            $actionId="index.php?controller=Order&action=Search&Asc=id&key=$key";
            $actionPrice="index.php?controller=Order&action=Search&Asc=price&key=$key";
            $actionStatus="index.php?controller=Order&action=Search&Asc=status&key=$key";
            $paginate = "Search&Asc=id&key=$key";
            include "Views/OrderView.php";
            return $action;
        }
        if(isset($_GET['Desc'])&& $_GET['Desc']=='status'){
            $result=$this-> searchOrderModelDescStatus($recordPerPage);
            $action="index.php?controller=Order&action=Search&Asc=date&key=$key";
            $actionId="index.php?controller=Order&action=Search&Desc=id&key=$key";
            $actionPrice="index.php?controller=Order&action=Search&Desc=price&key=$key";
            $actionStatus="index.php?controller=Order&action=Search&Asc=status&key=$key";
            $paginate = "Search&Desc=status&key=$key";
            include "Views/OrderView.php";
            return $action;
        }
        if(isset($_GET['Asc'])&& $_GET['Asc']=='status'){
            $result=$this-> searchOrderModelAscStatus($recordPerPage);
            $action="index.php?controller=Order&action=Search&Desc=date&key=$key";
            $actionId="index.php?controller=Order&action=Search&Asc=id&key=$key";
            $actionPrice="index.php?controller=Order&action=Search&Asc=price&key=$key";
            $actionStatus="index.php?controller=Order&action=Search&Desc=status&key=$key";
            $paginate = "Search&Asc=status&key=$key";
            include "Views/OrderView.php";
            return $action;
        }
        include_once "Views/OrderView.php";

    }
}