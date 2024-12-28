<?php
namespace blog\components;

use blog\core\Component;
use blog\core\View;

class Menu extends Component
{
    public function topMenu()
    {
        $this->view->arResult = ['title'=>'php'];
        return $this->view->render('blog/menu/top.menu');
    }


}