<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
	<div class="sidebar-module sidebar-module-inset">
		<p><?php the_author_meta( 'description' ); ?> </p>
	</div>
	<div class="sidebar-module widget1">
		<h4>Archives</h4>
		<ol class="list-unstyled">
			<?php wp_get_archives('type=monthly'); ?>
		</ol>
	</div>
	<div class="clear_space_widget"></div>
	<div class="sidebar-module widget1">
		<h4>Connect with us</h4>
		<ol class="list-unstyled">
			<li><a href="<?php echo get_option('github'); ?>">Follow on twitter</a></li>
			<li><a href="<?php echo get_option('twitter'); ?>">Like on Facebook</a></li>
		</ol>
	</div>
</div><!-- /.blog-sidebar -->


