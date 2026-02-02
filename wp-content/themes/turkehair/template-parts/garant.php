<section class="garant-section">
    <div class="garant-section__container">
        <h1 class="garant-section__title">  <?php echo get_field('garant_title','option'); ?></h1>

        <div class="garant-section__content">
            <div class="garant-item">
                <div class="garant-item__image">
                    <img src="<?php echo get_field('garant_img','option'); ?>">
                </div>

                <div class="garant-item__text">
                    <div class="garant-item__description">
                        <?php echo get_field('garant_text','option'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>