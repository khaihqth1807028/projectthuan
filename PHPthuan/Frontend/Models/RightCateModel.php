
<?php


    class RightCateModel{

        public function listCateModel(){
            $conn = Connection::getInstall();
            $query= $conn->query("select * from categories where status=1 && parent_id =0 ");
            $result = $query->fetchAll();
            return $result;
        }
        public function listCateSub($categories){
            $conn = Connection::getInstall();
            $query= $conn->query("select * from categories where status=1 && parent_id= $categories");
            $result = $query->fetchAll();
            return $result;
        }

    }
