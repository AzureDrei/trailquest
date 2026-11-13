<?php get_header(); ?>

     <?php get_template_part('template-parts/home/hero'); ?>

     <?php get_template_part('template-parts/home/about'); ?>

     
    
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

<?php get_footer(); ?>