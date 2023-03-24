<?php foreach ($products as $key => $product) { ?>
    <div class="single-product-wrapper">
        <!-- Product Image -->
        <div class="product-img">
            <img src="<?= base_url('upload/products/') . $product->image ?>" alt="<?= $product->nama ?>">
            <!-- Hover Thumb -->
            <img class="hover-img" src="<?= base_url('upload/products/') . $product->image ?>" alt="<?= $product->nama ?>">
            <!-- Favourite -->
            <div class="product-favourite">
                <a href="#" class="favme fa fa-heart"></a>
            </div>
        </div>
        <!-- Product Description -->
        <div class="product-description">
            <span><?= $product->kategori ?></span>
            <a href="single-product-details.html">
                <h6><?= $product->nama ?></h6>
            </a>
            <p class="product-price">IDR <?= number_format($product->harga_jual) ?></p>

            <!-- Hover Content -->
            <div class="hover-content">
                <!-- Add to Cart -->
                <div class="add-to-cart-btn">
                    <a href="#" class="btn essence-btn">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>