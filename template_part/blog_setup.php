<?php
        if ( have_posts()) :
          while ( have_posts()) : the_post();
        ?>
      <div class="blog_area">
        <div class="post_thumb">
          <a href="<?php the_permalink();?>"><?php echo the_post_thumbnail('post-thumbnails'); ?></a>
        </div>
        <div class="post_details">
          <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
          <p><i class="fas fa-calendar-alt"></i><?php the_time('M j, Y'); ?>
          <span>At</span> <i class="fas fa-clock"></i> <?php echo the_time('g:i a');?> </p>
            <?php the_excerpt(); ?>
        </div>
    
      </div>
        <?php
        endwhile;
        else:
          _e( "No Post Fund","itzone360");
        endif;
        ?>
        <div id="page_nav">
          <?php it_pagenaviation(); ?>
          <?php if('it_pagenaviation') {it_pagenaviation(); } else{ ?>
            <?php next_post_link();?>
            <?php previous_post_link();?>
            <?php }?>
        </div>