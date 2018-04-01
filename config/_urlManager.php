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
        ['pattern'=>'/specials',    'route'=>'site/specials'],
        ['pattern'=>'/test',        'route'=>'site/test'],
        ['pattern'=>'/contacts',    'route'=>'site/contacts'],
        ['pattern'=>'/payment',     'route'=>'site/payment'],
        ['pattern'=>'/success',     'route'=>'site/success'],
    ],
    // Ignore / Filter route pattern's
    'ignoreLanguageUrlPatterns' => [
        '#^admin/#' => '#^admin/#',
        '#^gii/#' => '#^gii/#',
    ],
];
