<?php

if (!function_exists('wc_get_products')) {
    return;
}

$featured_products = wc_get_products(array(
    'status'   => 'publish',
    'featured' => true,
    'limit'    => 3,
));

?>

<section class="featured-products-section">
    <div class="container">
        <div class="featured-products-header">
            <div>
                <span class="featured-products-subtitle">
                    GEAR FOR THE JOURNEY
                </span>
                <h2>Explore Our Essentials</h2>
                <p>
                    Everything you need for your next adventure.
                </p>
            </div>

            <a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>"
               class="featured-products-link">
                View All Gear →
            </a>
        </div>

        <?php if (!empty($featured_products)) : ?>
            <div class="row g-4">
                <?php foreach ($featured_products as $product) : ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="featured-product-card">
                            <a href="<?php echo esc_url($product->get_permalink()); ?>">
                                <?php echo $product->get_image('woocommerce_thumbnail'); ?>
                            </a>
                            <div class="featured-product-info">
                                <h3>
                                    <a href="<?php echo esc_url($product->get_permalink()); ?>">
                                        <?php echo esc_html($product->get_name()); ?>
                                    </a>
                                </h3>
                                <span class="featured-product-price">
                                    <?php echo wp_kses_post($product->get_price_html()); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else : ?>

            <p>No featured products available yet.</p>

        <?php endif; ?>

    </div>
</section>