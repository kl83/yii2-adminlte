<?php

/* @var $this \yii\web\View */
/* @var $items array */

$widget = $this->context;
?>
<ul class="sidebar-menu" data-widget="tree">
    <?php foreach ( $items as $item ) : ?>
        <?= $this->render('sidebar-menu-item', [ 'item' => $item ]) ?>
    <?php endforeach; ?>
</ul>
