<?php
$checkcart=false;
$total=0;
if (isset($_SESSION['cart']))
{
    foreach ($_SESSION['cart'] as $k)
    {
        if (isset($k))
        {
            $checkcart=true;
        }
    }
}

if ($checkcart== true && isset($_COOKIE['username']))
{
?>

<form action="../pages/cart.php" method="POST">
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
                                                        <th class="product_remove">Delete</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                foreach ($_SESSION['cart'] as $cartitem)
                                                {
                                                    
// exit;                                            
                                                    //Xuat cac thong tin cua mon hang
                                                ?>
                                                    <tr>
                                                    <td class="product_thumb"><a href="#"><img src="<?php echo $level.'upload_img/'.$cartitem['thumbnail']; ?>" style=height:14.3vh;width:12vh alt=""></a></td>
                                                        <td class="product_name"><a href="#"><?php echo $cartitem['name']; ?></a></td>
                                                        <td class="product-price"><?php echo number_format($cartitem['price'], 3)." VND"; ?></td>
                                                        <td class="product_quantity">
                                                        <input type='number' name="<?php echo $cartitem['ID']; ?>" min="0" size='5' value="<?php echo ($cartitem['soluong'] > $cartitem['variants'] ? $cartitem['variants'] : $cartitem['soluong']); ?>" max="<?php echo $cartitem['variants']; ?>">
                                                    </td>


                                                        <td class="product_total"><?php echo number_format($cartitem['soluong' ]
                                                        *$cartitem['price'],3)." VND"; ?></td>
                                                       <td class="product_remove">
                                                        <a href="../component/delcart.php?productid=<?php echo $cartitem['ID'];?>">
                                                        <i class="fa fa-trash-o"></i></a></td>


                                                    </tr>
                                                <?php
                                                $total+=$cartitem['soluong']*$cartitem['price'];
                                            }?>
                                                </tbody>
                                            </table>   
                                                </div>  
                                                <div class="cart_submit">
                                                    <button type="submitcar" name='submitcar'>update cart</button>
                                                    <button type="submitcar" formaction="delcart.php?productid=0">delete cart</button>
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                    <?php
                                }?>