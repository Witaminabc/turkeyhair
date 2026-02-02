<section class="process-section">
    <div class="process-section-container">
        <div class="process-header">
            <h2 class="process-main-title"> <?php echo get_field('process_title','option'); ?></h2>
        </div>

        <div class="process-steps">
            <?php $processblock= get_field('processblock','option'); ?>
            <?php $processblock_index=1; ?>
            <?php foreach ($processblock as $processblock_k => $processblock_v){ ?>
            <div class="process-step process-step--<?php echo $processblock_v['distance']; ?>">
                <div class="process-step__image">
                    <img src="<?php echo $processblock_v['img']; ?>" alt="Консультация и диагностика" class="process-step__img">
                </div>
                <div class="process-step__content">
                    <div class="process-step__number"><?php echo $processblock_index++ ?></div>
                    <div class="process-step__text">
                        <h3 class="process-step__title"><?php echo $processblock_v['title']; ?></h3>
                        <div class="process-step__description"><?php echo $processblock_v['text']; ?></div>
                    </div>
                </div>
            </div>
            <?php } ?>


        </div>
    </div>
</section>