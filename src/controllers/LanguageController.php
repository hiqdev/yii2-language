<?php

namespace hiqdev\yii2\language\controllers;

class LanguageController extends \yii\web\Controller
{
    public function actions()
    {
        return [
            'select' => [
                'class' => \hiqdev\yii2\language\actions\SelectAction::class,
                'module' => $this->module,
            ],
        ];
    }
}
