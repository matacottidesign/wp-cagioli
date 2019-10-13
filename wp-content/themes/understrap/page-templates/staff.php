<?php
/**
 * Template Name: Staff
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
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <h4><i><?php the_field('titolo_nostro_staff'); ?></i></h4>
                            <?php the_field('descrizione_nostro_staff'); ?>
                        </div>
                        <div class="col-12 col-md-4"></div>
                    </div>
                </div>


                <div class="container pt-8">

                    <?php if( have_rows('staff_card') ): ?>

                    <?php
                        while ( have_rows('staff_card') ) : the_row();
                        $image = get_sub_field('immagine_staff_card'); 
                    ?>

                    <div class="card mb-5">
                        <div class="row no-gutters d-flex align-items-center">
                        <div class="col-md-4">
                            <img class="w-100 zoom" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body staff">
                                <h5 class="card-title text-center pt-3"><?php the_sub_field('nome_staff_card'); ?></h5>
                                <div class="card-text text-center job"><?php the_sub_field('ruolo_staff_card'); ?></div>
                                <div class="cit text-center"><i><?php the_sub_field('citazione_staff_card'); ?></i></div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <?php endwhile; ?>

                    <?php 
                    
                        else :

                            // no rows found

                        endif;

                    ?>

                    <div class="pb-8"></div>

                </div>


                <div class="container py-4">
                    <div class="row">
                        <div class="col-12 col-sm-8">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                <h4><i>Dicono di noi</i></h4>
                                <div class="carousel-inner pt-3">
                                    <div class="carousel-item active carousel-item-left">
                                        <p><i>"Come avere più autostima risolvendo un piccolo problema estetico!</i></p>
                                        <p class="text-right"><i>Monica</i></p>
                                    </div>
                                    <div class="carousel-item carousel-item-next carousel-item-left">
                                        <p><i>"Fin da piccole conosciamo la parola prevenzione!"</i></p>
                                        <p class="text-right"><i>Katie e Rhian</i></p>
                                    </div>
                                    <div class="carousel-item">
                                        <p><i>"Sono romantico, mi piace poter sorridere al sorriso di una donna"</i></p>
                                        <p class="text-right"><i>Marco</i></p>
                                    </div>
                                    <div class="carousel-item">
                                        <p><i>"Non rinunciamo al modo di sentirci a nostro agio"</i></p>
                                        <p class="text-right"><i>Micol e Luca</i></p>
                                    </div>
                                    <div class="carousel-item">
                                        <p><i>"Avere un bel sorriso non ha età!"</i></p>
                                        <p class="text-right"><i>Lisa e Gianni</i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 d-flex justify-content-center align-items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/talk-icon.svg" alt="convenction-icons" width="130px">
                        </div>
                    </div>
                </div>

























                
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
