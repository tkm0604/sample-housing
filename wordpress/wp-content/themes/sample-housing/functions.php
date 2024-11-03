<?php

function sample_housing_enqueue_scripts()
{
    // Google Fonts
    wp_enqueue_style('google-fonts-noto-open-bodoni', 'https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Noto+Sans+JP:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap', [], null);

    // Site Styles
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/css/slick.css', [], '1.0.0');
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/assets/css/styles.css', [], '1.0.0');

    // WordPress標準のjQueryを使用する
    wp_enqueue_script('jquery');

    // Slick Script
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', ['jquery'], '1.0.0', true);

    // Custom Script (script.js)
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/script.js', ['jquery'], '1.0.1', true);
}

add_action('wp_enqueue_scripts', 'sample_housing_enqueue_scripts');


// ---------------------------------------------
// カスタム投稿タイプ「お知らせ」
// ---------------------------------------------
function register_news_post_type()
{
    $labels = array(
        'name'               => 'お知らせ',
        'singular_name'      => 'お知らせ',
        'menu_name'          => 'お知らせ',
        'name_admin_bar'     => 'お知らせ',
        'add_new'            => '新規追加',
        'add_new_item'       => '新しいお知らせを追加',
        'new_item'           => '新しいお知らせ',
        'edit_item'          => 'お知らせを編集',
        'view_item'          => 'お知らせを見る',
        'all_items'          => 'すべてのお知らせ',
        'search_items'       => 'お知らせを検索',
        'not_found'          => 'お知らせが見つかりません',
        'not_found_in_trash' => 'ゴミ箱にお知らせはありません'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-media-document',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'rewrite'            => array('slug' => 'news', 'with_front' => false),
        'show_in_rest'       => true
    );

    register_post_type('news', $args);
}
add_action('init', 'register_news_post_type');


// リライトルールをフラッシュしてクエリパラメータ形式でアクセスできるようにする
function add_news_rewrite_rules($wp_rewrite) {
    $rules = array(
        'news/([0-9]{4})/?$' => 'index.php?post_type=news&year=$matches[1]',
        'news/([0-9]{4})/([0-9]{2})/?$' => 'index.php?post_type=news&year=$matches[1]&monthnum=$matches[2]',
    );
    $wp_rewrite->rules = $rules + $wp_rewrite->rules;
}
add_filter('generate_rewrite_rules', 'add_news_rewrite_rules');

// 「お知らせ」ダミー記事生成
// function create_news_dummy_posts() {
//     // 既存の投稿を確認
//     $existing_posts = get_posts(array(
//         'post_type'      => 'news',
//         'post_status'    => 'any',
//         'posts_per_page' => 10,
//     ));
//     if ($existing_posts) {
//         return; // すでに投稿が存在する場合は終了
//     }

//     // 2020年1月1日〜2024年10月31日までの期間の範囲を指定
//     $start_date = strtotime('2020-01-01');
//     $end_date = strtotime('2024-10-31');

//     // ダミー投稿を20件作成
//     for ($i = 1; $i <= 20; $i++) {
//         // ランダムな日付を生成
//         $random_timestamp = mt_rand($start_date, $end_date);
//         $random_date = date('Y-m-d H:i:s', $random_timestamp); // フォーマット: 'YYYY-MM-DD HH:MM:SS'

//         // ダミー投稿データ
//         $post_data = array(
//             'post_title'    => "ダミーニュース投稿 {$i}",
//             'post_content'  => "これはダミーニュース投稿 {$i} のコンテンツです。",
//             'post_status'   => 'publish',
//             'post_type'     => 'news',
//             'post_date'     => $random_date, // ランダムな日付を割り当てる
//             'post_date_gmt' => get_gmt_from_date($random_date), // GMT日時を自動計算
//         );

//         // 投稿を登録
//         wp_insert_post($post_data);
//     }
// }
// add_action('init', 'create_news_dummy_posts', 20);

// ---------------------------------------------
// カスタム投稿タイプ「施工事例」
// ---------------------------------------------
function register_case_post_type()
{
    $labels = array(
        'name'               => '施工事例',
        'singular_name'      => '施工事例',
        'menu_name'          => '施工事例',
        'name_admin_bar'     => 'お知らせ施工事例',
        'add_new'            => '新規追加',
        'add_new_item'       => '新しい施工事例を追加',
        'new_item'           => '新しい施工事例',
        'edit_item'          => '施工事例を編集',
        'view_item'          => '施工事例を見る',
        'all_items'          => 'すべての施工事例',
        'search_items'       => '施工事例を検索',
        'not_found'          => '施工事例が見つかりません',
        'not_found_in_trash' => 'ゴミ箱に施工事例はありません'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-media-document',
        'supports'           => array('title', 'thumbnail', 'excerpt', 'custom-fields'),        
        'show_in_rest'       => true
    );

    register_post_type('case', $args);
}
add_action('init', 'register_case_post_type');


// ---------------------------------------------
// カスタム投稿タイプ「ご挨拶」
// ---------------------------------------------
function register_greeting_post_type()
{
    $labels = array(
        'name'               => 'ご挨拶',
        'singular_name'      => 'ご挨拶',
        'menu_name'          => 'ご挨拶',
        'name_admin_bar'     => 'お知らせご挨拶',
        'add_new'            => '新規追加',
        'add_new_item'       => '新しいご挨拶を追加',
        'new_item'           => '新しいご挨拶',
        'edit_item'          => 'ご挨拶を編集',
        'view_item'          => 'ご挨拶を見る',
        'all_items'          => 'すべてのご挨拶',
        'search_items'       => 'ご挨拶を検索',
        'not_found'          => 'ご挨拶が見つかりません',
        'not_found_in_trash' => 'ゴミ箱にご挨拶はありません'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'menu_position'      => 7,
        'menu_icon'          => 'dashicons-media-document',
        'supports'           => array('title', 'thumbnail', 'excerpt', 'custom-fields'),        
        'show_in_rest'       => true
    );

    register_post_type('greeting', $args);
}
add_action('init', 'register_greeting_post_type');