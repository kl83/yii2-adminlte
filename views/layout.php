<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $bodyOptions array */
/* @var $logo string */
/* @var $logoUrl array|string */
/* @var $headerNav array */
/* @var $pageHeader string */
/* @var $breadcrumbs array */
/* @var $content string */
/* @var $wrapContent boolean */

?>
<?= Html::beginTag('body', $bodyOptions) ?>
    <?php $this->beginBody() ?>
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
            <div class="content-header">
                <h1><?= $pageHeader ?></h1>
                <?= Breadcrumbs::widget($breadcrumbs) ?>
            </div>
            <div class="content">
                <?php if ( $wrapContent ) : ?>
                    <div class="box">
                        <div class="box-body">
                            <?= $content ?>
                        </div>
                    </div>
                <?php else : ?>
                    <?= $content ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php $this->endBody() ?>
<?= Html::endTag('body') ?>
