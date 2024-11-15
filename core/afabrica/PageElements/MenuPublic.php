<?php
namespace core\afabrica\PageElements;

use core\afabrica\interfaces\Menu;

class MenuPublic implements Menu
{

    public function setItemsMenu()
    {
        $aMenu = [
            ['id'=>1,'title'=>'php','url'=>'/php'],
            ['id'=>1,'title'=>'html','url'=>'/html'],
            ['id'=>1,'title'=>'mysql','url'=>'/mysql']
        ];

        echo '<pre>';print_r($aMenu);
        return $aMenu;
    }

    public function setTemplate()
    {
        echo '/templates/blog/top.menu';
    }
}