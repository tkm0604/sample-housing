<?php
/*
Template Name: お問い合わせ
*/
?>
<?php get_header() ?>
<main class="subpage privacy">
    <div class="mv">
        <div class="mv__inner">
            <h2 class="page-ttl">
                <span>Contact</span>
                <?php  echo get_the_title() ?>
            </h2>
        </div>
    </div>
    <!--MV-->
    <div class="pageGuide">
        <ul class="breadcrumbs">
            <li class="active"><a href="../">TOP</a></li>
            <li class="separator"></li>
            <li><?php  echo get_the_title() ?></li>
        </ul>
    </div>
    <!--パンクズ-->
    <section class="privacy-contents">
        <div class="contents-inner">
            <div class="form-wrap">
                <form action="post">
                    <div class="contact-form">
                        <dl class="require">
                            <dt>お名前</dt>
                            <dd>
                                <input type=" text" name="name" id="name" size="60" value="" placeholder="山田 太郎">
                            </dd>
                        </dl>
                        <dl class="require">
                            <dt>お名前（ふりがな）</dt>
                            <dd>
                                <input type="text" name="kana" id="kana" size="60" value="" placeholder="やまだ たろう">
                            </dd>
                        </dl>
                        <dl class="require">
                            <dt>メールアドレス</dt>
                            <dd>
                                <input type="email" name="email" id="email" size="60" value="" placeholder="○○○○○@○○.○○"
                                    data-conv-half-alphanumeric="true">
                            </dd>
                        </dl>
                        <dl class="require">
                            <dt>メールアドレス（確認）</dt>
                            <dd>
                                <input type="email" name="email" id="email" size="60" value="" placeholder="○○○○○@○○.○○"
                                    data-conv-half-alphanumeric="true">
                            </dd>
                        </dl>
                        <dl class="require">
                            <dt>電話番号</dt>
                            <dd class="tel-field">
                                <input type="text" name="tel[data][0]" size="6" maxlength="5" value=""
                                    data-conv-half-alphanumeric="true">
                                - <input type="text" name="tel[data][1]" size="5" maxlength="4" value=""
                                    data-conv-half-alphanumeric="true">
                                - <input type="text" name="tel[data][2]" size="5" maxlength="4" value=""
                                    data-conv-half-alphanumeric="true">
                            </dd>
                        </dl>
                        <dl class="require">
                            <dt>お問い合わせ項目</dt>
                            <dd class="select-radio">
                                <input type="radio" name="contact" id="contact-email" value="email">
                                <label for="contact-email">Eメール</label>

                                <input type="radio" name="contact" id="contact-phone" value="phone">
                                <label for="contact-phone">電話</label>
                            </dd>
                        </dl>
                        <dl class="require">
                            <dt>希望連絡方法</dt>
                            <dd>
                                <select name="contact">
                                    <option value="sell" name="contact-sale" id="contact-sale">家を売りたい</option>
                                    <option value="buy" name="contact-rent" id="contact-rent">家を買いたい</option>
                                </select>
                            </dd>
                        </dl>
                        <dl>
                            <dt>お問い合わせ内容</dt>
                            <dd>
                                <textarea name="message" id="message" cols="50" rows="5"
                                    placeholder="お問い合わせ内容を入力してください"></textarea>
                            </dd>
                        </dl>
                    </div>
                    <div class="contact-form-foot">
                        <div class="privacy-check">
                            <div class="privacy-check_txt">
                                <p><span>プライバシーポリシー</span></p>
                                <p>
                                    当サイトでは、お問い合わせいただいた際に取得したお客様の個人情報（氏名、メールアドレスなど）は、<br class="pc-only">
                                    お問い合わせ対応および当サイトのサービス向上のためにのみ利用いたします。<br>
                                    第三者に提供することはなく、お客様の同意がない限り他の目的には使用いたしません。<br><br>
                                    個人情報の取り扱いについてご質問がある場合は、当サイトの管理者までご連絡ください。</p>
                            </div>
                            <label>
                                <input type="checkbox" name="privacy[data][]" value="プライバシーポリシーに同意する">
                                <span class="mwform-checkbox-field-text">プライバシーポリシーに同意する</span>
                            </label>

                            <input type="hidden" name="privacy[separator]" value=",">

                            <input type="hidden" name="__children[privacy][]" value="">
                        </div>
                        <div class="btn-wrap">
                            <input type="submit" name="submitConfirm" value="確認" class="btn btn-primary btn-submit">
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </section>
    <section class="company  fade-up-item">
        <?php get_template_part('parts/company-tabel-content'); ?>

    </section>


</main>
<div class="gotop show" id="goTop"><a href="#"><span class="dli-arrow-up"></span>TOP</a></div>
<script>
document.querySelectorAll('input[data-conv-half-alphanumeric="true"]').forEach(function(input) {
    input.addEventListener('input', function() {
        // 入力された値を半角英数字に変換
        this.value = this.value.replace(/[Ａ-Ｚａ-ｚ０-９]/g, function(s) {
            return String.fromCharCode(s.charCodeAt(0) - 0xFEE0);
        });
    });
});
</script>
<?php get_footer() ?>