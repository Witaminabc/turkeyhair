<section class="method-section">
    <div class="method-section-container">
        <div class="method-header">
            <h1 class="method-main-title"> <?php echo get_field('method_title','option'); ?></h1>
            <p class="method-main-description"><?php echo get_field('method_subtitle','option'); ?></p>
        </div>

        <div class="benefits-grid">
            <?php $methodblock= get_field('methodblock','option'); ?>
            <?php foreach ($methodblock as $methodblock_k => $methodblock_v){ ?>
            <div class="benefit-card">
                <div class="benefit-image">
                    <img src="<?php echo $methodblock_v['img'];?>" alt="Полное восстановление" class="benefit-img">
                </div>
                <div class="benefit-content">
                    <h3 class="benefit-name"><?php echo $methodblock_v['title'];?></h3>
                    <p class="benefit-description"><?php echo $methodblock_v['subtitle'];?></p>
                </div>
            </div>

            <?php } ?>

        </div>
    </div>
</section>