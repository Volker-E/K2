<?php get_header(); ?>

<div class="wrapper">

	<?php if ( is_active_sidebar('widgets-top') ) : ?>
	<div id="widgets-top" class="widgets">
		<?php dynamic_sidebar('widgets-top'); ?>
	</div>
	<?php endif; ?>
	
	<div id="primary">
		<a name="startcontent"></a>

		<?php /* K2 Hook */ do_action('template_primary_begin'); ?>

		<div id="content" class="hfeed">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php k2_navigation('nav-above'); ?> 

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="post-header">
					<h1 class="post-title">
						<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php k2_permalink_title(); ?>"><?php the_title(); ?></a>
					</h1>

					<?php /* Edit Link */ edit_post_link( __('Edit', 'k2'), '<span class="entry-edit">', '</span>' ); ?>

					<div class="post-meta">
						<?php k2_entry_meta(1); ?>
					</div> <!-- .post-meta -->

					<?php /* K2 Hook */ do_action('template_entry_head'); ?>
				</div><!-- .post-header -->

				<div class="post-content">
					<?php if ( function_exists('has_post_thumbnail') and has_post_thumbnail() ) : ?>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium', array( 'class' => 'alignleft' ) ); ?></a>
					<?php endif; ?>
					<?php the_content( sprintf( __('Continue reading \'%s\'', 'k2'), the_title('', '', false) ) ); ?>
				</div><!-- .post-content -->

				<div class="post-footer">
					<?php wp_link_pages( array('before' => '<div class="entry-pages"><span>' . __('Pages:', 'k2') . '</span>', 'after' => '</div>' ) ); ?>

					<div class="post-meta">
						<?php k2_entry_meta(2); ?>
					</div><!-- .post-meta -->

					<?php /* K2 Hook */ do_action('template_entry_foot'); ?>
				</div><!-- .post-footer -->
			</div><!-- #post-ID -->


			<div id="widgetspost" class="widgets">
				<?php dynamic_sidebar('widgetspost'); ?>
			</div>


			<div class="comments">
				<?php comments_template(); ?>
			</div><!-- .comments -->

			<?php k2_navigation('nav-below'); ?> 

		<?php endwhile; else: define('K2_NOT_FOUND', true); ?>

			<?php locate_template( array('blocks/k2-404.php'), true ); ?>

		<?php endif; ?>


		</div><!-- #content -->

		<?php /* K2 Hook */ do_action('template_primary_end'); ?>

	</div><!-- #primary -->

	<?php if ( ! get_post_custom_values('sidebarless') ) get_sidebar(); ?>

	<?php if ( is_active_sidebar('widgets-bottom') ) : ?>
	<div id="widgets-bottom" class="widgets">
		<?php dynamic_sidebar('widgets-bottom'); ?>
	</div>
	<?php endif; ?>
	

</div><!-- .wrapper -->

<?php
	/* Initialize Rolling Archives if needed */
	if ( defined('DOING_AJAX') and true == DOING_AJAX ) {
		add_action( 'k2_dynamic_content', array('K2', 'setup_rolling_archives') );
	} else {
		add_action( 'wp_footer', array('K2', 'setup_rolling_archives') );
	}
?>

<?php get_footer(); ?>