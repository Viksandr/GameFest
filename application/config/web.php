<?php

return [
    'id' => '',
    'name' => '',
    'basePath' => dirname(__DIR__),
    'vendorPath' => __DIR__ . '/../../vendor',
    'runtimePath' => __DIR__ . '/../../runtime',
    'viewPath' => __DIR__ . '/../views/pages',
    'layoutPath' => __DIR__ . '/../views/layouts',
    'aliases' => [],
    'components' => require(__DIR__ . '/web_components.php'),
    'modules' => require(__DIR__ . '/web_modules.php'),
    'params' => require(__DIR__ . '/params.php'),
    'bootstrap' => ['debug'],
];