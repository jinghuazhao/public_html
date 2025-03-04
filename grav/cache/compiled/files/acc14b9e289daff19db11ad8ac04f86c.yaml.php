<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/public/home/jhz22/public_html/grav/user/plugins/external_links/blueprints.yaml',
    'modified' => 1701601755,
    'size' => 5972,
    'data' => [
        'name' => 'External Links',
        'type' => 'plugin',
        'slug' => 'external_links',
        'version' => '1.6.3',
        'description' => 'This plugin adds small icons to external and mailto links, informing users the link will take them to a new site or open their email client.',
        'icon' => 'external-link',
        'author' => [
            'name' => 'Hibbitts Design',
            'email' => 'hello@hibbittsdesign.org'
        ],
        'homepage' => 'https://github.com/hibbitts-design/grav-plugin-external-links',
        'keywords' => [
            0 => 'external',
            1 => 'links',
            2 => 'filter',
            3 => 'formatter',
            4 => 'plugin'
        ],
        'docs' => 'https://github.com/hibbitts-design/grav-plugin-external-links/blob/master/README.md',
        'bugs' => 'https://github.com/hibbitts-design/grav-plugin-external-links/issues',
        'license' => 'MIT/GPL',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'class' => 'subtle',
                    'fields' => [
                        'external_links' => [
                            'type' => 'tab',
                            'title' => 'PLUGINS.EXTERNAL_LINKS.PLUGIN_NAME',
                            'fields' => [
                                'enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                                    'help' => 'PLUGINS.EXTERNAL_LINKS.STATUS_HELP',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'built_in_css' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.EXTERNAL_LINKS.BUILTIN_CSS',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'weight' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'label' => 'PLUGINS.EXTERNAL_LINKS.WEIGHT',
                                    'default' => 0,
                                    'validate' => [
                                        'type' => 'int',
                                        'min' => -100,
                                        'max' => 100
                                    ]
                                ]
                            ]
                        ],
                        'settings' => [
                            'type' => 'tab',
                            'title' => 'PLUGINS.EXTERNAL_LINKS.SETTINGS',
                            'fields' => [
                                'links' => [
                                    'type' => 'section',
                                    'title' => 'PLUGINS.EXTERNAL_LINKS.LINKS.SECTION',
                                    'text' => 'PLUGINS.EXTERNAL_LINKS.LINKS.SECTION_HELP',
                                    'fields' => [
                                        'links.www' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGINS.EXTERNAL_LINKS.LINKS.WWW',
                                            'help' => 'PLUGINS.EXTERNAL_LINKS.LINKS.WWW_HELP',
                                            'default' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'links.redirects' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGINS.EXTERNAL_LINKS.LINKS.REDIRECTS',
                                            'help' => 'PLUGINS.EXTERNAL_LINKS.LINKS.REDIRECTS_HELP',
                                            'default' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'links.schemes' => [
                                            'type' => 'selectize',
                                            'size' => 'large',
                                            'label' => 'PLUGINS.EXTERNAL_LINKS.LINKS.SCHEMES',
                                            'help' => 'PLUGINS.EXTERNAL_LINKS.LINKS.SCHEMES_HELP',
                                            'validate' => [
                                                'type' => 'commalist'
                                            ]
                                        ]
                                    ]
                                ],
                                'exclude' => [
                                    'type' => 'section',
                                    'title' => 'PLUGINS.EXTERNAL_LINKS.EXCLUDE.SECTION',
                                    'text' => 'PLUGINS.EXTERNAL_LINKS.EXCLUDE.SECTION_HELP',
                                    'fields' => [
                                        'exclude.classes' => [
                                            'type' => 'selectize',
                                            'size' => 'large',
                                            'label' => 'PLUGINS.EXTERNAL_LINKS.EXCLUDE.CLASSES',
                                            'help' => 'PLUGINS.EXTERNAL_LINKS.EXCLUDE.CLASSES_HELP',
                                            'validate' => [
                                                'type' => 'commalist'
                                            ]
                                        ],
                                        'exclude.domains' => [
                                            'type' => 'selectize',
                                            'size' => 'large',
                                            'label' => 'PLUGINS.EXTERNAL_LINKS.EXCLUDE.DOMAINS',
                                            'help' => 'PLUGINS.EXTERNAL_LINKS.EXCLUDE.DOMAINS_HELP',
                                            'placeholder' => 'localhost/*, img.domain.com/*',
                                            'validate' => [
                                                'type' => 'commalist'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'content' => [
                            'type' => 'tab',
                            'title' => 'PLUGINS.EXTERNAL_LINKS.CONTENT',
                            'fields' => [
                                'process' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.EXTERNAL_LINKS.PROCESS',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'title' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.EXTERNAL_LINKS.TITLE',
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'no_follow' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.EXTERNAL_LINKS.NO_FOLLOW',
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'target' => [
                                    'type' => 'select',
                                    'size' => 'large',
                                    'label' => 'PLUGINS.EXTERNAL_LINKS.TARGET',
                                    'default' => '_blank',
                                    'placeholder' => '_blank',
                                    'selectize' => [
                                        'create' => true
                                    ],
                                    'options' => [
                                        '_blank' => 'PLUGINS.EXTERNAL_LINKS.TARGET_BLANK',
                                        '_self' => 'PLUGINS.EXTERNAL_LINKS.TARGET_SELF',
                                        '_parent' => 'PLUGINS.EXTERNAL_LINKS.TARGET_PARENT',
                                        '_top' => 'PLUGINS.EXTERNAL_LINKS.TARGET_TOP'
                                    ],
                                    'validate' => [
                                        'type' => 'string'
                                    ]
                                ],
                                'mode' => [
                                    'type' => 'select',
                                    'size' => 'large',
                                    'classes' => 'fancy',
                                    'label' => 'PLUGINS.EXTERNAL_LINKS.MODE',
                                    'help' => 'PLUGINS.EXTERNAL_LINKS.MODE_HELP',
                                    'default' => 'active',
                                    'options' => [
                                        'active' => 'PLUGINS.EXTERNAL_LINKS.MODE_ACTIVE',
                                        'passive' => 'PLUGINS.EXTERNAL_LINKS.MODE_PASSIVE'
                                    ],
                                    'validate' => [
                                        'type' => 'string'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
