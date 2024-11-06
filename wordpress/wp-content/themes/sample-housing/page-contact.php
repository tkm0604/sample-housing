<?php
/*
Template Name: お問い合わせ
*/


// バリデーションファイルの読み込み
require_once get_template_directory() . '/form/form-validation.php';


// エラーメッセージの初期化
$errors = [];

// 初期設定
$form_step = 'edit'; // 初期は入力画面のステップ

// nonce生成
$contact_form_nonce = wp_create_nonce('contact_form_action');


//フォームが送信された場合のform_step の状態を確認
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //初回のアクセスやPOSTデータが空の場合には、デフォルト値として 'edit' を設定
    $form_step = $_POST['form_step'] ?? 'edit';

    // 入力画面と確認画面でバリデーションの実行
    if ($form_step ===  'edit' || $form_step === 'confirm' || $form_step === 'complete') 
    {
        $errors = validateFormData($_POST);

        // `edit` ステップでバリデーションをクリアした場合のみ、`confirm` ステップに進む
        if ($form_step === 'edit' && empty($errors)) {
            $form_step = 'confirm';
        }

        // バリデーションエラーがある場合は、常に `edit` ステップに留まる
        if (!empty($errors)) {
            $form_step = 'edit';
        }

    }
}

get_header();
?>

<main class="subpage privacy">
    <div class="mv">
        <div class="mv__inner">
            <h2 class="page-ttl">
                <span>Contact</span>
                <?php echo get_the_title(); ?>
            </h2>
        </div>
    </div>

    <div class="contents-inner">
        <!-- 入力画面 -->
        <div class="form-wrap">
            <?php if ($form_step === 'edit') : ?>
            <form method="post" action="<?php echo esc_url(get_permalink()); ?>">
                <div class="contact-form">
                    <dl class="require">
                        <dt>お名前</dt>
                        <dd>
                            <input type="text" name="user_name" id="name" size="60"
                                value="<?php echo esc_attr($_POST['user_name'] ?? '') ?>" placeholder="山田 太郎">
                            <?php if (!empty($errors['user_name'])) : ?>
                            <p class=" error-message"><?php echo esc_html($errors['user_name']); ?></p>
                            <?php endif; ?>
                        </dd>
                    </dl>
                    <dl class="require">
                        <dt>お名前（ふりがな）</dt>
                        <dd>
                            <input type="text" name="kana" id="kana" size="60"
                                value="<?php echo esc_attr($_POST['kana'] ?? '') ?>" placeholder="やまだ たろう">
                            <?php if (!empty($errors['kana'])) : ?>
                            <p class="error-message"><?php echo esc_html($errors['kana']); ?></p>
                            <?php endif; ?>
                        </dd>
                    </dl>
                    <dl class="require">
                        <dt>メールアドレス</dt>
                        <dd>
                            <input type="email" name="user_email" id="email" size="60"
                                value="<?php echo esc_attr($_POST['user_email'] ?? '') ?>" placeholder="○○○○○@○○.○○"
                                data-conv-half-alphanumeric="true">
                            <?php if (!empty($errors['user_email'])) : ?>
                            <p class="error-message"><?php echo esc_html($errors['user_email']); ?></p>
                            <?php endif; ?>
                        </dd>
                    </dl>
                    <dl class="require">
                        <dt>メールアドレス（確認）</dt>
                        <dd>
                            <input type="email" name="check_user_email" id="check_user_email" size="60"
                                value="<?php echo esc_attr($_POST['check_user_email'] ?? '') ?>"
                                placeholder="○○○○○@○○.○○" data-conv-half-alphanumeric="true">
                            <?php if (!empty($errors['check_user_email'])) : ?>
                            <p class="error-message"><?php echo esc_html($errors['check_user_email']); ?></p>
                            <?php endif; ?>
                        </dd>
                    </dl>
                    <dl class="require">
                        <dt>電話番号</dt>
                        <dd class="tel-field">
                            <input type="text" name="tel[data][0]" size="6" maxlength="5"
                                value="<?php echo esc_attr($_POST['tel']['data'][0] ?? ''); ?>"
                                data-conv-half-alphanumeric="true">
                            - <input type="text" name="tel[data][1]" size="5" maxlength="4"
                                value="<?php echo esc_attr($_POST['tel']['data'][1] ?? ''); ?>"
                                data-conv-half-alphanumeric="true">
                            - <input type="text" name="tel[data][2]" size="5" maxlength="4"
                                value="<?php echo esc_attr($_POST['tel']['data'][2] ?? ''); ?>"
                                data-conv-half-alphanumeric="true">
                            <?php if (!empty($errors['tel_part1'])) : ?>
                            <p class="error-message"><?php echo esc_html($errors['tel_part1']); ?></p>
                            <?php endif; ?>
                            <?php if (!empty($errors['tel_part2'])) : ?>
                            <p class="error-message"><?php echo esc_html($errors['tel_part2']); ?></p>
                            <?php endif; ?>
                            <?php if (!empty($errors['tel_part3'])) : ?>
                            <p class="error-message"><?php echo esc_html($errors['tel_part3']); ?></p>
                            <?php endif; ?>
                            <?php if (!empty($errors['tel'])) : ?>
                            <p class="error-message"><?php echo esc_html($errors['tel']); ?></p>
                            <?php endif; ?>
                        </dd>
                    </dl>
                    <dl class="require">
                        <dt>希望連絡方法</dt>
                        <dd class="select-radio">
                            <input type="radio" name="contact_method" id="contact-email" value="email"
                                <?php echo (isset($_POST['contact_method']) && $_POST['contact_method'] === 'email') ? 'checked' : ''; ?>>
                            <label for="contact-email">Eメール</label>

                            <input type="radio" name="contact_method" id="contact-phone" value="phone"
                                <?php echo (isset($_POST['contact_method']) && $_POST['contact_method'] === 'phone') ? 'checked' : ''; ?>>
                            <label for="contact-phone">電話</label>
                            <?php if (!empty($errors['contact_method'])) : ?>
                            <p class="error-message"><?php echo esc_html($errors['contact_method']); ?></p>
                            <?php endif; ?>
                        </dd>
                    </dl>
                    <dl>
                        <dt>お問い合わせ項目</dt>
                        <dd>
                            <select name="contact_option">
                                <option value="sell"
                                    <?php echo (isset($_POST['contact_option']) && $_POST['contact_option'] === 'sell') ? 'selected' : ''; ?>>
                                    家を売りたい</option>
                                <option value="buy"
                                    <?php echo (isset($_POST['contact_option']) && $_POST['contact_option'] === 'buy') ? 'selected' : ''; ?>>
                                    家を買いたい</option>
                                <option value="other"
                                    <?php echo (isset($_POST['contact_option']) && $_POST['contact_option'] === 'other') ? 'selected' : ''; ?>>
                                    その他</option>
                            </select>
                        </dd>
                    </dl>
                    <dl>
                        <dt>お問い合わせ内容</dt>
                        <dd>
                            <textarea name="message" id="message" cols="50" rows="5"
                                placeholder="お問い合わせ内容を入力してください"><?php echo esc_html($_POST['message'] ?? ''); ?></textarea>
                            <?php if (!empty($errors['message'])) : ?>
                            <p class="error-message"><?php echo esc_html($errors['message']); ?></p>
                            <?php endif; ?>
                        </dd>
                    </dl>
                    <!-- honeypot -->
                    <input type="text" name="honeypot" id="honeypot" style="display:none">
                    <!-- wp-nonceの追加 -->
                    <input type="hidden" name="contact_form_nonce"
                        value="<?php echo wp_create_nonce('contact_form_action'); ?>">
                </div>
                <div class=" contact-form-foot">
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
                            <input type="checkbox" name="privacy" value="プライバシーポリシーに同意する">
                            <span class="mwform-checkbox-field-text">プライバシーポリシーに同意する</span>
                        </label>
                        <?php if (!empty($errors['privacy'])) : ?>
                        <p class="error-message"><?php echo esc_html($errors['privacy']); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="btn-wrap">
                        <input type="hidden" name="form_step" value="confirm">
                        <input type="submit" name="submitConfirm" value="確認" class="btn btn-primary btn-submit">
                    </div>
                </div>
            </form>




            <!-- 確認画面 -->
            <?php elseif ($form_step === 'confirm') : ?>
            <?php // HoneypotとNonceの検証
                if (!empty($_POST['honeypot'])) : ?>
            <p>エラー: スパムの可能性があります。</p>
            <?php
                elseif (!isset($_POST['contact_form_nonce']) || !wp_verify_nonce(
                    $_POST['contact_form_nonce'],
                    'contact_form_action'
                )) : ?>
            <p>エラー: 認証に失敗しました。</p>

            <?php else : ?>

            <!-- 入力内容確認画面 -->
            <h3>入力内容確認画面</h3>
            <form>
                <div class="contact-form">
                    <dl class="require">
                        <dt>お名前</dt>
                        <dd>
                            <p class="confirm-txt"><?php echo esc_attr($_POST['user_name']) ?></p>
                        </dd>
                    </dl>
                    <dl class="require">
                        <dt>お名前（ふりがな）</dt>
                        <dd>
                            <p class="confirm-txt"><?php echo esc_attr($_POST['kana']) ?></p>
                        </dd>
                    </dl>
                    <dl class="require">
                        <dt>メールアドレス</dt>
                        <dd>
                            <p class="confirm-txt"><?php echo esc_attr($_POST['user_email']) ?></p>
                        </dd>
                    </dl>
                    <dl class="require">
                        <dt>メールアドレス（確認）</dt>
                        <dd>
                            <p class="confirm-txt"><?php echo esc_attr($_POST['check_user_email']) ?></p>
                        </dd>
                    </dl>
                    <dl class="require">
                        <dt>電話番号</dt>
                        <dd class="tel-field tel-field-wrap">
                            <p class="confirm-txt"><?php echo esc_attr($_POST['tel']['data'][0] ?? ''); ?></p>
                            - <p class="confirm-txt"><?php echo esc_attr($_POST['tel']['data'][1] ?? ''); ?></p>
                            - <p class="confirm-txt"><?php echo esc_attr($_POST['tel']['data'][2] ?? ''); ?></p>
                        </dd>
                    </dl>
                    <dl class="require">
                        <dt>お問い合わせ項目</dt>
                        <dd class="select-radio">
                            <p>
                                <?php echo esc_html($_POST['contact_option'] === 'sell' ? '家を売りたい' : ($_POST['contact_option'] === 'buy' ? '家を買いたい' : 'その他')) ?>
                            </p>
                        </dd>
                    </dl>
                    <dl class="require">
                        <dt>希望連絡方法</dt>
                        <dd>
                            <p>
                                <?php echo (isset($_POST['contact_method']) ? esc_html($_POST['contact_method'] === 'email' ? 'Eメール' :
                                    '電話') : '未選択'); ?>
                            </p>
                        </dd>
                    </dl>
                    <dl>
                        <dt>お問い合わせ内容</dt>
                        <dd>
                            <p>
                                <?php echo esc_html($_POST['message']) ?>
                            </p>
                        </dd>
                    </dl>
                </div>
            </form>
            <div class="send-wrap">
                <form method="post" action="/contact">
                    <div class="btn-wrap">
                        <!-- 入力内容を保持するhiddenフィールド -->
                        <input type="hidden" name="form_step" value="edit">
                        <input type="hidden" name="user_name" value="<?php echo esc_html($_POST['user_name']); ?>">
                        <input type="hidden" name="kana" value="<?php echo esc_html($_POST['kana']); ?>">
                        <input type="hidden" name="user_email" value="<?php echo esc_html($_POST['user_email']); ?>">
                        <input type="hidden" name="check_user_email"
                            value="<?php echo esc_html($_POST['check_user_email']); ?>">

                        <input type="hidden" name="tel[data][0]"
                            value="<?php echo esc_html($_POST['tel']['data'][0] ?? ''); ?>">
                        <input type="hidden" name="tel[data][1]"
                            value="<?php echo esc_html($_POST['tel']['data'][1] ?? ''); ?>">
                        <input type="hidden" name="tel[data][2]"
                            value="<?php echo esc_html($_POST['tel']['data'][2] ?? ''); ?>">

                        <input type="hidden" name="contact_method"
                            value="<?php echo esc_html($_POST['contact_method']); ?>">
                        <input type="hidden" name="contact_option"
                            value="<?php echo esc_html($_POST['contact_option']); ?>">
                        <input type="hidden" name="message" value="<?php echo esc_html($_POST['message']); ?>">

                        <!-- 戻るボタン -->
                        <input type="submit" name="edit" value="戻る" class="btn btn-primary btn-submit">
                    </div>
                </form>

                <!-- 送信ボタン -->
                <form method="post" action="/contact">
                    <!-- 入力内容を保持するhiddenフィールド -->
                    <input type="hidden" name="form_step" value="complete">
                    <!-- Nonceをhiddenフィールドに追加 -->
                    <input type="hidden" name="contact_form_nonce" value="<?php echo esc_attr($contact_form_nonce); ?>">
                    <!-- お名前をhiddenフィールドに追加 -->
                    <input type="hidden" name="user_name" value="<?php echo esc_html($_POST['user_name']); ?>">
                    <!-- お名前（ふりがな）をhiddenフィールドに追加 -->
                    <input type="hidden" name="kana" value="<?php echo esc_html($_POST['kana']); ?>">
                    <!-- メールアドレスをhiddenフィールドに追加 -->
                    <input type="hidden" name="user_email" value="<?php echo esc_html($_POST['user_email']); ?>">
                    <!-- メールアドレス（確認）をhiddenフィールドに追加 -->
                    <input type="hidden" name="check_user_email"
                        value="<?php echo esc_html($_POST['check_user_email']); ?>">
                    <!-- 電話番号の各パートをhiddenフィールドに追加 -->
                    <input type="hidden" name="tel[data][0]"
                        value="<?php echo esc_html($_POST['tel']['data'][0] ?? ''); ?>">
                    <input type="hidden" name="tel[data][1]"
                        value="<?php echo esc_html($_POST['tel']['data'][1] ?? ''); ?>">
                    <input type="hidden" name="tel[data][2]"
                        value="<?php echo esc_html($_POST['tel']['data'][2] ?? ''); ?>">
                    <!-- 希望連絡方法をhiddenフィールドに追加 -->
                    <input type="hidden" name="contact_method"
                        value="<?php echo esc_html($_POST['contact_method']); ?>">
                    <!-- お問い合わせ項目をhiddenフィールドに追加 -->
                    <input type="hidden" name="contact_option"
                        value="<?php echo esc_html($_POST['contact_option']); ?>">
                    <!-- お問い合わせ内容をhiddenフィールドに追加 -->
                    <input type="hidden" name="message" value="<?php echo esc_html($_POST['message']); ?>">

                    <input type="hidden" name="privacy" value="プライバシーポリシーに同意する" checked>

                    <!-- 送信ボタン -->
                    <input type="submit" name="complete" value="送信" class="btn btn-primary btn-submit">
                </form>
            </div>
            <?php endif ?>

            <!-- 完了画面 -->
            <?php elseif ($form_step === 'complete') : ?>
            <?php
                //メールの送信処理

                // 管理者宛のメール送信
                $to_admin = 'info-ivory-tower@ivorytower-lab.ivory.ne.jp';
                $subject_admin = 'Sample-Housingへお問い合わせがありました。';

                // メッセージ内容を一つの文字列にまとめる
                $message_admin =
                    "お名前: " . esc_html($_POST['user_name']) . "\n" .
                    "お名前（ふりがな）: " . esc_html($_POST['kana']) . "\n" .
                    "メールアドレス: " . esc_html($_POST['user_email']) . "\n" .
                    "電話番号: " . esc_html($_POST['tel']['data'][0] . '-' . $_POST['tel']['data'][1] . '-' . $_POST['tel']['data'][2]) . "\n" .
                    "希望連絡方法: " . (isset($_POST['contact_method']) ? esc_html($_POST['contact_method'] === 'email' ? 'Eメール' : '電話') : '未選択') . "\n" .
                    "お問い合わせ項目: " . esc_html($_POST['contact_option'] === 'sell' ? '家を売りたい' : ($_POST['contact_option'] === 'buy' ? '家を買いたい' : 'その他')) . "\n" .
                    "お問い合わせ内容: " . esc_html($_POST['message']);

                $headers_admin = 'From: Sample-Housing <info-ivory-tower@ivorytower-lab.ivory.ne.jp>';

                //メールを送信
                wp_mail($to_admin, $subject_admin, $message_admin, $headers_admin);

                // ユーザー宛の確認メール送信
                $to_user = sanitize_email($_POST['user_email']);
                $subject_user = 'Sample-Housingへお問い合わせありがとうございます。';
                // メッセージ内容を一つの文字列にまとめる
                $message_user =
                    "お名前: " . esc_html($_POST['user_name']) . "\n" .
                    "お名前（ふりがな）: " . esc_html($_POST['kana']) . "\n" .
                    "メールアドレス: " . esc_html($_POST['user_email']) . "\n" .
                    "電話番号: " . esc_html($_POST['tel']['data'][0] . '-' . $_POST['tel']['data'][1] . '-' . $_POST['tel']['data'][2]) . "\n" .
                    "希望連絡方法: " . (isset($_POST['contact_method']) ? esc_html($_POST['contact_method'] === 'email' ? 'Eメール' : '電話') : '未選択') . "\n" .
                    "お問い合わせ項目: " . esc_html($_POST['contact_option'] === 'sell' ? '家を売りたい' : ($_POST['contact_option'] === 'buy' ? '家を買いたい' : 'その他')) . "\n" .
                    "お問い合わせ内容: " . esc_html($_POST['message']) ."\n\n".
                    $_POST['user_name'] . "様\nお問い合わせいただき、ありがとうございます。\n上記内容でお問い合わせを受け付けました。\n内容を確認のうえ、後ほどご連絡いたします。";
                    $headers_user =  'From: Sample-Housing <info-ivory-tower@ivorytower-lab.ivory.ne.jp>';

                wp_mail($to_user, $subject_user, $message_user, $headers_user)
        ?>


            <p class="form-status">送信が完了しました</p>
            <?php endif; ?>
        </div>
    </div>
</main>
<!-- <div class="gotop show" id="goTop"><a href="#"><span class="dli-arrow-up"></span>TOP</a></div> -->
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
<?php get_footer(); ?>