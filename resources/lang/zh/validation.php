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

    'accepted'             => '请同意:attribute 。',   // 验证的字段必须为 yes, on, 1, or true。这在确认「服务条款」是否同意时相当有用。
    'active_url'           => ':attribute不是有效的 URL。',
    'after'                => ':attribute必需是:date之后的一个有效日期。',
    'after_or_equal'       => ':attribute必需是:date或之后的一个有效日期。',
    'alpha'                => ':attribute只能包含字母。',
    'alpha_dash'           => ':attribute只能包含字母，数字和 - 。',
    'alpha_num'            => ':attribute可能包含字母和数字。',
    'array'                => ':attribute必须是一个数组。',
    'before'               => ':attribute必需是:date之前的一个有效日期。',
    'before_or_equal'      => ':attribute必需是:date或之前的一个有效日期。',
    'between'              => [
        'numeric' => ':attribute必须在 :min 到 :max 之间。',
        'file'    => ':attribute必须在 :min kb 到 :max kb 之间。',
        'string'  => ':attribute必须在 :min 到 :max 个字符之间。',
        'array'   => ':attribute必须在 :min 项到 :max 项之间。',
    ],
    'boolean'              => ':attribute必须为 true 或 false。',
    'confirmed'            => ':attribute匹配不成功。',
    'date'                 => ':attribute不是一个有效的日期。',
    'date_format'          => ':attribute不是一个有效的 :format 格式。',
    'different'            => ':attribute和:other必须不同。',
    'digits'               => ':attribute必须是:digits位数字。',
    'digits_between'       => ':attribute必须是 :min 和 :max 之间的数字.',
    'dimensions'           => ':attribute具有无效的图像尺寸。',
    'distinct'             => ':attribute有重复值。',
    'email'                => ':attribute必须是有效的电子邮件地址。',
    'exists'               => ':attribute内容不存在。',
    'file'                 => ':attribute必须是一个文件。',
    'filled'               => ':attribute必须有一个值。',
    'image'                => ':attribute必须是一个图片。',
    'in'                   => ':attribute的结果值无效。',
    'in_array'             => ':attribute的结果值在:other中不存在。',
    'integer'              => ':attribute必须是一个整数。',
    'ip'                   => ':attribute必须是一个有效的 IP 地址。',
    'ipv4'                 => ':attribute必须是一个有效的 IPv4 地址。',
    'ipv6'                 => ':attribute必须是一个有效的 IPv6 地址。',
    'json'                 => ':attribute必须是一个有效的 JSON 字符串。',
    'max'                  => [
        'numeric' => ':attribute不能大于 :max。',
        'file'    => ':attribute不能大于 :max kb。',
        'string'  => ':attribute不能大于 :max 个字符。',
        'array'   => ':attribute不能大于 :max 项。',
    ],
    'mimes'                => ':attribute必须是一个类型为 :values 的文件。',
    'mimetypes'            => ':attribute必须是一个类型为 :values 的文件。',
    'min'                  => [
        'numeric' => ':attribute必须至少为 :min 。',
        'file'    => ':attribute必须至少为 :min kb。',
        'string'  => ':attribute必须至少为 :min 个字符。',
        'array'   => ':attribute必须至少为 :min 项。',
    ],
    'not_in'               => ':attribute是个无效的选择。',
    'numeric'              => ':attribute必须是一个数字。',
    'present'              => ':attribute字段必须存在。',
    'regex'                => ':attribute格式无效。',
    'required'             => ':attribute是必须的。',
    'required_if'          => '当:other为:value时，:attribute是必须的。',
    'required_unless'      => '除非:other为:value，否则，:attribute是必须的。',
    'required_with'        => '如果有:values，则:attribute是必须的。',
    'required_with_all'    => '如果有:values，则:attribute是必须的。',
    'required_without'     => '如果没有:values，则:attribute是必须的。',
    'required_without_all' => '如果没有:values存在，则必须使用:attribute字段。',
    'same'                 => ':attribute必须和:other相同。',
    'size'                 => [
        'numeric' => ':attribute必须是 :size。',
        'file'    => ':attribute必须是 :size kb。',
        'string'  => ':attribute必须是 :size 个字符。',
        'array'   => ':attribute必须是 :size 项。',
    ],
    'string'               => ':attribute必须是一个字符串。',
    'timezone'             => ':attribute必须是有效的时区。',
    'unique'               => ':attribute已经存在。',
    'uploaded'             => ':attribute上传失败。',
    'url'                  => ':attribute格式不正确。',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
