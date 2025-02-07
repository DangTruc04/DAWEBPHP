<div class="product_details">
                            <div class="row">
                                    <div class="col-lg-5 col-md-6">
                                        <div class="product_tab fix"> 
                                            <div class="product_tab_button">    
                                                <ul class="nav" role="tablist">
                                                    <li>
                                                        <a class="active" data-toggle="tab" href="#p_tab1" role="tab" aria-controls="p_tab1" aria-selected="false"><img src="<?php echo($level.'upload_img/'.$sp_detail_row[0]['thumbnail'])?>" alt="" style=height:14vh;width:12vh></a>
                                                    </li>
                                                    <li>
                                                         <a data-toggle="tab" href="#p_tab2" role="tab" aria-controls="p_tab2" aria-selected="false"><img src="<?php echo($level.'upload_img/'.$sp_detail_row[0]['thumbnail'])?>" alt="" style=height:14vh;width:12vh></a>
                                                    </li>
                                                    <li>
                                                       <a data-toggle="tab" href="#p_tab3" role="tab" aria-controls="p_tab3" aria-selected="false"><img src="<?php echo($level.'upload_img/'.$sp_detail_row[0]['thumbnail'])?>" alt="" style=height:14.3vh;width:12vh></a>
                                                    </li>
                                                </ul>
                                            </div> 
                                            <div class="tab-content produc_tab_c">
                                                <div class="tab-pane fade show active" id="p_tab1" role="tabpanel">
                                                    <div class="modal_img">
                                                        <a href="#"><img src="<?php echo($level.'upload_img/'.$sp_detail_row[0]['thumbnail'])?> " alt=""></a>
                                                        <div class="img_icone">
                                                           <img src="<?php echo($level.'upload_img/'.$sp_detail_row[0]['thumbnail'])?>" alt="">
                                                       </div>
                                                        <div class="view_img">
                                                            <a class="large_view" href="<?php echo($level.'upload_img/'.$sp_detail_row[0]['thumbnail'])?>"><i class="fa fa-search-plus"></i></a>
                                                        </div>    
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="p_tab2" role="tabpanel">
                                                    <div class="modal_img">
                                                        <a href="#"><img src="<?php echo($level.'upload_img/'.$sp_detail_row[0]['thumbnail'])?>" alt=""></a>
                                                        <div class="img_icone">
                                                           <img src="<?php echo($level.'upload_img/'.$sp_detail_row[0]['thumbnail'])?>" alt="">
                                                       </div>
                                                        <div class="view_img">
                                                            <a class="large_view" href="<?php echo($level.'upload_img/'.$sp_detail_row[0]['thumbnail'])?>"><i class="fa fa-search-plus"></i></a>
                                                        </div>     
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="p_tab3" role="tabpanel">
                                                    <div class="modal_img">
                                                        <a href="#"><img src="<?php echo($level.'upload_img/'.$sp_detail_row[0]['thumbnail'])?>" alt=""></a>
                                                        <div class="img_icone">
                                                           <img src="<?php echo($level.'upload_img/'.$sp_detail_row[0]['thumbnail'])?>" alt="">
                                                       </div>
                                                        <div class="view_img">
                                                            <a class="large_view" href="<?php echo($level.'upload_img/'.$sp_detail_row[0]['thumbnail'])?>"> <i class="fa fa-search-plus"></i></a>
                                                        </div>     
                                                    </div>
                                                </div>
                                            </div>

                                        </div> 
                                    </div>
                                    <div class="col-lg-7 col-md-6">
                                        <div class="product_d_right">
                                            <h1><?php echo($sp_detail_row[0]['name'])?></h1>
                                             <div class="product_ratting mb-10">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <!-- <li><a href="#reviews"> Write a review </a></li> -->
                                                </ul>
                                            </div>
                                            <div class="product_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati modi culpa voluptates illo, quos magni totam inventore delectus perspiciatis necessitatibus, iure rerum! Deleniti nobis voluptatibus minus, iusto ullam quae esse..</p>
                                            </div>

                                            <div class="content_price mb-15">
                                                <span><?php echo('$'.$sp_detail_row[0]['price'].'.00')?></span>
                                                <!-- <span class="old-price">$130.00</span> -->
                                            </div>
                                            <div class="box_quantity mb-20">
                                                <form action="<?php echo $level.'component/addcart.php'; ?>" method="post">
                                                    <label>Quantity</label>
                                                    <input type="number" name="sl" min="0" max="<?php echo $sp_detail_row[0]['variants']?>" value="1">
                                                    
                                                    <?php if (isset($_COOKIE['username'])) : ?>
                                                        <button type="submit" name="addtocart" value="<?php echo $sp_detail_row[0]['ID']; ?>">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </button>
                                               
                                                    <?php else : ?>
                                                        <button>
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                    <?php endif; ?>
                                                 </form>
                                                <!-- <a href="#" title="add to wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a> -->
                                            </div>

                                            <!-- <div class="product_d_size mb-20">
                                                <label for="group_1">size</label>
                                                <select name="size" id="group_1">
                                                    <option value="1">S</option>
                                                    <option value="2">M</option>
                                                    <option value="3">L</option>
                                                </select>
                                            </div> -->

                                            <!-- <div class="sidebar_widget color">
                                                <h2>Choose Color</h2>
                                                 <div class="widget_color">
                                                    <ul>
                                                        <li><a href="#"></a></li>
                                                        <li><a href="#"></a></li>
                                                        <li> <a href="#"></a></li>
                                                        <li><a href="#"></a></li>
                                                    </ul>
                                                </div>
                                            </div>                  -->

                                            <!-- <div class="product_stock mb-20">
                                               <p>299 items</p>
                                                <span> In stock </span>
                                            </div> -->
                                            <div class="wishlist-share">
                                                <h4>Share on:</h4>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>        
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>        
                                                </ul>      
                                            </div>

                                        </div>
                                    </div>
                                </div>
                        </div>