<?php get_header(); ?>

<?php 
$page_name = "Life";
include(locate_template('template-search.php')); 
 ?>

<div class="clearfix"></div>
<section id="guides" class="p24 card" style="margin-top:-84px;">
    <?php if(have_posts()) :
        while (have_posts()): the_post();
        get_template_part( 'content' );//e.g., content-aside if aside is the post format
    ?>  
   <?php        
        endwhile;
        ?> 
    <!-- pagination links -->
    <div class="col-md-6 col-sm-6 col-xs-12 pb24 left-align">
      <?php next_posts_link( '<< Older Posts' ); ?>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12 pb24 right-align">
      <?php previous_posts_link( '<< Newer Posts' ); ?>
    </div>  
    <!-- <a href="<?php //echo esc_url( get_permalink() ); ?>" class=' col-xs-12 p12'>
                <p class='semibold'>
                <?php 
                //echo the_title();?>
                </p>
                <div class="semibold blue">View <i class="material-icons">arrow_right_alt</i></div>
              </a>
    </div>  -->

    <?php
    endif;
    ?>

  <div class="clearfix"></div>
  <div class="space-divider"></div>
</section>

<?php get_footer(); ?>
