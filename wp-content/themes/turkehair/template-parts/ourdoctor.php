<section class="doctors-section">
    <div class="doctors-section-container">
        <h1 class="doctors-title"><?php echo get_field('ourdoctor_title','option'); ?></h1>

        <p class="doctors-subtitle">
            <?php echo get_field('ourdoctor_subtitle','option'); ?>
        </p>

        <div class="doctors-grid">
            <!-- Врач 1 -->

            <?php $ourdoctorblock= get_field('ourdoctorblock','option'); ?>
            <?php foreach ($ourdoctorblock as $ourdoctorblock_k => $ourdoctorblock_v){ ?>
            <div class="doctor-card">
                <div class="doctor-image">
                    <div class="image-placeholder">
                        <img src="<?php echo $ourdoctorblock_v['img'] ?>" alt="">
                    </div>
                </div>

                <div class="doctor-info">
                    <h2 class="doctor-name"><?php echo $ourdoctorblock_v['name'] ?></h2>

                    <?php echo $ourdoctorblock_v['text'] ?>

                    <a href="<?php echo $ourdoctorblock_v['href'] ?>"  class="consultation-btn">
                        ЗАПИСАТЬСЯ НА БЕСПЛАТНУЮ КОНСУЛЬТАЦИЮ
                    </a>
                </div>
            </div>
            <?php } ?>
            <!-- Врач 2 -->

        </div>
    </div>
</section>