<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/public/home/jhz22/public_html/grav/user/plugins/prism-highlight/blueprints.yaml',
    'modified' => 1701601773,
    'size' => 2366,
    'data' => [
        'name' => 'Prism Highlight',
        'slug' => 'prism-highlight',
        'type' => 'plugin',
        'version' => '3.0.0',
        'description' => 'This plugin provides code highlighting functionality via the [Prism.js](http://prismjs.com/) syntax highlighter with lots of themes and plugins.',
        'icon' => 'code',
        'author' => [
            'name' => 'Trilby Media',
            'email' => 'hello@trilby.media',
            'url' => 'https://trilby.media'
        ],
        'homepage' => 'https://github.com/trilbymedia/grav-plugin-prism-highlight',
        'keywords' => 'highlight, plugin, code, prism.js',
        'bugs' => 'https://github.com/trilbymedia/grav-plugin-prism-highlight/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'theme' => [
                    'type' => 'select',
                    'label' => 'CSS Theme',
                    'default' => 'prism-one-light.css',
                    'size' => 'large',
                    'data-options@' => '\\Grav\\Plugin\\PrismHighlightPlugin::themeOptions'
                ],
                'all-pre-blocks' => [
                    'type' => 'toggle',
                    'label' => 'All Pre Blocks',
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
                'section_plugins' => [
                    'type' => 'section',
                    'title' => 'Plugins Options',
                    'underline' => true
                ],
                'plugins.line-numbers' => [
                    'type' => 'toggle',
                    'label' => 'Line Numbers',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'plugins.command-line' => [
                    'type' => 'toggle',
                    'label' => 'Command Line',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'plugins.command-line-prompt' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'Command Line Prompt'
                ],
                'section_advanced' => [
                    'type' => 'section',
                    'title' => 'Advanced',
                    'underline' => true,
                    'fields' => [
                        'custom.js_location' => [
                            'type' => 'text',
                            'label' => 'Custom JS location',
                            'default' => 'user://data/prism-highlight/prism.js'
                        ],
                        'custom.css_location' => [
                            'type' => 'text',
                            'label' => 'Custom CSS location',
                            'default' => 'user://data/prism-highlight/prism.css'
                        ],
                        'custom.theme_location' => [
                            'type' => 'text',
                            'label' => 'Custom CSS location',
                            'default' => 'user://data/prism-highlight/prism.css'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
