<?php
// The template for displaying Image

get_header();?>




<section id="body_area">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php get_template_part( 'template_part/post_setup'); ?>
        <!-- <?php var_export($post); ?> -->
         <img src="<?php echo esc_url($post->guid); ?>" alt="<?php echo esc_attr(get_the_title());?>" class="img-responsive">
        <div id="comments_area">
            <?php if(comments_open()): ?>
              <?php comments_template(); ?>
            <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3 style="color:red" >Template:image.php</h3>
    </div>
  </div>
</div>

<?php get_footer(); ?>