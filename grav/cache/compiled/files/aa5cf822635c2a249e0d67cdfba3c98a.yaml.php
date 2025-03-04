<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/public/home/jhz22/public_html/grav/user/plugins/simplesearch/blueprints.yaml',
    'modified' => 1701601774,
    'size' => 4539,
    'data' => [
        'name' => 'SimpleSearch',
        'type' => 'plugin',
        'slug' => 'simplesearch',
        'version' => '2.3.0',
        'description' => 'Don\'t be fooled, the **SimpleSearch** plugin provides a **fast** and highly **configurable** way to search your content.',
        'icon' => 'search',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-simplesearch',
        'demo' => 'http://demo.getgrav.org/blog-skeleton',
        'keywords' => 'simplesearch, plugin, search, page, content, find',
        'bugs' => 'https://github.com/getgrav/grav-plugin-simplesearch/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.7.0'
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
                'search_content' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'classes' => 'fancy',
                    'label' => 'PLUGIN_SIMPLESEARCH.SEARCH_CONTENT',
                    'default' => 'rendered',
                    'options' => [
                        'rendered' => 'PLUGIN_SIMPLESEARCH.RENDERED_CONTENT',
                        'raw' => 'PLUGIN_SIMPLESEARCH.RAW_CONTENT'
                    ]
                ],
                'built_in_css' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_SIMPLESEARCH.BUILTIN_CSS',
                    'help' => 'PLUGIN_SIMPLESEARCH.BUILTIN_CSS_HELP',
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
                'built_in_js' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_SIMPLESEARCH.BUILTIN_JS',
                    'help' => 'PLUGIN_SIMPLESEARCH.BUILTIN_JS_HELP',
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
                'display_button' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_SIMPLESEARCH.DISPLAY_SEARCH_BUTTON',
                    'help' => 'PLUGIN_SIMPLESEARCH.DISPLAY_SEARCH_BUTTON_HELP',
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
                'ignore_accented_characters' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_SIMPLESEARCH.IGNORE_ACCENDED_CHARACTERS',
                    'help' => 'PLUGIN_SIMPLESEARCH.IGNORE_ACCENDED_CHARACTERS_HELP',
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
                'min_query_length' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'PLUGIN_SIMPLESEARCH.MIN_QUERY_LENGTH',
                    'help' => 'PLUGIN_SIMPLESEARCH.MIN_QUERY_LENGTH_HELP',
                    'validate' => [
                        'type' => 'number',
                        'min' => 0
                    ]
                ],
                'route' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'PLUGIN_SIMPLESEARCH.SEARCH_PAGE_ROUTE',
                    'help' => 'PLUGIN_SIMPLESEARCH.SEARCH_PAGE_ROUTE_HELP',
                    'default' => '/random'
                ],
                'searchable_types' => [
                    'type' => 'checkboxes',
                    'label' => 'PLUGIN_SIMPLESEARCH.SEARCHABLE_TYPES',
                    'description' => 'PLUGIN_SIMPLESEARCH.SEARCHABLE_TYPES_DESCRIPTION',
                    'options' => [
                        'title' => 'Title',
                        'content' => 'Content',
                        'header' => 'Header',
                        'taxonomy' => 'Taxonomy'
                    ],
                    'use' => 'keys'
                ],
                'header_keys_ignored' => [
                    'type' => 'selectize',
                    'size' => 'large',
                    'label' => 'PLUGIN_SIMPLESEARCH.HEADER_KEYS_IGNORED',
                    'help' => 'PLUGIN_SIMPLESEARCH.HEADER_KEYS_IGNORED_HELP',
                    'classes' => 'fancy',
                    'validate' => [
                        'type' => 'commalist'
                    ]
                ],
                'template' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'PLUGIN_SIMPLESEARCH.SEARCH_PAGE_TEMPLATE',
                    'help' => 'PLUGIN_SIMPLESEARCH.SEARCH_PAGE_TEMPLATE_HELP',
                    'default' => 'simplesearch_results'
                ],
                'filters.category' => [
                    'type' => 'selectize',
                    'label' => 'PLUGIN_SIMPLESEARCH.CATEGORY_FILTER',
                    'help' => 'PLUGIN_SIMPLESEARCH.CATEGORY_FILTER_HELP',
                    'validate' => [
                        'type' => 'commalist'
                    ]
                ],
                'filter_combinator' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'classes' => 'fancy',
                    'label' => 'PLUGIN_SIMPLESEARCH.FILTER_COMBINATOR',
                    'default' => 'and',
                    'options' => [
                        'and' => 'PLUGIN_SIMPLESEARCH.AND_COMBINATOR',
                        'or' => 'PLUGIN_SIMPLESEARCH.OR_COMBINATOR'
                    ]
                ],
                'order.by' => [
                    'type' => 'select',
                    'size' => 'long',
                    'classes' => 'fancy',
                    'label' => 'PLUGIN_ADMIN.DEFAULT_ORDERING',
                    'help' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_HELP',
                    'options' => [
                        'default' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DEFAULT',
                        'folder' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_FOLDER',
                        'title' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_TITLE',
                        'date' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DATE'
                    ]
                ],
                'order.dir' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.DEFAULT_ORDER_DIRECTION',
                    'highlight' => 'asc',
                    'default' => 'desc',
                    'help' => 'PLUGIN_ADMIN.DEFAULT_ORDER_DIRECTION_HELP',
                    'options' => [
                        'asc' => 'PLUGIN_ADMIN.ASCENDING',
                        'desc' => 'PLUGIN_ADMIN.DESCENDING'
                    ]
                ]
            ]
        ]
    ]
];
