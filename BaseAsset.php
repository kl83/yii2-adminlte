<?php
namespace kl83\adminlte;

class BaseAsset extends \yii\web\AssetBundle
{
    public $depends = [
        'kl83\adminlte\AdminLTEAsset',
    ];
    public $js = [
        'js/base.js',
    ];
    public $css = [

    ];
    public function init()
    {
        if ( YII_DEBUG ) {
            $this->publishOptions['forceCopy'] = true;
        }
        $this->sourcePath = __DIR__ . '/dist';
        parent::init();
    }
}
