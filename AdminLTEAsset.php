<?php
namespace kl83\adminlte;

class AdminLTEAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/admin-lte';
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];
    public function init()
    {
        $min = YII_DEBUG ? '' : '.min';
        $this->css = [
            "dist/css/AdminLTE$min.css",
            "dist/css/skins/_all-skins$min.css",
        ];
        $this->js = [
            "dist/js/app$min.js",
            "plugins/slimScroll/jquery.slimscroll$min.js",
            "plugins/jQueryUI/jquery-ui$min.js",
        ];
    }
}
