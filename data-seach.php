<?php
include 'config-t/config.php';
$page = isset($_GET['page']) ? $_GET['page'] : 1;
if ($page < 1) {
    $page = 1;
}
$limit = 4;
$start = ($limit * $page) - $limit;
$sql = "SELECT product_type_id,product_name,product_price_cost,product_price_sale FROM products WHERE product_status = 1 limit $start,$limit";
$search = $MySQL->get_results($sql);
$total = count($search);
for ($i = 0; $i < $total; $i++):
    $search_img = $MySQL->findOne("product_images", array("product_id" => $search[$i]['product_type_id'], "product_image_avatar" => '1'));
    ?>
    <a href="#" class="search-product-item"><div class="search-product-item-image-out"><div class="search-product-item-image"><img src="img/<?= $search_img->product_image_url ?>"alt=""></div>
        </div>  
        <div class="search-product-info">
            <p><?=$search[$i]["product_name"]?></p>
            <div class="search-product-price-out">
                <span class="search-product-price"><?=$search[$i]["product_price_sale"]?></span>
                <span class="search-product-price-old"><?=$search[$i]["product_price_cost"]?></span>
            </div>
        </div>
        <div class="search-product-sale">
        </div>
    </a>
<?php endfor; ?>