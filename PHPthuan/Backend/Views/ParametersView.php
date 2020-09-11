
<h1><a href="index.php?controller=parameters&action=create">Thêm parameters</a></h1>
<h2>Thuộc tính sản phẩm</h2>
    <table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
<!--        <th scope="col">Password</th>-->
        <th scope="col">Parent_ID</th>
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
           <th><?php echo $item->id; ?></th>
           <td><?php echo $item->name; ?></td>
           <td><?php echo $item->parent_id; ?></td>
         
           <?php if ($item->status==1):?>
            <td><a href="index.php?controller=parameters&action=delete&id=<?php echo $item->id ?>"><b style="color: blue;">Active</b></a></td>
            <?php else: ?>
            <td><a href="index.php?controller=parameters&action=remove&id=<?php echo $item->id ?>"><b style="color: orangered;">DeActive</b></a></td>
            <?php endif ?>
            <td><a href="index.php?controller=parameters&action=edit&id=<?php echo $item->id ?>">Edit</a></td>
            <?php if($item->status==2):?>
            <td><a style="color: red" href="index.php?controller=parameters&action=remove&id=<?php echo $item->id ?>">Remove</a></td>
            <?php else: ?>
            <td ><a  href="index.php?controller=parameters&action=delete&id=<?php echo $item->id ?>">Delete</a></td>
            <?php endif; ?>
        </tr>
       <?php

       $listSubRecord = $this->ModelReadSub($item->id);
           ?>
       <?php foreach ($listSubRecord as $rowSub): ?>
 <tr>
           <th ><?php echo $rowSub->id; ?></th>
           <td style="padding-left: 35px;"><?php echo $rowSub->name; ?></td>
           <td><?php echo $rowSub->parent_id; ?></td>
         
           <?php if ($rowSub->status==1):?>
            <td><a href="index.php?controller=parameters&action=delete&id=<?php echo $rowSub->id; ?>"><b style="color: blue;">Active</b></a></td>
            <?php else: ?>
            <td><a href="index.php?controller=parameters&action=remove&id=<?php echo $rowSub->id; ?>"><b style="color: orangered;">DeActive</b></a></td>
            <?php endif ?>
            <td><a href="index.php?controller=parameters&action=edit&id=<?php echo $rowSub->id; ?>">Edit</a></td>
            <?php if($rowSub->status==2):?>
            <td><a style="color: red" href="index.php?controller=parameters&action=remove&id=<?php echo $rowSub->id; ?>">Remove</a></td>
            <?php else: ?>
            <td ><a  href="index.php?controller=parameters&action=delete&id=<?php echo $rowSub->id; ?>">Delete</a></td>
            <?php endif; ?>
        </tr>

       <?php  endforeach; ?>
        <?php endforeach; ?>
    </tbody>
    <style>
        .pagination{
            padding: 0px;margin: 0px;
        }
    </style>

</table>
<ul class="pagination">
    <li class="page-item"><a href="#" class="page-link">Trang</a></li>
    <?php for($i = 1; $i <= $numPage; $i++): ?>
        <li class="page-item"><a href="index.php?controller=parameters&action=index&p=<?php echo $i; ?>" class="page-link">
                <?php echo $i; ?>
            </a></li>
    <?php endfor ?>
</ul>













