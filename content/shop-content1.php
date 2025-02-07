
<?php   
include "../DB/DB2.php";
if ($db !== null) {
  // Sử dụng $db để thực hiện các truy vấn
  if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'search' && !empty($_POST)) {
    $_SESSION['type_filter'] = $_POST;
}

if (!empty($_SESSION['type_filter'])) {
    $where = "";
    foreach ($_SESSION['type_filter'] as $field => $value) {
        if (!empty($value)) {
            switch ($field) {
                case 'name':
                case 'category_id':
                    $where .= (!empty($where)) ? " AND " . "`" . $field . "` LIKE :value" : "`" . $field . "` LIKE :value";
                    break;
            }
        }
    }

    if (!empty($where)) {
        $sql = "SELECT * FROM `product` WHERE (" . $where . ")";
        $result = $db->prepare($sql);

        foreach ($_SESSION['type_filter'] as $field => $value) {
            if (!empty($value)) {
                $result->bindValue(':value', '%' . $value . '%', PDO::PARAM_STR);
            }
        }

        $result->execute();

        if ($result) {
            $dssp = $result->fetchAll();
        } else {
            // Xử lý trường hợp truy vấn không thành công
            echo "Lỗi khi thực hiện truy vấn.";
        }
    } else {
        $sql = "SELECT * FROM `product`";
        $result = $db->prepare($sql);
        $result->execute();

        if ($result) {
            $dssp = $result->fetchAll();
        } else {
            // Xử lý trường hợp truy vấn không thành công
            echo "Lỗi khi thực hiện truy vấn.";
        }
    }
}
} else {
  die("Lỗi: Biến \$db không được khởi tạo.");
}


?>
<div class=" pos_home_section">
                            <div class="row pos_home">
                                        
                                    <div class="col-lg-3 col-md-12">
                                        <form action="shop2.php?action=search" method="post">
                                        <div class="search_bar">
                                            <input placeholder="Search..." type="text" name="name">
                                            <!-- <button type="submit"><i class="fa fa-search"></i></button> -->
                                            
                                        </div>
                                       <!--layere categorie"-->
                                          <?php include($level."content/shop_layere.php")?>
                                        <!--layere categorie end-->

                                        <!--color area start-->  
                                        <!-- <?php include($level."content/shop_color.php")?>-->
                                        <!--color area end--> 

                                        <!--price slider start-->                                     
                                        <!-- <?php include($level."content/shop_price.php")?> --> 
                                        <!--price slider end-->

                                        <!--wishlist block start-->
                                        <!-- <?php include($level."content/wishlistblock.php")?> -->
                                        <!--wishlist block end-->

                                        <!--popular tags area-->
                                        <!-- <?php include($level."content/populartags.php")?> -->
                                        <!--popular tags end-->

                                        <!--newsletter block start-->
                                        <!--newsletter block end-->

                                        <!--special product start-->
                                        <!--special product end-->
                                        <button type="submit">Submit</button>
                                        </form>

                                    </div>
                                    <div class="col-lg-9 col-md-12">
                                        <!--banner slider start-->
                                        <?php include($level."content/shop_slider.php")?>
                                        <!--banner slider start-->

                                        <!--shop toolbar start-->
                                        <?php include($level."content/shop_toolbar.php")?>
                                        <!--shop toolbar end-->

                                        <!--shop tab product-->
                                        <?php include($level."content/shop_tabpro1.php")?>
                                        <!--shop tab product end-->

                                        <!--pagination style start--> 
                                        <?php include($level."content/shop_pagination.php")?>
                                        <!--pagination style end--> 
                                    </div>
                                </div>  
                        </div>