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

    'accepted' => ':attribute обязательно для принятия.',
    'accepted_if' => ':attribute обязательно для принятия когда :other равно :value.',
    'active_url' => ':attribute неверный URL-адрес.',
    'after' => ':attribute должен идти после :date.',
    'after_or_equal' => ':attribute должен идти до :date или быть одинаковыми.',
    'alpha' => ':attribute должен содержать только буквы.',
    'alpha_dash' => ':attribute должен содержать только буквы, числа, дефисы и подчеркивания.',
    'alpha_num' => ':attribute должен содержать только буквы и числа.',
    'array' => ':attribute должен быть массивом.',
    'before' => ':attribute должен идти до :date.',
    'before_or_equal' => ':attribute должен идти до :date или быть одинаковыми.',
    'between' => [
        'numeric' => ':attribute должен быть между :min и :max.',
        'file' => ':attribute должен быть между :min и :max кб.',
        'string' => 'Количество символов в :attribute должно содержать от :min до :max.',
        'array' => ':attribute должен содержать от :min до :max единиц.',
    ],
    'boolean' => 'Поле :attribute должно иметь вид true/false.',
    'confirmed' => ':attribute не подтверждено.',
    'current_password' => 'Ошибка логина или пароля.',
    'date' => ':attribute неправильная дата.',
    'date_equals' => ':attribute должен быть :date.',
    'date_format' => ':attribute должен быть в формате :format.',
    'declined' => ':attribute должен быть отклонен.',
    'declined_if' => ':attribute должен быть отклонен когда :other равен :value.',
    'different' => ':attribute и :other должны отличаться.',
    'digits' => ':attribute должен быть цифрами :digits.',
    'digits_between' => ':attribute должен содержать числа от :min до :max.',
    'dimensions' => ':attribute имеет недопустимые размеры изображения.',
    'distinct' => ':attribute имеет дублирующее значение.',
    'email' => ':attribute не подходит, проверьте формат электронной почты.',
    'ends_with' => ':attribute должен заканчиваться одним из следующих значений: :values.',
    'exists' => 'Выбранный атрибут :attribute не подходит.',
    'file' => ':attribute должен быть файлом.',
    'filled' => 'Поле :attribute должно иметь значение.',
    'gt' => [
        'numeric' => ':attribute должно быть больше чем :value.',
        'file' => ':attribute должно быть больше чем :value кб.',
        'string' => ':attribute должно быть больше чем :value символов.',
        'array' => ':attribute должно содержать больше чем :value единиц.',
    ],
    'gte' => [
        'numeric' => ':attribute должно быть больше или равно :value.',
        'file' => ':attribute должно быть больше или равно :value кб.',
        'string' => ':attribute должно содержать больше или равно :value символов.',
        'array' => ':attribute должно иметь :value единиц или более.',
    ],
    'image' => ':attribute должно быть изображением.',
    'in' => 'Выбранный атрибут :attribute не подходит.',
    'in_array' => 'В поле :attribute нет значения :other.',
    'integer' => ':attribute должно быть числом.',
    'ip' => ':attribute должно быть правильным IP адресом.',
    'ipv4' => ':attribute должно быть правильным IPv4 адресом.',
    'ipv6' => ':attribute должно быть правильным IPv6 адресом.',
    'json' => ':attribute должно быть правильной JSON строкой.',
    'lt' => [
        'numeric' => 'Значение :attribute должно быть меньше чем :value.',
        'file' => 'Значение :attribute должно быть меньше чем :value кб.',
        'string' => 'Значение :attribute должно содержать меньше чем :value символов.',
        'array' => 'Значение :attribute должно содержать меньше :value единиц.',
    ],
    'lte' => [
        'numeric' => 'Значение :attribute должно быть меньше или равно :value.',
        'file' => 'Значение :attribute должно быть меньше или равно :value кб.',
        'string' => 'Значение :attribute должно содержать меньше или равно :value символов.',
        'array' => 'Значение :attribute должно содержать меньше или равно :value единиц.',
    ],
    'max' => [
        'numeric' => 'Значение :attribute не должно быть больше чем :max.',
        'file' => 'Значение :attribute не должно быть больше чем :max кб.',
        'string' => 'Значение :attribute не должно содержать больше чем :max символов.',
        'array' => 'Значение :attribute не должно содержать больше чем :max единиц.',
    ],
    'mimes' => ':attribute должно иметь тип: :values.',
    'mimetypes' => ':attribute должно быть файлом типа: :values.',
    'min' => [
        'numeric' => ':attribute должно быть минимум :min.',
        'file' => ':attribute должно быть минимум :min кб.',
        'string' => ':attribute должно содержать минимум :min символов.',
        'array' => ':attribute должно содержать минимум :min единиц.',
    ],
    'multiple_of' => 'Значение :attribute должно быть кратно :value.',
    'not_in' => 'Выбранный атрибут :attribute не подходит.',
    'not_regex' => 'Формат атрибута :attribute не подходит.',
    'numeric' => ':attribute должно быть номером.',
    'password' => 'Логин или пароль не подходят.',
    'present' => 'Атрибут :attribute должен существовать.',
    'prohibited' => 'Атрибут :attribute запрещен.',
    'prohibited_if' => 'Атрибут :attribute запрещен когда :other равно :value.',
    'prohibited_unless' => 'Атрибут :attribute запрещен когда :other не равно :values.',
    'prohibits' => 'Атрибут :attribute запрещает наличие атрибута :other.',
    'regex' => 'Формат атрибута :attribute не подходит.',
    'required' => 'Поле :attribute обязательно.',
    'required_if' => 'Поле :attribute обязательно, когда :other равно :value.',
    'required_unless' => 'Поле :attribute обязательно, когда :other не равно :values.',
    'required_with' => 'Поле :attribute обязательно когда существует :values.',
    'required_with_all' => 'Поле :attribute обязательно когда существуют :values.',
    'required_without' => 'Поле :attribute обязательно когда :values не существует.',
    'required_without_all' => 'Поле :attribute обязательно когда :values не существуют.',
    'same' => 'Атрибуты :attribute и :other должны совпадать.',
    'size' => [
        'numeric' => 'Атрибут :attribute должен иметь размер :size.',
        'file' => 'Атрибут :attribute должен иметь размер :size кб.',
        'string' => 'Атрибут :attribute должен иметь размер :size символов.',
        'array' => 'Атрибут :attribute должен содержать :size единиц.',
    ],
    'starts_with' => 'Атрибут :attribute должен начинаться с одного из следующих значений: :values.',
    'string' => 'Атрибут :attribute должен быть строкой.',
    'timezone' => 'Атрибут :attribute должен быть верной временной зоной.',
    'unique' => ':attribute уже принят.',
    'uploaded' => ':attribute не загружен.',
    'url' => 'Атрибут :attribute должен быть верным URL-адресом.',
    'uuid' => 'Атрибут :attribute должен быть верным UUID.',

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

    'attributes' => [],

];
