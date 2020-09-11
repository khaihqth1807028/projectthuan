
<h1><a href="index.php?controller=Products&action=create">Thêm Product</a></h1>
<form method="post" action="index.php?controller=Products&action=checkbox">
<table class="table">
    <thead>
    <tr>

        <th scope="col">
            <label for="car">Check box</label>

        </th>
        <th scope="col">
            <a href="<?php echo $action ?>">Id</a>
        </th>
        <th scope="col">Thumbnail</th>
        <th scope="col">Name</th>
        <th scope="col" style="width: 100px;">Category</th>
                <th scope="col" style="width: 40px;">Hot</th>
                        <th scope="col" style="width: 120px;">Price</th>
     <th scope="col">Discount</th>
<!--                <th scope="col" style="width: 200px;"></th>--><th></th>
    </tr>
    </thead>
    <tbody>

        <?php
       foreach ($result as $rows):
        ?>
        <tr>
            <td><input type="checkbox" name="checkbox[]" value="<?php echo $rows->id ?>"></td>
           <th><?php echo $rows->id; ?></th>
           <td style="text-align: center;"><?php if($rows->photo != "" && file_exists("../Assets/Upload/Products/".$rows->photo)): ?>
           	<img style="max-width: 100px" src="../Assets/Upload/Products/<?php echo $rows->photo ?>" alt="">
<?php endif ?>
           </td>
<!--           <td>--><?php //echo $rows->password; ?><!--</td>-->
           <td style="width: 150px"><?php echo $rows->name ?></td>
           <td style="max-width: 80px"><?php echo $this->getCategoryParent_id($rows->category_id) ?> (<?php echo $this->getCategory($rows->category_id); ?>)</td>

            <td style="max-width: 40px">  <?php if($rows->hot==1): ?><span class="fa fa-check"></span><?php endif; ?>
            </td>

            <td><?php echo number_format($rows->price); ?>VNĐ</td>
            <td><?php echo $rows->discount; ?>%</td>
            <td><a href="index.php?controller=Products&action=parameters&product_id=<?php echo $rows->id ?>">Thuộc tính</a></td>
            <td><a href="index.php?controller=Products&action=edit&id=<?php echo $rows->id ?>">Edit</a></td>
            <?php if($rows->status==2):?>
            <td><a style="color: red" href="index.php?controller=Products&action=remove&id=<?php echo $rows->id ?>">Remove</a></td>
            <?php else: ?>
            <td ><a  href="index.php?controller=Products&action=delete&id=<?php echo $rows->id ?>">Delete</a></td>
            <?php endif; ?>
        </tr>
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
<select style="width: 120px;" name="status" class="form-control form-control-lg">
    <option value="1">Active</option>
    <option value="2">DeActive</option>
</select>
<button type="submit">Submit</button>
</form>
<ul class="pagination">
    <li class="page-rows"><a href="#" class="page-link">Trang</a></li>
    <?php for($i = 1; $i <= $numPage; $i++): ?>
        <li class="page-rows"><a href="index.php?controller=Products&action=index&p=<?php echo $i; ?>" class="page-link">
                <?php echo $i; ?>
            </a></li>
    <?php endfor ?>
</ul>













