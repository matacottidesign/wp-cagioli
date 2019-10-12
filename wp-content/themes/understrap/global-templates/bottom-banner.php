<hr>
<div class="container py-4">
    <div class="row">

        <div class="col-12 col-sm-8">
            <h4 class="pb-3"><i><?php the_field('titolo_urgenze'); ?></i></h4>
            <p><?php the_field('descrizione_urgenze'); ?></p>
            <button type="button" class="btn btn-danger">
                <a href="te.3482221100">CHIAMA PER URGENZA</a>
            </button>
        </div>

        <div class="col-12 col-sm-4 d-flex justify-content-center align-items-center">

            <?php 
            $image = get_field('immagine_urgenze');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" height="130px" />
            <?php endif; ?>

        </div>

    </div>
</div>

<hr>
<div class="container py-4">
    <div class="row">

        <div class="col-12 col-sm-8">
            <h4 class="pb-3"><i><?php the_field('titolo_convenzioni'); ?></i></h4>
            <p><?php the_field('descrizione_convenzioni'); ?></p>
        </div>

        <div class="col-12 col-sm-4 d-flex justify-content-center align-items-center">

            <?php 
            $image = get_field('immagine_convenzioni');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="180px" />
            <?php endif; ?>

        </div>

    </div>
</div>