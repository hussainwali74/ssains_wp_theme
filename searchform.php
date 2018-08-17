<form role="search" method="get" action =" <?php echo home_url( '/' ); ?>">
<div class="input-group inline-flex col-xs-12 mt12 mb24">
          <input type="search" placeholder="Search for term" class="inline" value="<?php echo get_search_query(); ?>" name="s" title="Search">
          <button type="submit" class="btn btn-secondary inline"><h5>Search</h5></button>
          <div class="clearfix"></div>
        </div>
</form>