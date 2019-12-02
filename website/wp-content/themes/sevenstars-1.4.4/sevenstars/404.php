<?php
	get_header();
?>

<?php
$content_class = 'col-md-12 col-sm-12';
?>


<!-- Start Content
================================================== -->
<section class="primary section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="<?php echo $content_class; ?>">
						<div class="content">
							
							<div class="row">
								<div class="col-md-6">
									<div class="not-found-container">
										<h1>404</h1>
										<p class="lead"><?php _e('Page Not Found', 'sevenstars'); ?></p>
									</div>
								</div>
								<div class="col-md-6">
									<h3><?php _e('Nothing Found', 'sevenstars'); ?></h3>
									<p><?php _e('Sorry, the post you are looking for is not available. Maybe you want to perform a search?', 'sevenstars'); ?></p>
									<?php get_search_form();?>
									<p><?php _e('For best search results, mind the following suggestions:', 'sevenstars'); ?></p>
									<ul class="borderlist-not">
								        <li><?php _e('Always double check your spelling.', 'sevenstars'); ?></li>
								        <li><?php _e('Try similar keywords, for example: tablet instead of laptop.', 'sevenstars'); ?></li>
								        <li><?php _e('Try using more than one keyword.', 'sevenstars'); ?></li>
								    </ul>
								</div>
							</div>

						</div>
						
					</div>
				</div>
		</div>
		</div>
	</div>
</section>
<!-- End Content
================================================== -->

<?php
	get_footer();
?>