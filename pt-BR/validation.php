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

    'accepted' => 'O :attribute deve ser aceito.',
    'accepted_if' => 'O :attribute deve ser aceito quando :other é :value.',
    'active_url' => 'O :attribute não é uma URL válida.',
    'after' => 'O :attribute deve ser uma data após :date.',
    'after_or_equal' => 'O :attribute deve ser uma data após ou igual a :date.',
    'alpha' => 'O :attribute deve conter apenas letras.',
    'alpha_dash' => 'O :attribute deve conter apenas letras, números, traços e sublinhados.',
    'alpha_num' => 'O :attribute deve conter apenas letras e números.',
    'array' => 'O :attribute deve ser um array.',
    'before' => 'O :attribute deve ser uma data antes de :date.',
    'before_or_equal' => 'O :attribute deve ser uma data antes ou igual a :date.',
    'between' => [
        'array' => 'O :attribute deve ter entre :min e :max itens.',
        'file' => 'O :attribute deve ter entre :min e :max kilobytes.',
        'numeric' => 'O :attribute deve ter entre :min e :max.',
        'string' => 'O :attribute deve ter entre :min e :max caracteres.',
    ],
    'boolean' => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed' => 'A confirmação de :attribute não corresponde.',
    'current_password' => 'A senha está incorreta.',
    'date' => 'O :attribute não é uma data válida.',
    'date_equals' => 'O :attribute deve ser uma data igual a :date.',
    'date_format' => 'O :attribute não corresponde ao formato :format.',
    'declined' => 'O :attribute foi recusado.',
    'declined_if' => 'O :attribute foi recusado quando :other é :value.',
    'different' => 'O :attribute e :other devem ser diferentes.',
    'digits' => 'O :attribute deve ter :digits dígitos.',
    'digits_between' => 'O :attribute deve ter entre :min e :max dígitos.',
    'dimensions' => 'O :attribute tem dimensões de imagem inválidas.',
    'distinct' => 'O campo :attribute tem um valor duplicado.',
    'doesnt_end_with' => 'O :attribute não termina com um dos seguintes: :values',
    'doesnt_start_with' => 'O :attribute não começa com um dos seguintes: :values',
    'email' => 'O :attribute deve ser um endereço de e-mail válido.',
    'ends_with' => 'O :attribute deve terminar com um dos seguintes: :values',
    'enum' => 'O :attribute não é válido.',
    'exists' => 'O :attribute selecionado é inválido.',
    'file' => 'O :attribute deve ser um arquivo.',
    'filled' => 'O campo :attribute deve ter um valor.',
    'gt' => [
        'array' => 'O :attribute deve ter mais de :value itens.',
        'file' => 'O :attribute deve ter mais de :value kilobytes.',
        'numeric' => 'O :attribute deve ser maior que :value.',
        'string' => 'O :attribute deve ter mais de :value caracteres.',
    ],
    'gte' => [
        'array' => 'O :attribute deve ter :value itens ou mais.',
        'file' => 'O :attribute deve ter :value kilobytes ou mais.',
        'numeric' => 'O :attribute deve ser maior ou igual a :value.',
        'string' => 'O :attribute deve ter :value caracteres ou mais.',
    ],
    'image' => 'O :attribute deve ser uma imagem.',
    'in' => 'O :attribute selecionado é inválido.',
    'in_array' => 'O campo :attribute não existe em :other.',
    'integer' => 'O :attribute deve ser um inteiro.',
    'ip' => 'O :attribute deve ser um endereço IP válido.',
    'ipv4' => 'O :attribute deve ser um endereço IPv4 válido.',
    'ipv6' => 'O :attribute deve ser um endereço IPv6 válido.',
    'json' => 'O :attribute deve ser uma string JSON válida.',
    'lowercase' => 'O :attribute deve estar em minúsculas.',
    'lt' => [
        'array' => 'O :attribute deve ter menos de :value itens.',
        'file' => 'O :attribute deve ter menos de :value kilobytes.',
        'numeric' => 'O :attribute deve ser menor que :value.',
        'string' => 'O :attribute deve ter menos de :value caracteres.',
    ],
    'lte' => [
        'array' => 'O :attribute não deve ter mais de :value itens.',
        'file' => 'O :attribute deve ter :value kilobytes ou menos.',
        'numeric' => 'O :attribute deve ser menor ou igual a :value.',
        'string' => 'O :attribute deve ter :value caracteres ou menos.',
    ],
    'mac_address' => 'O :attribute deve ser um endereço MAC válido.',
    'max' => [
        'array' => 'O :attribute não deve ter mais de :max itens.',
        'file' => 'O :attribute não deve ter mais de :max kilobytes.',
        'numeric' => 'O :attribute não deve ser maior que :max.',
        'string' => 'O :attribute não deve ter mais de :max caracteres.',
    ],
    'max_digits' => 'O :attribute deve ter no máximo :max dígitos.',
    'mimes' => 'O :attribute deve ser um arquivo do tipo: :values.',
    'mimetypes' => 'O :attribute deve ser um arquivo do tipo: :values.',
    'min' => [
        'array' => 'O :attribute deve ter pelo menos :min itens.',
        'file' => 'O :attribute deve ter pelo menos :min kilobytes.',
        'numeric' => 'O :attribute deve ser pelo menos :min.',
        'string' => 'O :attribute deve ter pelo menos :min caracteres.',
    ],
    'min_digits' => 'O :attribute deve ter pelo menos :min dígitos.',
    'multiple_of' => 'O :attribute deve ser um múltiplo de :value',
    'not_in' => 'O :attribute selecionado é inválido.',
    'not_regex' => 'O formato do :attribute é inválido.',
    'numeric' => 'O :attribute deve ser um número.',
    'password' => [
        'letters' => 'O :attribute deve conter letras.',
        'mixed' => 'O :attribute deve conter letras e números.',
        'numbers' => 'O :attribute deve conter números.',
        'symbols' => 'O :attribute deve conter símbolos.',
        'uncompromised' => 'O :attribute não é seguro o suficiente.',
    ],
    'present' => 'O campo :attribute deve estar presente.',
    'prohibited' => 'O campo :attribute é proibido.',
    'prohibited_if' => 'O campo :attribute é proibido quando :other é :value.',
    'prohibited_unless' => 'O campo :attribute é proibido a menos que :other esteja em :values.',
    'prohibits' => 'O campo :attribute proíbe :other de estar presente.',
    'regex' => 'O formato do :attribute é inválido.',
    'required' => 'O campo :attribute é obrigatório.',
    'required_array_keys' => 'O campo :attribute é obrigatório.',
    'required_if' => 'O campo :attribute é obrigatório quando :other é :value.',
    'required_if_accepted' => 'O campo :attribute é obrigatório quando :other é aceito.',
    'required_unless' => 'O campo :attribute é obrigatório a menos que :other esteja em :values.',
    'required_with' => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all' => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_without' => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos :values estão presentes.',
    'same' => 'O :attribute e :other devem ser iguais.',
    'size' => [
        'array' => 'O :attribute deve conter :size itens.',
        'file' => 'O :attribute deve ter :size kilobytes.',
        'numeric' => 'O :attribute deve ser :size.',
        'string' => 'O :attribute deve ter :size caracteres.',
    ],
    'starts_with' => 'O :attribute deve começar com um dos seguintes: :values.',
    'string' => 'O :attribute deve ser uma string.',
    'timezone' => 'O :attribute deve ser uma zona válida.',
    'unique' => 'O :attribute já foi utilizado.',
    'uploaded' => 'O :attribute falhou ao fazer upload.',
    'uppercase' => 'O :attribute deve conter letras maiúsculas.',
    'url' => 'O formato do :attribute é inválido.',
    'uuid' => 'O :attribute deve ser um UUID válido.',

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
