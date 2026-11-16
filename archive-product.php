<?php
get_header();
?>

<main class="trailquest-shop container py-5">

    <div class="shop-header mb-5">
        <span class="shop-eyebrow">EXPLORE THE OUTDOORS</span>

        <h1 class="shop-title">
            Adventure Essentials
        </h1>

        <p class="shop-description">
            Discover carefully selected gear for your next adventure.
        </p>
    </div>

    <?php
    if ( function_exists('woocommerce_content') ) {
        woocommerce_content();
    }
    ?>

</main>

<?php
get_footer();
?>