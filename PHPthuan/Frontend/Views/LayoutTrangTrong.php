<!DOCTYPE html>
<html>

<!-- Mirrored from 8theme.com/demo/html/mango/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Aug 2015 14:21:08 GMT -->
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
    <link href="../Assets/Frontend/css/style.css" rel="stylesheet" type="text/css" />
    <!--[if IE 9]>
        <link href="../Assets/Frontend/css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="shortcut icon" href="img/favicon-6.ico" />
    <title>Mango - Shop</title>
    <script>

    </script>
</head>
<body class="style-10">

    <!-- LOADER -->
  <!--   <div id="loader-wrapper">
        <div class="bubbles">
            <div class="title">loading</div>
            <span></span>
            <span id="bubble2"></span>
            <span id="bubble3"></span>
        </div>
    </div> -->

    <div id="content-block">

        <div class="content-center fixed-header-margin">
            <!-- HEADER -->
            <div class="header-wrapper style-10">
                <header class="type-1">

<?php include_once "Views/HeaderTrangTrong.php"?>
                </header>
                <div class="clear"></div>
            </div>
            <?php
            // lay bien controller tu url

            if (file_exists($fileController )){

                include_once $fileController;
                if (class_exists($className)) {
                    $obj2 = new $className();
                    $obj2->$action();
                }

            }

            //                ?>


        </div>
        <div class="clear"></div>

    </div>

    <div class="overlay-popup" id="image-popup">
        
        <div class="overflow">
            <div class="table-view">
                <div class="cell-view">
                    <div class="close-layer"></div>
                    <div class="popup-container">
                        <img class="gallery-image" src="img/portfolio-1.jpg" alt="" />
                        <div class="close-popup"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="search-box popup">
        <form>
            <div class="search-button">
                <i class="fa fa-search"></i>
                <input type="submit" />
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
            <div class="search-field">
                <input type="text" value="" placeholder="Search for product" />
            </div>
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



    <script src="../Assets/Frontend/js/jquery-2.1.3.min.js"></script>
    <script src="../Assets/Frontend/js/idangerous.swiper.min.js"></script>
    <script src="../Assets/Frontend/js/global.js"></script>

    <!-- custom scrollbar -->
    <script src="../Assets/Frontend/js/jquery.mousewheel.js"></script>
    <script src="../Assets/Frontend/js/jquery.jscrollpane.min.js"></script>

    <!-- range slider -->
    <script src="../Assets/Frontend/js/jquery-ui.min.js"></script>
    <script>
        $(document).ready(function(){
            var minVal = parseInt($('.min-price span').text());
            var maxVal = parseInt($('.max-price span').text());
            $( "#prices-range" ).slider({
                range: true,
                min: minVal,
                max: maxVal,
                step: 5,
                values: [ minVal, maxVal ],
                slide: function( event, ui ) {
                    $('.min-price span').text(ui.values[ 0 ]);
                    $('.max-price span').text(ui.values[ 1 ]);
                }
            });
        });




    </script>

</body>

<!-- Mirrored from 8theme.com/demo/html/mango/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Aug 2015 14:21:09 GMT -->
</html>
