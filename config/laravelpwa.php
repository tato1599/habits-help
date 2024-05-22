<?php

return [
    'name' => 'Habits Tracker',
    'manifest' => [
        'name' => env('APP_NAME', 'Habits Tracker'),
        'short_name' => 'Habits Tracker',
        'start_url' => '/',
        'background_color' => '#ffffff',
        'theme_color' => '#000000',
        'display' => 'standalone',
        'orientation'=> 'any',
        'status_bar'=> 'black',
        'icons' => [
            '72x72' => [
            'path' => '/icons/habitos.png',
            'purpose' => 'any'
            ],
            '96x96' => [
            'path' => '/icons/habitos.png',
            'purpose' => 'any'
            ],
            '128x128' => [
            'path' => '/icons/habitos.png',
            'purpose' => 'any'
            ],
            '144x144' => [
            'path' => '/icons/habitos.png',
            'purpose' => 'any'
            ],
            '152x152' => [
            'path' => '/icons/habitos.png',
            'purpose' => 'any'
            ],
            '192x192' => [
            'path' => '/icons/habitos.png',
            'purpose' => 'any'
            ],
            '384x384' => [
            'path' => '/icons/habitos.png',
            'purpose' => 'any'
            ],
            '512x512' => [
            'path' => '/icons/habitos.png',
            'purpose' => 'any'
            ],
        ],
        'splash' => [
            '640x1136' => '/icons/habitos.png',
            '750x1334' => '/icons/habitos.png',
            '828x1792' => '/icons/habitos.png',
            '1125x2436' => '/icons/habitos.png',
            '1242x2208' => '/icons/habitos.png',
            '1242x2688' => '/icons/habitos.png',
            '1536x2048' => '/icons/habitos.png',
            '1668x2224' => '/icons/habitos.png',
            '1668x2388' => '/icons/habitos.png',
            '2048x2732' => '/icons/habitos.png',
        ],
        // 'shortcuts' => [
        //     [
        //         'name' => 'Shortcut Link 1',
        //         'description' => 'Shortcut Link 1 Description',
        //         'url' => '/shortcutlink1',
        //         'icons' => [
        //             "src" => "/images/icons/icon-72x72.png",
        //             "purpose" => "any"
        //         ]
        //     ],
        //     [
        //         'name' => 'Shortcut Link 2',
        //         'description' => 'Shortcut Link 2 Description',
        //         'url' => '/shortcutlink2'
        //     ]
        // ],
        'custom' => []
    ]
];
