
<h1><a>Order_Detail</a></h1>
<form method="post" action="index.php?controller=Order&action=Checkbox&order_id=<?php echo $_GET['id'] ?>">

    <table class="table">
        <thead>
        <tr>
            <th scope="col">checkbox</th>
            <th scope="col">Id</th>
            <th scope="col">Products</th>
            <!--        <th scope="col">Password</th>-->
            <th scope="col">Quantity</th>
            <th scope="col">TotalPrice</th>
        </tr>
        </thead>
        <tbody>

        <?php
        foreach ($result as $item):
            ?>

        <tr>
                <th><input value="<?php echo $item->id ?>" name="checkbox[]" type="checkbox"></th>
                <th><?php echo $item->id; ?></th>
                <td><?php $namePro =$this->getNameProduct($item->product_id);
                    print_r($namePro->name) ;
                    ?></td>
                <td><?php echo $item->quantity; ?></td>
                <td><?php echo $item->price; ?></td>
        <?php
        endforeach;
        ?>

        </tbody>


    </table>
</form>





















