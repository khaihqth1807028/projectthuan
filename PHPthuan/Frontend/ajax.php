<?php


include "../Application/Connection.php";

$key =isset($_GET['key'])?$_GET['key']:"";
$conn = Connection::getInstall();
$query = $conn->query("select id,name,photo from products where name like '%$key%' limit 3");
$listRecord = $query->fetchAll();
?>
<?php foreach ($listRecord as $rows): ?>

    <li style="text-align: left" class="ajax">
        <span>
    <a style="color: black;" href="index.php?controller=Products&action=ProductDetail&id=<?php echo $rows->id; ?>">
              <img src="../Assets/Upload/Products/<?php echo $rows->photo?>">
        <b style="font-size: 15px;color: white;margin-top: 15%"><?php echo $rows->name ?></b>


    </a>
        </span>
    </li>


<?php endforeach; ?>