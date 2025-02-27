<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/public/home/jhz22/public_html/grav/user/plugins/anchors/blueprints.yaml',
    'modified' => 1701601753,
    'size' => 2623,
    'data' => [
        'name' => 'Anchors',
        'type' => 'plugin',
        'slug' => 'anchors',
        'version' => '1.6.0',
        'description' => 'This plugin provides automatic header anchors via the [anchorjs](http://bryanbraun.github.io/anchorjs) jQuery plugin.',
        'icon' => 'anchor',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-anchors',
        'demo' => 'http://learn.getgrav.org',
        'keywords' => 'anchor, header, plugin, code',
        'bugs' => 'https://github.com/getgrav/grav-plugin-anchors/issues',
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
                'active' => [
                    'type' => 'toggle',
                    'label' => 'Active',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Activate for all pages. If disabled then you must activate per-page'
                ],
                'selectors' => [
                    'type' => 'text',
                    'label' => 'Selectors',
                    'size' => 'large',
                    'default' => 'h1,h2,h3,h4',
                    'placeholder' => 'Anchor Selectors',
                    'help' => 'Comma separated list of header selectors to activate on'
                ],
                'placement' => [
                    'type' => 'select',
                    'label' => 'Placement',
                    'classes' => 'fancy',
                    'help' => 'Either `left` or `right`',
                    'default' => 'right',
                    'options' => [
                        'left' => 'left',
                        'right' => 'right'
                    ]
                ],
                'visible' => [
                    'type' => 'select',
                    'label' => 'Visible',
                    'classes' => 'fancy',
                    'help' => 'Hover activates on `hover` else will always display',
                    'default' => 'hover',
                    'options' => [
                        'hover' => 'hover',
                        'always' => 'always'
                    ]
                ],
                'icon' => [
                    'type' => 'text',
                    'label' => 'Icon',
                    'size' => 'medium',
                    'default' => '',
                    'help' => 'Replace the default link icon with the character(s) provided, e.g. #, ¶, ❡ or §'
                ],
                'class' => [
                    'type' => 'text',
                    'label' => 'Class',
                    'size' => 'medium',
                    'default' => '',
                    'help' => 'Adds the provided class to the anchor html'
                ],
                'truncate' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'Truncate',
                    'help' => 'Truncates the generated ID to the specified character length',
                    'default' => 64,
                    'validate' => [
                        'type' => 'number',
                        'min' => 0
                    ]
                ],
                'copy_to_clipboard' => [
                    'type' => 'toggle',
                    'label' => 'Copy to clipboard',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Instead of scrolling to the item when clicking, you can enabled this option to copy the link to the clipboard automatically'
                ]
            ]
        ]
    ]
];
