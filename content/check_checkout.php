<div class="Checkout_section">
                            <div class="row">
                                   <div class="col-12">
                                   <?php
                                    if (!isset($_COOKIE['username'])) {
                                    ?>
                                        <div class="user-actions mb-20">
                                            <h3>
                                                <i class="fa fa-file-o" aria-hidden="true"></i>
                                                Bạn chưa đăng nhập?
                                                <a class="Returning" href="../pages/login.php">Nhấn đây để đăng nhập</a>
                                            </h3>
                                        </div>
                                    <?php
                                    }
                                    ?>

                                        <!-- <div class="user-actions mb-20">
                                            <h3> 
                                                <i class="fa fa-file-o" aria-hidden="true"></i>
                                                Returning customer?
                                                <a class="Returning" href="#" data-toggle="collapse" data-target="#checkout_coupon" aria-expanded="true">Click here to enter your code</a>     

                                            </h3>
                                             <div id="checkout_coupon" class="collapse" data-parent="#accordion">
                                                <div class="checkout_info">
                                                    <form action="#">
                                                        <input placeholder="Coupon code" type="text">
                                                         <input value="Apply coupon" type="submit">
                                                    </form>
                                                </div>
                                            </div>    
                                        </div>     -->
                                   </div>
                                </div>
                            <div class="checkout_form">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <form action="../component/addorder.php">
                                                <h3>Billing Details</h3>
                                                <div class="row">

                                                    <div class="col-12 mb-30">
                                                        <label>Full Name <span>*</span></label>
                                                        <input type="text" name="name" value="<?php echo $users_detail[0]['fullname'] ?>">    
                                                    </div>
                                                    <!-- <div class="col-lg-6 mb-30">
                                                        <label>Last Name  <span>*</span></label>
                                                        <input type="text"> 
                                                    </div> -->
                                                    <!-- <div class="col-12 mb-30">
                                                        <label>Company Name</label>
                                                        <input type="text">     
                                                    </div> -->
                                                    <!-- <div class="col-12 mb-30">
                                                        <label for="country">country <span>*</span></label>
                                                        <select name="cuntry" id="country"> 
                                                            <option value="2">bangladesh</option>      
                                                            <option value="3">Algeria</option> 
                                                            <option value="4">Afghanistan</option>    
                                                            <option value="5">Ghana</option>    
                                                            <option value="6">Albania</option>    
                                                            <option value="7">Bahrain</option>    
                                                            <option value="8">Colombia</option>    
                                                            <option value="9">Dominican Republic</option>   

                                                        </select>
                                                    </div> -->

                                                    <div class="col-12 mb-30">
                                                        <label>Street address  <span>*</span></label>
                                                        <input  type="text" name="address" value="<?php echo $users_detail[0]['address'] ?>">     
                                                    </div>
                                                    <!-- <div class="col-12 mb-30">
                                                        <input placeholder="Apartment, suite, unit etc. (optional)" type="text">     
                                                    </div> -->
                                                    <div class="col-12 mb-30">
                                                        <label>Phone <span>*</span></label>
                                                        <input type="text" name="phone" value="<?php echo $users_detail[0]['phone'] ?>">    
                                                    </div> 
                                                     <div class="col-12 mb-30">
                                                        <label>Email <span>*</span></label>
                                                        <input type="text" value="<?php echo $users_detail[0]['email'] ?>">    
                                                    </div> 
                                                    <!-- <div class="col-lg-6 mb-30">
                                                        <label>Phone<span>*</span></label>
                                                        <input type="text"> 

                                                    </div> 
                                                     <div class="col-lg-6 mb-30">
                                                        <label> Email Address   <span>*</span></label>
                                                          <input type="text"> 

                                                    </div>  -->
                                                    <!-- <div class="col-12 mb-30">
                                                        <input id="account" type="checkbox" data-target="createp_account">
                                                        <label for="account" data-toggle="collapse" data-target="#collapseOne" aria-controls="collapseOne">Create an account?</label>

                                                        <div id="collapseOne" class="collapse one" data-parent="#accordion">
                                                            <div class="card-body1">
                                                               <label> Account password   <span>*</span></label>
                                                                <input placeholder="password" type="password">  
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="col-12 mb-30">
                                                        <input id="address" type="checkbox" data-target="createp_account">
                                                        <label class="righ_0" for="address" data-toggle="collapse" data-target="#collapsetwo" aria-controls="collapseOne">Ship to a different address?</label>

                                                        <div id="collapsetwo" class="collapse one" data-parent="#accordion">
                                                           <div class="row">
                                                                <div class="col-lg-6 mb-30">
                                                                    <label>First Name <span>*</span></label>
                                                                    <input type="text">    
                                                                </div>
                                                                <div class="col-lg-6 mb-30">
                                                                    <label>Last Name  <span>*</span></label>
                                                                    <input type="text"> 
                                                                </div>
                                                                <div class="col-12 mb-30">
                                                                    <label>Company Name</label>
                                                                    <input type="text">     
                                                                </div>
                                                                <div class="col-12 mb-30">
                                                                    <div class="select_form_select">
                                                                        <label for="countru_name">country <span>*</span></label>
                                                                        <select name="cuntry" id="countru_name"> 
                                                                            <option value="2">bangladesh</option>      
                                                                            <option value="3">Algeria</option> 
                                                                            <option value="4">Afghanistan</option>    
                                                                            <option value="5">Ghana</option>    
                                                                            <option value="6">Albania</option>    
                                                                            <option value="7">Bahrain</option>    
                                                                            <option value="8">Colombia</option>    
                                                                            <option value="9">Dominican Republic</option>   

                                                                        </select>
                                                                    </div> 
                                                                </div>

                                                                <div class="col-12 mb-30">
                                                                    <label>Street address  <span>*</span></label>
                                                                    <input placeholder="House number and street name" type="text">     
                                                                </div>
                                                                <div class="col-12 mb-30">
                                                                    <input placeholder="Apartment, suite, unit etc. (optional)" type="text">     
                                                                </div>
                                                                <div class="col-12 mb-30">
                                                                    <label>Town / City <span>*</span></label>
                                                                    <input type="text">    
                                                                </div> 
                                                                 <div class="col-12 mb-30">
                                                                    <label>State / County <span>*</span></label>
                                                                    <input type="text">    
                                                                </div> 
                                                                <div class="col-lg-6 mb-30">
                                                                    <label>Phone<span>*</span></label>
                                                                    <input type="text"> 

                                                                </div> 
                                                                 <div class="col-lg-6">
                                                                    <label> Email Address   <span>*</span></label>
                                                                      <input type="text"> 

                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <div class="col-12">
                                                        <div class="order-notes">
                                                             <label for="order_note">Order Notes</label>
                                                            <textarea id="order_note" name="note" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                                        </div>    
                                                    </div>     	    	    	    	    	    	    
                                                </div>
                                            <!-- </form>     -->
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <!-- <form action="#">     -->
                                                <h3>Your order</h3> 
                                                <div class="order_table table-responsive mb-30">
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th>Product</th>
                                                                <th>Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php $total=0;
                                                        foreach ($_SESSION['cart'] as $cartitem)
                                                        {
                                                            
                                                        ?>
                                                            <tr>
                                                                <td> <?php echo $cartitem['name']; ?> <strong> × <?php echo($cartitem['soluong']); ?></strong></td>
                                                                <td> <?php echo number_format($cartitem['soluong' ]
                                                                *$cartitem['price'],3)." VND"; ?></td>
                                                            </tr>
                                                        <?php
                                                            $total+=$cartitem['soluong']*$cartitem['price'];
                                                            
                                                        }
                                                            $_SESSION['total']=$total;
                                                            // var_dump($_SESSION['total']);
                                                            // var_dump($total);
                                                            // exit;
                                                        ?>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>Cart Subtotal</th>
                                                                <td><?php echo number_format($total, 3)." VND"?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Shipping</th>
                                                                <td><strong>0.000VND</strong></td>
                                                            </tr>
                                                            <tr class="order_total" >
                                                                <th>Order Total</th>
                                                                <td ><strong><?php echo number_format($total, 3)." VND"?></strong></td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>     
                                                </div>
                                                <div class="payment_method">
                                                   <!-- <div class="panel-default">
                                                        <input id="payment" name="check_method" type="radio" data-target="createp_account">
                                                        <label for="payment" data-toggle="collapse" data-target="#method" aria-controls="method">Create an account?</label>

                                                        <div id="method" class="collapse one" data-parent="#accordion">
                                                            <div class="card-body1">
                                                               <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                            </div>
                                                        </div>
                                                    </div>  -->
                                                   <!-- <div class="panel-default">
                                                        <input id="payment_defult" name="check_method" type="radio" data-target="createp_account">
                                                        <label for="payment_defult" data-toggle="collapse" data-target="#collapsedefult" aria-controls="collapsedefult">PayPal <img src="<?php echo($level)?>assets\img\visha\papyel.png" alt=""></label>

                                                        <div id="collapsedefult" class="collapse one" data-parent="#accordion">
                                                            <div class="card-body1">
                                                               <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p> 
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <div class="panel-default">
                                                        <label for="country">Payment_method<span>*</span></label>
                                                        <select name="pay" id="country"> 
                                                            <option value="Card">Card</option>      
                                                            <option value="Cash">Cash</option> 
                                                            <option value="Momo">Momo</option>    
                                                            <option value="VNpay">VNpay</option>    
                                                            <option value="Zalopay">Zalopay</option>    

                                                        </select>
                                                    </div>
                                                    <div class="order_button">
                                                        <button type="submit">Proceed to PayPal</button> 
                                                    </div>    
                                                </div> 
                                            </form>         
                                        </div>
                                    </div> 
                                </div>        
                        </div>