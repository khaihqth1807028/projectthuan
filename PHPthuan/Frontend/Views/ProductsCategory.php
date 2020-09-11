<div class="content-push">

    <div class="breadcrumb-box">
        <a href="index.php">Home</a>
        <a href="index.php?controller=Products&action=Search&key=">Products</a>
        <?php $record= $this->categoriesNameDetailParent($_GET['category_id']) ?>
        <a href="index.php?controller=Products&action=CategoryProduct&category_id=<?php echo  $record->id ?>"><?php   echo $record->name ?></a>
        <a href="index.php?controller=Products&action=ProductCategory&category_id=<?php echo $_GET['category_id'] ?>"><?php
            $record =$this->categoriesNameDetail($_GET['category_id']);
            echo  $record->name;
            ?></a>
    </div>

    <div class="information-blocks">
        <div class="row">
            <div class="col-md-9 col-md-push-3 col-sm-8 col-sm-push-4">
                <div class="page-selector">
                    <div class="pages-box hidden-xs">

                            <a class="square-button active" >1</a>
                        <a class="square-button " >2</a>
                        <a class="square-button " >...</a>
                    </div>
                    <div class="shop-grid-controls">
                        <div class="entry">
                            <div class="inline-text">Sorty by</div>
                            <div class="simple-drop-down" >
                                <select onchange="location.href ='index.php?controller=Products&action=ProductCategory&category_id=<?php echo $category_id ?>&orderBy='+this.value;">
                                    <option selected></option>
                                    <option value="priceTang">Price +</option>
                                    <option value="A-Z">A-Z</option>
                                    <option value="Z-A">Z-A</option>
                                    <option value="priceGiam">Price -</option>
                                </select>
                            </div>

                        </div>
                        <div class="entry">
                            <div class="view-button active grid"><i class="fa fa-th"></i></div>
                            <div class="view-button list"><i class="fa fa-list"></i></div>
                        </div>
                        <div class="entry">
                            <div class="inline-text">Price</div>
                            <div class="simple-drop-down" style="width: 75px;">
                                <select  onchange="location.href ='index.php?controller=Products&action=ProductCategory&category_id=<?php echo $category_id ?>&groupPrice='+this.value;">
                                    <option selected></option>
                                    <option value="100-400">100.000 -> 400.000</option>
                                    <option value="400-800">400.000->800.000</option>
                                    <option value="800-1200">800.000->1.200.000</option>
                                </select>
                            </div>
                            <div class="inline-text">per page</div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="row shop-grid grid-view">

                    <?php  foreach($listCategories as $item): ?>
                    <div class="col-md-3 col-sm-4 shop-grid-item">
                        <div class="product-slide-entry shift-image">
                            <div class="product-image">
                                <img src="../Assets/Upload/Products/<?php echo $item->photo?>" alt="" />
                                <img src="../Assets/Upload/Products/<?php echo $item->photo?>" alt="" />
                                <div class="bottom-line left-attached">
                                    <a href="index.php?controller=Cart&action=AddCart&id=<?php echo $item->id ?>&category_id=<?php echo isset($_GET['category_id'])?$_GET['category_id']:"" ?>&return=ProductCategory" class="bottom-line-a square"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="bottom-line-a square"><i class="fa fa-heart"></i></a>
                                    <a class="bottom-line-a square"><i class="fa fa-retweet"></i></a>
                                    <a class="bottom-line-a square"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <a class="tag" href="#">MANGO</a>
                            <a class="title" href="index.php?controller=products&action=ProductDetail&id=<?php echo $item->id ?>"><?php echo $item->name ?></a>
                            <div class="rating-box">

                            </div>
                            <div class="article-container style-1">
                                <p><?php echo $item->description?></p>
                            </div>
                            <div class="price">
                                <div class="prev"><?php echo $item->price ?></div>
                                <div class="current"><?php echo $newPrice = $item->price-($item->price*$item->discount/100)?></div>
                            </div>
                            <div class="list-buttons">
                                <a class="button style-10">Add to cart</a>
                                <a class="button style-11"><i class="fa fa-heart"></i> Add to Wishlist</a>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
<?php endforeach; ?>
                </div>

                <div style="clear: both;"></div>
                <div class="&#x70;&#x61;&#x67;&#x69;&#x6E;&#x61;&#x74;&#x69;&#x6F;&#x6E;&#x2D;&#x63;&#x6F;&#x6E;&#x74;&#x61;&#x69;&#x6E;&#x65;&#x72;"><ul class="&#x70;&#x61;&#x67;&#x69;&#x6E;&#x61;&#x74;&#x69;&#x6F;&#x6E;">
                        <li class="disabled"><a href="#">Trang</a></li>
                        <?php for($i = 1; $i <= $numPage; $i++): ?>
                            <li><a href="index.php?controller=Products&action=ProductCategory&category_id=<?php echo $item->category_id ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php endfor; ?>
                    </ul></div>
            </div>
            <div class="col-md-3 col-md-pull-9 col-sm-4 col-sm-pull-8 blog-sidebar">
                <div class="information-blocks categories-border-wrapper">
                    <div class="block-title size-3">Categories</div>
                    <div class="accordeon">
                        <?php
                        $listCate=$this->listLeftCate();
                        foreach ($listCate as $item):
                        ?>
                            <div class="accordeon">
                                <div class="accordeon-title">

                                    <a href="index.php?controller=Products&action=CategoryProduct&category_id=<?php echo $item->id ?>"><?php echo $item->name ?></a>

                                </div>
                                <div class="accordeon-entry">
                                    <div class="article-container style-1">
                                        <ul>
                                            <?php $listCateSub = $this->listLeftCateSub($item->id);
                                            foreach ($listCateSub as $itemSub):
                                                ?>
                                                <li><a href="index.php?controller=Products&action=ProductCategory&category_id=<?php echo $itemSub->id ?>"><?php echo $itemSub->name ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
<?php endforeach; ?>
                    </div>
                </div>

                <div class="information-blocks">
                    <div class="block-title size-2">Sort by sizes</div>
                    <div class="range-wrapper">
                        <!--                        <form action="index.php?controller=Products&action=Search&price=--><?php //echo $price=isset($_POST['price'])?$_POST['price'] : "" ?><!--" method="post">-->

                        Price:<br>
                        <input style="background: #dddddd;width: 60%" type="range" id="price" name="price" min="0" max="5000000">
                        <div class="range-price" style="width: 66%;">

                            <div class="min-price" style="margin-right: 106px;: "><b><span><?php echo $starPrice =0?></span></b></div>

                            <div class="max-price" style="float: right;"><b><span>5tr</span></b></div>
                        </div>
                        <button onclick="location.href = 'index.php?controller=Products&action=SearchPrice&price=' + document.getElementById('price').value; " class="button style-14">filter</button>
                        <!--                        </form>     -->
                    </div>
                </div>
                <div class="information-blocks">
                    <div class="block-title size-2">Sort by parameter</div>
                    <div class="row">
                        <div class="col-xs-12">
                            <?php $listPara =$this->listParameter() ;
                            foreach($listPara as $itemPara ):
                            ?>

                            <h1 style="font-size: 20px;background-color: black;color: white;" ><?php echo $itemPara->name ?></h1>

                            <?php $listParaSub = $this->listParameterSub($itemPara->id);
                            foreach($listParaSub as $itemParaSub ):
                            ?>
                            <label class="checkbox-entry">
                                <input onchange="location.href='index.php?controller=Products&action=SearchPara&parameterId=<?php echo $itemParaSub->id ?>'"  name="para_id" type="checkbox" /> <span class="check"></span><?php echo $itemParaSub->name ?>
                                <?php endforeach; ?>
                                <?php endforeach; ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



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