<?php
// Theme Front Page Template
get_header(); ?>


<section id="slider-area">
    <div class="slider">
        <?php 
            query_posts('post_type=slider&post_status=publish&posts_per_page=3&order=ASC&paged='.get_query_var('post')); 
            
            if(have_posts()): 
                while(have_posts()):the_post();
            ?>
            <div>
                <?php echo the_post_thumbnail('slider');?>
            </div>
            <?php 
                endwhile; 
                endif;
            ?>
    </div>
</section>

<!-- <section id="slider-area">
    <div class="owl-carousel owl-theme">
        <div> Your Content </div>
        <div> Your Content </div>
        <div> Your Content </div>
        <div> Your Content </div>
        <div> Your Content </div>
        <div> Your Content </div>
        <div> Your Content </div>
    </div>
</section> -->
    <div id="homepage_post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php dynamic_sidebar('home-1'); ?>
                </div>
            </div>
        </div>
    </div>

<section id="service_area">
    <div class="container">
        <div class="row">
            <?php 
            query_posts('post_type=service&post_status=publish&posts_per_page=3&order=ASC&paged='.get_query_var('post')); 
            
            if(have_posts()): 
                while(have_posts()):the_post();
            ?>
            <div class="col-md-4">
                <h2><?php the_title();?></h2>
                <?php echo the_post_thumbnail('service');?>
                <?php the_excerpt();?>
                <a href="<?php the_permalink(); ?>" class="service-btn">Read More</a>
            </div>
            <?php 
                endwhile; 
                endif;
            ?>
        </div>
    </div>
</section>


<section id="service_area">
    <div class="container">
        <div class="row">
            <?php 
            query_posts('post_type=project&post_status=publish&posts_per_page=3&order=ASC&paged='.get_query_var('post')); 
            
            if(have_posts()): 
                while(have_posts()):the_post();
            ?>
            <div class="col-md-4">
                <h2><?php the_title();?></h2>
                <?php echo the_post_thumbnail('project');?>
                <?php the_excerpt();?>
                <a href="<?php the_permalink(); ?>" class="service-btn">Read More</a>
            </div>
            <?php 
                endwhile; 
                endif;
            ?>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?php print home_url()?>/project" class="service-btn">View All Projects</a>
            </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
<!-- Front Page Content Goes Here -->
 