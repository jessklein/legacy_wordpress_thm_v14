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
					<img src="<?php bloginfo('template_directory'); ?>/images/tag_green.png" width="16" height="16" /> Tagged: <?php the_tags('', ', ', '<br/>'); ?>
				</div>
			</div>

		 

		 <div class="post-content">
			<div class="post-wrap">
		 <div class="tweet"><script type="text/javascript">
tweetmeme_source = 'thehuntersmark';
</script>
<script type="text/javascript" src="http://tweetmeme.com/i/scripts/button.js"> </script></div><?php the_content(); ?><div class="clear"></div></div>
<div class="post-foot"><div class="related"><?php $original_post = $post;
					$tags = wp_get_post_tags($post->ID);
					if ($tags) {
						echo '<p><strong>Related Posts</strong></p>';
						$first_tag = $tags[0]->term_id;
						$args=array(
							'tag__in' => array($first_tag),
							'post__not_in' => array($post->ID),
							'showposts'=>5,
							'caller_get_posts'=>1
						);
						$my_query = new WP_Query($args);
						if( $my_query->have_posts() ) {
							echo "<ul>";
							while ($my_query->have_posts()) : $my_query->the_post(); ?>
								<li><img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo get_post_meta($post->ID, "post-img", true); ?>&h=40&w=40&zc=1" align="left" alt="" /><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
							<?php endwhile;
							echo "</ul>";
						}
					}
					$post = $original_post;
					wp_reset_query(); ?></div>
			
<p class="post-info"><strong>Interact</strong><br /><br />If you enjoyed this post, you can <a href="http://massiveblips.dailyradar.com/post/" onclick="location.href='http://massiveblips.dailyradar.com/post/url/?url='+encodeURIComponent(location.href)+'&title='+encodeURIComponent(document.title);return false;">Vote it Up!</a> on <a href="http://massiveblips.dailyradar.com/">Massive Blips</a> so others can enjoy it as well. Don't forget to <a href="http://feeds.feedburner.com/TheHuntersMark">Subscribe to the RSS Feed</a> so you don't miss a single update!<br /><br />
You can also <a href="http://www.twitter.com/thehuntersmark">follow us on Twitter</a>, <a href="http://www.facebook.com/thehuntersmark">follow us on Facebook</a> or <a href="http://forums.thehuntersmark.net/">join us on the forums</a> to continue the discussion. If you have any questions or comments, you can <a href="mailto:thehuntersmark@gmail.com">send us an email</a>.
</p><div class="clear"></div></div>
<div class="clear"></div>
<?php wp_link_pages(array('before' => '<h3 class="pages"><strong>Post Pages:</strong> ', 'after' => '</h3>', 'next_or_number' => 'number')); ?>

<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>		 

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