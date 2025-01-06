<?php

return [

    /*
    |---------------------------------------------------------------------------
    | Validation Language Lines
    |---------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute maydoni qabul qilinishi kerak.',
    'accepted_if' => ':other :value bo\'lganda :attribute maydoni qabul qilinishi kerak.',
    'active_url' => ':attribute maydoni haqiqiy URL bo\'lishi kerak.',
    'after' => ':attribute maydoni :date dan keyingi sana bo\'lishi kerak.',
    'after_or_equal' => ':attribute maydoni :date sana yoki undan keyingi sana bo\'lishi kerak.',
    'alpha' => ':attribute maydoni faqat harflardan iborat bo\'lishi kerak.',
    'alpha_dash' => ':attribute maydoni faqat harflar, raqamlar, tire va pastki chiziqlardan iborat bo\'lishi kerak.',
    'alpha_num' => ':attribute maydoni faqat harflar va raqamlardan iborat bo\'lishi kerak.',
    'array' => ':attribute maydoni massiv bo\'lishi kerak.',
    'ascii' => ':attribute maydoni faqat bir baytli harf-raqamli belgilarni o\'z ichiga olishi kerak.',
    'before' => ':attribute maydoni :date sanasidan oldingi sana bo\'lishi kerak.',
    'before_or_equal' => ':attribute maydoni :date sana yoki undan oldingi sana bo\'lishi kerak.',
    'between' => [
        'array' => ':attribute maydoni :min dan :max gacha elementlardan iborat bo\'lishi kerak.',
        'file' => ':attribute maydoni :min dan :max kilobaytgacha bo\'lishi kerak.',
        'numeric' => ':attribute maydoni :min dan :max gacha bo\'lishi kerak.',
        'string' => ':attribute maydoni :min dan :max belgigacha bo\'lishi kerak.',
    ],
    'boolean' => ':attribute maydoni ha yoki yo\'q bo\'lishi kerak.',
    'can' => ':attribute maydoni ruxsat etilmagan qiymatni o\'z ichiga olgan.',
    'confirmed' => ':attribute maydoni tasdiqlanishi kerak.',
    'contains' => ':attribute maydonida kerakli qiymat yo\'q.',
    'current_password' => 'Parol noto\'g\'ri.',
    'date' => ':attribute maydoni haqiqiy sana bo\'lishi kerak.',
    'date_equals' => ':attribute maydoni :date sana bilan teng bo\'lishi kerak.',
    'date_format' => ':attribute maydoni :format formatiga mos kelishi kerak.',
    'decimal' => ':attribute maydoni :decimal onlik raqamlarini o\'z ichiga olishi kerak.',
    'declined' => ':attribute maydoni rad etilishi kerak.',
    'declined_if' => ':attribute maydoni :other :value bo\'lsa rad etilishi kerak.',
    'different' => ':attribute va :other maydonlari farqli bo\'lishi kerak.',
    'digits' => ':attribute maydoni :digits raqamlaridan iborat bo\'lishi kerak.',
    'digits_between' => ':attribute maydoni :min va :max raqamlaridan iborat bo\'lishi kerak.',
    'dimensions' => ':attribute maydonining rasm o\'lchamlari noto\'g\'ri.',
    'distinct' => ':attribute maydoni takroriy qiymatni o\'z ichiga olgan.',
    'doesnt_end_with' => ':attribute maydoni quyidagi qiymatlarning birida tugamasligi kerak: :values.',
    'doesnt_start_with' => ':attribute maydoni quyidagi qiymatlarning birida boshlanmasligi kerak: :values.',
    'email' => ':attribute maydoni haqiqiy elektron pochta manzili bo\'lishi kerak.',
    'ends_with' => ':attribute maydoni quyidagi qiymatlarning birida tugashi kerak: :values.',
    'enum' => ':attribute maydonidagi tanlangan qiymat noto\'g\'ri.',
    'exists' => ':attribute maydonidagi tanlangan qiymat noto\'g\'ri.',
    'extensions' => ':attribute maydoni quyidagi kengaytmalariga ega bo\'lishi kerak: :values.',
    'file' => ':attribute maydoni fayl bo\'lishi kerak.',
    'filled' => ':attribute maydoni qiymatga ega bo\'lishi kerak.',
    'gt' => [
        'array' => ':attribute maydoni :value dan ko\'proq elementga ega bo\'lishi kerak.',
        'file' => ':attribute maydoni :value kilobaytdan katta bo\'lishi kerak.',
        'numeric' => ':attribute maydoni :value dan katta bo\'lishi kerak.',
        'string' => ':attribute maydoni :value belgidan katta bo\'lishi kerak.',
    ],
    'gte' => [
        'array' => ':attribute maydoni :value yoki undan ko\'p elementga ega bo\'lishi kerak.',
        'file' => ':attribute maydoni :value kilobaytdan katta yoki teng bo\'lishi kerak.',
        'numeric' => ':attribute maydoni :value dan katta yoki teng bo\'lishi kerak.',
        'string' => ':attribute maydoni :value belgidan katta yoki teng bo\'lishi kerak.',
    ],
    'hex_color' => ':attribute maydoni haqiqiy o\'n oltilik rang kodiga ega bo\'lishi kerak.',
    'image' => ':attribute maydoni rasm bo\'lishi kerak.',
    'in' => ':attribute maydonidagi tanlangan qiymat noto\'g\'ri.',
    'in_array' => ':attribute maydoni :other maydonida mavjud bo\'lishi kerak.',
    'integer' => ':attribute maydoni butun son bo\'lishi kerak.',
    'ip' => ':attribute maydoni haqiqiy IP-manzil bo\'lishi kerak.',
    'ipv4' => ':attribute maydoni haqiqiy IPv4-manzil bo\'lishi kerak.',
    'ipv6' => ':attribute maydoni haqiqiy IPv6-manzil bo\'lishi kerak.',
    'json' => ':attribute maydoni haqiqiy JSON satri bo\'lishi kerak.',
    'list' => ':attribute maydoni ro\'yxat bo\'lishi kerak.',
    'lowercase' => ':attribute maydoni kichik harflar bo\'lishi kerak.',
    'lt' => [
        'array' => ':attribute maydoni :value dan kamroq elementga ega bo\'lishi kerak.',
        'file' => ':attribute maydoni :value kilobaytdan kichik bo\'lishi kerak.',
        'numeric' => ':attribute maydoni :value dan kichik bo\'lishi kerak.',
        'string' => ':attribute maydoni :value belgidan kichik bo\'lishi kerak.',
    ],
    'lte' => [
        'array' => ':attribute maydoni :value yoki undan kamroq elementga ega bo\'lishi kerak.',
        'file' => ':attribute maydoni :value kilobaytdan kichik yoki teng bo\'lishi kerak.',
        'numeric' => ':attribute maydoni :value dan kichik yoki teng bo\'lishi kerak.',
        'string' => ':attribute maydoni :value belgidan kichik yoki teng bo\'lishi kerak.',
    ],
    'mac_address' => ':attribute maydoni haqiqiy MAC-manzil bo\'lishi kerak.',
    'max' => [
        'array' => ':attribute maydoni :max elementdan ko\'p bo\'lmasligi kerak.',
        'file' => ':attribute maydoni :max kilobaytdan ko\'p bo\'lmasligi kerak.',
        'numeric' => ':attribute maydoni :max dan katta bo\'lmasligi kerak.',
        'string' => ':attribute maydoni :max belgidan ko\'p bo\'lmasligi kerak.',
    ],
    'max_digits' => ':attribute maydoni :max dan ko\'proq raqamga ega bo\'lmasligi kerak.',
    'mimes' => ':attribute maydoni quyidagi turdagi fayl bo\'lishi kerak: :values.',
    'mimetypes' => ':attribute maydoni quyidagi turdagi fayl bo\'lishi kerak: :values.',
    'min' => [
        'array' => ':attribute maydoni kamida :min elementga ega bo\'lishi kerak.',
        'file' => ':attribute maydoni kamida :min kilobayt bo\'lishi kerak.',
        'numeric' => ':attribute maydoni kamida :min bo\'lishi kerak.',
        'string' => ':attribute maydoni kamida :min belgidan iborat bo\'lishi kerak.',
    ],
    'min_digits' => ':attribute maydoni kamida :min raqamga ega bo\'lishi kerak.',
    'missing' => ':attribute maydoni mavjud bo\'lishi kerak.',
    'missing_if' => ':attribute maydoni :other :value bo\'lganida mavjud bo\'lishi kerak.',
    'missing_unless' => ':attribute maydoni faqat :other :value bo\'lmagan holatda mavjud bo\'lishi kerak.',
    'missing_with' => ':attribute maydoni :values mavjud bo\'lganda mavjud bo\'lishi kerak.',
    'missing_with_all' => ':attribute maydoni :values mavjud bo\'lganda mavjud bo\'lishi kerak.',
    'multiple_of' => ':attribute maydoni :value ga ko\'p bo\'lishi kerak.',
    'not_in' => ':attribute maydonidagi tanlangan qiymat noto\'g\'ri.',
    'not_regex' => ':attribute maydoni formati noto\'g\'ri.',
    'numeric' => ':attribute maydoni raqam bo\'lishi kerak.',
    'password' => [
        'letters' => ':attribute maydoni kamida bir harfni o\'z ichiga olishi kerak.',
        'mixed' => ':attribute maydoni kamida bitta katta va bitta kichik harfni o\'z ichiga olishi kerak.',
        'numbers' => ':attribute maydoni kamida bitta raqamni o\'z ichiga olishi kerak.',
        'symbols' => ':attribute maydoni kamida bitta belgi o\'z ichiga olishi kerak.',
        'uncompromised' => ':attribute maydonidagi qiymat ma\'lumotlar oqimida mavjud. Iltimos, boshqa qiymatni tanlang.',
    ],
    'present' => ':attribute maydoni mavjud bo\'lishi kerak.',
    'present_if' => ':attribute maydoni :other :value bo\'lganida mavjud bo\'lishi kerak.',
    'present_unless' => ':attribute maydoni :other :value bo\'lmasa mavjud bo\'lishi kerak.',
    'present_with' => ':attribute maydoni :values mavjud bo\'lganda mavjud bo\'lishi kerak.',
    'present_with_all' => ':attribute maydoni :values mavjud bo\'lganda mavjud bo\'lishi kerak.',
    'prohibited' => ':attribute maydoni taqiqlangan.',
    'prohibited_if' => ':attribute maydoni :other :value bo\'lganda taqiqlangan.',
    'prohibited_unless' => ':attribute maydoni :other :values bo\'lmaganida taqiqlangan.',
    'prohibits' => ':attribute maydoni :other mavjudligini taqiqlaydi.',
    'regex' => ':attribute maydoni formati noto\'g\'ri.',
    'required' => ':attribute maydoni to\'ldirilishi shart.',
    'required_array_keys' => ':attribute maydoni quyidagi qiymatlarni o\'z ichiga olishi kerak: :values.',
    'required_if' => ':attribute maydoni :other :value bo\'lganda to\'ldirilishi shart.',
    'required_if_accepted' => ':attribute maydoni :other qabul qilinganida to\'ldirilishi shart.',
    'required_if_declined' => ':attribute maydoni :other rad etilganida to\'ldirilishi shart.',
    'required_unless' => ':attribute maydoni :other :values bo\'lmagan holatda to\'ldirilishi shart.',
    'required_with' => ':attribute maydoni :values mavjud bo\'lganda to\'ldirilishi shart.',
    'required_with_all' => ':attribute maydoni :values mavjud bo\'lganda to\'ldirilishi shart.',
    'required_without' => ':attribute maydoni :values mavjud bo\'lmasa to\'ldirilishi shart.',
    'required_without_all' => ':attribute maydoni :values mavjud bo\'lmasa to\'ldirilishi shart.',
    'same' => ':attribute maydoni :other bilan mos kelishi kerak.',
    'size' => [
        'array' => ':attribute maydoni :size elementdan iborat bo\'lishi kerak.',
        'file' => ':attribute maydoni :size kilobayt bo\'lishi kerak.',
        'numeric' => ':attribute maydoni :size bo\'lishi kerak.',
        'string' => ':attribute maydoni :size belgidan iborat bo\'lishi kerak.',
    ],
    'starts_with' => ':attribute maydoni quyidagi qiymatlarning birida boshlanishi kerak: :values.',
    'string' => ':attribute maydoni matn bo\'lishi kerak.',
    'timezone' => ':attribute maydoni haqiqiy vaqt mintaqasi bo\'lishi kerak.',
    'unique' => ':attribute maydoni allaqachon mavjud.',
    'uploaded' => ':attribute maydoni yuklab olishda xatolik yuz berdi.',
    'uppercase' => ':attribute maydoni katta harflardan iborat bo\'lishi kerak.',
    'url' => ':attribute maydoni haqiqiy URL bo\'lishi kerak.',
    'ulid' => ':attribute maydoni haqiqiy ULID bo\'lishi kerak.',
    'uuid' => ':attribute maydoni haqiqiy UUID bo\'lishi kerak.',

    /*
    |---------------------------------------------------------------------------
    | Custom Validation Language Lines
    |---------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |---------------------------------------------------------------------------
    | Custom Validation Attributes
    |---------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],
];
