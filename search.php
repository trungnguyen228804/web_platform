
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
        <div id="seach-data" class="search-product-list">
            <?php
            include 'data-seach.php';
            ?>
        </div>
        <button id="load_more" class="search-load-more">
            load more
        </button>
    </div>
</section>
<?php
include 'inc/footer.php';
?>
<script>
    var is_busy = false;
    var page = 1;
    var record_per_page = 4;
    var stopped = false;
    $(document).ready(function ()
    {
        $('#load_more').click(function ()
        {
            $element = $('#seach-data');
            $button = $(this);
            if (is_busy == true) {
                return false;
            }
            page++;
            $button.html('Loading ...');
            $.ajax(
                    {
                        type: 'get',
                        dataType: 'text',
                        url: '/data-seach.php',
                        data: {page: page},
                        success: function (result)
                        {
                            $element.append(result);
                        }
                    })
                    .always(function ()
                    {
                        $button.html('load more');
                        is_busy = false;
                    });
        });
    });
</script>
