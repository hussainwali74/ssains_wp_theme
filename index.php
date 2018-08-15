<?php get_header(); ?>


<div class="bg-yellow">
  <div class="space-divider"></div>

  <section>
    <div class="col-md-6 p24">
      <h1 class="left-align mt24">Learn about life insurance</h1>
      <p>Our extensive guides have all you need to get started</p>

        <div class="input-group inline-flex col-xs-12 mt12 mb24">
          <input type="text" placeholder="Search for term" class="inline">

          <button class="btn btn-secondary inline"><h5>Search</h5></button>
          <div class="clearfix"></div>

        </div>
    </div>

    <div class="col-md-6 p24 right-align hidden-xs hidden-sm">
      <img class="landing-img" src=<?php echo get_template_directory_uri()."/images/illustrations/category-life.png"; ?> style="max-width: 270px" alt="illustration travel insurance">
    </div>
    <div class="clearfix"></div>

  </section>

  <div class="clearfix"></div>

  <div class="space-divider"></div>

</div>

<div class="clearfix"></div>
<section id="guides" class="p24 card" style="margin-top:-84px;">
    <?php if(have_posts()) :
        while (have_posts()): the_post();
        get_template_part( 'content', get_post_format(  ) );//e.g., content-aside if aside is the post format
        ?>  

 <?php        
        endwhile;
    endif;
    ?>
    </section>

<?php get_footer(); ?>
