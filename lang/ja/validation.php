<?php

return [
    'required' => ':attributeは必須です。',
    'max' => [
        'string' => ':attributeは:max文字以内で入力してください。',
    ],
    'email' => ':attributeは正しいメールアドレス形式で入力してください。',
    'confirmed' => ':attributeと確認用の入力が一致しません。',
    'unique' => 'この:attributeは既に使われています。',
    'min' => [
        'string' => ':attributeは:min文字以上で入力してください。',
    ],

    'attributes' => [
        'title' => 'タイトル',
        'body' => '本文',
        'name' => '名前',
        'email' => 'メールアドレス',
        'password' => 'パスワード',
    ],
];