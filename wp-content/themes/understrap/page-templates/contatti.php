<?php
/**
 * Template Name: Contatti
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() ) : ?>
  <?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>


<div class="wrapper" id="full-width-page-wrapper">

	

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

                <?php while ( have_posts() ) : the_post(); ?>

                <section class="top-space"></section>

                <!--CONTENUTO INIZIALE-->
                <div class="container">
                    <?php the_content(); ?>
                </div>

                <!--============================================================================-->

                <div class="container pt-8">
                    <h4><i><?php the_field('titolo_contatti'); ?></i></h4>
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <?php the_field('descrizione1_contatti'); ?>
                        </div>
                        <div class="col-12 col-sm-4">
                            <?php the_field('descrizione2_contatti'); ?>
                        </div>
                        <div class="col-12 col-sm-4 d-flex justify-content-center align-items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/contact-icon.svg" alt="convenction-icons" width="140px">
                        </div>
                    </div>
                </div>

                <div class="container pt-8">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <?php the_field('descrizione3_contatti'); ?>         
                        </div> 
                        <div class="col-12 col-lg-8">
                            <?php the_field('modulo_contatti'); ?>
                        </div>
                    </div>
                </div>
                
                <div class="pb-8"></div>
            

























                
                <!--CONVENZIONI-->
                <hr>
                <div class="container py-4">
                    <div class="row">
                        <div class="col-12 col-sm-8">
                            <h4 class="pb-3"><i>Convenzioni</i></h4>
                            <p>Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit. Voluptates, doloremque eum sed nesciunt assumenda reprehenderit eveniet eaque veniam aspernatur
                                adipisci
                                iusto
                                quisquam dolores repudiandae ratione, distinctio quasi, natus optio impedit.</p>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/convenzioni.png" alt="convenction-icons" width="180px">
                            </div>
                        </div>
                    </div>
                </div>
                        
                <?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

                
			</div><!-- #primary -->

		</div><!-- .row end -->

	

</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>
