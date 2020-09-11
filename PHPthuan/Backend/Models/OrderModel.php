<?php


class OrderModel{

public function listOrderModel($recordPerPage){

    $numPage = ceil($this->totalRecord()/$recordPerPage);
    //lay bien p truyen tu url
    $p = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"]-1 : 0;
    //lay tu ban ghi nao
    $from = $p * $recordPerPage;
    //---
    //lay bien ket noi
    $conn = Connection::getInstall();
    //thuc hien truy van
    $query = $conn->query("select * from orders order by id desc limit $from,$recordPerPage");
    //lay tat cac ket qua tra ve
    $result = $query->fetchAll();
    return $result;
}
public function getCustomer($id){
    $conn = Connection::getInstall();
    //thuc hien truy van
    $query = $conn->query("select name from customers where id=$id");
    $result= $query->fetch();
    return $result;
}
public function totalRecord(){
    $conn = Connection::getInstall();
    $key = isset($_GET['key'])?$_GET['key']:"";
    //thuc hien truy van
    $query = $conn->query(" select id from orders where customer_id in (select id FROM customers WHERE email LIKE '%$key%') ");
    return $query->rowCount();
}
public function getOrderDetail(){
    $id=isset($_GET['id'])?$_GET['id']:"";
    $conn = Connection::getInstall();
    //thuc hien truy van
    $query = $conn->query("select * from orderdetails where order_id=$id ");
    $result= $query->fetchAll();
    return $result;
}

public function getNameCustomer($id){
    $conn = Connection::getInstall();
    //thuc hien truy van
    $query = $conn->query("select name from customers where Id=$id");
    $result= $query->fetch();
    return $result;
}
public function getNameProduct($prouct_id){
    $conn = Connection::getInstall();
    //thuc hien truy van
    $query = $conn->query("select name from products where id=$prouct_id");
    $result= $query->fetch();
    return $result;
}
public function doneOrder(){
    $id=isset($_GET['id'])?$_GET['id']:"";
    $conn = Connection::getInstall();
    //thuc hien truy van
    $query = $conn->query("update orders set status=1 where id=$id");
}
public function deleteOrdersModel(){
    $id=isset($_GET['id'])?$_GET['id']:"";
    $conn = Connection::getInstall();
// echo"<script>alert('Đã hủy đơn hàng')</script>";
    //thuc hien truy van
    $query = $conn->query("update orders set status=2 where id=$id");
}
public function getEmailCustomer($id){
    $conn = Connection::getInstall();
    //thuc hien truy van
    $query = $conn->query("select email from customers where Id=$id");
    $result= $query->fetch();
    return $result;
}
public function checkboxModel(){
    $status= isset($_POST['status'])?$_POST['status']:"";
    $checkbox=isset($_POST['checkbox'])?$_POST['checkbox']:"";
    $conn = Connection::getInstall();
    for($i=0 ; $i< count($checkbox); $i++) {
        $query = $conn->query("update orders set status=$status where id=$checkbox[$i]");
    }

}
public function dateDecsModels($recordPerPage){
    $numPage = ceil($this->totalRecord()/$recordPerPage);
    //lay bien p truyen tu url
    $p = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"]-1 : 0;
    //lay tu ban ghi nao
    $from = $p * $recordPerPage;
    //---
    //lay bien ket noi
    $conn = Connection::getInstall();
    //thuc hien truy van
    $query = $conn->query("select * from orders order by date asc limit $from,$recordPerPage");
    //lay tat cac ket qua tra ve
    $result = $query->fetchAll();
    return $result;
}
public function listOrderModelOrderByIdAsc($recordPerPage){
    $p = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"]-1 : 0;
    //lay tu ban ghi nao
    $from = $p * $recordPerPage;
    //---
    //lay bien ket noi
    $conn = Connection::getInstall();
    //thuc hien truy van
    $query = $conn->query("select * from orders order by id asc limit $from,$recordPerPage");
    //lay tat cac ket qua tra ve
    $result = $query->fetchAll();
    return $result;
}
public function listOrderModelOrderByIdDesc($recordPerPage){
    $p = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"]-1 : 0;
    //lay tu ban ghi nao
    $from = $p * $recordPerPage;
    //---
    //lay bien ket noi
    $conn = Connection::getInstall();
    //thuc hien truy van
    $query = $conn->query("select * from orders order by id desc limit $from,$recordPerPage");
    //lay tat cac ket qua tra ve
    $result = $query->fetchAll();
    return $result;

}

    public function listOrderModelOrderByPriceAsc($recordPerPage){
        $p = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"]-1 : 0;
        //lay tu ban ghi nao
        $from = $p * $recordPerPage;
        //---
        //lay bien ket noi
        $conn = Connection::getInstall();
        //thuc hien truy van
        $query = $conn->query("select * from orders order by price asc limit $from,$recordPerPage");
        //lay tat cac ket qua tra ve
        $result = $query->fetchAll();
        return $result;

    }
    public function listOrderModelOrderByPriceDesc($recordPerPage){
        $p = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"]-1 : 0;
        //lay tu ban ghi nao
        $from = $p * $recordPerPage;
        //---
        //lay bien ket noi
        $conn = Connection::getInstall();
        //thuc hien truy van
        $query = $conn->query("select * from orders order by price desc limit $from,$recordPerPage");
        //lay tat cac ket qua tra ve
        $result = $query->fetchAll();
        return $result;

    }

    public function listOrderModelOrderByStatusAsc($recordPerPage){
        $p = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"]-1 : 0;
        //lay tu ban ghi nao
        $from = $p * $recordPerPage;
        //---
        //lay bien ket noi
        $conn = Connection::getInstall();
        //thuc hien truy van
        $query = $conn->query("select * from orders order by status asc limit $from,$recordPerPage");
        //lay tat cac ket qua tra ve
        $result = $query->fetchAll();
        return $result;

    }
    public function listOrderModelOrderByStatusDesc($recordPerPage){
        $p = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"]-1 : 0;
        //lay tu ban ghi nao
        $from = $p * $recordPerPage;
        //---
        //lay bien ket noi
        $conn = Connection::getInstall();
        //thuc hien truy van
        $query = $conn->query("select * from orders order by status desc limit $from,$recordPerPage");
        //lay tat cac ket qua tra ve
        $result = $query->fetchAll();
        return $result;

    }




    public function searchOrderModel($recordPerPage){
        $key=isset($_GET['key'])?$_GET['key']:"";
        $p = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"]-1 : 0;
        //lay tu ban ghi nao
        $from = $p * $recordPerPage;
        //---
        //lay bien ket noi
        $conn = Connection::getInstall();
        //thuc hien truy van
        $query = $conn->query(" select * from orders where customer_id in (select id FROM customers WHERE email LIKE '%$key%')order by customer_id ASC limit $from,$recordPerPage");
        $result = $query->fetchAll();
        return $result;
    }
    public function searchOrderModelDescId($recordPerPage){
        $key=isset($_GET['key'])?$_GET['key']:"";
        $p = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"]-1 : 0;
        //lay tu ban ghi nao
        $from = $p * $recordPerPage;
        $conn = Connection::getInstall();
        $query = $conn->query(" select * from orders where customer_id in (select id FROM customers WHERE email LIKE '%$key%')order by customer_id DESC limit $from,$recordPerPage");        $result = $query->fetchAll();
        return $result;
    }
    public function searchOrderModelDescPrice($recordPerPage){
        $key=isset($_GET['key'])?$_GET['key']:"";
        $p = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"]-1 : 0;
        //lay tu ban ghi nao
        $from = $p * $recordPerPage;
        $conn = Connection::getInstall();
        $query = $conn->query(" select * from orders where customer_id in (select id FROM customers WHERE email LIKE '%$key%')order by price DESC limit $from,$recordPerPage");        $result = $query->fetchAll();
        return $result;
    }
    public function searchOrderModelAscPrice($recordPerPage){
        $key=isset($_GET['key'])?$_GET['key']:"";
        $p = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"]-1 : 0;
        //lay tu ban ghi nao
        $from = $p * $recordPerPage;
        $conn = Connection::getInstall();
        $query = $conn->query(" select * from orders where customer_id in (select id FROM customers WHERE email LIKE '%$key%')order by price Asc limit $from,$recordPerPage");        $result = $query->fetchAll();
        return $result;
    }
    public function searchOrderModelAscDate($recordPerPage){
        $key=isset($_GET['key'])?$_GET['key']:"";
        $p = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"]-1 : 0;
        //lay tu ban ghi nao
        $from = $p * $recordPerPage;
        $conn = Connection::getInstall();
        $query = $conn->query(" select * from orders where customer_id in (select id FROM customers WHERE email LIKE '%$key%')order by date Asc limit $from,$recordPerPage");        $result = $query->fetchAll();
        return $result;
    }
    public function searchOrderModelDescDate($recordPerPage){
        $key=isset($_GET['key'])?$_GET['key']:"";
        $p = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"]-1 : 0;
        //lay tu ban ghi nao
        $from = $p * $recordPerPage;
        $conn = Connection::getInstall();
        $query = $conn->query(" select * from orders where customer_id in (select id FROM customers WHERE email LIKE '%$key%')order by date DESC limit $from,$recordPerPage");        $result = $query->fetchAll();
        return $result;
    }
    public function searchOrderModelAscStatus($recordPerPage){
        $key=isset($_GET['key'])?$_GET['key']:"";
        $p = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"]-1 : 0;
        //lay tu ban ghi nao
        $from = $p * $recordPerPage;
        $conn = Connection::getInstall();
        $query = $conn->query(" select * from orders where customer_id in (select id FROM customers WHERE email LIKE '%$key%')order by status Asc limit $from,$recordPerPage");        $result = $query->fetchAll();
        return $result;
    }
    public function searchOrderModelDescStatus($recordPerPage){
        $key=isset($_GET['key'])?$_GET['key']:"";
        $p = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"]-1 : 0;
        //lay tu ban ghi nao
        $from = $p * $recordPerPage;
        $conn = Connection::getInstall();
        $query = $conn->query(" select * from orders where customer_id in (select id FROM customers WHERE email LIKE '%$key%')order by status DESC limit $from,$recordPerPage");        $result = $query->fetchAll();
        return $result;
    }


//    public function searchOrderModelAscId($recordPerPage){
//        $key=isset($_GET['key'])?$_GET['key']:"";
//        $p = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"]-1 : 0;
//        //lay tu ban ghi nao
//        $from = $p * $recordPerPage;
//        //---
//        //lay bien ket noi
//        $conn = Connection::getInstall();
//        //thuc hien truy van
////        $query1 = $conn->query('select customers.Id From customers INNER JOIN orders ON customers.Id = orders.customer_id ');
////        $resultQuery1 = $query1->fetchAll();
//        $query = $conn->query(" select * from orders order where customer_id in (select id FROM customers WHERE email LIKE '%$key%')limit $from,$recordPerPage");
//        $result = $query->fetchAll();
//        return $result;
//    }

}