<div class="content-push">

    <div class="breadcrumb-box">
        <a href="index.php">Home</a>
        <a href="index.php?controller=Products&action=Search&key=">Products</a>
        <?php   $record =$this->categoriesNameDetailParent($result->category_id); ?>
        <a href="index.php?controller=Products&action=CategoryProduct&category_id=<?php echo $record->id?>"><?php
            echo  $record->name;
            ?></a>
        <a href="index.php?controller=Products&action=ProductCategory&category_id=<?php echo $result->category_id?>"><?php
            $record =$this->categoriesNameDetail($result->category_id);
            echo  $record->name;
            ?></a>
        <a href="index.php?controller=Products&action=ProductDetail&id=<?php echo $result->id ?>"><?php echo $result->name ?></a>

    </div>

    <div class="information-blocks">
        <div class="row">
            <div class="col-sm-5 col-md-4 col-lg-5 information-entry">
                <div class="product-preview-box">
                    <div class="swiper-container product-preview-swiper" data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="product-zoom-image">
                                    <img src="../Assets/Upload/Products/<?php echo $result->photo ?>" alt="" data-zoom="img/product-main-1-zoom.jpg" />
                                </div>
                            </div>

                        </div>
                        <div class="pagination"></div>
                        <div class="product-zoom-container">
                            <div class="move-box">
                                <img class="default-image" src="img/product-main-1.jpg" alt="" />
                                <img class="zoomed-image" src="img/product-main-1-zoom.jpg" alt="" />

                            </div>
                            <div class="zoom-area"></div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-7 col-md-4 information-entry">
                <form action="index.php?controller=Cart&action=AddCart&id=<?php echo $result->id ?>" method="post">
                <div class="product-detail-box">
                    <h1 class="product-title"><?php echo $result->name?></h1>
                    <h3 class="product-subtitle"><?php  ?></h3>

                    <div class="product-description detail-info-entry"><?php echo $result->content?></div>
                    <div class="price detail-info-entry">
                        <div class="prev"><?php echo $result->price ?></div>
                        <div class="current"><?php echo $newPrice = $result->price-($result->price*$result->discount/100) ?></div>
                    </div>
                    <div class="quantity-selector detail-info-entry">
                        <div class="detail-info-entry-title">Quantity</div>
                        <input type="number" style="font-size: 20px;width: 80px;border-radius: 100px" name="qty" value="<?php  if (isset($_SESSION['Cart'][$result->id])){echo $_SESSION["Cart"][$result->id]['quantity'];}else{echo 1;}

                            ?>">
                    </div>
                    <div class="detail-info-entry">
                        <button class="button style-10" name="id" value="<?php echo $result->id ?>" >Add to cart</button>
                        <a class="button style-11"><i class="fa fa-heart"></i> Add to Wishlist</a>
                        <div class="clear"></div>
                    </div>
                    <div class="tags-selector detail-info-entry">
                        <div class="detail-info-entry-title">Tags:</div>
                        <a href="#">bootstrap</a>/
                        <a href="#">collections</a>/
                        <a href="#">color/</a>
                        <a href="#">responsive</a>
                    </div>
                    <div class="share-box detail-info-entry">
                        <div class="title">Share in social media</div>
                        <div class="socials-box">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                </form>
            </div>
            <div class="clear visible-xs visible-sm"></div>
            <div class="col-md-4 col-lg-3 information-entry product-sidebar">
                <div class="row">
                    <div class="col-md-12">
                        <div class="information-blocks production-logo">
                            <div class="background">
                                <div class="logo"><img src="img/production-logo.png" alt="" /></div>
                                <a href="#">Review this producent</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="information-blocks">
                            <div class="information-entry products-list">
                                <h3 class="block-title inline-product-column-title">Featured products</h3>
                                <div class="inline-product-entry">
                                    <a href="#" class="image"><img alt="" src="img/product-image-inline-1.jpg"></a>
                                    <div class="content">
                                        <div class="cell-view">
                                            <a href="#" class="title">Pullover Batwing Sleeve Zigzag</a>
                                            <div class="price">
                                                <div class="prev">$199,99</div>
                                                <div class="current">$119,99</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>

                                <div class="inline-product-entry">
                                    <a href="#" class="image"><img alt="" src="img/product-image-inline-2.jpg"></a>
                                    <div class="content">
                                        <div class="cell-view">
                                            <a href="#" class="title">Pullover Batwing Sleeve Zigzag</a>
                                            <div class="price">
                                                <div class="prev">$199,99</div>
                                                <div class="current">$119,99</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>

                                <div class="inline-product-entry">
                                    <a href="#" class="image"><img alt="" src="img/product-image-inline-3.jpg"></a>
                                    <div class="content">
                                        <div class="cell-view">
                                            <a href="#" class="title">Pullover Batwing Sleeve Zigzag</a>
                                            <div class="price">
                                                <div class="prev">$199,99</div>
                                                <div class="current">$119,99</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="information-blocks">
        <div class="tabs-container style-1">
            <div class="swiper-tabs tabs-switch">
                <div class="title">Product info</div>
                <div class="list">
                    <a class="tab-switcher active">Product description</a>
                    <a class="tab-switcher">SHIPPING &amp; RETURNS</a>
                    <a class="tab-switcher">Reviews (25)</a>
                    <div class="clear"></div>
                </div>
            </div>
            <div>
                <div class="tabs-entry">
                    <div class="article-container style-1">
                        <div class="row">
                            <div class="col-md-6 information-entry">
                                <h4>RETURNS POLICY</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                <ul>
                                    <li>Any Product types that You want - Simple, Configurable</li>
                                    <li>Downloadable/Digital Products, Virtual Products</li>
                                    <li>Inventory Management with Backordered items</li>
                                    <li>Customer Personal Products - upload text for embroidery, monogramming</li>
                                    <li>Create Store-specific attributes on the fly</li>
                                </ul>
                            </div>
                            <div class="col-md-6 information-entry">
                                <h4>SHIPPING</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                <ul>
                                    <li>Any Product types that You want - Simple, Configurable</li>
                                    <li>Downloadable/Digital Products, Virtual Products</li>
                                    <li>Inventory Management with Backordered items</li>
                                    <li>Customer Personal Products - upload text for embroidery, monogramming</li>
                                    <li>Create Store-specific attributes on the fly</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabs-entry">
                    <div class="article-container style-1">
                        <div class="row">
                            <div class="col-md-6 information-entry">
                                <h4>RETURNS POLICY</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                <ul>
                                    <li>Any Product types that You want - Simple, Configurable</li>
                                    <li>Downloadable/Digital Products, Virtual Products</li>
                                    <li>Inventory Management with Backordered items</li>
                                    <li>Customer Personal Products - upload text for embroidery, monogramming</li>
                                    <li>Create Store-specific attributes on the fly</li>
                                </ul>
                            </div>
                            <div class="col-md-6 information-entry">
                                <h4>SHIPPING</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                <ul>
                                    <li>Any Product types that You want - Simple, Configurable</li>
                                    <li>Downloadable/Digital Products, Virtual Products</li>
                                    <li>Inventory Management with Backordered items</li>
                                    <li>Customer Personal Products - upload text for embroidery, monogramming</li>
                                    <li>Create Store-specific attributes on the fly</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabs-entry">
                    <div class="article-container style-1">
                        <div class="row">
                            <div class="col-md-6 information-entry">
                                <h4>RETURNS POLICY</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                <ul>
                                    <li>Any Product types that You want - Simple, Configurable</li>
                                    <li>Downloadable/Digital Products, Virtual Products</li>
                                    <li>Inventory Management with Backordered items</li>
                                    <li>Customer Personal Products - upload text for embroidery, monogramming</li>
                                    <li>Create Store-specific attributes on the fly</li>
                                </ul>
                            </div>
                            <div class="col-md-6 information-entry">
                                <h4>SHIPPING</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                <ul>
                                    <li>Any Product types that You want - Simple, Configurable</li>
                                    <li>Downloadable/Digital Products, Virtual Products</li>
                                    <li>Inventory Management with Backordered items</li>
                                    <li>Customer Personal Products - upload text for embroidery, monogramming</li>
                                    <li>Create Store-specific attributes on the fly</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--    <div class="information-blocks">-->
<!--        <div class="tabs-container">-->
<!--            <div class="swiper-tabs tabs-switch",>-->
<!--                <div class="title">Products</div>-->
<!--                <div class="list">-->
<!--                    <a class="block-title tab-switcher active">Featured Products</a>-->
<!--                    <a class="block-title tab-switcher">Popular Products</a>-->
<!--                    <a class="block-title tab-switcher">New Arrivals</a>-->
<!--                    <div class="clear"></div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div>-->
<!--                <div class="tabs-entry">-->
<!--                    <div class="products-swiper">-->
<!--                        <div class="swiper-container" data-autoplay="0" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-int-slides="2" data-sm-slides="3" data-md-slides="4" data-lg-slides="5" data-add-slides="5">-->
<!--                            <div class="swiper-wrapper">-->
<!--                                <div class="swiper-slide">-->
<!--                                    <div class="paddings-container">-->
<!--                                        <div class="product-slide-entry shift-image">-->
<!--                                            <div class="product-image">-->
<!--                                                <img src="img/product-minimal-1.jpg" alt="" />-->
<!--                                                <img src="img/product-minimal-11.jpg" alt="" />-->
<!--                                                <a class="top-line-a left"><i class="fa fa-retweet"></i></a>-->
<!--                                                <a class="top-line-a right"><i class="fa fa-heart"></i></a>-->
<!--                                                <div class="bottom-line">-->
<!--                                                    <a class="bottom-line-a"><i class="fa fa-shopping-cart"></i> Add to cart</a>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <a class="tag" href="#">Men clothing</a>-->
<!--                                            <a class="title" href="#">Blue Pullover Batwing Sleeve Zigzag</a>-->
<!--                                            <div class="rating-box">-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                            </div>-->
<!--                                            <div class="price">-->
<!--                                                <div class="prev">$199,99</div>-->
<!--                                                <div class="current">$119,99</div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="swiper-slide">-->
<!--                                    <div class="paddings-container">-->
<!--                                        <div class="product-slide-entry shift-image">-->
<!--                                            <div class="product-image">-->
<!--                                                <img src="img/product-minimal-2.jpg" alt="" />-->
<!--                                                <img src="img/product-minimal-12.jpg" alt="" />-->
<!--                                                <a class="top-line-a right"><i class="fa fa-expand"></i> <span>Quick View</span></a>-->
<!--                                                <div class="bottom-line">-->
<!--                                                    <div class="right-align">-->
<!--                                                        <a class="bottom-line-a square"><i class="fa fa-retweet"></i></a>-->
<!--                                                        <a class="bottom-line-a square"><i class="fa fa-heart"></i></a>-->
<!--                                                    </div>-->
<!--                                                    <div class="left-align">-->
<!--                                                        <a class="bottom-line-a"><i class="fa fa-shopping-cart"></i> Add to cart</a>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <a class="tag" href="#">Men clothing</a>-->
<!--                                            <a class="title" href="#">Blue Pullover Batwing Sleeve Zigzag</a>-->
<!--                                            <div class="rating-box">-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                            </div>-->
<!--                                            <div class="price">-->
<!--                                                <div class="prev">$199,99</div>-->
<!--                                                <div class="current">$119,99</div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="swiper-slide">-->
<!--                                    <div class="paddings-container">-->
<!--                                        <div class="product-slide-entry shift-image">-->
<!--                                            <div class="product-image">-->
<!--                                                <img src="img/product-minimal-3.jpg" alt="" />-->
<!--                                                <img src="img/product-minimal-11.jpg" alt="" />-->
<!--                                                <div class="bottom-line left-attached">-->
<!--                                                    <a class="bottom-line-a square"><i class="fa fa-shopping-cart"></i></a>-->
<!--                                                    <a class="bottom-line-a square"><i class="fa fa-heart"></i></a>-->
<!--                                                    <a class="bottom-line-a square"><i class="fa fa-retweet"></i></a>-->
<!--                                                    <a class="bottom-line-a square"><i class="fa fa-expand"></i></a>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <a class="tag" href="#">Men clothing</a>-->
<!--                                            <a class="title" href="#">Blue Pullover Batwing Sleeve Zigzag</a>-->
<!--                                            <div class="rating-box">-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                            </div>-->
<!--                                            <div class="price">-->
<!--                                                <div class="prev">$199,99</div>-->
<!--                                                <div class="current">$119,99</div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="swiper-slide">-->
<!--                                    <div class="paddings-container">-->
<!--                                        <div class="product-slide-entry shift-image">-->
<!--                                            <div class="product-image">-->
<!--                                                <img src="img/product-minimal-4.jpg" alt="" />-->
<!--                                                <img src="img/product-minimal-12.jpg" alt="" />-->
<!--                                                <a class="top-line-a right"><i class="fa fa-expand"></i> <span>Quick View</span></a>-->
<!--                                                <div class="bottom-line">-->
<!--                                                    <div class="right-align">-->
<!--                                                        <a class="bottom-line-a square"><i class="fa fa-retweet"></i></a>-->
<!--                                                        <a class="bottom-line-a square"><i class="fa fa-heart"></i></a>-->
<!--                                                    </div>-->
<!--                                                    <div class="left-align">-->
<!--                                                        <a class="bottom-line-a"><i class="fa fa-shopping-cart"></i> Add to cart</a>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <a class="tag" href="#">Men clothing</a>-->
<!--                                            <a class="title" href="#">Blue Pullover Batwing Sleeve Zigzag</a>-->
<!--                                            <div class="rating-box">-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                            </div>-->
<!--                                            <div class="price">-->
<!--                                                <div class="prev">$199,99</div>-->
<!--                                                <div class="current">$119,99</div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="swiper-slide">-->
<!--                                    <div class="paddings-container">-->
<!--                                        <div class="product-slide-entry shift-image">-->
<!--                                            <div class="product-image">-->
<!--                                                <img src="img/product-minimal-5.jpg" alt="" />-->
<!--                                                <img src="img/product-minimal-11.jpg" alt="" />-->
<!--                                                <a class="top-line-a right"><i class="fa fa-expand"></i> <span>Quick View</span></a>-->
<!--                                                <div class="bottom-line">-->
<!--                                                    <div class="right-align">-->
<!--                                                        <a class="bottom-line-a square"><i class="fa fa-retweet"></i></a>-->
<!--                                                        <a class="bottom-line-a square"><i class="fa fa-heart"></i></a>-->
<!--                                                    </div>-->
<!--                                                    <div class="left-align">-->
<!--                                                        <a class="bottom-line-a"><i class="fa fa-shopping-cart"></i> Add to cart</a>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <a class="tag" href="#">Men clothing</a>-->
<!--                                            <a class="title" href="#">Blue Pullover Batwing Sleeve Zigzag</a>-->
<!--                                            <div class="rating-box">-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                            </div>-->
<!--                                            <div class="price">-->
<!--                                                <div class="prev">$199,99</div>-->
<!--                                                <div class="current">$119,99</div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="pagination"></div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="tabs-entry">-->
<!--                    <div class="products-swiper">-->
<!--                        <div class="swiper-container" data-autoplay="0" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-int-slides="2" data-sm-slides="3" data-md-slides="4" data-lg-slides="5" data-add-slides="5">-->
<!--                            <div class="swiper-wrapper">-->
<!--                                <div class="swiper-slide">-->
<!--                                    <div class="paddings-container">-->
<!--                                        <div class="product-slide-entry shift-image">-->
<!--                                            <div class="product-image">-->
<!--                                                <img src="img/product-minimal-6.jpg" alt="" />-->
<!--                                                <img src="img/product-minimal-12.jpg" alt="" />-->
<!--                                                <a class="top-line-a left"><i class="fa fa-retweet"></i></a>-->
<!--                                                <a class="top-line-a right"><i class="fa fa-heart"></i></a>-->
<!--                                                <div class="bottom-line">-->
<!--                                                    <a class="bottom-line-a"><i class="fa fa-shopping-cart"></i> Add to cart</a>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <a class="tag" href="#">Men clothing</a>-->
<!--                                            <a class="title" href="#">Blue Pullover Batwing Sleeve Zigzag</a>-->
<!--                                            <div class="rating-box">-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                            </div>-->
<!--                                            <div class="price">-->
<!--                                                <div class="prev">$199,99</div>-->
<!--                                                <div class="current">$119,99</div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="swiper-slide">-->
<!--                                    <div class="paddings-container">-->
<!--                                        <div class="product-slide-entry shift-image">-->
<!--                                            <div class="product-image">-->
<!--                                                <img src="img/product-minimal-7.jpg" alt="" />-->
<!--                                                <img src="img/product-minimal-11.jpg" alt="" />-->
<!--                                                <a class="top-line-a right"><i class="fa fa-expand"></i> <span>Quick View</span></a>-->
<!--                                                <div class="bottom-line">-->
<!--                                                    <div class="right-align">-->
<!--                                                        <a class="bottom-line-a square"><i class="fa fa-retweet"></i></a>-->
<!--                                                        <a class="bottom-line-a square"><i class="fa fa-heart"></i></a>-->
<!--                                                    </div>-->
<!--                                                    <div class="left-align">-->
<!--                                                        <a class="bottom-line-a"><i class="fa fa-shopping-cart"></i> Add to cart</a>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <a class="tag" href="#">Men clothing</a>-->
<!--                                            <a class="title" href="#">Blue Pullover Batwing Sleeve Zigzag</a>-->
<!--                                            <div class="rating-box">-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                            </div>-->
<!--                                            <div class="price">-->
<!--                                                <div class="prev">$199,99</div>-->
<!--                                                <div class="current">$119,99</div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="swiper-slide">-->
<!--                                    <div class="paddings-container">-->
<!--                                        <div class="product-slide-entry shift-image">-->
<!--                                            <div class="product-image">-->
<!--                                                <img src="img/product-minimal-8.jpg" alt="" />-->
<!--                                                <img src="img/product-minimal-12.jpg" alt="" />-->
<!--                                                <div class="bottom-line left-attached">-->
<!--                                                    <a class="bottom-line-a square"><i class="fa fa-shopping-cart"></i></a>-->
<!--                                                    <a class="bottom-line-a square"><i class="fa fa-heart"></i></a>-->
<!--                                                    <a class="bottom-line-a square"><i class="fa fa-retweet"></i></a>-->
<!--                                                    <a class="bottom-line-a square"><i class="fa fa-expand"></i></a>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <a class="tag" href="#">Men clothing</a>-->
<!--                                            <a class="title" href="#">Blue Pullover Batwing Sleeve Zigzag</a>-->
<!--                                            <div class="rating-box">-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                            </div>-->
<!--                                            <div class="price">-->
<!--                                                <div class="prev">$199,99</div>-->
<!--                                                <div class="current">$119,99</div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="swiper-slide">-->
<!--                                    <div class="paddings-container">-->
<!--                                        <div class="product-slide-entry shift-image">-->
<!--                                            <div class="product-image">-->
<!--                                                <img src="img/product-minimal-9.jpg" alt="" />-->
<!--                                                <img src="img/product-minimal-11.jpg" alt="" />-->
<!--                                                <a class="top-line-a right"><i class="fa fa-expand"></i> <span>Quick View</span></a>-->
<!--                                                <div class="bottom-line">-->
<!--                                                    <div class="right-align">-->
<!--                                                        <a class="bottom-line-a square"><i class="fa fa-retweet"></i></a>-->
<!--                                                        <a class="bottom-line-a square"><i class="fa fa-heart"></i></a>-->
<!--                                                    </div>-->
<!--                                                    <div class="left-align">-->
<!--                                                        <a class="bottom-line-a"><i class="fa fa-shopping-cart"></i> Add to cart</a>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <a class="tag" href="#">Men clothing</a>-->
<!--                                            <a class="title" href="#">Blue Pullover Batwing Sleeve Zigzag</a>-->
<!--                                            <div class="rating-box">-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                            </div>-->
<!--                                            <div class="price">-->
<!--                                                <div class="prev">$199,99</div>-->
<!--                                                <div class="current">$119,99</div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="swiper-slide">-->
<!--                                    <div class="paddings-container">-->
<!--                                        <div class="product-slide-entry shift-image">-->
<!--                                            <div class="product-image">-->
<!--                                                <img src="img/product-minimal-10.jpg" alt="" />-->
<!--                                                <img src="img/product-minimal-12.jpg" alt="" />-->
<!--                                                <a class="top-line-a right"><i class="fa fa-expand"></i> <span>Quick View</span></a>-->
<!--                                                <div class="bottom-line">-->
<!--                                                    <div class="right-align">-->
<!--                                                        <a class="bottom-line-a square"><i class="fa fa-retweet"></i></a>-->
<!--                                                        <a class="bottom-line-a square"><i class="fa fa-heart"></i></a>-->
<!--                                                    </div>-->
<!--                                                    <div class="left-align">-->
<!--                                                        <a class="bottom-line-a"><i class="fa fa-shopping-cart"></i> Add to cart</a>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <a class="tag" href="#">Men clothing</a>-->
<!--                                            <a class="title" href="#">Blue Pullover Batwing Sleeve Zigzag</a>-->
<!--                                            <div class="rating-box">-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                            </div>-->
<!--                                            <div class="price">-->
<!--                                                <div class="prev">$199,99</div>-->
<!--                                                <div class="current">$119,99</div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="pagination"></div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="tabs-entry">-->
<!--                    <div class="products-swiper">-->
<!--                        <div class="swiper-container" data-autoplay="0" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-int-slides="2" data-sm-slides="3" data-md-slides="4" data-lg-slides="5" data-add-slides="5">-->
<!--                            <div class="swiper-wrapper">-->
<!--                                <div class="swiper-slide">-->
<!--                                    <div class="paddings-container">-->
<!--                                        <div class="product-slide-entry shift-image">-->
<!--                                            <div class="product-image">-->
<!--                                                <img src="img/product-minimal-1.jpg" alt="" />-->
<!--                                                <img src="img/product-minimal-11.jpg" alt="" />-->
<!--                                                <a class="top-line-a left"><i class="fa fa-retweet"></i></a>-->
<!--                                                <a class="top-line-a right"><i class="fa fa-heart"></i></a>-->
<!--                                                <div class="bottom-line">-->
<!--                                                    <a class="bottom-line-a"><i class="fa fa-shopping-cart"></i> Add to cart</a>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <a class="tag" href="#">Men clothing</a>-->
<!--                                            <a class="title" href="#">Blue Pullover Batwing Sleeve Zigzag</a>-->
<!--                                            <div class="rating-box">-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                            </div>-->
<!--                                            <div class="price">-->
<!--                                                <div class="prev">$199,99</div>-->
<!--                                                <div class="current">$119,99</div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="swiper-slide">-->
<!--                                    <div class="paddings-container">-->
<!--                                        <div class="product-slide-entry shift-image">-->
<!--                                            <div class="product-image">-->
<!--                                                <img src="img/product-minimal-3.jpg" alt="" />-->
<!--                                                <img src="img/product-minimal-11.jpg" alt="" />-->
<!--                                                <a class="top-line-a right"><i class="fa fa-expand"></i> <span>Quick View</span></a>-->
<!--                                                <div class="bottom-line">-->
<!--                                                    <div class="right-align">-->
<!--                                                        <a class="bottom-line-a square"><i class="fa fa-retweet"></i></a>-->
<!--                                                        <a class="bottom-line-a square"><i class="fa fa-heart"></i></a>-->
<!--                                                    </div>-->
<!--                                                    <div class="left-align">-->
<!--                                                        <a class="bottom-line-a"><i class="fa fa-shopping-cart"></i> Add to cart</a>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <a class="tag" href="#">Men clothing</a>-->
<!--                                            <a class="title" href="#">Blue Pullover Batwing Sleeve Zigzag</a>-->
<!--                                            <div class="rating-box">-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                            </div>-->
<!--                                            <div class="price">-->
<!--                                                <div class="prev">$199,99</div>-->
<!--                                                <div class="current">$119,99</div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="swiper-slide">-->
<!--                                    <div class="paddings-container">-->
<!--                                        <div class="product-slide-entry shift-image">-->
<!--                                            <div class="product-image">-->
<!--                                                <img src="img/product-minimal-5.jpg" alt="" />-->
<!--                                                <img src="img/product-minimal-11.jpg" alt="" />-->
<!--                                                <div class="bottom-line left-attached">-->
<!--                                                    <a class="bottom-line-a square"><i class="fa fa-shopping-cart"></i></a>-->
<!--                                                    <a class="bottom-line-a square"><i class="fa fa-heart"></i></a>-->
<!--                                                    <a class="bottom-line-a square"><i class="fa fa-retweet"></i></a>-->
<!--                                                    <a class="bottom-line-a square"><i class="fa fa-expand"></i></a>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <a class="tag" href="#">Men clothing</a>-->
<!--                                            <a class="title" href="#">Blue Pullover Batwing Sleeve Zigzag</a>-->
<!--                                            <div class="rating-box">-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                            </div>-->
<!--                                            <div class="price">-->
<!--                                                <div class="prev">$199,99</div>-->
<!--                                                <div class="current">$119,99</div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="swiper-slide">-->
<!--                                    <div class="paddings-container">-->
<!--                                        <div class="product-slide-entry shift-image">-->
<!--                                            <div class="product-image">-->
<!--                                                <img src="img/product-minimal-7.jpg" alt="" />-->
<!--                                                <img src="img/product-minimal-11.jpg" alt="" />-->
<!--                                                <a class="top-line-a right"><i class="fa fa-expand"></i> <span>Quick View</span></a>-->
<!--                                                <div class="bottom-line">-->
<!--                                                    <div class="right-align">-->
<!--                                                        <a class="bottom-line-a square"><i class="fa fa-retweet"></i></a>-->
<!--                                                        <a class="bottom-line-a square"><i class="fa fa-heart"></i></a>-->
<!--                                                    </div>-->
<!--                                                    <div class="left-align">-->
<!--                                                        <a class="bottom-line-a"><i class="fa fa-shopping-cart"></i> Add to cart</a>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <a class="tag" href="#">Men clothing</a>-->
<!--                                            <a class="title" href="#">Blue Pullover Batwing Sleeve Zigzag</a>-->
<!--                                            <div class="rating-box">-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                            </div>-->
<!--                                            <div class="price">-->
<!--                                                <div class="prev">$199,99</div>-->
<!--                                                <div class="current">$119,99</div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="swiper-slide">-->
<!--                                    <div class="paddings-container">-->
<!--                                        <div class="product-slide-entry shift-image">-->
<!--                                            <div class="product-image">-->
<!--                                                <img src="img/product-minimal-9.jpg" alt="" />-->
<!--                                                <img src="img/product-minimal-11.jpg" alt="" />-->
<!--                                                <a class="top-line-a right"><i class="fa fa-expand"></i> <span>Quick View</span></a>-->
<!--                                                <div class="bottom-line">-->
<!--                                                    <div class="right-align">-->
<!--                                                        <a class="bottom-line-a square"><i class="fa fa-retweet"></i></a>-->
<!--                                                        <a class="bottom-line-a square"><i class="fa fa-heart"></i></a>-->
<!--                                                    </div>-->
<!--                                                    <div class="left-align">-->
<!--                                                        <a class="bottom-line-a"><i class="fa fa-shopping-cart"></i> Add to cart</a>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <a class="tag" href="#">Men clothing</a>-->
<!--                                            <a class="title" href="#">Blue Pullover Batwing Sleeve Zigzag</a>-->
<!--                                            <div class="rating-box">-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                                <div class="star"><i class="fa fa-star"></i></div>-->
<!--                                            </div>-->
<!--                                            <div class="price">-->
<!--                                                <div class="prev">$199,99</div>-->
<!--                                                <div class="current">$119,99</div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="pagination"></div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="information-blocks">-->
<!--        <div class="row">-->
<!--            <div class="col-sm-4 information-entry">-->
<!--                <h3 class="block-title inline-product-column-title">Featured products</h3>-->
<!--                <div class="inline-product-entry">-->
<!--                    <a href="#" class="image"><img alt="" src="img/product-image-inline-1.jpg"></a>-->
<!--                    <div class="content">-->
<!--                        <div class="cell-view">-->
<!--                            <a href="#" class="title">Ladies Pullover Batwing Sleeve Zigzag</a>-->
<!--                            <div class="price">-->
<!--                                <div class="prev">$199,99</div>-->
<!--                                <div class="current">$119,99</div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="clear"></div>-->
<!--                </div>-->
<!---->
<!--                <div class="inline-product-entry">-->
<!--                    <a href="#" class="image"><img alt="" src="img/product-image-inline-2.jpg"></a>-->
<!--                    <div class="content">-->
<!--                        <div class="cell-view">-->
<!--                            <a href="#" class="title">Ladies Pullover Batwing Sleeve Zigzag</a>-->
<!--                            <div class="price">-->
<!--                                <div class="prev">$199,99</div>-->
<!--                                <div class="current">$119,99</div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="clear"></div>-->
<!--                </div>-->
<!---->
<!--                <div class="inline-product-entry">-->
<!--                    <a href="#" class="image"><img alt="" src="img/product-image-inline-3.jpg"></a>-->
<!--                    <div class="content">-->
<!--                        <div class="cell-view">-->
<!--                            <a href="#" class="title">Ladies Pullover Batwing Sleeve Zigzag</a>-->
<!--                            <div class="price">-->
<!--                                <div class="prev">$199,99</div>-->
<!--                                <div class="current">$119,99</div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="clear"></div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-sm-4 information-entry">-->
<!--                <h3 class="block-title inline-product-column-title">Featured products</h3>-->
<!--                <div class="inline-product-entry">-->
<!--                    <a href="#" class="image"><img alt="" src="img/product-image-inline-1.jpg"></a>-->
<!--                    <div class="content">-->
<!--                        <div class="cell-view">-->
<!--                            <a href="#" class="title">Ladies Pullover Batwing Sleeve Zigzag</a>-->
<!--                            <div class="price">-->
<!--                                <div class="prev">$199,99</div>-->
<!--                                <div class="current">$119,99</div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="clear"></div>-->
<!--                </div>-->
<!---->
<!--                <div class="inline-product-entry">-->
<!--                    <a href="#" class="image"><img alt="" src="img/product-image-inline-2.jpg"></a>-->
<!--                    <div class="content">-->
<!--                        <div class="cell-view">-->
<!--                            <a href="#" class="title">Ladies Pullover Batwing Sleeve Zigzag</a>-->
<!--                            <div class="price">-->
<!--                                <div class="prev">$199,99</div>-->
<!--                                <div class="current">$119,99</div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="clear"></div>-->
<!--                </div>-->
<!---->
<!--                <div class="inline-product-entry">-->
<!--                    <a href="#" class="image"><img alt="" src="img/product-image-inline-3.jpg"></a>-->
<!--                    <div class="content">-->
<!--                        <div class="cell-view">-->
<!--                            <a href="#" class="title">Ladies Pullover Batwing Sleeve Zigzag</a>-->
<!--                            <div class="price">-->
<!--                                <div class="prev">$199,99</div>-->
<!--                                <div class="current">$119,99</div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="clear"></div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-sm-4 information-entry">-->
<!--                <h3 class="block-title inline-product-column-title">Featured products</h3>-->
<!--                <div class="inline-product-entry">-->
<!--                    <a href="#" class="image"><img alt="" src="img/product-image-inline-1.jpg"></a>-->
<!--                    <div class="content">-->
<!--                        <div class="cell-view">-->
<!--                            <a href="#" class="title">Ladies Pullover Batwing Sleeve Zigzag</a>-->
<!--                            <div class="price">-->
<!--                                <div class="prev">$199,99</div>-->
<!--                                <div class="current">$119,99</div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="clear"></div>-->
<!--                </div>-->
<!---->
<!--                <div class="inline-product-entry">-->
<!--                    <a href="#" class="image"><img alt="" src="img/product-image-inline-2.jpg"></a>-->
<!--                    <div class="content">-->
<!--                        <div class="cell-view">-->
<!--                            <a href="#" class="title">Ladies Pullover Batwing Sleeve Zigzag</a>-->
<!--                            <div class="price">-->
<!--                                <div class="prev">$199,99</div>-->
<!--                                <div class="current">$119,99</div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="clear"></div>-->
<!--                </div>-->
<!---->
<!--                <div class="inline-product-entry">-->
<!--                    <a href="#" class="image"><img alt="" src="img/product-image-inline-3.jpg"></a>-->
<!--                    <div class="content">-->
<!--                        <div class="cell-view">-->
<!--                            <a href="#" class="title">Ladies Pullover Batwing Sleeve Zigzag</a>-->
<!--                            <div class="price">-->
<!--                                <div class="prev">$199,99</div>-->
<!--                                <div class="current">$119,99</div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="clear"></div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

    <!-- FOOTER -->
    <div class="footer-wrapper style-10">
        <footer class="type-1">
            <div class="footer-columns-entry">
                <div class="row">
                    <div class="col-md-3">
                        <img class="footer-logo" src="img/logo-9.png" alt="" />
                        <div class="footer-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</div>
                        <div class="footer-address">30 South Avenue San Francisco<br/>
                            Phone: +78 123 456 789<br/>
                            Email: <a href="mailto:Support@blanco.com">Support@blanco.com</a><br/>
                            <a href="http://www.8theme.com/demo/html/mango/www.inmedio.com"><b>www.inmedio.com</b></a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="col-md-2 col-sm-4">
                        <h3 class="column-title">Our Services</h3>
                        <ul class="column">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Custom Service</a></li>
                            <li><a href="#">Terms &amp; Condition</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Returns</a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <div class="col-md-2 col-sm-4">
                        <h3 class="column-title">Our Services</h3>
                        <ul class="column">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Custom Service</a></li>
                            <li><a href="#">Terms &amp; Condition</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Returns</a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <div class="col-md-2 col-sm-4">
                        <h3 class="column-title">Our Services</h3>
                        <ul class="column">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Custom Service</a></li>
                            <li><a href="#">Terms &amp; Condition</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Returns</a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <div class="clearfix visible-sm-block"></div>
                    <div class="col-md-3">
                        <h3 class="column-title">Company working hours</h3>
                        <div class="footer-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</div>
                        <div class="footer-description">
                            <b>Monday-Friday:</b> 8.30 a.m. - 5.30 p.m.<br/>
                            <b>Saturday:</b> 9.00 a.m. - 2.00 p.m.<br/>
                            <b>Sunday:</b> Closed
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-navigation">
                <div class="cell-view">
                    <div class="footer-links">
                        <a href="#">Site Map</a>
                        <a href="#">Search</a>
                        <a href="#">Terms</a>
                        <a href="#">Advanced Search</a>
                        <a href="#">Orders and Returns</a>
                        <a href="#">Contact Us</a>
                    </div>
                    <div class="copyright">Created with by <a href="#">8theme</a>. All right reserved</div>
                </div>
                <div class="cell-view">
                    <div class="payment-methods">
                        <a href="#"><img src="img/payment-method-1.png" alt="" /></a>
                        <a href="#"><img src="img/payment-method-2.png" alt="" /></a>
                        <a href="#"><img src="img/payment-method-3.png" alt="" /></a>
                        <a href="#"><img src="img/payment-method-4.png" alt="" /></a>
                        <a href="#"><img src="img/payment-method-5.png" alt="" /></a>
                        <a href="#"><img src="img/payment-method-6.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>