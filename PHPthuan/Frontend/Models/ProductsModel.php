<?php




class ProductsModel{
    public function findCategories($category_id,$pageSize){
        $orderBy = isset($_GET['orderBy'])?$_GET['orderBy']: " ";
        $groupPrice =isset($_GET['groupPrice'])? $_GET['groupPrice']: " ";
        $strGroupPrice="";
        $strOrder="";
        switch ($orderBy){
            case "priceTang";
                $strOrder = " order by price asc ";
                break;
                case "priceGiam";
                    $strOrder = " order by price desc ";
                    break;
            case "A-Z";
                $strOrder = " order by name asc ";
                break;
            case "Z-A";
                $strOrder = " order by name desc ";
                break;
        }

        switch ($groupPrice){
            case "100-400";
                $strGroupPrice = " and price BETWEEN 100000 and 400000 ";
                break;
            case "400-800";
                $strGroupPrice = " and price BETWEEN 100000 and 400000 ";
                break;
            case "800-12000";
                $strGroupPrice = "  and price BETWEEN 100000 and 400000 ";
                break;
            case "all";
             echo "<script>location.href='index.php?controller=Products&action=ProductAll'</script>";
                break;
        }
        if($pageSize > 0)
            $recordPerPage = $pageSize;
        //---
        //phan trang
        //tinh so trang
        //ham ceil la ham lay gia tri tran. vd: 2.3 = 3
        $numPage = ceil($this->totalRecord($category_id)/$recordPerPage);
        //lay bien p truyen tu url
        $p = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"]-1 : 0;
        //lay tu ban ghi nao
        $from = $p * $recordPerPage;
        $conn = Connection::getInstall();
        $query = $conn->query("select * from products where category_id = $category_id $strGroupPrice $strOrder limit $from,$recordPerPage");
        $result = $query->fetchAll();
        return $result;
    }
    public function totalRecordCate($category_id){
        //lay bien ket noi
        $conn = Connection::getInstall();
        //thuc hien truy van
        $query = $conn->query("select id from products where status=1 && category_id in (select id from categories where parent_id=$category_id)");
        return $query->rowCount();
    }
    public function totalRecord($category_id){
        //lay bien ket noi
        $conn = Connection::getInstall();
        //thuc hien truy van
        $query = $conn->query("select id from products where status=1 && category_id = $category_id");
        return $query->rowCount();
    }
    public function allProducts($pageSize){
        if($pageSize > 0)
            $recordPerPage = $pageSize;
        //---
        //phan trang
        //tinh so trang
        //ham ceil la ham lay gia tri tran. vd: 2.3 = 3
        $numPage = ceil($this->totalRecord($recordPerPage));
        //lay bien p truyen tu url
        $p = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"]-1 : 0;
        //lay tu ban ghi nao
        $from = $p * $recordPerPage;
        $conn = Connection::getInstall();
        $query = $conn->query("select * from products where status=1 limit $from,$recordPerPage ");
        $result = $query->fetchAll();
        return $result;
    }
    public function detailProduct($id){
        $conn = Connection::getInstall();
        //thuc hien truy van
        $query = $conn->query("select * from products where status=1 && id = $id");
        return $query->fetch();
    }
    public function totalRecoreProducts(){
        $conn = Connection::getInstall();
        //thuc hien truy van
        $query = $conn->query("select id from products where status=1 ");
        return $query->rowCount();
    }

    public function totalRecordSearchPrice(){
        $key = isset($_GET["key"]) ? $_GET["key"]:"";
        $fromPrice = isset($_GET["fromPrice"]) ? $_GET["fromPrice"]:0;
        $toPrice = isset($_GET["toPrice"]) ? $_GET["toPrice"]:0;
        $price = isset($_GET['price'])?$_GET['price']: 0;
        //---
        $strWhere = "";
        if($fromPrice > 0 && $toPrice > 0)
            $strWhere = " and price BETWEEN $fromPrice and $toPrice ";
        //lay bien ket noi
        $conn = Connection::getInstall();
        //thuc hien truy van
        $query = $conn->query("select id from products where price <= $price ");
        return $query->rowCount();
    }
    public function totalRecordSearch(){
        $key = isset($_GET["key"]) ? $_GET["key"]:"";
        $fromPrice = isset($_GET["fromPrice"]) ? $_GET["fromPrice"]:0;
        $toPrice = isset($_GET["toPrice"]) ? $_GET["toPrice"]:0;
        //---
        $strWhere = "";
        if($fromPrice > 0 && $toPrice > 0)
            $strWhere = " and price BETWEEN $fromPrice and $toPrice ";
        //lay bien ket noi
        $conn = Connection::getInstall();
        //thuc hien truy van
        $query = $conn->query("select id from products where name like '%$key%' $strWhere");
        return $query->rowCount();
    }
    public function categoriesFind($category_id,$pageSize){
        $orderBy = isset($_GET['orderBy'])?$_GET['orderBy']: " ";
        $groupPrice =isset($_GET['groupPrice'])? $_GET['groupPrice']: " ";
        $strGroupPrice="";
        $strOrder="";
        switch ($orderBy){
            case "priceTang";
                $strOrder = " order by price asc ";
                break;
            case "priceGiam";
                $strOrder = " order by price desc ";
                break;
            case "A-Z";
                $strOrder = " order by name asc ";
                break;
            case "Z-A";
                $strOrder = " order by name desc ";
                break;
        }

        switch ($groupPrice){
            case "100-400";
                $strGroupPrice = " and price BETWEEN 100000 and 400000 ";
                break;
            case "400-800";
                $strGroupPrice = " and price BETWEEN 100000 and 400000 ";
                break;
            case "800-12000";
                $strGroupPrice = "  and price BETWEEN 100000 and 400000 ";
                break;
            case "all";
                echo "<script>location.href='index.php?controller=Search&action='</script>";
                break;
        }
        if($pageSize > 0)
            $recordPerPage = $pageSize;
        //---
        //phan trang
        //tinh so trang
        //ham ceil la ham lay gia tri tran. vd: 2.3 = 3
        $numPage = ceil($this->totalRecordCate($category_id)/$recordPerPage);
        //lay bien p truyen tu url
        $p = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"]-1 : 0;
        //lay tu ban ghi nao
        $from = $p * $recordPerPage;
        $conn = Connection::getInstall();
        $query = $conn->query("select * from products where category_id in (select id from categories where parent_id=$category_id)$strGroupPrice $strOrder limit $from,$recordPerPage");
        $result = $query->fetchAll();
        return $result;
    }
    public function modelSearch($recordPerPage){
//phan trang
        //tinh so trang
        //ham ceil la ham lay gia tri tran. vd: 2.3 = 3
        $numPage = ceil($this->totalRecordSearch()/$recordPerPage);
        //lay bien p truyen tu url
        $p = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"]-1 : 0;
        //lay tu ban ghi nao
        $from = $p * $recordPerPage;
        //---
        //lay bien ket noi
        $conn = Connection::getInstall();
        $price=  isset($_POST["price"]) ? $_POST["price"]:"";
        //---
        $key = isset($_GET["key"]) ? $_GET["key"]:"";
        $fromPrice = isset($_GET["fromPrice"]) ? $_GET["fromPrice"]:0;
        $toPrice = isset($_GET["toPrice"]) ? $_GET["toPrice"]:0;
        //---
        $strPrice=" && price <$price ";
        $strWhere = "";
        if($fromPrice > 0 && $toPrice > 0)
            $strWhere = " and price BETWEEN $fromPrice and $toPrice ";
        //---
        //thuc hien truy van
        $query = $conn->query("select * from products where name like '%$key%' $strWhere  limit $from,$recordPerPage");
        //lay tat cac ket qua tra ve
        $result = $query->fetchAll();
        return $result;
    }
    public function modelSearchPrice($recordPerPage){
        //ham ceil la ham lay gia tri tran. vd: 2.3 = 3
        $numPage = ceil($this->totalRecordSearchPrice()/$recordPerPage);
        //lay bien p truyen tu url
        $p = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"]-1 : 0;
        //lay tu ban ghi nao
        $from = $p * $recordPerPage;
        //---
        //lay bien ket noi
        $conn = Connection::getInstall();
        $price=  isset($_GET["price"]) ? $_GET["price"]:"";
        //---
        $key = isset($_GET["key"]) ? $_GET["key"]:"";
        $fromPrice = isset($_GET["fromPrice"]) ? $_GET["fromPrice"]:0;
        $toPrice = isset($_GET["toPrice"]) ? $_GET["toPrice"]:0;
        //---
        $strPrice=" && price <$price ";
        $strWhere = "";
        if($fromPrice > 0 && $toPrice > 0)
            $strWhere = " and price BETWEEN $fromPrice and $toPrice ";
        //---
        //thuc hien truy van
        $query = $conn->query("select * from products where price <= $price $strWhere  limit $from,$recordPerPage");
        //lay tat cac ket qua tra ve
        $result = $query->fetchAll();
        return $result;

    }
    public function categoriesNameDetail($category_id){
        $conn = Connection::getInstall();
        $query = $conn->query("select name from categories where id=$category_id");
        $resul= $query->fetch();
        return $resul;
    }
    public function listLeftCateSub($id){

        $conn = Connection::getInstall();
        $query= $conn->query("select * from categories where status=1 && parent_id=$id");
        $resul= $query->fetchAll();
        return $resul;

    }
    public function listLeftCate(){

        $conn = Connection::getInstall();
        $query= $conn->query("select * from categories where status=1 && parent_id=0");
        $resul= $query->fetchAll();
        return $resul;

    }
    public function categoriesNameDetailParent($category_id){
        $conn = Connection::getInstall();
        $query = $conn->query("select * from categories where id in(select parent_id from categories where id=$category_id)");
        $resul= $query->fetch();
        return $resul;
    }
    public function categoriesNameParent($category_id){
        $conn = Connection::getInstall();
        $query = $conn->query("select * from categories where id = $category_id");
        $resul= $query->fetch();
        return $resul;
    }

    public function listParameterSub($id){
        $conn = Connection::getInstall();
        $query = $conn->query("select * from parameters where parent_id = $id");
        $resul = $query->fetchAll();
        return $resul;
    }
    public function listParameter(){
        $conn = Connection::getInstall();
        $query = $conn->query("select * from parameters where parent_id = 0");
        $resul = $query->fetchAll();
        return $resul;
    }
    public function ProductParameter(){
        $para_id=isset($_GET['parameterId'])? $_GET['parameterId'] :"";

        $conn = Connection::getInstall();
        $query = $conn->query("select * from products where  id in (select product_id from product_parameters where parameter_id=$para_id)");
        $resul = $query->fetchAll();
        return $resul;
    }
    public function totalRecordProductParameter($para_id){
        $conn= Connection::getInstall();
        $query= $conn->query("select id from products where id in (select product_id from product_parameters where parameter_id=$para_id)");
    $resul = $query->rowCount();
    return $resul;
    }
}









?>