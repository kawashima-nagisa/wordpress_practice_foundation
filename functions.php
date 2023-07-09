<?php

function custom_theme_setup()
{  //head内にフィードリンクを出力
    add_theme_support('automatic-feed-links');
    //表示ページに合わせたタイトルタグを出力する
    add_theme_support('title-tag');
    //ブロックエディタ用の標準スタイルを有効化
    add_theme_support('wp-block-styles');
    //埋め込みコンテンツをレスポンシブ対応に
    add_theme_support('responsive-embeds');
    //サムネイルの画像を設定
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(231, 177, false);
    //第三引数　縦横比を保ったまま小さくする　false
    //第三引数　指定のサイズでトリミングをする　true
    //メニューの有効化　
    register_nav_menus(
        array(
            'globalnav' => 'グローバルナビゲーション',
        )
    );
}
add_action('after_setup_theme', 'custom_theme_setup');


function testsite_scripts()
{
    wp_enqueue_style(
        'main_style', //ハンドル名（必須）スタイルシートを識別するためのユニークな（他と重複しない）ハンドル名を指定。link 要素の id 属性の値としても使用されます
        // get_template_directory_uri() . '/css/styles.css',
        get_theme_file_uri('css/styles.css'),
        array(), //依存関係
        '1.0', //version
        'all' //メディアタイプ
    );
}
//どのタイミングで実行するかのアクションフックを追記する
add_action('wp_enqueue_scripts', 'testsite_scripts');
//wp_enque_scripts：独自のCSSファイルやJavaScriptファイルを読み込む

function custom_widget_register()
{
    register_sidebar(array(
        'name' => 'サイドバーウィジェットエリア',
        'id' => 'sidebar-widget',
        'description' => 'ブログのサイドバーに表示されます',

    ));
}
add_action('widgets_init', 'custom_widget_register');


add_action('init', function () {
    register_post_type('item', [
        'label' => '商品',
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-store',
        'show_in_rest' => true,
        'rest_base' => 'hogehoge',
        'has_archive' => true,
        // これないとカスタム投稿は一覧ページが作れない
        'hierarchical' => true,
        //カスタム投稿タイプはこれを入れないと固定ページのように階層にならない
        //階層構造にさせることで固定ページのようにURLを階層化させることができる
        'supports' => ['thumbnail', 'title', 'editor', 'page-attributes', 'custom-fields'],


    ]);
    register_taxonomy('genre', 'item', [
        //２番目の引数　itemにはpost,pageなどともしてそれぞれに追加することもできる

        'label' => '商品ジャンル',
        'hierarchical' => true,
        //カテゴリーと同じように使うことができる
        'show_in_rest' => true,
        //これも合わせてつけないと投稿でカテゴリーが出てこない

    ]);
});



add_shortcode('date', function () {
    // return get_the_title();
    return date('Y年n月j日');
});
// これを使ったらショートコード内でなくてエディター上に直接書いても良い
add_shortcode('sum', function ($atts) {
    $atts = shortcode_atts([
        'x' => 0,
        'y' => 0,
    ], $atts, 'sum');
    return $atts['x'] + $atts['y'];
});
