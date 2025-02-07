<div class="header_top">
                                   <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-6">
                                           <div class="switcher">
                                                <ul>
                                                    <li class="languages"><a href="#"><img src="<?php echo($level)?>assets\img\logo\fontlogo.jpg" alt=""> English <i class="fa fa-angle-down"></i></a>
                                                        <ul class="dropdown_languages">
                                                            <li><a href="#"><img src="<?php echo($level)?>assets\img\logo\fontlogo.jpg" alt=""> English</a></li>
                                                            <li><a href="#"><img src="<?php echo($level)?>assets\img\logo\fontlogo2.jpg" alt=""> French </a></li>
                                                        </ul>   
                                                    </li> 

                                                    <li class="currency"><a href="#"> Currency : $ <i class="fa fa-angle-down"></i></a>
                                                        <ul class="dropdown_currency">
                                                            <li><a href="#"> Dollar (USD)</a></li>
                                                            <li><a href="#"> Euro (EUR)  </a></li>

                                                        </ul> 
                                                    </li> 
                                                    <li class="statistical"><a href="#"> Access times : <?php echo $count_visits?></a>

                                                    </li> 

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="header_links">
                                                <ul>
                                                    <li><a href="#" title="Contact">Contact</a></li>
                                                    <li><a href="<?php echo($level)?>pages/wishlist.php" title="wishlist">My wishlist</a></li>
                                                    <!-- <li><a href="<?php echo($level)?>pages/my-account.php" title="My account">My account</a></li> -->
                                                    <!-- <li><a href="<?php echo($level)?>pages/cart.php" title="My cart">My cart</a></li> -->
                                                    <?php
                                                    if (isset($_COOKIE['username'])) {
                                                    ?>
                                                        <li><a href="<?php echo $level.'pages/my-account.php?id=' . $_COOKIE['username']; ?>" title="Login">Xin chào <?php echo $_COOKIE['username']; ?></a></li>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <li><a href="<?php echo($level)?>pages/login.php" title="Login">Login</a></li>
                                                    <?php
                                                    }
                                                    ?>
                                                    
                                                </ul>
                                            </div>   
                                        </div>
                                   </div> 
                                </div>