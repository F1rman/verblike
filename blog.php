<?php /* Template Name: Blog Feed */ ?>

<?php get_header(); ?>


<header class="archive-header" style="background: transparent url(<?php echo get_the_post_thumbnail_url($post->ID); ?>) repeat scroll center center/cover;">
  <div class="cover-container row">
    <div class="inner cover col-md-12">
      <h1 class="cover-heading" itemprop="name headline"><a href="https://vadagon.com/"><?php the_title(); ?></a></h1>
    </div>
  </div>
</header>
<div class="container blog">
	<div class="item row" style="padding-bottom: 80px;">
	  <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">   
	    <div class="content">
	      <div class="post-content">

	       <?php 
				$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1));
				if ( $wpb_all_query->have_posts() ) : 
				while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post();
			?>
	          <div data-sr="ease-in-out wait 0.25s" class="col-md-4 col-sm-6 col-xs-12 blog-item">
	            <div class="item">
	              <a class="item-featured-image" href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url($post->ID, 'small'); ?>" class="attachment-latte-blogposts size-latte-blogposts wp-post-image"/></a>
	              <div class="item-meta">
	                <h3 class="post-title">
	                  <a class="post-link" href="<?php the_permalink(); ?>">
	                    <?php the_title() ?>
	                  </a>
	                </h3>
	                <span class="post-meta"><?php the_date(); ?></span>
	              </div>
	            </div>
	          </div>



	            
	            <?php
	            	endwhile;
	            	wp_reset_postdata();
	            	endif;
	        	?>
	      </div>
	      <!-- comments -->
	    </div>
	  </div>
	</div>
</div>

<?php get_template_part( 'latte' ); ?>

<?php get_footer(); ?>