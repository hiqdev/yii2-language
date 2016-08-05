<?php

namespace hiqdev\yii2\language;

/**
 * Language Module.
 *
 * Example application configuration:
 *
 * ```php
 * 'modules' => [
 *     'language' => [
 *         'class' => 'hiqdev\yii2\merchant\Module',
 *         'languages' => [
 *             'en' => 'English',
 *             'ru' => 'Русский',
 *         ],
 *     ],
 * ],
 * ```
 */
class Module extends \yii\base\Module
{
    public $languages = [];
}
