<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;

/* @var $this \yii\web\View */
/* @var $widget \kl83\adminlte\LayoutWidget */
/* @var $bodyOptions array */
/* @var $logo string */
/* @var $logoUrl array|string */
/* @var $headerNav array */
/* @var $content string */

$widget = $this->context;
?>
<?= Html::beginTag('body', $bodyOptions) ?>
    <?php $this->beginBody() ?>
<?= $_SERVER['REQUEST_URI'] ?>
    <div class="wrapper">
        <header class="main-header">
            <?= Html::a($logo, $logoUrl, [ 'class' => 'logo' ]) ?>
            <nav class="navbar navbar-static-top">
                <div class="navbar-custom-menu">
                    <?php if ( $headerNav ) : ?>
                        <?= Nav::widget($headerNav) ?>
                    <?php endif; ?>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar">
                <?php if ( $sidebarMenu ) : ?>
                    <?= $this->render('sidebar-menu', [
                        'items' => $sidebarMenu,
                    ]) ?>
                <?php endif; ?>
            </section>
        </aside>
        <div class="content-wrapper">
            <div class="content">
                <?= $content ?>
            </div>
        </div>
    </div>
    <?php $this->endBody() ?>
<?= Html::endTag('body') ?>
