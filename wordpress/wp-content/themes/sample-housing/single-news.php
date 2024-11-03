<?php
wp_reset_query();
wp_reset_postdata();
get_header();
?>
<main class="subpage news-article">
    <div class="mv">
        <div class="mv__inner">
            <h2 class="page-ttl">
                <span>News</span>
                お知らせ
            </h2>
        </div>
    </div>

    <div class="pageGuide">
        <ul class="breadcrumbs">
            <li class="active"><a href="/">TOP</a></li>
            <li class="separator"></li>
            <li><a href="/news/">お知らせ</a></li>
            <li class="separator"></li>
            <li><?php the_title(); ?></li>
        </ul>
    </div>

    <section class="news-contents">
        <div class="contents-inner">
            <?php get_sidebar(); ?>
            <div class="article-contents fade-up-item">
                <article>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="article-head">
                        <p class="article-head__date"><?php echo get_the_date(); ?></p>
                        <h2 class="article-head__ttl"><?php the_title(); ?></h2>
                    </div>
                    <div class="article-body">
                        <?php the_content(); ?>
                    </div>
                    <div class="article-foot">
                        <?php
                            $prev_post = get_previous_post();
                            $next_post = get_next_post();
                            ?>
                        <?php if ($prev_post) : ?>
                        <a class="article-foot__prev" href="<?php echo get_permalink($prev_post->ID); ?>">前へ</a>
                        <?php endif; ?>
                        <a class="article-foot__all" href="/news/"><span>一覧へ戻る</span></a>
                        <?php if ($next_post) : ?>
                        <a class="article-foot__next" href="<?php echo get_permalink($next_post->ID); ?>">次へ</a>
                        <?php endif; ?>
                    </div>
                    <?php endwhile; endif; ?>
                </article>
            </div>
        </div>
    </section>
    <section class="company  fade-up-item">
        <?php get_template_part('parts/company-tabel-content'); ?>
    </section>
</main>
<div class="gotop show" id="goTop"><a href="#"><span class="dli-arrow-up"></span>TOP</a></div>
<?php get_footer(); ?>