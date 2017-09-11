<?php

use kl83\adminlte\LayoutWidget;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $item array */

if ( isset($item['active']) ) {
    $active = (bool)$item['active'];
} else {
    $active = ! isset($item['items'])
        && isset($item['url'])
        && $_SERVER['REQUEST_URI'] == Url::to($item['url'])
        ? 'active' : '';
}

?>
<?php if ( isset($item['type']) && $item['type'] == LayoutWidget::SIDEBAR_MENU_ITEM_TYPE_HEADER ) : ?>
    <li class="header"><?= $item['text'] ?></li>
<?php else : ?>
    <li class="<?= isset($item['items']) ? 'treeview' : $active ?>">
        <?= $this->render('sidebar-menu-item-a', [ 'item' => $item ]) ?>
        <?php if ( isset($item['items']) ) : ?>
            <ul class="treeview-menu">
                <?php foreach ( $item['items'] as $subitem ) : ?>
                    <?= $this->render('sidebar-menu-item', [ 'item' => $subitem ]) ?>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </li>
<?php endif; ?>
