<?php 
get_header( );
?>
<div class="page-top">
  <section>
    <div class="col-md-4 hidden-xs hidden-sm"></div>
    <div class="col-md-8">
      <div class="semibold inline">
        <ol class="breadcrumb mr12">
          <li><a href="#">Home</a></li> <!-- display category -->
          <li><a href="#">Library</a></li> <!-- display sub_category -->
          <li class="active">Data</li>
        </ol>
      </div>
      |
      <div class="inline ml12">24 April 2018</div> <!-- display sub_category -->
<?php
    if(have_posts()):
        while(have_posts() ): the_post(); 
            ?>
            <?php the_title( '<h1 class="left-align">', '</h1>' ); ?> <!-- display Blog_title -->
            <?php
        endwhile;
    endif; 
    ?>
    </div>
  </section>
</div>
<section class="content p12">

  <div class="space-divider"></div>


  <div class="col-md-4 sidebar">

    <div class="card index mb24">
      <p class="semibold mb12">Content</p>
      <ul>
        <li><a href="#sub-heading-1"  class="active">Sub heading 1 link</a></li>
        <li><a href="#sub-heading-2">Sub heading 2 link</a></li>
        <li><a href="#sub-heading-3">Green beans</a></li>
      </ul>
    </div>

    <div class="clearfix"></div>

    <div id="social-static-side-bar" class="hidden-xs hidden-sm">
      <div class="mr12 inline semibold">Share:</div>
      <a class="item">
        <span id="facebook-share-btn" class="fa fa-facebook"></span>
      </a>
      <a href="http://twitter.com/share?url=Request::url()&text=" target="_blank" class="item">
        <span class="fa fa-twitter">
        </a>
        <a href="mailto:?subject=easyinsurance&body=Hey I ran into this blog that I thought you might like. http://127.0.0.1:8000/learnmore/insurancekahaani/8" class="item">
          <span class="fa fa-envelope"></span>
        </a>
      </div>

    </div>

    <div class="col-md-8">
            <?php
            if(have_posts()):
                while(have_posts() ): the_post(); 
                      the_content();  // display Blog Content 
                endwhile;
            endif; 
            ?>
    </div>
    <div class="clearfix"></div>

    <div id="social-static-side-bar" class="visible-xs visible-sm mt24 p12">
      <div class="mr12 inline semibold">Share:</div>
      <a class="item">
        <span id="facebook-share-btn" class="fa fa-facebook"></span>
      </a>
      <a href="http://twitter.com/share?url=Request::url()&text=" target="_blank" class="item">
        <span class="fa fa-twitter">
        </a>
        <a href="mailto:?subject=easyinsurance&body=Hey I ran into this blog that I thought you might like. http://127.0.0.1:8000/learnmore/insurancekahaani/8" class="item">
          <span class="fa fa-envelope"></span>
        </a>
    </div>


  </section>
  <div class="clearfix"></div>

  <div class="space-divider"></div>



  <div class="bg-green col-xs-12 p24">
    <section class=" banner">
      <div class="col-md-2 hidden-sm hidden-xs"></div>
      <h3 class="right-align col-xs-8 col-md-6 pl0">Compare & Buy plans online from the top insurance companies of Pakistan</h3>
      <h5 class="p8 pl12 col-xs-4"><a class="btn  btn-primary" href="/compare">See plans</a></h5>
    </section>
  </div>

  <div class="col-xs-12">

    <section>

      <div class="clearfix"></div>
      <div class="space-divider"></div>


      <section id="updates">

        <h2 class="">
          Read more related articles
        </h2>

        <a class="col-md-3 col-xs-6 pb24 pt24 blog-post"  href="/blog-post-test">
          <div class="card" style="overflow:hidden;">
            <div class="card-top p24" style="background-image: url(/images/updates/efu-contract.jpg);">
            </div>
            <div class="p12">
              <p class="left-align mb12">Contract signing with EFU Life Insurance</p>
              <div class="semibold blue">See more <i class="material-icons">arrow_right_alt</i></div>
            </div>
          </div>
        </a>

        <a class="col-md-3 col-xs-6 pb24 pt24 blog-post" href="/blog-post-test">
          <div class="card" style="overflow:hidden;">
            <div class="card-top p24" style="background-image: url(/images/updates/pasha-deal.png);">
            </div>
            <div class="p12">
              <p class="left-align mb12">Exclusive group health deal for P@SHA member companies</p>
              <div class="semibold blue">See more <i class="material-icons">arrow_right_alt</i></div>
            </div>
          </div>
        </a>

        <a class="col-md-3 col-xs-6 pb24 pt24 blog-post"  href="/blog-post-test">
          <div class="card" style="overflow:hidden;">
            <div class="card-top p24" style="background-image: url(/images/updates/1776.jpg);">
            </div>
            <div class="p12">
              <p class="left-align mb12">easyinsurance wins the regional stage of 1776 Challenge Cup by Invest2Innovate</p>
              <div class="semibold blue">See more <i class="material-icons">arrow_right_alt</i></div>
            </div>
          </div>
        </a>

        <a class="col-md-3 col-xs-6 pb24 pt24 blog-post"  href="/blog-post-test">
          <div class="card" style="overflow:hidden;">
            <div class="card-top p24" style="background-image: url(/images/updates/1776.jpg);">
            </div>
            <div class="p12">
              <p class="left-align mb12">easyinsurance wins the regional stage of 1776 Challenge Cup by Invest2Innovate</p>
              <div class="semibold blue">See more <i class="material-icons">arrow_right_alt</i></div>
            </div>
          </div>
        </a>

      </section>


      <div class="clearfix"></div>
      <div class="space-divider"></div>

      <div class="col-xs-12">
        <div style="padding: 16px; margin-bottom:32px;" id="disqus_thread" class="col-md-8 col-md-offset-2 col-xs-12"></div>
      </div>





      <script>

      /**
      *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
      *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

      var disqus_config = function () {
        this.page.url = "Request::url()";  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = "Request::url()"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
      };

      (function() { // DON'T EDIT BELOW THIS LINE
      var d = document, s = d.createElement('script');
      s.src = 'https://easy-insurance.disqus.com/embed.js';
      s.setAttribute('data-timestamp', +new Date());
      (d.head || d.body).appendChild(s);
    })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


    <div class="clearfix"></div>


  </section>

</div>
<?php get_footer(  ); ?>