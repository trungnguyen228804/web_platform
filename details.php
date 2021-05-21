<?php 
	include 'inc/head.php';
	include 'inc/header.php';
?>

<?php

    if(!isset($_GET['pro_id']) || $_GET['pro_id']==NULL){
           echo "<script>window.location ='404.php'</script>";
        }else{
            $id = $_GET['pro_id']; 
        }

    $style = "Unisex T-Shirt";

?>
<section id="ss-detail">
        <div class="sticky-bar-wrapper">
            <div class="flex-center container">
                <div class="sticky-bar-left">
                    <div class="sticky-bar-left-image">
                        <img src="img/thumb1-1.png" alt="">
                    </div>
                    <div class="sticky-bar-left-content">
                        <h2>LIMITED - SOCIAL WORKER QUEEN BB-143</h2>
                        <div class="sticky-bar-left-price">
                            <span class="price">$26.9</span>
                            <span class="price-old">$42.9</span>
                        </div>
                    </div>
                </div>
                <div class="sticky-bar-right">
                    <div class="sticky-bar-var">
                        <div class="sticky-bar-var-item">
                            <div class="sticky-bar-var-item-name">Style</div>
                            <label>
                                <input type="checkbox" name="checkbox_var_style">
                                <div class="sticky-bar-var-item-show">Crewneck Sweatshirt</div>
                                <div class="sb-var-menu">
                                    <div><span >Sweatshirt</span></div>
                                    <div><span >V-Neck T-Shirt</span></div>
                                    <div><span >Ladies T-Shirt</span></div>
                                    <div><span >Premium Ladies T-Shirt</span></div>
                                    <div><span >Unisex Hoodie</span></div>
                                </div>
                                <div class="sb-var-marsk"></div>
                            </label>
                        </div>
                        <div class="sticky-bar-var-item">
                            <div class="sticky-bar-var-item-name">Style</div>
                            <label>
                                <input type="checkbox" name="checkbox_var_style">
                                <div class="sticky-bar-var-item-show">Crewneck Sweatshirt</div>
                                <div class="sb-var-menu">
                                    <div><span >white</span></div>
                                    <div><span >black</span></div>
                                    <div><span >red</span></div>
                                    <div><span >yellow</span></div>
                                </div>
                                <div class="sb-var-marsk"></div>
                            </label>
                        </div>
                        <div class="sticky-bar-var-item">
                            <div class="sticky-bar-var-item-name">Style</div>
                            <label>
                                <input type="checkbox" name="checkbox_var_style">
                                <div class="varSizeText sticky-bar-var-item-show">M</div>
                                <div class="sb-var-menu">
                                    <div><span class="varSize">M</span></div>
                                    <div><span class="varSize">S</span></div>
                                    <div><span class="varSize">L</span></div>
                                    <div><span class="varSize">XL</span></div>
                                    <div><span class="varSize">2XL</span></div>
                                    <div><span class="varSize">3XL</span></div>
                                    <div><span class="varSize">4XL</span></div>
                                    <div><span class="varSize">5XL</span></div>
                                </div>
                                <div class="sb-var-marsk"></div>
                            </label>
                        </div>
                    </div>
                    <div class="sticky-bar-quanlity-out">
                        <div class="sticky-bar-var-item-name">Style</div>
                        <div class="sticky-bar-quanlity">
                            <button class="des btnCartDown">
                                <svg id="ic_remove_24px" viewBox="0 0 24 24"><path d="M19 13H5v-2h14v2z"></path></svg>
                            </button>
                            <input type="text" pattern="[0-9]" value="1" class="textCartQuanlity">
                            <button class="inc btnCartUp">
                                <svg viewBox="0 0 24 24"><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path></svg>
                            </button>
                        </div>
                    </div>
                    <div class="sticky-quanlity-phone">
                        <button class="btnCartUp des"><span></span></button>
                        <input type="text" pattern="[0-9]" class="textCartQuanlity" value="1" name="text_quanlity">
                        <button class="btnCartDown inc"><span></span></button>
                    </div>
                    <div class="sticky-bar-add-cart"><button class="btn-sb-add-cart">ADD TO CAR</button></div>
                </div>
            </div>
            
        </div>
        <!-- --- -->
        <?php

        $get_product_details = $product->get_details($id);
        $product_by_id = $get_product_details['product_by_id'];
        $product_images_by_id = $get_product_details['product_images_by_id'];
        $product_images_by_id2 = $get_product_details['product_images_by_id'];


        if($product_by_id){
            while($result_details = $product_by_id->fetch_assoc()){
            // echo "<pre>";
            // print_r($result_details);
            // echo "</pre>";
        ?>
        <div class="detail-top container  flex-between">
            <div id="s1" class="product-image-wrapper product-owl">
                <div class="product-image-out">
                    <div class="product-image-list">
                        <?php
                        if($product_images_by_id){

                            while($result_images_avatar = $product_images_by_id->fetch_assoc()){
                        ?>
                        <div class="product-image-item"><img src="admin/uploads/<?php echo $result_images_avatar['product_image_url'] ?>" alt="<?php echo $result_details['product_name'] ?>"></div>
                        
                        <?php

                            }
                        }

                        ?>


                    </div>
                    <div class="detail-prev prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" viewBox="0 0 24 24">
                            <path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z" /></svg>
                    </div>
                    <div class="detail-next next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" viewBox="0 0 24 24">
                            <path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z" /></svg>
                    </div>
                </div>
                <div class="product-image-dot-out">
                    <div class="product-image-dot-list">
                         <?php
                        if($product_images_by_id){
                            $k=1;
                            while($result_images_avatar = $product_images_by_id->fetch_assoc()){
                        ?>
                        <button class="product-image-dot-item <?php if($k==1){echo "i-active";} ?> "></button>
                        
                        <?php
                        $k=2;

                            }
                        }

                        ?>
                      
                    </div>  
                </div>
                <div class="product-thumb-out">
                    <div class="product-thumb-list">

                        <?php
                        if($product_images_by_id){
                            
                            // echo "<pre>";
                            // print_r($product_images_by_id);
                            // echo "</pre>";
                            $i=1;
                            foreach ($product_images_by_id as $item) {

                                ?>
                                <div class="product-thumb-item <?php if($i==1){echo "i-active";} ?>"><img src="admin/uploads/<?php echo $item['product_image_url'] ?>" alt="<?php echo $result_details['product_name'] ?>"></div>
                                <?php
                                $i=2;
                            };
                        }
                        ?>

                    </div>
                    <div class="prev thumb-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" viewBox="0 0 24 24">
                            <path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z" /></svg>
                    </div>
                    <div class="next thumb-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" viewBox="0 0 24 24">
                            <path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z" /></svg>
                    </div>
                </div>
            </div>
            <div class="detail-content">
                <div class="detail-header">
                    <h1><?php echo $result_details['product_name']; ?></h1>
                    <div class="review-star-list">
                        <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                            </svg></span>
                        <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                            </svg></span>
                        <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                            </svg></span>
                        <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                            </svg></span>
                        <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                            </svg></span>
                        <a href="#">(1)</a>
                    </div>
                    <div class="detail-price-box">
                        <span class="price-new">$<?php echo $result_details['product_price_sale']; ?></span>
                        <span class="price-old">$<?php echo $result_details['product_price_cost']; ?></span>
                        <span class="price-save">Save $<?php echo ($result_details['product_price_cost']-$result_details['product_price_sale']); ?></span>
                    </div>
                    <div class="detail-time">
                        <span class="icon-time">
                            <svg viewBox="0 0 16 16" class="copt-countdown-timer__icon"><path d="M10.3206522,0 L5.66413043,0 L5.66413043,1.52238806 L10.3206522,1.52238806 L10.3206522,0 Z M7.21630435,9.89552239 L8.76847826,9.89552239 L8.76847826,5.32835821 L7.21630435,5.32835821 L7.21630435,9.89552239 Z M13.425,4.87164179 L14.5891304,3.80597015 C14.201087,3.42537313 13.8130435,3.04477612 13.425,2.74029851 L12.3384783,3.80597015 C11.1743478,2.89253731 9.62217391,2.28358209 7.9923913,2.28358209 C4.11195652,2.28358209 1.0076087,5.32835821 1.0076087,9.13432836 C1.0076087,12.9402985 4.11195652,15.9850746 7.9923913,15.9850746 C11.8728261,15.9850746 14.9771739,12.9402985 14.9771739,9.13432836 C14.9771739,7.5358209 14.433913,6.01343284 13.425,4.87164179 Z M7.9923913,14.4626866 C4.96565217,14.4626866 2.55978261,12.1029851 2.55978261,9.13432836 C2.55978261,6.16567164 4.96565217,3.80597015 7.9923913,3.80597015 C11.0191304,3.80597015 13.425,6.16567164 13.425,9.13432836 C13.425,12.1029851 11.0191304,14.4626866 7.9923913,14.4626866 Z"></path></svg>
                        </span>
                        <div class="detail-time-digit">08:56:80</div>
                        <div class="detail-time-text">left to buy</div>
                    </div>
                </div>
                 <?php
                        if($product_images_by_id){
                    ?>
                <div class="detail-var">
                    
                    <div class="detail-var-box">
                        <div class="detail-var-box-header">
                            <span>Style: </span>
                            <?php
                                foreach ($product_images_by_id as $item) {
                                    ?>
                                        <label for="" class="detail-var-style"><?php echo $item['style_name']; ?></label>

                                    <?php
                                    break;
                                }
                            ?>
                            
                        </div>
                        <div class="detail-var-box-image">
                                <?php
                                // echo "<pre>";
                                // print_r($product_images_by_id);
                                // echo "</pre>";
                                $i=1;
                                foreach ($product_images_by_id as $item) {

                                    if($item['color_name']=="Black"){
                                    ?>


                                    <img class="<?php if($i==1){echo "active";} ?>" data-style_id="<?php echo $item['style_id'] ; ?>" src="admin/uploads/<?php echo $item['product_image_url'] ?>" alt="<?php echo $result_details['product_name'] ?>">

                                    <?php
                                    $i=2;
                                }
                                    
                                };
                            ?>
                            
                        </div>
                    </div>
                   
                    <div class="detail-var-box">
                        <div class="detail-var-box-header">
                            <span>Color: </span>
                             <?php
                             
                            $list_color = $product->get_list_color_by_product_id($id, $style);

                                foreach ($list_color as $item) {

                                    ?>
                                         <label for="" class="detail-var-color"><?php echo $item['color_name']; ?></label> 

                                    <?php
                                    break;
                                }
                            ?>
                        </div>
                        <div class="detail-var-box-color">
                                <?php
                                
                                $k=1;
                                foreach ($list_color as $item) {

                                    ?>

                                    <button class="button-color <?php if($k==1){echo "active";} ?>" data-color_id="<?php echo $item['color_id'] ?>" style="<?php echo $item['color_code'] ?>;"></button>

                                    <?php
                                    $k=2;
                                    
                                };
                            ?>

                        </div>
                    </div>
                    <div class="detail-var-box">
                        <div class="detail-var-box-header">
                            <span>Size: </span>
                            <?php 

                            $list_size = $product->get_list_size($id, $style);
                            
                            if($list_size){
                                foreach ($list_size as $item) {
                                    ?>
                                    <label for="" class="detail-var-style"><?php echo $item['size_name'] ?></label>

                                    <?php
                                    break;
                                }
                            }

                            ?>

                            <span style="padding: 0 5px;">-</span>
                            
                            <label for="" class="btn-size-guide" style="color: #0077cc;">Size Guide</label>
                        </div>
                        <div class="detail-bar-box-size">
                            <?php 

                            $list_size = $product->get_list_size($id, $style);
                            
                            if($list_size){
                                $m=1;
                                foreach ($list_size as $item) {
                                    ?>

                                    <button class="varSize button-size <?php if($m==1){echo "i-active";} ?>" data-size_id="<?php echo $item['size_id'] ?>" ><?php echo $item['size_name'] ?></button>

                                    <?php
                                    $m=2;
                                }
                            }

                            ?>
                           
                        </div>
                    </div>
                </div>  
                 <?php

                        }
                    ?>
                <div class="copt-countdown">
                    <!---->
                    <div class="detail-countdown">
                        <div class="icon-time detail-time">
                            <svg viewBox="0 0 16 16" class="detail-countdown-icon">
                                <path d="M11.8438898,5.20424752 C11.3872395,4.75344916 11.1553007,4.68802152 11.0861636,4.71157355 C11.0168186,4.735973 11.0226227,4.95520038 11.0226227,4.95520038 C10.9355777,7.71528105 9.44300564,8.1246355 9.44300564,8.1246355 C10.4493953,3.58403403 7.48171141,1.51860239 7.18643959,1.34077095 C6.8915835,1.16293952 6.71794123,1.07381595 6.50386238,1.07381595 C6.2902472,1.07381595 6.24965073,1.60772597 6.24965073,1.60772597 C6.14508162,4.42111448 5.3861242,4.85088711 3.81917059,6.15710548 C2.28329992,7.43769325 2.28329992,9.46044981 2.28329992,9.46044981 C2.28329992,13.769912 5.85897161,14.8633307 6.09305291,14.8458545 C6.32731008,14.8277228 6.19714233,14.5253838 6.19714233,14.5253838 C5.30322041,11.6774587 6.28751306,10.3855986 6.28751306,10.3855986 C6.651922,12.9499399 8.48853278,14.6418009 8.48853278,14.6418009 C9.05239048,15.2648025 9.48612841,15.0153236 9.48612841,15.0153236 C9.77287798,14.8999618 12.7234535,14.0797659 13.4695237,10.9378002 C14.2166651,7.79503497 12.3013877,5.6559093 11.8438898,5.20424752 L11.8438898,5.20424752 Z"></path>
                            </svg>
                            <div class="detail-countdown-message">40 items<span> left in stock</span></div>
                        </div>
                        <div class="detail-countdown-progress">
                            <progress max="100" value="20"></progress>
                        </div>
                    </div>
                </div>
                <form class="detail-add-cart">
                    <div class="add-box">
                        <input type="text" pattern="[0-9]*" class="textCartQuanlity quantity_product" name="" value="1">
                        <button type="button" class="btn-up btnCartUp"><span></span></button>
                        <!-- <button class="btn-down disabled"><span></span></button> -->
                        <button type="button" class="btn-down btnCartDown"><span></span></button>
                    </div>
                    <button class="btn-add-cart" id="button_add_to_cart" type="button" name="">add to cart</button>
                </form>
                <div class="detail-upsell">
                    <div class="detail-upsell-title">Enjoy Your Saving! Buy more to save more</div>
                    <div class="detail-upsell-list">
                        <div class="detail-upsell-item">
                            <div class="detail-upsell-discount">
                                <div>2 items get 5% OFF</div>
                                <p>on each product</p>
                            </div>
                            <button class="btn-upsell flex-between">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 16 16"><polygon fill="#bcbcbc" fill-rule="evenodd" points="5.6 9.6 2.4 6.4 0 8.8 5.6 14.4 16 4 13.6 1.6"></polygon></svg>
                                </div>
                                <span>Added</span>
                            </button>
                        </div>
                        <div class="detail-upsell-item">
                            <div class="detail-upsell-discount">
                                <div>3 items get 10% OFF</div>
                                <p>on each product</p>
                            </div>
                            <button class="btn-upsell d-none flex-between">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 16 16"><polygon fill="#bcbcbc" fill-rule="evenodd" points="5.6 9.6 2.4 6.4 0 8.8 5.6 14.4 16 4 13.6 1.6"></polygon></svg>
                                </div>
                                <span>Added</span>
                            </button>
                        </div>
                        <div class="detail-upsell-item">
                            <div class="detail-upsell-discount">
                                <div>4 items get 15% OFF</div>
                                <p>on each product</p>
                            </div>
                            <button class="btn-upsell d-none flex-between">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 16 16"><polygon fill="#bcbcbc" fill-rule="evenodd" points="5.6 9.6 2.4 6.4 0 8.8 5.6 14.4 16 4 13.6 1.6"></polygon></svg>
                                </div>
                                <span>Added</span>
                            </button>
                        </div>
                        <div class="detail-upsell-item">
                            <div class="detail-upsell-discount">
                                <div>5 items get 20% OFF</div>
                                <p>on each product</p>
                            </div>
                            <button class="btn-upsell d-none flex-between">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 16 16"><polygon fill="#bcbcbc" fill-rule="evenodd" points="5.6 9.6 2.4 6.4 0 8.8 5.6 14.4 16 4 13.6 1.6"></polygon></svg>
                                </div>
                                <span>Added</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="detail-trust">
                    <img src="img/trust-badge.png">
                </div>
                <div class="detail-share">
                    <label for="">Share</label>
                    <a href=""><img src="img/icon-facebook.png" alt=""></a>
                    <a href=""><img src="img/icon-twitter.png" alt=""></a>
                    <a href=""><img src="img/icon-pinterest.png" alt=""></a>
                    <a href=""><img src="img/icon-email.png" alt=""></a>
                </div>
            </div>
        </div>

         <?php

            }

        }

        ?>
        <!-- --- -->
        <div class="detail-tab-wrapper">
            <div class="container detail-tab-out">
                <div class="tablet-tab">
                    <div class="tablet-tab-btn">
                        <span class="tablet-tab-btn-item active">description</span>
                        <span class="tablet-tab-btn-item">RETURN & WARRANTY</span>
                        <span class="tablet-tab-btn-item">SHIPPING POLICIES</span>
                    </div>
                    <div class="tablet-tab-content">
                        <?php 
                        echo $result_details['product_desc'];
                        ?>
                        <div class="tablet-tab-item">
                            <ul>
                                <li><strong>100% Secure payment</strong> with SSL Encryption.</li>
                                <li>If you're not <strong>100% satisfied</strong>, let us know and we'll make it right.</li>
                            </ul>
                        </div>
                        <div class="tablet-tab-item">
                            <ul>
                                <li>Orders ship within <strong>5 to 10 business days</strong>.</li>
                                <li><strong>Tip:</strong> Buying 2 products or more at the same time will save you quite a lot on shipping fees.</li>
                            </ul>
                        </div>          
                    </div>
                </div>
                <div class="phone-tab">
                    <div class="phone-tab-item">
                        <div class="phone-tab-item-btn">DESCRIPTION</div>
                        <div class="phone-tab-item-content">
                            <p><br><strong>Unisex T-shirt</strong></p>
                            <ul>
                                <li>100% pre-shrunk cotton</li>
                                <li>Seamless collar, taped neck and shoulders</li>
                                <li>Double-needle sleeve and bottom hems</li>
                                <li>Quarter-turned to eliminate center crease</li>
                            </ul>
                            <p>Due to the difference monitor and light effect, the actual color and size of the item may be slightly difference from the visual image.</p>
                            <p><br><strong>V-neck T-shirt</strong></p>
                            <ul>
                                <li>100% airlume combed and ringspun cotton</li>
                                <li>Super soft jersey knit</li>
                                <li>Sophisticated and tailored</li>
                                <li>Can be worn as a casual basic or as an undershirt</li>
                            </ul>
                            <p>Due to the difference monitor and light effect, the actual color and size of the item may be slightly difference from the visual image.</p>
                            <p><br><strong>Ladies T-shirt</strong></p>
                            <ul>
                                <li>100% pre-shrunk cotton</li>
                                <li>Double-needle stitching throughout, seamless collar, taped shoulder-to-shoulder</li>
                                <li>Feminine cut with narrow 5/8" ribbed neck</li>
                            </ul>
                            <p>Due to the difference monitor and light effect, the actual color and size of the item may be slightly difference from the visual image.</p>
                        </div>
                    </div>
                    <div class="phone-tab-item">
                        <div class="phone-tab-item-btn">RETURN & WARRANTY</div>
                        <div class="phone-tab-item-content">
                            <ul>
                                <li><strong>100% Secure payment</strong> with SSL Encryption.</li>
                                <li>If you're not <strong>100% satisfied</strong>, let us know and we'll make it right.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="phone-tab-item">
                        <div class="phone-tab-item-btn">RETURN & WARRANTY</div>
                        <div class="phone-tab-item-content">
                            <ul>
                                <li><strong>100% Secure payment</strong> with SSL Encryption.</li>
                                <li>If you're not <strong>100% satisfied</strong>, let us know and we'll make it right.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- --- -->
        <div class="detail-review-wrapper">
            <div class="container">
                <div class="detail-review-out">
                    <!-- --- -->
                    <div class="detail-review-head">
                        <div class="review-overall">
                            <div class="review-overall-text">Overall rating: 5/5</div>
                            <div class="review-overall-link"><a href="">See all reviews (19)</a></div>
                        </div>
                        <div class="detail-review-summary">
                            <ul>
                                <li class="flex-center">
                                    <div class="review-summary-icon">
                                        <span class="review-summary-count">5</span>
                                         <span class="review-icon-star">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px"><path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path></svg>
                                        </span>
                                    </div>
                                    <div class="review-summary-bar">
                                        <progress max="100" value="100" data-progress-active="true">100% of ratings are 5 stars</progress>
                                    </div>
                                    <span class="review-summary-count-last">100%</span>
                                </li>
                                <li class="flex-center">
                                    <div class="review-summary-icon">
                                        <span class="review-summary-count">4</span>
                                         <span class="review-icon-star">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px"><path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path></svg>
                                        </span>
                                    </div>
                                    <div class="review-summary-bar">
                                        <progress max="100" value="100" data-progress-active="true">100% of ratings are 4 stars</progress>
                                    </div>
                                    <span class="review-summary-count-last">100%</span>
                                </li>
                                <li class="flex-center">
                                    <div class="review-summary-icon">
                                        <span class="review-summary-count">3</span>
                                         <span class="review-icon-star">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px"><path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path></svg>
                                        </span>
                                    </div>
                                    <div class="review-summary-bar">
                                        <progress max="100" value="100" data-progress-active="true">100% of ratings are 5 stars</progress>
                                    </div>
                                    <span class="review-summary-count-last">100%</span>
                                </li>
                                <li class="flex-center">
                                    <div class="review-summary-icon">
                                        <span class="review-summary-count">2</span>
                                         <span class="review-icon-star">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px"><path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path></svg>
                                        </span>
                                    </div>
                                    <div class="review-summary-bar">
                                        <progress max="100" value="10" data-progress-active="true">100% of ratings are 5 stars</progress>
                                    </div>
                                    <span class="review-summary-count-last">10%</span>
                                </li>
                                <li class="flex-center">
                                    <div class="review-summary-icon">
                                        <span class="review-summary-count">1</span>
                                         <span class="review-icon-star">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px"><path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path></svg>
                                        </span>
                                    </div>
                                    <div class="review-summary-bar">
                                        <progress max="100" value="10" data-progress-active="true">100% of ratings are 5 stars</progress>
                                    </div>
                                    <span class="review-summary-count-last">10%</span>
                                </li>
                            </ul>
                        </div>
                        <div class="detail-review-write">
                            <button class="review-write-btn">
                                <div class="review-icon-symbols"><!----> <svg id="review-icons-pencil" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#ffffff"><path d="M11.7,0.3 C11.3,-0.1 10.7,-0.1 10.3,0.3 L0.3,10.3 C0.1,10.5 0,10.7 0,11 L0,15 C0,15.6 0.4,16 1,16 L5,16 C5.3,16 5.5,15.9 5.7,15.7 L15.7,5.7 C16.1,5.3 16.1,4.7 15.7,4.3 L11.7,0.3 Z M4.6,14 L2,14 L2,11.4 L8,5.4 L10.6,8 L4.6,14 Z M12,6.6 L9.4,4 L11,2.4 L13.6,5 L12,6.6 Z"></path></svg> <!----> <!----> <!----></div>
                                <span>Write a review</span>
                            </button>
                        </div>
                    </div>
                    <!-- --- -->
                    <div class="detail-form-write-wrapper">
                        <div class="detail-form-write">
                            <div class="form-write-title flex-between">
                                <div class="form-write-title-text">
                                    Write a review
                                </div>
                                <div class="form-write-title-close">
                                    close
                                </div>
                            </div>
                            <form action="">
                                <div class="form-write-star-out">
                                    <div data-rating="5" class="reviewStarList review-star-list">
                                        <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                            </svg>
                                        </span>
                                        <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                            </svg>
                                        </span>
                                        <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                            </svg>
                                        </span>
                                        <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                            </svg>
                                        </span>
                                        <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="reviewStarText form-write-star-feeling form-write-star-feeling-1">
                                        Wonderful
                                    </div>
                                    <div class="form-write-star-note">We are so sorry that you do not have the best experience with us. Please let us know if there is anything we could do better.</div>
                                </div>
                                <div class="formWriteItem form-group">
                                    <div class="form-write-character">
                                        <label>Title of review</label>
                                        <div><span>0</span>/70 characters</div>
                                    </div>
                                    <input type="text" maxlength="70" class="input-text-write">
                                </div>
                                <div class="form-group">
                                    <div class="form-write-character">
                                        <label>What's great</label>
                                    </div>
                                    <div class="form-write-tag-list">
                                        <div class="form-write-tag-item">Poor Quality</div>
                                        <div class="form-write-tag-item">Bad Package</div>
                                        <div class="form-write-tag-item">Slow Shipping</div>
                                        <div class="form-write-tag-item">Wrong Product</div>
                                        <div class="form-write-tag-item">It doesn't work</div>
                                    </div>
                                </div>
                                <div class="formWriteItem form-group">
                                    <div class="form-write-character">
                                        <label>Review*</label>
                                        <div><span>0</span>/1000 characters</div>
                                    </div>
                                    <textarea maxlength="1000" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="form-write-character">
                                        <label>Photos (0/5)</label>
                                    </div>
                                    <div class="form-write-image-list">
                                       
                                        <div class="form-write-image-add">
                                            <label>
                                                <input type="file" multiple name="images">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-write-name-email flex-between">
                                    <div class="form-group">
                                        <div class="form-write-character">
                                            <label>Your name*</label>
                                        </div>
                                        <input type="text" class="input-text-write">
                                    </div>
                                    <div class="form-group">
                                        <div class="form-write-character">
                                            <label>Your email*</label>
                                        </div>
                                        <input type="text" class="input-text-write" placeholder="We do not public your email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-write-character">
                                        <label>Is this a store review or product review?</label>
                                    </div>
                                    <div class="flex">
                                        <label class="form-write-checkbox-item">
                                            <input type="radio" checked="" class="d-none" name="checkbox_product">
                                            <span class="form-write-checkbox-box">
                                                <span class="box">
                                                    <span class="dot"></span>
                                                </span>
                                                <span>Store review</span>
                                            </span>
                                        </label>
                                        <label class="form-write-checkbox-item">
                                            <input type="radio" class="d-none" name="checkbox_product">
                                            <span class="form-write-checkbox-box">
                                                <span class="box">
                                                    <span class="dot"></span>
                                                </span>
                                                <span>Product review</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="form-write-submit-btn">Submit review</button>
                            </form>
                        </div>
                    </div>  
                    <!-- --- -->
                    <div class="detail-review-select">
                        <div class="review-filter">
                            <div class="review-filter-checkbox">
                                <label id="label_box_item" class="app-checkbox">
                                    <input id="checkbox_box_item" type="checkbox" true-value="true" value="">
                                    <span class="app-checkbox__check"></span>
                                    <span class="app-checkbox__label">With photos</span>
                                </label>
                            </div>
                            <div class="review-filter-select">
                                <select class=""><!----> 
                                    <option value="rating">Top reviews</option>
                                    <option value="created_at">Most recent</option>
                                    <option value="is_starred">Featured</option>
                                </select>
                                <i class="app-select__icon"></i>
                            </div>
                        </div>
                        <div class="review-select-type">
                            <span data-type='product' class="review-type-btn">Product reviews (1)</span>
                            <span data-type='store' class="review-type-btn i-active">Store reviews (18)</span>
                        </div>
                    </div>
                    <!-- --- -->
                    <div class="detail-review-box-out">
                        <div class="detail-review-box-store detail-review-box-list active">
                            <div data-type='product' data-image="true" class="detail-review-box-item">
                                <!-- has imge -->
                                <!-- <div class="review-box-item-image">
                                    <img src="img/product1-1.png" alt="">
                                    <div class="review-box-item-image-icon">
                                        <svg id="review-icons-image" viewBox="0 0 16 16"><g fill="#FFFFFF" fill-rule="nonzero" transform="translate(0.000000, 1.000000)"><path d="M15.9649524,13.4425234 L11.3935238,3.22802105 C11.3372371,3.1024524 11.22106,3.01666695 11.0876573,3.00216847 C10.9542546,2.98766999 10.8232894,3.04659551 10.7428571,3.15730527 L6.4,10.1284676 L3.65714286,8.00699406 C3.56680204,7.93699166 3.45098823,7.91196287 3.34099546,7.93867071 C3.2310027,7.96537855 3.13818369,8.04106641 3.08761905,8.1452827 L0.04,13.4311303 C-0.019205385,13.5529758 -0.0129473755,13.6977604 0.0565353578,13.8136903 C0.126018091,13.9296202 0.248797703,14.0001313 0.380952381,14 L15.6190476,14 C15.7490401,14.0002113 15.8701456,13.9319835 15.9402098,13.8190648 C16.010274,13.706146 16.0196041,13.5641578 15.9649524,13.4425234 Z"></path> <circle cx="4.33333333" cy="2.28571429" r="2.28571429"></circle></g></svg>
                                        <span>1</span>
                                    </div>
                                </div> -->
                                <div class="review-box-item-name">quan</div>
                                <div class="review-box-item-post">
                                    <div class="review-box-item-post-head">
                                        <div class="review-star-list">
                                            <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                    <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                                </svg></span>
                                            <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                    <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                                </svg></span>
                                            <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                    <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                                </svg></span>
                                            <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                    <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                                </svg></span>
                                            <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                    <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                                </svg></span>
                                        </div>
                                        <div class="review-box-date">05/03/2021</div>
                                    </div>
                                    <div class="review-box-post-content">
                                        Great product quality, Reasonable price, Dedicated seller, Fast shipping, Highly recommend ksfddkskfdkskd, Great product quality, Reasonable price, Dedicated seller, Reasonable price, Reasonable price, Reasonable price, Great product quality, Great product quality
                                    </div>
                                </div>          
                            </div>
                            <div class="detail-review-box-item">
                                <div class="review-box-item-name">quan</div>
                                <div class="review-box-item-post">
                                    <div class="review-box-item-post-head">
                                        <div class="review-star-list">
                                            <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                    <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                                </svg></span>
                                            <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                    <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                                </svg></span>
                                            <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                    <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                                </svg></span>
                                            <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                    <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                                </svg></span>
                                            <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                    <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                                </svg></span>
                                        </div>
                                        <div class="review-box-date">05/03/2021</div>
                                    </div>
                                    <div class="review-box-post-content">
                                        Great product quality, Reasonable price, Dedicated seller, Fast shipping, Highly recommend ksfddkskfdkskd, Great product quality, Reasonable price, Dedicated seller, Reasonable price, Reasonable price, Reasonable price, Great product quality, Great product quality Lorem ipsum dolor sit.
                                    </div>
                                </div>          
                            </div>
                            <div class="detail-review-box-item">
                                <div class="review-box-item-name">quan</div>
                                <div class="review-box-item-post">
                                    <div class="review-box-item-post-head">
                                        <div class="review-star-list">
                                            <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                    <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                                </svg></span>
                                            <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                    <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                                </svg></span>
                                            <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                    <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                                </svg></span>
                                            <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                    <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                                </svg></span>
                                            <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                    <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                                </svg></span>
                                        </div>
                                        <div class="review-box-date">05/03/2021</div>
                                    </div>
                                    <div class="review-box-post-content">
                                        Great product quality, Reasonable price, Dedicated seller, Fast shipping, Highly recommend ksfddkskfdkskd, Great product quality, Reasonabl
                                    </div>
                                </div>          
                            </div>
                            <div class="detail-review-box-item">
                                <div class="review-box-item-name">quan</div>
                                <div class="review-box-item-post">
                                    <div class="review-box-item-post-head">
                                        <div class="review-star-list">
                                            <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                    <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                                </svg></span>
                                            <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                    <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                                </svg></span>
                                            <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                    <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                                </svg></span>
                                            <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                    <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                                </svg></span>
                                            <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                    <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                                </svg></span>
                                        </div>
                                        <div class="review-box-date">05/03/2021</div>
                                    </div>
                                    <div class="review-box-post-content">
                                        Great product quality, Reasonable price, Dedicated seller, Fast shipping, Highly recommend ksfddkskfdkskd, Great product quality, Reasonable price, Dedicated seller, Reasonable price, Reasonable price, Reasonable price, Great product quality, Great product quality Lorem, ipsum.
                                    </div>
                                </div>          
                            </div>
                            <div class="detail-review-box-item">
                                <div class="review-box-item-name">quan</div>
                                <div class="review-box-item-post">
                                    <div class="review-box-item-post-head">
                                        <div class="review-star-list">
                                            <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                    <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                                </svg></span>
                                            <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                    <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                                </svg></span>
                                            <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                    <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                                </svg></span>
                                            <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                    <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                                </svg></span>
                                            <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                    <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                                </svg></span>
                                        </div>
                                        <div class="review-box-date">05/03/2021</div>
                                    </div>
                                    <div class="review-box-post-content">
                                        Great product quality, Reasonable price, Dedicated seller, Fast shipping, Highly r
                                    </div>
                                </div>          
                            </div>
                            <div class="detail-review-box-item">
                                <div class="review-box-item-name">quan</div>
                                <div class="review-box-item-post">
                                    <div class="review-box-item-post-head">
                                        <div class="review-star-list">
                                            <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                    <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                                </svg></span>
                                            <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                    <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                                </svg></span>
                                            <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                    <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                                </svg></span>
                                            <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                    <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                                </svg></span>
                                            <span class="review-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#dadada" width="16px" height="16px">
                                                    <path d="M14.3502222,5.83466667 L10.5128889,5.27644444 L8.8,1.8 C8.63435285,1.51502671 8.3296191,1.33968471 8,1.33968471 C7.6703809,1.33968471 7.36564715,1.51502671 7.2,1.8 L5.48711111,5.27733333 L1.64977778,5.83466667 C1.31455321,5.88274486 1.03577211,6.11712854 0.930834093,6.43911462 C0.825896075,6.76110069 0.913035163,7.11474089 1.15555556,7.35111111 L3.93155556,10.0577778 L3.27644444,13.88 C3.21930785,14.2134664 3.35642866,14.5504556 3.63015923,14.7492923 C3.90388979,14.948129 4.26676326,14.9743334 4.56622222,14.8168889 L8,13.0115556 L11.432,14.8151111 C11.731459,14.9725556 12.0943324,14.9463512 12.368063,14.7475145 C12.6417936,14.5486778 12.7789144,14.2116887 12.7217778,13.8782222 L12.0666667,10.056 L14.8444444,7.35111111 C15.0863486,7.11492322 15.1733229,6.76195351 15.0688464,6.44041497 C14.96437,6.11887643 14.686533,5.88444363 14.352,5.83555556 L14.3502222,5.83466667 Z"></path>
                                                </svg></span>
                                        </div>
                                        <div class="review-box-date">05/03/2021</div>
                                    </div>
                                    <div class="review-box-post-content">
                                        Great product quality, Reasonable price, Dedicated seller, Fast shipping, 
                                    </div>
                                </div>          
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- --- -->
        <div id="p1" class="product-owl container">
            <h2>Who bought this also bought</h2>
            <div class="product-owl-out">
                <div>
                    <div class="product-owl-list">
                        <div class="product-owl-item">
                            <div>
                                <div class="product-owl-item-image">
                                    <a href="" class="a-img"><img src="img/product1-1.png" alt=""></a>
                                </div>
                                <div class="product-owl-item-main">
                                    <div class="product-owl-item-main-name">
                                        <a href="">Limited - Healthcare Worker Queen BB-142</a>
                                    </div>
                                    <div class="price-out">
                                        <span class="price">$25.59</span>
                                        <span class="price-old">$42.99</span>
                                    </div>
                                    <div class="product-owl-add">
                                        <button>add to cart</button>
                                    </div>
                                </div>
                            </div>          
                        </div>
                        <div class="product-owl-item">
                            <div>
                                <div class="product-owl-item-image">
                                    <a href="" class="a-img"><img src="img/product1-1.png" alt=""></a>
                                </div>
                                <div class="product-owl-item-main">
                                    <div class="product-owl-item-main-name">
                                        <a href="">Limited - Healthcare Worker Queen BB-142</a>
                                    </div>
                                    <div class="price-out">
                                        <span class="price">$25.59</span>
                                        <span class="price-old">$42.99</span>
                                    </div>
                                    <div class="product-owl-add">
                                        <button>add to cart</button>
                                    </div>
                                </div>
                            </div>          
                        </div>
                        <div class="product-owl-item">
                            <div>
                                <div class="product-owl-item-image">
                                    <a href="" class="a-img"><img src="img/product1-1.png" alt=""></a>
                                </div>
                                <div class="product-owl-item-main">
                                    <div class="product-owl-item-main-name">
                                        <a href="">Limited - Healthcare Worker Queen BB-142</a>
                                    </div>
                                    <div class="price-out">
                                        <span class="price">$25.59</span>
                                        <span class="price-old">$42.99</span>
                                    </div>
                                    <div class="product-owl-add">
                                        <button>add to cart</button>
                                    </div>
                                </div>
                            </div>          
                        </div>
                        <div class="product-owl-item">
                            <div>
                                <div class="product-owl-item-image">
                                    <a href="" class="a-img"><img src="img/product1-1.png" alt=""></a>
                                </div>
                                <div class="product-owl-item-main">
                                    <div class="product-owl-item-main-name">
                                        <a href="">Limited - Healthcare Worker Queen BB-142</a>
                                    </div>
                                    <div class="price-out">
                                        <span class="price">$25.59</span>
                                        <span class="price-old">$42.99</span>
                                    </div>
                                    <div class="product-owl-add">
                                        <button>add to cart</button>
                                    </div>
                                </div>
                            </div>          
                        </div>
                        <div class="product-owl-item">
                            <div>
                                <div class="product-owl-item-image">
                                    <a href="" class="a-img"><img src="img/product1-1.png" alt=""></a>
                                </div>
                                <div class="product-owl-item-main">
                                    <div class="product-owl-item-main-name">
                                        <a href="">Limited - Healthcare Worker Queen BB-142</a>
                                    </div>
                                    <div class="price-out">
                                        <span class="price">$25.59</span>
                                        <span class="price-old">$42.99</span>
                                    </div>
                                    <div class="product-owl-add">
                                        <button>add to cart</button>
                                    </div>
                                </div>
                            </div>          
                        </div>
                        <div class="product-owl-item">
                            <div>
                                <div class="product-owl-item-image">
                                    <a href="" class="a-img"><img src="img/product1-1.png" alt=""></a>
                                </div>
                                <div class="product-owl-item-main">
                                    <div class="product-owl-item-main-name">
                                        <a href="">Limited - Healthcare Worker Queen BB-142</a>
                                    </div>
                                    <div class="price-out">
                                        <span class="price">$25.59</span>
                                        <span class="price-old">$42.99</span>
                                    </div>
                                    <div class="product-owl-add">
                                        <button>add to cart</button>
                                    </div>
                                </div>
                            </div>          
                        </div>
                        <div class="product-owl-item">
                            <div>
                                <div class="product-owl-item-image">
                                    <a href="" class="a-img"><img src="img/product1-1.png" alt=""></a>
                                </div>
                                <div class="product-owl-item-main">
                                    <div class="product-owl-item-main-name">
                                        <a href="">Limited - Healthcare Worker Queen BB-142</a>
                                    </div>
                                    <div class="price-out">
                                        <span class="price">$25.59</span>
                                        <span class="price-old">$42.99</span>
                                    </div>
                                    <div class="product-owl-add">
                                        <button>add to cart</button>
                                    </div>
                                </div>
                            </div>          
                        </div>
                        <div class="product-owl-item">
                            <div>
                                <div class="product-owl-item-image">
                                    <a href="" class="a-img"><img src="img/product1-1.png" alt=""></a>
                                </div>
                                <div class="product-owl-item-main">
                                    <div class="product-owl-item-main-name">
                                        <a href="">Limited - Healthcare Worker Queen BB-142</a>
                                    </div>
                                    <div class="price-out">
                                        <span class="price">$25.59</span>
                                        <span class="price-old">$42.99</span>
                                    </div>
                                    <div class="product-owl-add">
                                        <button>add to cart</button>
                                    </div>
                                </div>
                            </div>          
                        </div>
                        <div class="product-owl-item">
                            <div>
                                <div class="product-owl-item-image">
                                    <a href="" class="a-img"><img src="img/product1-1.png" alt=""></a>
                                </div>
                                <div class="product-owl-item-main">
                                    <div class="product-owl-item-main-name">
                                        <a href="">Limited - Healthcare Worker Queen BB-142</a>
                                    </div>
                                    <div class="price-out">
                                        <span class="price">$25.59</span>
                                        <span class="price-old">$42.99</span>
                                    </div>
                                    <div class="product-owl-add">
                                        <button>add to cart</button>
                                    </div>
                                </div>
                            </div>          
                        </div>
                    </div>
                    </div>  
                <div class="product-owl-prev">
                    <svg class="svg-24" fill="#BCBCBC"> <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"></path></svg>
                </div>
                <div class="product-owl-next">
                    <svg class="svg-24" fill="#BCBCBC"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path></svg>
                </div>
            </div>
        </div>
        <!-- --- -->
        <div id="p2" class="product-owl container">
            <h2>Products from the same collections</h2>
            <div class="product-owl-out">
                <div>
                    <div class="product-owl-list">
                        <div class="product-owl-item">
                            <div>
                                <div class="product-owl-item-image">
                                    <a href="" class="a-img"><img src="img/product1-1.png" alt=""></a>
                                </div>
                                <div class="product-owl-item-main">
                                    <div class="product-owl-item-main-name">
                                        <a href="">Limited - Healthcare Worker Queen BB-142</a>
                                    </div>
                                    <div class="price-out">
                                        <span class="price">$25.59</span>
                                        <span class="price-old">$42.99</span>
                                    </div>
                                    <div class="product-owl-add">
                                        <button>add to cart</button>
                                    </div>
                                </div>
                            </div>          
                        </div>
                        <div class="product-owl-item">
                            <div>
                                <div class="product-owl-item-image">
                                    <a href="" class="a-img"><img src="img/product1-1.png" alt=""></a>
                                </div>
                                <div class="product-owl-item-main">
                                    <div class="product-owl-item-main-name">
                                        <a href="">Limited - Healthcare Worker Queen BB-142</a>
                                    </div>
                                    <div class="price-out">
                                        <span class="price">$25.59</span>
                                        <span class="price-old">$42.99</span>
                                    </div>
                                    <div class="product-owl-add">
                                        <button>add to cart</button>
                                    </div>
                                </div>
                            </div>          
                        </div>
                        <div class="product-owl-item">
                            <div>
                                <div class="product-owl-item-image">
                                    <a href="" class="a-img"><img src="img/product1-1.png" alt=""></a>
                                </div>
                                <div class="product-owl-item-main">
                                    <div class="product-owl-item-main-name">
                                        <a href="">Limited - Healthcare Worker Queen BB-142</a>
                                    </div>
                                    <div class="price-out">
                                        <span class="price">$25.59</span>
                                        <span class="price-old">$42.99</span>
                                    </div>
                                    <div class="product-owl-add">
                                        <button>add to cart</button>
                                    </div>
                                </div>
                            </div>          
                        </div>
                        <div class="product-owl-item">
                            <div>
                                <div class="product-owl-item-image">
                                    <a href="" class="a-img"><img src="img/product1-1.png" alt=""></a>
                                </div>
                                <div class="product-owl-item-main">
                                    <div class="product-owl-item-main-name">
                                        <a href="">Limited - Healthcare Worker Queen BB-142</a>
                                    </div>
                                    <div class="price-out">
                                        <span class="price">$25.59</span>
                                        <span class="price-old">$42.99</span>
                                    </div>
                                    <div class="product-owl-add">
                                        <button>add to cart</button>
                                    </div>
                                </div>
                            </div>          
                        </div>
                        <div class="product-owl-item">
                            <div>
                                <div class="product-owl-item-image">
                                    <a href="" class="a-img"><img src="img/product1-1.png" alt=""></a>
                                </div>
                                <div class="product-owl-item-main">
                                    <div class="product-owl-item-main-name">
                                        <a href="">Limited - Healthcare Worker Queen BB-142</a>
                                    </div>
                                    <div class="price-out">
                                        <span class="price">$25.59</span>
                                        <span class="price-old">$42.99</span>
                                    </div>
                                    <div class="product-owl-add">
                                        <button>add to cart</button>
                                    </div>
                                </div>
                            </div>          
                        </div>
                        <div class="product-owl-item">
                            <div>
                                <div class="product-owl-item-image">
                                    <a href="" class="a-img"><img src="img/product1-1.png" alt=""></a>
                                </div>
                                <div class="product-owl-item-main">
                                    <div class="product-owl-item-main-name">
                                        <a href="">Limited - Healthcare Worker Queen BB-142</a>
                                    </div>
                                    <div class="price-out">
                                        <span class="price">$25.59</span>
                                        <span class="price-old">$42.99</span>
                                    </div>
                                    <div class="product-owl-add">
                                        <button>add to cart</button>
                                    </div>
                                </div>
                            </div>          
                        </div>
                        <div class="product-owl-item">
                            <div>
                                <div class="product-owl-item-image">
                                    <a href="" class="a-img"><img src="img/product1-1.png" alt=""></a>
                                </div>
                                <div class="product-owl-item-main">
                                    <div class="product-owl-item-main-name">
                                        <a href="">Limited - Healthcare Worker Queen BB-142</a>
                                    </div>
                                    <div class="price-out">
                                        <span class="price">$25.59</span>
                                        <span class="price-old">$42.99</span>
                                    </div>
                                    <div class="product-owl-add">
                                        <button>add to cart</button>
                                    </div>
                                </div>
                            </div>          
                        </div>
                        <div class="product-owl-item">
                            <div>
                                <div class="product-owl-item-image">
                                    <a href="" class="a-img"><img src="img/product1-1.png" alt=""></a>
                                </div>
                                <div class="product-owl-item-main">
                                    <div class="product-owl-item-main-name">
                                        <a href="">Limited - Healthcare Worker Queen BB-142</a>
                                    </div>
                                    <div class="price-out">
                                        <span class="price">$25.59</span>
                                        <span class="price-old">$42.99</span>
                                    </div>
                                    <div class="product-owl-add">
                                        <button>add to cart</button>
                                    </div>
                                </div>
                            </div>          
                        </div>
                        <div class="product-owl-item">
                            <div>
                                <div class="product-owl-item-image">
                                    <a href="" class="a-img"><img src="img/product1-1.png" alt=""></a>
                                </div>
                                <div class="product-owl-item-main">
                                    <div class="product-owl-item-main-name">
                                        <a href="">Limited - Healthcare Worker Queen BB-142</a>
                                    </div>
                                    <div class="price-out">
                                        <span class="price">$25.59</span>
                                        <span class="price-old">$42.99</span>
                                    </div>
                                    <div class="product-owl-add">
                                        <button>add to cart</button>
                                    </div>
                                </div>
                            </div>          
                        </div>
                    </div>
                    </div>  
                <div class="product-owl-prev">
                    <svg class="svg-24" fill="#BCBCBC"> <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"></path></svg>
                </div>
                <div class="product-owl-next">
                    <svg class="svg-24" fill="#BCBCBC"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path></svg>
                </div>
            </div>
        </div>
        <!-- --- -->
        <div id="p3" class="product-owl container">
            <h2>Recently viewed & featured recommendations</h2>
            <div class="product-owl-out">
                <div>
                    <div class="product-owl-list">
                        <div class="product-owl-item">
                            <div>
                                <div class="product-owl-item-image">
                                    <a href="" class="a-img"><img src="img/product1-1.png" alt=""></a>
                                </div>
                                <div class="product-owl-item-main">
                                    <div class="product-owl-item-main-name">
                                        <a href="">Limited - Healthcare Worker Queen BB-142</a>
                                    </div>
                                    <div class="price-out">
                                        <span class="price">$25.59</span>
                                        <span class="price-old">$42.99</span>
                                    </div>
                                    <div class="product-owl-add">
                                        <button>add to cart</button>
                                    </div>
                                </div>
                            </div>          
                        </div>
                        <div class="product-owl-item">
                            <div>
                                <div class="product-owl-item-image">
                                    <a href="" class="a-img"><img src="img/product1-1.png" alt=""></a>
                                </div>
                                <div class="product-owl-item-main">
                                    <div class="product-owl-item-main-name">
                                        <a href="">Limited - Healthcare Worker Queen BB-142</a>
                                    </div>
                                    <div class="price-out">
                                        <span class="price">$25.59</span>
                                        <span class="price-old">$42.99</span>
                                    </div>
                                    <div class="product-owl-add">
                                        <button>add to cart</button>
                                    </div>
                                </div>
                            </div>          
                        </div>
                        <div class="product-owl-item">
                            <div>
                                <div class="product-owl-item-image">
                                    <a href="" class="a-img"><img src="img/product1-1.png" alt=""></a>
                                </div>
                                <div class="product-owl-item-main">
                                    <div class="product-owl-item-main-name">
                                        <a href="">Limited - Healthcare Worker Queen BB-142</a>
                                    </div>
                                    <div class="price-out">
                                        <span class="price">$25.59</span>
                                        <span class="price-old">$42.99</span>
                                    </div>
                                    <div class="product-owl-add">
                                        <button>add to cart</button>
                                    </div>
                                </div>
                            </div>          
                        </div>
                        <div class="product-owl-item">
                            <div>
                                <div class="product-owl-item-image">
                                    <a href="" class="a-img"><img src="img/product1-1.png" alt=""></a>
                                </div>
                                <div class="product-owl-item-main">
                                    <div class="product-owl-item-main-name">
                                        <a href="">Limited - Healthcare Worker Queen BB-142</a>
                                    </div>
                                    <div class="price-out">
                                        <span class="price">$25.59</span>
                                        <span class="price-old">$42.99</span>
                                    </div>
                                    <div class="product-owl-add">
                                        <button>add to cart</button>
                                    </div>
                                </div>
                            </div>          
                        </div>
                        <div class="product-owl-item">
                            <div>
                                <div class="product-owl-item-image">
                                    <a href="" class="a-img"><img src="img/product1-1.png" alt=""></a>
                                </div>
                                <div class="product-owl-item-main">
                                    <div class="product-owl-item-main-name">
                                        <a href="">Limited - Healthcare Worker Queen BB-142</a>
                                    </div>
                                    <div class="price-out">
                                        <span class="price">$25.59</span>
                                        <span class="price-old">$42.99</span>
                                    </div>
                                    <div class="product-owl-add">
                                        <button>add to cart</button>
                                    </div>
                                </div>
                            </div>          
                        </div>
                        <div class="product-owl-item">
                            <div>
                                <div class="product-owl-item-image">
                                    <a href="" class="a-img"><img src="img/product1-1.png" alt=""></a>
                                </div>
                                <div class="product-owl-item-main">
                                    <div class="product-owl-item-main-name">
                                        <a href="">Limited - Healthcare Worker Queen BB-142</a>
                                    </div>
                                    <div class="price-out">
                                        <span class="price">$25.59</span>
                                        <span class="price-old">$42.99</span>
                                    </div>
                                    <div class="product-owl-add">
                                        <button>add to cart</button>
                                    </div>
                                </div>
                            </div>          
                        </div>
                        <div class="product-owl-item">
                            <div>
                                <div class="product-owl-item-image">
                                    <a href="" class="a-img"><img src="img/product1-1.png" alt=""></a>
                                </div>
                                <div class="product-owl-item-main">
                                    <div class="product-owl-item-main-name">
                                        <a href="">Limited - Healthcare Worker Queen BB-142</a>
                                    </div>
                                    <div class="price-out">
                                        <span class="price">$25.59</span>
                                        <span class="price-old">$42.99</span>
                                    </div>
                                    <div class="product-owl-add">
                                        <button>add to cart</button>
                                    </div>
                                </div>
                            </div>          
                        </div>
                        <div class="product-owl-item">
                            <div>
                                <div class="product-owl-item-image">
                                    <a href="" class="a-img"><img src="img/product1-1.png" alt=""></a>
                                </div>
                                <div class="product-owl-item-main">
                                    <div class="product-owl-item-main-name">
                                        <a href="">Limited - Healthcare Worker Queen BB-142</a>
                                    </div>
                                    <div class="price-out">
                                        <span class="price">$25.59</span>
                                        <span class="price-old">$42.99</span>
                                    </div>
                                    <div class="product-owl-add">
                                        <button>add to cart</button>
                                    </div>
                                </div>
                            </div>          
                        </div>
                        <div class="product-owl-item">
                            <div>
                                <div class="product-owl-item-image">
                                    <a href="" class="a-img"><img src="img/product1-1.png" alt=""></a>
                                </div>
                                <div class="product-owl-item-main">
                                    <div class="product-owl-item-main-name">
                                        <a href="">Limited - Healthcare Worker Queen BB-142</a>
                                    </div>
                                    <div class="price-out">
                                        <span class="price">$25.59</span>
                                        <span class="price-old">$42.99</span>
                                    </div>
                                    <div class="product-owl-add">
                                        <button>add to cart</button>
                                    </div>
                                </div>
                            </div>          
                        </div>
                    </div>
                    </div>  
                <div class="product-owl-prev">
                    <svg class="svg-24" fill="#BCBCBC"> <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"></path></svg>
                </div>
                <div class="product-owl-next">
                    <svg class="svg-24" fill="#BCBCBC"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path></svg>
                </div>
            </div>
        </div>
        <!-- --- -->
    </section>
    <script type="text/javascript" src="js/details.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#button_add_to_cart").click(function(){
                var style_id = $('.detail-var-box-image img.active').data('style_id');
                var color_id = $('.detail-var-box-color .button-color').data('color_id');
                var size_id = $('.detail-bar-box-size .button-size').data('size_id');
                var quantity = $('.textCartQuanlity.quantity_product').val();

                $.ajax({
                    url:'ajax/cart_ajax.php',
                    type: 'POST',
                    data: {style_id: style_id, color_id: color_id, size_id: size_id, quantity: quantity},
                    success: function(data){
                        alert(data)
                    },
                    error: function(e){
                        alert('error sever!')
                    }
                })

            });




            // event.preventDefault();
        })
    </script>

<?php 
	include 'inc/footer.php';
	
 ?>
