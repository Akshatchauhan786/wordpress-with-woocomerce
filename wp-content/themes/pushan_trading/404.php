<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Custom_Theme
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<div class="container" style="margin: 5rem;">
				<div class="page-content text-center">
					<h1>
						404
					</h1>
					 <h1><?php _e('Page Not Found', 'custom_theme'); ?></h1>
       
				</div><!-- .page-content -->
			  </div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
?>
