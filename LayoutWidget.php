<?php
namespace kl83\adminlte;

class LayoutWidget extends \yii\base\Widget
{
    public $headerOptions = [
        'logo' => 'Admin LTE',
        'logoHref' => '/',
        'nav' => null,
    ];
    public $sidebarOtions = [
        'menu' => null,
    ];
    public $content = '';

    public function run()
    {
        BaseAsset::register($this->view);
        return $this->render('layout');
    }
}
