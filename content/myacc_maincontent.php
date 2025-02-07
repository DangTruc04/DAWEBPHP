<form action="" method="POST">
    <section class="main_content_area">
                                <div class="account_dashboard">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-3 col-lg-3">
                                            <!-- Nav tabs -->
                                            <div class="dashboard_tab_button">
                                                <ul role="tablist" class="nav flex-column dashboard-list">
                                                    <li><a href="#dashboard" data-toggle="tab" class="nav-link active">Dashboard</a></li>
                                                    <li> <a href="#orders" data-toggle="tab" class="nav-link">Orders</a></li>
                                                    <!-- <li><a href="#downloads" data-toggle="tab" class="nav-link">Downloads</a></li> -->
                                                    <!-- <li><a href="#address" data-toggle="tab" class="nav-link">Addresses</a></li> -->
                                                    <li><a href="#account-details" data-toggle="tab" class="nav-link">Account details</a></li>
                                                    <li><a href="../component/logout_data.php" class="nav-link">logout</a></li>
                                                </ul>
                                            </div>    
                                        </div>
                                        
                                        <div class="col-sm-12 col-md-9 col-lg-9">
                                            <!-- Tab panes -->
                                            <div class="tab-content dashboard_content">
                                                <div class="tab-pane fade show active" id="dashboard">
                                                    <h3>Dashboard </h3>
                                                    <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a href="#">Edit your password and account details.</a></p>
                                                </div>
                                                <div class="tab-pane fade" id="orders">
                                                    <h3>Orders</h3>
                                                    <div class="coron_table table-responsive">
                                                        <table class="table">
                                                        <?php
                                                            if (is_array($order_info) || is_object($order_info)) {
                                                                echo '
                                                                <thead>
                                                                    <tr>
                                                                        <th>Order</th>
                                                                        <th>Date</th>
                                                                        <th>Status</th>
                                                                        <th>Total</th>
                                                                        <th>Actions</th>	 	 	 	
                                                                    </tr>
                                                                </thead>
                                                                <tbody>';
                                                                $stt = 1;
                                                                foreach ($order_info as $order) {
                                                                    echo '
                                                                    <tr>
                                                                        <td>' . $stt . '</td>
                                                                        <td>' . $order['order_date'] . '</td>
                                                                        <td><span class="success">' . $order['status'] . '</span></td>
                                                                        <td>' . $order['total_money'] . '.000 VND for ' . $order['slsp'] . ' item</td>
                                                                        <td><a href="' . $level . 'pages/invoice_details.php?id=' . $order['ID'] . '" class="view">view</a></td>
                                                                    </tr>';
                                                                    $stt++; // Tăng giá trị của $stt sau mỗi lần lặp
                                                                }

                                                                echo '</tbody>';
                                                            } else {
                                                                // Xử lý trường hợp không có dữ liệu hoặc dữ liệu không phải là mảng
                                                                echo "Không có dữ liệu hóa đơn.";
                                                            }
                                                            ?>


                                                        </table>
                                                    </div>
                                                </div>
                                                
                                                <div class="tab-pane fade" id="downloads">
                                                    <h3>Downloads</h3>
                                                    <div class="coron_table table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Product</th>
                                                                    <th>Downloads</th>
                                                                    <th>Expires</th>
                                                                    <th>Download</th>	 	 	 	
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Shopnovilla - Free Real Estate PSD Template</td>
                                                                    <td>May 10, 2018</td>
                                                                    <td><span class="danger">Expired</span></td>
                                                                    <td><a href="#" class="view">Click Here To Download Your File</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Organic - ecommerce html template</td>
                                                                    <td>Sep 11, 2018</td>
                                                                    <td>Never</td>
                                                                    <td><a href="#" class="view">Click Here To Download Your File</a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="address">
                                                   <p>The following addresses will be used on the checkout page by default.</p>
                                                    <h4 class="billing-address">Billing address</h4>
                                                    <!-- <a href="#" class="view">Edit</a> -->
                                                    <p><strong>Bobby Jackson</strong></p>
                                                    <address>
                                                        House #15<br>
                                                        Road #1<br>
                                                        Block #C <br>
                                                        Banasree <br>
                                                        Dhaka <br>
                                                        1212
                                                    </address>
                                                    <p>Bangladesh</p>   
                                                </div>
                                                <div class="tab-pane fade" id="account-details">
                                                    <h3>Account details </h3>
                                                    <div class="login">
                                                        <div class="login_form_container">
                                                            <div class="account_login_form">
                                                                <form action="../component/edit_profile.php" method="post">
                                                                    <!-- <p>Already have an account? <a href="#">Log in instead!</a></p> -->
                                                                    <!-- <div class="input-radio">
                                                                        <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mr.</span>
                                                                        <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mrs.</span>
                                                                    </div> <br> -->
                                                                    <?php include($level.'component/checkout_data.php')?>
                                                                        <label>Full Name</label>
                                                                        <input type="text" id="fullname" name="fullname" value="<?php echo $users_detail[0]['fullname'] ?>">

                                                                        <label>Email</label><br>
                                                                        <span><?php echo $users_detail[0]['email']?></span><br>

                                                                        <label>Phone</label>
                                                                        <input type="text" id="user-phone" name="user-phone" value="<?php echo $users_detail[0]['phone'] ?>">
                                                                        
                                                                        <label>Address</label>
                                                                        <input type="text" id="user-adress" name="user-adress" value="<?php echo $users_detail[0]['address'] ?>">

                                                                    
                                                                    <!-- <label>Birthdate</label>
                                                                    <input type="text" placeholder="MM/DD/YYYY" value="" name="birthday">
                                                                    <span class="example">
                                                                      (E.g.: 05/31/1970)
                                                                    </span>
                                                                    <br>
                                                                    <span class="custom_checkbox">
                                                                        <input type="checkbox" value="1" name="optin">
                                                                        <label>Receive offers from our partners</label>
                                                                    </span>
                                                                    <br>
                                                                    <span class="custom_checkbox">
                                                                        <input type="checkbox" value="1" name="newsletter">
                                                                        <label>Sign up for our newsletter<br><em>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</em></label>
                                                                    </span> -->
                                                        
                                                                    <input type="submit" value="Save">
                                                                
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>      	
                        </section>
                    </form>