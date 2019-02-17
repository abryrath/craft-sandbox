<?php

/**
 *  This is the default configuration that will be copied into your Craft
 *  config path, if it does not exist. Any changes to this file will be
 *  overwritten
 **/

return [
    'remotes' => [
        'production' => [
            'username' => 'abry',
            'host' => 'abryrath.com',
            'root' => '/home/abry/Sites/craft-sandbox',
            'backupDirectory' => '/home/abry/Sites/craft-sandbox/storage/backups/databases/',
            'port' => 22,
            'phpPath' => '/usr/local/bin/php',
            'mysqlDumpPath' => '/usr/bin/mysqldump',
        ],
        // 'staging' => [
        //     'username' => 'user',
        //     'host' => 'staging.example.com',
        //     'root' => '/path/to/project/',
        //     'backupDirectory' => '/path/to/project/storage/backups/databases/',
        //     'port' => 22,
        //     'phpPath' => '/usr/local/bin/php',
        //     'mysqlDumpPath' => '/usr/bin/mysqldump',
        // ],
    ],
];
