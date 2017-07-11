<?php get_header(); ?>



		 <!-- Begin Content -->

		 <div id="content">

		 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>



		 <div class="post">
<div class="thumbnail"><?php $postimageurl = get_post_meta($post->ID, 'post-img', true);
if ($postimageurl) {
?>
      <a href="<?php the_permalink(); ?>" rel="bookmark"><img src="<?php echo $postimageurl; ?>" alt="Post Pic" width="150" height="150" /></a>
<?php } else { ?>
      <a href="<?php the_permalink(); ?>" rel="bookmark"><img src="<?php bloginfo('template_url'); ?>/images/default.gif" alt="Screenshot" width="150" height="150" /></a>
<?php } ?></div>

				<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		 <div class="post-content">

		 <?php the_excerpt(); ?>

		 <div class="clear"></div>

		 </div>

		 </div>



<?php endwhile; ?>



<div class="pagination">

<?php if(function_exists('wp_page_numbers')) { wp_page_numbers(); } ?>

</div>



<?php else : ?>



<div class="post">

<div class="post-heading"><h2>Not Found</h2></div>

		 

		 <div class="post-content">

<p>Sorry, but you're looking for something that isn't here.</p>



</div>

</div>



<?php endif; ?>



		 

		 

		 </div>

		 <!-- End Content -->



<?php get_sidebar(); ?>

<?php get_footer(); ?>
