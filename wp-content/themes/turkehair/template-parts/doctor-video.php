<section class="doctor-video">


    <div class="doctor-video__container">
        <h2 class="doctor-video__title"> <?php echo get_field('doctorvideop_title','option'); ?></h2>

        <div class="doctor-video__content">
            <div class="doctor-video__video-wrapper">
                <?php $doctorvideo= get_field('doctorvideo','option'); ?>
                <?php foreach ($doctorvideo as $doctorvideo_k => $doctorvideo_v){ ?>
                <div class="doctor-video__video-placeholder">


                    <?php echo $doctorvideo_v['fraim'];?>
                </div>
                <?php } ?>
            </div>


        </div>
</section>