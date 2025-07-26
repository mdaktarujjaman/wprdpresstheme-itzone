<!-- For desplaing 404 page -->

<?php get_header(); ?>

<div id="not_found_area">
  <div class="container">
    <h1>404</h1>
    <h2>Oops! Page Not Found</h2>
    <p>The page you're looking for doesn't exist or has been moved.</p>

    <!-- Search Form -->
    <div class="search_box_404">
      <?php get_search_form(); ?>
    </div>

    <a class="back_home_btn" href="<?php echo home_url(); ?>">← Go Back to Homepage</a>
  </div>
</div>

<?php get_footer(); ?>
