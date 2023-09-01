<?php
    /*
    Template Name: Наша история
    */
?>

<?php 
    get_header();
?>

<div class="aboutus" id="aboutus">
    <div class="container">
        <h1 class="title">
            <?php the_field('aboutus_title'); ?>
        </h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('aboutus-block-1_title'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('aboutus-block-1_text'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('aboutus-block-1_img'); ?>" alt="мир детства">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('aboutus-block-2_img'); ?>" alt="мир детства">
            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('aboutus-block-2_title'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('aboutus-block-2_text'); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('aboutus-block-3_title'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('aboutus-block-3_text'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('aboutus-block-3_img'); ?>" alt="мир детства">
            </div>
        </div>
    </div>
</div>

<?php 
    get_footer();
?>