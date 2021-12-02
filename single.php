<?php get_header(); ?>

<main class="my-5">
    <div class="container">
        <?php if (have_posts()) {
            while (have_posts()) {
                the_post();
        ?>
                <h1 class="my-3 text-center"><?php the_title(); ?></h1>
                <div class="row">
                    <div class="col-6">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                    <div class="col-6">
                        <?php the_content(); ?>
                    </div>
                </div>
        <?php
            }
        } ?>
    </div>

</main>

<?php get_footer(); ?>