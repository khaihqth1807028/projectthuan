<?php
include_once "Models/CartModel.php";
class CartController extends CartModel{

    public function CheckCart(){

    }
public function AddCart(){

        $redirec=isset($_GET['return'])?$_GET['return']:"";
    $arr = json_decode(json_encode($this->listCart()),true);
//    $newProduct = array();
    $idPost= isset($_POST['id'])?$_POST['id']:"";
    echo $qty=isset($_POST['qty'])?$_POST['qty']:"";
    $productId=isset($_GET['id'])?$_GET['id']:"";
   echo  $category_id= isset($_GET['category_id'])?$_GET['category_id']:"";
    foreach ($arr as $value){

        $newProduct[$value['id']] = $value;
    }

//


    if (!isset($_SESSION['Cart'])||$_SESSION['Cart']==null){
        if ($_SERVER['REQUEST_METHOD']=='GET'){
            $newProduct[$productId]['quantity']=1;
            $_SESSION['Cart'][$productId] = $newProduct[$productId];
            $_SESSION['Cart'][$productId]['totalPrice']=($_SESSION['Cart'][$productId]['price']-($_SESSION['Cart'][$productId]['price']*$_SESSION['Cart'][$productId]['discount']/100))*$_SESSION['Cart'][$productId]['quantity'];

        }
      if ($_SERVER['REQUEST_METHOD']=='POST' && $qty>0){
            $newProduct[$idPost]['quantity']=$qty;
            $_SESSION['Cart'][$idPost] = $newProduct[$idPost];
            $_SESSION['Cart'][$idPost]['totalPrice']=($_SESSION['Cart'][$idPost]['price']-($_SESSION['Cart'][$idPost]['price']*$_SESSION['Cart'][$idPost]['discount']/100))*$_SESSION['Cart'][$idPost]['quantity'];
        }
        elseif ($_SERVER['REQUEST_METHOD']=='POST' && $qty<=0){
            echo "<script>alert('bạn không thể nhập giá trị này ở đây đc')</script>";
            echo "<script>location.href='index.php?controller=products&action=ProductDetail&id=$productId'</script>";
        }
    }
    elseif ($_SERVER['REQUEST_METHOD']=='POST'){
    if( isset($qty,$idPost) && $qty>0){
        $newProduct[$idPost]['quantity']=$qty;
        $_SESSION['Cart'][$idPost] = $newProduct[$idPost];
        $_SESSION['Cart'][$idPost]['totalPrice']=($_SESSION['Cart'][$idPost]['price']-($_SESSION['Cart'][$idPost]['price']*$_SESSION['Cart'][$idPost]['discount']/100))*$_SESSION['Cart'][$idPost]['quantity'];

    }
    elseif ( isset($qty,$idPost) && $qty<=0){
        echo "<script>alert('bạn không thể nhập giá trị này ở đây đc')</script>";
        echo "<script>location.href='index.php?controller=products&action=ProductDetail&id=$productId'</script>";
    }
    }
    else{
        if (array_key_exists($productId,$_SESSION['Cart'])){
            $_SESSION['Cart'][$productId]['quantity'] +=1;
            $_SESSION['Cart'][$productId]['totalPrice']=($_SESSION['Cart'][$productId]['price']-($_SESSION['Cart'][$productId]['price']*$_SESSION['Cart'][$productId]['discount']/100))*$_SESSION['Cart'][$productId]['quantity'];

        }
        else{
            $newProduct[$productId]['quantity']=1;
            $_SESSION['Cart'][$productId] = $newProduct[$productId];
            $_SESSION['Cart'][$productId]['totalPrice']=($_SESSION['Cart'][$productId]['price']-($_SESSION['Cart'][$productId]['price']*$_SESSION['Cart'][$productId]['discount']/100))*$_SESSION['Cart'][$productId]['quantity'];

        }
    }

    echo "<script>alert('Bạn đã thêm vào giỏ hàng')</script>";
switch ($redirec){
    case "New":

        echo "<script>location.href='index.php?#newProduct'</script>";
        break;
        case "Hot";
            echo "<script>location.href='index.php?#hotProduct'</script>";
            break;
    case "Sale":
        echo "<script>location.href='index.php?#Sale'</script>";
        break;
    case "ProductSearch":
        echo "<script>location.href='index.php?controller=Products&action=Search'</script>";
        break;
    case "":
        echo "<script>location.href='index.php?controller=products&action=ProductDetail&id=$productId'</script>";
        break;
    case "CategoryProduct":
        echo "<script>location.href='index.php?controller=products&action=CategoryProduct&category_id=$category_id'</script>";
        break;
    case "ProductCategory":
        echo "<script>location.href='index.php?controller=products&action=ProductCategory&category_id=$category_id'</script>";
        break;
}

}
public function CartList(){
include_once "Views/Cart.php";
}
public function RemoveCart(){
$id=isset($_GET['id'])?$_GET['id']:"";
unset($_SESSION['Cart'][$id]);
echo "<script>location.href='index.php?controller=Cart&action=CartList'</script>";

}
public function UpdateCart(){
    $id=isset($_GET['id'])?$_GET['id']:"";
    $quantity=isset($_POST['quantity'])?$_POST['quantity']:"";
    if ($quantity<=0){
        echo "<script>alert('Bạn đã nhập quantity không hợp lệ hãy nhập lại')</script>";
        echo "<script>location.href='index.php?controller=Cart&action=CartList'</script>";
    }
    else{
        $_SESSION['Cart'][$id]['quantity']=$quantity;
        echo "<script>location.href='index.php?controller=Cart&action=CartList'</script>";
    }

}
public function GiamPrice(){
        $id= isset( $_GET['id'])? $_GET['id']:"";
    $_SESSION['Cart'][$id]['quantity'] -=1;
    $_SESSION['Cart'][$id]['totalPrice']=($_SESSION['Cart'][$id]['price']-($_SESSION['Cart'][$id]['price']*$_SESSION['Cart'][$id]['discount']/100))*$_SESSION['Cart'][$id]['quantity'];

    if($_SESSION['Cart'][$id]['quantity'] <1) {
            echo "<script>var r =confirm('bạn muốn xóa sản phẩm khỏi giỏ hàng không')
if (r==true){
      location.href='index.php?controller=Cart&action=RemoveCart&id=$id';
} if(r == false){
      location.href='index.php?controller=Cart&action=TangPrice&id=$id';
    
}
</script>";
        }
    echo "<script>location.href='index.php?controller=Cart&action=CartList'</script>";
    }

    public function TangPrice(){
        $id= isset( $_GET['id'])? $_GET['id']:"";
        $_SESSION['Cart'][$id]['quantity'] +=1;
        $_SESSION['Cart'][$id]['totalPrice']=($_SESSION['Cart'][$id]['price']-($_SESSION['Cart'][$id]['price']*$_SESSION['Cart'][$id]['discount']/100))*$_SESSION['Cart'][$id]['quantity'];

        echo "<script>location.href='index.php?controller=Cart&action=CartList'</script>";
    }
}
?>