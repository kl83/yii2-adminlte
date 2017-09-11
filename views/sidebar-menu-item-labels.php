<?php

/* @var $this \yii\web\View */
/* @var $item array */

?>
<?php if ( is_array($item['labels']) ) : ?>
    <?php if ( isset($item['labels']['text']) ) : ?>
        <?= $this->render('sidebar-menu-item-label', [
            'text' => $item['labels']['text'],
            'bgColor' => $item['labels']['bg-color'],
        ]) ?>
    <?php else : ?>
        <?php foreach ( $item['labels'] as $label ) : ?>
            <?php if ( is_array($label) ) : ?>
                <?= $this->render('sidebar-menu-item-label', [
                    'text' => $label['text'],
                    'bgColor' => isset($label['bg-color']) ? $label['bg-color'] : null,
                ]) ?>
            <?php else : ?>
                <?= $this->render('sidebar-menu-item-label', [
                    'text' => $label,
                ]) ?>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
<?php else: ?>
    <?= $this->render('sidebar-menu-item-label', [
        'text' => $item['labels'],
    ]) ?>
<?php endif; ?>
