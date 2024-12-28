<?php
namespace blog\components;

use blog\core\Component;

class Category extends Component
{
    public function List()
    {
        $this->view->arResult = [];
        return $this->view->render('blog/category');
    }
}