<?php
    // POSTデータの初期化
    $data = [
        'user_name' => $_POST['user_name'] ?? '',
        'kana' => $_POST['kana'] ?? '',
        'user_email' => $_POST['user_email'] ?? '',
        'check_user_email' => $_POST['check_user_email'] ?? '',
        'tel' => [
            'data' => [
                $_POST['tel']['data'][0] ?? '',
                $_POST['tel']['data'][1] ?? '',
                $_POST['tel']['data'][2] ?? ''
            ]
        ],
        'contact_method' => $_POST['contact_method'] ?? '',
        'contact_option' => $_POST['contact_option'] ?? '',
        'message' => $_POST['message'] ?? '',
        'privacy' => $_POST['privacy'] ?? ''
    ];
    
function validateFormData($data) {
    $errors = [];  // 初期化

    // お名前のバリデーション
    if (empty($data['user_name'])) {
        $errors['user_name'] = '入力エラーです：お名前は必須です。';
    } elseif (mb_strlen($data['user_name']) > 50) {
        $errors['user_name'] = '入力エラーです：お名前は50文字以内で入力してください。';
    }
    
    // ふりがなのバリデーション
    if(empty($data['kana'])){
        $errors['kana'] = '入力エラーです： ふりがなは必須です。';
    } elseif(mb_strlen($data['kana']) > 50){
        $errors['kana'] = '入力エラーです：ふりがなは50文字以内で入力してください。';
    } elseif (!preg_match("/^[ぁ-んー]+$/u", $data['kana'])) {
        $errors['kana'] = '入力エラーです：ふりがなは全角ひらがなで入力してください。';
    }
// メールアドレスのバリデーション
if (empty($data['user_email'])) {
    $errors['user_email'] = '入力エラーです：メールアドレスは必須です。';
} elseif (!filter_var($data['user_email'], FILTER_VALIDATE_EMAIL)) {
    $errors['user_email'] = '入力エラーです：正しいメールアドレス形式で入力してください。';
}

// メールアドレス（確認）のバリデーション
if (!empty($data['check_user_email'])) { // ここで空でないかチェック
    if ($data['check_user_email'] !== $data['user_email']) {
        $errors['check_user_email'] = '入力エラーです：メールアドレスが異なります。';
    }
} 

// 電話番号のバリデーション
if (
    (empty($data['tel']['data'][0]) || !ctype_digit($data['tel']['data'][0])) &&
    (empty($data['tel']['data'][1]) || !ctype_digit($data['tel']['data'][1])) &&
    (empty($data['tel']['data'][2]) || !ctype_digit($data['tel']['data'][2]))
) {
    $errors['tel'] = '入力エラーです：電話番号の入力は必須です（半角数字で入力してください）。';
} else {
    // 各パートのバリデーション
    if (empty($data['tel']['data'][0]) || !ctype_digit($data['tel']['data'][0])) {
        $errors['tel_part1'] = '入力エラーです：電話番号の最初の部分は5桁以内の半角数字で入力してください。';
    }
    if (empty($data['tel']['data'][1]) || !ctype_digit($data['tel']['data'][1])) {
        $errors['tel_part2'] = '入力エラーです：電話番号の中央部分は4桁以内の半角数字で入力してください。';
    }
    if (empty($data['tel']['data'][2]) || !ctype_digit($data['tel']['data'][2])) {
        $errors['tel_part3'] = '入力エラーです：電話番号の最後の部分は4桁以内の半角数字で入力してください。';
    }
}

//希望連絡方法
    if(empty($data['contact_method'])){
        $errors['contact_method'] = '入力エラーです：希望連絡方法は必いずれかを選択してください。';

    }

//お問い合わせ内容
if(!empty($data['message'])&& mb_strlen($data['message']) > 255){
    $errors['message'] = '入力エラーです：お問い合わせ内容は255文字以内で入力ください。';

}
// プライバシーポリシーのチェックボックスのバリデーション
if (empty($data['privacy']) || $data['privacy'] !== 'プライバシーポリシーに同意する') {
    $errors['privacy'] = 'プライバシーポリシーに同意してください。';
}
    
    return $errors;

}