<?php /* Template Name: wen_project */ ?>
<?php get_header(); 
get_template_part('breadcrums'); ?>
<div class="container">	
	<div class="row">
		<?php	
		$posts_count =wp_count_posts()->publish;
		if (get_the_title() == "PROJECTS") {
			$args = array( 'post_type' => 'post','posts_per_page' => $posts_count ,'ignore_sticky_posts' => 1);
		} else if (get_the_title() == "RESIDENTIAL") {
			$args = array( 'category_name' => 'Residential', 'post_type' => 'post','posts_per_page' => $posts_count ,'ignore_sticky_posts' => 1);
		} else if (get_the_title() == "COMMERCIAL") {
			$args = array( 'category_name' => 'Commercial', 'post_type' => 'post','posts_per_page' => $posts_count ,'ignore_sticky_posts' => 1);
		} else {
			$args = array( 'category_name' => 'Industrial', 'post_type' => 'post','posts_per_page' => $posts_count ,'ignore_sticky_posts' => 1);
		}	
		$post_type_data = new WP_Query( $args );
		$index = 0;
		while($post_type_data->have_posts()):
			$post_type_data->the_post(); ?>
			<div class="col-md-4 col-sm-12">
				<div class="enigma_blog_thumb_wrapper">
					<div class="enigma_blog_thumb_wrapper_showcase">					
						<?php $img = array('class' => 'enigma_img_responsive');
								if(has_post_thumbnail()): 
								the_post_thumbnail('home_post_thumb',$img);
						endif; ?>
						<div class="enigma_blog_thumb_wrapper_showcase_overlay">
							<div class="enigma_blog_thumb_wrapper_showcase_overlay_inner ">
								<div class="enigma_blog_thumb_wrapper_showcase_icons">
									<a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
								</div>
							</div>
						</div>
					</div>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php if(get_the_tag_list() != '') { ?>
					<p class="enigma_tags"><?php the_tags('Tags :&nbsp;', '', '<br />'); ?></p>
					<?php } ?>
					<?php the_excerpt( __( 'Read More' , 'enigma' ) ); ?>
					<a href="<?php the_permalink(); ?>" class="enigma_blog_read_btn"><i class="fa fa-plus-circle"></i><?php _e('Read More','enigma'); ?></a>
					<div class="enigma_blog_thumb_footer">
						<ul class="enigma_blog_thumb_date"><!--
							<li><i class="fa fa-user"></i><a href="<?php //echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php //echo get_the_author(); ?></a></li>-->
							<li><i class="fa fa-clock-o"></i>
							<?php if ( ('d M  y') == get_option( 'date_format' ) ) : ?>
							<?php echo get_the_date('F d ,Y'); ?>
							<?php else : ?>
							<?php echo get_the_date(); ?>
							<?php endif; ?>
							</li><!--
							<li><i class="fa fa-comments-o"></i><?php //comments_popup_link( '0', '1', '%', '', '-'); ?></li>-->
						</ul>
					</div>
				</div>
			</div>
			<?php
				$index++;
				if ($index % 3 == 0) {
					echo "</div><div class='row'>";
				} 
			?>
		<?php  endwhile; ?>
	</div>
</div>
<?php get_footer(); ?>