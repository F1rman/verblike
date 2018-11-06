<?php get_header(); ?>

<?php
	while ( have_posts() ) : the_post();
?>



<header class="archive-header" style="background: transparent url(<?php echo wp_is_mobile()?get_the_post_thumbnail_url($post->ID, 'medium'):get_the_post_thumbnail_url($post->ID, 'large'); ?>) repeat scroll center center/cover;">
  <div class="cover-container row">
    <div class="inner cover col-md-12">
      <h1 class="cover-heading" itemprop="name headline"><a href="https://vadagon.com/"><?php the_title(); ?></a></h1>
      <time class="dt-published lead" datetime="<?php the_date_xml(); ?>" itemprop="datePublished">
        <?php the_date(); ?>
      </time>
    </div>
  </div>
</header>
<article itemscope itemtype="http://schema.org/BlogPosting">
  <div class="container blog">
    <div class="item row">
      <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">   
        <div class="content">
          <div class="post-content" itemprop="articleBody">
            <?php the_content(); ?>
          </div>
          <!-- comments -->
        </div>
      </div>
    </div>
  </div>
</article>


<?php
	endwhile;
?>

<?php get_footer(); ?>