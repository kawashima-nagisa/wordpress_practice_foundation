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
