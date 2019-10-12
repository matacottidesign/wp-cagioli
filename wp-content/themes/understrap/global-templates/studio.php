<div class="container">
    <div class="row d-flex align-items-center">

        <div class="col-12 col-lg-4">
            <h4 class="pb-3">
                <i><?php the_field('titolo_orari'); ?></i>
            </h4>
            <p><?php the_field('descrizione_orari'); ?></p>
        </div>

        <div class="col-12 col-lg-8">
            <div class="card d-flex align-items-center pt-5">
                <div class="row">

                <?php if( have_rows('box_orari') ): ?>

                <?php
                    while ( have_rows('box_orari') ) : the_row();
                    $image = get_sub_field('immagine_box'); 
                ?>

                <div class="col-12 col-sm-4">
                    <div class="card-body container">
                        <p class="card-text">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" width="50px" /><br><br>
                        <b><?php the_sub_field('titolo_box'); ?></b> <br> <i><?php the_sub_field('descrizione_box'); ?></i>
                        </p>
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
        </div>

    </div>
</div>


<!--GALLERIA-->
<div class="container py-8">
    <div class="row gallery text-center">

        <?php if( have_rows('galleria') ): ?>

        <?php
            while ( have_rows('galleria') ) : the_row();
            $image = get_sub_field('immagine_galleria'); 
        ?>

        <div class="col-12 col-md-4">
            <img class="zoom" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"/>
        </div>

        <?php endwhile; ?>

        <?php 
        
            else :

                // no rows found

            endif;

        ?>
</div>

<div class="pt-3 text-right"><a href="#">Vedi il nostro studio &gt;</a></div>