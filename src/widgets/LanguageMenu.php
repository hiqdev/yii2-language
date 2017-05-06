<?php
/**
 * Yii2 module for language switching.
 *
 * @link      https://github.com/hiqdev/yii2-language
 * @package   yii2-language
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\yii2\language\widgets;

use yii\helpers\ArrayHelper;

/**
 * Language Menu widget.
 */
class LanguageMenu extends \yii\base\Widget
{
    public $items;

    public $viewFile = 'LanguageMenu';

    public function run()
    {
        return $this->render($this->viewFile, [
            'language'  => ArrayHelper::remove($this->items, 'language'),
            'items'     => $this->items,
        ]);
    }
}
