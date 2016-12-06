<?php
/**
 * Yii2 module for language switching
 *
 * @link      https://github.com/hiqdev/yii2-language
 * @package   yii2-language
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\yii2\language\controllers;

class LanguageController extends \yii\web\Controller
{
    public function actions()
    {
        return [
            'select' => [
                'class' => \hiqdev\yii2\language\actions\SelectAction::class,
            ],
        ];
    }
}
