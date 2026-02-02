<?php
get_header();
?>







<?php
    $id=get_the_ID();
    get_template_part('template-parts/header/header');
get_template_part('template-parts/banner');
get_template_part('template-parts/results');
get_template_part('template-parts/answeronquestion');
get_template_part('template-parts/ourdoctor');
get_template_part('template-parts/service');

get_template_part('template-parts/benefit');
get_template_part('template-parts/method');
get_template_part('template-parts/process');
get_template_part('template-parts/contraindication');
get_template_part('template-parts/freeconsultation');
get_template_part('template-parts/videorewiews');
get_template_part('template-parts/licensia');
get_template_part('template-parts/doctor-video');
get_template_part('template-parts/garant');
get_template_part('template-parts/map');
get_template_part('template-parts/form-bottom');


    ?>































<?php get_footer(); ?>
<?php

