 
 <h3> iMAGE pOST:
    <?php  the_title(); ?>
 </h3> 
 <div class="thumbnail-img">
    <?php the_post_thumbnail( 'thumbnail' ); ?>
 </div>
 <hr>
 <p>
     <?php if ( is_category() || is_archive() ) {
    the_excerpt();
} else {
    the_content();
} ?>
</p>