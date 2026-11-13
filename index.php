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
    
    <div class="p-4 card-group">
        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();
                    get_template_part('template-parts/post');
                }
            }
        ?>
    </div>

</main>

<?php get_footer(); ?>