<?php
include 'config-t/config.php';
$search = $MySQL->get_results("SELECT product_type_id,product_name,product_price_cost,product_price_sale FROM products WHERE product_status = 1");

?>
<?php
include 'inc/head.php';
include 'inc/header.php';
?>

<section id="ss-search">
    <div class="container">
        <div class="breadcrumb">
            <span><a href="">HOME</a>/</span>
            <span>Search</span>
        </div>
        <h3>Search</h3>
        <div class="form-search">
            <form class="form-search-out" action="">
                <div class="form-group">
                    <input type="text" placeholder="Enter keywords...">
                    <div class="form-search-button">

                    </div>
                </div>
            </form>
        </div>
        <div class="search-product-list">
            <?php
            if ($search) {
                foreach ($search as $key_search => $value_search) {
                    $search_img = $MySQL->findOne("product_images", array("product_id" => $value_search['product_type_id'],"product_image_avatar"=>'1'));
                    ?>
                    <a href="#" class="search-product-item">
                        <div class="search-product-item-image-out">
                            <div class="search-product-item-image">
                                <img src="img/<?php echo $search_img->product_image_url?>" alt="">
                            </div>
                        </div>  
                        <div class="search-product-info">
                            <p><?php echo $value_search['product_name'] ?></p>
                            <div class="search-product-price-out">
                                <span class="search-product-price"><?php echo $value_search['product_price_sale']  ?></span>
                                <span class="search-product-price-old"><?php echo $value_search['product_price_cost'] ?></span>
                            </div>
                        </div>
                        <div class="search-product-sale">
                        </div>
                    </a>
                    <?php
                }
            }
            ?>
        </div>
        <button class="search-load-more">
            load more
        </button>
    </div>
</section>
<?php
include 'inc/footer.php';
?>
