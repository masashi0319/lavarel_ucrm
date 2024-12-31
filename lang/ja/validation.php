<?php

return [

    /*
    |--------------------------------------------------------------------------
    | バリデーション言語行
    |--------------------------------------------------------------------------
    |
    | 以下の言語行はバリデータークラスで使用されるデフォルトのエラーメッセージです。
    | これらのルールには、サイズルールのように複数のバージョンがあります。
    | ここで各メッセージを自由に調整してください。
    |
    */

    'accepted' => ':attributeを承認してください。',
    'accepted_if' => ':otherが:valueの場合、:attributeを承認してください。',
    'active_url' => ':attributeは有効なURLではありません。',
    'after' => ':attributeには:date以降の日付を指定してください。',
    'after_or_equal' => ':attributeには:date以降の日付を指定してください。',
    'alpha' => ':attributeはアルファベットのみがご利用できます。',
    'alpha_dash' => ':attributeはアルファベット、数字、ダッシュ、アンダースコアのみがご利用できます。',
    'alpha_num' => ':attributeはアルファベットと数字のみがご利用できます。',
    'array' => ':attributeは配列でなければなりません。',
    'ascii' => ':attributeには、半角英数字と記号のみを使用してください。',
    'before' => ':attributeには:date以前の日付をご利用ください。',
    'before_or_equal' => ':attributeには:date以前の日付をご利用ください。',
    'between' => [
        'array' => ':attributeの項目は:min個以上:max個以下でなければなりません。',
        'file' => ':attributeは:min KBから:max KBの間でなければなりません。',
        'numeric' => ':attributeは:minから:maxの間でなければなりません。',
        'string' => ':attributeは:min文字以上:max文字以下でなければなりません。',
    ],
    'boolean' => ':attributeにはtrueまたはfalseを指定してください。',
    'confirmed' => ':attributeと確認フィールドが一致していません。',
    'current_password' => 'パスワードが正しくありません。',
    'date' => ':attributeは有効な日付ではありません。',
    'date_equals' => ':attributeは:dateと同じ日付でなければなりません。',
    'date_format' => ':attributeは:format形式でなければなりません。',
    'decimal' => ':attributeは:decimal桁の小数でなければなりません。',
    'declined' => ':attributeを拒否してください。',
    'declined_if' => ':otherが:valueの場合、:attributeを拒否してください。',
    'different' => ':attributeと:otherは異なる値でなければなりません。',
    'digits' => ':attributeは:digits桁でなければなりません。',
    'digits_between' => ':attributeは:min桁以上:max桁以下でなければなりません。',
    'dimensions' => ':attributeの画像サイズが無効です。',
    'distinct' => ':attributeに重複した値があります。',
    'doesnt_end_with' => ':attributeは以下のいずれかで終わることはできません: :values。',
    'doesnt_start_with' => ':attributeは以下のいずれかで始まることはできません: :values。',
    'email' => ':attributeは有効なメールアドレス形式でなければなりません。',
    'ends_with' => ':attributeは以下のいずれかで終わらなければなりません: :values。',
    'enum' => '選択された:attributeが無効です。',
    'exists' => '選択された:attributeが無効です。',
    'file' => ':attributeはファイルでなければなりません。',
    'filled' => ':attributeには値を指定してください。',
    'gt' => [
        'array' => ':attributeの項目数は:value個を超えなければなりません。',
        'file' => ':attributeは:value KBを超えなければなりません。',
        'numeric' => ':attributeは:valueより大きくなければなりません。',
        'string' => ':attributeは:value文字を超えなければなりません。',
    ],
    'gte' => [
        'array' => ':attributeの項目数は:value個以上でなければなりません。',
        'file' => ':attributeは:value KB以上でなければなりません。',
        'numeric' => ':attributeは:value以上でなければなりません。',
        'string' => ':attributeは:value文字以上でなければなりません。',
    ],
    'image' => ':attributeは画像でなければなりません。',
    'in' => '選択された:attributeが無効です。',
    'in_array' => ':attributeは:otherに存在しません。',
    'integer' => ':attributeは整数でなければなりません。',
    'ip' => ':attributeは有効なIPアドレスでなければなりません。',
    'ipv4' => ':attributeは有効なIPv4アドレスでなければなりません。',
    'ipv6' => ':attributeは有効なIPv6アドレスでなければなりません。',
    'json' => ':attributeは有効なJSON文字列でなければなりません。',
    'lowercase' => ':attributeは小文字でなければなりません。',
    'lt' => [
        'array' => ':attributeの項目数は:value個未満でなければなりません。',
        'file' => ':attributeは:value KB未満でなければなりません。',
        'numeric' => ':attributeは:value未満でなければなりません。',
        'string' => ':attributeは:value文字未満でなければなりません。',
    ],
    'lte' => [
        'array' => ':attributeの項目数は:value個以下でなければなりません。',
        'file' => ':attributeは:value KB以下でなければなりません。',
        'numeric' => ':attributeは:value以下でなければなりません。',
        'string' => ':attributeは:value文字以下でなければなりません。',
    ],
    'mac_address' => ':attributeは有効なMACアドレスでなければなりません。',
    'max' => [
        'array' => ':attributeの項目数は:max個以下でなければなりません。',
        'file' => ':attributeは:max KB以下でなければなりません。',
        'numeric' => ':attributeは:max以下でなければなりません。',
        'string' => ':attributeは:max文字以下でなければなりません。',
    ],
    'mimes' => ':attributeは次のファイルタイプでなければなりません: :values。',
    'mimetypes' => ':attributeは次のファイルタイプでなければなりません: :values。',
    'min' => [
        'array' => ':attributeの項目数は:min個以上でなければなりません。',
        'file' => ':attributeは:min KB以上でなければなりません。',
        'numeric' => ':attributeは:min以上でなければなりません。',
        'string' => ':attributeは:min文字以上でなければなりません。',
    ],
    'min_digits' => ':attributeは:min桁以上でなければなりません。',
    'multiple_of' => ':attributeは:valueの倍数でなければなりません。',
    'not_in' => '選択された:attributeが無効です。',
    'not_regex' => ':attributeの形式が無効です。',
    'numeric' => ':attributeは数値でなければなりません。',
    'password' => [
        'letters' => ':attributeには少なくとも1つの文字を含める必要があります。',
        'mixed' => ':attributeには大文字と小文字を含める必要があります。',
        'numbers' => ':attributeには少なくとも1つの数字を含める必要があります。',
        'symbols' => ':attributeには少なくとも1つの記号を含める必要があります。',
        'uncompromised' => '提供された:attributeはデータ漏洩で公開されています。別の:attributeを選択してください。',
    ],
    'present' => ':attributeフィールドが存在している必要があります。',
    'prohibited' => ':attributeフィールドは禁止されています。',
    'prohibited_if' => ':otherが:valueの場合、:attributeフィールドは禁止されています。',
    'prohibited_unless' => ':otherが:valuesに含まれていない限り、:attributeフィールドは禁止されています。',
    'prohibits' => ':attributeフィールドは:otherの存在を禁止します。',
    'regex' => ':attributeの形式が無効です。',
    'required' => ':attributeは必須です。',
    'required_array_keys' => ':attributeフィールドには、:valuesのエントリが含まれている必要があります。',
    'required_if' => ':otherが:valueの場合、:attributeフィールドは必須です。',
    'required_unless' => ':otherが:valuesに含まれていない限り、:attributeフィールドは必須です。',
    'required_with' => ':valuesが存在する場合、:attributeフィールドは必須です。',
    'required_with_all' => ':valuesがすべて存在する場合、:attributeフィールドは必須です。',
    'required_without' => ':valuesが存在しない場合、:attributeフィールドは必須です。',
    'required_without_all' => ':valuesがすべて存在しない場合、:attributeフィールドは必須です。',
    'same' => ':attributeと:otherが一致している必要があります。',
    'size' => [
        'array' => ':attributeは:size個含まれている必要があります。',
        'file' => ':attributeは:size KBでなければなりません。',
        'numeric' => ':attributeは:sizeでなければなりません。',
        'string' => ':attributeは:size文字でなければなりません。',
    ],
    'starts_with' => ':attributeは以下のいずれかで始まる必要があります: :values。',
    'string' => ':attributeは文字列でなければなりません。',
    'timezone' => ':attributeは有効なタイムゾーンでなければなりません。',
    'unique' => ':attributeはすでに使用されています。',
    'uploaded' => ':attributeのアップロードに失敗しました。',
    'uppercase' => ':attributeは大文字でなければなりません。',
    'url' => ':attributeは有効なURLでなければなりません。',
    'uuid' => ':attributeは有効なUUIDでなければなりません。',

    /*
    |--------------------------------------------------------------------------
    | カスタムバリデーション言語行
    |--------------------------------------------------------------------------
    |
    | 以下の言語行を使用して、"attribute.rule"形式で特定のカスタムバリデーション
    | メッセージを指定できます。これにより、特定の属性に対してカスタム言語行を作成可能です。
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'カスタムメッセージ',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | カスタムバリデーション属性名
    |--------------------------------------------------------------------------
    |
    | 以下の言語行は、"email"ではなく"E-Mailアドレス"のように置換することで
    | 属性名を読みやすくするのに使用されます。
    |
    */

    'attributes' => [],

];

