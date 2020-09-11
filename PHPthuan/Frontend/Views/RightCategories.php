<div class="col-md-3 col-md-push-9">
    <div class="sidebar-navigation">
        <div class="title">Product Categories<i class="fa fa-angle-down"></i></div>
        <div class="list">
            <?php foreach ($listCate as $item): ?>
            <a class="entry" href="index.php?controller=Products&action=CategoryProduct&category_id=<?php echo $item->id?>"><span><i class="fa fa-angle-right"></i><?php echo $item->name ?></span></a>
            <?php
                $listCateSub = $this->listCateSub($item->id);
                foreach ($listCateSub as $rowsSub):
                ?>
                    <a style="margin-left: 20px;" class="entry" href="index.php?controller=Products&action=ProductCategory&category_id=<?php echo $rowsSub->id?>"><span><i class="fa fa-angle-right"></i><?php echo $rowsSub->name ?></span></a>
                <?php endforeach; ?>
    <?php endforeach; ?>
        </div>
    </div>
    <div class="clear"></div>
</div>