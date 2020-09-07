<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    // 'defaults' => [
    //     'guard' => 'admin',
    //     'passwords' => 'users',
    // ],

    // 'guards' => [
    //     'admin' => [
    //         'driver' => 'session',
    //         'provider' => 'admins',
    //     ],
    //     'user' => [
    //         'driver' => 'session',
    //         'provider' => 'users',
    //     ],
    //     'api' => [
    //         'driver' => 'token',
    //         'provider' => 'users',
    //         'hash' => false,
    //     ],
        
    //     // 'users' => [
    //     //     'driver' => 'database',
    //     //     'table' => 'users',
    //     // ],
    // ],

    // 'providers' => [
    //     'admins' => [
    //         'driver' => 'eloquent',
    //         'model' => App\Admin::class,
    //     ],
    //     'users' => [
    //         'driver' => 'eloquent',
    //         'model' => App\User::class,
    //     ],
    // ],


    // /*
    // |--------------------------------------------------------------------------
    // | Resetting Passwords
    // |--------------------------------------------------------------------------
    // |
    // | You may specify multiple password reset configurations if you have more
    // | than one user table or model in the application and you want to have
    // | separate password reset settings based on the specific user types.
    // |
    // | The expire time is the number of minutes that the reset token should be
    // | considered valid. This security feature keeps tokens short-lived so
    // | they have less time to be guessed. You may change this as needed.
    // |
    // */

    // 'passwords' => [
    //     'users' => [
    //         'provider' => 'users',
    //         'table' => 'password_resets',
    //         'expire' => 60,
    //         'throttle' => 60,
    //     ],
    // ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Here you may define the amount of seconds before a password confirmation
    | times out and the user is prompted to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */


    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],
'admins' => [
        'driver' => 'eloquent',
        'model' => App\Admin::class,
    ],
//
//
'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],
        'admin-api' => [
            'driver' => 'token',
            'provider' => 'admins',
        ],
    ],
//
//
'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],
       'admins' => [
            'driver' => 'eloquent',
            'model' => App\Admin::class,
        ],
    ],
//
//
'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],
        'admins' => [
            'provider' => 'admins',
            'table' => 'password_resets',
            'expire' => 15,
        ],
    ],

    // 'password_timeout' => 10800,

];
