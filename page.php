<?php get_header(); ?>



		 <!-- Begin Content -->

		 <div id="content">
<div class="post" style="font-size: 80%;"><div class="breadcrumb">
<?php if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb('<span id="breadcrumbs">','</span>');
} ?>
</div></div>
		 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>



		 <div class="post">

		 <div class="entrytop">
				<div class="authorimage">
					<?php the_author_image(); ?>
				</div>
				<div class="title">
					<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
				</div>
				<div class="date">
					<img src="<?php bloginfo('template_directory'); ?>/images/calendar_view_day.png" width="16" height="16"  /> Published on <?php the_time('F d, Y') ?>
				</div>
				<div class="postauth">
					<img src="<?php bloginfo('template_directory'); ?>/images/user_green.png" width="16" height="16" /> Posted by <strong><?php if (function_exists('author_exposed')){author_exposed();} ?></strong>
				</div>
				<div class="postcats">
					<img src="<?php bloginfo('template_directory'); ?>/images/categories.png" width="16" height="16" /> Filed in <?php the_category(', '); ?>
				</div>
				<div class="postcoms">
					<p>&nbsp;</p>
				</div>
			</div>

		 

		 <div class="post-content">

		 
<div class="post-wrap">
		 <?php the_content(); ?>
</div>


<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>



<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>



<p class="post-info">Posted <?php the_time('F j, Y'); ?> by <?php the_author(); ?></p>

		 

<?php comments_template(); ?>

		 </div>

		 </div>



<?php endwhile;  else : ?>



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
