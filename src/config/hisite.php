<?php

return [
    'modules' => [
        'language' => [
            'class' => \hiqdev\yii2\language\Module::class,
        ],
    ],
    'components' => [
        'themeManager' => [
            'pathMap' => [
                '@hiqdev/yii2/language/widgets/views' => '$themedWidgetPaths',
            ],
        ],
    ],
    'container' => [
        'definitions' => [
            'LanguageMenu' => \hiqdev\yii2\language\widgets\LanguageMenu::class,
        ],
    ],
];
