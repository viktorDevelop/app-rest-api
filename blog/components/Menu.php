<?php
namespace blog\components;

use blog\core\Component;
use blog\core\View;
use blog\models\CategoryModel;

class Menu extends Component
{
    public function topMenu()
    {
        $categoryList = new CategoryModel();
        $result =  $categoryList->getByList();
        $this->view->arResult = $result;
        return $this->view->render('blog/menu/top.menu');
    }


}