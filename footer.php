<!--
 * This Divi child theme file modifies Divi Theme v2.3.1 footer links starting at line 45 below.
 * Author:   David Tierney http://designsbytierney.com
 * Creation date March 5, 2015
-->

    <?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
				<?php get_sidebar( 'footer' ); ?>


		<?php
			if ( has_nav_menu( 'footer-menu' ) ) : ?>

				<div id="et-footer-nav">
					<div class="container">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'depth'          => '1',
								'menu_class'     => 'bottom-nav',
								'container'      => '',
								'fallback_cb'    => '',
							) );
						?>
					</div>
				</div> <!-- #et-footer-nav -->

			<?php endif; ?>

				<div id="footer-bottom">
					<div class="container clearfix">
				<?php
					if ( false !== et_get_option( 'show_footer_social_icons', true ) ) {
						get_template_part( 'includes/social_icons', 'footer' );
					}
				?>

						<p id="footer-info"><span>ALEXANDRE COXO </span><span class="bv_hr">|</span> <span>2016</span> <span class="bv_hr">|</span> <span>Developed by Joni Dores</span></p>
					</div>	<!-- .container -->
				</div>
				  <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBsZT8pW3SQfUe9-IhHUzwnjKueMFQwtMw&libraries=places" async defer></script>


			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>
</body>
</html>
