<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/public/home/jhz22/public_html/grav/user/plugins/git-sync/blueprints.yaml',
    'modified' => 1701601772,
    'size' => 8245,
    'data' => [
        'name' => 'Git Sync',
        'type' => 'plugin',
        'slug' => 'git-sync',
        'version' => '2.3.2',
        'description' => 'Allows to synchronize portions of Grav with Git Repositories (GitHub, BitBucket, GitLab)',
        'icon' => 'git',
        'author' => [
            'name' => 'Trilby Media, LLC',
            'email' => 'hello@trilby.media',
            'url' => 'http://trilby.media'
        ],
        'homepage' => 'http://trilby.media',
        'keywords' => 'grav, plugin, git, sync, github, bitbucket, gitlab',
        'issues' => 'https://github.com/trilbymedia/grav-plugin-git-sync/issues',
        'docs' => 'https://github.com/trilbymedia/grav-plugin-git-sync',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.0'
            ],
            1 => [
                'name' => 'form',
                'version' => '>=2.16.3'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'Basic' => [
                    'type' => 'section',
                    'title' => 'Basic Settings',
                    'underline' => true
                ],
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin Status',
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
                'folders' => [
                    'type' => 'select',
                    'multiple' => true,
                    'label' => 'Folders to Sync',
                    'classes' => 'fancy',
                    'description' => 'Removing folders after they have been synced may cause undesired results.',
                    'default' => [
                        0 => 'pages'
                    ],
                    'options' => [
                        0 => 'pages',
                        1 => 'themes',
                        2 => 'plugins',
                        3 => 'config',
                        4 => 'data'
                    ],
                    'selectize' => [
                        'create' => true
                    ],
                    'validate' => [
                        'type' => 'commalist'
                    ]
                ],
                'Sync' => [
                    'type' => 'section',
                    'title' => 'Automatic Synchronization Settings',
                    'underline' => true
                ],
                'SyncNotice' => [
                    'type' => 'hidden',
                    'markdown' => true,
                    'text' => '! To improve the speed of saving pages you can disable automatic sync. Then, changes to a page will not be sent to the remote repository on every save. To sync your changes to the repository tap the GitSync button (<i class="fa fa-git"></i>) in the top left of the Administration Panel, or use the below Scheduler option to add the GitSync Syncronization Job to the Scheduler (<strong>Grav 1.6 required</strong>).
'
                ],
                'sync.on_save' => [
                    'type' => 'toggle',
                    'label' => 'Sync on Page Save',
                    'help' => 'Sync with the remote directory when a page is saved through the admin',
                    'default' => 1,
                    'highlight' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'sync.on_delete' => [
                    'type' => 'toggle',
                    'label' => 'Sync on Page Delete',
                    'help' => 'Sync with the remote directory when a page is deleted through the admin',
                    'default' => 1,
                    'highlight' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'sync.on_media' => [
                    'type' => 'toggle',
                    'label' => 'Sync on Media Changes',
                    'help' => 'Sync with the remote directory when a media is uploaded or deleted through the admin immediately (instead of only syncing when the page is saved)',
                    'default' => 1,
                    'highlight' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'sync.cron_enable' => [
                    'type' => 'toggle',
                    'label' => 'Add Sync to Scheduler',
                    'help' => 'Add GitSync Job to the Scheduler so it can automatically perform synchronization at the given time',
                    'default' => 0,
                    'highlight' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'sync.cron_at' => [
                    'type' => 'cron',
                    'label' => 'Run Sync at',
                    'help' => 'When should the Scheduler run the automatic GitSync synchronization job',
                    'default' => '0 12,23 * * *'
                ],
                'Repo' => [
                    'type' => 'section',
                    'title' => 'Git Repository Settings',
                    'underline' => true
                ],
                'local_repository' => [
                    'type' => 'hidden',
                    'multiple' => false,
                    'size' => 'medium',
                    'label' => 'Local Repository Path'
                ],
                'repository' => [
                    'type' => 'text',
                    'label' => 'Git Repository',
                    'placeholder' => 'https://github.com/user/repository.git'
                ],
                'no_user' => [
                    'type' => 'toggle',
                    'label' => 'User not required',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'description' => 'With this setting enabled, the user can be left blank and it will be ignored from the authentication. Useful when only needing access tokens `token@host` rather than `user:password@host`'
                ],
                'user' => [
                    'type' => 'text',
                    'label' => 'Git User',
                    'placeholder' => 'Username, not email',
                    'autocomplete' => 'off'
                ],
                'password' => [
                    'type' => 'enc-password',
                    'label' => 'Git Password or Token',
                    'placeholder' => 'Your Git Password or Token',
                    'description' => 'Enter your password or token to encrypt and securely store it, then save the settings. It will not show up here for security reasons.',
                    'autocomplete' => 'off'
                ],
                'webhook' => [
                    'type' => 'text',
                    'label' => 'Repository Web Hook URL',
                    'placeholder' => '/_git-sync',
                    'data-default@' => '\\Grav\\Plugin\\GitSyncPlugin::generateRandomWebhook'
                ],
                'webhook_enabled' => [
                    'type' => 'toggle',
                    'label' => 'Web Hook Secret',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'description' => 'With this setting enabled, only authorized webhook calls will be able to trigger a synchronization (recommended)'
                ],
                'webhook_secret' => [
                    'type' => 'text',
                    'label' => 'Repository Web Hook Secret',
                    'placeholder' => 'Your Web Hook Secret',
                    'data-default@' => '\\Grav\\Plugin\\GitSyncPlugin::generateWebhookSecret',
                    'description' => 'You can either use this randomly generated string or enter your own secret. <br /> **Bitbucket** does not yet support Webhook Secrets.',
                    'markdown' => true
                ],
                'Advanced' => [
                    'type' => 'section',
                    'title' => 'Advanced Git Settings',
                    'underline' => true
                ],
                'branch' => [
                    'type' => 'text',
                    'default' => 'master',
                    'label' => 'Local Branch',
                    'placeholder' => 'master'
                ],
                'remote.name' => [
                    'type' => 'text',
                    'default' => 'origin',
                    'label' => 'Remote Name',
                    'placeholder' => 'origin'
                ],
                'remote.branch' => [
                    'type' => 'text',
                    'default' => 'master',
                    'label' => 'Remote Branch',
                    'placeholder' => 'master'
                ],
                'git.author' => [
                    'type' => 'select',
                    'default' => 'gituser',
                    'label' => 'Commits Author',
                    'options' => [
                        'gituser' => 'Use Git User Name',
                        'gitsync' => 'Use GitSync Committer Name',
                        'gravuser' => 'Use Grav User Name',
                        'gravfull' => 'Use Grav User Full Name'
                    ]
                ],
                'git.message' => [
                    'type' => 'text',
                    'default' => '(Grav GitSync) Automatic Commit',
                    'label' => 'Commit message',
                    'placeholder' => '(Grav GitSync) Automatic Commit',
                    'help' => 'You can use {{pageTitle}} or {{pageRoute}} in your message as placeholders for the title or route of the page being saved'
                ],
                'git.name' => [
                    'type' => 'text',
                    'default' => 'GitSync',
                    'label' => 'Committer Name',
                    'placeholder' => 'GitSync'
                ],
                'git.email' => [
                    'type' => 'text',
                    'default' => 'git-sync@trilby.media',
                    'label' => 'Committer Email',
                    'placeholder' => 'git-sync@trilby.media'
                ],
                'git.bin' => [
                    'type' => 'text',
                    'default' => 'git',
                    'label' => 'Git Binary Path',
                    'help' => 'If the default `git` command doesn\'t work on your machine or if you want to specify a custom path, do it in here',
                    'placeholder' => '/usr/bin/git'
                ],
                'git.ignore' => [
                    'type' => 'textarea',
                    'label' => 'Git Ignore',
                    'help' => 'Add custom git ignore rules to go along with GitSync. One per line',
                    'rows' => 6,
                    'placeholder' => 'node_modules
/.idea
'
                ],
                'git.private_key' => [
                    'type' => 'text',
                    'label' => 'Private SSH Key',
                    'placeholder' => '~/.ssh/id_rsa',
                    'markdown' => true,
                    'description' => 'In order to be able to sparse-checkout and push changes, it is expected you have an ssh-key configured for accessing the repository. This is usually found under `~/.ssh` and it needs to be configured for the same user that runs the web-server. <br /> <br /> Point it to the secret (not the public) and make also sure you have strict permissions to the file. (`-rw-------`). <br /> <br /> Example: `private_key: /home/www-data/.ssh/id_rsa`<br /> <br /> **IMPORTANT**: SSH keys with passphrase are __NOT__ supported. To remove a passphrase, run the `ssh-keygen -p` command and when asked for the new passphrase leave blank and return.
'
                ],
                'logging' => [
                    'type' => 'toggle',
                    'default' => 0,
                    'label' => 'Log Git Commands',
                    'help' => 'Logs git commands. Useful to debug and troubleshoot git execution',
                    'highlight' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'Actions' => [
                    'type' => 'section',
                    'title' => 'Actions',
                    'underline' => true
                ],
                '_wizard' => [
                    'type' => 'git-wizard',
                    'label' => 'Text Variable',
                    'help' => 'Text to add to the top of a page'
                ]
            ]
        ]
    ]
];
