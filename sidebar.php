<!-- Begin Sidebar -->
<div id="sidebar">
<div id="newsletter">
<div align="center"><p><a href="http://www.thehuntersmark.net/newsletter/"><img src="http://www.thehuntersmark.net/images/newsletter/newsletterad.png" alt="Subscribe to The Hunter's Mark Newsletter!" /></a></p></div>
</div>
<div id="subscribe">
	<a href="http://feeds.feedburner.com/TheHuntersMark"><img src="<?php bloginfo('template_directory'); ?>/images/rss.png" alt="Subscribe via RSS" width="300px" height="52px" border="0" /></a><br />
<a href="mailto:thehuntersmark@gmail.com"><img src="<?php bloginfo('template_directory'); ?>/images/email.png" alt="Ask The Hunter's Mark" width="300px" height="48px" border="0" /></a>
</div>
<div id="sidebar-ads">
<div align="center">
<a href="http://www.thehuntersmark.net/shop/"><img src="http://www.thehuntersmark.net/images/thmshop2.png" alt="The Hunter's Mark Shop" /></a>
</div></div>

<div id="sidebar-top"> 
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>
	<?php endif; ?>
</div>

</div>