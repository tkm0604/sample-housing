<?php
/*
Template Name: 個人情報保護方針
*/
?>
<?php get_header() ?>

<main class="subpage privacy">
    <div class="mv">
        <div class="mv__inner">
            <h2 class="page-ttl">
                <span>Privacy policy</span>
                個人情報保護方針
            </h2>
        </div>
    </div>
    <!--MV-->
    <div class="pageGuide">
        <ul class="breadcrumbs">
            <li class="active"><a href="../">TOP</a></li>
            <li class="separator"></li>
            <li>個人情報保護方針</li>
        </ul>
    </div>
    <!--パンクズ-->
    <section class="privacy-contents">
        <div class="contents-inner">
            <p class="privacy-lead fade-up-item">本ウェブサイトは、株式会社藤城ハウジング（以下「当社」）の事業内容等を紹介するサイトです。</p>
            <ul class="privacy-list">
                <li class="privacy-list__item fade-up-item">
                    <p class="privacy-list__ttl">個人情報の取り扱い</p>
                    <p class="privacy-list__txt">
                        当社は、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、個人情報の保護を推進致します。</p>
                </li>
                <li class="privacy-list__item fade-up-item">
                    <p class="privacy-list__ttl">個人情報の管理</p>
                    <p class="privacy-list__txt">
                        当社は、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行ないます。
                    </p>
                </li>
                <li class="privacy-list__item fade-up-item">
                    <p class="privacy-list__ttl">個人情報の利用目的</p>
                    <p class="privacy-list__txt">
                        本ウェブサイトでは、お客様からのお問い合わせ時に、お名前、e-mailアドレス、電話番号等の個人情報をご登録いただく場合がございますが、これらの個人情報はご提供いただく際の目的以外では利用いたしません。<br>
                        お客さまからお預かりした個人情報は、当社からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。</p>
                </li>
                <li class="privacy-list__item fade-up-item">
                    <p class="privacy-list__ttl">個人情報の第三者への開示・提供の禁止</p>
                    <p class="privacy-list__txt">
                        当社は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。
                    </p>
                    <ul class="privacy-list-sub fade-up-item">
                        <li class="privacy-list-sub__item">お客さまの同意がある場合</li>
                        <li class="privacy-list-sub__item">お客さまが希望されるサービスを行なうために当社が業務を委託する業者に対して開示する場合</li>
                        <li class="privacy-list-sub__item">法令に基づき開示することが必要である場合</li>
                    </ul>
                </li>
                <li class="privacy-list__item fade-up-item">
                    <p class="privacy-list__ttl">個人情報の安全対策</p>
                    <p class="privacy-list__txt">
                        当社は、個人情報の正確性及び安全性確保のために、セキュリティに万全の対策を講じています。
                    </p>
                </li>
                <li class="privacy-list__item fade-up-item">
                    <p class="privacy-list__ttl">ご本人の照会</p>
                    <p class="privacy-list__txt">
                        お客さまがご本人の個人情報の照会・修正・削除などをご希望される場合には、ご本人であることを確認の上、対応させていただきます。
                    </p>
                </li>
                <li class="privacy-list__item fade-up-item">
                    <p class="privacy-list__ttl">法令、規範の遵守と見直し</p>
                    <p class="privacy-list__txt">当社は、保有する個人情報に関して適用される日本の法令、その他規範を遵守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。
                    </p>
                </li>
                <li class="privacy-list__item fade-up-item">
                    <p class="privacy-list__ttl">お問い合せ</p>
                    <p class="privacy-list__txt">
                        当社の個人情報の取扱に関するお問い合せは下記までご連絡ください。
                    </p>
                </li>
            </ul>
            <div class="privacy-contact  fade-up-item">
                <div class="privacy-contact__left">
                    <p class="privacy-contact__ttl">Sample Housing</p>
                    <span class="privacy-contact__line"></span>
                    <p class="privacy-contact__add">〒612-0000<br>
                        京都市京都区京都町1番地1
                    </p>
                    <p class="privacy-contact__tel">TEL. 075-123-4567</p>
                    <p class="privacy-contact__time">9:30～17:30（水曜日・祝日除く）</p>
                    <p class="privacy-contact__fax">FAX. 075-654-3210</p>
                </div>
                <div class="privacy-contact__right">
                    <div class="btn-wrap">
                        <a class="contact-btn__link" href="../contact/">
                            <img src="../assets/img/icon-mail.svg" alt="">
                            お問い合わせはこちら
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="company  fade-up-item">
        <div class="contents-inner">
            <div class="company-left">
                <h2 class="section-ttl">
                    <span>Company</span>
                    会社概要
                </h2>
                <?php get_template_part('parts/company-tabel-content'); ?>
            </div>
            <div class="company-right">
                <div class="map-wrap">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3270.9920686386085!2d135.78060797629308!3d34.93173587078056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60010fcefb7a7637%3A0xa4cf83041ebc41f8!2z77yI5qCq77yJ6Jek5Z-O44OP44Km44K444Oz44Kw!5e0!3m2!1sja!2sjp!4v1722484799100!5m2!1sja!2sjp"
                        width="556" height="478" style="border:0;" allowfullscreen=""
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
    </section>


</main>
<div class="gotop show" id="goTop"><a href="#"><span class="dli-arrow-up"></span>TOP</a></div>


<?php get_footer() ?>