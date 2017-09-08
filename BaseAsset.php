<?php
namespace kl83\adminlte;

class BaseAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/kl83/yii2-adminlte/dist';
    public $depends = [ 'kl83\adminlte\AdminLTEAsset' ];
    public $js = [
        'js/base.js',
    ];
    public $css = [

    ];
}
