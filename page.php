<?php get_header(); ?>

<main class="site-main trailquest-page container py-5">

    <?php
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
    ?>

</main>

<?php get_footer(); ?>