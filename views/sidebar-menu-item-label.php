<?php

use kl83\adminlte\LayoutWidget;

/* @var $this \yii\web\View */
/* @var $text string */
/* @var $bgColor string */

?>
<small class="label pull-right <?= isset($bgColor) && $bgColor ? $bgColor : LayoutWidget::BG_GREEN ?>">
    <?= $text ?>
</small>
