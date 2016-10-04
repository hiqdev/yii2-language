<?php

return [
    'modules' => [
        'language' => [
            'class' => \hiqdev\yii2\language\Module::class,
        ],
    ],
    'components' => [
        'themeManager' => [
            'widgets' => [
                'LanguageMenu' => \hiqdev\yii2\language\widgets\LanguageMenu::class,
            ],
            'pathMap' => [
                '@hiqdev/yii2/language/widgets/views' => '$themedWidgetPaths',
            ],
        ],
    ],
];
