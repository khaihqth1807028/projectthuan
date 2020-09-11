<li class="simple-list">
    <a href="index.php?controller=Products&action=Search&key=">Products</a><i class="fa fa-chevron-down"></i>
    <div class="submenu">
        <ul class="simple-menu-list-column">

            <?php
            foreach ($list as $item) :?>
            <li><a href="index.php?controller=Products&action=CategoryProduct&category_id=<?php echo $item->id ?>"><i class="fa fa-angle-right"></i><?php echo $item->name ?></a></li>
            <?php $listSub = $this->showListCategoriesSub($item->id) ;
                foreach ($listSub as $itemSub) :
                ?>
                    <li style="margin-left: 20px"><a href="index.php?controller=Products&action=ProductCategory&category_id=<?php echo $itemSub->id ?>"><i class="fa fa-angle-right"></i><?php echo $itemSub->name ?></a></li>
            <?php endforeach; ?>
<?php endforeach; ?>
        </ul>
    </div>
</li>