<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var array $languages */
/* @var string $language */
/* @var string $selectUrl */

?>
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <?= strtoupper(substr($language, 0, 2)) ?>
</a>
<ul class="dropdown-menu">
    <?php if (is_array($items)) : ?>
        <?php foreach ($items as $code => $item): ?>
            <li class="header">
                <?= Html::a(
                    $item['label'], $item['url'],
                    ['class' => empty($item['active']) ? '' : 'text-bold']
                ) ?>
            </li>
        <?php endforeach ?>
    <?php endif ?>
</ul>
