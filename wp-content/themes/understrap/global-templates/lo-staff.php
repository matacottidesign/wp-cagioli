<div class="container pt-8">
    <div class="row">
        <div class="col-12 col-lg-8">

            <h4 class="pb-3"><i><?php the_field('titolo_staff'); ?></i></h4>

            <?php the_field('descrizione_staff'); ?>

        </div>
        <div class="col-12 col-lg-4">
            <div class="d-flex justify-content-center align-items-center">

                <?php 
                $image = get_field('immagine_staff');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="130px" />
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>


<div class="container pt-8">
    <div class="card-deck">

        <?php if( have_rows('staff_card') ): ?>

        <?php
            while ( have_rows('staff_card') ) : the_row();
            $image = get_sub_field('immagine_staff_card'); 
        ?>

        <div class="card d-flex align-items-center pt-5">

            <img class="card-img-top" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"/>

            <div class="card-body">

                <h6 class="card-title text-center pt-3"><?php the_sub_field('nome_staff_card'); ?></h6>

                <div class="card-text text-center job pb-2"><?php the_sub_field('ruolo_staff_card'); ?></div>

            </div>
        
        </div>

        <?php endwhile; ?>

        <?php 
        
            else :

                // no rows found

            endif;

        ?>

    </div>
    <div class="pt-3 text-right pb-8"><a href="http://localhost:8888/wp-cagioli/staff/">Vedi il nostro staff &gt;</a></div>
</div>