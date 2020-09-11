<div class="content-push">

    <div class="breadcrumb-box">
        <a href="#">Home</a>
        <a href="#">Bags &amp; Accessories</a>
    </div>

    <div class="information-blocks">
        <div class="row">
            <div class="col-md-9 col-md-push-3 col-sm-8 col-sm-push-4">
                <div class="page-selector">
                    <div class="pages-box hidden-xs">
                        <a href="#" class="square-button active">1</a>
                        <a href="#" class="square-button">2</a>
                        <a href="#" class="square-button">3</a>
                        <div class="divider">...</div>
                        <a href="#" class="square-button"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <div class="shop-grid-controls">
                        <div class="entry">
                            <div class="inline-text">Sorty by</div>
                            <div class="simple-drop-down" >
                                <select onchange="location.href ='index.php?controller=Products&action=ProductCategory&category_id=<?php echo $category_id ?>&orderBy='+this.value;">
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
                                    <option value="100-400">100.000 -> 400.000</option>
                                    <option value="400-800">400.000->800.000</option>
                                    <option value="800-1200">800.000->1.200.000</option>
                                    <option value="all">all</option>
                                </select>
                            </div>
                            <div class="inline-text">per page</div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="row shop-grid grid-view">

                    <?php  foreach($list as $item): ?>
                        <div class="col-md-3 col-sm-4 shop-grid-item">
                            <div class="product-slide-entry shift-image">
                                <div class="product-image">
                                    <img src="../Assets/Upload/Products/<?php echo $item->photo?>" alt="" />
                                    <img src="../Assets/Upload/Products/<?php echo $item->photo?>" alt="" />
                                    <div class="bottom-line left-attached">
                                        <a class="bottom-line-a square"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="bottom-line-a square"><i class="fa fa-heart"></i></a>
                                        <a class="bottom-line-a square"><i class="fa fa-retweet"></i></a>
                                        <a class="bottom-line-a square"><i class="fa fa-expand"></i></a>
                                    </div>
                                </div>
                                <a class="tag" href="#">MANGO</a>
                                <a class="title" href="index.php?controller=products&action=ProductDetail&id=<?php echo $item->id ?>"><?php echo $item->name ?></a>
                                <div class="rating-box">
                                    <div class="star"><i class="fa fa-star"></i></div>
                                    <div class="star"><i class="fa fa-star"></i></div>
                                    <div class="star"><i class="fa fa-star"></i></div>
                                    <div class="star"><i class="fa fa-star"></i></div>
                                    <div class="star"><i class="fa fa-star"></i></div>
                                    <div class="reviews-number">25 reviews</div>
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
                <!--                <div class="page-selector">-->
                <!--                    <div class="description">Showing: 1-3 of 16</div>-->
                <!--                    <div class="pages-box">-->
                <!--                        <a href="#" class="square-button active">1</a>-->
                <!--                        <a href="#" class="square-button">2</a>-->
                <!--                        <a href="#" class="square-button">3</a>-->
                <!--                        <div class="divider">...</div>-->
                <!--                        <a href="#" class="square-button"><i class="fa fa-angle-right"></i></a>-->
                <!--                    </div>-->
                <!--                    <div class="clear"></div>-->
                <!--                </div>-->
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
                        <div class="accordeon-title">Bags &amp; Accessories</div>
                        <div class="accordeon-entry">
                            <div class="article-container style-1">
                                <ul>
                                    <li><a href="#">Bags &amp; Accessories</a></li>
                                    <li><a href="#">Man's Products</a></li>
                                    <li><a href="#">Woman's Products</a></li>
                                    <li><a href="#">Top Brands</a></li>
                                    <li><a href="#">Special Offer</a></li>
                                    <li><a href="#">Leather's Products</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordeon-title">Man's Products</div>
                        <div class="accordeon-entry">
                            <div class="article-container style-1">
                                <ul>
                                    <li><a href="#">Bags &amp; Accessories</a></li>
                                    <li><a href="#">Man's Products</a></li>
                                    <li><a href="#">Woman's Products</a></li>
                                    <li><a href="#">Top Brands</a></li>
                                    <li><a href="#">Special Offer</a></li>
                                    <li><a href="#">Leather's Products</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordeon-title">Woman's Products</div>
                        <div class="accordeon-entry">
                            <div class="article-container style-1">
                                <ul>
                                    <li><a href="#">Bags &amp; Accessories</a></li>
                                    <li><a href="#">Man's Products</a></li>
                                    <li><a href="#">Woman's Products</a></li>
                                    <li><a href="#">Top Brands</a></li>
                                    <li><a href="#">Special Offer</a></li>
                                    <li><a href="#">Leather's Products</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordeon-title">Top Brands</div>
                        <div class="accordeon-entry">
                            <div class="article-container style-1">
                                <ul>
                                    <li><a href="#">Bags &amp; Accessories</a></li>
                                    <li><a href="#">Man's Products</a></li>
                                    <li><a href="#">Woman's Products</a></li>
                                    <li><a href="#">Top Brands</a></li>
                                    <li><a href="#">Special Offer</a></li>
                                    <li><a href="#">Leather's Products</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordeon-title">Special Offer</div>
                        <div class="accordeon-entry">
                            <div class="article-container style-1">
                                <ul>
                                    <li><a href="#">Bags &amp; Accessories</a></li>
                                    <li><a href="#">Man's Products</a></li>
                                    <li><a href="#">Woman's Products</a></li>
                                    <li><a href="#">Top Brands</a></li>
                                    <li><a href="#">Special Offer</a></li>
                                    <li><a href="#">Leather's Products</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordeon-title">Leather's Products</div>
                        <div class="accordeon-entry">
                            <div class="article-container style-1">
                                <ul>
                                    <li><a href="#">Bags &amp; Accessories</a></li>
                                    <li><a href="#">Man's Products</a></li>
                                    <li><a href="#">Woman's Products</a></li>
                                    <li><a href="#">Top Brands</a></li>
                                    <li><a href="#">Special Offer</a></li>
                                    <li><a href="#">Leather's Products</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="information-blocks">
                    <div class="block-title size-2">Sort by sizes</div>
                    <div class="range-wrapper">
                        <div id="prices-range"></div>
                        <div class="range-price">
                            Price:
                            <div class="min-price"><b>&pound;<span>0</span></b></div>
                            <b>-</b>
                            <div class="max-price"><b>&pound;<span>200</span></b></div>
                        </div>
                        <a class="button style-14">filter</a>
                    </div>
                </div>

                <div class="information-blocks">
                    <div class="block-title size-2">Sort by sizes</div>
                    <div class="size-selector">
                        <div class="entry active">xs</div>
                        <div class="entry">s</div>
                        <div class="entry">m</div>
                        <div class="entry">l</div>
                        <div class="entry">xl</div>
                        <div class="spacer"></div>
                    </div>
                </div>

                <div class="information-blocks">
                    <div class="block-title size-2">Sort by brands</div>
                    <div class="row">
                        <div class="col-xs-6">
                            <label class="checkbox-entry">
                                <input type="checkbox" /> <span class="check"></span> Armani
                            </label>
                            <label class="checkbox-entry">
                                <input type="checkbox" /> <span class="check"></span> Bershka Co
                            </label>
                            <label class="checkbox-entry">
                                <input type="checkbox" /> <span class="check"></span> Nelly.com
                            </label>
                            <label class="checkbox-entry">
                                <input type="checkbox" /> <span class="check"></span> Zigzag Inc
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="checkbox-entry">
                                <input type="checkbox" /> <span class="check"></span> Armani
                            </label>
                            <label class="checkbox-entry">
                                <input type="checkbox" /> <span class="check"></span> Bershka Co
                            </label>
                            <label class="checkbox-entry">
                                <input type="checkbox" /> <span class="check"></span> Nelly.com
                            </label>
                            <label class="checkbox-entry">
                                <input type="checkbox" /> <span class="check"></span> Zigzag Inc
                            </label>
                        </div>
                    </div>
                </div>

                <div class="information-blocks">
                    <div class="block-title size-2">Sort by colours</div>
                    <div class="color-selector detail-info-entry">
                        <input style="height: 15px;background: green;" type="button" value="XANH" onclick="SetColor('green')">
                        <input style="height: 15px;background: red;" type="button" value="Đỏ" onclick="SetColor('red')">
                        <input style="height: 15px;background: purple;" type="button" value="Tím" onclick="SetColor('purple')">
                        <input style="height: 15px;background: yellow;" type="button" value="Vàng" onclick="SetColor('yellow')">
                        <div class="spacer"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="information-blocks">
        <div class="row">
            <div class="col-sm-4 information-entry">
                <h3 class="block-title inline-product-column-title">Featured products</h3>
                <div class="inline-product-entry">
                    <a href="#" class="image"><img alt="" src="img/product-image-inline-1.jpg"></a>
                    <div class="content">
                        <div class="cell-view">
                            <a href="#" class="title">Ladies Pullover Batwing Sleeve Zigzag</a>
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
                            <a href="#" class="title">Ladies Pullover Batwing Sleeve Zigzag</a>
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
                            <a href="#" class="title">Ladies Pullover Batwing Sleeve Zigzag</a>
                            <div class="price">
                                <div class="prev">$199,99</div>
                                <div class="current">$119,99</div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="col-sm-4 information-entry">
                <h3 class="block-title inline-product-column-title">Featured products</h3>
                <div class="inline-product-entry">
                    <a href="#" class="image"><img alt="" src="img/product-image-inline-1.jpg"></a>
                    <div class="content">
                        <div class="cell-view">
                            <a href="#" class="title">Ladies Pullover Batwing Sleeve Zigzag</a>
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
                            <a href="#" class="title">Ladies Pullover Batwing Sleeve Zigzag</a>
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
                            <a href="#" class="title">Ladies Pullover Batwing Sleeve Zigzag</a>
                            <div class="price">
                                <div class="prev">$199,99</div>
                                <div class="current">$119,99</div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="col-sm-4 information-entry">
                <h3 class="block-title inline-product-column-title">Featured products</h3>
                <div class="inline-product-entry">
                    <a href="#" class="image"><img alt="" src="img/product-image-inline-1.jpg"></a>
                    <div class="content">
                        <div class="cell-view">
                            <a href="#" class="title">Ladies Pullover Batwing Sleeve Zigzag</a>
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
                            <a href="#" class="title">Ladies Pullover Batwing Sleeve Zigzag</a>
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
                            <a href="#" class="title">Ladies Pullover Batwing Sleeve Zigzag</a>
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