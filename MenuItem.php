<?php

namespace kl83\adminlte;

use yii\helpers\Url;
use yii\helpers\Html;

/**
 * Элемент меню.
 * @property bool $isActive Активен ли пункт меню.
 */
class MenuItem extends \yii\base\Widget {

    /**
     * Обычный элемент меню.
     */
    const TYPE_ITEM = 0;
    /**
     * Заголовок.
     */
    const TYPE_HEADER = 1;

    /**
     * @var int Тип элемента меню. self::TYPE_*
     */
    public $type;
    /**
     * @var string FA-icon.
     */
    public $icon;
    /**
     * @var string Текст метки элемента меню.
     */
    public $text;
    /**
     * @var array|string Url элемента меню.
     */
    public $url = 'javascript:;';
    /**
     * @var array Бэджи.
     */
    public $labels = [];
    /**
     * @var array|null Submenu.
     */
    public $items = [];
    /**
     * @var bool Активность элемента меню.
     */
    public $active;
    /**
     * @var array Html-аттрибуты элемента меню.
     */
    public $options = [];

    /**
     * @inheritdoc
     */
    public function run()
    {
        if ( $this->type == self::TYPE_HEADER ) {
            return $this->renderHeader();
        }
        return $this->renderItem();
    }

    /**
     * Заголовок.
     */
    private function renderHeader()
    {
        Html::addCssClass($this->options, 'header');
        return Html::tag('li', $this->renderIcon().$this->text, $this->options);
    }

    /**
     * @return string HTML-иконка.
     */
    private function renderIcon()
    {
        if ( $this->icon ) {
            if ( preg_match('~^fa-~', $this->icon) ) {
                return Html::tag('i', '', ['class' => "fa $this->icon"]);
            } elseif ( preg_match('~^glyphicon-~', $this->icon) ) {
                return Html::tag('i', '', ['class' => "glyphicon $this->icon"]);
            } else {
                return Html::tag('i', '', ['class' => $this->icon]);
            }
        }
    }

    /**
     * Элемент меню.
     */
    private function renderItem()
    {
        if ( $this->isActive ) {
            Html::addCssClass($this->options, 'active');
            if ( $this->items ) {
                Html::addCssClass($this->options, 'menu-open');
            }
        }
        if ( $this->items ) {
            Html::addCssClass($this->options, 'treeview');
        }
        $text = $this->renderIcon().' '.Html::tag('span', $this->text).$this->renderItemRightContainer();
        return Html::tag('li', Html::a($text, $this->url).$this->renderSubitems(), $this->options);
    }

    private function renderItemRightContainer()
    {
        $html = Html::beginTag('span', ['class' => 'pull-right-container']);
        if ( $this->items ) {
            $html .= Html::tag('i', '', ['class' => 'fa fa-angle-left pull-right']);
        }
        if ( isset($this->labels) ) {
        }
        $html .= Html::endTag('span');
        return $html;
    }

    /**
     * HTML подменю.
     * @return string
     */
    private function renderSubitems()
    {
        $subItems = '';
        if ( $this->items ) {
            $subItems .= Html::beginTag('ul', ['class' => 'treeview-menu']);
            foreach ( $this->items as $item ) {
                $subItems .= self::widget($item);
            }
            $subItems .= Html::endTag('ul');
        }
        return $subItems;
    }

    /**
     * Активен ли пункт меню.
     * @return bool
     */
    protected function getIsActive()
    {
        if ( $this->active == true ) {
            return true;
        }
        if ( $this->items ) {
            foreach ( $this->items as $item ) {
                $cItem = new self($item);
                if ( $cItem->isActive ) {
                    return true;
                }
            }
        } elseif ( is_array($this->url) ) {
            return $this->url[0] == Url::current()[0];
        }
        return false;
    }

}
