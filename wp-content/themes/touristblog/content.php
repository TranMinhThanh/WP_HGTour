<?php 
/**
 * The template for displaying the content.
 * @package touristblog
 */
?>
<div class="col-lg-12">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="tb-blog-post-box">
			<h1 class="post-title-head">
				<a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</h1>
			<article class="small">
				<div class="tb-blog-category post-meta-data"> 
					<i class="fa fa-user meta-fa-icon-user"></i>
					<a class="meta-user-des" href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ));?>">
						<?php the_author(); ?>
					</a>
					<i class="fa fa-calendar meta-fa-icons"></i>
					<span class="meta-data-date"><?php echo get_the_date( 'F j, Y' ); ?></span>
				</div>
				<div class="row">
						<?php if(has_post_thumbnail()): ?>
							<div class="col-lg-4 col-md-4 col-xs-12">
								<a href="<?php the_permalink(); ?>" class="dfmblog-thumb">
									<?php if(has_post_thumbnail()): ?>
									<?php $defalt_arg =array('class' => "img-responsive"); ?>
									<?php the_post_thumbnail('', $defalt_arg); ?>
									<?php endif; ?>
								</a>
							</div>
							<div class="col-lg-8 col-md-8 col-xs-12">
						<?php else: ?>
							<div class="col-lg-12 col-md-12 col-xs-12"> <!-- Starting -->
						<?php endif; ?>
					
						<p>
							<?php
								echo wp_kses_post(get_the_excerpt());
							?>
						</p>
						<?php wp_link_pages( array( 'before' => '<div class="link">' . __( 'Pages:', 'touristblog' ), 'after' => '</div>' ) ); ?>
							</div> <!-- Ending -->
				</div>
	<hr>
				<div class="category-tag-div">
					<?php $cat_list = get_the_category_list();
					if(!empty($cat_list)) { ?>
						<i class="fa fa-folder-open meta-fa-icons"></i>
							<?php if(!empty($cat_list)) { ?>
								<?php the_category(', '); ?>
						<?php }
					} ?>
					<br>
					<?php the_tags( '<i class="fa fa-tag" aria-hidden="true"></i> ', ', ', '<br />' ); ?>
				</div>
			</article>
		</div>
	</div>
</div>