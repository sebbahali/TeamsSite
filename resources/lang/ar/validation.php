<?php

/*
|--------------------------------------------------------------------------
| Validation Language Lines
|--------------------------------------------------------------------------
|
| The following language lines contain the default error messages used by
| the validator class. Some of these rules have multiple versions such
| as the size rules. Feel free to tweak each of these messages here.
|
*/

return [
    'accepted' => 'يجب قبول :attribute.',
    'accepted_if' => 'يجب قبول :attribute في حالة :other يساوي :value.',
    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا.',
    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',
    'after_or_equal' => 'حقل :attribute يجب أن يكون تاريخاً لاحقاً أو مطابقاً للتاريخ :date.',
    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف.',
    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف، أرقام ومطّات.',
    'alpha_num' => 'يجب أن يحتوي حقل :attribute على حروفٍ وأرقامٍ فقط.',
    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة.',
    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',
    'before_or_equal' => 'حقل :attribute يجب أن يكون تاريخا سابقا أو مطابقا للتاريخ :date.',
    'between' => [
        'array' => 'يجب أن يحتوي حقل :attribute على عدد من العناصر بين :min و :max.',
        'file' => 'يجب أن يكون حجم ملف حقل :attribute بين :min و :max كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة حقل :attribute بين :min و :max.',
        'string' => 'يجب أن يكون عدد حروف نّص حقل :attribute بين :min و :max.',
    ],
    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false .',
    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute.',
    'current_password' => 'كلمة المرور غير صحيحة.',
    'date' => 'حقل :attribute ليس تاريخًا صحيحًا.',
    'date_equals' => 'يجب أن يكون حقل :attribute مطابقاً للتاريخ :date.',
    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',
    'declined' => 'يجب رفض :attribute.',
    'declined_if' => 'يجب رفض :attribute عندما يكون :other بقيمة :value.',
    'different' => 'يجب أن يكون الحقلان :attribute و :other مُختلفين.',
    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام.',
    'digits_between' => 'يجب أن يحتوي حقل :attribute بين :min و :max رقمًا/أرقام .',
    'dimensions' => 'الحقل:attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct' => 'للحقل :attribute قيمة مُكرّرة.',
    'email' => 'يجب أن يكون حقل :attribute عنوان بريد إلكتروني صحيح البُنية.',
    'ends_with' => 'يجب أن ينتهي حقل :attribute بأحد القيم التالية: :values',
    'enum' => 'The selected :attribute is invalid.',
    'exists' => 'القيمة المحددة :attribute غير موجودة.',
    'file' => 'الحقل :attribute يجب أن يكون ملفا.',
    'filled' => 'حقل :attribute إجباري.',
    'gt' => [
        'array' => 'يجب أن يحتوي حقل :attribute على أكثر من :value عناصر/عنصر.',
        'file' => 'يجب أن يكون حجم ملف حقل :attribute أكبر من :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :value.',
        'string' => 'يجب أن يكون طول نّص حقل :attribute أكثر من :value حروفٍ/حرفًا.',
    ],
    'gte' => [
        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :value عُنصرًا/عناصر.',
        'file' => 'يجب أن يكون حجم ملف حقل :attribute على الأقل :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة حقل :attribute مساوية أو أكبر من :value.',
        'string' => 'يجب أن يكون طول نص حقل :attribute على الأقل :value حروفٍ/حرفًا.',
    ],
    'image' => 'يجب أن يكون حقل :attribute صورةً.',
    'in' => 'حقل :attribute غير موجود.',
    'in_array' => 'حقل :attribute غير موجود في :other.',
    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا.',
    'ip' => 'يجب أن يكون حقل :attribute عنوان IP صحيحًا.',
    'ipv4' => 'يجب أن يكون حقل :attribute عنوان IPv4 صحيحًا.',
    'ipv6' => 'يجب أن يكون حقل :attribute عنوان IPv6 صحيحًا.',
    'json' => 'يجب أن يكون حقل :attribute نصًا من نوع JSON.',
    'lt' => [
        'array' => 'يجب أن يحتوي حقل :attribute على أقل من :value عناصر/عنصر.',
        'file' => 'يجب أن يكون حجم ملف حقل :attribute أصغر من :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :value.',
        'string' => 'يجب أن يكون طول نّص حقل :attribute أقل من :value حروفٍ/حرفًا.',
    ],
    'lte' => [
        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :value عناصر/عنصر.',
        'file' => 'يجب أن لا يتجاوز حجم ملف حقل :attribute :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة حقل :attribute مساوية أو أصغر من :value.',
        'string' => 'يجب أن لا يتجاوز طول نّص حقل :attribute :value حروفٍ/حرفًا.',
    ],
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'max' => [
        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',
        'file' => 'يجب أن لا يتجاوز حجم ملف حقل :attribute :max كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة حقل :attribute مساوية أو أصغر من :max.',
        'string' => 'يجب أن لا يتجاوز طول نّص حقل :attribute :max حروفٍ/حرفًا.',
    ],
    'mimes' => 'يجب أن يكون ملفًا من نوع : :values.',
    'mimetypes' => 'يجب أن يكون ملفًا من نوع : :values.',
    'min' => [
        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر.',
        'file' => 'يجب أن يكون حجم ملف حقل :attribute على الأقل :min كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة حقل :attribute مساوية أو أكبر من :min.',
        'string' => 'يجب أن يكون طول نص حقل :attribute على الأقل :min حروفٍ/حرفًا.',
    ],
    'multiple_of' => 'حقل :attribute يجب أن يكون من مضاعفات :value',
    'not_in' => 'عنصر الحقل :attribute غير صحيح.',
    'not_regex' => 'صيغة حقل :attribute غير صحيحة.',
    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا.',
    'password' => 'كلمة المرور غير صحيحة.',
    'present' => 'يجب تقديم حقل :attribute.',
    'prohibited' => 'حقل :attribute محظور.',
    'prohibited_if' => 'حقل :attribute محظور إذا كان :other هو :value.',
    'prohibited_unless' => 'حقل :attribute محظور ما لم يكن :other ضمن :values.',
    'prohibits' => 'الحقل :attribute يحظر تواجد الحقل :other.',
    'regex' => 'صيغة حقل :attribute .غير صحيحة.',
    'required' => 'حقل :attribute مطلوب.',
    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',
    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',
    'required_with' => 'حقل :attribute مطلوب إذا توفّر :values.',
    'required_with_all' => 'حقل :attribute مطلوب إذا توفّر :values.',
    'required_without' => 'حقل :attribute مطلوب إذا لم يتوفّر :values.',
    'required_without_all' => 'حقل :attribute مطلوب إذا لم يتوفّر :values.',
    'same' => 'يجب أن يتطابق حقل :attribute مع :other.',
    'size' => [
        'array' => 'يجب أن يحتوي حقل :attribute على :size عنصرٍ/عناصر بالضبط.',
        'file' => 'يجب أن يكون حجم ملف حقل :attribute :size كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة حقل :attribute مساوية لـ :size.',
        'string' => 'يجب أن يحتوي نص حقل :attribute على :size حروفٍ/حرفًا بالضبط.',
    ],
    'starts_with' => 'يجب أن يبدأ حقل :attribute بأحد القيم التالية: :values',
    'string' => 'يجب أن يكون حقل :attribute نصًا.',
    'timezone' => 'يجب أن يكون حقل :attribute نطاقًا زمنيًا صحيحًا.',
    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل.',
    'uploaded' => 'فشل في تحميل الـ :attribute.',
    'url' => 'صيغة رابط حقل :attribute غير صحيحة.',
    'uuid' => 'حقل :attribute يجب أن يكون بصيغة UUID سليمة.',
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    'attributes' => [
        'address' => 'العنوان',
        'age' => 'العمر',
        'available' => 'مُتاح',
        'body' => 'المُحتوى',
        'city' => 'المدينة',
        'content' => 'المُحتوى',
        'country' => 'الدولة',
        'date' => 'التاريخ',
        'day' => 'اليوم',
        'description' => 'الوصف',
        'email' => 'البريد الالكتروني',
        'excerpt' => 'المُلخص',
        'first_name' => 'الاسم الأول',
        'gender' => 'النوع',
        'hour' => 'ساعة',
        'last_name' => 'اسم العائلة',
        'message' => 'الرسالة',
        'minute' => 'دقيقة',
        'mobile' => 'الجوال',
        'month' => 'الشهر',
        'name' => 'الاسم',
        'password' => 'كلمة السر',
        'password_confirmation' => 'تأكيد كلمة السر',
        'phone' => 'الهاتف',
        'photo' => 'الصورة',
        'price' => 'السعر',
        'role' => 'الصلاحية',
        'second' => 'ثانية',
        'sex' => 'الجنس',
        'size' => 'الحجم',
        'subject' => 'الموضوع',
        'terms' => 'الأحكام',
        'time' => 'الوقت',
        'title' => 'اللقب',
        'username' => 'اسم المُستخدم',
        'year' => 'السنة',
        'founded_date' => 'تاريخ التأسيس',
        'foundedDate' => 'تاريخ التأسيس',
        'user_fullname' => 'اسم امين السر',
        'logo' => 'الشعار',
        'message_code' => 'رمز الرسائل',
        'start_date' => 'تاريخ البداية',
        'end_date' => 'تاريخ النهاية',
        'start' => 'تاريخ البداية',
        'end' => 'تاريخ النهاية',
        'target' => 'المرسل اليه',
        'file' => 'الملف',
        'image' => 'الصورة',
        'facebook_link' => 'رابط الفيسبوك',
        'twitter_link' => 'رابط التويتر',
        'instagram_link' => 'رابط الانستقرام',
        'vision' => 'رؤيتنا',
        'philosphoy' => 'فلسفتنا',
        'location' => 'المكان',
        'register_end' => 'نهاية التسجيل',
        'mange_member_count' => 'عدد الاداريين',
        'player_count' => 'عدد اللاعبين',
        'subscription_price' => 'قيمة الاشتراك',
        'insurance_price' => 'قيمة التأمين',
        'type' => 'النوع',
        'sport_image' => 'الصورة الرياضية',
        'front_image' => 'الوجه الامامي',
        'letter_image' => 'صورة الاعارة',
        'birthdate' => 'تاريخ الميلاد',
        'card_id' => 'الرقم المدني',
        'teams' => 'الفرق',
        'home' => 'الفريق الاول',
        'away' => 'الفريق الثاني',
        'match_time' => 'الفريق الثاني',
        'first_refree' => 'الحكم الاول',
        'second_refree' => 'الحكم الثاني',
        'theree_refree' => 'الحكم الثالث',
        'four_refree' => 'الحكم الرابع',
        'five_refree' => 'المراقب',
        'player' => 'اللاعب',
        'birth_date' => 'تاريخ الميلاد',
        'player_img' => 'صورة اللاعب',
        'card_identy_front' => 'الوجه الامامي للبطاقة',
        'card_identy_back' => 'الوجه الخلفي للبطاقة',
        'player_accept' => 'موافقة اللاعب',
        'team_accept' => 'موافقة امين السر',
        'teamGroup' => 'الفريق',
        'refree_report' => 'تقرير الحكم الرابع',
        'competition_name' => 'اسم المسابقة',
        'match_place' => 'مكان المباراة',
        'main_team' => 'الفريق الاساسي',
        'opponent_team' => 'الفريق الخصم',
        'match_time' => 'التوقيت',
        'match_date' => 'التاريخ',
        'opponent_team_logo' => 'شعار الفريق الخصم',
    ],
];
