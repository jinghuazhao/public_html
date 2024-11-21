<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/public/home/jhz22/public_html/grav/user/plugins/prism-highlight/prism-highlight.yaml',
    'modified' => 1701601774,
    'size' => 337,
    'data' => [
        'enabled' => true,
        'theme' => 'prism-one-light.css',
        'all-pre-blocks' => true,
        'custom' => [
            'js_location' => 'user://data/prism-highlight/prism.js',
            'css_location' => 'user://data/prism-highlight/prism.css',
            'theme_location' => 'user://data/prism-highlight/custom-theme.css'
        ],
        'plugins' => [
            'line-numbers' => false,
            'command-line' => false,
            'command-line-prompt' => '$'
        ]
    ]
];
