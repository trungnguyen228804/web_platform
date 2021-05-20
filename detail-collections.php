<?php 
	include 'inc/head.php';
	include 'inc/header.php';
?>

<?php
    if(!isset($_GET['catid']) || $_GET['catid']==NULL){
       echo "<script>window.location ='404.php'</script>";
    }else{
        $id = $_GET['catid']; 
    }
    
    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //     $catName = $_POST['catName'];
    //     $updateCat = $cat->update_category($catName,$id);
        
    // }
?>

<section id="detail-collectios" >
            <div class="container">
                <?php
             $name_cat = $cat->getcatbyId($id);
             if($name_cat){
                while($result_name = $name_cat->fetch_assoc()){
                ?>
                <div class="breadcrumb">
                    <span><a href="">HOME</a>/</span>
                    <span><?php echo $result_name['category_name'] ?></span>
                </div>
                <div class="row">
                    <div class="title-collectios"> 
                        <div style="text-align: center;margin-bottom: 10px;"><h3><?php echo $result_name['category_name'] ?></h3></div>
                        <div class="sort-by">
                            <div>Sort by</div>
                            <div class="select">
                                <div class="select-box">
                                    <select name="product" id="colectios" onchange="show_sort(this.value)">
                                        <option value="name-by-asc">Alphabet, A -> Z</option>
                                        <option value="name-by-desc">Alphabet, Z -> A</option>
                                        <option value="price-by-asc">Price, Low to high</option>
                                        <option value="price-by-desc">Price, High to low</option>
                                    </select>
                                    <i class="select-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
                }
            }
                ?>
                
                <div class="collectios-product-list">

                        <?php
                         $productbycat = $cat->get_product_by_cat($id);
                         if($productbycat){
                            while($result = $productbycat->fetch_assoc()){
                        ?>  
                        <a href="details.php?pro_id=<?php echo $result['product_id'] ?>" class="collectios-product-item">
                        <div class="collectios-product-item-image-out">
                            <div class="collectios-product-item-image">
                                <img src="admin/uploads/<?php echo $result['product_image_url'] ?>" alt="<?php echo $result['product_name'] ?>" class="contrast">
                            </div>
                        </div>  
                        <div class="collectios-product-info">
                            <p><?php echo $result['product_name'] ?></p>
                            <div class="collectios-product-price-out">
                                <span class="collectios-product-price">$<?php echo $result['product_price_sale']  ?></span>
                                <span class="collectios-product-price-old">$<?php echo $result['product_price_cost']  ?></span>
                            </div>
                        </div>
                        <div class="collectios-product-sale">

                            </div>
                        </a>

                        <?php
                        }

                    }else{
                        echo 'Current this category haven not product! ';
                    }
                        ?>
            </div>
        </section>

        <script type="text/javascript">
            
            function show_sort(str) {
                  if (str == "") {
                    document.querySelector(".collectios-product-list").innerHTML = "";
                    return;
                  } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                      if (this.readyState == 4 && this.status == 200) {
                        document.querySelector(".collectios-product-list").innerHTML = this.responseText;
                      }
                    };
                    xmlhttp.open("GET","show_sort.php?q="+str,true);
                    xmlhttp.send();
                  }
                }
        </script>
<?php 
	include 'inc/footer.php';
	
 ?>
