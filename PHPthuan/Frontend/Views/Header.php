
<div id="content-block">

    <div class="content-center fixed-header-margin">
        <!-- HEADER -->
        <div class="header-wrapper style-14">
            <header class="type-4">
                <div class="header-top">
                    <div class="header-top-entry">
                        <div class="title"><img src="img/flag-lang-1.png" alt="" />English<i class="fa fa-caret-down"></i></div>
                        <div class="list">
                            <a href="#" class="list-entry"><img src="img/flag-lang-2.png" alt="" />French</a>
                            <a href="#" class="list-entry"><img src="img/flag-lang-3.png" alt="" />Ukrainian</a>
                        </div>
                    </div>
                    <div class="header-top-entry">
                        <div class="title"><b>Currency:</b> $ USD<i class="fa fa-caret-down"></i></div>
                        <div class="list">
                            <a href="#" class="list-entry">$ CAD</a>
                            <a href="#" class="list-entry">&#8364; EUR</a>
                        </div>
                    </div>
                    <div class="header-top-entry hidden-xs">
                        <div class="title"><i class="fa fa-phone"></i>Any question? Call Us <a href="tel:+987123654"><b>+987 123 654</b></a></div>
                    </div>

                    <div class="menu-button responsive-menu-toggle-class"><i class="fa fa-reorder"></i></div>
                    <div class="clear"></div>
                </div>

                <div class="header-middle">
                    <div class="logo-wrapper">
                        <a id="logo" href="#"><img src="img/logo-12.png" alt="" /></a>
                    </div>

                    <div class="right-entries">
                        <a class="header-functionality-entry open-search-popup" href="#"><i class="fa fa-search"></i><span>Search</span></a>
                        <a class="header-functionality-entry" href="#"><i class="fa fa-copy"></i><span>Compare</span></a>
                        <?php
                        if (isset($_SESSION['account'])==false){?>
                        <a class="header-functionality-entry" href="index.php?controller=Account&action=RegisterForm"><i class="fa fa-heart-o"></i><span>Đăng kí</span></a>
                        <?php } elseif(isset($_SESSION['account'])==true){ ?>
                            <a class="header-functionality-entry" href="index.php?controller=Account&action=Profile"><i class="fa fa-heart-o"></i><span>Profile</span></a>

                  <?php     } ?>

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

                <div class="close-header-layer"></div>
                <div class="navigation">
                    <div class="navigation-header responsive-menu-toggle-class">
                        <div class="title">Navigation</div>
                        <div class="close-menu"></div>
                    </div>
                    <div class="header-simple-search hidden-xs hidden-sm hidden-md">
                        <div class="row">
                            <div class="col-md-3 col-md-push-9">

                                <script type="text/javascript">
                                    function search() {
                                        key = document.getElementById("key").value;
                                        location.href = "index.php?controller=Products&action=Search&key=" + key;
                                        return false;
                                    }
                                    function searchForm(event) {
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
                                        <input type="text"  onkeyup="ajaxSearch();" onkeypress="searchForm(event);" value="" placeholder="Nhập từ khóa tìm kiếm..." id="key" >
                                        <div class="simple-submit">
                                            <i class="fa fa-search"></i>
                                            <input type="submit"  onclick="return search();">
                                        </div>
                                        <ul id="ajax-search" style="">
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        function ajaxSearch(){
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
                    <div class="nav-overflow">
                        <nav>
                            <ul>
                                <li class="full-width">
                                    <a href="#" class="active">Home</a><i class="fa fa-chevron-down"></i>
                                </li>
                                <li class="full-width-columns">
                                    <a href="#">Pages</a>
                                </li>
                                <li>
                                    <?php
                                    include_once "Controllers/HeaderController.php";
                                    $obj = new HeaderController();
                                    $obj->listCate();
                                    ?>
                                </li>
                                <li class="column-1">
                                    <a href="#">Portfolio</a>

                                </li>
                                <li class="column-1">
                                    <a href="#">Blog</a>

                                </li>
                                <li class="simple-list">
                                    <a>More</a>

                                </li>
                                <li><a href="#">Buy this theme</a></li>
                                <li class="fixed-header-visible">
                                    <a class="fixed-header-square-button open-cart-popup"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="fixed-header-square-button open-search-popup"><i class="fa fa-search"></i></a>
                                </li>
                            </ul>
                            <div class="clear"></div>

                            <a class="fixed-header-visible additional-header-logo"><img src="img/logo-12.png" alt=""/></a>
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
            </header>