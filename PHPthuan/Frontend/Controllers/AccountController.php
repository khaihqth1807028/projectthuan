<?php

include_once "Models/AccountModel.php";

class AccountController extends AccountModel
{

    public function RegisterForm()
    {
        include "Views/AccountCreate.php";
    }
    public function RegisterPost()
    {
        echo $_POST['name'];
        $this->createPostRegister();
        echo "<script>alert('Bạn đã đăng kí thành công , bạn có thể Đăng nhập ')</script>";
    echo "<script>location.href='index.php?controller=Account&action=Login'</script>";
    }

    public function Checkout()
    {
        if (isset($_SESSION['account']) &&  $_SESSION['Cart'] != null) {
            $acc = json_decode(json_encode($_SESSION['account']),true);
           $this->checkoutModel1();
            echo "<script>alert('Bạn đã thanh toán thành công')</script>";
            unset($_SESSION["Cart"]);
            echo "<script>location.href='index.php?controller=Cart&action=CartList'</script>";
        } elseif (!isset($_SESSION['Cart']) || $_SESSION['Cart']== null) {
            echo "<script>alert('Bạn không có sản phẩm nào , check out thì có tác dụng j , hãy mua j đi ')</script>";
            echo "<script>location.href='index.php?controller=Cart&action=CartList'</script>";
        } else {
            echo "<script>alert('bạn chưa đăng nhập , hãy đăng nhập để checkout')</script>";
            echo "<script>location.href='index.php?controller=Cart&action=CartList'</script>";
        }


    }

    public function Login()
    {
        if (isset($_SESSION['account']) == true) {
            echo "<script>alert('Bạn muốn đổi tài khoản khác ,hãy đăng xuất')</script>";
            echo "<script>location.href='index.php'</script>";
        } else {
            include "Views/AccountLogin.php";
        }
    }

    public function Logout()
    {
        unset($_SESSION['account']);
        echo "<script>alert('Bạn đã đăng xuất')</script>";
        echo "<script>location.href='index.php?controller=Account&action=Login'</script>";
    }

    public function LoginPost()
    {
        $this->checkLogin();
        echo "<script>location.href='index.php'</script>";
    }

    public function Profile()
    {
        if (isset($_SESSION['account']) == true) {
            echo $email = $_SESSION['account']->email;
            $result = $this->listMyAccount($email);
            include "Views/ProfileCustomerView.php";
        } else {
            echo "<script>alert('bạn chưa đăng kí , định hack à , đi đăng kí đi')</script>";
            echo "<script>location.href='index.php?controller=Account&action=RegisterForm'</script>";
        }
    }

}


?>