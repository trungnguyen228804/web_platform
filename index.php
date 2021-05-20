<?php 
	include 'inc/head.php';
	include 'inc/header.php';
?>
<main id="main">
        <div id="home-page">
            <div class="container">
                <div class="slideshow-container">
                    <?php
                        $get_slider = $product->show_slider();
                        if($get_slider){
                            while($result_slider = $get_slider->fetch_assoc()){

                         ?>
                         <div class="mySlides fade">
                            <a href="#" class="zoom-cur"> <img class="slides_show lazyloaded" src="admin/uploads/<?php echo $result_slider['slider_image'] ?>" alt="<?php echo $result_slider['slider_name'] ?>" /> </a>
                        </div>
                         
                        <?php
                            }
                        }

                         ?>

                    <a class="prev" onclick="plusSlides(-1)">❮</a> <a class="next" onclick="plusSlides(1)">❯</a>
                </div>
                <script>
                    var slideIndex = 1;
                    showSlides(slideIndex);
                    function plusSlides(n) {
                        showSlides(slideIndex += n);
                    }
                    function showSlides(n) {
                        var i;
                        var slides = document.getElementsByClassName("mySlides");
                        if (slideIndex > slides.length) {
                            slideIndex = 1;
                        }
                        if (n > slides.length) {
                            slideIndex = 1;
                        }
                        if (n < 1) {
                            slideIndex = slides.length;
                        }
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";
                        }
                        slides[slideIndex - 1].style.display = "block";
                    }
                    setInterval(plusSlides, 8000, 1);
                </script>
            </div>
            <div class="section">
                <div class="container">
                    <div id="our-store">
                        <h2>OUR STORE</h2>
                        <p>Unique designs created by a passionate community of independent artists. <br>New design for every day and we ship worldwide</p>
                        <a href="#">View our impressive products here</a>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="container">
                    <h2>COLLECTION LIST</h2>
                    <div class="row">
                        
                        <div class="col">
                            <a href="detail-collections.php?pro_type=">
                                <img src="img/0x720@16151313694a59dcd19d.jpeg" alt="T-SHIRT">
                            </a>
                            <p class="title">T-shirt</p>
                        </div>
                        <div class="col">
                            <a href="#">
                                <img src="img/0x720@160526677101fa37eb46.jpeg" alt="Tumbler">
                            </a>
                            <p class="title">Tumbler</p>
                        </div>
                        <div class="col">
                            <a href="#">
                                <img src="img/0x720@1607759622c61bf667b2.jpeg" alt="Canvas">
                            </a>
                            <p class="title">Canvas</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section" style="background-color: #f7f7f7f7">
                <div class="container">
                    <h2>Subscribe to our newsletter</h2>
                    <p>Subscribe to our newsletter for sneak peeks at new collections and early access to flash sales!</p>
                    <div>
                        <form class="sub-email">
                            <input type="text" name="email" placeholder="Enter Your Email Address">
                            <button type="submit" class="btn-sub">Sign up</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="list-product-introduce">
                <div class="cart-recommendation list-product-carousel">
                    <div class="container">
                        <div class="row-wrapper">
                            <h1 class="title-carousel">Best sellers</h1>
                            <div class="content-carousel-list">
                                <div class="list-item-carousel">
                                    <div class="carousel-inner">
                                        <div class="item-carousel">
                                            <div class="item-carousel-wrapper">
                                                <div class="product-item-img">
                                                    <a href="#">
                                                        <img src="./img/360x360@1605261357d0bdfef2e3123.png" class="img-item-carousel">
                                                    </a>
                                                </div>
                                                <div class="product-item-details">
                                                    <div class="item-product-name">
                                                        <a href="#">
                                                            Nurse Mom And Grandma BB-250
                                                        </a>
                                                    </div>
                                                    <div class="item-product-price">
                                                        <div class="product-price-calrousel">
                                                            $25.99
                                                        </div>
                                                        <div class="product-price-cost-calrousel">
                                                            $41.99
                                                        </div>
                                                    </div>
                                                    <div class="item-product-add-to-cart">
                                                        <button class="product-add-cart">
                                                            <span>Add to cart</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-carousel">
                                            <div class="item-carousel-wrapper">
                                                <div class="product-item-img">
                                                    <a href="#">
                                                        <img src="./img/360x360@1605261357d0bdfef2e3123.png" class="img-item-carousel">
                                                    </a>
                                                </div>
                                                <div class="product-item-details">
                                                    <div class="item-product-name">
                                                        <a href="#">
                                                            Nurse Mom And Grandma BB-250
                                                        </a>
                                                    </div>
                                                    <div class="item-product-price">
                                                        <div class="product-price-calrousel">
                                                            $25.99
                                                        </div>
                                                        <div class="product-price-cost-calrousel">
                                                            $41.99
                                                        </div>
                                                    </div>
                                                    <div class="item-product-add-to-cart">
                                                        <button class="product-add-cart">
                                                            <span>Add to cart</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-carousel">
                                            <div class="item-carousel-wrapper">
                                                <div class="product-item-img">
                                                    <a href="#">
                                                        <img src="./img/360x360@1605261357d0bdfef2e3123.png" class="img-item-carousel">
                                                    </a>
                                                </div>
                                                <div class="product-item-details">
                                                    <div class="item-product-name">
                                                        <a href="#">
                                                            Nurse Mom And Grandma BB-250
                                                        </a>
                                                    </div>
                                                    <div class="item-product-price">
                                                        <div class="product-price-calrousel">
                                                            $25.99
                                                        </div>
                                                        <div class="product-price-cost-calrousel">
                                                            $41.99
                                                        </div>
                                                    </div>
                                                    <div class="item-product-add-to-cart">
                                                        <button class="product-add-cart">
                                                            <span>Add to cart</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-carousel">
                                            <div class="item-carousel-wrapper">
                                                <div class="product-item-img">
                                                    <a href="#">
                                                        <img src="./img/360x360@1605261357d0bdfef2e3123.png" class="img-item-carousel">
                                                    </a>
                                                </div>
                                                <div class="product-item-details">
                                                    <div class="item-product-name">
                                                        <a href="#">
                                                            Nurse Mom And Grandma BB-250
                                                        </a>
                                                    </div>
                                                    <div class="item-product-price">
                                                        <div class="product-price-calrousel">
                                                            $25.99
                                                        </div>
                                                        <div class="product-price-cost-calrousel">
                                                            $41.99
                                                        </div>
                                                    </div>
                                                    <div class="item-product-add-to-cart">
                                                        <button class="product-add-cart">
                                                            <span>Add to cart</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-carousel">
                                            <div class="item-carousel-wrapper">
                                                <div class="product-item-img">
                                                    <a href="#">
                                                        <img src="./img/360x360@1605261357d0bdfef2e3123.png" class="img-item-carousel">
                                                    </a>
                                                </div>
                                                <div class="product-item-details">
                                                    <div class="item-product-name">
                                                        <a href="#">
                                                            Nurse Mom And Grandma BB-250
                                                        </a>
                                                    </div>
                                                    <div class="item-product-price">
                                                        <div class="product-price-calrousel">
                                                            $25.99
                                                        </div>
                                                        <div class="product-price-cost-calrousel">
                                                            $41.99
                                                        </div>
                                                    </div>
                                                    <div class="item-product-add-to-cart">
                                                        <button class="product-add-cart">
                                                            <span>Add to cart</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-carousel">
                                            <div class="item-carousel-wrapper">
                                                <div class="product-item-img">
                                                    <a href="#">
                                                        <img src="./img/360x360@1605261357d0bdfef2e3123.png" class="img-item-carousel">
                                                    </a>
                                                </div>
                                                <div class="product-item-details">
                                                    <div class="item-product-name">
                                                        <a href="#">
                                                            Nurse Mom And Grandma BB-250
                                                        </a>
                                                    </div>
                                                    <div class="item-product-price">
                                                        <div class="product-price-calrousel">
                                                            $25.99
                                                        </div>
                                                        <div class="product-price-cost-calrousel">
                                                            $41.99
                                                        </div>
                                                    </div>
                                                    <div class="item-product-add-to-cart">
                                                        <button class="product-add-cart">
                                                            <span>Add to cart</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-carousel">
                                            <div class="item-carousel-wrapper">
                                                <div class="product-item-img">
                                                    <a href="#">
                                                        <img src="./img/360x360@1605261357d0bdfef2e3123.png" class="img-item-carousel">
                                                    </a>
                                                </div>
                                                <div class="product-item-details">
                                                    <div class="item-product-name">
                                                        <a href="#">
                                                            Nurse Mom And Grandma BB-250
                                                        </a>
                                                    </div>
                                                    <div class="item-product-price">
                                                        <div class="product-price-calrousel">
                                                            $25.99
                                                        </div>
                                                        <div class="product-price-cost-calrousel">
                                                            $41.99
                                                        </div>
                                                    </div>
                                                    <div class="item-product-add-to-cart">
                                                        <button class="product-add-cart">
                                                            <span>Add to cart</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-carousel">
                                            <div class="item-carousel-wrapper">
                                                <div class="product-item-img">
                                                    <a href="#">
                                                        <img src="./img/360x360@1605261357d0bdfef2e3123.png" class="img-item-carousel">
                                                    </a>
                                                </div>
                                                <div class="product-item-details">
                                                    <div class="item-product-name">
                                                        <a href="#">
                                                            Nurse Mom And Grandma BB-250
                                                        </a>
                                                    </div>
                                                    <div class="item-product-price">
                                                        <div class="product-price-calrousel">
                                                            $25.99
                                                        </div>
                                                        <div class="product-price-cost-calrousel">
                                                            $41.99
                                                        </div>
                                                    </div>
                                                    <div class="item-product-add-to-cart">
                                                        <button class="product-add-cart">
                                                            <span>Add to cart</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-carousel">
                                            <div class="item-carousel-wrapper">
                                                <div class="product-item-img">
                                                    <a href="#">
                                                        <img src="./img/360x360@1605261357d0bdfef2e3123.png" class="img-item-carousel">
                                                    </a>
                                                </div>
                                                <div class="product-item-details">
                                                    <div class="item-product-name">
                                                        <a href="#">
                                                            Nurse Mom And Grandma BB-250
                                                        </a>
                                                    </div>
                                                    <div class="item-product-price">
                                                        <div class="product-price-calrousel">
                                                            $25.99
                                                        </div>
                                                        <div class="product-price-cost-calrousel">
                                                            $41.99
                                                        </div>
                                                    </div>
                                                    <div class="item-product-add-to-cart">
                                                        <button class="product-add-cart">
                                                            <span>Add to cart</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-carousel">
                                            <div class="item-carousel-wrapper">
                                                <div class="product-item-img">
                                                    <a href="#">
                                                        <img src="./img/360x360@1605261357d0bdfef2e3123.png" class="img-item-carousel">
                                                    </a>
                                                </div>
                                                <div class="product-item-details">
                                                    <div class="item-product-name">
                                                        <a href="#">
                                                            Nurse Mom And Grandma BB-250
                                                        </a>
                                                    </div>
                                                    <div class="item-product-price">
                                                        <div class="product-price-calrousel">
                                                            $25.99
                                                        </div>
                                                        <div class="product-price-cost-calrousel">
                                                            $41.99
                                                        </div>
                                                    </div>
                                                    <div class="item-product-add-to-cart">
                                                        <button class="product-add-cart">
                                                            <span>Add to cart</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-carousel">
                                            <div class="item-carousel-wrapper">
                                                <div class="product-item-img">
                                                    <a href="#">
                                                        <img src="./img/360x360@1605261357d0bdfef2e3123.png" class="img-item-carousel">
                                                    </a>
                                                </div>
                                                <div class="product-item-details">
                                                    <div class="item-product-name">
                                                        <a href="#">
                                                            Nurse Mom And Grandma BB-250
                                                        </a>
                                                    </div>
                                                    <div class="item-product-price">
                                                        <div class="product-price-calrousel">
                                                            $25.99
                                                        </div>
                                                        <div class="product-price-cost-calrousel">
                                                            $41.99
                                                        </div>
                                                    </div>
                                                    <div class="item-product-add-to-cart">
                                                        <button class="product-add-cart">
                                                            <span>Add to cart</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-carousel">
                                            <div class="item-carousel-wrapper">
                                                <div class="product-item-img">
                                                    <a href="#">
                                                        <img src="./img/360x360@1605261357d0bdfef2e3123.png" class="img-item-carousel">
                                                    </a>
                                                </div>
                                                <div class="product-item-details">
                                                    <div class="item-product-name">
                                                        <a href="#">
                                                            Nurse Mom And Grandma BB-250
                                                        </a>
                                                    </div>
                                                    <div class="item-product-price">
                                                        <div class="product-price-calrousel">
                                                            $25.99
                                                        </div>
                                                        <div class="product-price-cost-calrousel">
                                                            $41.99
                                                        </div>
                                                    </div>
                                                    <div class="item-product-add-to-cart">
                                                        <button class="product-add-cart">
                                                            <span>Add to cart</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-carousel-navigation zero"><button type="button" aria-label="Previous page" class="carousel-navigation-button carousel-navigation-prev carousel-navigation-disabled" style="padding: 0px; margin-right: 0px;"><svg class="svg-24" fill="#BCBCBC">
                                            <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"></path>
                                        </svg>
                                        <div class="overlay"></div>
                                    </button> <button type="button" class="carousel-navigation-button carousel-navigation-next" style="padding: 0px; margin-left: 0px;"><svg class="svg-24" fill="#BCBCBC">
                                            <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path>
                                        </svg>
                                        <div class="overlay"></div>
                                    </button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-recommendation list-product-carousel">
                    <div class="container">
                        <div class="row-wrapper">
                            <h1 class="title-carousel">Recently viewed & featured recommendations</h1>
                            <div class="content-carousel-list">
                                <div class="list-item-carousel">
                                    <div class="carousel-inner">
                                        <div class="item-carousel">
                                            <div class="item-carousel-wrapper">
                                                <div class="product-item-img">
                                                    <a href="#">
                                                        <img src="./img/360x360@1605261357d0bdfef2e3123.png" class="img-item-carousel">
                                                    </a>
                                                </div>
                                                <div class="product-item-details">
                                                    <div class="item-product-name">
                                                        <a href="#">
                                                            Nurse Mom And Grandma BB-250
                                                        </a>
                                                    </div>
                                                    <div class="item-product-price">
                                                        <div class="product-price-calrousel">
                                                            $25.99
                                                        </div>
                                                        <div class="product-price-cost-calrousel">
                                                            $41.99
                                                        </div>
                                                    </div>
                                                    <div class="item-product-add-to-cart">
                                                        <button class="product-add-cart">
                                                            <span>Add to cart</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-carousel">
                                            <div class="item-carousel-wrapper">
                                                <div class="product-item-img">
                                                    <a href="#">
                                                        <img src="./img/360x360@1605261357d0bdfef2e3123.png" class="img-item-carousel">
                                                    </a>
                                                </div>
                                                <div class="product-item-details">
                                                    <div class="item-product-name">
                                                        <a href="#">
                                                            Nurse Mom And Grandma BB-250
                                                        </a>
                                                    </div>
                                                    <div class="item-product-price">
                                                        <div class="product-price-calrousel">
                                                            $25.99
                                                        </div>
                                                        <div class="product-price-cost-calrousel">
                                                            $41.99
                                                        </div>
                                                    </div>
                                                    <div class="item-product-add-to-cart">
                                                        <button class="product-add-cart">
                                                            <span>Add to cart</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-carousel">
                                            <div class="item-carousel-wrapper">
                                                <div class="product-item-img">
                                                    <a href="#">
                                                        <img src="./img/360x360@1605261357d0bdfef2e3123.png" class="img-item-carousel">
                                                    </a>
                                                </div>
                                                <div class="product-item-details">
                                                    <div class="item-product-name">
                                                        <a href="#">
                                                            Nurse Mom And Grandma BB-250
                                                        </a>
                                                    </div>
                                                    <div class="item-product-price">
                                                        <div class="product-price-calrousel">
                                                            $25.99
                                                        </div>
                                                        <div class="product-price-cost-calrousel">
                                                            $41.99
                                                        </div>
                                                    </div>
                                                    <div class="item-product-add-to-cart">
                                                        <button class="product-add-cart">
                                                            <span>Add to cart</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-carousel">
                                            <div class="item-carousel-wrapper">
                                                <div class="product-item-img">
                                                    <a href="#">
                                                        <img src="./img/360x360@1605261357d0bdfef2e3123.png" class="img-item-carousel">
                                                    </a>
                                                </div>
                                                <div class="product-item-details">
                                                    <div class="item-product-name">
                                                        <a href="#">
                                                            Nurse Mom And Grandma BB-250
                                                        </a>
                                                    </div>
                                                    <div class="item-product-price">
                                                        <div class="product-price-calrousel">
                                                            $25.99
                                                        </div>
                                                        <div class="product-price-cost-calrousel">
                                                            $41.99
                                                        </div>
                                                    </div>
                                                    <div class="item-product-add-to-cart">
                                                        <button class="product-add-cart">
                                                            <span>Add to cart</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-carousel">
                                            <div class="item-carousel-wrapper">
                                                <div class="product-item-img">
                                                    <a href="#">
                                                        <img src="./img/360x360@1605261357d0bdfef2e3123.png" class="img-item-carousel">
                                                    </a>
                                                </div>
                                                <div class="product-item-details">
                                                    <div class="item-product-name">
                                                        <a href="#">
                                                            Nurse Mom And Grandma BB-250
                                                        </a>
                                                    </div>
                                                    <div class="item-product-price">
                                                        <div class="product-price-calrousel">
                                                            $25.99
                                                        </div>
                                                        <div class="product-price-cost-calrousel">
                                                            $41.99
                                                        </div>
                                                    </div>
                                                    <div class="item-product-add-to-cart">
                                                        <button class="product-add-cart">
                                                            <span>Add to cart</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-carousel">
                                            <div class="item-carousel-wrapper">
                                                <div class="product-item-img">
                                                    <a href="#">
                                                        <img src="./img/360x360@1605261357d0bdfef2e3123.png" class="img-item-carousel">
                                                    </a>
                                                </div>
                                                <div class="product-item-details">
                                                    <div class="item-product-name">
                                                        <a href="#">
                                                            Nurse Mom And Grandma BB-250
                                                        </a>
                                                    </div>
                                                    <div class="item-product-price">
                                                        <div class="product-price-calrousel">
                                                            $25.99
                                                        </div>
                                                        <div class="product-price-cost-calrousel">
                                                            $41.99
                                                        </div>
                                                    </div>
                                                    <div class="item-product-add-to-cart">
                                                        <button class="product-add-cart">
                                                            <span>Add to cart</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-carousel">
                                            <div class="item-carousel-wrapper">
                                                <div class="product-item-img">
                                                    <a href="#">
                                                        <img src="./img/360x360@1605261357d0bdfef2e3123.png" class="img-item-carousel">
                                                    </a>
                                                </div>
                                                <div class="product-item-details">
                                                    <div class="item-product-name">
                                                        <a href="#">
                                                            Nurse Mom And Grandma BB-250
                                                        </a>
                                                    </div>
                                                    <div class="item-product-price">
                                                        <div class="product-price-calrousel">
                                                            $25.99
                                                        </div>
                                                        <div class="product-price-cost-calrousel">
                                                            $41.99
                                                        </div>
                                                    </div>
                                                    <div class="item-product-add-to-cart">
                                                        <button class="product-add-cart">
                                                            <span>Add to cart</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-carousel">
                                            <div class="item-carousel-wrapper">
                                                <div class="product-item-img">
                                                    <a href="#">
                                                        <img src="./img/360x360@1605261357d0bdfef2e3123.png" class="img-item-carousel">
                                                    </a>
                                                </div>
                                                <div class="product-item-details">
                                                    <div class="item-product-name">
                                                        <a href="#">
                                                            Nurse Mom And Grandma BB-250
                                                        </a>
                                                    </div>
                                                    <div class="item-product-price">
                                                        <div class="product-price-calrousel">
                                                            $25.99
                                                        </div>
                                                        <div class="product-price-cost-calrousel">
                                                            $41.99
                                                        </div>
                                                    </div>
                                                    <div class="item-product-add-to-cart">
                                                        <button class="product-add-cart">
                                                            <span>Add to cart</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-carousel">
                                            <div class="item-carousel-wrapper">
                                                <div class="product-item-img">
                                                    <a href="#">
                                                        <img src="./img/360x360@1605261357d0bdfef2e3123.png" class="img-item-carousel">
                                                    </a>
                                                </div>
                                                <div class="product-item-details">
                                                    <div class="item-product-name">
                                                        <a href="#">
                                                            Nurse Mom And Grandma BB-250
                                                        </a>
                                                    </div>
                                                    <div class="item-product-price">
                                                        <div class="product-price-calrousel">
                                                            $25.99
                                                        </div>
                                                        <div class="product-price-cost-calrousel">
                                                            $41.99
                                                        </div>
                                                    </div>
                                                    <div class="item-product-add-to-cart">
                                                        <button class="product-add-cart">
                                                            <span>Add to cart</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-carousel">
                                            <div class="item-carousel-wrapper">
                                                <div class="product-item-img">
                                                    <a href="#">
                                                        <img src="./img/360x360@1605261357d0bdfef2e3123.png" class="img-item-carousel">
                                                    </a>
                                                </div>
                                                <div class="product-item-details">
                                                    <div class="item-product-name">
                                                        <a href="#">
                                                            Nurse Mom And Grandma BB-250
                                                        </a>
                                                    </div>
                                                    <div class="item-product-price">
                                                        <div class="product-price-calrousel">
                                                            $25.99
                                                        </div>
                                                        <div class="product-price-cost-calrousel">
                                                            $41.99
                                                        </div>
                                                    </div>
                                                    <div class="item-product-add-to-cart">
                                                        <button class="product-add-cart">
                                                            <span>Add to cart</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-carousel">
                                            <div class="item-carousel-wrapper">
                                                <div class="product-item-img">
                                                    <a href="#">
                                                        <img src="./img/360x360@1605261357d0bdfef2e3123.png" class="img-item-carousel">
                                                    </a>
                                                </div>
                                                <div class="product-item-details">
                                                    <div class="item-product-name">
                                                        <a href="#">
                                                            Nurse Mom And Grandma BB-250
                                                        </a>
                                                    </div>
                                                    <div class="item-product-price">
                                                        <div class="product-price-calrousel">
                                                            $25.99
                                                        </div>
                                                        <div class="product-price-cost-calrousel">
                                                            $41.99
                                                        </div>
                                                    </div>
                                                    <div class="item-product-add-to-cart">
                                                        <button class="product-add-cart">
                                                            <span>Add to cart</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-carousel">
                                            <div class="item-carousel-wrapper">
                                                <div class="product-item-img">
                                                    <a href="#">
                                                        <img src="./img/360x360@1605261357d0bdfef2e3123.png" class="img-item-carousel">
                                                    </a>
                                                </div>
                                                <div class="product-item-details">
                                                    <div class="item-product-name">
                                                        <a href="#">
                                                            Nurse Mom And Grandma BB-250
                                                        </a>
                                                    </div>
                                                    <div class="item-product-price">
                                                        <div class="product-price-calrousel">
                                                            $25.99
                                                        </div>
                                                        <div class="product-price-cost-calrousel">
                                                            $41.99
                                                        </div>
                                                    </div>
                                                    <div class="item-product-add-to-cart">
                                                        <button class="product-add-cart">
                                                            <span>Add to cart</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-carousel-navigation first"><button type="button" aria-label="Previous page" class="carousel-navigation-button carousel-navigation-prev carousel-navigation-disabled" style="padding: 0px; margin-right: 0px;"><svg class="svg-24" fill="#BCBCBC">
                                            <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"></path>
                                        </svg>
                                        <div class="overlay"></div>
                                    </button> <button type="button" class="carousel-navigation-button carousel-navigation-next" style="padding: 0px; margin-left: 0px;"><svg class="svg-24" fill="#BCBCBC">
                                            <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path>
                                        </svg>
                                        <div class="overlay"></div>
                                    </button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $('.product-detail').hover(function () {
                    var divParent = $(this).parent();
                    var targetElement = divParent.find('.cart');
                    targetElement.toggleClass('toggled');
                });
            </script>
        </div>
    </main>
 
<?php 
	include 'inc/footer.php';
	
 ?>
