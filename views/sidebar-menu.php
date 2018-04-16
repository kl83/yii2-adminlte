<?php

use kl83\adminlte\MenuItem;

/* @var $this \yii\web\View */
/* @var $items array */

$widget = $this->context;
?>
<ul class="sidebar-menu" data-widget="tree">
    <?php foreach ( $items as $item ) : ?>
        <?= MenuItem::widget($item) ?>
    <?php endforeach; ?>
</ul>
