<? global $wp_query;
if ($wp_query->have_posts()) :
    // 検索キーワードが未入力の場合のテキスト
    if (isset($_GET['s']) && empty($_GET['s'])) {
        echo '検索キーワード未入力';
    } else {
        echo '“' . $_GET['s'] . '”の検索結果：' . $wp_query->found_posts . '件'; // 検索キーワードと該当件数を表示
    }
?>
    <ul>
        <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
            </li>
        <?php endwhile; ?>
    </ul>
<?php else : ?>
    検索されたキーワードにマッチする記事はありませんでした
<?php endif; ?>