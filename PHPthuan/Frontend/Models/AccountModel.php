
<?php




    class AccountModel{
        public function listMyAccount($email){
            $conn= Connection::getInstall();
            $query = $conn->query("select * from customers where email='$email'");
            $result = $query->fetch();
            return $result;
        }

        public function createPostRegister(){

          $name = isset($_POST['name'])?$_POST['name']:"";
          $email=isset($_POST['email'])?$_POST['email']:"";
          $password=  md5($_POST['password']);
          $phone = isset($_POST['phone'])?$_POST['phone']:"";
          $address = isset($_POST['address'])?$_POST['address']:"";
          $conn= Connection::getInstall();
            $query = $conn->prepare("insert into customers set name=:name, password=:password ,email=:email, phone=:phone,address=:address");
            $query->execute(array("name"=>$name,"password"=>$password,"email"=>$email,"phone"=>$phone,"address"=>$address));
        }
public function checkoutModel1(){
    $conn = Connection::getInstall();

    //---
    $customer_id = $_SESSION["account"]->Id;
    $totalPrice=0;
    foreach($_SESSION["Cart"] as $product){
       $totalPrice +=($product['totalPrice']);

    }
    //---
    //---
    $query = $conn->query("insert into orders set customer_id=$customer_id,date=now() ,price=$totalPrice");

   echo $order_id = $conn->lastInsertId();

echo $customer_id;
    //---
    //duyet cac ban ghi trong session array de insert vao orderdetails
    foreach($_SESSION["Cart"] as $product){
        $query = $conn->prepare("insert into orderdetails set order_id=:order_id, product_id=:product_id, price=:price, quantity=:quantity ");
        $query->execute(array("order_id"=>$order_id,"product_id"=>$product["id"],"price"=>$product["totalPrice"],"quantity"=>$product["quantity"]));
    }
    echo "<pre>";
    print_r($_SESSION['Cart']);
    echo "</pre>";
}

public function checkLogin()
{
    $conn = Connection::getInstall();
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $password = md5(isset($_POST['password']) ? $_POST['password'] : "");
    $query = $conn->query("select * from customers where email='$email'");
    $result = $query->fetch();

    if (isset($result->email)) {

        if ($result->password==$password){
//            $_SESSION["account"]["email"] = $email;
            $_SESSION["account"]= $result;
            echo "<script>alert('Bạn đăng nhập thành công')</script>";
            print_r($_SESSION['account']);
            # code...
//        echo "<script>alert('Bạn đăng nhập thành công')</script>";
        }
        # code...
        else {
            echo "<script>alert('Bạn nhập không đúng thông tin')</script>";

            echo "<script>location.href='index.php?controller=Account&action=Login'</script>";
        }
    }
    else {
        echo "<script>alert('Bạn nhập không đúng thông tin')</script>";

        echo "<script>location.href='index.php?controller=Account&action=Login'</script>";
    }
}
    }
    ?>