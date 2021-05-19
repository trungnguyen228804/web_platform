
    <header id="header">
        <div class="header-top">
            <span>FREE SHIPPING ON ALL ORDERS OVER $99++. WE SHIP WORLDWIDE</span>
        </div>
        <div class="header-bottom ">
            <div class="header-bottom-row container">
                <div class="col-header-left">
                    <a href="#">
                        <img src="./img/0x180@16049423383ad1c0bcc7.png">
                    </a>
                </div>
                <div class="col-header-center">
                    <ul class="menu-header">
                        <?php
                $cate = $cat->show_category();
                if($cate){
                    while($result_new = $cate->fetch_assoc()){
                    $category_id=$result_new['category_id'];
                    $cat_child = $cat->show_category_child($category_id);
                    if(!$cat_child){
                ?>

                        <li class="item-menu">
                            <a href="detail-collections.php?catid=<?php echo $result_new['category_id'] ?>"><?php echo $result_new['category_name'] ?>
                            </a>
                        </li>

                <?php
                    }else{
                        ?>
                        <li class="item-menu">
                            <a href="detail-collections.php?catid=<?php echo $result_new['category_id'] ?>"><span><?php echo $result_new['category_name'] ?></span>
                                <span class="icon-drop-down"><i class="fas fa-angle-down"></i></span>
                            </a>

                            <ul class="item-dropdown">
                                <?php
                                    while($result_new_2 = $cat_child->fetch_assoc()){
                                ?>
                                <li class="item-li">
                                    <a href="detail-collections.php?catid=<?php echo $result_new_2['category_id'] ?>"><?php echo $result_new_2['category_name'] ?></a>
                                </li>
                                <?php
                                    }
                                  ?>
                            </ul>
                        </li>
                        <?php
                    }
                }
              } 
              ?>
                        
                    </ul>
                </div>
                <div class="menu-mobile-add header-bottom-mobile-wrapper" style="display: none;">
                <div class="col-8 image-logo">
                    <a href="#">
                        <img src="./img/0x180@16049423383ad1c0bcc7.png">
                    </a>
                </div>
                <div class="col-2 show-menu-mobile">
                    <span onclick="show_menu_mobile()"><i class="fas fa-bars"></i></span>
                    <script type="text/javascript">
                    function show_menu_mobile() {
                        if ($('.sidebar').css('opacity') == '0') {

                            $('.sidebar').css('opacity', '1')
                            $('.sidebar').css('z-index', '3')
                            $('.sidebar').css('width', '300px')
                            $('.sidebar').css('display', 'block')
                            $('.sidebar-background').css('display', 'block')


                        } else {
                            $('.sidebar').css('opacity', '0')
                            $('.sidebar').css('z-index', '-3')
                            $('.sidebar').css('width', '0px')
                            $('.sidebar').css('display', 'none')
                            $('.sidebar-background').css('display', 'none')

                        }
                    }
                    </script>
                </div>
                </div>
                <div class="col-header-right">
                    <div class="icon-search">
                        <input type="text" name="" placeholder="Search">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="icon-cart" onclick="cart_content_active()"><a href="#" class="cart-icon"><i class="fas fa-shopping-cart" style="color: #4D4D4D"></i> <span class="cart-number">03</span></a>
                    </div>
                </div>
                <div class="cart-item-small ">
                    <div class="row-cart-item-small">
                        <div class="icon-close-cart-small">
                            <i class="fas fa-times" onclick="cart_content_active()"></i>
                        </div>
                        <div class="clear-fix"></div>
                        <div class="cart-small-content">
                            <div class="product-cart-small-wrapper" id="order-item-small">
                                <div class="product-cart-small">
                                    <div class="product-cart-img">
                                        <a href="#">
                                            <img src="./img/180x180@16150942529a7da342c145634.png" class="img-product-cart-small">
                                        </a>
                                    </div>
                                    <div class="product-cart-details">
                                        <div class="product-cart-name">
                                            <a href="#" class="h5">
                                                Limited - Social Worker Queen BB-143
                                            </a>
                                        </div>
                                        <p class="product-cart-options">
                                            Unisex T-shirt / Black / S
                                        </p>
                                        <p class="product-cart-price h5"><span>$25.59</span>
                                            <span class="product-cart-price-cost">$42.99</span></p>
                                        <div class="product-cart-small-quantity">
                                            <div class="product-cart-qty">
                                                <button type="button" class="quantity-pro-small button-decrease">-</button>
                                                <input type="number" name="" min="0" max="Infinity" value="2" class="quantity-number">
                                                <button type="button" class="quantity-pro-small button-increase">+</button>
                                            </div>
                                            <div class="remove-product-small">
                                                <a href="#">Remove item</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart-small">
                                    <div class="product-cart-img">
                                        <a href="#">
                                            <img src="./img/180x180@16150942529a7da342c145634.png" class="img-product-cart-small">
                                        </a>
                                    </div>
                                    <div class="product-cart-details">
                                        <div class="product-cart-name">
                                            <a href="#" class="h5">
                                                Limited - Social Worker Queen BB-143
                                            </a>
                                        </div>
                                        <p class="product-cart-options">
                                            Unisex T-shirt / Black / S
                                        </p>
                                        <p class="product-cart-price h5"><span>$25.59</span>
                                            <span class="product-cart-price-cost">$42.99</span></p>
                                        <div class="product-cart-small-quantity">
                                            <div class="product-cart-qty">
                                                <button type="button" class="quantity-pro-small button-decrease">-</button>
                                                <input type="number" name="" min="0" max="Infinity" value="2" class="quantity-number">
                                                <button type="button" class="quantity-pro-small button-increase">+</button>
                                            </div>
                                            <div class="remove-product-small">
                                                <a href="#">Remove item</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart-small">
                                    <div class="product-cart-img">
                                        <a href="#">
                                            <img src="./img/180x180@16150942529a7da342c145634.png" class="img-product-cart-small">
                                        </a>
                                    </div>
                                    <div class="product-cart-details">
                                        <div class="product-cart-name">
                                            <a href="#" class="h5">
                                                Limited - Social Worker Queen BB-143
                                            </a>
                                        </div>
                                        <p class="product-cart-options">
                                            Unisex T-shirt / Black / S
                                        </p>
                                        <p class="product-cart-price h5"><span>$25.59</span>
                                            <span class="product-cart-price-cost">$42.99</span></p>
                                        <div class="product-cart-small-quantity">
                                            <div class="product-cart-qty">
                                                <button type="button" class="quantity-pro-small button-decrease">-</button>
                                                <input type="number" name="" min="0" max="Infinity" value="2" class="quantity-number">
                                                <button type="button" class="quantity-pro-small button-increase">+</button>
                                            </div>
                                            <div class="remove-product-small">
                                                <a href="#">Remove item</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="infor-cart-small">
                                <div class="offer-discount-cart">
                                    <span class="icon-discount"><i class="fas fa-tags"></i> OFFER DISCOUNT</span>
                                    <span class="number-discount">-$25.59</span>
                                </div>
                                <div class="subtotal-cart-smal">
                                    <span class="text-subtotal h5">SUBTOTAL</span>
                                    <span class="number-subtotal h5">$102.36</span>
                                </div>
                                <p class="text-shipping-cart-small">Shipping fee is calculated at checkout</p>
                                <button class="btn-go-to-cart button" type="button" name="">
                                    Go to cart
                                </button>
                                <button class="btn-checkout button" type="button" name="checkout">Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="show-establish-remove-item" style="display: none;">
            <div class="remove-item-wrapper">
                <div class="close-remove-item" onclick="close_cart_item()">
                    <i class="fas fa-times"></i>
                </div>
                <div class="content-remove-item">
                    <h3 class="title-remove-item">
                        REMOVE THIS ITEM?
                    </h3>
                    <p class="text-p1">You are about to delete an item from your cart</p>
                    <p class="text-p2">Are you sure you want to continue?</p>
                    <div class="action-establish-remove-item">
                        <button class="cancel-remove-item button" onclick="close_cart_item()" type="button">CANCEL</button>
                        <button class="agree-remove-item button">REMOVE ITEM</button>
                    </div>
                </div>
            </div>
        </div>
     
        <div class="">
            <div class="sidebar-background"></div>
            <div class="sidebar">
                <div class="logo">
                    <h4>Nurseuni.com</h4> <span class="close_menu" onclick="show_menu_mobile()"><i class="far fa-times-circle"></i></span>
                </div>
                <div class="search-box-mobile">
                    <div class="icon-search">
                        <input type="text" name="" placeholder="Search">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
                <nav>
                    <ul class="cap_1">
                        <li>
                            <a href="#">Nurse</a>
                        </li>
                        <li><a href="#">CNA</a></li>
                        <li><a href="#">Other Medical</a><i class="fas fa-plus button-menu-last" onclick="toggle_menu_cap2()"></i></li>
                        <ul class="cap_2">
                            <li><a href="#">Healthcare Worker</a></li>
                            <li><a href="#">Registered Nurse</a></li>
                            <li><a href="#">Nurse Practitioner</a></li>
                            <li><a href="#">LPN</a></li>
                            <li><a href="#">Medical Assistant</a></li>
                            <li><a href="#">CMA</a></li>
                            <li><a href="#">ER Nurse</a></li>
                            <li><a href="#">Respiratory</a></li>
                        </ul>
                        <li><a href="#">Order Tracking</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                    <div class="icon">
                        <i class="fas fa-bars"></i>
                    </div>
                </nav>
            </div>
            <script type="text/javascript">
            function toggle_menu_cap2() {
                if ($('ul.cap_2').css('display') == 'none') {

                    $('ul.cap_2').css('display', 'block')
                    $('.button-menu-last').removeClass('fa-plus')
                    $('.button-menu-last').addClass('fa-minus')

                } else {
                    $('ul.cap_2').css('display', 'none')
                    $('.button-menu-last').removeClass('fa-minus')
                    $('.button-menu-last').addClass('fa-plus')
                }
            }
            </script>
        </div>
    </header>