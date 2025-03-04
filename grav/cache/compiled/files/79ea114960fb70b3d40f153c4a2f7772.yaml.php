<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/public/home/jhz22/public_html/grav/user/plugins/external_links/languages.yaml',
    'modified' => 1701601755,
    'size' => 10061,
    'data' => [
        'de' => [
            'PLUGINS' => [
                'EXTERNAL_LINKS' => [
                    'PLUGIN_NAME' => 'External Links',
                    'PLUGIN_STATUS' => 'Plugin Status',
                    'PLUGIN_STATUS_HELP' => 'Aktiviere das Plugin oder schalte es komplett ab.',
                    'BUILTIN_CSS' => 'Verwende mitgeliefertes CSS',
                    'WEIGHT' => 'Ausführungsreihenfolge',
                    'SETTINGS' => 'Einstellungen',
                    'CONTENT' => 'Inhalt',
                    'EXCLUDE' => [
                        'SECTION' => 'Ausnahmen',
                        'SECTION_HELP' => 'Setzt Links mit bestimmten Klassen oder Links von bestimmten Domains immer als intern.',
                        'CLASSES' => 'Ignoriere Links mit diesen Klassen',
                        'CLASSES_HELP' => 'Komma getrennte Liste',
                        'DOMAINS' => 'Eine Liste von auszuschließenden Domains',
                        'DOMAINS_HELP' => 'Komma getrennte Liste von Domains z.B. _localhost/*_ (jeder regulärer Ausdruck kann verwendet werden)'
                    ],
                    'LINKS' => [
                        'SECTION' => 'Links',
                        'SECTION_HELP' => 'Sieht Links beginnend mit <code>www.</code> oder mit als extern markierten Protokollen als extern an.',
                        'WWW' => 'Verlinkung (WWW)',
                        'WWW_HELP' => 'Verlinke auch Links, die mit \'www.\' beginnen als extern',
                        'REDIRECTS' => 'Folge Seiten-Weiterleitungen',
                        'REDIRECTS_HELP' => 'Links zu Seiten, die zu einer externen URL weiterleiten werden auch als extern markiert',
                        'SCHEMES' => 'Erlaubte Protokolle',
                        'SCHEMES_HELP' => 'Liste von erlaubten Protokollen'
                    ],
                    'PROCESS' => 'Aktiviere <code>External Links</code> auf Seite',
                    'TITLE' => 'Zeige Standardtexttitel für externe Links',
                    'TITLE_MESSAGE' => 'Dieser Link führt auf eine externe Webseite für deren Inhalt wir nicht verantwortlich sind.',
                    'NO_FOLLOW' => 'Fügt <code>rel="nofollow"</code> zu allen externen Links',
                    'TARGET' => 'Setze "target" Attribut des Links.',
                    'TARGET_BLANK' => '_blank - Öffne Link im neuen Fenster',
                    'TARGET_SELF' => '_self - Öffne Link im gleichen Tab oder Seite',
                    'TARGET_PARENT' => '_parent - Öffne Link im Elternfenster',
                    'TARGET_TOP' => '_top - Öffne Link im ganzen Fenster',
                    'MODE' => 'Modus',
                    'MODE_HELP' => 'active = Zeichne externe Links aus; passive = Zeichne externe Links aus ohne entsprechende CSS-Klassen zu setzen',
                    'MODE_ACTIVE' => 'Aktiv - Zeichne externe Links aus',
                    'MODE_PASSIVE' => 'Passiv - Zeichne externe Links aus ohne entsprechende CSS-Klassen zu setzen'
                ]
            ]
        ],
        'en' => [
            'PLUGINS' => [
                'EXTERNAL_LINKS' => [
                    'PLUGIN_NAME' => 'External Links',
                    'PLUGIN_STATUS' => 'Plugin status',
                    'STATUS_HELP' => 'Set to false to disable this plugin completely.',
                    'BUILTIN_CSS' => 'Use built in CSS',
                    'WEIGHT' => 'Order of execution',
                    'SETTINGS' => 'Settings',
                    'CONTENT' => 'Content',
                    'EXCLUDE' => [
                        'SECTION' => 'Exclusion',
                        'SECTION_HELP' => 'Exclude links with a specific class or domains from being recognized as external links.',
                        'CLASSES' => 'Exclude all links with this class',
                        'CLASSES_HELP' => 'Comma separated list.',
                        'DOMAINS' => 'A list of domains to be excluded',
                        'DOMAINS_HELP' => 'Comma separated list of domains e.g. _localhost/*_  (any regular expression can be used)'
                    ],
                    'LINKS' => [
                        'SECTION' => 'Links',
                        'SECTION_HELP' => 'Set links starting with <code>www.</code> and within the list of allowed schemes as external.',
                        'WWW' => 'Link WWW',
                        'WWW_HELP' => 'Automatically link any hostname that starts with \'www.\' as external',
                        'REDIRECTS' => 'Follow Page redirects',
                        'REDIRECTS_HELP' => 'Also mark links as external, that link to pages that redirect to an external URL',
                        'SCHEMES' => 'Allowed schemes',
                        'SCHEMES_HELP' => 'List of allowed schemes'
                    ],
                    'PROCESS' => 'Filter external links on the page',
                    'TITLE' => 'Show default title for external links',
                    'TITLE_MESSAGE' => 'This link will take you to an external web site. We are not responsible for their content.',
                    'NO_FOLLOW' => 'Add <code>rel="nofollow"</code> to all external links',
                    'TARGET' => 'Set target attribute of the link.',
                    'TARGET_BLANK' => '_blank | Load in a new window',
                    'TARGET_SELF' => '_self | Load in the same frame as it was clicked',
                    'TARGET_PARENT' => '_parent | Load in the parent frameset',
                    'TARGET_TOP' => '_top | Load in the full body of the window',
                    'MODE' => 'Mode',
                    'MODE_HELP' => 'active = process and parse all links; passive = parse links, but don\'t set CSS classes',
                    'MODE_ACTIVE' => 'Active - Process and parse all links',
                    'MODE_PASSIVE' => 'Passive - Parse links, but don\'t set CSS classes'
                ]
            ]
        ],
        'fr' => [
            'PLUGINS' => [
                'EXTERNAL_LINKS' => [
                    'PLUGIN_NAME' => 'Liens externes',
                    'PLUGIN_STATUS' => 'Statut du plugin',
                    'STATUS_HELP' => 'Régler sur false pour désactiver complètement le plugin.',
                    'BUILTIN_CSS' => 'Utiliser les CSS intégrés',
                    'WEIGHT' => 'Ordre d’exécution',
                    'SETTINGS' => 'Configuration',
                    'CONTENT' => 'Contenu',
                    'EXCLUDE' => [
                        'SECTION' => 'Exclusion',
                        'SECTION_HELP' => 'Exclure les liens avec des classes spécifiques ou des domaines comme étant reconnus comme liens externes.',
                        'CLASSES' => 'Exclure tous les liens avec cette classe',
                        'CLASSES_HELP' => 'Liste des classes séparées par des virgules.',
                        'DOMAINS' => 'Une liste des domaines à exclure',
                        'DOMAINS_HELP' => 'Liste des domaines séparés par des virgules ex : _localhost/*_  (les expressions régulières peuvent être utilisées)'
                    ],
                    'LINKS' => [
                        'SECTION' => 'Liens',
                        'SECTION_HELP' => 'Définir les liens commençant par <code>www.</code> et ceux de la liste des schémas définis comme étant des liens externes.',
                        'WWW' => 'Liens WWW',
                        'WWW_HELP' => 'Reconnaître automatiquement tout lien commencant par \'www.\' comme étant un lien externe.',
                        'REDIRECTS' => 'Follow Page redirects',
                        'REDIRECTS_HELP' => 'Also mark links as external, that link to pages that redirect to an external URL',
                        'SCHEMES' => 'Schémas autorisés',
                        'SCHEMES_HELP' => 'Liste des schémas autorisés'
                    ],
                    'PROCESS' => 'Filtrer les liens externes de la page',
                    'TITLE' => 'Afficher le titre par défaut pour les liens externes',
                    'TITLE_MESSAGE' => 'Ce lien va vous diriger vers un site externe. Nous ne sommes pas responsables de son contenu.',
                    'NO_FOLLOW' => 'Ajouter <code>rel="nofollow"</code> à tous les liens externes',
                    'TARGET' => 'Spécifier la cible dans laquelle le contenu du lien doit s\'afficher.',
                    'TARGET_BLANK' => '_blank | Afficher dans une nouvelle fenêtre',
                    'TARGET_SELF' => '_self | Afficher dans la même fenêtre',
                    'TARGET_PARENT' => '_parent | Afficher dans le cadre parent (frame)',
                    'TARGET_TOP' => '_top | Afficher dans le cadre racine',
                    'MODE' => 'Mode',
                    'MODE_HELP' => 'actif = analyser et procéder pour tous les liens; passif = analyser les liens mais ne pas appliquer les classes CSS',
                    'MODE_ACTIVE' => 'Actif - Analyser et procéder pour tous les liens',
                    'MODE_PASSIVE' => 'Passif - Analyser les liens mais ne pas appliquer les classes CSS'
                ]
            ]
        ],
        'ru' => [
            'PLUGINS' => [
                'EXTERNAL_LINKS' => [
                    'PLUGIN_NAME' => 'Внешние ссылки',
                    'PLUGIN_STATUS' => 'Статус плагина',
                    'STATUS_HELP' => 'Установите нет, чтобы отключить этот плагин полностью.',
                    'BUILTIN_CSS' => 'Использовать встроенные CSS',
                    'WEIGHT' => 'Порядок выполнения',
                    'SETTINGS' => 'Настройки',
                    'CONTENT' => 'Контент',
                    'EXCLUDE' => [
                        'SECTION' => 'Исключения',
                        'SECTION_HELP' => 'Исключить ссылки с определенным классом или домены, которые не признаются в качестве внешних ссылок.',
                        'CLASSES' => 'Исключить все ссылки с этим классом',
                        'CLASSES_HELP' => 'Список разделенных запятыми.',
                        'DOMAINS' => 'Список доменов, которые будут исключены',
                        'DOMAINS_HELP' => 'Разделенный запятыми список доменов, например, _localhost / * _ (любое регулярное выражение может быть использовано)'
                    ],
                    'LINKS' => [
                        'SECTION' => 'Ссылки',
                        'SECTION_HELP' => 'Установить ссылки, начинающиеся с <code>www.</code>? и список разрешенных схем, как внешние.',
                        'WWW' => 'Ссылка WWW',
                        'WWW_HELP' => 'Автоматически связывать любое имя хоста, которое начинается с \'www\'. как внешние',
                        'REDIRECTS' => 'Follow Page redirects',
                        'REDIRECTS_HELP' => 'Also mark links as external, that link to pages that redirect to an external URL',
                        'SCHEMES' => 'Допустимые схемы',
                        'SCHEMES_HELP' => 'Список допустимых схем'
                    ],
                    'PROCESS' => 'Фильтр внешних ссылок на странице',
                    'TITLE' => 'Показать название по умолчанию для внешних ссылок',
                    'TITLE_MESSAGE' => 'Эта ссылка приведет вас на внешний веб-сайт. Мы не несем ответственности за его содержание.',
                    'NO_FOLLOW' => 'Добавить <code>rel="nofollow"</code> ко всем внешним ссылкам',
                    'TARGET' => 'Установить целевой атрибут ссылки.',
                    'TARGET_BLANK' => '_blank | Загрузка в новом окне',
                    'TARGET_SELF' => '_self | Загрузка в том же фрейме где и был сделан клик',
                    'TARGET_PARENT' => '_parent | Загрузка в родительском наборе фреймов',
                    'TARGET_TOP' => '_top | Загрузка в отдельном окне браузера',
                    'MODE' => 'Режим',
                    'MODE_HELP' => 'активный = обработка и разбор всех ссылок; пассивный = вставлять ссылки, но не устанавливать для них CSS',
                    'MODE_ACTIVE' => 'Активный = обработка и разбор всех ссылок',
                    'MODE_PASSIVE' => 'Пассивный = вставлять ссылки, но не устанавливать для них CSS'
                ]
            ]
        ]
    ]
];
