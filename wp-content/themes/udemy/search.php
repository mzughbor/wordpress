<?php get_header( ); ?>

<!-- Page Title
  ============================================= -->
  <section id="page-title">
    <div class="container clearfix">
      <h1><!-- <php e_('Search Results for:','udemy');?> -->
      <?php the_search_query(); ?></h1>
    </div>
    
  </section><!-- #page-title end -->
 
<!-- Content
  ============================================= -->
  <section id="content">

    <div class="content-wrap">

      <div class="container clearfix">

<!-- Post Content
  ============================================= -->
  <div class="postcontent nobottommargin clearfix">

  <?php
  
  // echo get_search_link( 'Hell' );  
  // echo '<br>';
  // the_search_query(); 

  ?>

  <!-- Search Box
    ============================================= -->
    <div class="col_full card">
      <div class="card-header"><?php _e('What are you searhing for today?','udemy')?>
      </div>
      <div class="card-body">
      <?php get_search_form(); ?>
        <!-- <form action="#" method="get" role="form" class="nobottommargin">
          <div class="input-group input-group-lg">
            <input type="text" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button class="btn btn-danger" type="button">Search</button>
            </span>
          </div>
        </form> -->
      </div>
    </div>
    <!-- Search Box End -->


<!-- Posts
  ============================================= -->
  <div id="posts">

    <?php 
    if (have_posts()){
      while (have_posts()) {
          # code...
        the_post();

        get_template_part('partials/post/content-excerpt');
      }
    }
    ?>

  </div><!-- #posts end -->

<!-- Pagination
  ============================================= -->
  <div class="row mb-3">
    <div class="col-12">
      <?php   
      next_post_link('&larr; Older' );
      previous_post_link('Newer &rarr;' );
      ?> 
      <!--<a href="#" class="btn btn-outline-secondary float-left">
        
      </a>
      <a href="#" class="btn btn-outline-dark float-right">
        
      </a>-->
    </div>
  </div>
  <!-- .pager end -->

</div><!-- .postcontent end -->

<?php  get_sidebar(); ?> 

</div>

</div>

</section><!-- #content end -->

<?php get_footer(); ?>