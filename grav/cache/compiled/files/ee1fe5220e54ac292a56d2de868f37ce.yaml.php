<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/public/home/jhz22/public_html/grav/user/plugins/feed/blueprints.yaml',
    'modified' => 1701601766,
    'size' => 1675,
    'data' => [
        'name' => 'Feed',
        'type' => 'plugin',
        'slug' => 'feed',
        'version' => '1.10.0',
        'description' => 'The **Feed** plugin is a simple yet powerful add-on that lets you view a Grav Collection as **JSON**, **RSS** or **Atom** news feed.',
        'icon' => 'rss',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-feed',
        'demo' => 'http://demo.getgrav.org/blog-skeleton',
        'keywords' => 'feed, plugin, rss, atom, collection, json',
        'bugs' => 'https://github.com/getgrav/grav-plugin-feed/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.0'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'limit' => [
                    'type' => 'range',
                    'label' => 'Feed count',
                    'validate' => [
                        'type' => 'number',
                        'min' => 10,
                        'max' => 1000
                    ]
                ],
                'title' => [
                    'type' => 'text',
                    'label' => 'Title'
                ],
                'description' => [
                    'type' => 'textarea',
                    'label' => 'Description'
                ],
                'length' => [
                    'type' => 'range',
                    'label' => 'Feed Length (0 for full-text feed)',
                    'validate' => [
                        'type' => 'number',
                        'min' => 0,
                        'max' => 10000
                    ]
                ],
                'enable_json_feed' => [
                    'type' => 'toggle',
                    'label' => 'JSON feed support',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'show_last_modified' => [
                    'type' => 'toggle',
                    'label' => 'Show last modified date',
                    'help' => 'If enabled, file modification date will be used for computing "last updated" times in feeds',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
