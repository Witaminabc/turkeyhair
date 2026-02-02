<section class="benefits-section">


    <div class="benefits-section-container">
        <div class="benefits-header">
            <h2 class="benefits-title">   <?php echo get_field('benefit','option'); ?></h2>
        </div>

        <div class="benefits-grid">


            <?php $benefitblock= get_field('benefitblock','option'); ?>
            <?php foreach ($benefitblock as $benefitblock_k => $benefitblock_v){ ?>
            <div class="benefit-card" data-index="0">
                <div class="benefit-icon">
                    <img src="<?php echo $benefitblock_v['img']?>" alt="" class="benefit-img">
                </div>
                <div class="benefit-content">
                    <div class="benefit-name"><?php echo $benefitblock_v['title']?></div>
                    <div class="benefit-description"><?php echo $benefitblock_v['subtitle']?></div>
                </div>
            </div>

            <?php } ?>


        </div>
    </div>
</section>