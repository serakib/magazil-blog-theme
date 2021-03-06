<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package magazil
 */

?>

	</div><!-- #content -->

	<!-- start footer Area -->
	<footer class="footer-area">
		<div class="container">
			<div class="row">

			<?php

			$magazil_wdgc = magazil_footer_widget_size();

			if (is_array($magazil_wdgc) && !empty($magazil_wdgc)) {
	
				foreach ($magazil_wdgc as $key => $value) {
					if (is_active_sidebar("footer-".($key+1))) :
						echo '<div class="col-lg-'.$value.' col-md-6 single-footer-widget">';
						dynamic_sidebar("footer-".($key+1));
						echo '</div>';
					endif;
				}
			}

			?>

			</div>
			<div class="footer-bottom row align-items-center">
				<p class="footer-text m-0 col-lg-8 col-md-12">
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				$theme_author = 'Rakib Hossain' ;
				$theme_author_url = 'https://github.com/rakibhoossain';
				printf( esc_html__( 'Theme: %1$s by %2$s', 'magazil' ), 'magazil', '<a href="'. esc_url($theme_author_url).'">'.esc_html($theme_author).'</a>' );
			?>
				</p>

				<?php
				if ( has_nav_menu( 'social' ) ) {
					?>
					<div class="col-lg-4 col-md-12 footer-social">
						<?php
						wp_nav_menu( array(
							'theme_location'    => 'social',
							'menu_class'        => 'social-menu-footer',
							'container'         => false,
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span><i class="fa fa-chain"></i>',
						) );
						?>
					</div>
				<?php } ?>

			</div>

			<?php 
			$magazil_copyright_text = get_theme_mod( 'magazil_copyright_text' );
			if($magazil_copyright_text):?>
				<div class="copyright-text-area text-center">
					<div class="copyright-text">
						<?php echo wp_specialchars_decode($magazil_copyright_text); ?>
					</div>
				</div>	
			<?php endif; ?>
		</div>
	</footer>
		<!-- End footer Area -->
</div><!-- #page -->
<!-- To top -->
<a href="#top" id="toTop" style="display: block;"><i class="fa fa-angle-up"></i><span id="toTopHover" style="opacity: 1;"></span></a>
<?php wp_footer(); ?>

</body>
</html>
