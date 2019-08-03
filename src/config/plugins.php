<?php
return [
    'restapi' => [
        'class' => \blink\restapi\Plugin::class,
        'apiNamespace' => 'app\http\apis',
        'apiPath' => 'src/http/apis',
        'routePath' => 'src/http/routes.php',
        'templatePath' => 'docs/openapi.json',
    ]
];
