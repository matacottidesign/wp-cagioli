<?php
/**
 * Template Name: Studio
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

                <div class="space-menu"></div>

                <!--CONTENUTO INIZIALE-->
                <div class="container">
                    <?php the_content(); ?>
                </div>

                <!--============================================================================-->
                <div class="container py-8">
                    <div class="row">

                        <div class="col-12 col-md-8">
                            <h4><i><?php the_field('titolo_studio'); ?></i></h4>
                            <?php the_field('descrizione_studio'); ?>
                        </div>

                        <div class="col-12 col-md-4"></div>
                    </div>
                </div>

                <div class="container py-8">
                
                    <!--GALLERIA1-->
                    <?php if( have_rows('galleria1') ): ?>

                    <?php
                        while ( have_rows('galleria1') ) : the_row();
                        $image = get_sub_field('immagine_galleria1'); 
                    ?>

                    <img class="w-100 zoom" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

                    <?php endwhile; ?>

                    <?php 
                    
                        else :

                            // no rows found

                        endif;

                    ?>

                    <!--GALLERIA2-->
                    <div class="row">

                    <?php if( have_rows('galleria2') ): ?>

                    <?php
                        while ( have_rows('galleria2') ) : the_row();
                        $image = get_sub_field('immagine_galleria2'); 
                    ?>

                    
                    <div class="col-12 col-md-6">
                        <img class="w-100 zoom" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                    </div>

                    <?php endwhile; ?>

                    <?php 
                    
                        else :

                            // no rows found

                        endif;

                    ?>
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
                                <img src="../img/convenzioni.png" alt="convenction-icons" width="180px">
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
