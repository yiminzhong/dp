<?php
return [
    'privileges' =>[
        [
            'title' => '管理员管理',
            'icon' => '&#xe62d;',
            'icon2' => "&#xe6d5;",
            'number' => 2,
            'class' => 'fa fa-desktop green',
            'child' => [
                [
                    'title' => '角色管理',
                    'action' => 'AdminController@identity_list',
                    'url' => 'identity_list',
                    'number' => 20,
                    'child' => [
                        [
                            'title' => '添加配置',
                            'action' => 'MainController@login',
                            'url' => 'login',
                            'is_menu' => 0,
                            'number' => 200,
                        ]
                    ]
                ],
                [
                    'title' => '权限管理',
                    'action' => 'LogController@log_index',
                    'url' => 'log_index',
                    'number' => 21,
                    'child' => [
                        [
                            'title' => '添加配置',
                            'action' => 'MainController@login',
                            'url' => 'login',
                            'is_menu' => 0,
                            'number' => 210,
                        ]
                    ]
                ]
                ,
                [
                    'title' => '管理员列表',
                    'action' => 'AdminController@list',
                    'url' => 'administrator_list',
                    'number' => 22,
                    'child' => [
                        [
                            'title' => '添加配置',
                            'action' => 'MainController@login',
                            'url' => 'login',
                            'is_menu' => 0,
                            'number' => 220,
                        ]
                    ]
                ]
            ]
        ],
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
