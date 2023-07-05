<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Blog Home - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>aria-busy="">
    <!-- Responsive navbar-->
    <?php get_template_part('nav') ?>

    <!-- Page content-->
    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1>Tag</h1>
                <p class="lead mb-0"><?php wp_title(''); ?></p>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : //投稿がある限り繰り返す
                    ?>
                        <?php the_post(); //次の投稿に進める
                        ?>
                        <!-- Featured blog post-->
                        <div class="card mb-4">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : //もしサムネイルの設定があれば 
                                ?>
                                    <?php the_post_thumbnail('large'); ?>
                                <?php else : //もしサムネイルがなかったら 
                                ?>
                                    <img class="card-img-top" src="<?php echo esc_url(get_theme_file_uri('screenshot.png')); ?>" alt="..." /></a>
                        <?php endif; ?>
                        <div class="card-body">
                            <div class="small text-muted"><? the_time('Y年m月d日H時'); ?></div>
                            <h2 class="card-title"><?php the_title(); ?></h2>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read more →</a>
                        </div>
                        </div>
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
                            <div class="col-sm-8">
                                <ul class="list-unstyled mb-0">
                                    <?php dynamic_sidebar('sidebar-widget'); ?>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <?php wp_footer(); ?>
</body>

</html>