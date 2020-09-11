<div id="hotProduct" class="tabs-entry">
    <div class="products-swiper">
        <div class="swiper-container" data-autoplay="0" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-int-slides="2" data-sm-slides="3" data-md-slides="4" data-lg-slides="4" data-add-slides="4">
            <div class="swiper-wrapper">
                <?php foreach ($hotProducts as $rows):  ?>
                <div class="swiper-slide">
                    <div class="paddings-container">
                        <div class="product-slide-entry">
                            <div class="product-image" >
                                <img src="../Assets/Upload/Products/<?php echo $rows->photo ?>" alt="">

                                <a class="top-line-a left"><i class="fa fa-retweet"></i></a>
                                <a class="top-line-a right"><i class="fa fa-heart"></i></a>
                                <div class="bottom-line">
                                    <a class="bottom-line-a" href="index.php?controller=Cart&action=AddCart&id=<?php echo  $rows->id ?>&return=Hot"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                </div>
                            </div>
                            <a class="title" href="index.php?controller=Products&action=ProductDetail&id=<?php echo $rows->id ?>"><?php echo $rows->name ?></a>
                            <a class="tag" href="#"><?php echo $rows->content ?></a>
                            <div class="rating-box">
                                <div class="star"><i class="fa fa-star"></i></div>
                                <div class="star"><i class="fa fa-star"></i></div>
                                <div class="star"><i class="fa fa-star"></i></div>
                                <div class="star"><i class="fa fa-star"></i></div>
                                <div class="star"><i class="fa fa-star"></i></div>
                            </div>
                            <div class="price">
                                <div class="prev"><?php echo $rows->price ?></div>
                                <div class="current"><?php
                                   $newPrice= $rows->price-($rows->price*$rows->discount/100);
                                    echo $newPrice;
                                    ?></div>
                            </div>
                        </div>
                    </div>
                </div>
<?php endforeach; ?>
            </div>
            <div class="pagination"></div>
        </div>
    </div>
</div>