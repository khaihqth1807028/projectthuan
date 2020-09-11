<?php

class ProductsModel{

public function checkListProductoderid($recordPerPage){
    $numPage = ceil($this->totalRecord()/$recordPerPage);
    $p = isset($_GET["p"])&&$_GET["p"]>0 ? $_GET["p"]-1:0;
    $from =$p * $recordPerPage;
    $conn = Connection::getInstall();
    $query =$conn->query("select * from products where status=1 limit $from,$recordPerPage ");
    $result = $query->fetchAll();
    return $result;
}
    public function checkListProduct($recordPerPage){
        $numPage = ceil($this->totalRecord()/$recordPerPage);
        $p = isset($_GET["p"])&&$_GET["p"]>0 ? $_GET["p"]-1:0;
        $from =$p * $recordPerPage;
        $conn = Connection::getInstall();
        $query =$conn->query("select * from products where status=1 order by id desc limit $from,$recordPerPage ");
        $result = $query->fetchAll();
        return $result;
    }
    public function totalRecord(){
        $conn = Connection::getInstall();
        $query = $conn->query("select id from products");
        return $query->rowCount();


    }
    public function createProduct(){
        $id = isset($_GET["id"]) ? $_GET["id"]:"";
        $name = $_POST["name"];
        $category_id= $_POST["category_id"];
        $price =$_POST["price"];
        $discount= $_POST["discount"];
        $content= $_POST["content"];
        $description =$_POST["description"];
        $hot= isset($_POST["hot"])? 1:0;
        $status=1;
        echo $category_id;
        $photo = "";
        if($_FILES["photo"]["name"] != ""){
            //lay ten anh, ghep voi ham thoi gian
            //ham time() doi thoi gian ra thanh so nguyen
            $photo = "hackerHoKhai".$_FILES["photo"]["name"];
            //thuc hien upload
            move_uploaded_file($_FILES["photo"]["tmp_name"], "../Assets/Upload/Products/$photo");
        }
        //lay bien ket noi
        $conn = Connection::getInstall();
        //thuc hien truy van
        $query = $conn->prepare("insert into products set name=:name,status=:status,category_id=:category_id,price=:price,discount=:discount,description=:description,content=:content,hot=:hot,photo=:photo");
        $query->execute(array("photo"=>$photo,"status"=>$status,"name"=>$name,"category_id"=>$category_id,"price"=>$price,"discount"=>$discount,"description"=>$description,"content"=>$content,"hot"=>$hot));
    }
    public function update(){
        if(isset($_GET["id"])? $_GET["id"] : "");
        $id= $_GET["id"];
        $connection = Connection::getInstall();
        $query = $connection->prepare("select *from products where id=:id");
        $query->execute(array("id"=>$id));
        $record = $query->fetch();
        return $record;
    }
    public function updatePostModel(){

        $id = isset($_GET["id"]) ? $_GET["id"]:"";
        $name = $_POST["name"];
        $category_id= $_POST["category_id"];
echo $category_id;
        $price =$_POST["price"];
        $discount= $_POST["discount"];
        $content= $_POST["content"];
        $description =$_POST["description"];
        $hot= isset($_POST["hot"])? 1:0;
        $conn = Connection::getInstall();
        $query= $conn->prepare("update products set name=:name,category_id=:category_id,price=:price,discount=:discount,description=:description,content=:content,hot=:hot where id=:id");
        $query->execute(array("id"=>$id,"name"=>$name,"category_id"=>$category_id,"price"=>$price,"discount"=>$discount,"description"=>$description,"content"=>$content,"hot"=>$hot));
        if($_FILES["photo"]["name"] != ""){
            //---
            //lay anh cu de xoa
            $oldQuery = $conn->query("select photo from products where id=$id");
            $oldRecord = $oldQuery->fetch();
            if(isset($oldRecord->photo) && file_exists("../Assets/Upload/Products/".$oldRecord->photo))
                unlink("../Assets/Upload/Products/".$oldRecord->photo);
            //---
            //lay ten anh, ghep voi ham thoi gian
            //ham time() doi thoi gian ra thanh so nguyen
            $photo = time().$_FILES["photo"]["name"];
            //thuc hien upload
            move_uploaded_file($_FILES["photo"]["tmp_name"], "../Assets/Upload/Products/$photo");
            //thuc hien truy van
            $query = $conn->prepare("update products set photo=:photo where id=:id");
            $query->execute(array("id"=>$id,"photo"=>$photo));
        }
    }
    public function deleteModel(){
        $id = isset($_GET["id"]) ? $_GET["id"]:"";
        $status=2;
        $conn = Connection::getInstall();
        $query = $conn->prepare("update products set status=:status where id=:id");
        $query->execute(array("id"=>$id,"status"=>$status));
    }
    public function removeModel(){
        $id = isset($_GET["id"]) ? $_GET["id"]:"";
        $status=1;
        $conn = Connection::getInstall();
        $query = $conn->prepare("update products set status=:status where id=:id");
        $query->execute(array("id"=>$id,"status"=>$status));
    }
     public function getCategory($category_id){

        $conn = Connection::getInstall();
        $query = $conn->prepare("select name from categories where id=:category_id ");
        $query->execute(array("category_id"=>$category_id));
        $record = $query->fetch();
        return $query->rowCount() >0? $record->name:"";
    }
    public function getCategoryParent_id($category_id){
        $conn = Connection::getInstall();
        $query = $conn->query("select name from categories where id in(select parent_id from categories where id=$category_id)");
                $record = $query->fetch();
        return $query->rowCount() >0? $record->name:"";
    }
    public function getCategorySub($category_id){

        $conn = Connection::getInstall();
        $query = $conn->prepare("select name from categories where parent_id=:category_id");
        $query->execute(array("category_id"=>$category_id));
        $record = $query->fetch();
        return $query->rowCount() >0? $record->name:"";
    }
        public function modelListCategory(){
        $conn = Connection::getInstall();
        $query = $conn->query("select * from categories where parent_id = 0 && status=1 order by id desc");
        $listRecord = $query->fetchAll();
        return $listRecord;
    }
      public function modelListCategorySub($category_id){
        $conn = Connection::getInstall();
        $query = $conn->query("select * from categories where parent_id = $category_id && status=1 order by id desc");
        $listRecord = $query->fetchAll();
        return $listRecord;
    }
//doc tat ca cac ban ghi
    public function ModelReadParameters($product_id){
        //lay bien ket noi
        $conn = Connection::getInstance();
        //thuc hien truy van
        $query = $conn->query("select parameters.name as name, product_parameters.id as id from product_parameters inner join parameters on product_parameters.parameter_id = parameters.id where product_id = $product_id");
        //lay tat cac ket qua tra ve
        $result = $query->fetchAll();
        return $result;
    }


    public function ModelReadParameterProduct($product_id){

       $conn = Connection::getInstall();
       $query = $conn->query("select parameters.name as name, product_parameters.id as id from product_parameters inner join parameters on product_parameters.parameter_id = parameters.id where product_id = $product_id");
        //lay tat cac ket qua tra ve)

        $result = $query->fetchAll();

        return $result;

    }
    public function getProduct($product_id){
        $conn = Connection::getInstall();
        $query= $conn->query("select * from products where id=$product_id");
        return $result=$query->fetch();

    }
    //danh sach danh muc


    public function ModelReadParameter(){
        //--
        //lay bien ket noi
        $conn = Connection::getInstall();
        //thuc hien truy van
        $query = $conn->query("select * from parameters where parent_id = 0 order by id desc");
        //lay nhieu ban ghi
        $listRecord = $query->fetchAll();
        return $listRecord;
    }
    public function modelListParameter(){
        //--
        //lay bien ket noi
        $conn = Connection::getInstall();
        //thuc hien truy van
        $query = $conn->query("select * from parameters where parent_id = 0 order by id desc");
        //lay nhieu ban ghi
        $listRecord = $query->fetchAll();
        return $listRecord;
    }
    public function modelListParameterNoCheck($parameter){
        $product_id =isset( $_GET['product_id'])? $_GET['product_id']:0;
        //lay bien ket noi
        $conn = Connection::getInstall();
        //thuc hien truy van
        $query = $conn->query("select * from parameters where id Not in (select parameter_id from product_parameters where product_id=$product_id) && parent_id =$parameter order by id desc");
        //lay nhieu ban ghi

        $listRecord = $query->fetchAll();
        return $listRecord;
    }
    //danh sach danh muc con
    public function modelListParameterSub($parameter){
        //--

        $product_id =isset( $_GET['product_id'])? $_GET['product_id']:0;
        //lay bien ket noi
        $conn = Connection::getInstall();
        //thuc hien truy van
        $query = $conn->query("select * from parameters where id in (select parameter_id from product_parameters where product_id=$product_id) && parent_id=$parameter  order by id desc");
        //lay nhieu ban ghi
        $listRecord = $query->fetchAll();
        return $listRecord;
    }
    public function modelAddParameter(){
        $product_id = isset($_GET["product_id"])&&is_numeric($_GET["product_id"]) ? $_GET["product_id"] : 0;
        echo "<pre>";
        $para_id = isset($_POST["para_id"])?$_POST["para_id"]:'';
        echo "</pre>";
       $conn = Connection::getInstall();
       if ($para_id != null){
           for ($i = 0 ;$i<count($para_id) ; $i++){
               $query = $conn->query("insert into product_parameters set product_id=$product_id,parameter_id=$para_id[$i]");

           }
       }
       else{
           echo "<script>alert('bạn đã dùng hết thuộc tính');
</script>";
       }


    }
      public function checkboxModel(){
        $checkbox = $_POST["checkbox"];
        print_r($checkbox);
        echo $checkbox[0];
        $status= $_POST["status"];

        $conn = Connection::getInstall();
        for($i=0 ; $i < count($checkbox);$i++){
            $query = $conn->query("update products set status=$status where id=$checkbox[$i]");
        }
}

    public function modelDeleteParameter($id){
        $conn = Connection::getInstall();
        $query = $conn->query("delete from product_parameters where id= $id");
    }

}
?>



