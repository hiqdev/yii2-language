<?php
/**
 * Yii2 module for language switching
 *
 * @link      https://github.com/hiqdev/yii2-language
 * @package   yii2-language
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\yii2\language\widgets;

use codemix\localeurls\UrlManager;
use yii\helpers\ArrayHelper;

/**
 * Language Menu widget.
 *
 * @property Module $module The module to be used, can be found by default.
 */
class LanguageMenu extends \yii\base\Widget
{
    public $items;

    public $view = 'LanguageMenu';

    public function run()
    {
        return $this->render($this->view, [
            'language'  => ArrayHelper::remove($this->items, 'language'),
            'items'     => $this->items,
        ]);
    }
}
