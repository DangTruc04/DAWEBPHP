<?php
// $thongtinarr=array(
//         array("picture"=>$level."assets\img\product\product7.jpg","price"=>"$60.00","proname"=>"Maecenas sit amet","class"=>"img_icone", "anh_new"=>$level."assets\img\cart\span-new.png"),
//         array("picture"=>$level."assets\img\product\product8.jpg","price"=>"$50.00","proname"=>"Sed non turpis","class"=>"hot_img", "anh_new"=>$level."assets\img\cart\span-hot.png"),
//         array("picture"=>$level."assets\img\product\product9.jpg","price"=>"$70.00","proname"=>"Donec ac congue","class"=>"img_icone", "anh_new"=>$level."assets\img\cart\span-new.png"),
//         array("picture"=>$level."assets\img\product\product3.jpg","price"=>"$60.00","proname"=>"Curabitur sodales","class"=>"hot_img", "anh_new"=>$level."assets\img\cart\span-hot.png"),
//         array("picture"=>$level."assets\img\product\product2.jpg","price"=>"$50.00","proname"=>"Phasellus a arcu","class"=>"hot_img", "anh_new"=>$level."assets\img\cart\span-hot.png")
// );
?>
<div class="featured_product">
                                        <div class="block_title">
                                            <h3>Featured Products</h3>
                                        </div>
                                        <div class="row">
                                            <div class="product_active owl-carousel">
                                            <?php
                                            foreach($dssp1 as $sp)
                                            {
                                                if($sp['deleted']==1)
                                                echo'    
                                                <div class="col-lg-3">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                       <a href="'.$level.'pages/single-product.php?id='.$sp['ID'].'">
                                                       <img src="'.$level.'upload_img/'.$sp['thumbnail'].'" alt="" style="height:350px"></a> 
                                                       
                                                       
                                                    </div>
                                                    <div class="product_content">
                                                        <span class="product_price">$'.$sp['price'].'.00</span>
                                                        <h3 class="product_title"><a href="'.$level.'pages/single-product.php?id='.$sp['ID'].'">'.$sp['name'].'</a></h3>
                                                    </div>
                                                    <div class="product_info">
                                                        <ul>
                                                            <li><a href="'.$level.'pages/single-product.php?id='.$sp['ID'].'" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                                            <li><a href="'.$level.'pages/single-product.php?id='.$sp['ID'].'" title="Quick view">View Detail</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>';
                                                ?>
                                                <?php
                                            }?>
                                            </div> 
                                        </div> 
                                    </div>