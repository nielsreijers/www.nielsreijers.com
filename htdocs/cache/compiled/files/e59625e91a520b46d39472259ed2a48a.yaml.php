<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/srv/data/web/vhosts/www.nielsreijers.com/htdocs/user/config/site.yaml',
    'modified' => 1682339712,
    'size' => 349,
    'data' => [
        'title' => 'Niels\' Site',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Niels Reijers',
            'email' => 'nielsreijers@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => NULL,
        'routes' => NULL,
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
