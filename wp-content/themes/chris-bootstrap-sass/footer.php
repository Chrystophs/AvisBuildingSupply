<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Chris-SASS
 * @since Chris-SASS 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				/**
				 * Fires before the Chris-SASS footer text for footer customization.
				 *
				 * @since Chris-SASS 1.0
				 */
				do_action( 'Chris-SASS_credits' );
			?>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'Chris-SASS' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'Chris-SASS' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
