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

		 <div class="post-heading"><h2><?php if (function_exists('get_cat_icon')) get_cat_icon(); ?><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></div>

		 

		 <div class="post-content">

		 

		 <?php the_excerpt(); ?>



<p class="post-info"><?php the_tags('Tags: ', ', ', '<br/>'); ?>Posted <?php the_time('F j, Y'); ?> by <?php the_author(); ?> under <?php the_category(', ') ?></p>

		 

		 <div class="comments"><a href="<?php comments_link(); ?>"><?php comments_number('No Comments','1 Comment','% Comments'); ?></a></div>

		 <div class="clear"></div>

		 </div>

		 </div>



<?php endwhile; ?>



<div class="pagination">

<div class="alignleft"><?php if(function_exists('wp_page_numbers')) { wp_page_numbers(); } ?></div>

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