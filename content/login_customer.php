<div class="customer_login">
                            <div class="row">
                            <?php
                                if (isset($_COOKIE['username']))
                                {
                                echo 'Xin chao '.$_COOKIE ['username'];
                                echo '<a href="../component/logout_data.php"> Đăng xuất</a>';
                                }

                                else
                                {
                                ?>
                                    <!--login area start-->
                                        <div class="col-lg-6 col-md-6">
                                            <div class="account_form">
                                                <h2>login</h2>
                                                <form action="../pages/login.php" method="post">
                                                    <p>   
                                                        <label>Username or email <span>*</span></label>
                                                        <input type="text" name="txtusername">
                                                     </p>
                                                     <p>   
                                                        <label>Passwords <span>*</span></label>
                                                        <input type="password" name="txtpassword">
                                                     </p>   
                                                    <div class="login_submit">
                                                        <button type="submitlogin">login</button>
                                                        <!-- <label for="remember">
                                                            <input id="remember" type="checkbox">
                                                            Remember me
                                                        </label> -->
                                                        <!-- <a href="#">Lost your password?</a> -->
                                                    </div>

                                                </form>
                                             </div>    
                                        </div>
                                        <!--login area start-->
                                    <?php
                                    }?>
        
    
                                       

                                        <!--register area start-->
                                        <!-- <div class="col-lg-6 col-md-6">
                                            <div class="account_form register">
                                                <h2>Register</h2>
                                                <form action="#">
                                                    <p>   
                                                        <label>Email address  <span>*</span></label>
                                                        <input type="text">
                                                     </p>
                                                     <p>   
                                                        <label>Passwords <span>*</span></label>
                                                        <input type="password">
                                                     </p>
                                                    <div class="login_submit">
                                                        <button type="submit">Register</button>
                                                    </div>
                                                </form>
                                            </div>    
                                        </div> -->
                                        <!--register area end-->
                                    </div>
                        </div>