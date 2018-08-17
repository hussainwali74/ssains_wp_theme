<?php get_header(  ); ?>
<?php 
$page_name = "Travel";
include(locate_template('template-search.php')); 
 ?>
<section id="guides" class="p24 card" style="margin-top:-84px;"> 
  <?php
    $categoryy = get_cat_ID( 'travel' ); //for getting subcategories of travel, get the cat's id
    //getting subcategories 
    $args = array('child_of' => $categoryy);
    $sub_categories = get_categories( $args );
    foreach($sub_categories as $sub_category) { 
      // get posts of each subcategory
      $sub_cat_id = $sub_category->term_id;
      // $subcat_posts = get_posts('cat=' . $subcat->cat_ID);
      ?>
      <h3 class="mb24 pb12 pt24 col-xs-12 line-bottom semibold">
        <?php echo $sub_category->name; ?>
      </h3>
    <?php
     //all posts of a sub category
      $sub_cat_posts = get_posts('cat='.$sub_cat_id);
      foreach($sub_cat_posts as $sub_cat_post):
        $sub_post_id = $sub_cat_post->ID; //id of the post of the sub category 
    ?>
    <div class="col-md-4 col-sm-6 col-xs-12 pb24">
      <a href="<?php echo esc_url( get_the_permalink($sub_post_id) ); ?>" class=' col-xs-12 p12'>
        <p class='semibold'>
          <?php 
          echo get_the_title($sub_post_id);?>
        </p>
        <div class="semibold blue">View <i class="material-icons">arrow_right_alt</i></div>
      </a>
    </div> 
    <?php 
      endforeach; 
    }
    ?>
    <div class="clearfix"></div>
    <div class="space-divider"></div>
  </section>   
<?php  
  wp_reset_postdata(); 
  get_footer(  );
?>