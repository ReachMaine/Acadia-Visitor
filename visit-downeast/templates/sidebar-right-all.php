<?php /*
	29Apr15 zig - add side bar for ad. */ ?>
	<?php if (is_active_sidebar('rightad')) { ?>
	<aside class="sidebar adspace">
    	<ul class="sidebarad">
	        <div id="rightad" >
	            <?php dynamic_sidebar('rightad'); ?>
	        </div>
		</ul>
	</aside>
    <?php } ?>