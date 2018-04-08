<?php
return [
    'class' => 'codemix\localeurls\UrlManager',
    'enablePrettyUrl'=>true,
    'showScriptName'=>false,
    'enableDefaultLanguageUrlCode' => false,
    'enableLanguageDetection' => true,
    'enableLanguagePersistence' => true,
    'languages' => ['pl' => 'pl', 'en' => 'en'],
    'rules'=> [
        // Pages
        ['pattern'=>'/',            'route'=>'site/index'],
        ['pattern'=>'/about',       'route'=>'site/about'],
        ['pattern'=>'/cart',        'route'=>'site/cart'],
        ['pattern'=>'/shop',        'route'=>'site/shop'],
        ['pattern'=>'/special',     'route'=>'site/special'],
        ['pattern'=>'/test',        'route'=>'site/test'],
        ['pattern'=>'/contact',     'route'=>'site/contact'],
        ['pattern'=>'/payment',     'route'=>'site/payment'],
        ['pattern'=>'/success',     'route'=>'site/success'],
        ['pattern'=>'/notify',      'route'=>'site/notify'],
        ['pattern'=>'/test',        'route'=>'site/test'],
        ['pattern'=>'/cancel',      'route'=>'site/cancel'],
    ],
    // Ignore / Filter route pattern's
    'ignoreLanguageUrlPatterns' => [
        '#^admin/#' => '#^admin/#',
        '#^gii/#' => '#^gii/#',
        '#^file-storage/#' => '#^file-storage/#',
        '#^notify#' => '#^notify#',
    ],
];
