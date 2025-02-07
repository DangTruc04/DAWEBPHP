<div class="shop_tab_product">   
    <?php
    // $thongtinarr=array(
    //         array("picture"=>$level."assets\img\product\product1.jpg","price"=>"$50.00","proname"=>"Curabitur sodales","class"=>"hot_img", "anh_new"=>$level."assets\img\cart\span-hot.png",),
    //         array("picture"=>$level."assets\img\product\product2.jpg","price"=>"$40.00","proname"=>"Quisque ornare dui","class"=>"img_icone", "anh_new"=>$level."assets\img\cart\span-new.png"),
    //         array("picture"=>$level."assets\img\product\product3.jpg","price"=>"$60.00","proname"=>"Sed non turpiss","class"=>"hot_img", "anh_new"=>$level."assets\img\cart\span-hot.png",),
    //         array("picture"=>$level."assets\img\product\product4.jpg","price"=>"$65.00","proname"=>"Duis convallis","class"=>"img_icone", "anh_new"=>$level."assets\img\cart\span-new.png"),
    //         array("picture"=>$level."assets\img\product\product5.jpg","price"=>"$50.00","proname"=>"Curabitur sodales","class"=>"hot_img", "anh_new"=>$level."assets\img\cart\span-hot.png",),
    //         array("picture"=>$level."assets\img\product\product6.jpg","price"=>"$40.00","proname"=>"Quisque ornare dui","class"=>"img_icone", "anh_new"=>$level."assets\img\cart\span-new.png"),
    //         array("picture"=>$level."assets\img\product\product7.jpg","price"=>"$60.00","proname"=>"Sed non turpiss","class"=>"hot_img", "anh_new"=>$level."assets\img\cart\span-hot.png",),
    //         array("picture"=>$level."assets\img\product\product8.jpg","price"=>"$65.00","proname"=>"Duis convallis","class"=>"img_icone", "anh_new"=>$level."assets\img\cart\span-new.png"),
    //         array("picture"=>$level."assets\img\product\product9.jpg","price"=>"$50.00","proname"=>"Curabitur sodales","class"=>"hot_img", "anh_new"=>$level."assets\img\cart\span-hot.png",),

    // );
    ?>
 
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="large" role="tabpanel">
                                                    <div class="row">
                                                    <?php
                                                    
                                                    foreach($dssp as $sp)
                                                    {
                                                        if($sp['deleted']==1)
                                                        echo '
                                                        <div class="col-lg-4 col-md-6">
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
                                                                        <li><a href="'.$level.'pages/single-product.php?id='.$sp['ID'].'" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>';
                                                        ?>
                                                        <?php
                                                    }?>
                                                    </div>  
                                                </div>
    <?php
    // $thongtinarr=array(
    //     array("picture"=>$level."assets\img\product\product2.jpg","proname"=>"Lorem ipsum dolor","class"=>"img_icone", "anh_new"=>$level."assets\img\cart\span-new.png"),
    //     array("picture"=>$level."assets\img\product\product3.jpg","proname"=>"Quisque ornare dui","class"=>"hot_img", "anh_new"=>$level."assets\img\cart\span-hot.png",),
    //     array("picture"=>$level."assets\img\product\product4.jpg","proname"=>"Maecenas sit amet","class"=>"img_icone", "anh_new"=>$level."assets\img\cart\span-new.png"),
    //     array("picture"=>$level."assets\img\product\product5.jpg","proname"=>"ed non luctus turpis","class"=>"hot_img", "anh_new"=>$level."assets\img\cart\span-hot.png",),
    //     array("picture"=>$level."assets\img\product\product6.jpg","proname"=>"Donec dignissim eget","class"=>"hot_img", "anh_new"=>$level."assets\img\cart\span-hot.png",),
    //     array("picture"=>$level."assets\img\product\product7.jpg","proname"=>"Lorem ipsum dolor","class"=>"img_icone", "anh_new"=>$level."assets\img\cart\span-new.png"),
    //     array("picture"=>$level."assets\img\product\product8.jpg","proname"=>"Donec ac congue","class"=>"img_icone", "anh_new"=>$level."assets\img\cart\span-new.png"),
    //     array("picture"=>$level."assets\img\product\product9.jpg","proname"=>"Curabitur sodales","class"=>"hot_img", "anh_new"=>$level."assets\img\cart\span-hot.png",),
    //     array("picture"=>$level."assets\img\product\product1.jpg","proname"=>"Lorem ipsum dolor","class"=>"img_icone", "anh_new"=>$level."assets\img\cart\span-new.png"),

    // );
    ?>
                                                <div class="tab-pane fade" id="list" role="tabpanel">
                                                <?php
                                                    foreach($dssp as $sp)
                                                    {
                                                        if($sp['deleted']==1)
                                                        echo '
                                                <div class="product_list_item mb-35">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                                <div class="product_thumb">
                                                                   <a href="'.$level.'pages/single-product.php?id='.$sp['ID'].'">
                                                                   <img src="'.$level.'upload_img/'.$sp['thumbnail'].'" alt="" style="height:350px"></a> 
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8 col-md-6 col-sm-6">
                                                                <div class="list_product_content">
                                                                   <div class="product_ratting">
                                                                       <ul>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                       </ul>
                                                                   </div>
                                                                    <div class="list_title">
                                                                        <h3><a href="'.$level.'pages/single-product.php?id='.$sp['ID'].'">'.$sp['name'].'</a></h3>
                                                                    </div>
                                                                    <p class="design"> in quibusdam accusantium qui nostrum consequuntur, officia, quidem ut placeat. Officiis, incidunt eos recusandae! Facilis aliquam vitae blanditiis quae perferendis minus eligendi</p>

                                                                    <div class="content_price">
                                                                        <span>$'.$sp['price'].'.00</span>
                                                                    </div>
                                                                    <div class="add_links">
                                                                        <ul>
                                                                            <li><a href="'.$level.'pages/single-product.php?id='.$sp['ID'].'" title="add to cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                                            <li><a href="'.$level.'pages/single-product.php?id='.$sp['ID'].'" title="add to wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>';
                                                        ?>
                                                        <?php
                                            }?>
                                                                            
                                                </div>

                                            </div>
                                        </div> 