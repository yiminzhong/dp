<?php
return [
    'privileges' =>[
        [
            'title' => '管理员管理',
            'icon' => '&#xe62d;',
            'icon2' => "&#xe6d5;",
            'number' => 1,
            'class' => 'fa fa-desktop green',
            'child' => [
                [
                    'title' => '角色列表',
                    'action' => 'IdentityController@list',
                    'url' => 'identity_list',
                    'number' => 10,
                    'child' => [
                        [
                            'title' => '新增角色',
                            'action' => 'IdentityController@add',
                            'url' => 'identity_add',
                            'is_menu' => 0,
                            'number' => 100,
                        ],
                        [
                            'title' => '修改状态',
                            'action' => 'IdentityController@status',
                            'url' => 'identity_status',
                            'is_menu' => 0,
                            'number' => 101,
                        ]
                        ,
                        [
                            'title' => '角色权限编辑',
                            'action' => 'IdentityController@edite',
                            'url' => 'identity_edite',
                            'is_menu' => 0,
                            'number' => 101,
                        ]
                    ]
                ]
                ,
                [
                    'title' => '管理员列表',
                    'action' => 'AdminController@list',
                    'url' => 'administrator_list',
                    'number' => 12,
                    'child' => [
                        [
                            'title' => '添加管理员',
                            'action' => 'AdminController@add',
                            'url' => 'administrator_add',
                            'is_menu' => 0,
                            'number' => 120,
                        ],
                        [
                            'title' => '修改管理员状态',
                            'action' => 'AdminController@status',
                            'url' => 'administrator_status',
                            'is_menu' => 0,
                            'number' => 121,
                        ]
                        ,
                        [
                            'title' => '修改密码',
                            'action' => 'AdminController@password',
                            'url' => 'administrator_password',
                            'is_menu' => 0,
                            'number' => 122,
                        ]  ,
                        [
                            'title' => '个人权限分配',
                            'action' => 'AdminController@auth_privileges',
                            'url' => 'administrator_auth_privileges',
                            'is_menu' => 0,
                            'number' => 122,
                        ]
                    ]
                ]
            ]
        ],
        [
            'title' => '系统管理',
            'icon' => '&#xe62e;',
            'icon2' => "&#xe6d5;",
            'number' => 2,
            'class' => 'fa fa-desktop green',
            'child' => [
                [
                    'title' => '系统日志',
                    'action' => 'LogController@errorlog',
                    'url' => 'error_logs',
                    'number' => 20,
                ],
                [
                    'title' => '错误日志',
                    'action' => 'LogController@log_index',
                    'url' => 'log_index',
                    'number' => 21
                ]
            ]
        ]
    ]

];
