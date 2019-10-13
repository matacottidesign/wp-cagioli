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
						<iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2979.2117370635588!2d12.777842615699068!3d41.69436457923723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132582c0d0a12ddd%3A0xe34fc09c6f8a88d!2sVia%20Lata%2C%20217%2C%2000049%20Velletri%20RM!5e0!3m2!1sit!2sit!4v1570977083111!5m2!1sit!2sit" height="250px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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

