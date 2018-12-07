<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Larvae
 */

?>

	</div><!-- #content -->
		</div><!-- .mainpage -->
			</div><!-- .main-content-area full -->
	<div class="footer-content-area full">
		<div class="main-page">
			<footer id="colophon" class="site-footer inner">
				<div class="site-info">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'larvae-is-a-play-around-theme' ) ); ?>">
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Proudly powered by %s', 'larvae-is-a-play-around-theme' ), 'WordPress' );
						?>
					</a>
					<span class="sep"> | </span>
						<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Theme: %1$s by %2$s.', 'larvae-is-a-play-around-theme' ), 'larvae-is-a-play-around-theme', '<a href="http://jjramirez.com">Joseph Ramirez</a>' );
						?>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div>
	</div>


<?php wp_footer(); ?>

</body>
</html>
