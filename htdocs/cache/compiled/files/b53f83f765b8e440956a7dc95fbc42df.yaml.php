<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/srv/data/web/vhosts/www.nielsreijers.com/htdocs/user/config/plugins/email.yaml',
    'modified' => 1681287264,
    'size' => 521,
    'data' => [
        'enabled' => true,
        'from' => 'nielsreijers@gmail.com',
        'from_name' => NULL,
        'to' => 'nielsreijers@gmail.com',
        'to_name' => NULL,
        'queue' => [
            'enabled' => false,
            'flush_frequency' => '* * * * *',
            'flush_msg_limit' => 10,
            'flush_time_limit' => 100
        ],
        'mailer' => [
            'engine' => 'sendmail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none',
                'user' => NULL,
                'password' => NULL,
                'auth_mode' => NULL
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => true,
        'charset' => NULL,
        'cc' => NULL,
        'cc_name' => NULL,
        'bcc' => NULL,
        'reply_to' => NULL,
        'reply_to_name' => NULL,
        'body' => NULL
    ]
];
