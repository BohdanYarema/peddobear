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
        ['pattern'=>'/', 'route'=>'site/index'],
        ['pattern'=>'/about', 'route'=>'site/about'],
        ['pattern'=>'/cart', 'route'=>'site/cart'],
    ]
];
