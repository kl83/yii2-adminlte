<?php

namespace kl83\adminlte\assets;

use yii\bootstrap\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class AdminLTEAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';
    public $css = [
        'css/AdminLTE.min.css',
        'css/skins/_all-skins.min.css',
    ];
    public $js = ['js/adminlte.min.js'];
    public $depends = [
        BootstrapAsset::class,
        JqueryAsset::class,
    ];
}
