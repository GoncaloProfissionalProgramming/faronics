<?php
	get_header();

	global $smof_data;
?>

<?php while ( have_posts() ) : the_post(); ?>
<!-- Start Title Section
================================================== -->
<section class="page-title section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-post-title">
					<h1><?php the_title(); ?></h1>
					<ul class="entry-meta list-inline">
					    <li itemprop="datePublished" class="meta-date"><?php echo date_i18n(get_option('date_format'), strtotime(get_the_date())); ?></li>
					    <li itemprop="author" class="meta-author"><?php echo __("BY ", 'sevenstars') . get_author_posts_link(); ?></li>
					    <li itemprop="keywords" class="meta-category"><?php echo __('In', 'sevenstars').' '.get_the_category_list(', '); ?></li>
					    <li itemprop="comment" class="meta-comment"><?php echo comment_count_text(); ?></li>
					    <li class="meta-like pulse"><?php echo get_post_like(get_the_ID()); ?></li>
					    <?php
					    	$tags_list = get_the_tag_list('', ' '); 
					    	if ($tags_list) {
					    		echo '<li itemprop="keywords" class="meta-tag">';
					    		_e('Tagged: ', 'sevenstars');
					    		printf('%2$s', '', $tags_list);
					    		echo '</li>';
					    	}
					    ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ================================================== 
End Title -->


<!-- Start Content
================================================== -->
<section class="primary section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-9">
						<div id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>
							
							<div class="row">
								<div class="col-md-12 single-content fit-video">
									<?php
									if ( isset($smof_data['show_post_format']) && $smof_data['show_post_format'] == '1') :
										$post_format = get_post_format();
										if( in_array($post_format, array('video', 'audio', 'gallery', 'image', 'quote')) ){
											echo call_user_func('blox_format_'. $post_format);
										}
									endif; //post format

									the_content();

									// WP pages
                                    wp_link_pages(array(
                                        'before' => '<div class="page-link"><span>' . __('Pages:', 'sevenstars') . '</span>',
                                        'after' => '</div>',
                                        'link_before' => '<span>',
                                        'link_after' => '</span>'
                                    ));

                                    if (isset($smof_data['share_visibility']['share_posts']) && $smof_data['share_visibility']['share_posts'] == 1)
                                        social_share();
                                    ?>
								</div>
							</div>

							<!-- Post Author -->
							<?php if (isset($smof_data['post_author']) && $smof_data['post_author'] == 1): ?>
							<div class="row">
								<div class="col-md-12">
									<?php about_author(); ?>
								</div>
							</div>
							<?php endif; ?>
							
							<?php 
							// Related Posts
							if (isset($smof_data['related_posts']) && $smof_data['related_posts'] == 1):
								tt_related_posts();
							endif;
							?>
							
							<?php 
							
							// Post Comment 
							if (isset($smof_data['post_comment']) && $smof_data['post_comment'] == 1 && $post->comment_status=='open'): ?>
							<div class="row">
								<div class="col-md-12">
									<?php comments_template('', true); ?>
								</div>
							</div>
							<?php endif; ?>

						</div><!-- End .content -->

					</div>
					<?php
						get_sidebar();
					?>
				</div>
		</div>
		</div>
	</div>
</section>
<!-- End Content
================================================== -->
<?php endwhile; ?>

<?php
	get_footer();
?>