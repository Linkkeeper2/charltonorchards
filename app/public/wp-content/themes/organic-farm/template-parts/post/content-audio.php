<?php
/**
 * Template part for displaying posts
 *
 * @subpackage Organic Farm
 * @since 1.0
 */
?>
<?php

$audio = organic_farm_get_media(array('audio','iframe'));

?>
<div id="Category-section" class="entry-content">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="postbox smallpostimage p-3 wow zoomInDown">
			<?php $blog_archive_ordering = get_theme_mod('archieve_post_order', array('title', 'image', 'meta','excerpt','btn'));
			foreach ($blog_archive_ordering as $post_data_order) :
				if ('title' === $post_data_order) :?>
				    <h3 class="text-center"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
				<?php elseif ('image' === $post_data_order) :?>
			        <?php
			      		if ( ! is_single() ) {
			        	// If not a single post, highlight the audio file.
			        		if ( ! empty( $audio ) ) {
			          			foreach ( $audio as $audio_html ) {
			            			echo '<div class="entry-audio">';
			            			echo $audio_html;
			            			echo '</div><!-- .entry-audio -->';
			          			}
			        		};
			      		};
			      	?>
				<?php elseif ('meta' === $post_data_order) :?>
				    <div class="date-box mb-2 text-center">
						<?php if( get_option('organic_farm_date',false) != 'off'){ ?>
							<span class="mr-2"><i class="<?php echo esc_attr(get_theme_mod('organic_farm_date_icon','far fa-calendar-alt')); ?> mr-2"></i><?php the_time( get_option( 'date_format' ) ); ?></span>
						<?php } ?>
						<?php if( get_option('organic_farm_admin',false) != 'off'){ ?>
							<span class="entry-author mr-2"><i class="<?php echo esc_attr(get_theme_mod('organic_farm_author_icon','fas fa-user')); ?> mr-2"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
						<?php }?>
						<?php if( get_option('organic_farm_comment',false) != 'off'){ ?>
							<span class="entry-comments mr-2"><i class="<?php echo esc_attr(get_theme_mod('organic_farm_comment_icon','fas fa-comments')); ?> mr-2"></i> <?php comments_number( __('0 Comments','organic-farm'), __('0 Comments','organic-farm'), __('% Comments','organic-farm')); ?></span>
						<?php }?>
						<?php if( get_option('organic_farm_tag',false) != 'off'){ ?>
							<span class="tags"><i class="<?php echo esc_attr(get_theme_mod('organic_farm_tag_icon','fas fa-tags')); ?> mr-2"></i> <?php organic_farm_display_post_tag_count(); ?></span>
						<?php }?>
					</div>
				<?php elseif ('excerpt' === $post_data_order) :?>
				    <p class="text-center"><?php organic_farm_custom_excerpt(); ?></p>
				<?php elseif ('btn' === $post_data_order) :?>
				    <div class="link-more mb-2 text-center">
						<a class="more-link" href="<?php echo esc_url( get_permalink() );?>"><?php echo esc_html(get_theme_mod('organic_farm_read_more_text',__('Read More','organic-farm'))); ?></a>
			  		</div>
				<?php endif;
			endforeach;
			?>       
		  	<div class="clearfix"></div>
		</div>
	</div>
</div>