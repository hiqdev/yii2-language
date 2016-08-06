<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>
<li class="dropdown language-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <?= strtoupper(substr($language, 0, 2)) ?>
    </a>
    <ul class="dropdown-menu">
        <?php foreach ($languages as $code => $lang): ?>
            <li class="header">
                <?= Html::a(
                    $lang,
                    Url::to([$selectUrl, 'language' => $code]),
                    ['class' => mb_stristr($language, $code) ? 'text-bold' : '']
                ) ?>
            </li>
        <?php endforeach ?>
    </ul>
</li>
