<?php
return [
    'privileges' =>[
        [
            'title' => '网站管理',
            'number' => 1,
            'class' => 'fa fa-desktop green',
            'child' => [
                'title' => '配置管理',
                'action' => 'ConfigureController@index',
                'child' => [
                    [
                        'title' => '添加配置',
                        'action' => 'MainController@login',
                        'is_menu' => 0,
                        'number' => 10,
                    ]
                ]
            ]
        ],
        [
            'title' => '网站管理',
            'number' => 1,
            'class' => 'fa fa-desktop green',
            'child' => [
                'title' => '配置管理',
                'action' => 'ConfigureController@index',
                'child' => [
                    [
                        'title' => '添加配置',
                        'action' => 'MainController@login',
                        'is_menu' => 0,
                        'number' => 10,
                    ]
                ]
            ]
        ]
    ]

];
