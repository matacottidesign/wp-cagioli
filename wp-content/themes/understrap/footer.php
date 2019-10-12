<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div>

	<div>

		<div class="row">

			<div class="col-md-12">

			<footer>
				<div class="container pt-5 pb-4">
					<div class="row">
						<div class="col-12 col-md-4">
						<p>
							Studio Odontoiatrico Dott. Cagioli Alessandro <br>
							Via Lata, 217 - 00049 Velletri (RM) <br>
							<a href="tel:0696155221">06 - 961 55221</a> <br>
							<a href="mailto:info@studiocagioli.it">info@studiocagioli.it</a> <br>
							P.IVA - 12755051005
						</p>
						</div>
						<div class="col-12 col-md-8">
							<p>Google Maps</p>
						</div> 
					</div>
				</div>
			</footer>

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

