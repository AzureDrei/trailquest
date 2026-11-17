<?php
get_header();
?>

<main class="trailquest-single-product container py-5">

    <?php
    if ( function_exists('woocommerce_content') ) {
        woocommerce_content();
    }
    ?>

</main>

<?php
get_footer();
?>