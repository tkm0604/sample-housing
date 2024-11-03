<?php
/*
Template Name: お知らせ一覧
*/
?>
<?php get_header() ?>
<main class="subpage news-article">
    <div class="mv">
        <div class="mv__inner">
            <h2 class="page-ttl">
                <span>News</span>
                お知らせ
            </h2>
        </div>
    </div>
    <!--MV-->
    <div class="pageGuide">
        <ul class="breadcrumbs">
            <li class="active"><a href="../">TOP</a></li>
            <li class="separator"></li>
            <li>お知らせ</li>
        </ul>
    </div>
    <!--パンクズ-->

    <section class="news-contents">
        <div class="contents-inner">
            <?php get_sidebar(); ?>
            <div class="news-all-articles">
                <ul class="news-list">
                    <?php
                            // 年・月のGETパラメータを取得
                            $year = get_query_var('year');
                            $monthnum = get_query_var('monthnum');

                            //現在のページ番号を取得
                            $paged = get_query_var('paged') ? get_query_var('paged'):1;
                            // クエリの設定
                            $args = array(
                                'post_type' => 'news',
                                'posts_per_page' => 5,
                                'year'          => $year,
                                'monthnum'      => $monthnum,
                                'paged' => $paged, // ページネーションのためのパラメータ
                            );

                            $news_archive_query = new WP_Query($args);

                            if($news_archive_query->have_posts()) :
                                while ($news_archive_query-> have_posts()) : $news_archive_query->the_post();
                                global $post;
                                $obj = get_post_type_object($post->post_type);
                        ?>

                    <li class="news-list__item fade-up-item">
                        <a class="news-list__link" href="<?php the_permalink() ?>">
                            <span><?php echo get_the_date(); ?></span>
                            <?php the_content(); ?>
                        </a>
                    </li>
                    <?php 
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </ul>
                <!-- <div class="pagenavi fade-up-item">
                        <a class="prev" href=""></a> 
                        <span class="page current">1</span>
                        <a class="page" href="">2</a>
                        <a class="page" href="">3</a>
                        <a class="page" href="">4</a>
                        <span>…</span>
                        <a class="page" href="">8</a>
                        <a class="next" href=""></a>
                    </div> -->
                <div class="pagenavi fade-up-item">
                    <?php wp_pagenavi(array('query' => $news_archive_query)); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="company  fade-up-item">
        <?php get_template_part('parts/company-tabel-content'); ?>
    </section>


</main>
<div class="gotop show" id="goTop"><a href="#"><span class="dli-arrow-up"></span>TOP</a></div>

<?php get_footer() ?>