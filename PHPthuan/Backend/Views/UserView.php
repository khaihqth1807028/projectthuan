
<h1><a href="index.php?controller=Users&action=create">Thêm USERS</a></h1>
<form method="post" action="index.php?controller=Users&action=checkbox">
<table class="table">
    <thead>
    <tr>
        <th scope="col">checkbox</th>
        <th scope="col">Id</th>
        <th scope="col">UserName</th>
<!--        <th scope="col">Password</th>-->
        <th scope="col">Created_At</th>
        <th scope="col">Update_At</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>

        <th></th>
    </tr>
    </thead>
    <tbody>

        <?php
       foreach ($result as $item):
        ?>
        <tr>
            <th><input value="<?php echo $item->id ?>" name="checkbox[]" type="checkbox"></th>
           <th><?php echo $item->id; ?></th>
           <td><?php echo $item->username; ?></td>
<!--           <td>--><?php //echo $item->password; ?><!--</td>-->
           <td><?php echo $item->create_At; ?></td>
           <td><?php echo $item->update_At; ?></td>
           <?php if ($item->status==1):?>
            <td><a href="index.php?controller=Users&action=delete&id=<?php echo $item->id ?>"><b style="color: blue;">Active</b></a></td>
            <?php else: ?>
            <td><a href="index.php?controller=Users&action=remove&id=<?php echo $item->id ?>"><b style="color: orangered;">DeActive</b></a></td>
            <?php endif ?>
            <td><a href="index.php?controller=Users&action=edit&id=<?php echo $item->id ?>">Edit</a></td>
            <?php if($item->status==2):?>
            <td><a style="color: red" href="index.php?controller=Users&action=remove&id=<?php echo $item->id ?>">Remove</a></td>
            <?php else: ?>
            <td ><a  href="index.php?controller=Users&action=delete&id=<?php echo $item->id ?>">Delete</a></td>
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
    <li class="page-item"><a href="#" class="page-link">Trang</a></li>
    <?php for($i = 1; $i <= $numPage; $i++): ?>
        <li class="page-item"><a href="index.php?controller=users&action=index&p=<?php echo $i; ?>" class="page-link">
                <?php echo $i; ?>
            </a></li>
    <?php endfor ?>
</ul>













