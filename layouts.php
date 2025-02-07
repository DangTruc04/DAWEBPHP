<!doctype html>
<html class="no-js" lang="zxx">
    
    <head>
        <?php include($level."head/metadata.php")?>
    </head>
    <body>
            <!-- Add your site or application content here -->
            
            <!--pos page start-->
            <div class="pos_page">
                <div class="container">
                   <!--pos page inner-->
                    <div class="pos_page_inner">  
                       <!--header area -->
                        <div class="header_area">
                               <!--header top--> 
                               <?php include ($level.'component/statistical_data.php')?>
                                <?php include($level."header/headertop.php")?>
                                <!--header top end-->

                                <!--header middel--> 
                                <?php include($level."header/headermiddel.php")?>     
                                <!--header middel end-->
                                <!--menu-->
                            <?php include($level. "header/menu.php")?>
                        </div>
                        <!--header end -->

                        
<?php
if($page=="index")
{?>                             <!--pos home section-->
                            <div class=" pos_home_section">
                                <div class="row pos_home">
                                    <div class="col-lg-3 col-md-8 col-12">
                                    <!--sidebar banner-->
                                    <?php include("content/index_sidebarbanner.php")?>
                                    <!--sidebar banner end-->

                                    <!--categories menu start-->
                                    <!-- <?php include("content/index_categoriesmenu.php")?> -->
                                    <!--categorie menu end-->

                                    <!--wishlist block start-->
                                    <!-- <?php include("content/wishlistblock.php")?> -->
                                    <!--wishlist block end-->

                                    <!--popular tags area-->
                                    <?php include("content/populartags.php")?>
                                    <!--popular tags end-->
 

                                </div>
                                <div class="col-lg-9 col-md-12">
                                    <!--banner slider start-->
                                    <?php include("content/index_bannerslider.php")?>
                                    <!--banner slider start-->

                                    <!--new product area start-->
                                    <?php include("content/index_newproduct.php")?> 
                                    <!--new product area start-->  

                                    <!--featured product start--> 
                                    <?php include("content/index_featuredproduct.php")?>     
                                    <!--featured product end--> 

                                    <!--banner area start-->
                                    <?php include("content/index_area.php")?>     
                                    <!--banner area end--> 

                                    <!--brand logo strat--> 
                                    <?php include("content/index_logostrat.php")?>       
                                    <!--brand logo end-->        
                                </div>
                            </div>  
                        </div>
                                            
                                
<?php
}?>
                        


<?php
if($page=="product")
{?>
                        <!--breadcrumbs area start-->
                        <?php include($level."content/breadcrumbs.php")?>
                        <!--breadcrumbs area end-->

                        <!--product wrapper start-->
                        <?php include($level."content/pro_wrapper.php")?>
                        <!--product details end-->


                        <!--product info start-->
                        <?php include($level."content/pro_info.php")?>  
                        <!--product info end-->


                        <!--new product area start-->
                        <?php include($level."content/pro_area1.php")?> 
                        <!--new product area start-->  


                        <!--new product area start-->
                        <?php include($level."content/pro_area2.php")?>
                        <!--new product area start--> 
<?php
}?>

<?php
if($page=="myacc")
{?>
                        <!--breadcrumbs area start-->
                        <?php include($level."content/breadcrumbs.php")?>
                        <!--breadcrumbs area end-->

                        <!-- Start Maincontent  -->
                        <?php include($level."content/myacc_maincontent.php")?>		
                        <!-- End Maincontent  --> 
<?php
}?>

<?php
if($page=="login")
{?>
                        <!--breadcrumbs area start-->
                        <?php include($level."content/breadcrumbs.php")?>
                        <!--breadcrumbs area end-->

                       <!-- customer login start -->
                        <?php include($level."content/login_customer.php")?>
                        <!-- customer login end -->
<?php
}?>

<?php
if($page=="checkout")
{?>
                        <!--breadcrumbs area start-->
                        <?php include($level."content/breadcrumbs.php")?>
                        <!--breadcrumbs area end-->


                        <!--Checkout page section-->
                        <?php include($level."content/check_checkout.php")?>
                        <!--Checkout page section end-->
<?php
}?>

<?php
if($page=="shop1")
{?>
                        <!--breadcrumbs area start-->
                        <?php include($level."content/breadcrumbs.php")?>
                        <!--breadcrumbs area end-->

                        <!--pos home section-->
                        <!--pos home section-->
                        <?php include($level."content/shop-content1.php")?>
<?php
}?>

<?php
if($page=="shop2")
{?>
                        <!--breadcrumbs area start-->
                        <?php include($level."content/breadcrumbs.php")?>
                        <!--breadcrumbs area end-->

                        <!--pos home section-->
                        <!--pos home section-->
                        <?php include($level."content/shop-content2.php")?>
<?php
}?>

<?php
if($page=="cart")
{?>
                        <!--breadcrumbs area start-->
                        <?php include($level."content/cart_header.php")?>
                        <!--breadcrumbs area end-->



                         <!--shopping cart area start -->
                        <div class="shopping_cart_area"> 
                                <?php include($level."content/cart-content1.php")?>
                                    <!--coupon code area start-->
                                    <?php include($level."content/cart-content2.php")?>
                                    <!--coupon code area end-->
                            </form> 
                         </div>
                         <!--shopping cart area end -->
<?php
}?>

<?php
if($page=="wish")
{?>
                        <!--breadcrumbs area start-->
                        <?php include($level."content/wish_header.php")?>
                        <!--breadcrumbs area end-->



                         <!--shopping cart area start -->
                         <?php include($level."content/wish_area.php")?>
                         <!--shopping cart area end -->
<?php
}?>

<?php
if($page=="details")
{?>
                        <!--breadcrumbs area start-->
                        <?php include($level."content/details_header.php")?>
                        <!--breadcrumbs area end-->



                         <!--shopping cart area start -->
                        <div class="shopping_cart_area"> 
                                <?php include($level."content/detail_content1.php")?>
                                    <!--coupon code area start-->
                                    <!-- <?php include($level."content/cart-content2.php")?> -->
                                    <!--coupon code area end-->
                            </form> 
                         </div>
                         <!--shopping cart area end -->
<?php
}?>

                        <!--pos home section end-->
                            </div>
                        <!--pos page inner end-->
                    </div>
                </div>
                <!--pos page end--> 
            
            <!--footer area start-->
            <?php include("footer/footer.php")?>
            <!--footer area end-->
            
            <!-- modal area start --> 
           <?php include("footer/modalarea.php")?> 

            
          <!-- modal area end --> 
            
            
      
		
		<!-- all js here -->
        <?php include("lib/js.php")?>
    </body>
</html>                     
      