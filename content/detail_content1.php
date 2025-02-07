<form action="" method="POST">
        <div class="row">
                                        <div class="col-12">
                                            <div class="table_desc">
                                                <div class="cart_page table-responsive">
                                                    <table>
                                                <thead>
                                                    <tr>
                                                        <th class="product_thumb">Image</th>
                                                        <th class="product_name">Product</th>
                                                        <th class="product-price">Price</th>
                                                        <th class="product_quantity">Quantity</th>
                                                        <th class="product_total">Total</th>
                                                        <th class="product_remove">product details</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                foreach ($order_details as $order) {
                                                    echo '
                                                    <tr>
                                                        <td class="product_thumb"><a href="#"><img src="' . $level . 'upload_img/' . $order['thumbnail'] . '" style="height:14.3vh;width:12vh" alt=""></a></td>
                                                        <td class="product_name"><a href="#">' . $order['name'] . '</a></td>
                                                        <td class="product-price">' . number_format($order['price'],3) . 'VND</td>
                                                        <td class="product_total">' . $order['quantity'] . '</td>
                                                        <td class="product_total">' . number_format($order['quantity'] * $order['price'], 3) . ' VND</td>
                                                        <td class="product_total">
                                                            <a href="../pages/single-product.php?id=' . $order['ID'] . '">Chi tiết</a>
                                                        </td>
                                                    </tr>';
                                                }
                                                ?>



                                                </tbody>
                                            </table>   
                                                </div>  
                                                
                                            </div>
                                         </div>
                                    </div>
                                    <?php
                            