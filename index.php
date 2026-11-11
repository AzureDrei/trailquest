<?php get_header(); ?>

<main class="site-main">

    <section class="hero">
        <div class="container">
            <h1>Explore the Great Outdoors</h1>
            <p>
                Discover breathtaking trails
                and unforgettable adventures.
            </p>
        </div>
    </section>
 
    <?php
        if(have_posts()){
            while(have_posts()){
                the_post();
                ?>
                    <h1><?php the_title()?></h1>
                    <p><?php the_excerpt()?></p>
                    <p><a href="<?php the_permalink()?>">read more..</a></p>
                <?php
            }
        }

    ?>


</main>

<?php get_footer(); ?>