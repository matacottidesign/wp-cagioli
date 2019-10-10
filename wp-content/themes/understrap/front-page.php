<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<?php while ( have_posts() ) : the_post(); ?>

    <section class="top-space"></section>

    
    <div id="carouselExampleIndicators" class="carousel slide container" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3" class=""></li>
        </ol>
        
        <div class="carousel-inner">

        <?php
        // loop through the rows of data
        while ( have_rows('slider') ) : the_row();
        $Id = rand(1,99999999999999999);
        $images = get_sub_field('galleria_slider');  

        if( $images ): ?>

        <?php $i = 0; foreach( $images as $image ): ?>

            <div class="carousel-item <?php echo ($i == 0) ? 'active' : ''; ?>">
                <img class="d-block w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        <?php $i++; endforeach; ?>
        <?php endif; endwhile; ?>
        </div>
        
    </div>
    
    <!--===============================================================================================================-->

    <section>       
        <div class="container">
            <!--testo iniziale-->
            <?php the_content(); ?>
        </div>
    </section>

    <!--CARD GROUP - HOME PAGE--> 
    <?php get_template_part('global-templates/card-group'); ?>

    <!--BANNER - HOME PAGE-->
    <?php get_template_part('global-templates/banner'); ?>

    <!--STAFF E COLLABORATORI-->
    <?php get_template_part('global-templates/staff'); ?>


<?php endwhile; ?>

<?php get_footer(); ?>
