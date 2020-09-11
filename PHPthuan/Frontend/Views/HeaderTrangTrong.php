<div class="header-product">
    <div class="logo-wrapper">
        <a href="#" id="logo"><img alt="" src="../Assets/Frontend/img/logo-9.png"></a>
    </div>
    <div class="product-header-message">
        FREE SHIPPING ON ALL UK ORDERS this week
    </div>
    <div class="product-header-content">
        <div class="line-entry">
            <div class="menu-button responsive-menu-toggle-class"><i class="fa fa-reorder"></i></div>
            <div >
<!--                <div class="title"><i class="fa fa-search"></i> <span>Search</span></div>-->

                <script type="text/javascript">
                    function search1() {
                        key = document.getElementById("key").value;
                        location.href = "index.php?controller=Products&action=Search&key=" + key;
                        return false;
                    }
                    function searchForm1(event) {
                        //neu keypress la enter
                        if (event.keyCode == 13) {
                            key = document.getElementById("key").value;
                            alert(key);
                            location.href = "index.php?controller=Products&action=Search&key=" + key;
                        }
                        return false;
                    }

                </script>
                <!--<form method="post" id="frm" action="">-->
                <style type="text/css">
                    #box-search{
                        position: relative;
                    }
                    #box-search ul{ margin-left:0px; margin-top: 8px; width: 96%;padding:0px;list-style: none; position: absolute; z-index: 10; display: none;}
                    #box-search img{width: 70px;}
                    #box-search ul li{border-bottom: 1px solid #dddddd;
                        background: black;margin-left: -13px;width: 100%}
                </style>
                <div id="box-search" class="simple-search-form">
                    <!--                                    <form>-->
                    <input type="text"  onkeyup="ajaxSearch1();" onkeypress="searchForm1(event);" value="" placeholder="Nhập từ khóa tìm kiếm..." id="key" >
                    <div class="simple-submit">
                        <i class="fa fa-search"></i>
                        <input type="submit"  onclick="return search1();">
                    </div>
                    <ul id="ajax-search" style="">

                    </ul>
                </div>

                <script>
                    function ajaxSearch1(){
                        var key = document.getElementById("key").value;
                        if(key != ""){
                            $.ajax({
                                url: "ajax.php?key="+key,
                                success: function( result ) {
                                    $("#ajax-search").empty();
                                    $("#ajax-search").append(result);
                                }
                            });
                            document.getElementById("ajax-search").setAttribute("style","display:block");

                        }else{
                            document.getElementById("ajax-search").setAttribute("style","display:none");

                        }
                    }
                </script>
            </div>


<!---->
<!--            <div class="header-top-entry increase-icon-responsive">-->
                <?php if (isset($_SESSION['account'])==false){ ?>
                    <div class="header-top-entry">
                        <div class="title">Setting <i class="fa fa-caret-down"></i></div>
                        <div class="list">
                            <a class="list-entry" href="index.php?controller=Account&action=RegisterForm">Register</a>
                            <a class="list-entry" href="index.php?controller=Account&action=Login">Login</a>
                        </div>
                    </div>
                <?php }else{ ?>
                    <div class="header-top-entry">
                        <div class="title"><img alt="" src="img/flag-lang-1.png">My Account<i class="fa fa-caret-down"></i></div>
                        <div class="list">
                            <a class="list-entry" href="index.php?controller=Account&action=Profile"><img alt="" src="img/flag-lang-2.png">Profile</a>
                            <a class="list-entry" href="index.php?controller=Account&action=Logout"><img alt="" src="img/flag-lang-3.png">Logout</a>
                        </div>
                    </div>
                <?php } ?>
<!--            </div>-->

            <div class="header-top-entry">
                <div class="title">$ USD <i class="fa fa-caret-down"></i></div>
                <div class="list">
                    <a class="list-entry" href="#">$ CAD</a>
                    <a class="list-entry" href="#">€ EUR</a>
                </div>
            </div>
        </div>
        <div class="middle-line"></div>
        <div class="line-entry">
            <a href="#" class="header-functionality-entry"><i class="fa fa-copy"></i><span>Compare</span></a>
            <a href="#" class="header-functionality-entry"><i class="fa fa-heart-o"></i><span>Wishlist</span></a>
            <a href="index.php?controller=Cart&action=CartList" class="header-functionality-entry "><i class="fa fa-shopping-cart"></i><span>My Cart</span> <b>
                 <?php
                 $total =0;
                 if (isset($_SESSION['Cart']) && $_SESSION['Cart']!=null){
                     foreach ($_SESSION['Cart'] as $list){
                       $total += $list['quantity'];
                     }
                     echo $total;

                 }else{
                     echo 0;
                 }
                 ?>

                    </b></a>
        </div>
    </div>
</div>
<div class="close-header-layer"></div>
<div class="navigation">
    <div class="navigation-header responsive-menu-toggle-class">
        <div class="title">Navigation</div>
        <div class="close-menu"></div>
    </div>
    <div class="nav-overflow">
        <nav>
            <ul>
                <li class="full-width">
                    <a href="index.php" class="active">Home</a><i class="fa fa-chevron-down"></i>

                </li>
                <li class="full-width-columns">
                    <a href="#">Pages</a><i class="fa fa-chevron-down"></i>
<!--                    <div class="submenu">-->
<!--                        <div class="product-column-entry">-->
<!--                            <div class="image"><img alt="" src="img/product-menu-2.jpg"></div>-->
<!--                            <div class="submenu-list-title"><a href="contact.html">Contact Us</a><span class="toggle-list-button"></span></div>-->
<!--                            <div class="description toggle-list-container">-->
<!--                                <ul class="list-type-1">-->
<!--                                    <li><a href="contact.html"><i class="fa fa-angle-right"></i>Contact Us 1</a></li>-->
<!--                                    <li><a href="contact-2.html"><i class="fa fa-angle-right"></i>Contact Us 2</a></li>-->
<!--                                    <li><a href="contact-3.html"><i class="fa fa-angle-right"></i>Contact Us 3</a></li>-->
<!--                                    <li><a href="contact-4.html"><i class="fa fa-angle-right"></i>Contact Us 4</a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="hot-mark">hot</div>-->
<!--                        </div>-->
<!--                        <div class="product-column-entry">-->
<!--                            <div class="image"><img alt="" src="img/product-menu-4.jpg"></div>-->
<!--                            <div class="submenu-list-title"><a href="about-1.html">About Us</a><span class="toggle-list-button"></span></div>-->
<!--                            <div class="description toggle-list-container">-->
<!--                                <ul class="list-type-1">-->
<!--                                    <li><a href="about-1.html"><i class="fa fa-angle-right"></i>About Us Fullwidth 1</a></li>-->
<!--                                    <li><a href="about-2.html"><i class="fa fa-angle-right"></i>About Us Fullwidth 2</a></li>-->
<!--                                    <li><a href="about-3.html"><i class="fa fa-angle-right"></i>About Us Fullwidth 3</a></li>-->
<!--                                    <li><a href="about-4.html"><i class="fa fa-angle-right"></i>About Us Sidebar 1</a></li>-->
<!--                                    <li><a href="about-5.html"><i class="fa fa-angle-right"></i>About Us Sidebar 2</a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="hot-mark yellow">sale</div>-->
<!--                        </div>-->
<!--                        <div class="product-column-entry">-->
<!--                            <div class="image"><img alt="" src="img/product-menu-3.jpg"></div>-->
<!--                            <div class="submenu-list-title"><a href="cart.html">Cart</a><span class="toggle-list-button"></span></div>-->
<!--                            <div class="description toggle-list-container">-->
<!--                                <ul class="list-type-1">-->
<!--                                    <li><a href="cart.html"><i class="fa fa-angle-right"></i>Cart</a></li>-->
<!--                                    <li><a href="cart-traditional.html"><i class="fa fa-angle-right"></i>Cart Traditional</a></li>-->
<!--                                    <li><a href="checkout.html"><i class="fa fa-angle-right"></i>Checkout</a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="product-column-entry">-->
<!--                            <div class="image"><img alt="" src="img/product-menu-5.jpg"></div>-->
<!--                            <div class="submenu-list-title"><a href="teaser-background.html">Coming Soon</a><span class="toggle-list-button"></span></div>-->
<!--                            <div class="description toggle-list-container">-->
<!--                                <ul class="list-type-1">-->
<!--                                    <li><a href="teaser-background.html"><i class="fa fa-angle-right"></i>Coming Soon 1</a></li>-->
<!--                                    <li><a href="teaser-background-2.html"><i class="fa fa-angle-right"></i>Coming Soon 2</a></li>-->
<!--                                    <li><a href="teaser-simple.html"><i class="fa fa-angle-right"></i>Coming Soon 3</a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="hot-mark">hot</div>-->
<!--                        </div>-->
<!--                        <div class="product-column-entry">-->
<!--                            <div class="image"><img alt="" src="img/product-menu-2.jpg"></div>-->
<!--                            <div class="submenu-list-title"><a href="shop.html">Products </a><span class="toggle-list-button"></span></div>-->
<!--                            <div class="description toggle-list-container">-->
<!--                                <ul class="list-type-1">-->
<!---->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="submenu-links-line">-->
<!--                            <div class="submenu-links-line-container">-->
<!--                                <div class="cell-view">-->
<!--                                    <div class="line-links"><b>Quicklinks:</b>  <a href="shop.html">Blazers</a>, <a href="shop.html">Jackets</a>, <a href="shop.html">Shoes</a>, <a href="shop.html">Bags</a>, <a href="shop.html">Special offers</a>, <a href="shop.html">Sales and discounts</a></div>-->
<!--                                </div>-->
<!--                                <div class="cell-view">-->
<!--                                    <div class="red-message"><b>-20% sale only this week. Don’t miss buy something!</b></div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                </li>
               <?php
               include_once "Controllers/HeaderController.php";
               $obj = new HeaderController();
               $obj->listCateTrangTrong();
               ?>
                <li class="column-1">
                    <a href="portfolio-default.html">Portfolio</a><i class="fa fa-chevron-down"></i>
                    <div class="submenu">
                        <div class="full-width-menu-items-left">
                            <img class="submenu-background" src="img/product-menu-7.jpg" alt="" />
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="submenu-list-title"><a href="portfolio-default.html">Our Portfolio</a><span class="toggle-list-button"></span></div>
                                    <ul class="list-type-1 toggle-list-container">
                                        <li><a href="portfolio-default.html"><i class="fa fa-angle-right"></i>Portfolio Default</a></li>
                                        <li><a href="portfolio-simple.html"><i class="fa fa-angle-right"></i>Portfolio Simple</a></li>
                                        <li><a href="portfolio-custom.html"><i class="fa fa-angle-right"></i>Portfolio Custom</a></li>
                                        <li><a href="portfolio-customfullwidth.html"><i class="fa fa-angle-right"></i>Fullwidth Custom</a></li>
                                        <li><a href="portfolio-simplefullwidth.html"><i class="fa fa-angle-right"></i>Fullwidth Simple</a></li>
                                        <li><a href="project-default.html"><i class="fa fa-angle-right"></i>Project Default</a></li>
                                        <li><a href="project-fullwidth.html"><i class="fa fa-angle-right"></i>Project Fullwidth</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="submenu-links-line">
                            <div class="submenu-links-line-container">
                                <div class="cell-view">
                                    <div class="line-links"><b>Quicklinks:</b>  <a href="shop.html">Blazers</a>, <a href="shop.html">Jackets</a>, <a href="shop.html">Shoes</a>, <a href="shop.html">Bags</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="column-1">
                    <a href="blog.html">Blog</a><i class="fa fa-chevron-down"></i>
                    <div class="submenu">
                        <div class="full-width-menu-items-left">
                            <img class="submenu-background" src="img/product-menu-8.jpg" alt="" />
                            <div class="row">
                                <div class="col-md-12">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="simple-list">
                    <a>More</a><i class="fa fa-chevron-down"></i>
                </li>
            </ul>

            <div class="clear"></div>

            <a class="fixed-header-visible additional-header-logo"><img src="img/logo-9.png" alt=""/></a>
        </nav>
        <div class="navigation-footer responsive-menu-toggle-class">
            <div class="socials-box">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                <div class="clear"></div>
            </div>
            <div class="navigation-copyright">Created by <a href="#">8theme</a>. All rights reserved</div>
        </div>
    </div>
</div>