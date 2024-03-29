<?php
	global $post, $wp_query;

	/* include header
	============================*/
	if( isset($blank_page) && $blank_page ){  }
	else{
		get_template_part('template', 'header');
	}

	$content_class = 'col-md-12 col-sm-12';
	$layout = tt_getmeta('page_layout');

	if( in_array($layout, array('left', 'right' )) ){
		$content_class = 'col-md-9';
		$content_class .= $layout=='left' ? ' pull-right' : '';
	}
?>
<!-- Start Content
================================================== -->
<section class="primary section" id="post-<?php echo get_the_ID(); ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="<?php echo $content_class; ?>">
						<div class="content">
							
							<div class="row">
								<div class="col-md-12 single-content">
									<?php
										the_content();

										// WP pages
	                                    wp_link_pages(array(
	                                        'before' => '<div class="page-link"><span>' . __('Pages:', 'sevenstars') . '</span>',
	                                        'after' => '</div>',
	                                        'link_before' => '<span>',
	                                        'link_after' => '</span>'
	                                    ));
									?>

                                    <?php
                                    if (isset($smof_data['share_visibility']['share_pages']) && $smof_data['share_visibility']['share_pages'] == 1)
                                        social_share();
                                    ?>
								</div>
							</div>

							<?php if (isset($smof_data['page_author']) && $smof_data['page_author'] == 1): ?>
							<!-- Post Author -->
							<div class="row">
								<div class="col-md-12">
									<?php about_author(); ?>
								</div>
							</div>
							<?php endif; ?>
							
							<!-- Page Comment -->
							<?php if (isset($smof_data['page_comment']) && $smof_data['page_comment'] == 1 && $post->comment_status=='open' ): ?>
							<div class="row">
								<div class="col-md-12">
									<div class="comments">
										<?php comments_template('', true); ?>
									</div>
								</div>
							</div>
							<?php endif; ?>

						</div>
						
					</div>
					<?php
					if( in_array($layout, array('left', 'right' )) ){
						global $current_sidebar;
						$current_sidebar = tt_getmeta('sidebar');
						if( isset($parent_onepage) && $parent_onepage==true )
							include file_require(dirname(__FILE__).'/sidebar.php');
						else
							get_sidebar();
					}
					?>
				</div>
		</div>
		</div>
	</div>
</section>
<!-- End Content
================================================== -->