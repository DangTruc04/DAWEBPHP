<?php 
if ($checkcart== true && isset($_COOKIE['username']))
{
?>
<div class="coupon_area">
                                        <div class="row">
                                            <!-- <div class="col-lg-6 col-md-6">
                                                <div class="coupon_code">
                                                    <h3>Coupon</h3>
                                                    <div class="coupon_inner">   
                                                        <p>Enter your coupon code if you have one.</p>                                
                                                        <input placeholder="Coupon code" type="text">
                                                        <button type="submit">Apply coupon</button>
                                                    </div>    
                                                </div>
                                            </div> -->
                                            <div class="col-lg-6 col-md-6">
                                                <div class="coupon_code">
                                                    <h3>Cart Totals</h3>
                                                    <div class="coupon_inner">
                                                       <div class="cart_subtotal">
                                                           <p>Subtotal</p>
                                                           <p class="cart_amount"><?php echo number_format($total, 3)." VND"?></p>
                                                       </div>
                                                       <div class="cart_subtotal ">
                                                           <p>Shipping</p>
                                                           <p class="cart_amount"><span>Flat Rate:</span> 0.000 VND</p>
                                                       </div>
                                                       <a href="#">Calculate shipping</a>

                                                       <div class="cart_subtotal">
                                                           <p>Total</p>
                                                           <p class="cart_amount"><?php echo number_format($total, 3)." VND"?></p>
                                                       </div>
                                                       <div class="checkout_btn">
                                                           <a href="../pages/checkout.php">Proceed to Checkout</a>
                                                       </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
}

elseif(isset($_COOKIE['username']))
{?>
<div class="user-actions mb-20">
                                            <h3> 
                                                <i class="fa fa-file-o" aria-hidden="true"></i>
                                                Bạn không có sản phẩm nào trong giỏ hàng?
                                                <a  href="../index.php" >Nhấn để về trang chủ</a>     

                                            </h3>
                                        </div>
                                        <?php
}
else
{?>
<div class="user-actions mb-20">
                                            <h3> 
                                                <i class="fa fa-file-o" aria-hidden="true"></i>
                                                Bạn chưa đăng nhập?
                                                <a class="Returning" href="../pages/login.php">Nhấn đây để đăng nhập</a>    

                                            </h3>
                                        </div>
                                        <?php
}?>