<?php get_header( ); ?>

<!-- Page Title
  ============================================= -->
  <section id="page-title">

    <div class="container clearfix">
      <h2>SPECIAL CATEGORY PAGE</h2>
      <h1><?php the_archive_title(); ?></h1>
      <span><?php the_archive_description(); ?></span>
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