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
                            <a href="<?php the_permalink(); ?>"> <img class="card-img-top" src=" <?php echo esc_url(get_template_directory_uri()); ?>/img/hoge.jpeg">
                            </a>



                            <div class="card-body">
                                <div class="small text-muted"><?php the_time('Y年m月d日H時'); ?></div>
                                <h2 class="card-title"><?php the_title(); ?></h2>
                                <p class="card-text"><?php the_content() ?></p>
                            </div>
                        </div>
                        <!-- Nested row for non-featured blog posts-->

                    <?php endwhile; ?>
                    <!-- 次の投稿をリンクで表示させることができるもの -->
                    <?php the_post_navigation() ?>

                <?php endif; ?>
                <a href="<?php echo esc_url(home_url('/')) ?>">戻る</a>
                <!-- Pagination-->
                <nav aria-label="Pagination">
                    <hr class="my-0" />
                    <?php the_posts_pagination(); ?>
                </nav>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Search widget-->
                <div class="card mb-4">
                    <div class="card-header">Search</div>
                    <div class="card-body">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                            <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                        </div>
                    </div>
                </div>
                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#!">Web Design</a></li>
                                    <li><a href="#!">HTML</a></li>
                                    <li><a href="#!">Freebies</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#!">JavaScript</a></li>
                                    <li><a href="#!">CSS</a></li>
                                    <li><a href="#!">Tutorials</a></li>
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