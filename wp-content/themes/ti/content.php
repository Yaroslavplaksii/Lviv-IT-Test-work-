<div class="content">
    <h1>Product Listings</h1>
    <?php
        $response = wp_remote_get('https://63d0d6303f08e4a8ff8afa7c.mockapi.io/Categories');
        if (is_wp_error($response)) {
            $errorCat = "Category list is empty!";
        } else {
            $allCategories = wp_remote_retrieve_body($response);
            $categories = json_decode($allCategories);
        }
    ?>
    <div class="button-block">
        <?php if ($error) { ?>
            <h2><?php echo $errorCat;?></h2>
        <?php } else {?>
            <span data-id="all" class="category-button active">ALL</span>
            <?php if(isset($categories) && count($categories)) {?>
                <?php foreach($categories as $category) {?>
                    <span data-id="<?php echo $category->id;?>" class="category-button"><?php echo $category->name;?></span>
                <?php }?>
            <?php }?>
        <?php }?>
    </div>
    <?php
        $response = wp_remote_get('https://63d0d6303f08e4a8ff8afa7c.mockapi.io/ProductList');
        if (is_wp_error($response)) {
            $error = "Product list is empty!";
        } else {
            $allProducts = wp_remote_retrieve_body($response);
            $products = json_decode($allProducts);
        }
    ?>
    <div class="product-list">
        <?php if ($error) { ?>
            <h2><?php echo $error;?></h2>
        <?php } else {?>
            <?php $count = 1;?>

            <?php foreach($products as $product) {?>
                <?php $date = date_parse_from_format("j.n.Y H:iP", $product->end_date);?>
                <div class="product-item" data-product="<?php echo $product->id;?>" data-category="<?php echo $product->category_id;?>">
                    <div class="product-data">
                        <a href="<?php  echo $product->image;?>" class="swipebox" title="Fog" rel="gallery">
                            <img src="<?php  echo $product->image;?>" alt="<?php echo $product->name;?>">
                        </a>
                        <h2><?php echo $product->name;?></h2>
                        <div class="product-info">
                            <div class="ico-cripto"></div>
                            <div class="price-block">$<?php echo $product->price;?></div>
                            <div class="number-product"><?php echo $count;?> of <?php echo count($products);?></div>
                        </div>
                        <div class="line"></div>
                        <div class="time"><?php echo $date['hour'] . 'h ' .  $date['minute'] . 'm ' .  $date['second']. 's';?></div>
                    </div>
                </div>
                <?php $count++;?>
            <?php }?>
        <?php }?>       
    </div>
    <div class="line-under-product"></div>
</div>