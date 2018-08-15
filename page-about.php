<?php get_header(  ); ?>

<?php if(have_posts()):
        while( have_posts() ): the_post(); echo 'post format: '.get_post_format(); ?>
            <h1 style="color:orange;"><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>
            <hr>
    <?php
    endwhile;
endif;
?>

<?php get_footer(  ); ?>
 
