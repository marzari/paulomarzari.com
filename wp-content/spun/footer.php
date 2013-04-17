<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Spun
 * @since Spun 1.0
 */
?>

	</div><!-- #main .site-main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'spun_credits' ); ?>
			<a href="#" title="Credits" rel="generator"><?php printf( __( 'Copyright © %s', 'spun' ), 'Paulo Marzari Advocacia' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( '%1$s by %2$s.', 'spun' ), '<a href="tiagomarzari.com>Spun', 'Tiago Marzari Desiner</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>