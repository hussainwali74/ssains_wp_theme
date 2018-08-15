 <article id="post-<?php the_ID(); ?>" <?php post_class(  ); ?>>

     <header class="entry-header">
                 <span style="color:red;">this is the posts</span>
             <?php  the_title(sprintf('<h1 ><a href="%s">',esc_url( get_permalink(  ) )),'</a></h1>'); ?>
      
        </header> 
        <small style="color:white;">Posted on: <?php the_time('F j, Y'); ?> in <?php the_category(); ?></small>
        <hr>
    </article>