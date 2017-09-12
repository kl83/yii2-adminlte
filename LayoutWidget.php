<?php
namespace kl83\adminlte;

class LayoutWidget extends \yii\base\Widget
{
    const SKIN_BLUE = 'skin-blue';
    const SKIN_BLACK = 'skin-black';
    const SKIN_PURPLE = 'skin-purple';
    const SKIN_GREEN = 'skin-green';
    const SKIN_RED = 'skin-red';
    const SKIN_YELLOW = 'skin-yellow';
    const SKIN_BLUE_LIGHT = 'skin-blue-light';
    const SKIN_BLACK_LIGHT = 'skin-black-light';
    const SKIN_PURPLE_LIGHT = 'skin-purple-light';
    const SKIN_GREEN_LIGHT = 'skin-green-light';
    const SKIN_RED_LIGHT = 'skin-red-light';
    const SKIN_YELLOW_LIGHT = 'skin-yellow-light';

    const BG_GRAY = 'bg-gray';
    const BG_GRAY_LIGHT = 'bg-gray-light';
    const BG_BLACK = 'bg-black';
    const BG_RED = 'bg-red';
    const BG_YELLOW = 'bg-yellow';
    const BG_AQUA = 'bg-aqua';
    const BG_BLUE = 'bg-blue';
    const BG_LIGHT_BLUE = 'bg-light-blue';
    const BG_GREEN = 'bg-green';
    const BG_NAVY = 'bg-navy';
    const BG_TEAL = 'bg-teal';
    const BG_OLIVE = 'bg-olive';
    const BG_LIME = 'bg-lime';
    const BG_ORANGE = 'bg-orange';
    const BG_FUCHSIA = 'bg-fuchsia';
    const BG_PURPLE = 'bg-purple';
    const BG_MAROON = 'bg-maroon';

    const SIDEBAR_MENU_ITEM_TYPE_ITEM = 0;
    const SIDEBAR_MENU_ITEM_TYPE_HEADER = 1;

    /**
     * Body tag attributes
     * @var array
     */
    public $bodyOptions = [
        'class' => 'fixed',
    ];

    /**
     * AdminLTE skin. See SKIN_* constants.
     * @var string
     */
    public $skin = self::SKIN_BLUE;

    /**
     * Company name or something else.
     * @var string
     */
    public $logo = 'AdminLTE';

    /**
     * Link to home backend page.
     * @var string|array
     */
    public $logoUrl = '/';

    /**
     * Configuration of yii\bootstrap\Nav to display in header.
     * @var array
     */
    public $headerNav = [
        'options' => [
            'class' => 'nav navbar-nav',
        ],
    ];

    /**
     * Sidebar menu. See example in tests/app/views/layouts/main.php.
     * @var array
     */
    public $sidebarMenu;

    /**
     * Page header. Default is $this->view->title. If is must by empty, then set this property to null.
     * @var string
     */
    public $pageHeader = false;

    /**
     * Configuration of yii\widgets\Breadcrumbs. Or only 'links' attribute.
     * @var array
     */
    public $breadcrumbs;

    /**
     * Content.
     * @var string
     */
    public $content = '';

    public function __construct($config = [])
    {
        if ( isset($config['bodyOptions']) ) {
            $config['bodyOptions'] = array_merge($this->bodyOptions, $config['bodyOptions']);
        }
        if ( isset($config['headerNav']) ) {
            $config['headerNav'] = array_merge_recursive($this->headerNav, $config['headerNav']);
        }
        parent::__construct($config);
    }

    public function run()
    {
        BaseAsset::register($this->view);
        $bodyOptions = $this->bodyOptions;
        $bodyOptions['class'] .= " $this->skin";
        $pageHeader = $this->pageHeader === false ? $this->view->title : $this->pageHeader ;
        if ( is_array($this->breadcrumbs) && $this->breadcrumbs ) {
            if ( isset($this->breadcrumbs['links']) ) {
                $breadcrumbs = $this->breadcrumbs;
            } else {
                $breadcrumbs = [ 'links' => $this->breadcrumbs ];
            }
        } else {
            $breadcrumbs = [];
        }
        return $this->render('layout', [
            'bodyOptions' => $bodyOptions,
            'logo' => $this->logo,
            'logoUrl' => $this->logoUrl,
            'headerNav' => $this->headerNav,
            'sidebarMenu' => $this->sidebarMenu,
            'pageHeader' => $pageHeader,
            'breadcrumbs' => $breadcrumbs,
            'content' => $this->content,
        ]);
    }
}
