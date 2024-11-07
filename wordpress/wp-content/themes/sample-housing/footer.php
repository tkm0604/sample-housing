<footer>
    <div class="footer-inner">
        <div class="footer-left">
            <img class="footer-left-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png"
                alt="sample housing" width="190" height="95">
            <div class="footer-left-address">
                <p class="footer-left-address__txt">〒612-8018</p>
                <p class="footer-left-address__txt">京都市京都区京都町1番地1</p>
            </div>
            <div class="footer-left-contact">
                <div class="footer-left-contact-top-wrap">
                    <p class="footer-left-contact__tel">075-123-4567</p>
                    <p class="footer-left-contact__fax"><span>FAX.</span>075-654-3210</p>
                </div>
                <p class="footer-left-contact__txt">平日：9:30～17:30（水曜日除く）</p>
                <p class="footer-left-contact__txt">土日：9:00～16:00</p>
            </div>
        </div>

        <div class="footer-right">
            <ul class="footer-right-list">
                <li class="footer-right-list__item">
                    <a href="/">TOP</a>
                </li>
                <li class="footer-right-list__item">
                    <a href="/#greeting">ご挨拶</a>
                </li>
                <li class="footer-right-list__item">
                    <a href="/#business">事業案内</a>
                </li>
                <li class="footer-right-list__item">
                    <a href="/news/">お知らせ</a>
                </li>
                <li class="footer-right-list__item">
                    <a href="/#company">会社概要</a>
                </li>
            </ul>
            <a class="footer-right-privacy" href="/privacy/">個人情報保護方針</a>
            <div class="btn-wrap">
                <a class="contact-btn__link" href="/contact/">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-mail.svg" alt="">
                    お問い合わせ
                </a>
            </div>
        </div>
    </div>
    <p class="footer-copyright">Copyright (C) SAMPLE HOUSING All Rights Reserved.</p>

    <div class="fixed-footer">
        <div class="fixed-footer__left">
            <p class="fixed-footer__tel">
                <a href="tel:075-123-4567">
                    075-123-4567</a>
            </p>
            <p class="fixed-footer__txt">平日：9:30～17:30（水曜日除く）／土日：9:00～16:00</p>
        </div>
        <div class="fixed-footer__right">
            <div class="btn-wrap">
                <a class="contact-btn__link" href="/contact">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-mail.svg" alt="">
                    お問い合わせ
                </a>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</footer>
<!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script> -->

</body>

</html>