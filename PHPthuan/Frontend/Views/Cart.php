
<div class="content-push">

    <div class="breadcrumb-box">
        <a href="index.php">Home</a>

        <a href="index.php?controller=Cart&action=CartList">Shopping Cart</a>
    </div>

    <div class="information-blocks">
        <div class="table-responsive">
            <table class="cart-table">
                <tr>
                    <th class="column-1">Product Name</th>
                    <th class="column-2">Unit Price</th>
                    <th class="column-3">Qty</th>
                    <th class="column-4">Subtotal</th>
                    <th class="column-5"></th>
                </tr>
                <?php if (isset($_SESSION['Cart'])){
                    foreach ($_SESSION['Cart'] as $item){
                    ?>
                <tr>
                    <td>
                        <div class="traditional-cart-entry">
                            <a href="index.php?controller=Products&action=ProductDetail&id=<?php echo $item['id'] ?>" class="image"><img src="../Assets/Upload/Products/<?php echo $item['photo'] ?>" alt=""></a>
                            <div class="content">
                                <div class="cell-view">
                                    <a href="#" class="tag">woman clothing</a>
                                    <a href="index.php?controller=Products&action=ProductDetail&id=<?php echo $item['id'] ?>" class="title"><?php echo $item['name'] ?></a>
                                    <div class="inline-description"><?php echo $item['content'] ?></div>
                                    <div class="inline-description"><?php echo $item['description'] ?></div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td><?php echo $item['price']-( $item['price']* $item['discount']/100)?></td>
                    <td>
                        <div class="quantity-selector detail-info-entry">
                            <div onclick="location.href='index.php?controller=Cart&action=GiamPrice&id=<?php echo $item['id'] ?>'" class="entry number-minus">&nbsp;</div>
                            <div class="entry number"><?php echo $item['quantity'] ?></div>
                            <div onclick="location.href='index.php?controller=Cart&action=TangPrice&id=<?php echo $item['id'] ?>'" class="entry number-plus">&nbsp;</div>
                        </div>
                    </td>
                    <td><div class="subtotal"><?php echo $item['totalPrice']?></div></td>
                    <td><a href="index.php?controller=Cart&action=RemoveCart&id=<?php echo $item['id']?>" class="remove-button"><i class="fa fa-times"></i></a></td>
                </tr>
             <?php
                        }
                    } ?>
            </table>
        </div>
        <div class="cart-submit-buttons-box">
            <a href="index.php?controller=Products&action=Search&key=" class="button style-15">Continue Shopping</a>
<!--            <a class="button style-15">Update Bag</a>-->
        </div>
        <div class="row">
            <div class="col-md-4 information-entry">
                <h3 class="cart-column-title">Get shipping Estimates</h3>
                <form>
                    <label>Country</label>
                    <div class="simple-drop-down simple-field size-1">
                        <select>
                            <option>United States</option>
                            <option>Great Britain</option>
                            <option>Canada</option>
                        </select>
                    </div>
                    <label>State</label>
                    <div class="simple-drop-down simple-field size-1">
                        <select>
                            <option>Alabama</option>
                            <option>Alaska</option>
                            <option>Idaho</option>
                        </select>
                    </div>
                    <label>Zip Code</label>
                    <input type="text" value="" placeholder="Zip Code" class="simple-field size-1">
                    <div class="button style-16" style="margin-top: 10px;">calculate shipping<input type="submit"/></div>
                </form>
            </div>
            <div class="col-md-4 information-entry">
                <h3 class="cart-column-title">Discount Codes <span class="inline-label red">Promotion</span></h3>
                <form>
                    <label>Enter your coupon code if you have one.</label>
                    <input type="text" value="" placeholder="" class="simple-field size-1">
                    <div class="button style-16" style="margin-top: 10px;">Apply Coupon<input type="submit"/></div>
                </form>
            </div>
            <div class="col-md-4 information-entry">
                <div class="cart-summary-box">

                    <div class="grand-total">Grand Total <?php
                        $grandTotal=0;
                        if(isset($_SESSION['Cart'])){
                            foreach ($_SESSION['Cart'] as $value){
                                $grandTotal += $value['totalPrice'];
                            }
                        }
                        echo $grandTotal;
                        ?></div>
                    <a  href="index.php?controller=Account&action=Checkout" class="button style-10" href="#">Proceed To Checkout</a>
                    <a class="simple-link">Checkout with Multiple Addresses</a>
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
