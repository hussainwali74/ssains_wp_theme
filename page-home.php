<?php get_header(  ); ?>
<div class="bg-yellow">
<div class="space-divider"></div>

  <section>
      <h2 class="blue mt24 p24">See what's new in the insurance world</h2>
  </section>
<div class="space-divider"></div>

</div>

<section id="updates" class="p12" style="margin-top:-84px;">  
  <?php 
  $args = array( 'category_name' => 'blog' ); 
  $postslist = get_posts( $args );    
  foreach ($postslist as $post) :  setup_postdata($post);   ?>    
    <a class="col-md-3 col-xs-6 pb24 pt24 blog-post"  href="<?php echo esc_url(get_permalink()); ?>">
      <div class="card" style="overflow:hidden;">
        <div class="card-top p24" style="background-image: url('<?php   echo the_post_thumbnail_url(  ); ?>');"> 
        </div>
        <div class="p12">
          <p class="left-align mb12"><?php echo the_title();  ?></p>
          <div class="semibold blue">See more <i class="material-icons">arrow_right_alt</i></div>
        </div>
      </div>
    </a>
    <?php        
  endforeach;    
  ?> 
  <div class="clearfix"></div>
  <div class="space-divider"></div>
  <!--
  PAGINATION LINKS HERE
  -->
  
  <!-- 
  PAGINATION HERE  
  <ul class="pagination p12">
      <li>
        <a href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li>
        <a href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul> -->

</section>  

  
<?php  
  wp_reset_postdata(); 
  get_footer(  );
?>