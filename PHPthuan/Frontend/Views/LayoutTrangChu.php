<!DOCTYPE html>
<html>

<!-- Mirrored from 8theme.com/demo/html/mango/index-bags.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Aug 2015 14:16:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui"/>
    <link href="../Assets/Frontend/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../Assets/Frontend/css/idangerous.swiper.css" rel="stylesheet" type="text/css" />
    <link href="../Assets/Frontend/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700%7CDancing+Script%7CMontserrat:400,700%7CMerriweather:400,300italic%7CLato:400,700,900' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Cantata+One' rel='stylesheet' type='text/css' />
    <link href="../Assets/Frontend/css/style.css" rel="stylesheet" type="text/css" />
    <!--[if IE 9]>
    <link href="../Assets/Frontend/css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="shortcut icon" href="img/favicon-8.ico" />
    <title>Mango - Bags</title>
</head>
<body class="style-14">

<div id="loader-wrapper">
    <div class="bubbles">
        <div class="title">loading</div>
        <span></span>
        <span id="bubble2"></span>
        <span id="bubble3"></span>
    </div>
</div>

<?php

include_once "Views/Header.php";

?>
            <div class="clear"></div>
        </div>

        <div class="content-push">

            <div class="row">

      <?php
      include_once "Controllers/RightCateController.php";
      $obj = new RightCateController();
      $obj->listCategories();
      ?>

                <div class="col-md-9 col-md-pull-3">

                    <div class="navigation-banner-swiper">
                        <div class="swiper-container" data-autoplay="5000" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide active" data-val="0">
                                    <div class="navigation-banner-wrapper align-1" style="background-image: url('../Assets/Frontend/img/presentation-2.jpg');">
                                        <div class="navigation-banner-content">
                                            <div class="cell-view">
                                                <h2 class="subtitle"  style="color: whitesmoke;">new special collection</h2>
                                                <h1 class="title"  style="color: whitesmoke;">Back to <br/> School!</h1>
                                                <div class="description"  style="color: whitesmoke;">Lorem ipsum dolor sit amet, consectetur adipiscing  elit, sed do eiusmod tempor incididunt.</div>
                                                <div class="info">
                                                    <a  style="color: red;" class="button style-1" href="#">Shop Now</a>
                                                    <a  style="color: red;" class="button style-1" href="#">Features</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-val="1">
                                    <div class="navigation-banner-wrapper align-1" style="background-image: url('../Assets/Frontend/img/presentation-1.jpg');">
                                        <div class="navigation-banner-content">
                                            <div class="cell-view">
                                                <h2 class="subtitle" style="color: whitesmoke;">New special collection</h2>
                                                <h1 class="title" style="color: whitesmoke;">delicacy</h1>
                                                <div class="description" style="color: whitesmoke;">Lorem ipsum dolor sit amet, consectetur adipiscing  elit, sed do eiusmod tempor incididunt.</div>
                                                <div class="info">
                                                    <a style="color: red;" class="button style-1" href="#">Shop Now</a>
                                                    <a style="color: red;" class="button style-1" href="#">Features</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="pagination"></div>
                        </div>
                    </div>

                    <div class="clear"></div>

                </div>

            </div>


            <div class="information-blocks">
                <div class="row">
                    <div class="col-md-9 information-entry">



                        <div class="mozaic-banners-wrapper type-2">
                            <div class="row">
                                <div class="banner-column col-sm-6">
                                    <a style="background-image: url(img/bags-3.jpg); background-size: cover;" class="mozaic-banner-entry type-3">
                                            <span class="mozaic-banner-content">
                                                <span class="subtitle">Category</span>
                                                <span class="title">Leather</span>
                                                <span class="view">view category</span>
                                            </span>
                                    </a>
                                </div>
                                <div class="banner-column col-sm-6">
                                    <a style="background-image: url(img/bags-4.jpg); background-size: cover;" class="mozaic-banner-entry type-3">
                                            <span class="mozaic-banner-content">
                                                <span class="subtitle">Category</span>
                                                <span class="title">Other</span>
                                                <span class="view">view category</span>
                                            </span>
                                    </a>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>

                        <div class="tabs-container">
                            <div class="swiper-tabs tabs-switch">
                                <div class="title">Products</div>
                                <div class="list">
                                    <a class="block-title tab-switcher active">Hot Products</a>
                                    <a class="block-title tab-switcher">New Products</a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div>
                    <?php include_once "Controllers/HomeController.php";
                    $obj = new HomeController();
                    $obj->hotProduct();
                    ?>
                              <?php
                              $obj = new HomeController();
                              $obj->newProducts();
                              ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="color-text-widget" style="background-color: #333;">
                                    <div class="cell-view">
                                        <h3 class="title">Free UK Shipping</h3>
                                        <div class="description">Lorem ipsum dolor sit amet, consectetur adipisc eiusmod. Lorem ipsum dolor sit amet.</div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="color-text-widget" style="background-color: #6d4c3d;">
                                    <div class="cell-view">
                                        <h3 class="title">Free UK Shipping</h3>
                                        <div class="description">Lorem ipsum dolor sit amet, consectetur adipisc eiusmod. Lorem ipsum dolor sit amet.</div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>

                        <div class="tabs-container">
                            <div class="swiper-tabs tabs-switch">
                                <a class="block-title tab-switcher active">Supper Sale Products</a>
                                <div class="clear"></div>
                            </div>
                           <?php $obj= new HomeController();
                           $obj->saleProducts();
                           ?>
                        </div>

                    </div>
                    <div class="col-md-3 information-entry">
                        <div class="information-blocks">
                            <a class="sale-entry vertical" href="#">
                                <span class="hot-mark yellow">hot</span>
                                <span class="sale-price"><span>-40%</span> Valentine <br> Underwear Sale</span>
                                <span class="sale-description">Lorem ipsum dolor sitamet, conse adipisc sed do eiusmod tempor.</span>
                                <img style="" class="sale-image" src="img/text-widget-image-5.jpg" alt="" />
                            </a>
                        </div>

                        <div class="information-blocks">
                            <h3 class="block-title">Latest Reviews</h3>
                            <div class="swiper-container blockquote-slider" data-autoplay="0" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <blockquote class="latest-review">
                                            <div class="text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation"</div>
                                            <footer><cite>Helen Smith</cite>, 25 minutes ago</footer>
                                        </blockquote>
                                    </div>
                                    <div class="swiper-slide">
                                        <blockquote class="latest-review">
                                            <div class="text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation"</div>
                                            <footer><cite>Helen Smith</cite>, 25 minutes ago</footer>
                                        </blockquote>
                                    </div>
                                    <div class="swiper-slide">
                                        <blockquote class="latest-review">
                                            <div class="text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation"</div>
                                            <footer><cite>Helen Smith</cite>, 25 minutes ago</footer>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="pagination"></div>
                            </div>
                        </div>

                        <div class="information-blocks">
                            <h3 class="block-title">Company Informations</h3>
                            <div class="text-widget">
                                <img class="image" src="img/text-widget-image-4.jpg" alt="">
                                <div class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                <a class="read-more">Read more <i class="fa fa-angle-right"></i></a>
                                <div class="clear"></div>
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
                            <a href="#" class="image"><img alt="" src="img/product-image-inline-33.jpg"></a>
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
                            <a href="#" class="image"><img alt="" src="img/product-image-inline-34.jpg"></a>
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
                            <a href="#" class="image"><img alt="" src="img/product-image-inline-35.jpg"></a>
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
                            <a href="#" class="image"><img alt="" src="img/product-image-inline-36.jpg"></a>
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
                            <a href="#" class="image"><img alt="" src="img/product-image-inline-33.jpg"></a>
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
                            <a href="#" class="image"><img alt="" src="img/product-image-inline-34.jpg"></a>
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
                            <a href="#" class="image"><img alt="" src="img/product-image-inline-35.jpg"></a>
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
                            <a href="#" class="image"><img alt="" src="img/product-image-inline-36.jpg"></a>
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
                            <a href="#" class="image"><img alt="" src="img/product-image-inline-33.jpg"></a>
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
            <div class="footer-wrapper style-3">
                <footer class="type-1">
                    <div class="footer-columns-entry">
                        <div class="row">
                            <div class="col-md-3">
                                <img alt="" src="img/logo-14.png" class="footer-logo">
                                <div class="footer-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</div>
                                <div class="footer-address">30 South Avenue San Francisco<br>
                                    Phone: +78 123 456 789<br>
                                    Email: <a href="mailto:Support@blanco.com">Support@blanco.com</a><br>
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
                                    <b>Monday-Friday:</b> 8.30 a.m. - 5.30 p.m.<br>
                                    <b>Saturday:</b> 9.00 a.m. - 2.00 p.m.<br>
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
                                <a href="#"><img alt="" src="img/payment-method-1.png"></a>
                                <a href="#"><img alt="" src="img/payment-method-2.png"></a>
                                <a href="#"><img alt="" src="img/payment-method-3.png"></a>
                                <a href="#"><img alt="" src="img/payment-method-4.png"></a>
                                <a href="#"><img alt="" src="img/payment-method-5.png"></a>
                                <a href="#"><img alt="" src="img/payment-method-6.png"></a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

        </div>

    </div>
    <div class="clear"></div>

</div>

<div class="search-box popup">
    <form>
        <div class="search-button">
            <i class="fa fa-search"></i>
<!--            <input type="submit" onclick="return search();" />-->
        </div>
        <div class="search-drop-down">
            <div class="title"><span>All categories</span><i class="fa fa-angle-down"></i></div>
            <div class="list">
                <div class="overflow">
                    <div class="category-entry">Category 1</div>
                    <div class="category-entry">Category 2</div>
                    <div class="category-entry">Category 2</div>
                    <div class="category-entry">Category 4</div>
                    <div class="category-entry">Category 5</div>
                    <div class="category-entry">Lorem</div>
                    <div class="category-entry">Ipsum</div>
                    <div class="category-entry">Dollor</div>
                    <div class="category-entry">Sit Amet</div>
                </div>
            </div>
        </div>

        <style type="text/css">
            #box-search{
                position: relative;
            }
            #box-search ul{padding:0px; margin:0px; list-style: none; position: absolute; z-index: 10; width: 100%; background: white; display: none;}
            #box-search img{width: 70px;}
            #box-search ul li{border-bottom: 1px solid #dddddd;}
        </style>

    </form>
</div>

<div class="cart-box popup">
    <div class="popup-container">
        <div class="cart-entry">
            <a class="image"><img src="img/product-menu-1.jpg" alt="" /></a>
            <div class="content">
                <a class="title" href="#">Pullover Batwing Sleeve Zigzag</a>
                <div class="quantity">Quantity: 4</div>
                <div class="price">$990,00</div>
            </div>
            <div class="button-x"><i class="fa fa-close"></i></div>
        </div>
        <div class="cart-entry">
            <a class="image"><img src="img/product-menu-1_.jpg" alt="" /></a>
            <div class="content">
                <a class="title" href="#">Pullover Batwing Sleeve Zigzag</a>
                <div class="quantity">Quantity: 4</div>
                <div class="price">$990,00</div>
            </div>
            <div class="button-x"><i class="fa fa-close"></i></div>
        </div>
        <div class="summary">
            <div class="subtotal">Subtotal: $990,00</div>
            <div class="grandtotal">Grand Total <span>$1029,79</span></div>
        </div>
        <div class="cart-buttons">
            <div class="column">
                <a class="button style-3">view cart</a>
                <div class="clear"></div>
            </div>
            <div class="column">
                <a class="button style-4">checkout</a>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>

<script src="../Assets/Frontend/js/jquery-2.1.3.min.js"></script>
<script src="../Assets/Frontend/js/idangerous.swiper.min.js"></script>
<script src="../Assets/Frontend/js/global.js"></script>

<!-- custom scrollbar -->
<script src="../Assets/Frontend/js/jquery.mousewheel.js"></script>
<script src="../Assets/Frontend/js/jquery.jscrollpane.min.js"></script>
</body>

<!-- Mirrored from 8theme.com/demo/html/mango/index-bags.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Aug 2015 14:16:57 GMT -->
</html>
