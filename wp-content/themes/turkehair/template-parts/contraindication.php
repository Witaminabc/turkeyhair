<section class="contraindications-section">
    <div class="contraindications-section-container">
        <div class="contraindications-header">
            <h1 class="contraindications-main-title"> <?php echo get_field('contraindication_title','option'); ?></h1>
        </div>

        <div class="contraindications-list">
            <?php $contraindicationblock= get_field('contraindicationblock','option'); ?>
            <?php $contraindicationblock_index=1; ?>
            <?php foreach ($contraindicationblock as $contraindicationblock_k => $contraindicationblock_v){ ?>
            <div class="contraindication-item">
                <div class="contraindication-number">0<?php echo $contraindicationblock_index++ ?></div>
                <div class="contraindication-content">
                    <h3 class="contraindication-name"><?php echo $contraindicationblock_v['title']; ?></h3>
                    <p class="contraindication-description"><?php echo $contraindicationblock_v['text']; ?></p>
                </div>
            </div>

            <?php } ?>

        </div>


    </div>
</section>