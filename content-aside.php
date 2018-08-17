 <article id="post-<?php the_ID(); ?>" <?php post_class(  ); ?>>

     <header class="entry-header">
              <?php  the_title(sprintf('<h1 ><a href="%s">',esc_url( get_permalink(  ) )),'</a></h1>'); ?>
      
        </header> 
        <small >Posted on: <?php the_time('F j, Y'); ?> in <?php the_category(); ?></small>
        <hr>
        <p>
        <?php if ( is_category() || is_archive() ) {
    the_excerpt();
} else {
    the_excerpt();
    
} ?>
</p>

    </article>