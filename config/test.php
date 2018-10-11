<?php

$params = require __DIR__ . '/params.php';

/**
 * Application configuration shared by all test types
 */
return [
    'id' => 'basic-tests',
    'basePath' => dirname(__DIR__),
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'language' => 'en-US',
    'components' => [
        'assetManager' => [
            'basePath' => __DIR__ . '/../web/assets',
        ],
        'urlManager' => [
            'showScriptName' => true,
        ],
        'user' => [
            'identityClass' => 'app\models\User',
        ],
        'request' => [
            'cookieValidationKey' => 'test',
            'enableCsrfValidation' => false,
        ],
        'github' => ['class' => 'app\components\platforms\Github'],
        'gitlab' => ['class' => 'app\components\platforms\Gitlab'],
        'bitbucket' => ['class' => 'app\components\platforms\Bitbucket'],
        'searcher' => ['class' => 'app\components\Searcher'],
        'factory' => ['class' => 'app\components\Factory']
    ],
    'params' => $params,
];
