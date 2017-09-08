<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $widget \kl83\adminlte\LayoutWidget */

$widget = $this->context;
?>
<div class="wrapper">
    <header class="main-header">
        <?= Html::a($widget->headerOptions['logo'], $widget->headerOptions['logoHref']) ?>
        <?php if ( $widget->headerOptions['nav'] ) : ?>
            <?= $widget->headerOptions['nav'] ?>
        <?php endif; ?>
    </header>
    <div class="sidebar-wrapper">
        <div class="main-sidebar">
            <div class="sidebar">

            </div>
        </div>
    </div>
    <div class="content-wrapper">
        <div class="content">
            <?= $widget->content ?>
        </div>
    </div>
</div>
