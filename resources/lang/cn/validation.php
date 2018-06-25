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

    'accepted'             => ':attribute 必须被接受.',
    'active_url'           => ':attribute 是无效URL.',
    'after'                => ':attribute 必须是在 :date 之后的日期.',
    'after_or_equal'       => ':attribute 必须是在 :date 之后的日期或当日.',
    'alpha'                => ':attribute 可能只包括字母.',
    'alpha_dash'           => ':attribute XXX可能只包括字母数字和破折号.',
    'alpha_num'            => ':attribute 可能只包括字母和数字.',
    'array'                => ':attribute 必须是数组.',
    'before'               => ':attribute 必须是在 :date 之前的日期.',
    'before_or_equal'      => ':attribute 必须是在 :date 之前的日期或当日.',
    'between'              => [
        'numeric' => ':attribute 必须在 :min 和 :max 之间.',
        'file'    => ':attribute 必须在 :min 和 :max KB之间.',
        'string'  => ':attribute 必须在 :min 和 :max 字符之间.',
        'array'   => ':attribute 必须在 :min 和 :max 项目之间.',
    ],
    'boolean'              => ':attribute 字符必须是真或是假.',
    'confirmed'            => ':attribute 确认不符.',
    'date'                 => ':attribute 不是有效日期.',
    'date_format'          => ':attribute 与 :format 的格式不符.',
    'different'            => ':attribute 和 :other 必须不同.',
    'digits'               => ':attribute 必须是 :digits 的小数.',
    'digits_between'       => ':attribute 必须在 :min 和 :max 的小数之间.',
    'dimensions'           => ':attribute 图像大小无效.',
    'distinct'             => ':attribute 字符是含重复值.',
    'email'                => ':attribute 必须是有效的邮箱地址.',
    'exists'               => '已选的 :attribute 是无效的.',
    'file'                 => ':attribute 必须是一个文件.',
    'filled'               => ':attribute 字段必须有一个值.',
    'image'                => ':attribute 必须是图片.',
    'in'                   => '已选的 :attribute 是无效的.',
    'in_array'             => ':attribute 字段不存在于 :other.',
    'integer'              => ':attribute 必须是整数.',
    'ip'                   => ':attribute 是有效 IP 地址.',
    'ipv4'                 => ':attribute 是有效 IPv4地址.',
    'ipv6'                 => ':attribute 是有效 IPv6地址.',
    'json'                 => ':attribute 是有效 JSON字符串.',
    'max'                  => [
        'numeric' => ':attribute 可能不超过 :max.',
        'file'    => ':attribute 可能不超过 :max KB.',
        'string'  => ':attribute 可能不超过 :max 字符.',
        'array'   => ':attribute 可能无超过 :max 项目.',
    ],
    'mimes'                => ':attribute 必须是文件类型: :values.',
    'mimetypes'            => ':attribute 必须是文件类型: :values.',
    'min'                  => [
        'numeric' => ':attribute 应至少 :min.',
        'file'    => ':attribute 应至少 :min KB.',
        'string'  => ':attribute 应至少 :min 字符.',
        'array'   => ':attribute 应至少 :min 项目.',
    ],
    'not_in'               => '选择的 :attribute 无效.',
    'numeric'              => ':attribute 必须是数字.',
    'present'              => ':attribute 字段是必须显示.',
    'regex'                => ':attribute 格式无效.',
    'required'             => ':attribute 字段是必须的.',
    'required_if'          => ':attribute 字段是必须的，当 :other 是 :value 时.',
    'required_unless'      => ':attribute 字段是必须的，除非 :other 包含在 :values 时.',
    'required_with'        => ':attribute 字段是必须的，当没有 :values 显示时.',
    'required_with_all'    => ':attribute 字段是必须的，当没有 :values 显示时.',
    'required_without'     => ':attribute 字段是必须的，当没有 :values 显示时.',
    'required_without_all' => ':attribute 字段是必须的，当没有 :values 显示时.',
    'same'                 => ':attribute 和 :other 必须一致.',
    'size'                 => [
        'numeric' => ':attribute 必须是 :size.',
        'file'    => ':attribute 必须是 :size KB.',
        'string'  => ':attribute 必须是 :size 字符.',
        'array'   => ':attribute 必须包含 :size 项目.',
    ],
    'string'               => ':attribute 必须是字符串.',
    'timezone'             => ':attribute 必须是有效时区.',
    'unique'               => ':attribute 已被使用.',
    'uploaded'             => ':attribute 上传失败.',
    'url'                  => ':attribute 格式无效.',

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
        'g-recaptcha-response' => [
            'required' => '请验证您不是机器人.',
            'captcha' => '验证码错误! 稍后尝试或联系网站管理员.',
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
