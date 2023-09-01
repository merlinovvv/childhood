<?php
    /*
    Template Name: Игрушки
    */
?>

<?php 
    get_header();
?>

<div class="toys" id="toys">
    <div class="container">
        <h2 class="subtitle">Мягкие игрушки</h2>
        <div class="toys__wrapper">
            <?php
            $my_posts = get_posts([
                'numberposts' => -1,
                'category_name' => 'soft_toys',
                'orderby' => 'date',
                'order' => 'ASC',
                'post_type' => 'post',
                'suppress_filters' => true, // suppression of filters of SQL query change
            ]);
            foreach ($my_posts as $post) {
                setup_postdata($post);
                ?>
            <div class="toys__item" style="background-image: url(<?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail_url();
                } else {
                    echo get_template_directory_uri() . '/assets/img/not-found.jpg';
                }
                ?>">
                <div class="toys__item-info">
                    <div class="toys__item-title">
                        <?php the_title(); ?>
                    </div>
                    <div class="toys__item-descr">
                        <?php the_field('toys_desc'); ?>
                    </div>
                    <a href='<?php echo get_permalink(); ?>' class="minibutton toys__trigger">Подробнее</a>
                </div>
            </div>
            <?php
            }
            wp_reset_postdata(); // reset $post
            ?>
        </div>
        <h2 class="subtitle">Развивающие игрушки</h2>
        <div class="toys__wrapper">
            <?php
            $my_posts = get_posts([
                'numberposts' => -1,
                'category_name' => 'edu_toys',
                'orderby' => 'date',
                'order' => 'ASC',
                'post_type' => 'post',
                'suppress_filters' => true, // suppression of filters of SQL query change
            ]);
            foreach ($my_posts as $post) {
                setup_postdata($post);
                ?>
            <div class="toys__item" style="background-image: url(<?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail_url();
                } else {
                    echo get_template_directory_uri() . '/assets/img/not-found.jpg';
                }
                ?>">
                <div class="toys__item-info">
                    <div class="toys__item-title">
                        <?php the_title(); ?>
                    </div>
                    <div class="toys__item-descr">
                        <?php the_field('toys_desc'); ?>
                    </div>
                    <a href='<?php echo get_permalink(); ?>' class="minibutton toys__trigger">Подробнее</a>
                </div>
            </div>
            <?php
            }
            wp_reset_postdata(); // reset $post
            ?>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="toys__alert">
                    <?php the_field('toys_subtitle'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    get_footer();
?>