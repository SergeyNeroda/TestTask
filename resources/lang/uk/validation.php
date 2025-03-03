<?php

return [

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

    'accepted'        => 'Ви повинні прийняти :attribute.',
    'active_url'      => 'Поле :attribute не є правильним URL.',
    'after'           => 'Поле :attribute має містити дату не раніше :date.',
    'after_or_equal'  => 'Поле :attribute має містити дату не раніше, або дорівнюватися :date.',
    'alpha'           => 'Поле :attribute має містити лише літери.',
    'alpha_dash'      => 'Поле :attribute має містити лише літери, цифри, тире та підкреслення.',
    'alpha_num'       => 'Поле :attribute має містити лише літери та цифри.',
    'array'           => 'Поле :attribute має бути масивом.',
    'before'          => 'Поле :attribute має містити дату не пізніше :date.',
    'before_or_equal' => 'Поле :attribute має містити дату не пізніше, або дорівнюватися :date.',
    'between'         => [
        'numeric' => 'Поле :attribute має бути між :min та :max.',
        'file'    => 'Розмір файлу у полі :attribute має бути не менше :min та не більше :max кілобайт.',
        'string'  => 'Текст у полі :attribute має бути не менше :min та не більше :max символів.',
        'array'   => 'Поле :attribute має містити від :min до :max елементів.',
    ],
    'boolean'        => 'Поле :attribute повинне містити логічний тип.',
    'confirmed'      => 'Поле :attribute не збігається з підтвердженням.',
    'date'           => 'Поле :attribute не є датою.',
    'date_equals'    => 'Поле :attribute має бути датою рівною :date.',
    'date_format'    => 'Поле :attribute не відповідає формату :format.',
    'different'      => 'Поля :attribute та :other повинні бути різними.',
    'digits'         => 'Довжина цифрового поля :attribute повинна дорівнювати :digits.',
    'digits_between' => 'Довжина цифрового поля :attribute повинна бути від :min до :max.',
    'dimensions'     => 'Поле :attribute містить неприпустимі розміри зображення.',
    'distinct'       => 'Поле :attribute містить значення, яке дублюється.',
    'email'          => 'Поле :attribute повинне містити коректну електронну адресу.',
    'ends_with'      => 'Поле :attribute має закінчуватися одним з наступних значень: :values',
    'exists'         => 'Вибране для :attribute значення не коректне.',
    'file'           => 'Поле :attribute має містити файл.',
    'filled'         => "Поле :attribute є обов'язковим для заповнення.",
    'gt'             => [
        'numeric' => 'Поле :attribute має бути більше ніж :value.',
        'file'    => 'Поле :attribute має бути більше ніж :value кілобайт.',
        'string'  => 'Поле :attribute має бути більше ніж :value символів.',
        'array'   => 'Поле :attribute має містити більше ніж :value елементів.',
    ],
    'gte' => [
        'numeric' => 'Поле :attribute має дорівнювати чи бути більше ніж :value.',
        'file'    => 'Поле :attribute має дорівнювати чи бути більше ніж :value кілобайт.',
        'string'  => 'Поле :attribute має дорівнювати чи бути більше ніж :value символів.',
        'array'   => 'Поле :attribute має містити :value чи більше елементів.',
    ],
    'image'    => 'Поле :attribute має містити зображення.',
    'in'       => 'Вибране для :attribute значення не коректне.',
    'in_array' => 'Значення поля :attribute не міститься в :other.',
    'integer'  => 'Поле :attribute має містити ціле число.',
    'ip'       => 'Поле :attribute має містити IP адресу.',
    'ipv4'     => 'Поле :attribute має містити IPv4 адресу.',
    'ipv6'     => 'Поле :attribute має містити IPv6 адресу.',
    'json'     => 'Дані поля :attribute мають бути у форматі JSON.',
    'lt'       => [
        'numeric' => 'Поле :attribute має бути менше ніж :value.',
        'file'    => 'Поле :attribute має бути менше ніж :value кілобайт.',
        'string'  => 'Поле :attribute має бути менше ніж :value символів.',
        'array'   => 'Поле :attribute має містити менше ніж :value items.',
    ],
    'lte' => [
        'numeric' => 'Поле :attribute має дорівнювати чи бути менше ніж :value.',
        'file'    => 'Поле :attribute має дорівнювати чи бути менше ніж :value кілобайт.',
        'string'  => 'Поле :attribute має дорівнювати чи бути менше ніж :value символів.',
        'array'   => 'Поле :attribute має містити не більше ніж :value елементів.',
    ],
    'max' => [
        'numeric' => 'Поле :attribute має бути не більше :max.',
        'file'    => 'Файл в полі :attribute має бути не більше :max кілобайт.',
        'string'  => 'Текст в полі :attribute повинен мати довжину не більшу за :max.',
        'array'   => 'Поле :attribute повинне містити не більше :max елементів.',
    ],
    'mimes'     => 'Поле :attribute повинне містити файл одного з типів: :values.',
    'mimetypes' => 'Поле :attribute повинне містити файл одного з типів: :values.',
    'min'       => [
        'numeric' => 'Поле :attribute повинне бути не менше :min.',
        'file'    => 'Розмір файлу у полі :attribute має бути не меншим :min кілобайт.',
        'string'  => 'Текст у полі :attribute повинен містити не менше :min символів.',
        'array'   => 'Поле :attribute повинне містити не менше :min елементів.',
    ],
    'multiple_of'          => 'The :attribute must be a multiple of :value',
    'not_in'               => 'Вибране для :attribute значення не коректне.',
    'not_regex'            => 'Формат поля :attribute не вірний.',
    'numeric'              => 'Поле :attribute повинно містити число.',
    'password'             => 'Неправильний пароль.',
    'present'              => 'Поле :attribute повинне бути присутнє.',
    'regex'                => 'Поле :attribute має хибний формат.',
    'required'             => "Поле :attribute є обов'язковим для заповнення.",
    'required_if'          => "Поле :attribute є обов'язковим для заповнення, коли :other є рівним :value.",
    'required_unless'      => "Поле :attribute є обов'язковим для заповнення, коли :other відрізняється від :values",
    'required_with'        => "Поле :attribute є обов'язковим для заповнення, коли :values вказано.",
    'required_with_all'    => "Поле :attribute є обов'язковим для заповнення, коли :values вказано.",
    'required_without'     => "Поле :attribute є обов'язковим для заповнення, коли :values не вказано.",
    'required_without_all' => "Поле :attribute є обов'язковим для заповнення, коли :values не вказано.",
    'same'                 => 'Поля :attribute та :other мають збігатися.',
    'size'                 => [
        'numeric' => 'Поле :attribute має бути довжини :size.',
        'file'    => 'Файл у полі :attribute має бути розміром :size кілобайт.',
        'string'  => 'Текст у полі :attribute повинен містити :size символів.',
        'array'   => 'Поле :attribute повинне містити :size елементів.',
    ],
    'starts_with' => 'Поле :attribute повинне починатися з одного з наступних значень: :values',
    'string'      => 'Поле :attribute повинне містити текст.',
    'timezone'    => 'Поле :attribute повинне містити коректну часову зону.',
    'unique'      => 'Вказане значення поля :attribute вже існує.',
    'uploaded'    => 'Завантаження :attribute не вдалося.',
    'url'         => 'Формат поля :attribute хибний.',
    'uuid'        => 'Поле :attribute має бути коректним UUID ідентифікатором.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
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
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'nickname' => 'Нікнейм',
        'surname' => 'Прізвище',
        'avatar' => 'Аватар',
        'phone' => 'Телефон',
        'sex' => 'Стать',
        'show_phone' => 'Показ телефону',
        'title' => 'Заголовок',
        'text' => 'Текст',
        'password' => 'Пароль',
        'password_confirmation' => 'Підтвердження паролю',
        'email' => 'Імейл',
        'password_confirm' => 'Підтвердження паролю',
        'new_password' => 'Новий пароль',
        'old_password' => 'Старий пароль',
    ],

];
