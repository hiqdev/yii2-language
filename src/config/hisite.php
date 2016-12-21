<?php
/**
 * Yii2 module for language switching
 *
 * @link      https://github.com/hiqdev/yii2-language
 * @package   yii2-language
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

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
            \hiqdev\thememanager\menus\AbstractLanguageMenu::class => [
                'class' => \hiqdev\yii2\language\menus\LanguageMenu::class,
            ],
        ],
    ],
];
