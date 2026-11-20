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
        function trailquest_shop_categories() {

            $exclude = array();

            $uncategorized = get_term_by(
                'slug',
                'uncategorized',
                'product_cat'
            );

            if ($uncategorized) {
                $exclude[] = $uncategorized->term_id;
            }

            $categories = get_terms(array(
                'taxonomy'   => 'product_cat',
                'hide_empty' => true,
                'exclude'    => $exclude,
            ));

            if (!empty($categories) && !is_wp_error($categories)) {

                echo '<div class="trailquest-category-nav">';

                foreach ($categories as $category) {

                    echo '<a href="' . esc_url(get_term_link($category)) . '">';
                    echo esc_html($category->name);
                    echo '</a>';

                }

                echo '</div>';
            }
        }

        add_action(
            'woocommerce_before_shop_loop',
            'trailquest_shop_categories',
            5
        );

    ?>


    <?php
    if ( function_exists('woocommerce_content') ) {
        woocommerce_content();
    }
    ?>

    

</main>

<?php
get_footer();
?>