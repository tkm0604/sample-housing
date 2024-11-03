<?php get_header() ?>

<body>
    <header>
        <div class="header-inner">
            <div class="header-content">
                <div class="header-left">
                    <h1 class="header-left-logo">
                        <a href="./">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="藤城ハウジング">
                        </a>
                    </h1>
                    <div class="header-left-contact">
                        <div class="header-left-contact__top-wrap">
                            <p class="header-left-contact__tel">075-123-4567</p>
                            <p class="header-left-contact__fax"><span>FAX.</span>075-654-3210</p>
                        </div>
                        <p class="header-left-contact__txt">平日：9:30～17:30（水曜日除く）<br
                                class="header-menu-br">／土日：9:00～16:00
                        </p>
                    </div>
                </div>
                <div class="header-right">
                    <button id="burger" class="header-nav-button" type="button">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <nav class="g-nav">
                        <div class="g-nav-inner">
                            <ul class="g-nav-item">
                                <li class="g-nav-item__list">
                                    <a class="g-nav-item__link" href="">TOP</a>
                                </li>
                                <li class="g-nav-item__list">
                                    <a class="g-nav-item__link" href="#greeting">ご挨拶</a>
                                </li>
                                <li class="g-nav-item__list">
                                    <a class="g-nav-item__link" href="#business">事業案内</a>
                                </li>
                                <li class="g-nav-item__list">
                                    <a class="g-nav-item__link" href="./news/">お知らせ</a>
                                </li>
                                <li class="g-nav-item__list">
                                    <a class="g-nav-item__link" href="#company">会社概要</a>
                                </li>
                                <li class="g-nav-item__list g-nav-item__privacy">
                                    <a class="g-nav-item__link " href="./privacy/">個人情報保護方針</a>
                                </li>
                                <li class="g-nav-item__list g-nav-item__contact">
                                    <div class="btn-wrap contact-btn">
                                        <a class="g-nav-item__link contact-btn__link" href="./contact/">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-mail.svg"
                                                alt="">
                                            お問い合わせ
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <div class="sp-menu">
                                <div class="sp-menu-logo">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp-menu-logo.png"
                                        alt="藤城ハウジング">
                                </div>
                                <p class="sp-menu-address">〒612-8018<br>
                                    京都市京都区京都町1番地1</p>
                                <div class="sp-menu-tel">
                                    <a href="tel:075-123-4567">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sp-phone.svg"
                                            alt="">
                                        075-123-4567</a>
                                </div>
                                <div class="sp-menu-time">
                                    <p class="sp-menu-time__txt">平日：9:30～17:30（水曜日除く）</p>
                                    <p class="sp-menu-time__txt">土日：9:00～16:00</p>
                                    <p class="sp-menu-time__fax"><span>FAX.</span>075-654-3210</p>
                                </div>
                                <div class="btn-wrap contact-btn">
                                    <a class="g-nav-item__link contact-btn__link" href="./contact/">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-mail.svg"
                                            alt="">
                                        お問い合わせ
                                    </a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
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
                        <p class="greetig-txt">
                            この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
                        </p>
                        <p class="greetig-signature">代表取締役社長　〇〇〇〇</p>
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
                    <li class="case-list-item  fade-up-item">
                        <img class="case-list-item__img"
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/case-01.jpg" alt="施工事例">
                        <p class="case-list-item__ttl">◯◯◯◯◯◯◯◯な家</p>
                        <p class="case-list-item__txt">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
                    </li>
                    <li class="case-list-item  fade-up-item">
                        <img class="case-list-item__img"
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/case-02.jpg" alt="施工事例">
                        <p class="case-list-item__ttl">◯◯◯◯◯◯◯◯な家</p>
                        <p class="case-list-item__txt">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
                    </li>
                    <li class="case-list-item  fade-up-item">
                        <img class="case-list-item__img"
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/case-03.jpg" alt="施工事例">
                        <p class="case-list-item__ttl">◯◯◯◯◯◯◯◯な家</p>
                        <p class="case-list-item__txt">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
                    </li>
                    <li class="case-list-item  fade-up-item">
                        <img class="case-list-item__img"
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/case-04.jpg" alt="施工事例">
                        <p class="case-list-item__ttl">◯◯◯◯◯◯◯◯な家</p>
                        <p class="case-list-item__txt">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
                    </li>
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