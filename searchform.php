<form method="get" id="searchform" class="left" action="<?php bloginfo('url'); ?>/">
<div>
<input type="text" value="Search the archive..." value="<?php the_search_query(); ?>" name="s" id="s" onfocus="this.value=''" title="Enter the terms you wish to search for." /><input type="image" src="<?php bloginfo('template_directory'); ?>/images/magnify.gif" id="searchsubmit" />

</div>
</form>