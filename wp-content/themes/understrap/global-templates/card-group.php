<div class="container pt-8">
    <div class="card-deck">

        <?php if( have_rows('card_servizi') ): ?>

        <?php
            while ( have_rows('card_servizi') ) : the_row();
            $image = get_sub_field('immagine_card_servizi'); 
        ?>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body pb-3">
                    <div class="container">
                        <div class="row card<?php $i++; echo $i; ?>">
                            <div class="col-3"> 
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" width="50px" />
                            </div>
                            <div class="col-9">
                                <h6 class="card-title">
                                    <?php the_sub_field('titolo_card_servizi'); ?>
                                </h6>
                            </div>
                        </div>
                    <div class="triangle<?php echo $i; ?>"></div>

                    <div class="card-text px-3">
                        <?php the_sub_field('descrizione_card_servizi'); ?>
                    </div>                 
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
    </div>
</div>








