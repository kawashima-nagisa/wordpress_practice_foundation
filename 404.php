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
    <h1>404 Not Found</h1>
    <p>申し訳ございません</p>
    <p>お探しのページは削除されました。</p>
    <a href="<?php echo esc_url(home_url('/')); ?>">トップへ戻る></a>
    <?php get_footer(); ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <?php wp_footer(); ?>
</body>

</html>