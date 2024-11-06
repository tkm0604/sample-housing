<?php get_header() ?>

<main>
    <div class="mv">
        <div class="mv__inner">
            <div class="mv-img-wrap">
                <div class="mv-img fade-in-item"></div>
                <p class="mv-notice fade-in-item">※画像はすべてイメージです。</p>
            </div>

            <div class="mv-contents-wrap">
                <div class="mv-txt fade-in-item2">
                    <h2 class="mv-txt__ttl">生活を彩る、<br>理想の家</h2>
                    <p class="mv-txt__lead">
                        この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。
                    </p>
                </div>
                <div class="slide-wrap fade-in-item3">
                    <ul class="slide-item slick01">
                        <li class="slide-item__list">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide01.jpg" alt="">
                        </li>
                        <li class="slide-item__list">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide02.jpg" alt="">
                        </li>
                        <li class="slide-item__list">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide03.jpg" alt="">
                        </li>
                        <li class="slide-item__list">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide01.jpg" alt="">
                        </li>
                        <li class="slide-item__list">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide02.jpg" alt="">
                        </li>
                        <li class="slide-item__list">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide03.jpg" alt="">
                        </li>
                    </ul>
                    <p class="mv-notice">※画像はすべてイメージです。</p>
                </div>
            </div>
        </div>
    </div>

    <!--MV-->
    <section id="greeting" class="greetig">
        <div class="greetig-inner">
            <div class="contents-inner">
                <div class="section-ttl-wrap scroll-fade-up">
                    <h2 class="section-ttl">
                        <span>Greeting</span>
                        ご挨拶
                    </h2>
                </div>
                <div class="greetig-txt-wrap scroll-fade-up">
                    <?php
                        $args = array(
                            'post_type' => 'greeting',
                            'posts_per_page' => 1,
                        );
                        $greeting_archive_query = new WP_Query($args);
                        if ($greeting_archive_query->have_posts()) :
                            while ($greeting_archive_query->have_posts()) : $greeting_archive_query->the_post();

                        ?>
                    <p class="greetig-txt">
                        <?php echo nl2br(get_field('text')); ?>
                    </p>
                    <p class="greetig-signature">代表取締役社長　<?php the_field('signature'); ?></p>
                    <?php
                            endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                </div>
            </div>
            <div class="greeting-loop">
                <picture>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/greeting-bg-txt.png"
                        alt="SAMPLE HOUSING">
                </picture>
                <picture>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/greeting-bg-txt.png"
                        alt="SAMPLE HOUSING">
                </picture>
            </div>
        </div>
    </section>

    <!--greeting-->

    <section id="business" class="business">
        <div class="contents-inner">
            <div class="business-img-wrap fade-up-item">
                <div class="business-img"></div>
                <p class="business-img-notice">※画像はすべてイメージです。</p>

                <div class="business-img-sub">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business-02.jpg" alt="">
                </div>
            </div>
            <div class="business-contents-wrap">
                <h2 class="section-ttl fade-up-item">
                    <span>Business</span>
                    事業案内
                </h2>
                <ul class="business-list">
                    <li class="business-list__item fade-up-item">
                        <p class="list-ttl"><span>01</span>不動産売買</p>
                        <p class="list-txt">
                            この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
                    </li>
                    <li class="business-list__item fade-up-item">
                        <p class="list-ttl"><span>02</span>新築分譲</p>
                        <p class="list-txt">
                            この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
                    </li>
                    <li class="business-list__item fade-up-item">
                        <p class="list-ttl"><span>03</span>建築</p>
                        <p class="list-txt">
                            この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
                    </li>
                    <li class="business-list__item fade-up-item">
                        <p class="list-ttl"><span>04</span>◯◯◯◯◯◯◯◯</p>
                        <p class="list-txt">
                            この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- business -->

    <section id="case" class="case">
        <div class="contents-inner">
            <h2 class="section-ttl  fade-up-item">
                <span>Case</span>
                施工事例
            </h2>
            <ul class="case-list">
                <?php
                    $args = array(
                        'post_type' => 'case',
                        'posts_per_page' => 4,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );
                    $case_archive_query = new WP_Query($args);
                    if ($case_archive_query->have_posts()) :
                        while ($case_archive_query->have_posts()) : $case_archive_query->the_post();

                    ?>
                <li class="case-list-item  fade-up-item">
                    <img class="case-list-item__img" src="<?php the_field('image'); ?>" alt="施工事例">
                    <p class="case-list-item__ttl"><?php the_title(); ?></p>
                    <p class="case-list-item__txt"><?php the_field('comment'); ?></p>
                </li>
                <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
            </ul>
        </div>
    </section>
    <!-- case -->

    <section id="contact" class="contact">
        <div class="contents-inner">
            <h2 class="section-ttl  fade-up-item">
                <span>Contact</span>
                お問い合わせは<br>こちら
            </h2>

            <div class="contact-mail  fade-up-item">
                <img class="contact-mail__icon"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-mail-wht.svg" alt="">
                <p class="contact-mail__txt">メールでお問い合わせ</p>
                <div class="btn-wrap">
                    <a class="contact-btn__link" href="./contact/">
                        お問い合わせフォーム
                    </a>
                </div>
            </div>

            <div class="contact-phone  fade-up-item">
                <img class="contact-phone__icon"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-phone-wht.svg" alt="">
                <p class="contact-phone__txt">075-123-4567</p>
                <p class="contact-phone__sub">
                    平日：9:30～17:30（水曜日除く）<br>
                    土日：9:00～16:00
                </p>
            </div>

        </div>
    </section>
    <!-- contact -->

    <section id="news" class="news">
        <div class="contents-inner">
            <div class="news-left">
                <h2 class="section-ttl  fade-up-item">
                    <span>News</span>
                    お知らせ
                </h2>
                <div class="btn-wrap  fade-up-item">
                    <a class="contact-btn__link" href="/news/">
                        一覧を見る
                    </a>
                </div>
            </div>
            <div class="news-right">
                <ul class="news-list">
                    <?php
                        $args = array(
                            'post_type' => 'news',
                            'posts_per_page' => 3,
                            'orderby' => 'date',
                            'order' => 'DESC'
                        );
                        $news_archive_query = new WP_Query($args);
                        if ($news_archive_query->have_posts()) :
                            while ($news_archive_query->have_posts()) : $news_archive_query->the_post();
                        ?>

                    <li class="news-list__item fade-up-item">
                        <a class="news-list__link" href="<?php the_permalink(); ?>">
                            <span><?php echo get_the_date(); ?></span>
                            <?php the_title(); ?>
                        </a>
                    </li>
                    <?php
                            endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                </ul>
            </div>
        </div>
    </section>
    <!-- contact -->

    <section id="company" class="company  fade-up-item">
        <?php get_template_part('parts/company-tabel-content'); ?>
    </section>


</main>
<div class="gotop show" id="goTop"><a href="#"><span class="dli-arrow-up"></span>TOP</a></div>
<?php get_footer() ?>