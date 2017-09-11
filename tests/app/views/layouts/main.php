<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use kl83\adminlte\LayoutWidget;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<?= LayoutWidget::widget([
    'bodyOptions' => [
        'class' => 'fixed hold-transition sidebar-mini',
    ],
    'skin' => LayoutWidget::SKIN_GREEN,
    'headerNav' => [
        'items' => [
            [
                'label' => 'Home',
                'url' => ['site/index'],
            ],
            [
                'label' => 'Dropdown',
                'items' => [
                     ['label' => 'Level 1 - Dropdown A', 'url' => '#'],
                     '<li class="divider"></li>',
                     '<li class="dropdown-header">Dropdown Header</li>',
                     ['label' => 'Level 1 - Dropdown B', 'url' => '#'],
                ],
            ],
            [
                'label' => 'Login',
                'url' => ['site/login'],
                'visible' => Yii::$app->user->isGuest,
            ],
        ],
    ],
    'sidebarMenu' => [
        [
            'type' => LayoutWidget::SIDEBAR_MENU_ITEM_TYPE_HEADER,
            'text' => 'MAIN NAVIGATION',
        ], [
            'text' => 'Dashboard',
            'icon' => 'fa-dashboard',
            'items' => [
                [
                    'text' => 'Dashboard v1',
                    'url' => ['site/index'],
                ],
                [
                    'text' => 'Dashboard v2',
                    'url' => '#',
                ],
            ],
        ], [
            'text' => 'Layout Options',
            'url' => '#',
            'icon' => 'fa-files-o',
            'labels' => '4',
            'items' => [
                [
                    'text' => 'Top Navigation',
                    'url' => '#',
                    'labels' => [ 'text' => '13', 'bg-color' => LayoutWidget::BG_RED ],
                ], [
                    'text' => 'Boxed',
                    'url' => '#',
                ], [
                    'text' => 'Fixed',
                    'url' => '#',
                ], [
                    'text' => 'Collapsed Sidebar',
                    'url' => '#',
                ],
            ],
        ], [
            'text' => 'Widgets',
            'url' => '#',
            'icon' => 'fa-th',
            'labels' => [
                [
                    'text' => 'new',
                ],
            ],
        ], [
            'text' => 'Charts',
            'url' => '#',
            'icon' => 'fa-pie-chart',
            'items' => [
                [
                    'text' => 'ChartJS',
                    'url' => '#',
                ], [
                    'text' => 'Morris',
                    'url' => '#',
                ], [
                    'text' => 'Flot',
                    'url' => '#',
                ], [
                    'text' => 'Inline charts',
                    'url' => '#',
                ],
            ],
        ], [
            'text' => 'UI Elements',
            'url' => '#',
            'icon' => 'fa-laptop',
            'items' => [
                [
                    'text' => 'General',
                    'url' => '#',
                ], [
                    'text' => 'Icons',
                    'url' => '#',
                ], [
                    'text' => 'Buttons',
                    'url' => '#',
                ], [
                    'text' => 'Sliders',
                    'url' => '#',
                ], [
                    'text' => 'Timeline',
                    'url' => '#',
                ], [
                    'text' => 'Modals',
                    'url' => '#',
                ],
            ],
        ], [
            'text' => 'Forms',
            'url' => '#',
            'icon' => 'fa-edit',
            'items' => [
                [
                    'text' => 'General Elements',
                    'url' => '#',
                ], [
                    'text' => 'Advanced Elements',
                    'url' => '#',
                ], [
                    'text' => 'Editors',
                    'url' => '#',
                ],
            ],
        ], [
            'text' => 'Tables',
            'url' => '#',
            'icon' => 'fa-table',
            'items' => [
                [
                    'text' => 'Simple tables',
                    'url' => '#',
                ], [
                    'text' => 'Data tables',
                    'url' => '#',
                ],
            ],
        ], [
            'text' => 'Calendar',
            'url' => '#',
            'icon' => 'fa-calendar',
            'labels' => [ '3', '17' ],
        ], [
            'text' => 'Mailbox',
            'url' => '#',
            'icon' => 'fa-envelope',
            'labels' => [
                [ 'text' => '12' ],
                [ 'text' => '16' ],
                [ 'text' => '5' ],
            ],
        ], [
            'text' => 'Examples',
            'url' => '#',
            'icon' => 'fa-folder',
            'items' => [
                [
                    'text' => 'Invoice',
                    'url' => '#',
                ], [
                    'text' => 'Profile',
                    'url' => '#',
                ], [
                    'text' => 'Login',
                    'url' => '#',
                ], [
                    'text' => 'Register',
                    'url' => '#',
                ], [
                    'text' => 'Lockscreen',
                    'url' => '#',
                ], [
                    'text' => '404 Error',
                    'url' => '#',
                ], [
                    'text' => '500 Error',
                    'url' => '#',
                ], [
                    'text' => 'Blank Page',
                    'url' => '#',
                ], [
                    'text' => 'Pace Page',
                    'url' => '#',
                ],
            ],
        ], [
            'text' => 'Multilevel',
            'url' => '#',
            'icon' => 'fa-share',
            'items' => [
                [
                    'text' => 'Level One',
                    'url' => '#',
                ], [
                    'text' => 'Level One',
                    'url' => '#',
                    'items' => [
                        [
                            'text' => 'Level Two',
                            'url' => '#',
                            'items' => [
                                [
                                    'text' => 'Level Three',
                                    'url' => '#',
                                ], [
                                    'text' => 'Level Three',
                                    'url' => '#',
                                ],
                            ],
                        ],
                    ],
                ], [
                    'text' => 'Level One',
                    'url' => '#',
                ],
            ],
        ], [
            'text' => 'Documentation',
            'url' => '#',
            'icon' => 'fa-book',
        ], [
            'type' => LayoutWidget::SIDEBAR_MENU_ITEM_TYPE_HEADER,
            'text' => 'LABELS',
        ], [
            'text' => 'Important',
            'url' => '#',
            'icon' => 'fa-book',
        ], [
            'text' => 'Warning',
            'url' => '#',
            'icon' => 'fa-book',
        ], [
            'text' => 'Information',
            'url' => '#',
            'icon' => 'fa-book',
        ],
    ],
    'content' => $content,
]) ?>
</html>
<?php $this->endPage() ?>
