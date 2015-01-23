<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Chris_SASS
 * @since Chris_SASS 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				/**
				 * Fires before the Chris_SASS footer text for footer customization.
				 *
				 * @since Chris_SASS 1.0
				 */
				do_action( 'Chris_SASS_credits' );
			?>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'Chris_SASS' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'Chris_SASS' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
