
<?php
    class CartModel{
        public function listCart(){
            $conn= Connection::getInstall();
            $query= $conn->query("select * from products where status=1");
            $result = $query->fetchAll();
            return $result;
        }

    }



















    ?>