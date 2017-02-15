<?php
# @Author: Onemax <onemax>
# @Date:   2017-02-14T10:46:46+07:00
# @Email:  hotro@onemax.com.vn
# @Project: Onemax
# @Last modified by:   onemax
# @Last modified time: 2017-02-14T10:46:57+07:00
# @Copyright: Onemax.ltd.co

return [
    'defaults' => [
        'guard' => 'api',
        'passwords' => 'users',
    ],

    'guards' => [
        'api' => [
            'driver' => 'passport',
            'provider' => 'users',
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => \App\Model\User::class
        ]
    ]
];
