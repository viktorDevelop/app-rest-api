<?php

namespace core\afabrica\PageElements;

class MenuAdmin implements \core\afabrica\interfaces\Menu
{

    public function setItemsMenu()
    {
        $aMenu = [
            ['id'=>1,'title'=>'php','url'=>'/admin/php'],
            ['id'=>1,'title'=>'html','url'=>'/admin/html'],
            ['id'=>1,'title'=>'mysql','url'=>'/admin/mysql']
        ];

        echo '<pre>'; print_r($aMenu);

        return $aMenu;


    }

    public function setTemplate()
    {
        return '/templates/admin/top.menu';
    }


}