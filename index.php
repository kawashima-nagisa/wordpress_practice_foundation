<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charaset'); ?>" />
    <meta name=" viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- <title>Blog Home - Start Bootstrap Template</title> -->
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <!-- <link href="css/styles.css" rel="stylesheet" /> -->
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <?php get_template_part(('nav')); ?>
    <?php get_header(); ?>

    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <? if (have_posts()) : ?>
                    <?php while (have_posts()) : ?>
                        <?php the_post(); ?>
                        <!-- Featured blog post-->
                        <div class="card mb-4">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large') ?>
                                <?php else : ?>

                                    <img class="card-img-top" src=" <?php echo esc_url(get_theme_file_uri('img/default.jpeg'),); ?>">
                                <?php endif; ?>
                            </a>



                            <div class="card-body">
                                <div class="small text-muted"><?php the_time('Y年m月d日H時'); ?></div>
                                <h2 class="card-title"><?php the_title(); ?></h2>
                                <p class="card-text"><?php the_excerpt() ?></p>
                                <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read more →</a>
                            </div>
                        </div>
                        <!-- Nested row for non-featured blog posts-->

                    <?php endwhile; ?>
                <?php endif; ?>
                <!-- Pagination-->
                <nav aria-label="Pagination">
                    <hr class="my-0" />
                    <?php the_posts_pagination(); ?>
                </nav>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <?php get_search_form(); ?>

                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">

                                    <?php if (is_active_sidebar('sidebar-widget')) : ?>
                                        <?php dynamic_sidebar('sidebar-widget'); ?>
                                    <?php endif; ?>


                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Side widget-->
                <div class="card mb-4">
                    <div class="card-header">Side Widget</div>
                    <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                </div>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <?php wp_footer(); ?>
</body>

</html>