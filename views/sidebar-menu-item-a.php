<?php

use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $item array */

?>
<a href="<?= isset($item['url']) ? Url::to($item['url']) : '#' ?>">
    <?php if ( isset($item['icon']) ) : ?>
        <?php if ( preg_match('~^fa-~', $item['icon']) ) : ?>
            <i class="fa <?= $item['icon'] ?>"></i>
        <?php elseif ( preg_match('~^glyphicon-~', $item['icon']) ) : ?>
            <i class="glyphicon <?= $item['icon'] ?>"></i>
        <?php else : ?>
            <i class="<?= $item['icon'] ?>"></i>
        <?php endif; ?>
    <?php endif; ?>
    <span><?= $item['text'] ?></span>
    <span class="pull-right-container">
        <?php if ( isset($item['items']) ) : ?>
                <i class="fa fa-angle-left pull-right"></i>
        <?php endif; ?>
        <?php if ( isset($item['labels']) ) : ?>
            <?= $this->render('sidebar-menu-item-labels', [
                'item' => $item,
            ]) ?>
        <?php endif; ?>
    </span>
</a>
