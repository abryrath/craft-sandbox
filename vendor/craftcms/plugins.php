<?php

$vendorDir = dirname(__DIR__);

return array (
  'unionco/craft-sync-db' => 
  array (
    'class' => 'unionco\\craftsyncdb\\SyncDb',
    'basePath' => $vendorDir . '/unionco/craft-sync-db/src',
    'handle' => 'sync-db',
    'aliases' => 
    array (
      '@unionco/craftsyncdb' => $vendorDir . '/unionco/craft-sync-db/src',
    ),
    'name' => 'SyncDb',
    'version' => 'dev-dev',
    'description' => 'Craft 3 plugin to sync database across environments',
    'developer' => 'Abry Rath<abryrath@gmail.com>',
    'developerUrl' => 'https://github.com/unionco',
    'documentationUrl' => 'https://github.com/unionco/craft-sync-db',
    'changelogUrl' => '???',
    'hasCpSettings' => false,
    'hasCpSection' => false,
    'components' => 
    array (
      'sync' => 'unionco\\craftsyncdb\\services\\Sync',
    ),
  ),
);
