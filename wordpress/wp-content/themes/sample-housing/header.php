<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>sample housing</title>
    <meta name="description" content="sample housingのオフィシャルサイトです。居住用不動産、投資用不動産の購入・売却・有効活用はsample housingにお気軽にご相談ください！">
</head>

<body>
    <header>
        <div class="header-inner">
            <div class="header-content">
                <div class="header-left">
                    <h1 id="test" class="header-left-logo">
                        <a href="/">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png"
                                alt="sample housing" width="90" height="45">
                        </a>
                    </h1>
                    <div class=" header-left-contact">
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
                                    <a class="g-nav-item__link" href="/">TOP</a>
                                </li>
                                <li class="g-nav-item__list">
                                    <a class="g-nav-item__link" href="/#greeting">ご挨拶</a>
                                </li>
                                <li class="g-nav-item__list">
                                    <a class="g-nav-item__link" href="/#business">事業案内</a>
                                </li>
                                <li class="g-nav-item__list">
                                    <a class="g-nav-item__link" href="/news/">お知らせ</a>
                                </li>
                                <li class="g-nav-item__list">
                                    <a class="g-nav-item__link" href="/#company">会社概要</a>
                                </li>
                                <li class="g-nav-item__list g-nav-item__privacy">
                                    <a class="g-nav-item__link " href="/privacy/">個人情報保護方針</a>
                                </li>
                                <li class="g-nav-item__list g-nav-item__contact">
                                    <div class="btn-wrap contact-btn">
                                        <a class="g-nav-item__link contact-btn__link" href="/contact/">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-mail.svg"
                                                alt="">
                                            お問い合わせ
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <div class="sp-menu">
                                <div class="sp-menu-logo">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png"
                                        alt="sample housing" width="183" height="91">
                                </div>
                                <p class="sp-menu-address">〒612-8018<br>
                                    京都市京都区京都町1番地2</p>
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
        <?php wp_head(); ?>
    </header>