
<h1><a href="index.php?controller=Order&action=Order&action=ListOrder&Asc=date">Order</a></h1>
<script type="text/javascript">

    function searchFormOrder(event) {
        //neu keypress la enter
        if (event.keyCode == 13) {
            key = document.getElementById("key").value;
            location.href = "index.php?controller=Order&action=Search&Asc=id&key=" + key;
        }
        return false;
    }
</script>
<div id="box-search" style="width: 200px;display: flex;" class="simple-search-form">
    <!--                                    <form>-->
    <input type="text"  onkeyup="ajaxSearchOrder();" onkeypress="searchFormOrder(event);" value="" placeholder="Nhập email tìm kiếm..." id="key" >

</div>
<a style="background-color: green;width: 200px;;color: white;font-size: 18px;text-align: center;padding:0 70px" href="index.php?controller=Order&action=ListOrder&Asc=date">All</a>



<form method="post" action="index.php?controller=Order&action=checkbox<?php if (isset($_GET['p'])){ ?>&p=<?php echo $_GET['p'];}else{?>&p=<?php echo 1; }?>&Asc=<?php echo isset($_GET['Asc'])?$_GET['Asc']:""  ?>&Desc=<?php  echo isset($_GET['Desc'])?$_GET['Desc']:""?>&key=<?php echo isset($_GET['key'])?$_GET['key']:""; ?>">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">checkbox</th>
            <th scope="col"><a href="<?php echo $actionId ?>">Id</a></th>
            <th scope="col">Customers</th>
            <th scope="col">Customers name</th>
            <th scope="col">Customers email</th>
            <!--        <th scope="col">Password</th>-->
            <th scope="col"><a href="<?php echo $action ?>">Date</a></th>
            <th scope="col"><a href="<?php echo $actionPrice ?>">Price</a></th>
            <th></th>

            <th scope="col"><a href="<?php echo $actionStatus ?>">Status</a></th>

            <th></th>
        </tr>
        </thead>
        <tbody>

        <?php

        foreach ($result as $item):
            ?>
            <tr>
            <?php if ($item->status!=2){ ?>
                <th><input value="<?php echo $item->id ?>" name="checkbox[]" type="checkbox"></th>
                <?php }else {?>
            <th></th>
                <?php } ?>
                <th><?php echo $item->id; ?></th>
                <td><?php echo $item->customer_id; ?></td>
                <td><?php $nameCustomer =$this->getNameCustomer($item->customer_id);
                print_r($nameCustomer->name) ;
                ?></td>
                <td><?php $emailCustomer =$this->getEmailCustomer($item->customer_id);
                    print_r($emailCustomer->email) ;
                    ?></td>
                <td><?php echo $item->date; ?></td>
                <td><?php echo $item->price; ?>VNĐ</td>
            <td><a href="index.php?controller=Order&action=DetailOder&id=<?php echo $item->id ?>">Chi tiết</a></td>

            <?php if ($item->status == 0 ){
                    ?>
                    <td><a style="background-color: blue;color: white; border-radius: 100px" href="index.php?controller=Order&action=Done&id=<?php echo $item->id ?><?php if (isset($_GET['p'])){ ?>&p=<?php echo $_GET['p'];}else{?>&p=<?php echo 1; }?>&Asc=<?php echo isset($_GET['Asc'])?$_GET['Asc']:""  ?>&Desc=<?php  echo isset($_GET['Desc'])?$_GET['Desc']:""?>&key=<?php echo isset($_GET['key'])?$_GET['key']:""; ?>">Đang chờ xác nhận</a></td>
                    <?php
                }
                elseif ($item->status == 1 ) {
                    ?>
                    <td><a style="background-color: greenyellow;color: white; border-radius: 100px" href="">Đã xác nhận đơn hàng </a></td>
                    <?php
                }
                elseif ($item->status == 2 ) {
                    ?>
                    <td><a style="background-color: red;color: white; border-radius: 100px" href="">Đã hủy đơn hàng </a></td>
                    <?php
                } ?>
                <?php if ($item->status !=2){ ?>
                <td><a href="index.php?controller=Order&action=DeleteOrder&id=<?php echo $item->id ?><?php if (isset($_GET['p'])){ ?>&p=<?php echo $_GET['p'];}else{?>&p=<?php echo 1; }?>&Asc=<?php echo isset($_GET['Asc'])?$_GET['Asc']:""  ?>&Desc=<?php  echo isset($_GET['Desc'])?$_GET['Desc']:""?>&key=<?php echo isset($_GET['key'])?$_GET['key']:""; ?>">Hủy đơn hàng</a></td>
           <?php if ($item->status ==1){ ?><td><a href=""></a></td><?php } ?>

            </tr>
        <?php } ?>
        <?php
        endforeach;
        ?>

        </tbody>
        <style>
            .pagination{
                padding: 0px;margin: 0px;
            }
        </style>

    </table>
<select name="status">
    <option selected value=""></option>
    <option style="background-color: greenyellow" value="1"><b>Xác nhận</b></option>

</select>
    <button type="submit" class="btn-danger">Submit</button>
</form>
<ul class="pagination">
    <li class="page-item"><a href="#" class="page-link">Trang</a></li>
    <?php for($i = 1; $i <= $numPage; $i++): ?>
        <li class="page-item"><a href="index.php?controller=Order&action=<?php echo $paginate ?>&p=<?php echo $i; ?>" class="page-link">
                <?php echo $i; ?>
            </a></li>
    <?php endfor ?>
</ul>













