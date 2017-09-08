<?php
namespace kl83\adminlte;

class AdminLTEAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/admin-lte/dist';
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];
    public function init()
    {
        $min = YII_DEBUG ? '' : '.min';
        $this->css = [
            "css/AdminLTE$min.css",
            "css/skins/_all-skins$min.css",
        ];
        $this->js = [
            "js/app$min.js",
        ];
    }
}
