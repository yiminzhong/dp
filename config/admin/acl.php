<?php
return [
    'privileges' =>[
        [
            'title' => '系统管理',
            'icon' => '&#xe62e;',
            'icon2' => "&#xe6d5;",
            'number' => 1,
            'class' => 'fa fa-desktop green',
            'child' => [
                [
                    'title' => '系统日志',
                    'action' => 'LogController@errorlog',
                    'url' => 'error_logs',
                    'child' => [
                        [
                            'title' => '添加配置',
                            'action' => 'MainController@login',
                            'url' => 'login',
                            'is_menu' => 0,
                            'number' => 10,
                        ]
                    ]
                ],
                [
                    'title' => '错误日志',
                    'action' => 'LogController@log_index',
                    'url' => 'log_index',
                    'child' => [
                        [
                            'title' => '添加配置',
                            'action' => 'MainController@login',
                            'url' => 'login',
                            'is_menu' => 0,
                            'number' => 10,
                        ]
                    ]
                ]
            ]
        ],
        [
            'title' => '网站管理',
            'number' => 1,
            'icon' => "&#xe62e;",
            'icon2' => "&#xe6d5;",
            'class' => 'fa fa-desktop green',
            'child' => [
                [
                    'title' => '配置管理4',
                    'action' => 'ConfigureController@index',
                    'url' => 'index',
                    'child' => [
                        [
                            'title' => '添加配置',
                            'action' => 'MainController@login',
                            'url' => 'login',
                            'is_menu' => 0,
                            'number' => 10,
                        ]
                    ]
                ],
                [
                    'title' => '配置管理3',
                    'action' => 'ConfigureController@index',
                    'url' => 'index',
                    'child' => [
                        [
                            'title' => '添加配置',
                            'action' => 'MainController@login',
                            'url' => 'login',
                            'is_menu' => 0,
                            'number' => 10,
                        ]
                    ]
                ]
            ]
        ]
    ]

];
